@extends('layouts.sidebar-theme')

@section('content')
	<div class="row">

		<div class="col-md-6">

			<h1>Cases</h1>

			<div class="table-responsive">
			  
				<table class="table">

					@if ( count($cases) )

						@foreach ($cases as $case)

							<tr>

								<td> 

									{{ link_to( "/admin/cases/{$case->id}", $case->name) }} 

								</td>

								<td class="pull-right">

									{{ Form::open(['route' => ['cases.destroy', $case->id], 'method' => 'delete']) }}

									{{ Form::submit('Delete', array('class' => 'btn btn-danger')) }} 

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