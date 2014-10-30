<?php

class ProjectController extends BaseController {

	public function index() {
		$megabanners = Megabanner::where('active', 1)->get();
		$projects = Project::where('featured', 1)->orderBy('created_at', 'desc')->get();

		/* make view */

		return View::make('projects.index', array(
			'megabanners' => $megabanners,
			'projects' => $projects,
			'scripts' => array('vendor/jquery.slides.min.js', 'projects.js')
		));		
	}


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