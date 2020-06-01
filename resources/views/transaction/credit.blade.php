@extends('layout.master')

@section('content')
<h1>Load Credit</h1>

<ul>
    @foreach($errors->all() as $error)
        <li>{{ $error }}</li>
    @endforeach
</ul>

<form action="{{ route('transaction.loadCredit') }}" method="post">
    @csrf

    <div>
        <label for="">Date</label>
        <input type="date" name="date" value="{{ old('date') ?? date('Y-m-d') }}">
    </div>

    <div>
        <label for="">Supplier</label>
        <select name="supplier_id">
            <option value="0">Select Supplier</option>

            @foreach($suppliers as $supplier)
                <option value="{{ $supplier->id }}">{{ $supplier->name }}</option>
            @endforeach
        </select>
    </div>

    <div>
        <label for="">Amount</label>
        <input type="number" name="amount" value="{{ old('amount') }}">
    </div>

    <button type="submit">Save</button>
</form>
@endsection
