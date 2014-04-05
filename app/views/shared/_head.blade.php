<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Projesom</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Place favicon.ico and apple-touch-icon.png in the root directory -->

	<link href='http://fonts.googleapis.com/css?family=Montserrat:400,700' rel='stylesheet' type='text/css'>
	{{ HTML::style('public/css/normalize.css'); }}
	{{ HTML::style('public/css/main.css'); }}

    <script type="text/javascript">
        var posOffset = {{ $posOffset }};
        var positions = [];
        positions['#section-home'] = -posOffset;
        positions['#section-projects'] = {{ $skrollrData['projects'][0] }};
        positions['#section-clients'] = {{ $skrollrData['clients'][0] }};
        positions['#section-timeline'] = {{ $skrollrData['timeline'][0] }};
        positions['#section-contact'] = {{ $skrollrData['contact'][0] }};
    </script>

    {{ HTML::style('public/css/application.css'); }}
	{{ HTML::style('public/css/skrollr.css'); }}

	{{ HTML::script('public/js/vendor/modernizr-2.6.2.min.js'); }}
</head>