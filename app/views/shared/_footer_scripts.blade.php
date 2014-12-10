
{{ HTML::script('public/js/vendor/jquery-1.11.1.min.js'); }}
{{ HTML::script('public/js/vendor/skrollr.min.js'); }}
{{ HTML::script('public/js/vendor/skrollr.menu.min.js'); }}
{{ HTML::script('public/js/vendor/bootstrap.js'); }}
{{ HTML::script('public/js/vendor/jquery.slides.min.js'); }}
{{ HTML::script('public/js/plugins.js'); }}
{{ HTML::script('public/js/application.js'); }}
{{ HTML::script('public/js/megabanners.js'); }}

@if (isset($scripts)) 
	@foreach ($scripts as $script)
		{{ HTML::script('public/js/'.$script); }}
	@endforeach
@endif

<!-- Google Analytics: change UA-XXXXX-X to be your site's ID. -->
<script>
    (function(b,o,i,l,e,r){b.GoogleAnalyticsObject=l;b[l]||(b[l]=
    function(){(b[l].q=b[l].q||[]).push(arguments)});b[l].l=+new Date;
    e=o.createElement(i);r=o.getElementsByTagName(i)[0];
    e.src='//www.google-analytics.com/analytics.js';
    r.parentNode.insertBefore(e,r)}(window,document,'script','ga'));
    ga('create','UA-XXXXX-X');ga('send','pageview');
</script>


