@extends('layouts.sidebar-theme')

@section('content')
	<div class="content">

		<h1>User</h1>

		<div class="user">

			<h4> {{ $user->email }} </h4>

		</div>

	</div>
@stop