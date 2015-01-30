@if (count($megabanners) > 0)

	<?php

		$skVars::addTrans();
		$skVars::addCont();
		$skVars::addTrans();

		$skData = '';
		$skData .= ' data-0="bottom:0%;"';
		$skData .= ' data-' . ($skVars::overlap()) . '="bottom:0%"';
		$skData .= ' data-' . ($skVars::addPos(500)) . '="bottom:-100%"';
		
		$skVars::addPos(-1000);

		$skVars::nextSection();
	?>

	<section class="section megabanner" id="section-megabanner">

		<div class="megabanner-container">

			<div class="megabanners" id="megabanners">
				@foreach($megabanners as $megabanner)

					<div class="megabanner-image">
						<img src="{{ asset($megabanner->getImagePath('big')) }}">
						<h3>{{ $megabanner["title$lpr"] }}</h3>
					</div>

				@endforeach
			</div>

			<div class="megabanner-nav"{{$skData}}>
				<a href="#section-projects" id="home-arrow-dn" data-menu-top="{{$skVars::$pos}}"><img src="{{ asset('public/img/nav_arrow_dn.png') }}"></a>
			</div>
			
		</div>

	</section>

@endif