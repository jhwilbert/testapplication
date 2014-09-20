

@if (Admin\UserController::can('index'))
	{{ link_to_route('admin.usuarios.index', 'Listar Administradores', null, array('class' => 'btn btn-info')) }}
@endif

@if (Admin\UserController::can('create'))
	{{ link_to_route('admin.usuarios.create', 'Criar Administrador', null, array('class' => 'btn btn-primary')) }}
@endif
