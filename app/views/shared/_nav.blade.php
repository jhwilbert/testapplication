<div id="main-menu" class="skrollable">

	<?php
		$crn = Route::currentRouteName(); 
		$home_url = ($crn == 'home') ? '#section-megabanner' : route("home$lpr"); 
	?>
	<a class="logo" href="{{ $home_url }}" id="logo">{{ HTML::image('public/img/logo.png') }}</a>
	<div class="menu-container">
		<ul class="nav">
			<li>{{ link_to_route("the_company$lpr", Lang::get('messages.nav.the_company'), null, array('class' => ($crn == 'the_company') ? 'active' : null )) }}</li>
			<li>{{ link_to_route("projects$lpr", Lang::get('messages.nav.projects'), null, array('class' => ($crn == 'projects') ? 'active' : null )) }}</li>
			<li>{{ link_to_route("solutions$lpr", Lang::get('messages.nav.solutions'), null, array('class' => ($crn == 'solutions') ? 'active' : null )) }}</li>
			<li>{{ link_to_route("clients$lpr", Lang::get('messages.nav.clients'), null, array('class' => ($crn == 'clients') ? 'active' : null )) }}</li>
			<li>{{ link_to_route("contact$lpr", Lang::get('messages.nav.contact'), null, array('class' => ($crn == 'contact') ? 'active' : null )) }}</li>
			<li class="newsfeed"><a class="{{($crn == 'newsfeed') ? ' active' : ''}}" href="{{ route("newsfeed$lpr") }}"><img src="{{ asset('public/img/nav_newsfeed_ico.png') }}"> Newsfeed</a></li>
		</ul>
		<div id="menu_marker"></div>
		<div class="clearfix"></div>
	</div>
</div>

