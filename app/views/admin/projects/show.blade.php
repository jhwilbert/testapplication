@extends('layouts.admin')

@section('content')
    
	<h1>Projeto: {{ $project->title }}</h1>

	<hr>

	{{ link_to_route('admin.projects.index', 'Listar Projetos', null, array('class' => 'btn btn-info')) }}
	{{ link_to_route('admin.projects.create', 'Criar Projeto', null, array('class' => 'btn btn-primary')) }}

	<hr>

	<table class="table table-striped">
		<tr>
			<th>id</th>
			<td>{{{ $project->id }}}</td>
		</tr>
		<tr>
			<th>{{ Lang::get('validation.attributes.title') }}</th>
			<td>{{{ $project->title }}}</td>
		</tr>
		<tr>
			<th>{{ Lang::get('validation.attributes.description') }}</th>
			<td>{{{ $project->description }}}</td>
		</tr>
		<tr>
			<th>{{ Lang::get('validation.attributes.featured') }}</th>
			<td>{{{ $project->featured }}}</td>
		</tr>
		<tr>
			<th>{{ Lang::get('validation.attributes.created_at') }}</th>
			<td>{{{ $project->created_at }}}</td>
		</tr>
		<tr>
			<th>{{ Lang::get('validation.attributes.updated_at') }}</th>
			<td>{{{ $project->updated_at }}}</td>
		</tr>
	</table>
	
	{{ Form::open(array('route' => array('admin.projects.destroy', $project->id), 'method' => 'DELETE', 'class' => 'form-inline confirm-destroy')) }}
		{{ link_to_route('admin.projects.edit', 'Editar', $project->id, array('class' => 'btn btn-warning')) }}
		{{ Form::submit('Excluir', array('class' => 'btn btn-danger')) }}
	{{ Form::close() }}			

@stop