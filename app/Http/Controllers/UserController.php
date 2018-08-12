<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\File;
use DateTime;
use Mail;
use App\User;
use App\UserDetails;
use App\Registration;
use App\Event;
use App\FunRunRegistration;
use App\FestivalRegistration;

class UserController extends Controller
{

    public function profile() {

    	$id = Auth::id();
    	$user = User::find($id);
    	$registrations = Registration::where('user_id', $id)
    		->whereYear('registration_date', '=', date('Y'))->get();

    	return view('user-profile', array(
    		'user' => $user, 
    		'registrations' => $registrations
    		));

    }

    public function profileUpdate(Request $request) {

    	$user = UserDetails::where('user_id', Auth::id())->first();
    	$user->first_name = $request->firstName;
    	$user->last_name = $request->lastName;
    	$user->phone_number = $request->phoneNumber;
    	$user->save();

    	return redirect()->route('user.profile');

    }

    public function checkFunRun() {
    	$event = Event::find(1);
    	$today = new DateTime('now');

    	//check if event registration is still open
    	$start = new DateTime($event->start_date);
    	$attendance = new DateTime($event->attendance_date);
    	if($today < $start || $today >= $attendance) {
    		//return event registration is close
    		return true;
    	}

    	$check = FunRunRegistration::join('registrations', 'registrations.id', '=', 'fun_run_registrations.registration_id')
    		->where('registrations.user_id', Auth::id())
    		->whereYear('registrations.registration_date', '=', date('Y'))
    		->get();

    	if(count($check) > 0) {
    		//return sudah mendaftar
    		return true;
    	}

    	return false;
    }

    public function checkFestival() {
    	$event = Event::find(2);
    	$today = new DateTime('now');

    	//check if event registration is still open
    	$start = new DateTime($event->start_date);
    	$attendance = new DateTime($event->attendance_date);
    	if($today < $start || $today >= $attendance) {
    		//return event registration is close
    		return true;
    	}

    	$check = FestivalRegistration::join('registrations', 'registrations.id', '=', 'festival_registrations.registration_id')
    		->where('registrations.user_id', Auth::id())
    		->where('festival_registrations.registration_fee', '>', 0)
    		->whereYear('registrations.registration_date', '=', date('Y'))
    		->get();

    	if(count($check) > 0) {
    		//return sudah mendaftar
    		return true;
    	}

    	return false;
    }

    public function registerEvent(Request $request) {

    	//check what kind of event
    	if (strcasecmp($request->event, 'fun-run') == 0) {
    		$event = Event::find(1);

    		//check fun run registration avilability
    		if($this->checkFunRun()) {
    			abort(406);
    		}

    		return view('register-fun-run', array(
    			'user' => UserDetails::where('user_id', Auth::id())->first(), 
    			'event' => $event, 
    			'uniqueFee' => rand(100, 999)));

    	} elseif (strcasecmp($request->event, 'festival') == 0) {
    		$event = Event::find(2);

    		//check festival registration availability
    		if($this->checkFestival()) {
    			abort(406);
    		}

    		return view('register-festival', array(
    			'user' => UserDetails::where('user_id', Auth::id())->first(), 
    			'event' => $event, 
    			'uniqueFee' => rand(100, 999)));
    		
    	} else {
    		abort(404);
    	}

    }

    public function registerEventSubmit(Request $request)
    {

    	$isFunRun = false;
    	if(strcasecmp($request->isFunRun, 'true') == 0) {
    		//check fun run registration avilability
    		if($this->checkFunRun()) {
    			abort(406);
    		}
    		$isFunRun = true;
    	} else {
    		//check festival registration availability
	    	if($this->checkFestival()) {
	    		abort(406);
	    	}
    	}

    	$user = User::find(Auth::id());

    	//check if profile updated
    	if($request->has('firstName')) {
    		$details = $user->details;
    		$details->first_name = $request->firstName;
    		$details->last_name = $request->lastName;
    		$details->phone_number = $request->phoneNumber;
    		$details->save();
    	}

    	$uniqueFee = $request->uniqueFee;
    	$arrayView = array(
    		'checkOut' => $request->checkOut,
    		'user' => $user, 
    		'isFunRun' => $isFunRun, 
    		'uniqueFee' => $uniqueFee);

    	//check event type
    	if($isFunRun) {
    		$event = Event::find(1);
    		$tmp = array(
    			'event' => $event, 
    			'shirtSize' => $request->shirtSize, 
    			'medicalRecord' => $request->medicalRecord, 
    			'total' => $event->price + $uniqueFee);
    		$arrayView = array_merge($arrayView, $tmp);
    	} else {
    		$event = Event::find(2);
    		$tmp = array(
    			'event' => $event, 
    			'quantity' => $request->quantity, 
    			'total' => $event->price * $request->quantity + $uniqueFee);
    		$arrayView = array_merge($arrayView, $tmp);
    	}
    	return view('check-out', $arrayView);
    }

