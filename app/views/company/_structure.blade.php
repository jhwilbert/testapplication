<?php

	global $skPos;
	if (!$skPos) $skPos = 0;
	else $skPos -= 300;

	$skData  = ' data-'. $skPos      .'="top[outCubic]:100%"';
	$skData .= ' data-'.($skPos+=400).'="top:0%"';
	$skData .= ' data-'.($skPos+=900).'="top:0%"';
	$skData .= ' data-'.($skPos+=400).'="top:-100%"';
?>
<section class="section section-gray skrollable" id="section-company"{{ $skData }}>

	<div class="inner-content container">
		<h2>{{Lang::get('messages.structure.title')}}</h2>

		<div class="structure core-contents" id="structure_slides">

			<div class="row">
				<div class="col-md-4">
					<img src="{{ asset('public/img/company/estrutura_img1.jpg') }}">
				</div>
				<div class="col-md-8">
					@if (App::getLocale() == 'en')
						<h3>Our Office</h3>	
						<p>
							Falar do acervo e estrutura do escritório, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
						</p>
					@else
						<h3>Nossa Sede</h3>	
						<p>
							Falar do acervo e estrutura do escritório, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
						</p>
					@endif
				</div>
			</div>
			
			<div class="row">
				<div class="col-md-8">
					@if (App::getLocale() == 'en')
						<h3>Our team</h3>	
						<p>
							Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
						</p>
					@else
						<h3>Equipe</h3>	
						<p>
							Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
						</p>
					@endif					
				</div>
				<div class="col-md-4">
					<img src="{{ asset('public/img/company/estrutura_equipe.jpg') }}">
				</div>
			</div>
			
			<div class="row">
				<div class="col-md-4">
					<img src="{{ asset('public/img/company/estrutura_diretoria.jpg') }}">
				</div>
				<div class="col-md-8">
					@if (App::getLocale() == 'en')
						<h3>Diretoria</h3>	
						<p>
							O casal João Carlos e Georgina Wilbert são os gestores da Projesom. Experiência, curiosidade, bom senso e honestidade são marcas e valores pessoais da dupla. Essas características são também valorizadas na política de administração da empresa.
						</p>
					@else
						<h3>Diretoria</h3>	
						<p>
							O casal João Carlos e Georgina Wilbert são os gestores da Projesom. Experiência, curiosidade, bom senso e honestidade são marcas e valores pessoais da dupla. Essas características são também valorizadas na política de administração da empresa.
						</p>
					@endif
				</div>
			</div>

		</div>

	</div>

</section>