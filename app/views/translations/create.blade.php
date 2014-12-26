@extends('layouts.sidebar-theme')

@section('content')
	<div class="row">

		<div class="col-md-6">

			<h1>Create New Translation</h1>

			{{ Form::open( [ 'route' => 'translations.store' ] ) }}

				<div class="form-group">

					{{ Form::label('wordInFarsi', 'Word In Farsi: ') }}

					{{ Form::text('wordInFarsi', null, array('class' => 'form-control')) 			     }}

					{{ $errors->first('wordInFarsi', '<span class="errors">:message</span>') }}

				</div>

				<div>

					{{ Form::label('wordInTurkish', 'Word In Turkish: ') }}
					
					{{ Form::text('wordInTurkish', null, array('class' => 'form-control')) 			 }}

					{{ $errors->first('wordInTurkish', '<span class="errors">:message</span>') }}

				</div>

				<div>

					{{ Form::label('wordInEnglish', 'Word In English: ') }}
					
					{{ Form::text('wordInEnglish', null, array('class' => 'form-control')) 			 }}

					{{ $errors->first('wordInEnglish', '<span class="errors">:message</span>') }}

				</div>

				<div> {{ Form::submit('Create Translation', array('class' => 'btn btn-primary pull-right')) }} </div>

			{{ Form::close() }}

		</div>

	</div>
@stop