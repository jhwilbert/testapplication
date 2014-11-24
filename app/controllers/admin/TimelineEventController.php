<?php

namespace Admin;

use TimelineEvent;
use View;
use Validator;
use Redirect;
use Input;
use App\Services\Image;
use Auth;


class TimelineEventController extends AdminBaseController {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index() {
		$timeline_events = TimelineEvent::all();
		return View::make('admin.timeline_events.index', array('timeline_events' => $timeline_events));
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create() {
		if (!Input::has('title')) $timeline_event = new TimelineEvent;
		else $timeline_event = null;
		$route = 'admin.timeline_events.store';
		$method = 'POST';
		return View::make('admin.timeline_events.create', array('timeline_event' => $timeline_event, 'route' => $route, 'method' => $method));
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store() {
		$timeline_event = new TimelineEvent;
		$result = $this::save($timeline_event);
		if ($result === true) {
			return Redirect::route('admin.timeline_events.show', $timeline_event->id)->with(array('success' => 'Evento da Timeline criado com sucesso.'));
		} else {
			return Redirect::route('admin.timeline_events.create')->withInput()->withErrors($result);
		}
	}

	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id) {
		$timeline_event = TimelineEvent::findOrFail($id);
		return View::make('admin.timeline_events.show', array('timeline_event' => $timeline_event));
	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id) {
		$timeline_event = TimelineEvent::findOrFail($id);
		$route = array('admin.timeline_events.update', $id);
		$method = 'PUT';
		return View::make('admin.timeline_events.edit', array('timeline_event' => $timeline_event, 'route' => $route, 'method' => $method));
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id) {
		$timeline_event = TimelineEvent::findOrFail($id);
		$result = $this::save($timeline_event);
		if ($result === true) {
			return Redirect::route('admin.timeline_events.show', $id)->with(array('success' => 'Evento da Timeline alterado com sucesso.'));
		} else {
			return Redirect::route('admin.timeline_events.edit', $id)->withErrors($result);
		}
	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id) {
		$timeline_event = TimelineEvent::findOrFail($id);
		$timeline_event->delete();

		return Redirect::route('admin.timeline_events.index')->with(array('success' => 'Evento da Timeline excluído com sucesso.'));
	}


	protected function save($timeline_event) {

		$file = Input::file('file');
		
		$cdate = \Carbon\Carbon::createFromFormat('d/m/Y', Input::get('date'));
		$timeline_event->date = $cdate;
		$timeline_event->title = Input::get('title');
		$timeline_event->title_en = Input::get('title_en');
		$timeline_event->text = Input::get('text');
		$timeline_event->text_en = Input::get('text_en');
		$timeline_event->active = Input::get('active') ? 1 : 0;

		if ($timeline_event->exists) {
			$validator_attributes = array();
			$validator_rules = array();
		} else {
			$validator_attributes = array(
		    	'date' => Input::get('date'),
		    	'title' => Input::get('title'),
		    );
			$validator_rules = array(
		    	'date' => 'required|date_format:d/m/Y',
		    	'title' => 'required',
		    );			
		}
		$validator = Validator::make($validator_attributes, $validator_rules);

		if ($validator->fails()) return $validator;
		else {
			$timeline_event->save();
			if ($file) {
				$destinationPath = 'timeline_events/'.$timeline_event->id;

				$filename = $file->getClientOriginalName();

				$image = new Image;
				$image->upload($file, $destinationPath, true, TimelineEvent::$dimensions);

				$timeline_event->file_name = $filename;
				$timeline_event->save();
			}
			return true;
		}
	}


	#####################
	#   AUTHORIZATION
	#####################

	public static function can($action, $timeline_event = null) {

		$current_user = Auth::user();

		if (isset($current_user) && ($current_user->role == 'superadmin' || $current_user->role == 'admin' || $current_user->role == 'editor')) {
			return true;
		}

		return false;
	}

	public static function cannot($action, $timeline_event = null) {
		return !self::can($action, $timeline_event);
	}


	public static function forbidden() {
		return Redirect::route('admin_index')->withErrors(array('forbidden' => 'Permissão negada.'));
	}


}
