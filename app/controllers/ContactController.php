<?php

class ContactController extends BaseController {

	public function index() {

		if (Route::currentRouteName() == 'contact_en') {
			App::setLocale('en');
			$lpr = '_en';
		} else {
			$lpr = '';
		}

		$megabanners = Megabanner::where('active', 1)->where('show_in_contact', 1)->get();

		/* make view */
		return View::make('contact.index', array(
			'megabanners' => $megabanners,
			'lpr' => $lpr,
		));	
	}


}