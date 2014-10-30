
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
			<h2>Trabalhos</h2>
			<h3>Nossos trabalhos mais recentes</h3>
		@else
			<h2>Projetos</h2>
			<h3>
				A Projesom sabe que a reputação de uma empresa é construída através de um relacionamento sólido e transparente e da competência na realização dos trabalhos. Confira alguns projetos e instalações que deixam isso bem claro e mostram porque estamos no mercado há tanto tempo e continuaremos por muito mais.
			</h3>
		@endif

		<div class="projects row">
			@foreach($projects as $project)
				<div class="col-md-4">
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
