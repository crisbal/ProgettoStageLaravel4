<?php 

class LoginController extends BaseController {

	public function faiLogin(){
		$username = Input::get('username');
		$password = Input::get('password');

		

		if (Auth::attempt(array('username' => $username, 'password' => $password)))
		{
		    return Redirect::intended('home');
		}
		else{
			$error = "Username o Password errati.";
			return  View::make("login")->with("error",$error);
		}
	}
}
