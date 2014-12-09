<?php

class SolutionController extends BaseController {


	public function index() {

		if (Route::currentRouteName() == 'solutions_en') {
			App::setLocale('en');
			$lpr = '_en';
		} else {
			$lpr = '';
		}

		$megabanners = Megabanner::where('active', 1)->where('show_in_solutions', 1)->get();

		/* make view */

		return View::make('solutions.index', array(
			'megabanners' => $megabanners,
			'lpr' => $lpr,
			'scripts' => array('solutions.js')
		));		
	}


	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id, $lang = 'pt') {

		$root_url = URL::to('/');
		if ($id == '1') {
			if ($lang == 'en') {
				$result = array(
					'title' => 'Audio and Video',
					'images' => array(
						array(
							'path' => $root_url.'/public/img/solutions/image1.jpg', 
							'description' => 'Reforma do teatro SESC Ceilândia (DF)',
						),
						array(
							'path' => $root_url.'/public/img/solutions/image1.jpg', 
							'description' => 'teste',
						),
					)
				);
			} else {
				$result = array(
					'title' => 'Engenharia de áudio e vídeo',
					'images' => array(
						array(
							'path' => $root_url.'/public/img/solutions/image1.jpg', 
							'description' => 'Reforma do teatro SESC Ceilândia (DF)',
						),
						array(
							'path' => $root_url.'/public/img/solutions/image1.jpg', 
							'description' => 'teste',
						),
					)
				);
			}
		}

		return Response::json( $result );
	}



}