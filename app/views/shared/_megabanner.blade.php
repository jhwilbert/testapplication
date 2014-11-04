@if (count($megabanners) > 0)

	<?php

		global $skPos;
		if (!$skPos) $skPos = 0;
		else $skPos -= 500;

		$skData  = '';
		if ($skPos != 0) $skData  = ' data-'. $skPos      .'="top[outCubic]:100%"';
		$skData .= ' data-'.($skPos+=400).'="top:0%"';
		$skData .= ' data-'.($skPos+=900).'="top:0%"';
		$skData .= ' data-'.($skPos+=400).'="top:-100%"';

	?>

	<section class="section megabanner" id="section-megabanner">

		<div class="megabanners" id="megabanners">
			@foreach($megabanners as $megabanner)

				<div class="megabanner-image">
					<img src="{{ asset($megabanner->getImagePath('big')) }}">
					<h3>{{ $megabanner["title$lpr"] }}</h3>
				</div>

			@endforeach
		</div>


		<?php 
			$skData = '';

			$skData .= 'data-0="bottom:0%;" ';
			$skData .= 'data-' . ($skPos - 500) . '="bottom:0%"';
			$skData .= 'data-' . ($skPos) . '="bottom:-100%"';

		?>

		<div class="megabanner-nav" {{$skData}}>

			<a href="#section-projects" id="home-arrow-dn" data-menu-top="{{$skPos}}"><img src="{{ asset('public/img/nav_arrow_dn.png') }}"></a>

		</div>

	</section>
@endif