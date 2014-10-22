
<?php

	global $skPos;

	$skData  = ' data-'. $skPos      .'="top[outCubic]:100%"';
	$skData .= ' data-'.($skPos+=400).'="top:0%"';
	$skData .= ' data-'.($skPos+=900).'="top:0%"';
	$skData .= ' data-'.($skPos+=400).'="top:-100%"';

?>

<section class="section section-gray skrollable" id="section-projects"{{ $skData }}>

	<div class="inner-content">
		
		<h2>Trabalhos</h2>
		<h3>Conheça nossos projetos mais recentes</h3>

		<div id="show-project" style="display:none;">
			<div id="slides"></div>
			<h3 id="project-title"></h3>
			<div id="project-description"></div>
		</div>
		<div class="clearfix"></div>

		<div class="projects">
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
		</div>

		<div class="clearfix"></div>
	</div>

</section>