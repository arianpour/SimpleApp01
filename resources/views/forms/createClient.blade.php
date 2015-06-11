@extends('app')

@section('content')


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
		<!--TODO: Manage the COuntry names a-->
		{!! Form::select('nationality', ['Malaysia','Singapore'] , null , ['class' => 'form-control']) !!}
		{!! Form::label('client_role', 'Client Type', ['class' => 'control-label']) !!}
		{!! Form::select('client_role', ['owner','tenant','buyer'] , null , ['class' => 'form-control']) !!}
	
		{!! Form::submit('Submit', ['class' => 'form-control']) !!}
		
	{!! Form::close() !!}



@endsection