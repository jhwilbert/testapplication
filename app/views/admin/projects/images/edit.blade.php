@extends('layouts.admin')

@section('content')
    
	<h1>Editar Imagem do projeto '{{ $project->title }}'</h1>

	<hr>

	{{ link_to_route('admin.projects.show', 'Listar Imagens do Projeto', $project->id, array('class' => 'btn btn-info')) }}
	{{ link_to_route('admin.projects.images.create', 'Criar Imagem do Projeto',  $project->id, array('class' => 'btn btn-primary')) }}

	<hr>

	@include('admin.projects.images._form')
		
@stop