<!DOCTYPE html>
<!--[if lt IE 7]>      <html lang="{{ App::getLocale() }}" class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html lang="{{ App::getLocale() }}" class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html lang="{{ App::getLocale() }}" class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html lang="{{ App::getLocale() }}" class="no-js"> <!--<![endif]-->

	@include('shared._head')
	
	<body>
		<!--[if lt IE 7]>
			<p class="browsehappy">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
		<![endif]-->
		<div id="preloader">
			<div id="status">&nbsp;</div>
		</div>
		@include('shared._nav')

		<div class="main" role="main">
			<div class="container-fluid" id="main_container">
				@yield('content')
			</div>
		</div>
		@include('shared._footer')
		@yield('footer')
		@include('shared._footer_scripts')
	</body>
	
</html>