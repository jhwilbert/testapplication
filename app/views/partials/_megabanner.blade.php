<section class="section megabanner" id="section-megabanner">

	<?php 
		$skPos = 0;
		$skStart = 150;
		$slHeight = 400;
	?>

	@foreach($megabanners as $megabanner)

		<?php 
			$skData = '';
			if ($skPos > 0) $skData .= 'data-' . ($skPos - $skStart) . '="top:100%;"';
			$skData .= 'data-' . ($skPos) . '="top:0%;" data-' . ($skPos + $skStart) . '="top[cubic]:0%;" data-' . ($skPos + $skStart + $slHeight) . '="top:-100%;"';
		?>

		<div class="megabanner-image" {{$skData}}>
			<img src="{{ asset($megabanner->getImagePath('big')) }}">
			<h3>{{ $megabanner->title }}</h3>
		</div>

		<?php $skPos += $skStart + $slHeight; ?>

	@endforeach

	<div id="home-text-box" class="inner-content home-content">

		<a href="#section-projects" id="home-arrow-dn"><img src="{{ asset('public/img/nav_arrow_dn.png') }}"></a>

	</div>

</section>