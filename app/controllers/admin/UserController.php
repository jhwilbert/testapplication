<?php

namespace Admin;

use User;
use View;
use Input;
use Validator;
use Redirect;
use Auth;
use Session;
use Hash;


class UserController extends AdminBaseController {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index() {

		if (self::cannot('index')) return self::forbidden();

		// get all the users
		$users = User::all();

		// load the view and pass the users
		return View::make('admin.users.index')
			->with('users', $users);
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create() {

		if (self::cannot('create')) return self::forbidden();

		$user = new User;
		$route = array('admin.usuarios.store');
		$method = 'POST';

		// show the edit form and pass the user
		return View::make('admin.users.edit', array('user' => $user, 'route' => $route, 'method' => $method));

	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store() {

		if (self::cannot('create')) return self::forbidden();

		// validate
		// read more on validation at http://laravel.com/docs/validation
		$rules = array(
			'name' 	=> 'required',
			'email' => 'required|email',
			'role' 	=> 'required',
			'password' => 'required|confirmed',
			'password_confirmation' => 'required',

		);
		$validator = Validator::make(Input::all(), $rules);

		// process the login
		if ($validator->fails()) {
			return Redirect::route('admin.usuarios.create')
				->withErrors($validator)
				->withInput(Input::except('password'));
		} else {
			// store
			$user = new User;
			$user->name   = Input::get('name');
			$user->email  = Input::get('email');
			$user->role 	= Input::get('role');
			$user->password = Hash::make(Input::get('password'));
			$user->save();

			// redirect
			Session::flash('success', 'Administrador criado com sucesso.');
			return Redirect::route('admin.usuarios.show', $user->id);			
		}
	}

	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id) {
		// get the user
		$user = User::find($id);

		if (self::cannot('show', $user)) return self::forbidden();

		// show the view and pass the user to it
		return View::make('admin.users.show')
			->with('user', $user);
	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id) {
		// get the user
		$user = User::find($id);

		if (self::cannot('edit', $user)) return self::forbidden();

		$route = array('admin.usuarios.update', $user->id);
		$method = 'PUT';

		// show the edit form and pass the user
		return View::make('admin.users.edit', array('user' => $user, 'route' => $route, 'method' => $method));
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id) {

		$user = User::find($id);

		if (self::cannot('edit', $user)) return self::forbidden();

		// validate
		// read more on validation at http://laravel.com/docs/validation
		$rules = array(
			'name'  => 'required',
			'email' => 'required|email',
			'role' 	=> 'required',
		);

		$password = Input::get('password');

		if ($password) {
			$rules['password'] = 'required|confirmed';
			$rules['password_confirmation'] = 'required';
		}

		$validator = Validator::make(Input::all(), $rules);

		// process the login
		if ($validator->fails()) {
			return Redirect::route('admin.usuarios.edit', $id)
				->withErrors($validator)
				->withInput(Input::except('password'));
		} else {
			// store
			$user = User::find($id);
			$user->name  = Input::get('name');
			# TODO: improve security of the next 2 fields depending on permissions
			$user->email = Input::get('email');
			$user->role  = Input::get('role');
			if ($password) {
				$user->password = Hash::make($password);
			}
			$user->save();

			// redirect
			Session::flash('success', 'Dados atualizados com sucesso.');
			return Redirect::route('admin.usuarios.edit', $id);
		}
	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id) {

		$user = User::find($id);

		if (self::cannot('destroy', $user)) return self::forbidden();
		
		// delete
		$user->delete();

		// redirect
		Session::flash('success', 'Usuário excluído com sucesso.');
		return Redirect::route('admin.usuarios.index');	
	}



	public static function can($action, $user = null) {

		$current_user = Auth::user();

		if ($current_user->role == 'superadmin') return true;

		if ($action == 'index'){
			return ($current_user->role == 'admin');
		} elseif ($action == 'show'){
			return ($current_user->role == 'admin' || $current_user == $user);
		} elseif ($action == 'edit') {
			return (($current_user->role == 'admin' && $user->role != 'superadmin') || $current_user == $user);
		} elseif ($action == 'create') {
			return ($current_user->role == 'admin');
		} elseif ($action == 'destroy') {
			return false;
		}

		return false;
	}

	public static function cannot($action, $user = null) {
		return !self::can($action, $user);
	}


	public static function forbidden() {
		return Redirect::route('admin_index')->withErrors(array('forbidden' => 'Permissão negada.'));
	}


}