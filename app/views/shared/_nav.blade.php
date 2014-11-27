<nav class="navbar navbar-default skrollable" role="navigation" id="main-menu">
	<?php
		$crn = Route::currentRouteName(); 
		$home_url = ($crn == 'home') ? '#section-megabanner' : route("home$lpr"); 
	?>
	<a class="logo" href="{{ $home_url }}" id="logo">{{ HTML::image('public/img/logo.png') }}</a>
	@if (App::getLocale() == 'en')
		{{ link_to_route('home', 'Português', null, array('class' => 'language-btn')) }}
	@else
		{{ link_to_route('home_en', 'English', null, array('class' => 'language-btn')) }}
	@endif

	<div class="navbar-header">
		<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar-collapse">
			<span class="sr-only">Toggle navigation</span>
			<span class="icon-bar"></span>
			<span class="icon-bar"></span>
			<span class="icon-bar"></span>
		</button>
	</div>

	<div class="clearfix"></div>
	<div class="collapse navbar-collapse menu-container" id="navbar-collapse">
		<ul class="nav navbar-nav">
			<?php $areas = array('company', 'projects', 'solutions', 'clients', 'contact'); ?>
			@foreach ($areas as $area)
				<li>{{ link_to_route("$area$lpr", Lang::get("messages.nav.$area"), null, array('class' => ($crn == $area || $crn == "$area$lpr") ? 'active' : null )) }}</li>
			@endforeach
			<li class="newsfeed"><a class="{{($crn == 'newsfeed' || $crn == 'newsfeed_en') ? ' active' : ''}}" href="{{ route("newsfeed$lpr") }}"><img src="{{ asset('public/img/nav_newsfeed_ico.png') }}"> Newsfeed</a></li>
		</ul>
		<div id="menu_marker"></div>
	</div>
	<div class="clearfix"></div>
</nav>