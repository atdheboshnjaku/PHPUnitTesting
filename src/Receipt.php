<?php 

declare(strict_types = 1);

namespace Ut\Unittest;

class Receipt
{


    public function total(array $items = [], ?float $coupon): ?float 
    {

        $sum = array_sum($items);
        if(!is_null($coupon)) {
            return $sum - ($sum * $coupon);
        }

        return $sum;

    }

    public function tax($amount, $tax): float
    {

        return ($amount * $tax);

    }

    public function postTaxTotal(array $items, float $tax, ?float $coupon): float
    {

        $subTotal = $this->total($items, $coupon);
        return $subTotal + $this->tax($subTotal, $tax);

    }



}