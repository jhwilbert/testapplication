
@if (count($megabanners) > 0)
	<section class="section megabanner" id="section-megabanner">
		<div class="megabanner-container">
			<div class="megabanners" id="megabanners">
				@foreach($megabanners as $megabanner)

					<div class="megabanner-image">
						<img src="{{ asset($megabanner->getImagePath('big')) }}">
						<!-- <h3>{{ $megabanner["title$lpr"] }}</h3> -->
					</div>

				@endforeach
			</div>
			
		</div>



	</section>

@endif