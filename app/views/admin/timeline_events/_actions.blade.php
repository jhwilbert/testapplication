

@if (Admin\TimelineEventController::can('index'))
	{{ link_to_route('admin.timeline_events.index', 'Listar Eventos da Timeline', null, array('class' => 'btn btn-info')) }}
@endif

@if (Admin\TimelineEventController::can('create'))
	{{ link_to_route('admin.timeline_events.create', 'Criar Evento da Timeline', null, array('class' => 'btn btn-primary')) }}
@endif
