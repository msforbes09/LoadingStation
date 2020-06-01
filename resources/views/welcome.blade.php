@extends('layout.master')

@section('content')
    <h1>Welcome Page</h1>

    <ul>
        <li><a href="{{ route('transaction.index') }}">Transactions</a></li>
        <li><a href="{{ route('customer.index') }}">Customers</a></li>
    </ul>
@endsection
