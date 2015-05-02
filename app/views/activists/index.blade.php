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

								<td> 

									{{ link_to( "/admin/activists/{$activist->id}", $activist->first_name) }} 

								</td>

								<td class="pull-right">

								{{ Form::open(array('url' => '/api/v1/activists/' . $activist->id, 'method' => 'delete' )) }}

									<input type="submit" class="btn btn-primary btn-sm" id="del_activist_{{ $activist->id }}" value="Delete" >

								{{ Form::close() }}

								</td>

								<td class="pull-right">

									{{ Form::open(['url' => ["/admin/activists/$activist->id/edit"]]) }}

									{{ Form::submit('Edit', array('class' => 'btn btn-success')) }} 

									{{ Form::close() }}

								</td>

							</tr>

						@endforeach

					@endif

				</table>

			</div>

		</div>

	</div> 
@stop