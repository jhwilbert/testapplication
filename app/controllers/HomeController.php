<?php

class HomeController extends BaseController {

	public function index()	{

		$projects = Project::where('featured', 1)->orderBy('created_at', 'desc')->take(3)->get();

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

		return View::make('index', array(
			'projects' => $projects, 
			'clients' => $clients, 
			'timelineEvents' => $timelineEvents
			)
		);
	}

	public static function getSkrollrData($section) {
		$skrollrData = array(
			'projects' 	=> array(0		, 1000 	, 1500 	, 2500),
			'clients' 	=> array(2500	, 3500	, 4000	, 5000),
			'timeline' 	=> array(5000	, 6000	, 9000	, 10000),
			'contact' 	=> array(10000	, 11000	, 11500	, 12500)
		);
		if (!isset($skrollrData[$section])) return '';
		$data = $skrollrData[$section];

		return ' data-'.$data[0].'="top[outCubic]:100%" data-'.$data[1].'="top:0%" data-'.$data[2].'="top[cubic]:0%" data-'.$data[3].'="top:-100%"';
	}

}