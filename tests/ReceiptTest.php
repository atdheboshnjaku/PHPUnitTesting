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
        $output = $this->Receipt->total($input);
        $this->assertEquals(
            15, // providing a different number here generates a failure
            $output,
            'When summing the total should equal 15'
        );

    }




}