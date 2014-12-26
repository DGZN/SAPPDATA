@extends('layouts.sidebar-theme')

@section('content')
	<div class="row">

		<div class="col-md-6">

			<h1>Create New Transliterates</h1>

			{{ Form::open( [ 'route' => 'transliterates.store' ] ) }}

				<div class="form-group">

					{{ Form::label('wordInArabic', 'Word In Arabic: ') }}

					{{ Form::text('wordInArabic', null, array('class' => 'form-control')) 			     }}

					{{ $errors->first('wordInArabic', '<span class="errors">:message</span>') }}

				</div>

				<div class="form-group">

					{{ Form::label('wordInLatin', 'Word In Latin: ') }}
					
					{{ Form::text('wordInLatin', null, array('class' => 'form-control')) 			 }}

					{{ $errors->first('wordInLatin', '<span class="errors">:message</span>') }}

				</div>

				<div> {{ Form::submit('Create Transliterates', array('class' => 'btn btn-primary pull-right')) }} </div>

			{{ Form::close() }}

		</div>

	</div>
@stop

@section('footer-scripts')
<script>
$(document).ready(function(){
	$('#nav-transliterates').removeClass('hide')
})
</script>
@stop