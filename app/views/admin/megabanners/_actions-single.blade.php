@if (Admin\MegabannerController::can('show', $megabanner))
	{{ link_to_route('admin.megabanners.show', 'Visualizar', $megabanner->id, array('class' => 'btn btn-info btn-xs')) }}
@endif
@if (Admin\MegabannerController::can('edit', $megabanner))
	{{ link_to_route('admin.megabanners.edit', 'Editar', $megabanner->id, array('class' => 'btn btn-primary btn-xs')) }}
@endif
@if (Admin\MegabannerController::can('destroy', $megabanner))
	{{ Form::open(array('route' => array('admin.megabanners.destroy', $megabanner->id), 'method' => 'DELETE', 'class' => 'form-inline confirm-destroy')) }}
		{{ Form::submit('Excluir', array('class' => 'btn btn-danger btn-xs')) }}
	{{ Form::close() }}					
@endif