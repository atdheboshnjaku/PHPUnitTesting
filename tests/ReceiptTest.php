<?php 

declare(strict_types = 1);

namespace TDD\Test;

use PHPUnit\Framework\TestCase;
use Ut\Unittest\Receipt;

class ReceiptTest extends TestCase
{

    public function setUp(): void 
    {

        $this->Receipt = new Receipt();

    }

    public function tearDown(): void 
    {

        unset($this->Receipt);

    }

    public function testTotal(): void 
    {

        $input = [0,2,5,8];
        $coupon = null;
        $output = $this->Receipt->total($input, $coupon);
        $this->assertEquals(
            15, // providing a different number here generates a failure
            $output,
            'When summing the total should equal 15'
        );

    }

    public function testTotalAndCoupon(): void 
    {

        $input = [0,2,5,8];
        $coupon = 0.20; 
        $output = $this->Receipt->total($input, $coupon);
        $this->assertEquals(
            12, 
            $output,
            'When summing the total should equal 12'
        );

    }

    public function testTax()
    {

        $inputAmount = 10.00;
        $taxInput = 0.10;
        $output = $this->Receipt->tax($inputAmount, $taxInput);
        $this->assertEquals(
            1.00,
            $output,
            'The tax calculation should equal 1.00'
        );

    }




}