    public function checkOutSubmit(Request $request) 
    {

    	if($request->isFunRun) {
    		//check fun run registration avilability
    		if($this->checkFunRun()) {
    			abort(406);
    		}
    	} else {
    		//check festival registration availability
	    	if($this->checkFestival()) {
	    		abort(406);
	    	}
    	}

    	$registrationCode = Registration::max('registration_code');
    	if(is_null($registrationCode)) {
    		$registrationCode = 'SPR180001';
    	} else {
    		$tmp = intval(substr($registrationCode, 5)) + 1;
    		$registrationCode = 'SPR18'."".str_pad($tmp, 4, '0', STR_PAD_LEFT);
    	}

    	//insert into registration
    	$registration = new Registration();
    	$registration->user_id = Auth::id();
    	$registration->registration_code = $registrationCode;
    	$registration->unique_fee = $request->uniqueFee;
    	$registration->registration_date = new DateTime('today');
    	$registration->status = 1;
    	$registration->save();

    	$total = $request->uniqueFee;
    	$quantity;
    	$festivalFee;

    	//check event type
    	if($request->isFunRun) {
    		$event = Event::find(1);
    		//insert into fun run
    		$funRun = new FunRunRegistration();
    		$funRun->registration_id = $registration->id;
    		$funRun->shirt_size = $request->shirtSize;
    		$funRun->medical_record = $request->medicalRecord;
    		$funRun->registration_fee = $event->price;
    		$funRun->attend = false;
    		$funRun->save();

    		$quantity = 1;
    		$festivalFee = 0;
    		$total = $total + $event->price;
    	} else {
    		$event = Event::find(2);
    		$quantity = $request->quantity;
    		$festivalFee = $event->price * $quantity;
    	}

    	//insert into festival
    	$festival = new FestivalRegistration();
    	$festival->registration_id = $registration->id;
    	$festival->quantity = $quantity;
    	$festival->registration_fee = $festivalFee;
    	$festival->attend = false;
    	$festival->save();

    	$total = $total + $festivalFee;
    	//Email Register Event Accepted
        $user = User::find(Auth::id());
        Mail::send('email-register', 
        	['user' => $user, 'registration' => $registration, 'isFunRun' => $request->isFunRun, 'total' => $total], 
        	function($message) use ($user) {
                $message->from('noreply@sparefkm.com', 'SPARE XII NEO');
                $message->to($user->username);
                $message->subject('Registration Event');
        });

    	return redirect()->route('user.order.details', ['registrationCode' => $registrationCode]);

    }

    public function orderDetails($registrationCode)
    {
    	$registration = Registration::where('registration_code', strtoupper($registrationCode))
    		->where('user_id', Auth::id())->first();

        if(is_null($registration)) {
            abort(404);
        }

        if($registration->user_id !== Auth::id()) {
            abort(403);
        }

    	$total = $registration->unique_fee + $registration->festival->registration_fee;
    	//check if there is fun run
    	if(!is_null($registration->funRun)) {
    		$total = $total + $registration->funRun->registration_fee;
    	}

    	return view('order-details', array(
    		'user' => User::find(Auth::id()), 
    		'registration' => $registration, 
    		'total' => $total));
    }

    public function uploadPaymentProof($registrationCode, Request $request) {
    	$path = public_path().'/upload/'.$registrationCode;
    	if(!File::exists($path)) {
    		File::makeDirectory($path);
    	}

    	$file = $request->file('file');
    	$fileName = time().'.'.$file->getClientOriginalExtension();
    	$input['imageName'] = $fileName;
    	$file->move($path, $input['imageName']);

    	$registration = Registration::where('registration_code', $registrationCode)->first();
    	$registration->payment_proof = $fileName;
    	$registration->status = 3;
    	$registration->save();

    	return redirect()->route('user.order.details', ['registrationCode' => $registrationCode]);
    }
}
