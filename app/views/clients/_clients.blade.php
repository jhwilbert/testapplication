<?php

	global $skPos;
	if (!$skPos) $skPos = 0;
	else $skPos -= 300;

	$skData  = '';
	if ($skPos != 0) $skData  = ' data-'. $skPos .'="top[outCubic]:100%"';
	$skData .= ' data-'.($skPos+=400).'="top:0%"';
	$skData .= ' data-'.($skPos+=900).'="top:0%"';
	$skData .= ' data-'.($skPos+=400).'="top:-100%"';
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
				<div class="col-md-5ths col-sm-3">
					<img src="{{ asset('public/img/clients/'.$client_slug.'.png') }}" class="client" alt="{{{$client_name}}}">
				</div>
			@endforeach
		</div>

		<div class="clearfix"></div>

	</div>

</section>