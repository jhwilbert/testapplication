<?php

class HomeController extends BaseController {

	public function index()	{

		$projects = Project::where('featured', 1)->orderBy('created_at', 'desc')->take(3)->get();
		$clients = array(
			'fundacao-carlos-chagas' => 'Fundação Carlos Chagas',
			'usiminas' => 'Usiminas',
			'teatro-oi-brasilia' => 'Teatro Oi Brasília',
			'fundacao-clovis-salgado' => 'Fundação Clóvis Salgado',
			'fundacao-bradesco' => 'Fundação Bradesco',
			'fundacao-universa' => 'Fundação Universa',
			'sesc' => 'SESC',
			'apex-brasil' => 'Apex Brasil',
		);

		return View::make('index', array('projects' => $projects, 'clients' => $clients));
	}

}