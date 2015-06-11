@extends('app')

@section('content')

	<div class="modal-title"> Client profile </div>
	<hr/>
	<ul class="modal-title">First Name : {{$client->firstName}}</ul>
	<ul class="modal-title">Last Name : {{$client->latName}}</ul>
	<ul class="modal-title">Nationality : {{$client->nationality}}</ul>


@endsection