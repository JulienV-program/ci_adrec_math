<?php

namespace Tests;

use App\Multiply;
use PHPUnit\Framework\TestCase;


class MultiplyTest extends TestCase
{
    private $multiply;

    public function setUp()
    {
        parent::setUp();
        $this->multiply = new Multiply();
    }

    public function testMultiply5BY5()
    {
        $this->assertSame(25, $this->multiply->multiplyBy5(5));
    }

    public function testMultiply5BY4()
    {
        $this->assertEquals(20, $this->multiply->multiplyBy5(4));
    }

    public function testMultiply2BY5()
    {
        $this->assertSame(10, $this->multiply->multiplyBy2(5));
    }

    public function testMultiply2BY4()
    {
        $this->assertEquals(8, $this->multiply->multiplyBy2(4));
    }

    public function testMultiply8BY5()
    {
        $this->assertSame(40, $this->multiply->multiplyBy8(5));
    }
  
    public function testMultiply7BY5()
    {
        $this->assertSame(35, $this->multiply->multiplyBy7(5));
    }

    public function testMultiply8BY9()
    {
        $this->assertEquals(72, $this->multiply->multiplyBy8(9));
    }

    public function testMultiply7BY6()
    {
        $this->assertSame(42, $this->multiply->multiplyBy7(6));
    }
}
