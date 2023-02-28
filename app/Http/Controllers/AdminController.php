<?php

namespace App\Http\Controllers;

use App\Models\Bill;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AdminController extends Controller
{
    public function home()
    {
        return redirect()->route('admin.createbills');
    }

    public function bills(){
        return view('admin.bills', ['bills' => Bill::all()]);
    }

    public function showCreateBills()
    {
        return view('admin.create_bills', ['users' => User::all()]);
    }

    public function addBill(Request $request)
    {
        // dd($request);
        $request->validate([
            'user_id' => 'required',
            'initial' => 'required',
            'final' => 'required',
            'month' => 'required',
            'rate' => ['required', 'min:0', 'integer'],
            'year' => 'required',
        ]);

        $bill = new Bill();
        $bill->user_id = $request->user_id;
        $bill->initial = $request->initial;
        $bill->final = $request->final;
        $bill->month = $request->month;
        $bill->year = $request->year;
        $bill->units = (int) $bill->final - (int) $bill->initial;
       
        $bill->amount = $bill->units * $request->rate;
        $bill->status = 'pending';
        $res = $bill->save();
        if ($res) {
            return redirect('/admin/bills');
        } else {
            return back()->with('falied', 'Something Went Wrong');
        }
    }

    public function showSettings()
    {
        return view('admin.settings');
    }

    public function settings(Request $request){
        $request->validate([
            'rate' => ['min:0', 'required', 'integer']
        ]);

        $request->user()->update(['rate' => $request->rate]);

        return redirect()->route('admin.bills');
    }
}
