@extends('layouts.admin')

@section('content')
    
	<h1>Administradores</h1>
	
	<hr>
	@include('admin.users._actions')
	<hr>

	<table class="table table-striped">
		<tr>
			<th>Nome</th>
			<th>E-mail</th>
			<th>Função</th>
			<th>Login</th>
			<th></th>
		</tr>
		@foreach ($users as $user)
		<tr>
			<td>{{{ $user->name }}}</td>
			<td>{{{ $user->email }}}</td>
			<td>{{{ $user->role == 'superadmin' ? 'admin*' : $user->role }}}</td>
			<td>{{{ $user->last_login_date }}}</td>
			<td>
				@include('admin.users._actions-single')
			</td>
		</tr>
		@endforeach
	</table>
		
@stop