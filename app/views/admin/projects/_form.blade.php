

{{ Form::model($project, array('route' => $route, 'method' => $method, 'class' => 'form-horizontal', 'role' => 'form')) }}
    
	<div class="form-group">
		{{ Form::label('title', null, array('class' => 'col-sm-3 control-label')); }}
		<div class="col-sm-9">
			{{ Form::text('title', null, array('class' => 'form-control')) }}
		</div>
	</div>

	<div class="form-group">
		{{ Form::label('description', null, array('class' => 'col-sm-3 control-label')); }}
		<div class="col-sm-9">
			{{ Form::text('description', null, array('class' => 'form-control')) }}
		</div>
	</div>

	<div class="form-group">
		<div class="col-sm-offset-2 col-sm-9">
			<div class="checkbox">
				<label>
					{{ Form::checkbox('featured') }} Destaque
				</label>
			</div>
		</div>
	</div>					
	<div class="form-group">
		<div class="col-sm-offset-3 col-sm-9">
			{{ Form::submit('Enviar', array('class' => 'btn btn-default')) }}
		</div>
	</div>

{{ Form::close() }}