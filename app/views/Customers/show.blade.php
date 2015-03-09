@extends('layout')

@section('content')

<div class="col-md-2">
</div>
<div class="col-md-8">
	<div class="col-md-5">


  <p>Your user ID is: {{ Auth::user()->id }}</p>

		<h3>{{ $customer->name }} {{ $customer->lastname }}</h3>
		<h4>{{ $customer->email }}</h4>
		<h4>{{ $customer->phoneNumber }}</h4>
		<h5>{{ $customer->comments }}</h5>
	</div>
	<div class="col-md-3">
 		<a href="#">{{ HTML::image($customer->filepath) }}</a>

	</div>
</div>
<div class="col-md-2">
</div>

@endsection 


