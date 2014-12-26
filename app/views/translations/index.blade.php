@extends('layouts.sidebar-theme')

@section('content')
	<div class="row">

		<div class="col-md-6">

			<h1>Translations</h1>

			<div class="table-responsive">
			  
				<table class="table">

					@if ( count($translations) )

						@foreach ($translations as $translation)

							<tr>

								<td> {{ $translation->wordInEnglish }} </td> 

								<td> {{ $translation->wordInFarsi }}   </td> 

								<td> {{ $translation->wordInTurkish }}   </td> 

							<tr>

						@endforeach

					@endif

				</table>

			</div>

		</div>

	</div> 
@stop