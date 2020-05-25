@extends('layout.master')

@section('content')
    <h1>Load Customer</h1>

    <form method="post" action="{{ route('transaction.loadCustomer') }}">
        @csrf

        <div>
            <label for="">Date</label>
            <input type="date" name="date">
        </div>

        <div>
            <label for="">Customer</label>
            <select name="customer_id">
                @foreach($customers as $customer)
                    <option value="{{ $customer->id }}">{{ $customer->number . ' ' . $customer->name }}</option>
                @endforeach
            </select>
        </div>

        <div>
            <label for="">Amount</label>
            <input type="number" name="amount">
        </div>

        <div>
            <button type="submit">Save</button>
        </div>
    </form>
@endsection
