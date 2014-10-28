<?php

class SolutionController extends BaseController {

	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id) {

		if ($id == '1') {
			$result = array(
				'title' => 'Engenharia de áudio e vídeo',
				'images' => array(
					array('path' => 'public/img/solutions/image1.jpg', 'description' => 'Reforma do teatro SESC Ceilândia (DF)'),
					array('path' => 'public/img/solutions/image1.jpg', 'description' => 'teste'),
				)
			);
		}

		return Response::json( $result );
	}



}