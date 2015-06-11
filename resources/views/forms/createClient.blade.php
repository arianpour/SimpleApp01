@extends('app')

@section('content')
	@if (count($errors) > 0)
		<div class="alert alert-danger">
			<ul>
				@foreach ($errors->all() as $error)
					<li>{{ $error }}</li>
				@endforeach
			</ul>
		</div>
	@endif

	<div class="title"> Add New Client </div>
	<hr/>

	{!! Form::open(['action' => 'ClientController@store', 'method' => 'post']) !!}

		{!! Form::label('firstName', 'First Name', ['class' => 'control-label']) !!}
		{!! Form::text('firstName', '', ['class' => 'form-control']) !!}

		{!! Form::label('LastName', 'LastName', ['class' => 'control-label']) !!}
		{!! Form::text('lastName', '', ['class' => 'form-control']) !!}
		{!! Form::label('idNumber', 'IC/ passport No', ['class' => 'control-label']) !!}
		{!! Form::text('idNumber', '', ['class' => 'form-control']) !!}
		{!! Form::label('Nationality', 'Nationality', ['class' => 'control-label']) !!}
		{!! Form::select('nationality', $countries , 131 , ['class' => 'form-control']) !!}
		{!! Form::label('client_role', 'Client Type', ['class' => 'control-label']) !!}
		{!! Form::select('client_role', ['owner','tenant','buyer'] , 2 , ['class' => 'form-control']) !!}

		{!! Form::submit('Submit', ['class' => 'form-control']) !!}
		
	{!! Form::close() !!}



@endsection