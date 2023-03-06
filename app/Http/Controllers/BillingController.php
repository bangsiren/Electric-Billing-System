<?php

namespace App\Http\Controllers;

use PDF;
use Illuminate\Support\Facades\Auth;
class BillingController extends Controller
{
    public function index()
    {
        $bills = Auth::user()->bills; 


        return view('dashboard', [
            'bills' => $bills, 
            'user' => Auth::user()
        ]);
    }

    public function showPayment() {
        return view('pay');
    }
    public function createPDF() {
        // retreive all records from db
        $bills = Auth::user()->bills;
        // share data to view
    
        $pdf = PDF::loadView('pdf.bills', [
            'bills' => $bills, 
            'user' => Auth::user()
        ]);
        // download PDF file with download method
        return $pdf->download('bills.pdf');
      }
}
