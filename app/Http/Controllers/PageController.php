<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Config;

class PageController extends Controller
{

    public function index()
    {
        return view('welcome');
    }

    public function about()
    {
        return view('pages.about');
    }

    public function exchange()
    {
        return view('pages.exchange');
    }

    public function contact()
    {
        return view('pages.contact');
    }
}
