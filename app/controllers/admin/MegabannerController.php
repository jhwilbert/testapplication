<?php

namespace Admin;

use Megabanner;
use View;
use Validator;
use Redirect;
use Input;
use App\Services\Image;
use Auth;


class MegabannerController extends AdminBaseController {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index() {
		$megabanners = Megabanner::all();
		return View::make('admin.megabanners.index', array('megabanners' => $megabanners));
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create() {
		if (!Input::has('title')) $megabanner = new Megabanner;
		else $megabanner = null;
		$route = 'admin.megabanners.store';
		$method = 'POST';
		return View::make('admin.megabanners.create', array('megabanner' => $megabanner, 'route' => $route, 'method' => $method));
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store() {
		$megabanner = new Megabanner;
		$result = $this::save($megabanner);
		if ($result === true) {
			return Redirect::route('admin.megabanners.show', $megabanner->id)->with(array('success' => 'Megabanner criado com sucesso.'));
		} else {
			return Redirect::route('admin.megabanners.create')->withInput()->withErrors($result);
		}
	}

	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id) {
		$megabanner = Megabanner::findOrFail($id);
		return View::make('admin.megabanners.show', array('megabanner' => $megabanner));
	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id) {
		$megabanner = Megabanner::findOrFail($id);
		$route = array('admin.megabanners.update', $id);
		$method = 'PUT';
		return View::make('admin.megabanners.edit', array('megabanner' => $megabanner, 'route' => $route, 'method' => $method));
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id) {
		$megabanner = Megabanner::findOrFail($id);
		$result = $this::save($megabanner);
		if ($result === true) {
			return Redirect::route('admin.megabanners.show', $id)->with(array('success' => 'Megabanner alterado com sucesso.'));
		} else {
			return Redirect::route('admin.megabanners.edit', $id)->withErrors($result);
		}
	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id) {
		$megabanner = Megabanner::findOrFail($id);
		$megabanner->delete();

		return Redirect::route('admin.megabanners.index')->with(array('success' => 'Megabanner excluído com sucesso.'));
	}


	protected function save($megabanner) {

		$file = Input::file('file');
		
		$megabanner->title = Input::get('title');
		$megabanner->text = Input::get('text');
		$megabanner->url = Input::get('url');
		$megabanner->position = Input::get('position');
		$megabanner->active = Input::get('active') ? 1 : 0;

		if ($megabanner->exists) {
			$validator_attributes = array();
			$validator_rules = array();
		} else {
			$validator_attributes = array(
		    	'title' => Input::get('title'),
		    	'file' => $file,
		    );
			$validator_rules = array(
		    	'title' => 'required',
		    	'file' => 'required',
		    );			
		}
		$validator = Validator::make($validator_attributes, $validator_rules);

		if ($validator->fails()) return $validator;
		else {
			$megabanner->save();
			if ($file) {
				$destinationPath = 'megabanners/'.$megabanner->id;

				$filename = $file->getClientOriginalName();

				$image = new Image;
				$image->upload($file, $destinationPath, true, Megabanner::$dimensions);

				$megabanner->file_name = $filename;
				$megabanner->save();
			}
			return true;
		}
	}


	#####################
	#   AUTHORIZATION
	#####################

	public static function can($action, $megabanner = null) {

		$current_user = Auth::user();

		if (isset($current_user) && ($current_user->role == 'superadmin' || $current_user->role == 'admin' || $current_user->role == 'editor')) {
			return true;
		}

		return false;
	}

	public static function cannot($action, $megabanner = null) {
		return !self::can($action, $megabanner);
	}


	public static function forbidden() {
		return Redirect::route('admin_index')->withErrors(array('forbidden' => 'Permissão negada.'));
	}


}
