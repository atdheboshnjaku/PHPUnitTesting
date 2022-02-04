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

    /**
     * @dataProvider provideTotal
     */

    public function testTotal(array $items, float $expected): void 
    {

        $coupon = null;
        $output = $this->Receipt->total($items, $coupon);
        $this->assertEquals(
            $expected, // providing a different number here generates a failure
            $output,
            "When summing the total should equal {$expected}"
        );

    }

    public function provideTotal()
    {

        return [

            'ints totaling 16' => [[1,2,5,8], 16],
            [[-1,2,5,8], 14],
            [[1,2,8], 11]

        ];

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

    public function testPostTaxTotal()
    {

        $items = [1,2,5,8];
        $tax = 0.20;
        $coupon = null;
        $receipt = $this->getMockBuilder('Ut\Unittest\Receipt')
                        ->setMethods(['tax', 'total'])
                        ->getMock();
        $receipt->expects($this->once())->method('total')->with($items, $coupon)->will($this->returnValue(10.00));
        $receipt->expects($this->once())->method('tax')->with(10.00, $tax)->will($this->returnValue(1.00));
        $result = $receipt->postTaxTotal([1,2,5,8], 0.20, null);
        $this->assertEquals(11.00, $result);

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