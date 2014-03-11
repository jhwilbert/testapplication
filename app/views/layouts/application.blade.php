<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8 ie7"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9 ie8"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->

    @include('shared._head')
    
    <body>
    	@include('shared._header')
        <div class="main" role="main">
            <div class="container">
		        @yield('content')
		    </div>
		</div>
    	@include('shared._footer')
    	@include('shared._footer_scripts')
    </body>
    
</html>