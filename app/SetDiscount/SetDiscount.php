<?php

namespace App\SetDisCount;

use App\Payments\Payments;

class SetDisCount
{
    
    public function __construct(private Payments $payment) {
        
    }


    public function discountLogic()
    {
        // todo 
        $this->payment->setDiscount(500);
        // return 
        // [
        //     'name' => 'Moein',
        //     'address' => "LA"
        // ];
    }
}