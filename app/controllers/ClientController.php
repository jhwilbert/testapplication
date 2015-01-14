
<?php

class ClientController extends BaseController {

	public static $clients = array(

		'clientes-projesom_03' => 'Apex Brasil',
		'clientes-projesom_06' => 'TCU',
		'clientes-projesom_09' => 'Sesc',
		'clientes-projesom_11' => 'Banco do Brasil',
		'clientes-projesom_14' => 'TJMG',
		'clientes-projesom_22' => 'BDMG',
		'clientes-projesom_25' => 'FIAT',
		'clientes-projesom_28' => 'CRCMG',
		'clientes-projesom_31' => 'BID',
		'clientes-projesom_34' => 'Assembleia de Minas',
		'clientes-projesom_42' => 'Hospital Madre Teresa',
		'clientes-projesom_44' => 'Petrobras',
		'clientes-projesom_47' => 'Blue Tree Hotels',
		'clientes-projesom_50' => 'UFMG',
		'clientes-projesom_53' => 'Fundação Clóvis Salgado',
	);

	public function index() {

		if (Route::currentRouteName() == 'clients_en') {
			App::setLocale('en');
			$lpr = '_en';
		} else {
			$lpr = '';
		}

		$megabanners = Megabanner::where('active', 1)->where('show_in_clients', 1)->get();

		$clients = self::$clients;

		/* make view */

		return View::make('clients.index', array(
			'megabanners' => $megabanners,
			'clients' => $clients,
			'lpr' => $lpr,
		));		
	}
}