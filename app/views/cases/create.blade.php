@extends('layouts.sidebar-theme')

@section('content')

		
		<div class="row">

			<div class="col-md-6">

				<h2>Create New Case</h2>

				{{ Form::open( [ 'route' => 'cases.store', 'files' => true ] ) }}

					<div class="form-group">

						{{ Form::label('name', 'Case Name: ') }}

						{{ Form::text('name', null, array('class' => 'form-control'))}}

						{{ $errors->first('name', '<span class="errors">:message</span>') }}

					</div>

					<div class="form-group">

						{{ Form::label('type', 'Type: ') }}
						
						{{ Form::select('type', array(

							'Trial'                     =>  'Trial',
							'Arrest'                    =>  'Arrest', 
							'Imprisoned'                =>  'Imprisoned', 
							'Hunger Strike' 		    =>  'Hunger Strike', 
							'Summons' 				    =>  'Summons', 
							'Torture' 				    =>  'Torture', 
							'Exiled' 				    =>  'Exiled',
							'Detention'  			    =>  'Detention',
							'Home Detention'            =>  'Home Detention', 
							'Suspension from School'    =>  'Suspension from School', 
							'Termination of Employment' =>  'Termination of Employment', 
							'Execution'                 =>  'Execution', 
							'Other'                     =>  'Other', 
							'Solitary Confinement'      =>  'Solitary Confinement', 
							'Suspicious Death'          =>  'Suspicious Death', 
							'Killed'                    =>  'Killed'

						), array('class' => 'form-control')) }}

						{{ $errors->first('type', '<span class="errors">:message</span>') }}

					</div>

					<div class="form-group">

						{{ Form::label('notes', 'Notes: ') }}
						
						{{ Form::textarea('notes', null, array('class' => 'form-control')) }}

						{{ $errors->first('notes', '<span class="errors">:message</span>') }}

					</div>

					<div class="form-group">

						{{ Form::label('links', 'Links: ') }}
						
						{{ Form::textarea('links', null, array('class' => 'form-control')) }}

						{{ $errors->first('links', '<span class="errors">:message</span>') }}

					</div>

					<div> {{ Form::submit('Create Case', array('class' => 'btn btn-success pull-right')) }} </div>

				{{ Form::close() }}

			</div>

		</div>

@stop
