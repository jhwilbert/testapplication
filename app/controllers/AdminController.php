<?php

class AdminController extends BaseController {

    public function __construct() {

        $this->beforeFilter('auth', array('except' => array('login', 'do_login')));
    }

	public function login()	{

		$user = new User;

		return View::make('admin.login', array('user' => $user));

	}

	public function do_login()	{

		if (Auth::attempt(array('email' => Input::get('email'), 'password' => Input::get('password')))) {
		    return Redirect::route('admin_index');
		} else {
			return Redirect::route('login')->withInput()->withErrors(array('password' => 'Usuário ou senha incorretos.'));
		}
	}

	public function logout() {
		Auth::logout();
		return Redirect::route('home');
	}

	public function index()	{
		return View::make('admin.index');
	}



// https://bitbucket.org/beni/laravel-4-tutorial/wiki/User_Management

}