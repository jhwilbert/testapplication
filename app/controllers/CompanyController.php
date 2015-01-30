<?php

class CompanyController extends BaseController {

	public function index() {

		$megabanners = Megabanner::where('active', 1)->where('show_in_company', 1)->get();

		$timelineEvents = TimelineEvent::where('active', 1)->orderBy('date', 'DESC')->get();

		if (Route::currentRouteName() == 'company_en') {
			App::setLocale('en');
			$lpr = '_en';
		} else {
			$lpr = '';
		}

		/* make view */

		return View::make('company.index', array(
			'megabanners' => $megabanners,
			'timelineEvents' => $timelineEvents,
			'lpr' => $lpr,
			'scripts' => array('company.js')
		));		
	}

}

?>