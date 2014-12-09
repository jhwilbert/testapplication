<?php

class HomeController extends BaseController {

	public function splash() {
		return View::make('home.splash');
	}

	public function index() {

		$megabanners = Megabanner::where('active', 1)->where('show_in_home', 1)->get();
		$projects = Project::where('featured', 1)->orderBy('created_at', 'desc')->take(3)->get();
		$timelineEvents = TimelineEvent::where('active', 1)->orderBy('date', 'ASC')->get();
		$clients = ClientController::$clients;

		$resources = array(
			'megabanners' => $megabanners,
			'projects' => $projects,
			'timelineEvents' => $timelineEvents,
			'clients' => $clients,
			'scripts' => array('solutions.js', 'projects.js'),
		);

		if (Route::currentRouteName() == 'home_en') {
			App::setLocale('en');
			$resources['lpr'] = '_en';
		} else {
			$resources['lpr'] = '';
		}
		
		/* make view */
		return View::make('home.index', $resources);
	}

}

?>