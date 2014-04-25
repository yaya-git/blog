<?php

class LoginController extends \BaseController {

	public function index()
	{
            return View::make('login.index');
        }

	public function login()
	{
            $credentials = array(
                'email' => Input::get('email'),
                'password' => Input::get('password')
            );
            
            if(Auth::attempt($credentials))
            {
                return Redirect::intended('account');
            }
            else
            {
                echo 'false login';
            }
            
	}

	public function logout()
	{
            Auth::logout();
            
            return Redirect::to('/');
	}
}