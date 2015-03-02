@extends('layout')
 
@section('content')
	<div class="col-md-3">
	</div>
	<div class="col-md-6">			
		{{ Form::model(new Customer, ['route' => ['customers/store'], 'files' => [true]]) }}
			@include('Customers/partials/_form', ['submit_text' => 'Add info'])
    {{ Form::close() }}
	</div>
	<div class="col-md-3">
	</div>
@endsection
