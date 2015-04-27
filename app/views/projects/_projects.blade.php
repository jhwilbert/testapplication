
<section class="section section-gray" id="section-projects">
	
	<div class="project-modal">


	<div class="close-project"><img src="../public/img/close_btn.png"></div>

		<div id="next-btn">next</div>
		<div id="prev-btn">prev</div>

		<div id="modal-container"></div>


	</div>

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
			@foreach($projects as $project)
				<a href="{{ route('show_project', array($project->id, App::getLocale())) }}" class="project-link">
				<div class="col-md-4" >
					<div class="project center-block">
							<div class="plus-icon"></div>
							<div class="hover"></div>
							<div class="project-image">
								@if($project_image = $project->image())
									<img src="{{ asset($project_image->getImagePath('thumb')) }}">
								@endif
							</div>
							<div class='project-title'>{{{ $project["title$lpr"] }}}</div>
							<div class='project-location'>{{{ $project["location"] }}}</div>
							
						
					</div>
				</div>
				</a>
			@endforeach
		</div>

	</div>

</section>

