<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\File;
use App\User;
use App\Event;
use App\Registration;
use App\FunRunRegistration;
use App\FestivalRegistration;
use App\PublicationMedia;
use App\Article;
use DateTime;
use Mail;

class EodController extends Controller
{
    
    //signin
    public function signIn(Request $request)
    {
    	if(Auth::check()) {
    		return redirect()->route('eod.index');
    	}

    	$alert = '';
    	if ($request->has('alert')) {
    		$alert = $request->alert;
    	}
    	return view('eod-sign-in', array('alert' => $alert));
    }

    public function signInSubmit(Request $request)
    {
    	$user = User::where('username', $request->username)->where('role', '<>', 'U')->first();

    	if(!is_null($user)) {
	    	if(Auth::attempt([
	    		'username' => $request->username, 
	    		'password' => $request->password,
	    		'enabled' => true])) {
	    		return redirect()->back();
	    	}
	    }

    	return redirect()->route('eod.signIn', array('alert' => 'signInFail'));
    }

    //signout
    public function signOut($value='')
    {
    	Auth::logout();
    	return redirect()->route('eod.signIn');
    }

	public function index() {

		//check which admin signin
		if (Auth::check()) {
            $user = User::find(Auth::id());
            $role = $user->role;
            if($role === 'AF' || $role === 'AFR') {
                return redirect()->route('eod.payments');
            } else if($role === 'WR') {
                return redirect()->route('eod.articles');
            } 
        }
		return view('eod-index');
	}

	public function users(Request $request) {
		$users = User::where('role', '!=', 'U')
			->where('role', '!=', 'SA')->where('enabled', true)->get();

		$alert = '';
    	if ($request->has('alert')) {
    		$alert = $request->alert;
    	}

		return view('eod-users', array('users' => $users, 'alert' => $alert));
	}

	public function adminAdd(Request $request)
	{
		$user = User::where('username', $request->username)->first();
		$alert = "addSuccess";
		if(is_null($user)) {
			$user = new User();
			$user->username = $request->username;
			$user->password = bcrypt('Sp4r3Fkm');
			$user->role = $request->role;
			$user->created_date = new DateTime('today');
			$user->enabled = true;
			$user->save();
		} else {
			$alert = "addFail";
		}

		return redirect()->route('eod.users', array('alert' => $alert));
	}

	public function adminReset(Request $request)
	{
		$user = User::find($request->uid);
		$user->password = bcrypt('Sp4r3Fkm');
		$user->save();

		return redirect()->route('eod.users', array('alert' => 'passwordReseted'));
	}

	public function adminDelete(Request $request)
	{
		$user = User::find($request->uid);
		$user->delete();

		return redirect()->route('eod.users', array('alert' => 'adminDeleted'));
	}

	public function events(Request $request)
	{
		$events = Event::all();

		$alert = '';
    	if ($request->has('alert')) {
    		$alert = $request->alert;
    	}

		return view('eod-events', array('events' => $events, 
			'today' => new DateTime('today'), 'alert' => $alert));
	}

	public function eventAdd(Request $request)
	{
		$event = Event::where('name', $request->name)->first();
		$alert = 'addSuccess';
		if(is_null($event)) {
			$event = new Event();
			$event->name = $request->name;
			$event->start_date = DateTime::createFromFormat('d/m/Y', $request->startDate)->format('Y-m-d');
			$event->attendance_date = DateTime::createFromFormat('d/m/Y', $request->attendanceDate)->format('Y-m-d');
			$event->price = $request->price;
			$event->save();

		} else {
			$alert = 'addFail';
		}

		return redirect()->route('eod.events', array('alert' => $alert));
	}

	public function eventUpdate(Request $request)
	{
		$event = Event::find($request->eid);
		$event->start_date = DateTime::createFromFormat('d/m/Y', $request->startDate)->format('Y-m-d');
		$event->attendance_date = DateTime::createFromFormat('d/m/Y', $request->attendanceDate)->format('Y-m-d');
		$event->price = $request->price;
		$event->save();

		return redirect()->route('eod.events', array('alert' => 'eventUpdated'));
	}

