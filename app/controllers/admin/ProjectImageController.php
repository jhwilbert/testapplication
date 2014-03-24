<?php

namespace Admin;

use Project;
use ProjectImage;
use View;
use Validator;
use Redirect;
use Input;
use App\Services\Image;

class ProjectImageController extends AdminBaseController {

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create($project_id) {
		$project = Project::findOrFail($project_id);
		if (!Input::has('subtitle')) $project_image = new ProjectImage;
		else $project_image = null;
		$route = array('admin.projects.images.store', $project_id);
		$method = 'POST';
		return View::make('admin.projects.images.create', array(
			'project' => $project,
			'project_image' => $project_image,
			'route' => $route,
			'method' => $method
		));
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store($project_id) {
		$project = Project::findOrFail($project_id);
		$project_image = new ProjectImage;
		$result = $this::save($project_id, $project_image);

		if ($result === true) {
			return Redirect::route('admin.projects.show', $project_id)->with(array('success' => 'Imagem do projeto criada com sucesso.'));
		} else {
			return Redirect::route('admin.projects.images.create', $project_id)->withInput()->withErrors($result);
		}
	}

	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($project_id, $id) {
		$project = Project::findOrFail($project_id);
		$project_image = ProjectImage::findOrFail($id);
		return View::make('admin.projects.images.show', array('project' => $project, 'project_image' => $project_image));
	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($project_id, $id) {
		$project = Project::findOrFail($project_id);
		$project_image = ProjectImage::findOrFail($id);
		$route = array('admin.projects.images.update', $project_id, $id);
		$method = 'PUT';
		return View::make('admin.projects.images.edit', array('project' => $project, 'project_image' => $project_image, 'route' => $route, 'method' => $method));
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($project_id, $id) {
		$project = Project::findOrFail($project_id);
		$project_image = ProjectImage::findOrFail($id);
		$result = $this::save($project_id, $project_image);
		if ($result === true) {
			return Redirect::route('admin.projects.show', $project_id)->with(array('success' => 'Imagem alterada com sucesso.'));
		} else {
			return Redirect::route('admin.projects.images.edit', array($project_id, $id))->withErrors($result);
		}
	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($project_id, $id) {
		$project = Project::findOrFail($project_id);
		$project_image = ProjectImage::findOrFail($id);
		$project_image->delete();

		return Redirect::route('admin.projects.show', $project_id)->with(array('success' => 'Imagem excluída com sucesso.'));
	}


	protected function save($project_id, $project_image) {

		$file = Input::file('file');
		
		$project_image->project_id = $project_id;
		$project_image->subtitle = Input::get('subtitle');
		$project_image->position = Input::get('position');

		if ($project_image->exists) {
			$validator_attributes = array();
			$validator_rules = array();
		} else {
			$validator_attributes = array(
		    	'file' => $file
		    );
			$validator_rules = array(
		    	'file' => 'required'
		    );			
		}
		$validator = Validator::make($validator_attributes, $validator_rules);

		if ($validator->fails()) return $validator;
		else {
			$project_image->save();
			if ($file) {
				$destinationPath = 'project/'.$project_id.'/project_images/'.$project_image->id;

				$filename = $file->getClientOriginalName();

				$image = new Image;
				$image->upload($file, $destinationPath, true, ProjectImage::$dimensions);

				$project_image->file_name = $filename;
				$project_image->save();
			}
			return true;
		}
	}
}