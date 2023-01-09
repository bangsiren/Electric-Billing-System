<?php

namespace App\Http\Controllers;

use App\Models\Bill;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

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
    public function index()
    {
        return view('home');
    }
    public function addBill(Request  $request){
         $request->validate([
            'connectionId' => 'required',
            'initial' => 'required',
            'final' => 'required',
            'customerId'=> 'required|min:5|max:10'
         ]);
         $bill = new Bill;
         $bill->customerId=$request->connectionId;
         $bill->initial=$request->initial;
         $bill->final=$request->final;
         $bill->month=$request->month;
         $bill->year=$request->year;
         $bill->units=(integer)$bill->final-(integer)$bill->initial;
         $admin=DB::table('admins')->first();
         $rate=$admin->rate;
         $bill->amount=$bill->units * $rate;
         $bill->status="Unpaid";
         $bill->save();
    }
}
