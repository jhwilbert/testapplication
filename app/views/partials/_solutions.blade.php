
<?php

	global $skPos;
	if (!$skPos) $skPos = 0;
	else $skPos -= 500;

	$skData  = ' data-'. $skPos      .'="top[outCubic]:100%"';
	$skData .= ' data-'.($skPos+=400).'="top:0%"';
	$skData .= ' data-'.($skPos+=900).'="top:0%"';
	$skData .= ' data-'.($skPos+=400).'="top:-100%"';
	$skData .= ' data-emit-events';
?>

<section class="section section-gray skrollable" id="section-solutions"{{ $skData }}>

	<div class="inner-content container">
		
		<h2>Soluções</h2>
		<h3>Conheça nossos serviços</h3>
	</div>

</section>