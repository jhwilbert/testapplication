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
		$i = 0;
		$skrollrData = array(
			'projects' 	=> array($i		, $i+=1000 	, $i+=200 	, $i + 400),
			'clients' 	=> array($i		, $i+=1000 	, $i+=200 	, $i + 400),
			'timeline' 	=> array($i		, $i+=1000 	, $i+=3000 	, $i + 400),
			'contact' 	=> array($i		, $i+=1000 	, $i+=200 	, $i + 400),
		);
		if (!isset($skrollrData[$section])) return null;
		return $skrollrData[$section];
	}

	public static function getSkrollrParams($section, $end = false) {
		$data = self::getSkrollrData($section);
		if (!$data) return '';
		$ret = ' data-'.$data[0].'="top[outCubic]:100%" data-'.$data[1].'="top:0%"';
		if (!$end) $ret .= ' data-'.$data[2].'="top[cubic]:0%" data-'.$data[3].'="top:-100%"';
		return $ret;
	}

}