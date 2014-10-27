
<?php

	global $skPos;
	if (!$skPos) $skPos = 0;


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
		
		<h2>Trabalhos</h2>
		<h3>Conheça nossos projetos mais recentes</h3>

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


<div class="modal fade" id="show-project">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
      <div class="modal-body">
        <div id="project-slides"></div>
        <h3 id="project-title"></h3>
        <div class="row">
        	<div id="project-description" class="col-md-6"></div>
        	<div id="project-technology" class="col-md-6"></div>
        </div>
      </div>
    </div><!-- /.modal-content -->
  </div><!-- /.modal-dialog -->
</div><!-- /.modal -->
