<?php

namespace App\Http\Controllers;

use App\Customer;
use App\Supplier;
use App\Transaction;
use Illuminate\Http\Request;

class TransactionController extends Controller
{
    public function index()
    {
        $transactions = Transaction::with('transactable')->get();

        return view('transaction.index', compact('transactions'));
    }

    public function customer()
    {
        $customers = Customer::get();

        return view('transaction.customer', compact('customers'));
    }

    public function loadCustomer(Request $request)
    {
        $request->validate([
            'date' => 'required|date',
            'customer_id' => 'required|exists:customers,id',
            'amount' => 'required|numeric',
            'rebate' => 'required|numeric',
        ]);

        Customer::find(request('customer_id'))
            ->transactions()->create([
                'date' => request('date'),
                'amount' => request('amount'),
                'rebate' => request('rebate'),
        ]);

        return redirect()->route('transaction.index');
    }

    public function credit()
    {
        $suppliers = Supplier::get();

        return view('transaction.credit', compact('suppliers'));
    }

    public function loadCredit(Request $request)
    {
        $request->validate([
            'date' => 'required|date',
            'supplier_id' => 'required|exists:suppliers,id',
            'amount' => 'required|numeric',
        ]);

        Supplier::find(request('supplier_id'))
            ->transactions()->create([
                'date' => request('date'),
                'amount' => request('amount'),
        ]);

        return redirect()->route('transaction.index');
    }

    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
