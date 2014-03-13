@extends('layouts.application')

@section('content')
    
 	<div class="maininfo inner-section">

		<h1>Login</h1>
		<?php echo $errors->first(); ?>

	{{ Form::model($user, array('action' => 'Admin\AdminController@do_login')) }}
	    
	     <div class="form-planos">

			{{ Form::label('email', 'E-mail*'); }}
			{{ Form::text('email', $user->email) }}

			{{ Form::label('password', 'Senha*'); }}
			{{ Form::password('password') }}

			<br>

			{{ Form::submit('Enviar', array('class' => 'bt-resultado rounded')) }}

	    </div>

	

	{{ Form::close() }}


	</div>
@stop