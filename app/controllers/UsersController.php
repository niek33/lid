<?php
 
class UsersController extends BaseController {
 
	public function __construct() {
	    $this->beforeFilter('csrf', array('on'=>'post'));
	}

	public function getRegister() {
	    return View::make('users.register');
	}

	public function postCreate() {

        $validator = Validator::make(Input::all(), User::$rules);
 
	    if ($validator->passes()) {
		    $user = new User;
		    $user->firstname = Input::get('firstname');
		    $user->lastname = Input::get('lastname');
		    $user->email = Input::get('email');
		    $user->street = Input::get('street');
		    $user->zipcode = Input::get('zipcode');
		    $user->city = Input::get('city');
		    $user->telephone = Input::get('telephone');
		    $user->birthday = Input::get('birthday');

		    $user->password = Hash::make(Input::get('password'));
		    $user->save();
		 
		 	Auth::attempt(array('email'=>Input::get('email'), 'password'=>Input::get('password')));

		    return Redirect::to('/')->with('message', 'Thanks for registering, you are now logged in!');
		} else {
		    return Redirect::to('users/register')->with('message', 'The following errors occurred')->withErrors($validator)->withInput();
		}    
	}

	public function getLogin() {
    	return View::make('users.login');
	}

	public function postSignin() {
         if (Auth::attempt(array('email'=>Input::get('email'), 'password'=>Input::get('password')))) {
		    return Redirect::to('/basic-needs')->with('message', 'You are now logged in!');
		} else {
		    return Redirect::to('users/login')
		        ->with('message', 'Your username/password combination was incorrect')
		        ->withInput();
		}
	}

	public function getLogout() {
	    Auth::logout();
	    return Redirect::to('users/login')->with('message', 'Your are now logged out!');
	}

}
?>