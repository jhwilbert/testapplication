<?php

class AdminController extends BaseController {

    public function __construct() {

        $this->beforeFilter('auth', array('except' => array('login', 'do_login')));
    }

    /* Auth */

	public function login()	{

		$user = new User;

		return View::make('admin.login', array('user' => $user));

	}

	public function do_login()	{

		if (Auth::attempt(array('email' => Input::get('email'), 'password' => Input::get('password')))) {
			$user = Auth::user();
			$user->last_login_date = date('Y-m-d h:i:u');
			$user->last_login_ip = Request::getClientIp();
			$user->save();
		    return Redirect::route('admin_index')->with('success', 'Login realizado com sucesso');
		} else {
			return Redirect::route('login')->withInput()->withErrors(array('password' => 'Usuário ou senha incorretos.'));
		}
	}

	public function logout() {
		Auth::logout();
		return Redirect::route('home');
	}


	/* Dashboard*/

	public function index()	{
		return View::make('admin.index');
	}


	/* Users */

	public function users() {

		$users = User::all();

		return View::make('admin.users.index', array('users' => $users));
	}








}