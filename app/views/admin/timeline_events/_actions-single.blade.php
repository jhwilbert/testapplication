@if (Admin\TimelineEventController::can('show', $timeline_event))
	{{ link_to_route('admin.timeline_events.show', 'Visualizar', $timeline_event->id, array('class' => 'btn btn-info btn-xs')) }}
@endif
@if (Admin\TimelineEventController::can('edit', $timeline_event))
	{{ link_to_route('admin.timeline_events.edit', 'Editar', $timeline_event->id, array('class' => 'btn btn-primary btn-xs')) }}
@endif
@if (Admin\TimelineEventController::can('destroy', $timeline_event))
	{{ Form::open(array('route' => array('admin.timeline_events.destroy', $timeline_event->id), 'method' => 'DELETE', 'class' => 'form-inline confirm-destroy')) }}
		{{ Form::submit('Excluir', array('class' => 'btn btn-danger btn-xs')) }}
	{{ Form::close() }}					
@endif