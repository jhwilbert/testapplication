
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

		$feed_lists = array(
			// feeds da coluna 1
			array('http://g1.globo.com/dynamo/tecnologia/rss2.xml', 'http://www.lapisraro.com.br/feed/'),

			// feeds da coluna 2
			array('http://tecnologia.uol.com.br/ultnot/index.xml'),

			// feeds da coluna 3
			array('http://feeds.feedburner.com/ExameInformatica-geral')
		);



		/* make view */

		return View::make('newsfeed.index', array(
			'megabanners' => $megabanners,
			'feed_lists' => $feed_lists,
			'lpr' => $lpr
		));		
	}
}