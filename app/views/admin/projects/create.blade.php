@extends('layouts.admin')

@section('content')
    
	<h1>Criar Projeto</h1>
	<hr>

	{{ link_to_route('admin.projects.index', 'Listar Projetos', null, array('class' => 'btn btn-info')) }}

	<hr>

	@include('admin.projects._form')
		
@stop