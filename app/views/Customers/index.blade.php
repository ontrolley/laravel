@extends('layout')
 
@section('content')
<div class="col-md-3">
</div>
<div class="col-md-6">
    @if (Auth::guest()) 
        <h2><small>Login</small></h2>

        <!-- check for login error flash var -->
        @if (Session::has('flash_error'))
            <div id="flash_error">{{ Session::get('flash_error') }}</div>
        @endif

        {{ Form::open(array('action' => 'login', 'method' => 'POST' )) }}

        <!-- username field -->
        <div class="form-group">
            {{ Form::text('email', Input::old('email'), array('class' => 'form-control', 'placeholder' => "Email")) }}
        </div>
        <!-- password field -->
        <div class="form-group">
            {{ Form::password('password', array('class' => 'form-control', 'placeholder' => "Password")) }}
        </div>
        <!-- submit button -->

        {{ Form::submit(('Login'), array('class' => "btn btn-default btn-block")) }}

        {{ Form::close() }}

        <h2><small>or create new account.</small></h2>

        {{ Form::model(new Customer, ['route' => ['customers.store'], 'files' => [true]]) }}
            @include('Customers/partials/_form', ['submit_text' => 'Add info'])
        {{ Form::close() }}
    @else
        @if ( !$customers->count() )
            There is no customers yet.
        @else
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th>Name</th>
                        <th>Email</th>
                        <th>Phone</th>
                        <th>File</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach( $customers as $customer )
                        <tr>
                            <td><a href="{{ route('customers.show', $customer->id) }}">{{ $customer->name }}</a></td>
                            <td>{{ $customer->email }}</td>
                            <td>{{ $customer->phoneNumber }}</td>
                            <td>{{ HTML::link($customer->filepath, 'Show', [ 'id' => $customer->id ]) }}</td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        @endif
    @endif
</div>

<div class="col-md-3">
</div>

@endsection

