<?php

class PagesController extends BaseController {

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

		$clients = array(
			'fundacao-carlos-chagas' => 'Fundação Carlos Chagas',
			'usiminas' => 'Usiminas',
			'teatro-oi-brasilia' => 'Teatro Oi Brasília',
			'fundacao-clovis-salgado' => 'Fundação Clóvis Salgado',
			'fundacao-bradesco' => 'Fundação Bradesco',
			'fundacao-universa' => 'Fundação Universa',
			'sesc' => 'SESC',
			'apex-brasil' => 'Apex Brasil',
		);

		/* make view */

		return View::make('index', array(
			'megabanners' => $megabanners,
			'projects' => $projects,
			'timelineEvents' => $timelineEvents,
			'clients' => $clients,
			'scripts' => array('vendor/jquery.slides.min.js', 'solutions.js', 'projects.js')
		));
	}





	public function the_company() {

		$megabanners = Megabanner::where('active', 1)->get();

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

		return View::make('the_company.index', array(
			'megabanners' => $megabanners,
			'timelineEvents' => $timelineEvents,
			'scripts' => array('vendor/jquery.slides.min.js', 'company.js')
		));		
	}


}