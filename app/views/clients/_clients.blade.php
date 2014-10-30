<?php

	global $skPos;
	if (!$skPos) $skPos = 0;
	else $skPos -= 300;

	$skData  = ' data-'. $skPos      .'="top[outCubic]:100%"';
	$skData .= ' data-'.($skPos+=400).'="top:0%"';
	$skData .= ' data-'.($skPos+=900).'="top:0%"';
	$skData .= ' data-'.($skPos+=400).'="top:-100%"';
?>
<section class="section skrollable" id="section-clients"{{ $skData }}>

	<div class="inner-content">
		<h2>Clientes</h2>

		<h3>
			@if (Route::currentRouteName() == 'home')
				Parceiros comerciais de tradição
			@else
				Conheça algumas empresas e instituições que confiaram à Projesom seus projetos
			@endif
		</h3>

		<div class="clients">
			@foreach($clients as $client_slug => $client_name)
				<img src="{{ asset('public/img/clients/'.$client_slug.'.gif') }}" class="client" alt="{{{$client_name}}}">
			@endforeach
		</div>

		<div class="clearfix"></div>

	</div>

</section>