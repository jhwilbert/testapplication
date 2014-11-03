<?php

class ContactController extends BaseController {

	public function contact() {
		/* make view */

		$megabanners = Megabanner::where('active', 1)->where('show_in_contact', 1)->get();

		return View::make('contact.index', array(
			'megabanners' => $megabanners,
		));			
	}


}