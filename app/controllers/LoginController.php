<?php 

class LoginController extends BaseController {

	public function faiLogin(){
		$username = Input::get('username');
		$password = Input::get('password');

		

		if (Auth::attempt(array('username' => $username, 'password' => $password)))
		{
		    return Redirect::action('StageController@index');
		}
		else{
			$error = "Username o Password errati.";
			return  View::make("login")->with("error",$error);
		}
	}
}
