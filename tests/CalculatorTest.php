<?php
// tests/CalculatorTest.php

use PHPUnit\Framework\TestCase;

class CalculatorTest extends TestCase
{
    private $calculator;

    protected function setUp(): void
    {
        $this->calculator = new Calculator();
    }

    public function testAdd()
    {
        $this->assertEquals(5, $this->calculator->add(2, 3));
    }

    public function testSubtract()
    {
        $this->assertEquals(1, $this->calculator->subtract(3, 2));
    }

    public function testMultiply()
    {
        $this->assertEquals(6, $this->calculator->multiply(2, 3));
    }

    public function testDivide()
    {
        $this->assertEquals(2.5, $this->calculator->divide(5, 2));
    }

    public function testDivideByZero()
    {
        $this->expectException(InvalidArgumentException::class);
        $this->calculator->divide(5, 0);
    }
}
