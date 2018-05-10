<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Exchange;
use App\Currency;

class ExchangeController extends Controller
{
    public function exchange()
    {
        $currencies = Currency::all();
        return view('exchange.exchange')->with([
            'currencies' => $currencies
        ]);
    }


    public function calculate(Request $request)
    {
        $this->validate($request, [
            'sellingCurrency' => 'required',
            'buyingCurrency' => 'required',
            'buyingAmount' => 'required|numeric|min:10|max:500',
            'agreeTerms' => 'accepted',
            'accountName' => 'required',
            'bankName' => 'required',
            'accountNumber' => 'required',
        ]);

    }


    public function submit(Request $request)
    {
        $this->validate($request, [
            'sellingCurrency' => 'required',
            'buyingCurrency' => 'required',
            'buyingAmount' => 'required|numeric|min:10|max:500',
            'agreeTerms' => 'accepted',
            'accountName' => 'required',
            'bankName' => 'required',
            'accountNumber' => 'digits:10',
        ]);

        $getRate = $request->input('buyingCurrency');
        $buyingAmount = $request->input('buyingAmount');
        $sellingAmount = $getRate * $buyingAmount;
        $getCurrency = Currency::where('currency_rate', '=', $getRate)->get();

        foreach ($getCurrency as $currency) {
            $currencyName = $currency->currency_name;
        }


        $getTransactionId = $request->input('getTransactionId');
        //$getTransactionId = Exchange::where('transaction_id', '=', $getTransactionId)->get();


        $exchange = new Exchange();
        $exchange->selling_currency = $request->input('sellingCurrency');
        $exchange->selling_amount = $sellingAmount;
        $exchange->buying_currency = $currencyName;
        $exchange->buying_amount = $buyingAmount;
        $exchange->agree_terms = $request->input('agreeTerms');
        $exchange->account_name = $request->input('accountName');
        $exchange->transaction_id = $request->input('getTransactionId');
        $exchange->bank_name = $request->input('bankName');
        $exchange->account_number = $request->input('accountNumber');
        $exchange->save();

        return redirect('exchange/details')->with([
            'alert' => 'Your transaction with transaction number - ' . $getTransactionId . ' was successful',

        ]);
    }


    public function details()
    {
        $exchange = Exchange::orderBy('id', 'desc')->get()->first();

        return view('exchange.details')->with([
            'exchange' => $exchange
        ]);

    }



    public function edit($id)
    {
        $currencies = Currency::all();
        $exchange = Exchange::find($id);

        if (!$exchange) {
            return redirect('/exchange')->with([
                'alert' => 'Transaction Details not Found!'
            ]);
        }

        return view('exchange.edit')->with([
            'exchange' => $exchange,
            'currencies' => $currencies,]);
    }

    public function update(Request $request, $id)
    {
        $this->validate($request, [
            'sellingCurrency' => 'required',
            'buyingCurrency' => 'required',
            'buyingAmount' => 'required|numeric|min:10|max:500',
            'agreeTerms' => 'accepted',
            'accountName' => 'required',
            'bankName' => 'required',
            'accountNumber' => 'digits:10',
        ]);

        $exchange = Exchange::find($id);

        $getRate = $request->input('buyingCurrency');
        $buyingAmount = $request->input('buyingAmount');
        $sellingAmount = $getRate * $buyingAmount;
        $getCurrency = Currency::where('currency_rate', '=', $getRate)->get();

        foreach ($getCurrency as $currency) {
            $currencyName = $currency->currency_name;
        }

        $getTransactionId = $request->input('getTransactionId');
        //$getTransactionId = Exchange::where('transaction_id', '=', $getTransactionId)->get();


        $exchange->selling_currency = $request->input('sellingCurrency');
        $exchange->selling_amount = $sellingAmount;
        $exchange->buying_currency = $currencyName;
        $exchange->buying_amount = $buyingAmount;
        $exchange->agree_terms = $request->input('agreeTerms');
        $exchange->account_name = $request->input('accountName');
        $exchange->transaction_id = $request->input('getTransactionId');
        $exchange->bank_name = $request->input('bankName');
        $exchange->account_number = $request->input('accountNumber');
        $exchange->save();

        return redirect('/exchange/' . $id . '/edit')->with([
            'alert' => 'Your transaction with transaction number - ' . $getTransactionId . ' was saved'
        ]);

    }


    public function delete($id)
    {
        $exchange = Exchange::find($id);
        if (!$exchange) {
            return redirect('/exchange')->with([
                'alert' => 'Transaction not Found!'
            ]);
        }

        return view('exchange.delete')->with([
            'exchange' => $exchange
        ]);

    }

    public function destroy($id)
    {
        $exchange = Exchange::find($id);
        $exchange->delete();

        return redirect('/exchange')->with([
            'alert' => 'Transaction Deleted'
        ]);
    }


}
