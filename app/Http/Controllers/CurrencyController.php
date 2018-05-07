<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CurrencyController extends Controller
{
    public function calc()
    {
        return view('exchange.calc');
    }

    public function currency(Request $request)
    {
        //Getting Form Data from Exchange Page
        $request->input('sellingCurrency');
        $request->input('buyingCurrency');
        $request->input('buyingAmount');

        return view('exchange.currency');
    }

}
