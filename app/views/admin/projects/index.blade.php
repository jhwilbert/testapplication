@extends('layouts.admin')

@section('content')
    
	<h1>Projetos</h1>

	<hr>

	{{ link_to_route('admin.projects.create', 'Criar Projeto', null, array('class' => 'btn btn-primary')) }}

	<hr>
	<table class="table table-striped">
		<tr>
			<th>id</th>
			<th>title</th>
			<th>description</th>
			<th>featured</th>
			<th>created_at</th>
			<th>updated_at</th>
			<th></th>
		</tr>
		@foreach ($projects as $project)
		<tr>
			<td>{{{ $project->id }}}</td>
			<td>{{{ $project->title }}}</td>
			<td>{{{ $project->description }}}</td>
			<td>{{{ $project->featured }}}</td>
			<td>{{{ $project->created_at }}}</td>
			<td>{{{ $project->updated_at }}}</td>
			<td>
				{{ Form::open(array('route' => array('admin.projects.destroy', $project->id), 'method' => 'DELETE', 'class' => 'form-inline')) }}
					{{ link_to_route('admin.projects.show', 'Visualizar', $project->id, array('class' => 'btn btn-info btn-xs')) }}
					{{ link_to_route('admin.projects.edit', 'Editar', $project->id, array('class' => 'btn btn-warning btn-xs')) }}
					{{ Form::submit('Excluir', array('class' => 'btn btn-danger btn-xs')) }}
				{{ Form::close() }}					
			</td>
		</tr>
		@endforeach
	</table>
		
@stop