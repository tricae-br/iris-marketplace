<?php

namespace IrisMarketplace\Exceptions;

class OutOfStockTest extends \PHPUnit_Framework_TestCase
{
    private $exception;

    public function setUp()
    {
        $this->exception = new OutOfStock;
    }

    public function testException()
    {
        $this->assertInstanceOf('RuntimeException', $this->exception);
    }

     public function testGetResponseCode()
     {
         $this->assertSame(
             400,
             $this->exception->getResponseCode()
         );
     }
}
