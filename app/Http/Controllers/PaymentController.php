<?php

namespace App\Http\Controllers;

use App\Payments\Payments;
use App\SetDisCount\SetDisCount;
use Illuminate\Http\Request;

class PaymentController extends Controller
{
    public function store(Payments $payment,SetDisCount $discount)
    {
        // $payment= new Payments();
        $discount->discountLogic();
        dd($payment->charge(2500));
    }
}
