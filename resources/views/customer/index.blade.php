@extends('layout.master')

@section('content')
    <h1>Customers</h1>

    <table>
        <tr>
            <th>Name</th>
            <th>Number</th>
        </tr>

        @foreach($customers as $customer)
            <tr>
                <td>{{ $customer->name }}</td>

                <td>{{ $customer->number }}</td>
            </tr>
        @endforeach
    </table>
@endsection
