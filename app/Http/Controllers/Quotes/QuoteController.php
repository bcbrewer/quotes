<?php

namespace App\Http\Controllers\Quotes;

use App\Http\Controllers\Controller;

class QuoteController extends Controller
{
    public function index()
    {
        return view('quotes.index');
    }
}