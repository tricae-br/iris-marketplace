<?php

namespace IrisMarketplace\Exceptions;

class OrderNotFoundTest extends \PHPUnit_Framework_TestCase
{
    private $exception;

    public function setUp()
    {
        $this->exception = new OrderNotFound();
    }

    public function testException()
    {
        $this->assertInstanceOf('RuntimeException', $this->exception);
    }

     public function testGetResponseCode()
     {
         $this->assertSame(
             404,
             $this->exception->getResponseCode()
         );
     }
}
