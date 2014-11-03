
<?php

	global $skPos;
	if (!$skPos) $skPos = 0;
	else $skPos -= 500;


	$skData  = ' data-'. $skPos      .'="top[outCubic]:100%"';
	$skData .= ' data-'.($skPos+=400).'="top:0%"';
	$breakPointUp = $skPos;
	$skData .= ' data-'.($skPos+=900).'="top:0%"';
	$breakPointDown = $skPos;
	$skData .= ' data-'.($skPos+=400).'="top:-100%"';
	$skData .= ' data-emit-events';


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


<div class="modal fade gallery-modal" id="show-project">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
      <div class="modal-body">
        <div id="project-slides" class="slides"></div>
        <h3 id="project-title"></h3>
        <div class="row">
        	<div id="project-description" class="col-md-6"></div>
        	<div id="project-technology" class="col-md-6"></div>
        </div>
      </div>
    </div><!-- /.modal-content -->
  </div><!-- /.modal-dialog -->
</div><!-- /.modal -->