	public function payments(Request $request)
	{
		$registrations = Registration::join('fun_run_registrations', 'registrations.id', '=', 'fun_run_registrations.registration_id')
			->where('registrations.status', 3)->select('registrations.*')->get();

		$alert = '';
    	if ($request->has('alert')) {
    		$alert = $request->alert;
    	}

		//check which user sign in
		$isFunRun = true;
		$user = User::find(Auth::id());
		if($user->role === 'AF') {
			$registrations = Registration::join('festival_registrations', 'registrations.id', '=', 'festival_registrations.registration_id')
				->where('registrations.status', 3)
				->where('festival_registrations.registration_fee', '>', 0)
				->select('registrations.*')->get();
			$isFunRun = false;
		}
		return view('eod-payments', array(
			'registrations' => $registrations, 'alert' => $alert, 'isFunRun' => $isFunRun
		));
	}

	public function paymentsApproval(Request $request)
	{
		$status = $request->status;

		$registration = Registration::find($request->rid);
		$registration->payment_proof = null;
		$registration->status = $status;
		$registration->save();

		$path = public_path().'/upload/'.$registration->registration_code;
		if(File::exists($path)) {
    		File::deleteDirectory($path);
    	}

    	$alert = 'reject';
    	if ($status == 4) {
    		$alert = 'approve';

    		$user = User::find(Auth::id());
			if($user->role === 'AFR') {
		        $runNumber = FunRunRegistration::max('run_number');
		        if(is_null($runNumber)) {
		        	$runNumber = 1218;
		        } else {
		        	$runNumber = $runNumber + 1;
		        }

		        $funRun = FunRunRegistration::where('registration_id', $registration->id)->first();
		        $funRun->run_number = $runNumber;
		        $funRun->save();

		        Mail::send('email-fun-run', 
		        	['registration' => $registration], 
		        	function($message) use ($registration) {
		        		$message->from('noreply@sparefkm.com', 'SPARE XII NEO');
		            	$message->to($registration->user->username);
		            	$message->subject('Fun Run Payment Confirmed');
		        });
			} else {
				Mail::send('email-festival', 
		        	['registration' => $registration], 
		        	function($message) use ($registration) {
		        		$message->from('noreply@sparefkm.com', 'SPARE XII NEO');
		            	$message->to($registration->user->username);
		            	$message->subject('Festival Payment Confirmed');
		        });
			}

    	}

		return redirect()->route('eod.payments', array('alert' => $alert));
	}

	public function attendance(Request $request)
	{
		$today = new DateTime('today');
		$registrations = [];
		$alert = '';
	    if ($request->has('alert')) {
	    	$alert = $request->alert;
	    }

		//check which user sign in
		$isFunRun = true;
		$user = User::find(Auth::id());
		if($user->role === 'AFR') {
			$event = Event::find(1);
			if($today >= $event->attendance_date) {
				$registrations = Registration::join('fun_run_registrations', 'registrations.id', '=', 'fun_run_registrations.registration_id')
					->where('registrations.status', 4)
					->where('fun_run_registrations.attend', false)
					->select('registrations.*')->get();
			}
		} else {
			$event = Event::find(2);
			if($today >= $event->attendance_date) {
				$registrations = Registration::join('festival_registrations', 'registrations.id', '=', 'festival_registrations.registration_id')
					->where('registrations.status', 4)
					->where('festival_registrations.attend', false)
					->select('registrations.*')->get();
			}
			$isFunRun = false;
		}

		return view('eod-attendance', array(
			'registrations' => $registrations, 
			'isFunRun' => $isFunRun, 
			'alert' => $alert));
	}

