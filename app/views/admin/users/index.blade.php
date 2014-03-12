@extends('layouts.admin')

@section('content')
    
	<h1>Administradores</h1>

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
			<td>{{{ $user->role }}}</td>
			<td>{{{ $user->last_login_date }}}</td>
			<td>
				
			</td>
		</tr>
		@endforeach
	</table>
		
@stop