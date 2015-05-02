@extends('layouts.sidebar-theme')

@section('content')

		
		<div class="row">

			<div class="col-md-6">

				<h2>Create New Activist</h2>

				{{ Form::open( [ 'route' => ['activists.update', $activist->id], 'method' => 'put', 'files' => true  ] ) }}

					<div class="form-group">

						{{ Form::label('first_name', 'First Name: ') }}

						{{ Form::text('first_name', $activist->first_name, array('class' => 'form-control'))}}

						{{ $errors->first('first_name', '<span class="errors">:message</span>') }}

					</div>

					<div class="form-group">

						{{ Form::label('last_name', 'Last Name: ') }}
						
						{{ Form::text('last_name', $activist->last_name, array('class' => 'form-control')) }}

						{{ $errors->first('last_name', '<span class="errors">:message</span>') }}

					</div>

					<div class="form-group">

						{{ Form::label('nickname', 'Nickname: ') }}
						
						{{ Form::text('nickname', $activist->nickname, array('class' => 'form-control')) }}

						{{ $errors->first('nickname', '<span class="errors">:message</span>') }}

					</div>

					<div class="form-group">

						{{ Form::label('date_of_birth', 'DOB: ') }}
						
						{{ Form::text('date_of_birth', $activist->date_of_birth, array('class' => 'form-control')) }}

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

						), $activist->maritalStatus, array('class' => 'form-control') ) }}

						{{ $errors->first('maritalStatus', '<span class="errors">:message</span>') }}

					</div>

					<div class="form-group">

						{{ Form::label('gender', 'Gender: ') }}
						
						{{ Form::select('gender', array(

							'Female' => 'Female',
							'Male'   => 'Male'

						), $activist->gender, array('class' => 'form-control') ) }}

						{{ $errors->first('gender', '<span class="errors">:message</span>') }}

					</div>

					<div class="form-group">

						{{ Form::label('cityOfBirth', 'City of Birth: ') }}
						
						{{ Form::text('cityOfBirth', $activist->cityOfBirth, array('class' => 'form-control')) }}

						{{ $errors->first('cityOfBirth', '<span class="errors">:message</span>') }}

					</div>

					<div class="form-group">

						{{ Form::label('cityOfResidence', 'City of Residence: ') }}
						
						{{ Form::text('cityOfResidence', $activist->cityOfResidence, array('class' => 'form-control')) }}

						{{ $errors->first('cityOfResidence', '<span class="errors">:message</span>') }}

					</div>

					<div class="form-group">

						{{ Form::label('firstNameArabLit', 'First Name (Arabic): ') }}
						
						{{ Form::text('firstNameArabLit', $activist->firstNameArabLit, array('class' => 'form-control')) }}

						{{ $errors->first('firstNameArabLit', '<span class="errors">:message</span>') }}

					</div>

					<div class="form-group">

						{{ Form::label('lastNameArabLit', 'Last Name (Arabic): ') }}
						
						{{ Form::text('lastNameArabLit', $activist->lastNameArabLit, array('class' => 'form-control')) }}

						{{ $errors->first('lastNameArabLit', '<span class="errors">:message</span>') }}

					</div>

					<div class="form-group">

						{{ Form::label('occupation', 'Occupation: ') }}
						
						{{ Form::text('occupation', $activist->occupation, array('class' => 'form-control')) }}

						{{ $errors->first('occupation', '<span class="errors">:message</span>') }}

					</div>

					<div class="form-group">

						{{ Form::label('notes', 'Notes: ') }}
						
						{{ Form::textarea('notes', $activist->notes, array('class' => 'form-control')) }}

						{{ $errors->first('notes', '<span class="errors">:message</span>') }}

					</div>

					<div class="form-group">

						{{ Form::label('adminNotes', 'Admin Notes: ') }}
						
						{{ Form::textarea('adminNotes', $activist->adminNotes, array('class' => 'form-control')) }}

						{{ $errors->first('adminNotes', '<span class="errors">:message</span>') }}

					</div>

					<div> {{ Form::submit('Save Activist', array('class' => 'btn btn-success pull-right')) }} </div>

				{{ Form::close() }}

			</div>

		</div>

@stop

@section('footer-scripts')
<script>
 $(function() {
    $( "#date_of_birth" ).datepicker();
  });
</script>
@stop