	public function attendanceAttend(Request $request)
	{
		$user = User::find(Auth::id());
		if($user->role === 'AFR') {
			$funRun = FunRunRegistration::where('registration_id', $request->rid)->first();
			$funRun->attend = true;
			$funRun->save();
		} else {
			$festival = FestivalRegistration::where('registration_id', $request->rid)->first();
			$festival->attend = true;
			$festival->save();
		}

		return redirect()->route('eod.attendance', array('alert' => 'attend'));
	}

	public function participant()
	{
		//check which user sign in
		$isFunRun = true;
		$user = User::find(Auth::id());
		if($user->role === 'AFR') {
			$event = Event::find(1);
			$registrations = Registration::join('fun_run_registrations', 'registrations.id', '=', 'fun_run_registrations.registration_id')
				->where('registrations.status', 4)
				->select('registrations.*')->get();
		} else {
			$event = Event::find(2);
			$registrations = Registration::join('festival_registrations', 'registrations.id', '=', 'festival_registrations.registration_id')
				->where('registrations.status', 4)
				->select('registrations.*')->get();
			$isFunRun = false;
		}

		return view('eod-participant', array(
			'registrations' => $registrations, 
			'isFunRun' => $isFunRun));
	}

	public function publication(Request $request)
	{
		$alert = '';
	    if ($request->has('alert')) {
	    	$alert = $request->alert;
	    }

	    $medias = PublicationMedia::all();

	    return view('eod-publication', array('medias' => $medias, 'alert' => $alert));
	}

	public function publicationAdd(Request $request)
	{
		$media = new PublicationMedia();
		$media->media = $request->media;
		$media->status = true;
		$media->save();

		return redirect()->route('eod.publication', array('alert' => 'addSuccess'));
	}

	public function publicationUpdate(Request $request)
	{
		$media = PublicationMedia::find($request->mid);
		if($request->status <= 1) {
			$media->status = false;
		} else {
			$media->status = true;
		}
		$media->save();

		return redirect()->route('eod.publication', array('alert' => 'updateSuccess'));
	}

	public function articles()
	{
		$articles = Article::all();
		return view('eod-articles', array('articles' => $articles));
	}

	public function articlesNew()
	{
		$isAdd = true;
		return view('eod-articles-new', array('isAdd' => $isAdd));
	}

	public function articlesNewSubmit(Request $request)
	{
		$file = $request->file('file');
		$fileName = time().'.'.$file->getClientOriginalExtension();

		$article = new Article();
		$article->title = $request->title;
		$article->content = $request->content;
		$article->post_date = new DateTime('today');
		$article->thumbnail = $fileName;
		$article->save();

		$path = public_path().'/upload/'.$article->id;
    	if(!File::exists($path)) {
    		File::makeDirectory($path);
    	}
    	$input['imageName'] = $fileName;
    	$file->move($path, $input['imageName']);

    	return redirect()->route('eod.articles');
	}

	public function articlesEdit($id)
	{
		$isAdd = false;
		$article = Article::find($id);
		return view('eod-articles-new', array('isAdd' => $isAdd, 'article' => $article));
	}

	public function articlesEditSubmit(Request $request)
	{
		$file = $request->file('file');
		$fileName = time().'.'.$file->getClientOriginalExtension();

		$article = Article::find($request->aid);
		$article->title = $request->title;
		$article->content = $request->content;
		$article->thumbnail = $fileName;
		$article->save();

		$path = public_path().'/upload/'.$article->id;
    	File::deleteDirectory($path);
    	File::makeDirectory($path);
    	$input['imageName'] = $fileName;
    	$file->move($path, $input['imageName']);

    	return redirect()->route('eod.articles');
	}

	public function articlesDelete(Request $request)
	{
		$article = Article::find($request->aid);
		$path = public_path().'/upload/'.$article->id;
    	File::deleteDirectory($path);
    	$article->delete();

    	return redirect()->route('eod.articles');
	}

}
