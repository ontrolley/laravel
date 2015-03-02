@extends('layout')
 
@section('content')

<div class="col-md-7">
 
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
                    {{-- HTML::linkRoute( 'customers.delete', 'Delete' , [ 'id' => $customer->id ]) --}}
                </tr>
            @endforeach
        </tbody>
    </table>
    @endif
</div>
</div>
<div class="col-md-5">

    {{ Form::model(new Customer, ['route' => ['customers.store'], 'files' => [true]]) }}
        @include('Customers/partials/_form', ['submit_text' => 'Add info'])
    {{ Form::close() }}

</div>

@endsection

