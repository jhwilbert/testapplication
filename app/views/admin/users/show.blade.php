@extends('layouts.admin')

@section('content')
    
	<h1>{{ $user->name }}</h1>

	<hr>

	@if (Admin\UserController::can('index'))
		{{ link_to_route('admin.usuarios.index', 'Listar Administradores', null, array('class' => 'btn btn-info')) }}
	@endif

	<hr>

	<table class="table table-striped">
		<tr>
			<th>id</th>
			<td>{{{ $user->id }}}</td>
		</tr>
		<tr>
			<th>Nome</th>
			<td>{{{ $user->name }}}</td>
		</tr>
		<tr>
			<th>E-mail</th>
			<td>{{{ $user->email }}}</td>
		</tr>
		<tr>
			<th>Função</th>
			<td>{{{ $user->role == 'superadmin' ? 'admin*' : $user->role }}}</td>
		</tr>
		<tr>
			<th>Último login</th>
			<td>{{ $user->last_login_date ? date('d/m/Y H:i', strtotime($user->last_login_date)) : '' }}</td>
		</tr>
		<tr>
			<th>IP do Último login</th>
			<td>{{{ $user->last_login_ip }}}</td>
		</tr>
		<tr>
			<th>Criado em </th>
			<td>{{ date('d/m/Y H:i', strtotime($user->created_at)) }}</td>
		</tr>
		<tr>
			<th>Atualizado em </th>
			<td>{{ date('d/m/Y H:i', strtotime($user->updated_at)) }}</td>
		</tr>
		<tr>
			<th></th>
			<td>
				@include('admin.users._actions-single')
			</td>
		</tr>
	</table>
@stop