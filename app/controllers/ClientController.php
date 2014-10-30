
<?php

class ClientController extends BaseController {

	public static $clients = array(
		'fundacao-carlos-chagas' => 'Fundação Carlos Chagas',
		'usiminas' => 'Usiminas',
		'teatro-oi-brasilia' => 'Teatro Oi Brasília',
		'fundacao-clovis-salgado' => 'Fundação Clóvis Salgado',
		'fundacao-bradesco' => 'Fundação Bradesco',
		'fundacao-universa' => 'Fundação Universa',
		'sesc' => 'SESC',
		'apex-brasil' => 'Apex Brasil',
	);

	public function index() {

		$megabanners = Megabanner::where('active', 1)->get();

		$clients = self::$clients;

		/* make view */

		return View::make('clients.index', array(
			'megabanners' => $megabanners,
			'clients' => $clients,
		));		
	}
}