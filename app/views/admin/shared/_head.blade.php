<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Projesom Admin</title>

  <!-- Bootstrap -->
  {{ HTML::style('public/css/admin.css'); }}
  
  <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
  <![endif]-->

  <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
  {{ HTML::script('public/js/vendor/jquery-1.11.1.min.js'); }}
  <!-- Include all compiled plugins (below), or include individual files as needed -->
  {{ HTML::script('public/js/vendor/bootstrap.js'); }}
  {{ HTML::script('public/js/vendor/tinymce/tinymce.min.js'); }}
  {{ HTML::script('public/js/admin.js'); }}
  
</head>