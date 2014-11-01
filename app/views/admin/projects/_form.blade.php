
{{ Form::model($project, array('route' => $route, 'method' => $method, 'class' => 'form-horizontal', 'role' => 'form')) }}
    
	<div class="form-group">
		<?php $error_class = ($errors->first('title')) ? ' has-error' : ''; ?>
		{{ Form::label('title', Lang::get('validation.attributes.title'), array('class' => 'col-sm-3 control-label')); }}
		<div class="col-sm-9<?php echo $error_class ?>">
			{{ Form::text('title', null, array('class' => 'form-control')) }}
		</div>
	</div>
    
	<div class="form-group">
		<?php $error_class = ($errors->first('title_en')) ? ' has-error' : ''; ?>
		{{ Form::label('title_en', Lang::get('validation.attributes.title', array(), 'en'), array('class' => 'col-sm-3 control-label')); }}
		<div class="col-sm-9<?php echo $error_class ?>">
			{{ Form::text('title_en', null, array('class' => 'form-control')) }}
		</div>
	</div>

	<div class="form-group">
		{{ Form::label('description', Lang::get('validation.attributes.description'), array('class' => 'col-sm-3 control-label')); }}
		<div class="col-sm-9">
			{{ Form::textarea('description', null, array('class' => 'form-control wysiwyg')) }}
		</div>
	</div>

	<div class="form-group">
		{{ Form::label('description_en', Lang::get('validation.attributes.description', array(), 'en'), array('class' => 'col-sm-3 control-label')); }}
		<div class="col-sm-9">
			{{ Form::textarea('description_en', null, array('class' => 'form-control wysiwyg')) }}
		</div>
	</div>

	<div class="form-group">
		{{ Form::label('technology', Lang::get('validation.attributes.technology'), array('class' => 'col-sm-3 control-label')); }}
		<div class="col-sm-9">
			{{ Form::textarea('technology', null, array('class' => 'form-control wysiwyg')) }}
		</div>
	</div>

	<div class="form-group">
		{{ Form::label('technology_en', Lang::get('validation.attributes.technology', array(), 'en'), array('class' => 'col-sm-3 control-label')); }}
		<div class="col-sm-9">
			{{ Form::textarea('technology_en', null, array('class' => 'form-control wysiwyg')) }}
		</div>
	</div>

	<div class="form-group">
		<div class="col-sm-offset-2 col-sm-9">
			<div class="checkbox">
				<label>
					{{ Form::checkbox('featured') }} {{ Lang::get('validation.attributes.featured') }}
				</label>
			</div>
		</div>
	</div>

	<?php $areas = array(); ?>

	<div class="form-group">
		<div class="col-sm-offset-3 col-sm-9">
			{{ Form::submit('Enviar', array('class' => 'btn btn-primary btn-lg')) }}
			{{ link_to_route('admin.projects.index', 'Cancelar', null, array('class' => 'btn btn-default')) }}
		</div>
	</div>

{{ Form::close() }}