
{{ Form::model($megabanner, array('route' => $route, 'method' => $method, 'class' => 'form-horizontal', 'role' => 'form', 'files' => true)) }}
    
	<div class="form-group">
		<?php $error_class = ($errors->first('title')) ? ' has-error' : ''; ?>
		{{ Form::label('title', Lang::get('validation.attributes.title'), array('class' => 'col-sm-3 control-label')); }}
		<div class="col-sm-9<?php echo $error_class ?>">
			{{ Form::text('title', null, array('class' => 'form-control')) }}
		</div>
	</div>

	<div class="form-group">
		<?php $error_class = ($errors->first('file')) ? ' has-error' : ''; ?>
		{{ Form::label('file', Lang::get('validation.attributes.file'), array('class' => 'col-sm-3 control-label')); }}
		<div class="col-sm-9<?php echo $error_class ?>">
			{{ Form::file('file', null, array('class' => 'form-control')) }}
		</div>
	</div>

	<div class="form-group">
		{{ Form::label('text', Lang::get('validation.attributes.url'), array('class' => 'col-sm-3 control-label')); }}
		<div class="col-sm-9">
			{{ Form::text('url', null, array('class' => 'form-control')) }}
		</div>
	</div>

	<div class="form-group">
		{{ Form::label('text', Lang::get('validation.attributes.text'), array('class' => 'col-sm-3 control-label')); }}
		<div class="col-sm-9">
			{{ Form::textarea('text', null, array('class' => 'form-control')) }}
		</div>
	</div>

	<div class="form-group">
		{{ Form::label('position', Lang::get('validation.attributes.position'), array('class' => 'col-sm-3 control-label')); }}
		<div class="col-sm-3">
			{{ Form::text('position', null, array('class' => 'form-control')) }}
		</div>
		<div class="col-sm-6"></div>
	</div>

	<div class="form-group">
		<div class="col-sm-offset-2 col-sm-9">
			<div class="checkbox">
				<label>
					{{ Form::checkbox('active') }} {{ Lang::get('validation.attributes.active') }}
				</label>
			</div>
		</div>
	</div>					
	<div class="form-group">
		<div class="col-sm-offset-3 col-sm-9">
			{{ Form::submit('Enviar', array('class' => 'btn btn-primary btn-lg')) }}
			{{ link_to_route('admin.megabanners.index', 'Cancelar', null, array('class' => 'btn btn-default')) }}
		</div>
	</div>

{{ Form::close() }}