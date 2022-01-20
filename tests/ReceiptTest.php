<?php 

declare(strict_types = 1);

namespace TDD\Test;
//require dirname(dirname(__FILE__)) . DIRECTORY_SEPARATOR . 'vendor' . DIRECTORY_SEPARATOR . 'autoload.php';

use PHPUnit\Framework\TestCase;
use Ut\Unittest\Receipt;

class ReceiptTest extends TestCase
{

    public function testTotal() 
    {

        $receipt = new Receipt();
        $this->assertEquals(
            15, // providing a different number here generates a failure
            $receipt->total([0,2,5,8]),
            'When summing the total should equal 15'
        );

    }




}