@if (Admin\UserController::can('show', $user))
	{{ link_to_route('admin.usuarios.show', 'Visualizar', $user->id, array('class' => 'btn btn-info btn-xs')) }}
@endif
@if (Admin\UserController::can('edit', $user))
	{{ link_to_route('admin.usuarios.edit', 'Editar', $user->id, array('class' => 'btn btn-primary btn-xs')) }}
@endif
@if (Admin\UserController::can('destroy', $user))
	{{ Form::open(array('route' => array('admin.usuarios.destroy', $user->id), 'method' => 'DELETE', 'class' => 'form-inline confirm-destroy')) }}
		{{ Form::submit('Excluir', array('class' => 'btn btn-danger btn-xs')) }}
	{{ Form::close() }}					
@endif