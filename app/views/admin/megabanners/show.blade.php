@extends('layouts.admin')

@section('content')
    
	<h1>Megabanner: {{ $megabanner->title }}</h1>

	<hr>

	@include('admin.megabanners._actions')

	<hr>

	<table class="table table-striped">
		<tr>
			<th>id</th>
			<td>{{{ $megabanner->id }}}</td>
		</tr>
		<tr>
			<th>{{ Lang::get('validation.attributes.title') }}</th>
			<td>{{{ $megabanner->title }}}</td>
		</tr>
		<tr>
			<th>{{ Lang::get('validation.attributes.title', array(), 'en') }}</th>
			<td>{{{ $megabanner->title_en }}}</td>
		</tr>
		<tr>
			<th>{{ Lang::get('validation.attributes.image') }}</th>
			<td><img src="{{ asset($megabanner->getImagePath('big')) }}"></td>
		</tr>
		<tr>
			<th>{{ Lang::get('validation.attributes.url') }}</th>
			<td>{{{ $megabanner->url }}}</td>
		</tr>
		<tr>
			<th>{{ Lang::get('validation.attributes.url', array(), 'en') }}</th>
			<td>{{{ $megabanner->url_en }}}</td>
		</tr>
		<tr>
			<th>{{ Lang::get('validation.attributes.position') }}</th>
			<td>{{{ $megabanner->position }}}</td>
		</tr>
		<tr>
			<th>{{ Lang::get('validation.attributes.text') }}</th>
			<td>{{{ $megabanner->text }}}</td>
		</tr>
		<tr>
			<th>{{ Lang::get('validation.attributes.text', array(), 'en') }}</th>
			<td>{{{ $megabanner->text_en }}}</td>
		</tr>
		@foreach (Megabanner::$areas as $area)
			<tr>
				<th>Exibir em {{ $area }}</th>
				<td>{{{ $megabanner["show_in_$area"] }}}</td>
			</tr>
		@endforeach
		<tr>
			<th>{{ Lang::get('validation.attributes.active') }}</th>
			<td>{{{ $megabanner->active }}}</td>
		</tr>
		<tr>
			<th>{{ Lang::get('validation.attributes.created_at') }}</th>
			<td>{{{ $megabanner->created_at }}}</td>
		</tr>
		<tr>
			<th>{{ Lang::get('validation.attributes.updated_at') }}</th>
			<td>{{{ $megabanner->updated_at }}}</td>
		</tr>
	</table>
	
	@include('admin.megabanners._actions-single')	


@stop