@extends('app')

@section('content')

<div class="modal-title"> Welcome </div>

	@foreach($clientsList as $person)
		<ul class="modal-title"><a href="clients/{{$person->id}}" > {{$person->firstName}}</ul></a>
	@endforeach

@endsection