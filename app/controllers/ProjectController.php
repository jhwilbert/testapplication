<?php

class ProjectController extends \BaseController {


    public function __construct() {

        $this->beforeFilter('auth', array('except' => array()));
    }

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index() {
		$projects = Project::all();
		return View::make('admin.projects.index', array('projects' => $projects));
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create() {
		if (!Input::has('title')) $project = new Project;
		else $project = null;
		$route = 'admin.projects.store';
		$method = 'POST';
		return View::make('admin.projects.create', array('project' => $project, 'route' => $route, 'method' => $method));
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store() {
		$project = new Project;
		$result = $this::save($project);

		if ($result === true) {
			return Redirect::route('admin.projects.index')->with(array('success' => 'Projeto criado com sucesso.'));
		} else {
			return Redirect::route('admin.projects.create')->withInput()->withErrors($result);
		}
	}

	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id) {
		$project = Project::findOrFail($id);
		return View::make('admin.projects.show', array('project' => $project));		
	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id) {
		$project = Project::findOrFail($id);
		$route = array('admin.projects.update', $project->id);
		$method = 'PUT';
		return View::make('admin.projects.edit', array('project' => $project, 'route' => $route, 'method' => $method));
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id) {
		$project = Project::findOrFail($id);
		$result = $this::save($project);
		if ($result === true) {
			return Redirect::route('admin.projects.index')->with(array('success' => 'Projeto alterado com sucesso.'));
		} else {
			return Redirect::route('admin.projects.edit', $project->id)->withErrors($result);
		}
	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id) {
		$project = Project::findOrFail($id);
		$project->delete();

		return Redirect::route('admin.projects.index')->with(array('success' => 'Projeto excluído com sucesso.'));
	}

	protected function save($project) {

		$project->title = Input::get('title');
		$project->description = Input::get('description');
		$project->featured = Input::get('featured') ? 1 : 0;

		$validator = Validator::make(
		    array(
		    	'title' => Input::get('title')
		    ), array(
		    	'title' => 'required'
		    )
		);

		if ($validator->fails()) return $validator;
		return $project->save();
	}


}