<?php

namespace App\Http\Controllers\Payment;

use App\Http\Controllers\Controller;
use App\Models\Payment;

class PaymentHistoryController extends Controller
{
    public function makePaymentView(){

        $payment = Payment::with('subject')->latest()->get();

//        dd($payment);

        return view('Payment.show',compact('payment'));

    }
}
