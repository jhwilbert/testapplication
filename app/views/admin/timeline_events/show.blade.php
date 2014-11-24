@extends('layouts.admin')

@section('content')
    
	<h1>Evento da Timeline: {{ $timeline_event->title }}</h1>

	<hr>

	@include('admin.timeline_events._actions')

	<hr>

	<table class="table table-striped">
		<tr>
			<th>id</th>
			<td>{{{ $timeline_event->id }}}</td>
		</tr>
		<tr>
			<th>{{ Lang::get('validation.attributes.date') }}</th>
			<td>{{{ date('d/m/Y', strtotime($timeline_event->date)) }}}</td>
		</tr>
		<tr>
			<th>{{ Lang::get('validation.attributes.title') }}</th>
			<td>{{{ $timeline_event->title }}}</td>
		</tr>
		<tr>
			<th>{{ Lang::get('validation.attributes.title', array(), 'en') }}</th>
			<td>{{{ $timeline_event->title_en }}}</td>
		</tr>
		<tr>
			<th>{{ Lang::get('validation.attributes.image') }}</th>
			<td>
				@if($timeline_event->file_name)
					<img src="{{ asset($timeline_event->getImagePath('medium')) }}">
				@endif
			</td>
		</tr>
		<tr>
			<th>{{ Lang::get('validation.attributes.text') }}</th>
			<td>{{{ $timeline_event->text }}}</td>
		</tr>
		<tr>
			<th>{{ Lang::get('validation.attributes.text', array(), 'en') }}</th>
			<td>{{{ $timeline_event->text_en }}}</td>
		</tr>
		<tr>
			<th>{{ Lang::get('validation.attributes.active') }}</th>
			<td>{{{ $timeline_event->active }}}</td>
		</tr>
		<tr>
			<th>{{ Lang::get('validation.attributes.created_at') }}</th>
			<td>{{{ $timeline_event->created_at }}}</td>
		</tr>
		<tr>
			<th>{{ Lang::get('validation.attributes.updated_at') }}</th>
			<td>{{{ $timeline_event->updated_at }}}</td>
		</tr>
	</table>
	
	@include('admin.timeline_events._actions-single')	


@stop