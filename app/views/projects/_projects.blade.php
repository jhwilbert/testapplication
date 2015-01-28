<?php

	if ($skVars::$section > 0) $skVars::overlap();

	$skData  = '';
	if ($skVars::$section > 0) $skData  = ' data-'. $skVars::$pos .'="top[outCubic]:100%"';
	$skData .= ' data-'.($skVars::addTrans()).'="top:0%"';
	$breakPointUp = $skVars::$pos;
	$skData .= ' data-'.($skVars::addCont()).'="top:0%"';
	$breakPointDown = $skVars::$pos;
	$skData .= ' data-'.($skVars::addTrans()).'="top:-100%"';
	$skData .= ' data-emit-events';

	$skVars::nextSection();

?>
<script type="text/javascript">
	var projectsBpUp = 'data<?php echo $breakPointUp; ?>';
	var projectsBpDn = 'data<?php echo $breakPointDown; ?>';
</script>


<section class="section section-gray skrollable" id="section-projects"{{ $skData }}>

	<div class="inner-content container">
		
		@if (Route::currentRouteName() == 'home')
			<h2>{{Lang::get('messages.home.title_projects')}}</h2>
			<h3>{{Lang::get('messages.home.intro_projects')}}</h3>
		@else
			<h2>{{Lang::get('messages.projects.title')}}</h2>
			<h3>{{Lang::get('messages.projects.intro')}}</h3>
		@endif

		<div class="projects row">
			@foreach($projects as $project)
				<div class="col-md-4">
					<div class="project">
						<a href="{{ route('show_project', array($project->id, App::getLocale())) }}" class="project-link">
							<div class="plus-icon"></div>
							<div class="hover"></div>
							<div class="project-image">
								@if($project_image = $project->image())
									<img src="{{ asset($project_image->getImagePath('thumb')) }}">
								@endif
							</div>
							<h4>{{{ $project["title$lpr"] }}}</h4>
						</a>
					</div>
				</div>
			@endforeach
		</div>

	</div>

</section>
