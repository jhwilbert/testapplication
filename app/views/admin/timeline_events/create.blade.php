@extends('layouts.admin')

@section('content')
    
	<h1>Criar Evento da Timeline</h1>

	<hr>

	@include('admin.timeline_events._actions')

	<hr>

	@include('admin.timeline_events._form')
	
		
@stop