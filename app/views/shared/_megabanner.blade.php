@if (count($megabanners) > 0)

	<section class="section megabanner" id="section-megabanner">

		<?php
			global $skPos;
			$skPos = 0;
		
			$total_megabanners = sizeof($megabanners);
			$skStart = 1000;
			$slHeight = 500;
			$i = 0;
		?>
		<div class="megabanners">
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
					<h3>{{ $megabanner["title$lpr"] }}</h3>
				</div>

				<?php $skPos += $skStart + $slHeight; $i++; ?>

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