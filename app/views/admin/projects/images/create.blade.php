@extends('layouts.admin')

@section('content')
    
	<h1>Criar Imagem do projeto '{{ $project->title }}'</h1>
	<hr>

	{{ link_to_route('admin.projects.images.index', 'Listar Imagens do Projeto', $project->id, array('class' => 'btn btn-info')) }}

	<hr>

	@include('admin.projects.images._form')
		
@stop