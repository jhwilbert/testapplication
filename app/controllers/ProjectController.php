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
		$image_paths = array();
		foreach ($project_images as $project_image) {
			array_push($image_paths, $project_image->getImagePath('medium'));
		}
		$result = array(
			'title' => $project->title,
			'description' => $project->description,
			'technology' => $project->technology,
			'image_paths' => $image_paths
		);
		return Response::json( $result );
	}



}