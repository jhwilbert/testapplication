<?php

class CompanyController extends BaseController {

	public static $timelineEvents = array(
		array(
			'year' => '1977', 
			'left' => true, 
			'description' => 'Inspirados no boom tecnológico em todo o mundo, surge a Projesom como referência no mercado de tecnologia audiovisual em Minas Gerais.',
			'description_en' => '[en] Inspirados no boom tecnológico em todo o mundo, surge a Projesom como referência no mercado de tecnologia audiovisual em Minas Gerais.',
		),
		array(
			'year' => '1977', 
			'left' => false, 
			'description' => 'Inspirados no boom tecnológico em todo o mundo, surge a Projesom como referência no mercado de tecnologia audiovisual em Minas Gerais.',
			'description_en' => '[en] Inspirados no boom tecnológico em todo o mundo, surge a Projesom como referência no mercado de tecnologia audiovisual em Minas Gerais.',
		),
		array(
			'year' => '1977', 
			'left' => true, 
			'description' => 'Reformulação de identidade visual e participação no evento etc e formulação de identidade visual e participação no evento Tal...',
			'description_en' => '[en] Reformulação de identidade visual e participação no evento etc e formulação de identidade visual e participação no evento Tal...',
		),
		array(
			'year' => '1977', 
			'left' => false, 
			'description' => 'Reformulação de identidade visual e participação no evento etc e formulação de identidade visual e participação no evento Tal...',
			'description_en' => '[en] Reformulação de identidade visual e participação no evento etc e formulação de identidade visual e participação no evento Tal...',
		),
		array(
			'year' => '1977', 
			'left' => true, 
			'description' => 'Reformulação de identidade visual e participação no evento etc e formulação de identidade visual e participação no evento Tal...',
			'description_en' => '[en] Reformulação de identidade visual e participação no evento etc e formulação de identidade visual e participação no evento Tal...',
		),
		array(
			'year' => '1977', 
			'left' => false, 
			'description' => 'Reformulação de identidade visual e participação no evento etc e formulação de identidade visual e participação no evento Tal...',
			'description_en' => '[en] Reformulação de identidade visual e participação no evento etc e formulação de identidade visual e participação no evento Tal...',
		),
		array(
			'year' => '1977', 
			'left' => false, 
			'description' => 'Reformulação de identidade visual e participação no evento etc e formulação de identidade visual e participação no evento Tal...',
			'description_en' => '[en] Reformulação de identidade visual e participação no evento etc e formulação de identidade visual e participação no evento Tal...',
		),
		array(
			'year' => '1977', 
			'left' => false, 
			'description' => 'Reformulação de identidade visual e participação no evento etc e formulação de identidade visual e participação no evento Tal...',
			'description_en' => '[en] Reformulação de identidade visual e participação no evento etc e formulação de identidade visual e participação no evento Tal...',
		),
		array(
			'year' => '1977', 
			'left' => false, 
			'description' => 'Reformulação de identidade visual e participação no evento etc e formulação de identidade visual e participação no evento Tal...',
			'description_en' => '[en] Reformulação de identidade visual e participação no evento etc e formulação de identidade visual e participação no evento Tal...',
		),
		array(
			'year' => '1977', 
			'left' => false, 
			'description' => 'Reformulação de identidade visual e participação no evento etc e formulação de identidade visual e participação no evento Tal...',
			'description_en' => '[en] Reformulação de identidade visual e participação no evento etc e formulação de identidade visual e participação no evento Tal...',
		),
	);

	public function index() {

		$megabanners = Megabanner::where('active', 1)->where('show_in_company', 1)->get();

		if (Route::currentRouteName() == 'company_en') {
			App::setLocale('en');
			$lpr = '_en';
		} else {
			$lpr = '';
		}

		/* make view */

		return View::make('company.index', array(
			'megabanners' => $megabanners,
			'timelineEvents' => self::$timelineEvents,
			'lpr' => $lpr,
			'scripts' => array('company.js')
		));		
	}

}

?>