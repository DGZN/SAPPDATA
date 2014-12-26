@extends('layouts.sidebar-theme')

@section('content')
	<div class="row">

		<div class="col-md-6">

			<h1>Activists</h1>

			<div class="table-responsive">
			  
				<table class="table">

					@if ( count($activists) )

						@foreach ($activists as $activist)

							<tr>

								<td> {{ link_to( "/admin/activists/{$activist->id}", $activist->first_name) }} </td>

							<tr>

						@endforeach

					@endif

				</table>

			</div>

		</div>

	</div> 
@stop