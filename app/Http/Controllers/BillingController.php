<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BillingController extends Controller
{
    //
    // public function show() {
    //     return view('bills');
    // }
    public function bills()
    {
        return view('bills');
    }
    public function showCreateBills()
    {
        return view('admin');
    }
}
