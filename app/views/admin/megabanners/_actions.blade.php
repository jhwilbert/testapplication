

@if (Admin\MegabannerController::can('index'))
	{{ link_to_route('admin.megabanners.index', 'Listar Megabanners', null, array('class' => 'btn btn-info')) }}
@endif

@if (Admin\MegabannerController::can('create'))
	{{ link_to_route('admin.megabanners.create', 'Criar Megabanner', null, array('class' => 'btn btn-primary')) }}
@endif
