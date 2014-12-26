@extends('layouts.sidebar-theme')

@section('content')

	<style>

		.form-group.login-form {
			position: relative;
			margin: 0 auto;
		}

		.btn.login {
			position: relative;
			float: right;
			
		}

		.login-fields div {
			margin: 10px 0 10px 0;
		}

	</style>


	<div class="row">

		<div class="col-md-4">

			{{ Form::open( [ 'route' => 'sessions.store' ] ) }}

			<h1>Login</h1>

			<div class="form-group">

				{{ Form::label('email', 'Email: ') }}

				{{ Form::text('email', null, array('class' => 'form-control')) }}

				{{ $errors->first('email', '<span class="errors">:message</span>') }}

			</div>

			<div class="form-group">

				{{ Form::label('password', 'Password: ') }}
				
				{{ Form::password('password', array('class' => 'form-control')) }}

				{{ $errors->first('password', '<span class="errors">:message</span>') }}

			</div>

			<div class="form-group">

			{{ Form::submit('Login', array('class' => 'btn login btn-primary')) }} 

			</div>

			{{ Form::close() }}

		</div>

	</div>

@stop