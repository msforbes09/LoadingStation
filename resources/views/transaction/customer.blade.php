@extends('layout.master')

@section('content')
    <h1>Load Customer</h1>

    <ul>
        @foreach($errors->all() as $error)
            <li>{{ $error }}</li>
        @endforeach
    </ul>

    <form method="post" action="{{ route('transaction.loadCustomer') }}">
        @csrf

        <div>
            <label for="">Date</label>
            <input type="date" name="date" value="{{ old('date') ?? date('Y-m-d') }}">
        </div>

        <div>
            <label for="">Customer</label>
            <select name="customer_id">
                <option value="0">Select Customer</option>

                @foreach($customers as $customer)
                    <option value="{{ $customer->id }}">{{ $customer->number . ' ' . $customer->name }}</option>
                @endforeach
            </select>
        </div>

        <div>
            <label for="">Amount</label>
            <input type="number" name="amount" value="{{ old('amount') }}">
        </div>

        <div>
            <label for="">Rebate</label>
            <input type="number" name="rebate" value="{{ old('rebate') ?? 0.03 }}" min="0.00" max="0.10" step="0.01">
        </div>

        <div>
            <button type="submit">Save</button>
        </div>
    </form>
@endsection
