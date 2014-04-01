<section class="section section-gray skrollable" id="section-projects"{{ $sd }}>

	<h2>Trabalhos</h2>
	<h3>Conheça nossos projetos mais recentes</h3>

	@foreach($projects as $project)

		<div class="project">

			<div class="project-image">

				@if($project_image = $project->project_images->first())
					<img src="{{ asset($project_image->getImagePath('thumb')) }}">
				@endif

			</div>
			<h4>{{{ $project->title }}}</h4>

		</div>

	@endforeach

	<div class="clearfix"></div>

</section>