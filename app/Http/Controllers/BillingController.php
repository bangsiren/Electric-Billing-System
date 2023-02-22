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

    public function addBill(Request  $request)
    {
        // dd($request);
        $request->validate([
            'connectionId' => 'required|min:5|max:10',
            'initial' => 'required',
            'final' => 'required',
            'month' => 'required',
            'year' => 'required'
        ]);
        $bill = new Bill();
        $bill->connectionId = $request->connectionId;
        $bill->initial = $request->initial;
        $bill->final = $request->final;
        $bill->month = $request->month;
        $bill->year = $request->year;
        $bill->units = (int)$bill->final - (int)$bill->initial;
        $admin = DB::table('admins')->first();
        $rate = $admin->rate;
        $bill->amount = $bill->units * $rate;
        $bill->status = "Unpaid";
        $res = $bill->save();
        if ($res) {
            return back()->with('success', 'Registered Successfully');
        } else {
            return back()->with('falied', 'Something Went Wrong');
        }
    }
}
