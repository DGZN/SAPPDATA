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

									{{ link_to( "/admin/cases/{$case->name}", $case->id) }} 

								</td>

								<td class="pull-right">

								<input type="button" class="btn btn-primary btn-sm" id="del_case_{{ $case->id }}" value="Delete" >

								</td>

							</tr>

						@endforeach

					@endif

				</table>

			</div>

		</div>

	</div> 
@stop