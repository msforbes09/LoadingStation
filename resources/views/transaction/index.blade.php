@extends('layout.master')

@section('content')
<div>
    <h1>Transactions</h1>
    <a href="{{ route('transaction.customer') }}">Load Customer</a>
    <a href="{{ route('transaction.credit') }}">Load Credit</a>

    <table>
        <tr>
            <th>Date</th>
            <th>Customer</th>
            <th>Number</th>
            <th>Supplier</th>
            <th>Contact</th>
            <th>Amount</th>
            <th>Rebate</th>
            <th>Balance</th>
        </tr>

        @foreach($transactions as $transaction)
            <tr>
                <td>{{ $transaction->date }}</td>

                @if ($transaction->transactable_type === 'App\Customer')
                    <td>{{ $transaction->transactable->name }}</td>

                    <td>{{ $transaction->transactable->number }}</td>
                @else
                    <td></td>
                    <td></td>
                @endif

                @if ($transaction->transactable_type === 'App\Supplier')
                    <td>{{ $transaction->transactable->name }}</td>

                    <td>{{ $transaction->transactable->contact }}</td>
                @else
                    <td></td>
                    <td></td>
                @endif

                <td>{{ $transaction->amount }}</td>
                <td>{{ $transaction->rebate }}</td>
                <td>{{ $transaction->balance }}</td>
            </tr>
        @endforeach
    </table>
</div>
@endsection
