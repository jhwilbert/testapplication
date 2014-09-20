
{{ Form::model($user, array('route' => $route, 'method' => $method, 'class' => 'form-horizontal', 'role' => 'form')) }}
    
	<div class="form-group">
		<?php $error_class = ($errors->first('name')) ? ' has-error' : ''; ?>

		{{ Form::label('name', 'Nome', array('class' => 'col-sm-3 control-label')); }}
		<div class="col-sm-9<?php echo $error_class ?>">
			{{ Form::text('name', null, array('class' => 'form-control')) }}
		</div>
	</div>

	<div class="form-group">
		{{ Form::label('email', 'E-mail', array('class' => 'col-sm-3 control-label')); }}
		<div class="col-sm-9">
			<?php 
				$params_array =  array('class' => 'form-control');
				// if editing, can't change the email
				if ($current_user->role != 'superadmin' && $method == 'PUT') { 
					$params_array['readonly'] = 'readonly';
				}
			?>
			{{ Form::text('email', null, $params_array) }}
		</div>
	</div>

	@if (Admin\UserController::can('create'))
		<?php 
			$values = array('editor' => 'Editor', 'admin' => 'Administrador');
			if ($current_user->role == 'superadmin') {
				$values['superadmin'] = 'SuperAdmin';
			}
		?>
		<div class="form-group">
			{{ Form::label('role', 'Função', array('class' => 'col-sm-3 control-label')); }}
			<div class="col-sm-9">
				{{ Form::select('role', $values, null, array('class' => 'form-control')) }}
			</div>
		</div>
	@else
		{{ Form::hidden('role', 'editor') }}
	@endif

	<div class="form-group">
		{{ Form::label('password', 'Senha', array('class' => 'col-sm-3 control-label')); }}
		<div class="col-sm-9">
			{{ Form::password('password', array('class' => 'form-control password')) }}
		</div>
	</div>

	<div class="form-group">
		{{ Form::label('password_confirmation', 'Repetir senha', array('class' => 'col-sm-3 control-label')); }}
		<div class="col-sm-9">
			{{ Form::password('password_confirmation', array('class' => 'form-control password')) }}
		</div>
	</div>

	<div class="form-group">
		<div class="col-sm-offset-3 col-sm-9">
			{{ Form::submit('Enviar', array('class' => 'btn btn-primary btn-lg')) }}
			{{ link_to_route('admin.usuarios.index', 'Cancelar', null, array('class' => 'btn btn-default')) }}
		</div>
	</div>

{{ Form::close() }}