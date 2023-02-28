<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;

class BillingController extends Controller
{
    public function index()
    {
        $bills = Auth::user()->bills; 


        return view('dashboard', ['bills' => $bills, 
            'user' => Auth::user()
        ]);
    }
}
