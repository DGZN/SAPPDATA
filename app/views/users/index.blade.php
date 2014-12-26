@extends('layouts.sidebar-theme')

@section('content')
	<div class="row">

		<div class="col-md-6">

			<h1>Users</h1>

			<div class="table-responsive">
			  
				<table class="table">

					@if ( count($users) )

						@foreach ($users as $user)

							<tr>

								<td> {{ link_to( "/users/{$user->id}", $user->email) }} </td>

							<tr>

						@endforeach

					@endif

				</table>

			</div>

		</div>

	</div> 
@stop