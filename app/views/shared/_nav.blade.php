<div id="main-menu" class="skrollable">

	<?php
		$crn = Route::currentRouteName(); 
		$home_url = ($crn == 'home') ? '#section-megabanner' : route('home'); 
	?>
	<a class="logo" href="{{ $home_url }}" id="logo">{{ HTML::image('public/img/logo.png') }}</a>
	<div class="menu-container">
		<ul class="nav">
			<li>{{ link_to_route('the_company', 'A Empresa', null, array('class' => ($crn == 'the_company') ? 'active' : null )) }}</li>
			<li>{{ link_to_route('projects', 'Projetos', null, array('class' => ($crn == 'projects') ? 'active' : null )) }}</li>
			<li>{{ link_to_route('solutions', 'Soluções', null, array('class' => ($crn == 'solutions') ? 'active' : null )) }}</li>
			<li>{{ link_to_route('clients', 'Clientes', null, array('class' => ($crn == 'clients') ? 'active' : null )) }}</li>
			<li><a href="#section-contact">Contato</a></li>
			<li class="newsfeed"><a href="#"><img src="{{ asset('public/img/nav_newsfeed_ico.png') }}"> Newsfeed</a></li>
		</ul>
		<div id="menu_marker"></div>
		<div class="clearfix"></div>
	</div>
</div>

