<?php

	global $skPos;
	if (!$skPos) $skPos = 0;
	else $skPos -= 300;
	
	$skData  = '';
	if ($skPos != 0) $skData  = ' data-'. $skPos      .'="top[outCubic]:100%"';
	$skData .= ' data-'.($skPos+=400).'="top:0%"';
	$skData .= ' data-'.($skPos+=900).'="top:0%"';
	$skData .= ' data-'.($skPos+=400).'="top:-100%"';
?>

<section class="section skrollable" id="section-newsfeed"{{ $skData }}>

	<div class="inner-content container">
		
		<h2>Newsfeed</h2>

		<div class="row newsfeed">
			<div class="col-md-6">


			</div>
			
			<div class="col-md-6">

			</div>
		</div>
	</div>

</section>