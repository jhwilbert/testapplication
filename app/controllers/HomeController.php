<?php

class HomeController extends BaseController {

	public function index()	{

		$megabanners = Megabanner::where('active', 1)->get();

		$projects = Project::where('featured', 1)->orderBy('created_at', 'desc')->take(3)->get();

		$timelineEvents = array(
			array(
				'year' => '1977', 
				'left' => true, 
				'description' => 'Inspirados no boom tecnológico em todo o mundo, surge a Projesom como referência no mercado de tecnologia audiovisual em Minas Gerais.'
			),
			array(
				'year' => '1977', 
				'left' => true, 
				'description' => 'Inspirados no boom tecnológico em todo o mundo, surge a Projesom como referência no mercado de tecnologia audiovisual em Minas Gerais.'
			),
			array(
				'year' => '1977', 
				'left' => false, 
				'description' => 'Reformulação de identidade visual e participação no evento etc e formulação de identidade visual e participação no evento Tal...'
			),
		);


		/* make view */

		return View::make('index', array(
			'megabanners' => $megabanners,
			'projects' => $projects,
			'timelineEvents' => $timelineEvents,
			'scripts' => array('vendor/jquery.slides.min.js', 'projects.js')
		));
	}


}