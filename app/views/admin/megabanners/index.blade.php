@extends('layouts.admin')

@section('content')
    
	<h1>Megabanners</h1>
	
	<hr>
	@include('admin.megabanners._actions')
	<hr>

	<table class="table table-striped">
		<tr>
			<th>id</th>
			<th>{{ Lang::get('validation.attributes.image') }}</th>
			<th>{{ Lang::get('validation.attributes.title') }}</th>
			<th>{{ Lang::get('validation.attributes.position') }}</th>
			<th>{{ Lang::get('validation.attributes.active') }}</th>
			<th>{{ Lang::get('validation.attributes.created_at') }}</th>
			<th>{{ Lang::get('validation.attributes.updated_at') }}</th>

			<th></th>
		</tr>
		@foreach ($megabanners as $megabanner)
		<tr>
			<td>{{{ $megabanner->id }}}</td>
			<td>{{{ $megabanner->title }}}</td>
			<td>{{{ $megabanner->position }}}</td>
			<td>{{{ $megabanner->active }}}</td>
			<td>{{{ $megabanner->created_at }}}</td>
			<td>{{{ $megabanner->updated_at }}}</td>
			<td>
				@include('admin.megabanners._actions-single')
			</td>
		</tr>
		@endforeach
	</table>
		
@stop