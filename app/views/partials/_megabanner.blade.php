<section class="section megabanner" id="section-megabanner">


	@foreach($megabanners as $megabanner)

		<div class="megabanner-image">
			<img src="{{ asset($megabanner->getImagePath('big')) }}">
			<h3>{{ $megabanner->title }}</h3>
		</div>

	@endforeach

	<div id="home-text-box" class="inner-content home-content">

		<a href="#section-projects" id="home-arrow-dn"><img src="{{ asset('public/img/nav_arrow_dn.png') }}"></a>

	</div>

</section>