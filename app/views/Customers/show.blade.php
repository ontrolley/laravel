@extends('layout')

@section('content')

<div class="col-md-2">
</div>
<div class="col-md-8">
	<div class="col-md-5">
		<h3>{{ $customer->name }}</h3>
		<h4>{{ $customer->email }}</h4>
		<h4>{{ $customer->phoneNumber }}</h4>
		<h5>{{ $customer->comments }}</h5>
		<br />
		<br />
		<br />
		<br />
		{{ HTML::linkRoute( 'Customers/delete', 'Delete' , [ 'id' => $customer->id ]) }}
		{{ link_to_route('customers.edit', 'Edit', array($customer->id), array('class' => 'link')) }}
	</div>
	<div class="col-md-3">
 		<a href="#">{{ HTML::image($customer->filepath) }}</a>

	</div>
</div>
<!-- {{ link_to($customer->filepath, "Show") }} -->
<div class="col-md-2">
</div>

@endsection 


