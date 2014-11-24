@extends('layouts.admin')

@section('content')
    
	<h1>Timeline</h1>
	
	<hr>
	@include('admin.timeline_events._actions')
	<hr>

	<table class="table table-striped">
		<tr>
			<th>id</th>
			<th>{{ Lang::get('validation.attributes.date') }}</th>
			<th>{{ Lang::get('validation.attributes.title') }}</th>
			<th>{{ Lang::get('validation.attributes.active') }}</th>
			<th>{{ Lang::get('validation.attributes.created_at') }}</th>
			<th>{{ Lang::get('validation.attributes.updated_at') }}</th>

			<th></th>
		</tr>
		@foreach ($timeline_events as $timeline_event)
		<tr>
			<td>{{{ $timeline_event->id }}}</td>
			<td>{{{ date('d/m/Y', strtotime($timeline_event->date)) }}}</td>
			<td>{{{ $timeline_event->title }}}</td>
			<td>{{{ $timeline_event->active }}}</td>
			<td>{{{ $timeline_event->created_at }}}</td>
			<td>{{{ $timeline_event->updated_at }}}</td>
			<td>
				@include('admin.timeline_events._actions-single')
			</td>
		</tr>
		@endforeach
	</table>
		
@stop