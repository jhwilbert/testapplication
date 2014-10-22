
<?php 
	global $skPos;
	$sd_footer = ' data-'.$skPos.'="bottom[outCubic]:-80px" data-'.($skPos+=50).'="bottom:0px"';

?>

<footer id="section-footer" class="skrollable" {{$sd_footer}}>
	<a href="#section-megabanner">Back to Top</a>
</footer>