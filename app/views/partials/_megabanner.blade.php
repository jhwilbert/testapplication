<section class="section megabanner" id="section-megabanner">

	<?php

		global $skPos;
		$skPos = 0;
		
		$total_megabanners = sizeof($megabanners);
		$skStart = 1000;
		$slHeight = 500;
		$i = 0;
	?>

	@foreach($megabanners as $megabanner)

		<?php 
			$skData = '';
			$is_first = ($i == 0);
			$is_last = ($i == $total_megabanners - 1);

			if (!$is_first) $skData .= 'data-' . ($skPos - $skStart - $slHeight) . '="left:100%;"';

			if (!$is_last) {
				$skData .= 'data-' . ($skPos) . '="left:0%;top:0%" data-' . ($skPos + $skStart) . '="left[cubic]:0%;"';
				$skData .= ' data-' . ($skPos + $skStart + $slHeight) . '="left:-100%;"';
			} else {
				$skData .= 'data-' . ($skPos) . '="left:0%;top:0%" data-' . ($skPos + $skStart) . '="left[cubic]:0%;"';
				$skData .= ' data-' . ($skPos + $skStart + $slHeight) . '="top:-100%;"';
			}

		?>

		<div class="megabanner-image" {{$skData}}>
			<img src="{{ asset($megabanner->getImagePath('big')) }}">
			<h3>{{ $megabanner->title }}</h3>
		</div>

		<?php $skPos += $skStart + $slHeight; $i++; ?>

	@endforeach

	<div id="home-text-box" class="inner-content home-content">

		<a href="#section-projects" id="home-arrow-dn"><img src="{{ asset('public/img/nav_arrow_dn.png') }}"></a>

	</div>

</section>