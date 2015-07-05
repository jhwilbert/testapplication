<?php

class ProjectController extends BaseController {

	public function index() {

		if (Route::currentRouteName() == 'projects_en') {
			App::setLocale('en');
			$lpr = '_en';
		} else {
			$lpr = '';
		}

		$megabanners = Megabanner::where('active', 1)->where('show_in_projects', 1)->get();
		$projects = Project::where('featured', 1)->orderBy('created_at', 'desc')->get();

		/* make view */

		return View::make('projects.index', array(
			'megabanners' => $megabanners,
			'projects' => $projects,
			'lpr' => $lpr,
			'scripts' => array('projects.js')
		));		
	}


	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id, $lang = 'pt') {

		App::setLocale($lang);
		$lpr = ($lang == 'pt') ? '' : "_$lang";

		$project = Project::findOrFail($id);
		$project_images = $project->projectImages()->orderby('position')->get();
		$image_paths = array();
		$root_url = URL::to('/');
		foreach ($project_images as $project_image) {
			array_push($image_paths, $root_url.'/'.$project_image->getImagePath('medium'));
		}
		$result = array(
			'title' => $project["title$lpr"],
			'description' => $project["description$lpr"],
			'location' => $project["location"],
			'technology' => $project["technology$lpr"],
			'image_paths' => $image_paths
		);
		//return Response::json( $result );
		//return View::make('project.index', $resources);
				return View::make('project.index', array(
			'result' => $result,'lpr' => $lpr, 'scripts' => array('projectview.js')
		));	
	}



}