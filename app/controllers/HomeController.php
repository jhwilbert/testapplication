<?php

class HomeController extends BaseController {

	public function index()	{

		$megabanners = Megabanner::where('active', 1)->get();


		/* make view */

		return View::make('index', array(
			'megabanners' => $megabanners
		));
	}


}