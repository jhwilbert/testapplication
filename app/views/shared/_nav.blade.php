<div id="main-menu" class="skrollable">
	<a class="logo" href="{{route('home')}}#section-megabanner" id="logo">{{ HTML::image('public/img/logo.png') }}</a>
	<div class="menu-container">
		<ul class="nav">
			<?php $crn = Route::currentRouteName(); ?>	 
			<li>{{ link_to_route('the_company', 'A Empresa', null, array('class' => ($crn == 'the_company') ? 'active' : null )) }}</li>
			<li><a href="#section-projects">Projetos</a></li>
			<li><a href="#">Soluções</a></li>
			<li><a href="#section-clients">Clientes</a></li>
			<li><a href="#section-contact">Contato</a></li>
			<li class="newsfeed"><a href="#"><img src="{{ asset('public/img/nav_newsfeed_ico.png') }}"> Newsfeed</a></li>
		</ul>
		<div id="menu_marker"></div>
		<div class="clearfix"></div>
	</div>
</div>

