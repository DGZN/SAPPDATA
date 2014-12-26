@extends('layouts.sidebar-theme')

@section('content')

	<div id="users" class="tab-pane active">

		<div class="row">

			<div class="col-md-6">

				<h2>Create New User</h2>

				{{ Form::open( [ 'route' => 'users.store' ] ) }}

					<div class="form-group">

						{{ Form::label('email', 'Email: ') }}

						{{ Form::text('email', null, array('class' => 'form-control')) }}

						{{ $errors->first('email', '<span class="errors">:message</span>') }}

					</div>

					<div class="form-group">

						{{ Form::label('password', 'Password: ') }}
						
						{{ Form::password('password', array('class' => 'form-control')) 			 }}

						{{ $errors->first('password', '<span class="errors">:message</span>') }}

					</div>

					<div> {{ Form::submit('Create User', array('class' => 'btn btn-primary pull-right')) }} </div>

				{{ Form::close() }}

			</div>

		</div>

	</div>
@stop
