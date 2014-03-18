@extends('layouts.admin')

@section('content')
    
	<h1>Projeto: {{ $project->title }}</h1>

	<hr>

	{{ link_to_route('admin.projects.show', 'Listar Imagens do Projeto', $project->id, array('class' => 'btn btn-info')) }}
	{{ link_to_route('admin.projects.images.create', 'Criar Imagem do Projeto',  $project->id, array('class' => 'btn btn-primary')) }}

	<hr>

	<table class="table table-striped">
		<tr>
			<th>id</th>
			<td>{{{ $project->id }}}</td>
		</tr>
		<tr>
			<th>{{ Lang::get('validation.attributes.image') }}</th>
			<td><img src="{{ asset($project_image->getImagePath('medium')) }}"></td>
		</tr>
		<tr>
			<th>{{ Lang::get('validation.attributes.subtitle') }}</th>
			<td>{{{ $project_image->subtitle }}}</td>
		</tr>
		<tr>
			<th>{{ Lang::get('validation.attributes.position') }}</th>
			<td>{{{ $project_image->position }}}</td>
		</tr>
		<tr>
			<th>{{ Lang::get('validation.attributes.created_at') }}</th>
			<td>{{{ $project_image->created_at }}}</td>
		</tr>
		<tr>
			<th>{{ Lang::get('validation.attributes.updated_at') }}</th>
			<td>{{{ $project_image->updated_at }}}</td>
		</tr>
	</table>
	
	{{ Form::open(array('route' => array('admin.projects.images.destroy', $project->id, $project_image->id), 'method' => 'DELETE', 'class' => 'form-inline confirm-destroy')) }}
		{{ link_to_route('admin.projects.images.edit', 'Editar', array($project->id, $project_image->id), array('class' => 'btn btn-warning')) }}
		{{ Form::submit('Excluir', array('class' => 'btn btn-danger')) }}
	{{ Form::close() }}			

@stop