<section class="section section-gray skrollable" id="section-projects"{{ $sd }}>

	<h2>Trabalhos</h2>
	<h3>Conheça nossos projetos mais recentes</h3>

	@foreach($projects as $project)

		<div class="project">

			<a href="{{ route('show_project', $project->id) }}" class="project-link">
				<div class="plus-icon"></div>
				<div class="hover"></div>
				<div class="project-image">

					@if($project_image = $project->image())
						<img src="{{ asset($project_image->getImagePath('thumb')) }}">
					@endif

				</div>
				<h4>{{{ $project->title }}}</h4>
			</a>

		</div>

	@endforeach

	<div class="clearfix"></div>

</section>