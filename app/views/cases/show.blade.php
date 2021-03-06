@extends('layouts.sidebar-theme')

@section('content')

	<style>

	.activist-table .bold {
		font-weight: bold;
	}

	.profile-img {
		width: 150px;
		padding-bottom: 2em;
	}

	</style>
	<div class="row">

		<div class="col-md-6">

			<h1>{{$case->name }}</h1>

			<div class="table-responsive">
				  
					<table class="table activist-table">
					

						@if ($case)

								<tr>

									<td class="bold">Name: </td>

									<td>{{ $case->name }}</td>

								</tr>

								<tr>

									<td class="bold">Type: </td>

									<td>{{ $case->type }}</td>

								</tr>

								<tr>

									<td class="bold">Notes: </td>

									<td>{{ $case->notes }}</td>

								</tr>

								<tr>

									<td class="bold">Links: </td>

									<td>{{ $case->links }}</td>

								</tr>

								<tr>

									<td class="bold">Admin Author: </td>

									<td>{{ $admin->email }}</td>

								</tr>

								<tr>

									<td class="bold">Added On: </td>

									<td>{{ $case->created_at }}</td>

								</tr>

								<tr>

									<td>
										
									</td>

									<td class="pull-right">

										{{ Form::open(['url' => ["/admin/cases/$case->id/edit"]]) }}

										{{ Form::submit('Edit Case', array('class' => 'btn btn-primary')) }} 

										{{ Form::close() }}

									</td>

								</tr>
						@endif

					</table>

			</div>

	</div>
@stop
