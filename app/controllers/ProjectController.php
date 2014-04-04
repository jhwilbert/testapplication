<?php

class ProjectController extends BaseController {

	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id) {

		$project = Project::findOrFail($id);
		$project_images = $project->projectImages()->orderby('position')->get();
		$images_paths = array();
		foreach ($project_images as $project_image) {
			array_push($images_paths, $project_image->getImagePath('medium'));
		}
		$result = array(
			'title' => $project->title,
			'description' => $project->description,
			'images_paths' => $images_paths
		);
		return Response::json( $result );
	}



}