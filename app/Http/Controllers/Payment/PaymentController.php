<?php

namespace App\Http\Controllers;

use App\Models\Payment;
use Illuminate\Http\Request;

class PaymentController extends Controller
{
    public function paymentView(){
        return view();
    }

    public function payment(){
        Payment::create([

        ]);
    }
}
