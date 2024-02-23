<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SalesPageController extends Controller
{
    public function show() {
        return view('transactions.transaction');
    }
}
