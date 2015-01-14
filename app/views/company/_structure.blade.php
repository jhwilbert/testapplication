<?php

	global $skPos;
	if (!$skPos) $skPos = 0;
	else $skPos -= 300;

	$skData  = ' data-'. $skPos      .'="top[outCubic]:100%"';
	$skData .= ' data-'.($skPos+=400).'="top:0%"';
	$skData .= ' data-'.($skPos+=900).'="top:0%"';
	$skData .= ' data-'.($skPos+=400).'="top:-100%"';
?>
<section class="section skrollable" id="section-company"{{ $skData }}>

	<div class="inner-content container">
		<h2>{{Lang::get('messages.structure.title')}}</h2>

		<div class="structure core-contents" id="structure_slides">

			<div class="row">
				<div class="col-md-4">
					<img src="{{ asset('public/img/company/IMG_20150113_172930.jpg') }}">
				</div>
				<div class="col-md-8">
					@if (App::getLocale() == 'en')
						<h3>Tradição sempre atualizada</h3>	
						<p class="text">
							Aliar o pioneirismo à vanguarda é o nosso desafio de todo dia. Colocamos à disposição de nossos clientes décadas de experiência somadas ao que há de mais moderno em audiovisual. 
						</p>
					@else
						<h3>Tradição sempre atualizada</h3>	
						<p class="text">
							Aliar o pioneirismo à vanguarda é o nosso desafio de todo dia. Colocamos à disposição de nossos clientes décadas de experiência somadas ao que há de mais moderno em audiovisual. 
						</p>
					@endif
				</div>
			</div>
			
			<div class="row">
				<div class="col-md-8">
					@if (App::getLocale() == 'en')
						<h3>Experiência internacional</h3>	
						<p class="text">
							A Projesom está presente nas maiores feiras e congressos de audiovisual em todo o mundo. Manter os olhos no futuro é fundamental para ficar por dentro de tudo que está por vir em uma área que evolui tão rapidamente.
						</p>
					@else
						<h3>Experiência internacional</h3>	
						<p class="text">
							A Projesom está presente nas maiores feiras e congressos de audiovisual em todo o mundo. Manter os olhos no futuro é fundamental para ficar por dentro de tudo que está por vir em uma área que evolui tão rapidamente.
						</p>
					@endif					
				</div>
				<div class="col-md-4">
					<img src="{{ asset('public/img/company/IMG_20150113_172731.jpg') }}">
				</div>
			</div>


		</div>

	</div>

</section>