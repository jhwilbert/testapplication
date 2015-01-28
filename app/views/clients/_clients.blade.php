<?php

	if ($skVars::$section > 0) $skVars::overlap();

	$skData  = '';
	if ($skVars::$section > 0) $skData  = ' data-'. $skVars::$pos .'="top[outCubic]:100%"';
	$skData .= ' data-'.($skVars::addTrans()).'="top:0%"';
	$skData .= ' data-'.($skVars::addCont()).'="top:0%"';
	$skData .= ' data-'.($skVars::addTrans()).'="top:-100%"';

	$skVars::nextSection();

?>
<section class="section skrollable" id="section-clients"{{ $skData }}>

	<div class="inner-content">
		<h2>{{Lang::get('messages.clients.title')}}</h2>

		<h3>
			@if (Route::currentRouteName() == 'home')
				{{Lang::get('messages.home.intro_clients')}}
			@else
				{{Lang::get('messages.clients.intro')}}
			@endif
		</h3>

		<div class="clients core-contents row">
			<?php $i = 0; ?>
			@foreach($clients as $client_slug => $client_name)
				<div class="client col-md-5ths">
					<img src="{{ asset('public/img/clients/'.$client_slug.'.png') }}" class="client" alt="{{{$client_name}}}">
				</div>
			@endforeach
		</div>

		<div class="clearfix"></div>

	</div>

</section>