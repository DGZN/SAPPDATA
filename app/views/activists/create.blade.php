@extends('layouts.sidebar-theme')

@section('content')

		
		<div class="row">

			<div class="col-md-6">

				<h2>Create New Activist</h2>

				{{ Form::open( [ 'route' => 'activists.store', 'files' => true ] ) }}

					<div class="form-group">

						{{ Form::label('first_name', 'First Name: ') }}

						{{ Form::text('first_name', null, array('class' => 'form-control'))}}

						{{ $errors->first('first_name', '<span class="errors">:message</span>') }}

					</div>

					<div class="form-group">

						{{ Form::label('last_name', 'Last Name: ') }}
						
						{{ Form::text('last_name', null, array('class' => 'form-control')) }}

						{{ $errors->first('last_name', '<span class="errors">:message</span>') }}

					</div>

					<div class="form-group">

						{{ Form::label('nickname', 'Nickname: ') }}
						
						{{ Form::text('nickname', null, array('class' => 'form-control')) }}

						{{ $errors->first('nickname', '<span class="errors">:message</span>') }}

					</div>

					<div class="form-group">

						{{ Form::label('date_of_birth', 'DOB: ') }}
						
						{{ Form::text('date_of_birth', null, array('class' => 'form-control')) }}

						{{ $errors->first('date_of_birth', '<span class="errors">:message</span>') }}

					</div>

					<div class="form-group">

						{{ Form::label('thumbnail', 'Thumbnail: ') }}

						{{ Form::file('thumbnail', '') }}

						{{ $errors->first('thumbnail', '<span class="errors">:message</span>') }}

					</div>

					<div class="form-group">

						{{ Form::label('maritalStatus', 'Marital Status: ') }}
						
						{{ Form::select('maritalStatus', array(

							'Single'     =>  'Single',
							'Married'    =>  'Married', 
							'Widowed'    =>  'Widowed', 
							'Divorced'   =>  'Divorced', 
							'Separated'  =>  'Separated'

						), array('class' => 'form-control')) }}

						{{ $errors->first('maritalStatus', '<span class="errors">:message</span>') }}

					</div>

					<div class="form-group">

						{{ Form::label('gender', 'Gender: ') }}
						
						{{ Form::select('gender', array(

							'Female' => 'Female',
							'Male'   => 'Male'

						), array('class' => 'form-control')) }}

						{{ $errors->first('gender', '<span class="errors">:message</span>') }}

					</div>

					<div class="form-group">

						{{ Form::label('cityOfBirth', 'City of Birth: ') }}
						
						{{ Form::text('cityOfBirth', null, array('class' => 'form-control')) }}

						{{ $errors->first('cityOfBirth', '<span class="errors">:message</span>') }}

					</div>

					<div class="form-group">

						{{ Form::label('cityOfResidence', 'City of Residence: ') }}
						
						{{ Form::text('cityOfResidence', null, array('class' => 'form-control')) }}

						{{ $errors->first('cityOfResidence', '<span class="errors">:message</span>') }}

					</div>

					<div class="form-group">

						{{ Form::label('firstNameArabLit', 'First Name (Arabic): ') }}
						
						{{ Form::text('firstNameArabLit', null, array('class' => 'form-control')) }}

						{{ $errors->first('firstNameArabLit', '<span class="errors">:message</span>') }}

					</div>

					<div class="form-group">

						{{ Form::label('lastNameArabLit', 'Last Name (Arabic): ') }}
						
						{{ Form::text('lastNameArabLit', null, array('class' => 'form-control')) }}

						{{ $errors->first('lastNameArabLit', '<span class="errors">:message</span>') }}

					</div>

					<div class="form-group">

						{{ Form::label('occupation', 'Occupation: ') }}
						
						{{ Form::text('occupation', null, array('class' => 'form-control')) }}

						{{ $errors->first('occupation', '<span class="errors">:message</span>') }}

					</div>

					<div class="form-group">

						{{ Form::label('notes', 'Notes: ') }}
						
						{{ Form::textarea('notes', null, array('class' => 'form-control')) }}

						{{ $errors->first('notes', '<span class="errors">:message</span>') }}

					</div>

					<div class="form-group">

						{{ Form::label('adminNotes', 'Admin Notes: ') }}
						
						{{ Form::textarea('adminNotes', null, array('class' => 'form-control')) }}

						{{ $errors->first('adminNotes', '<span class="errors">:message</span>') }}

					</div>

					<div> {{ Form::submit('Create Activist', array('class' => 'btn btn-primary pull-right')) }} </div>

				{{ Form::close() }}

			</div>

		</div>

@stop
