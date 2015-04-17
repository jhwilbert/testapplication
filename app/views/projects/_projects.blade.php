
<section class="section section-gray" id="section-projects">

	<div class="inner-content container">
			@if (Route::currentRouteName() == 'home')
				<h2>{{Lang::get('messages.home.title_projects')}}</h2>
				<div class="intro-container">
					<h3>{{Lang::get('messages.projects.subintro')}}</h3>
				</div>
			@else
				<h2>{{Lang::get('messages.projects.subtitle')}}</h2>
				<div class="intro-container">
					<h3>{{Lang::get('messages.projects.subintro')}}</h3>
				</div>
			@endif

		<div class="projects row">
			<?php  
				$i=0;
				$r=0; 
			?>
			@foreach($projects as $project)
				@if (!($i % 3))
					<?php $r++ ?>
					<div id="row_{{ $r }}" class="clearfix">
				@endif
				<div class="col-md-4 " >
					<div id="{{ $i }}" class="project center-block">
						<a href="{{ route('show_project', array($project->id, App::getLocale())) }}" class="project-link" id="{{ $i }}">
							<div class="plus-icon"></div>
							<div class="hover"></div>
							<div class="project-image">
								@if($project_image = $project->image())
									<img src="{{ asset($project_image->getImagePath('thumb')) }}">
								@endif
							</div>
							<div class='project-title'>{{{ $project["title$lpr"] }}}</div>
							<div class='project-location'>{{{ $project["location"] }}}</div>
							
						</a>
					</div>
				</div>
				<?php $i++ ?>
				@if (!($i % 3))
					</div>
				@endif
			@endforeach
		</div>

	</div>

</section>

