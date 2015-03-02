@extends('layout')
 
@section('content')
<div class="col-md-3">
</div>
<div class="col-md-6">		
		{{ Form::model($customer, array('method' => 'PATCH', 'route' => array('Customers.update', $customer->id), 'files' => [true])) }}
			<div class="form-group">
			    {{ Form::label('name', 'Name') }}
			    {{ Form::text('name', $customer->name, array('class' => 'form-control')) }}
			</div>
			 
			<div class="form-group">
			    {{ Form::label('email', 'E-pasts:') }}
			    {{ Form::text('email', $customer->email, array('class' => 'form-control')) }}
			</div>
			 
			<div class="form-group">
			    {{ Form::label('phoneNumber', 'Phone') }}
			    {{ Form::text('phoneNumber', $customer->phoneNumber, array('class' => 'form-control')) }} 
			</div>
			 
			<div class="form-group">
			    {{ Form::label('comments', 'Comments:') }}
			    {{ Form::textarea('comments', $customer->comments, array('class' => 'form-control')) }} 
			</div>

			<div class="form-group">
			    {{ Form::file('document') }}
			</div>
			 
			<div class="form-group">
			    {{ Form::submit(('Edit info'), array('class' => "btn btn-primary")) }}
			</div>
    {{ Form::close() }}
</div>
<div class="col-md-3">
</div>
@endsection