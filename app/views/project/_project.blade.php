<div id="grey-bg"></div>
<section>
	<div class="inner-content container">
			<div id="project-nav">
				<div class="project-button" id="prev-btn"></div>
				<div class="project-button" id="next-btn"></div>
				
			</div>
			<div id="project-images">
				<div id="project-slides-container">
					
				<div id="project-slides">
					@foreach ($result['image_paths'] as $image_path)
						<img src='{{ $image_path }}'>
					@endforeach
				</div>
			</div>
		</div>
		<div id='project-title-open'>{{$result['title']}}</div>
		<div id='project-location-open'>{{$result['location']}}</div>
		<div id='project-description-open' class="col-md-6">{{$result['description']}}</div>
		<div id='project-technology-open'  class="col-md-6">{{$result['technology']}}</div>
	</div>
</section>

