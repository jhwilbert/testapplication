<?php

class SolutionController extends BaseController {


	public function index() {
		$megabanners = Megabanner::where('active', 1)->where('show_in_solutions', 1)->get();

		/* make view */

		return View::make('solutions.index', array(
			'megabanners' => $megabanners,
			'scripts' => array('solutions.js')
		));		
	}


	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id, $lang) {

		if ($id == '1') {
			$result = array(
				'title' => $lang == 'en' ? 'Audio and Video' : 'Engenharia de áudio e vídeo',
				'images' => array(
					array('path' => 'public/img/solutions/image1.jpg', 'description' => 'Reforma do teatro SESC Ceilândia (DF)'),
					array('path' => 'public/img/solutions/image1.jpg', 'description' => 'teste'),
				)
			);
		}

		return Response::json( $result );
	}



}