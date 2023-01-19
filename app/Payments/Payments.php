<?php
namespace App\Payments;

class Payments
{
    private $discount;
    public function __construct(private $currency) {
        $this->discount = 0;
    }

    public function setDiscount($amount)
    {
        $this->discount = $amount;
    }

    public function charge($amount)
    {
        return [
            'amount' => $amount-$this->discount,
            'currency' => $this->currency,
            'discount' => $this->discount,
            // 'fee' => $amount*0.03
        ];
    }
}