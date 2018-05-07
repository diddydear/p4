<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CurrencyController extends Controller
{
    public function calc()
    {
        return view('exchange.calc');
    }

    public function currency()
    {
        $sellingCurrency = $_POST['sellingCurrency'];
        $buyingCurrency = $_POST['buyingCurrency'];
        $buyingAmount = $_POST['buyingAmount'];
        return view('exchange.currency');
    }

}
