<?php

class HomeController extends BaseController {

	public function index()	{

		/* projects contents*/

		$projects = Project::where('featured', 1)->orderBy('created_at', 'desc')->take(3)->get();


		/* clients contents*/

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


		/* timeline contents*/

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


		/* skrollr attributes*/

		$i = 200; $posOffset = 1000;
		$skrollrData = array(
			'projects' 	=> array($i		, $i+=$posOffset 	, $i+=200 	, $i + 400,  $i + 500),
			'clients' 	=> array($i		, $i+=$posOffset 	, $i+=200 	, $i + 400),
			'timeline' 	=> array($i		, $i+=$posOffset 	, $i+=3500 	, $i + 400),
			'contact' 	=> array($i		, $i+=$posOffset 	, $i+=200 	, $i + 400),
		);

		$data = $skrollrData['contact'];
		$sd_footer = ' data-_footerpos="bottom[outCubic]:-80px" data-_footerpos-'.($data[2]-$data[1]).'="bottom:0px"';


		/* make view */

		return View::make('index', array(
			'projects' => $projects, 
			'clients' => $clients, 
			'timelineEvents' => $timelineEvents,
			'skrollrData' => $skrollrData,
			'posOffset' => $posOffset,
			'sd_footer' => $sd_footer
			)
		);
	}

	public static function getSkrollrParams($section, $data, $end = false) {
		if (!$data) return '';
		if ($section == 'projects') {
			$ret  = ' data-_'.$section.'_0="top[outCubic]:100%" data-_'.$section.'_1'.'="top:0%"';
			$ret .= ' data-_'.$section.'_2'.'="top[cubic]:0%" data-_'.$section.'_3="top:-100%"';
			$ret .= ' data-_'.$section.'_4'.'="top:-200%"';
		} else {
			$ret = ' data-_'.$section.'_0="top[outCubic]:100%" data-_'.$section.'_1'.'="top:0%"';
			if (!$end) $ret .= ' data-_'.$section.'_2'.'="top[cubic]:0%" data-_'.$section.'_3="top:-100%"';
		}
		return $ret;
	}

	public static function getMenuParams($section, $data) {
		$bgs = 'background-color:!#B24538'; $bg = 'background-color:!#D95A49';
		return 'data-_'.$section.'_0="'.$bg.'" data-_'.$section.'_1--1="'.$bgs.'" data-_'.$section.'_3="'. $bg .'"';
	}

}