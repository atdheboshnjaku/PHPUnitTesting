<?php 

declare(strict_types = 1);

namespace Ut\Unittest;

class Receipt
{


    public function total(array $items = [])
    {

        return array_sum($items);

    }



}