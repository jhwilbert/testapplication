
{{ HTML::script('public/js/vendor/jquery-1.11.1.min.js'); }}
<!-- {{ HTML::script('public/js/vendor/skrollr.min.js'); }}
{{ HTML::script('public/js/vendor/skrollr.menu.min.js'); }}
 -->{{ HTML::script('public/js/vendor/bootstrap.js'); }}
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
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-64336811-1', 'auto');
  ga('send', 'pageview');

</script>


