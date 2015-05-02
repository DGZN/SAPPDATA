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

			<h1>{{$activist->first_name . ' ' . $activist->last_name }}</h1>

			<div class="table-responsive">
				  
					<table class="table activist-table">
					

						@if ($activist)

								<tr>


								<img src="{{ URL::asset('uploads/')  }}/{{$activist->thumbnail}}" class="profile-img img-responsive img-rounded" >
									

								</tr>

								<tr>

									<td class="bold">First Name: </td>

									<td>{{ $activist->first_name }}</td>

								</tr>

								<tr>

									<td class="bold">Last Name: </td>

									<td>{{ $activist->last_name }}</td>

								</tr>

								<tr>

									<td class="bold">Nickname: </td>

									<td>{{ $activist->nickname }}</td>

								</tr>

								<tr>

									<td class="bold">DOB: </td>

									<td>{{ $activist->date_of_birth }}</td>

								</tr>

								<tr>

									<td class="bold">Marital Status: </td>

									<td>{{ $activist->maritalStatus }}</td>

								</tr>

								<tr>

									<td class="bold">Gender: </td>

									<td>{{ $activist->gender }}</td>

								</tr>

								<tr>

									<td class="bold">City of Birth: </td>

									<td>{{ $activist->cityOfBirth }}</td>

								</tr>

								<tr>

									<td class="bold">City of Residence: </td>

									<td>{{ $activist->cityOfResidence }}</td>

								</tr>

								<tr>

									<td class="bold">First Name (Arabic): </td>

									<td>{{ $activist->firstNameArabLit }}</td>

								</tr>

								<tr>

									<td class="bold">Last Name (Arabic): </td>

									<td>{{ $activist->lastNameArabLit }}</td>

								</tr>

								<tr>

									<td class="bold">Occupation: </td>

									<td>{{ $activist->occupation }}</td>

								</tr>

								<tr>

									<td class="bold">Notes: </td>

									<td>{{ $activist->notes }}</td>

								</tr>

								<tr>

									<td class="bold">Admin Notes: </td>

									<td>{{ $activist->adminNotes }}</td>

								</tr>

								<tr>

									<td class="bold">Created At </td>

									<td>{{ $activist->created_at }}</td>

								</tr>

								<tr>

									<td></td>

									<td class="pull-right">

										{{ Form::open(['url' => ["/admin/activists/$activist->id/edit"]]) }}

										{{ Form::submit('Edit', array('class' => 'btn btn-success')) }} 

										{{ Form::close() }}

									</td>
								
								</tr>

						@endif

					</table>

			</div>

	</div>
@stop
