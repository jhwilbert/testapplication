@extends('layouts.admin')

@section('content')
    
	<h1>Editar Projeto</h1>

	<hr>

	{{ link_to_route('admin.projects.index', 'Listar Projetos', null, array('class' => 'btn btn-info')) }}
	{{ link_to_route('admin.projects.create', 'Criar Projeto', null, array('class' => 'btn btn-primary')) }}

	<hr>

	@include('admin.projects._form')
		
@stop