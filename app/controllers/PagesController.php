<?php

class PagesController extends BaseController {

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
			'scripts' => array('company.js')
		));		
	}

	public function contact() {
		/* make view */

		$megabanners = Megabanner::where('active', 1)->get();

		return View::make('contact.index', array(
			'megabanners' => $megabanners,
		));			
	}


}