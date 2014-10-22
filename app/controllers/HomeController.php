<?php

class HomeController extends BaseController {

	public function index()	{

		$megabanners = Megabanner::where('active', 1)->get();

		$projects = Project::where('featured', 1)->orderBy('created_at', 'desc')->take(3)->get();

		/* make view */

		return View::make('index', array(
			'megabanners' => $megabanners,
			'projects' => $projects,
			'scripts' => array('projects.js')
		));
	}


}