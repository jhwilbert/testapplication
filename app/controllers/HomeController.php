<?php

class HomeController extends BaseController {

	public function index()	{

		$projects = Project::where('featured', 1)->orderBy('created_at', 'desc')->take(3)->get();

		return View::make('index', array('projects' => $projects));
	}

}