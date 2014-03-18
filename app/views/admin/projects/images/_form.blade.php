
{{ Form::model($project_image, array('route' => $route, 'method' => $method, 'class' => 'form-horizontal', 'role' => 'form', 'files'=> true)) }}
    
	<div class="form-group">
		<?php $error_class = ($errors->first('file')) ? ' has-error' : ''; ?>
		{{ Form::label('file', Lang::get('validation.attributes.file'), array('class' => 'col-sm-3 control-label')); }}
		<div class="col-sm-9<?php echo $error_class ?>">
			{{ Form::file('file', null, array('class' => 'form-control')) }}
		</div>
	</div>

	<div class="form-group">
		{{ Form::label('subtitle', Lang::get('validation.attributes.subtitle'), array('class' => 'col-sm-3 control-label')); }}
		<div class="col-sm-9">
			{{ Form::text('subtitle', null, array('class' => 'form-control')) }}
		</div>
	</div>

	<div class="form-group">
		<div class="col-sm-offset-2 col-sm-9">
			<div class="checkbox">
				<label>
					{{ Form::checkbox('position') }} {{ Lang::get('validation.attributes.position') }}
				</label>
			</div>
		</div>
	</div>					
	<div class="form-group">
		<div class="col-sm-offset-3 col-sm-9">
			{{ Form::submit('Enviar', array('class' => 'btn btn-primary btn-lg')) }}
			{{ link_to_route('admin.projects.show', 'Cancelar', $project->id, array('class' => 'btn btn-default')) }}
		</div>
	</div>

{{ Form::close() }}