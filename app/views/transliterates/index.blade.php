@extends('layouts.sidebar-theme')

@section('content')
	<div class="row">

		<div class="col-md-6">

			<h1>Transliterates</h1>

			<div class="table-responsive">
			  
				<table class="table">

					@if ( count($transliterates) )

						@foreach ($transliterates as $transliterate)
						
							<tr>

								<td> {{ $transliterate->wordInLatin }} </td> 

								<td> {{ $transliterate->wordInArabic }}   </td> 

							<tr>

						@endforeach

					@endif

				</table>

			</div>

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