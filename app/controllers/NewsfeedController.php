
<?php

class NewsfeedController extends BaseController {

	public function index() {


		if (Route::currentRouteName() == 'projects_en') {
			App::setLocale('en');
			$lpr = '_en';
		} else {
			$lpr = '';
		}

		$megabanners = Megabanner::where('active', 1)->where('show_in_newsfeed', 1)->get();

		/* make view */

		return View::make('newsfeed.index', array(
			'megabanners' => $megabanners,
			'lpr' => $lpr
		));		
	}
}