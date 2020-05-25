<?php

namespace App\Http\Controllers;

use App\Customer;
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
        $customer = Customer::find(request('customer_id'));

        $transaction = $customer->transactions()->create([
            'date' => request('date'),
            'amount' => request('amount'),
            'balance' => 1000, //test data
        ]);

        return redirect()->route('transaction.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
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
