@extends('layouts.admin')

@section('content')
    
	<h1>Criar Administrador</h1>

	<hr>

	@include('admin.users._actions')

	<hr>

	@include('admin.users._form')
	
		
@stop