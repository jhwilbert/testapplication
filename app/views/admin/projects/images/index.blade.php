@extends('layouts.admin')

@section('content')
    
	<h1>Imagens do projeto '{{ $project->title }}'</h1>

	<hr>

	{{ link_to_route('admin.projects.images.create', 'Criar Imagem', $project->id, array('class' => 'btn btn-primary')) }}

	<hr>
	<table class="table table-striped">
		<tr>
			<th>id</th>
			<th>{{ Lang::get('validation.attributes.subtitle') }}</th>
			<th>{{ Lang::get('validation.attributes.created_at') }}</th>
			<th>{{ Lang::get('validation.attributes.updated_at') }}</th>
			<th></th>
		</tr>
		@foreach ($project->project_images as $project_image)
		<tr>
			<td>{{{ $project_image->id }}}</td>
			<td>{{{ $project_image->subtitle }}}</td>
			<td>{{{ $project_image->created_at }}}</td>
			<td>{{{ $project_image->updated_at }}}</td>
			<td>
				{{ Form::open(array('route' => array('admin.projects.images.destroy', $project_image->id), 'method' => 'DELETE', 'class' => 'form-inline confirm-destroy')) }}
					{{ link_to_route('admin.projects.images.show', 'Visualizar', array($project->id, $project_image->id), array('class' => 'btn btn-info btn-xs')) }}
					{{ link_to_route('admin.projects.images.edit', 'Editar', array($project->id, $project_image->id), array('class' => 'btn btn-warning btn-xs')) }}
					{{ Form::submit('Excluir', array('class' => 'btn btn-danger btn-xs')) }}
				{{ Form::close() }}					
			</td>
		</tr>
		@endforeach
	</table>
	{{ link_to_route('admin.projects.show', 'Visualizar Projeto', $project->id, array('class' => 'btn btn-info btn-xs')) }}
@stop