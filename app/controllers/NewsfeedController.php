
<?php

class NewsfeedController extends BaseController {

	public function index() {

		$megabanners = Megabanner::where('active', 1)->get();

		/* make view */

		return View::make('newsfeed.index', array(
			'megabanners' => $megabanners,
		));		
	}
}