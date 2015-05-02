@extends('layouts.sidebar-theme')

@section('content')
	<div class="row form-group">

			<h1>Create New Translation</h1>

			{{ Form::open( [ 'route' => 'translations.store' ] ) }}

			<div class="col-md-6">

				{{ Form::label('wordInFarsi', 'Word In Farsi: ') }}

				{{ Form::text('wordInFarsi', null, array('class' => 'form-control')) 			     }}

				{{ $errors->first('wordInFarsi', '<span class="errors">:message</span>') }}

				<br/>

				{{ Form::label('wordInTurkish', 'Word In Turkish: ') }}
				
				{{ Form::text('wordInTurkish', null, array('class' => 'form-control')) 			 }}

				{{ $errors->first('wordInTurkish', '<span class="errors">:message</span>') }}

				<br/>

				{{ Form::label('wordInEnglish', 'Word In English: ') }}
				
				{{ Form::text('wordInEnglish', null, array('class' => 'form-control')) 			 }}

				{{ $errors->first('wordInEnglish', '<span class="errors">:message</span>') }}

				<br/>

				{{ Form::submit('Create Translation', array('class' => 'btn btn-primary pull-right')) }} 

			</div>

			{{ Form::close() }}

		</div>

	</div>
@stop