<?php

namespace IrisMarketplace\Exceptions;

class UnableToCancelOrderTest extends \PHPUnit_Framework_TestCase
{
    private $exception;

    public function setUp()
    {
        $this->exception = new UnableToCancelOrder;
    }

    public function testException()
    {
        $this->assertInstanceOf('RuntimeException', $this->exception);
    }

     public function testGetResponseCode()
     {
         $this->assertSame(500, $this->exception->getResponseCode());
     }
}
