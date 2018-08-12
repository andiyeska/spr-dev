<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use DateTime;
use Mail;
use App\PublicationMedia;
use App\User;
use App\UserDetails;
use App\Article;

class HomeController extends Controller
{
    public function index() {
        return view('index');
    }

    public function aboutUs() {
    	return view('about-us');
    }

    public function funRun() {
    	return view('fun-run');
    }

    public function festival() {
    	return view('festival');
    }

    public function news() {
        $articles = Article::orderBy('post_date', 'desc')->get();
    	return view('news', array('articles' => $articles));
    }

    public function newsRead($id)
    {
        $article = Article::find($id);
        return view('news-read', array('article' => $article));
    }

    public function signIn(Request $request) {
    	
    	//Check if user has signed in
    	if(Auth::check()) {
    		return redirect()->route('home.index');
    	}

    	$medias = PublicationMedia::where('status', true)->get();
    	
    	$alert = '';
    	if ($request->has('alert')) {
    		$alert = $request->alert;
    	}
    	
    	return view('sign-in', array(
    		'medias' => $medias, 
    		'alert' => $alert));

    }

    public function signUpSubmit(Request $request) {

    	//check if username (email) has exist
    	$username = $request->username;
    	$exist = User::where('username', $username)->first();
    	if(!is_null($exist)) {
    		return redirect()->route('home.signIn', 
    			array('alert' => 'usernameExist'));
    	}

    	//Insert User
    	$user = new User();
    	$user->username = $username;
    	$user->password = bcrypt($request->password);
    	$user->role = 'U';
    	$user->created_date = new DateTime('today');
    	$token = bcrypt($username);
    	$user->token = $token;
    	$user->enabled = false;
    	$user->save();

    	//Insert User Details
    	$userDetails = new UserDetails();
    	$userDetails->user_id = $user->id;
    	$userDetails->first_name = $request->firstName;
    	$userDetails->last_name = $request->lastName;
    	$gender = true;
    	if ($request->gender == 1) {
    		$gender = false;
    	}
    	$userDetails->gender = $gender;
    	$userDetails->birth_date = DateTime::createFromFormat('d/m/Y', $request->birthDate)->format('Y-m-d');
        //check phone number format to avoid double 0 in front
        $phoneNumber = $request->phoneNumber;
        if(substr($phoneNumber, 0, 1) !== '0') {
            $phoneNumber = '0'.''.$phoneNumber;
        }
    	$userDetails->phone_number = $phoneNumber;
    	$userDetails->address = $request->address;
    	$userDetails->publication_media_id = $request->mediaId;
    	$userDetails->save();

    	//Email Sign Up Confirmation
        Mail::send('email-signup', ['user' => $user], function($message) use ($user) {
            $message->from('noreply@sparefkm.com', 'SPARE XII NEO');
            $message->to($user->username);
            $message->subject('Sign Up');
        });

    	return redirect()->route('home.signIn', 
    			array('alert' => 'signedUp'));

    }

    public function signUpConfirmation(Request $request) {
    	
        if (Auth::check()) {
            abort(404);
        }
        $user = User::where('token', $request->token)->first();
        if (is_null($user)) {
            abort(404);
        }
    	$user->enabled = true;
    	$user->token = null;
    	$user->save();

    	return redirect()->route('home.signIn', array('alert' => 'activated'));
    }

    public function signInSubmit(Request $request) {
    	if(Auth::attempt([
    		'username' => $request->username, 
    		'password' => $request->password,
    		'role' => 'U',
    		'enabled' => true])) {
    		return redirect()->back();
    	}
    	return redirect()->route('home.signIn', array('alert' => 'signInFail'));
    }

    public function signOut() {
    	Auth::logout();
    	return redirect()->route('home.index');
    }

}
