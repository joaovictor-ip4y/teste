<?php

namespace Tests;

use PHPUnit\Framework\TestCase;
use App\Calculator;
use App\DivideByZeroException;  // Importando a exceção personalizada

class CalculatorTest extends TestCase
{
    private $calculator;

    protected function setUp(): void
    {
        $this->calculator = new Calculator();
    }

    public function testAdd()
    {
        $result = $this->calculator->add(2, 3);
        $this->assertEquals(5, $result);
    }

    public function testSubtract()
    {
        $result = $this->calculator->subtract(5, 3);
        $this->assertEquals(2, $result);
    }

    public function testMultiply()
    {
        $result = $this->calculator->multiply(2, 3);
        $this->assertEquals(6, $result);

        $result = $this->calculator->multiply(0, 3);
        $this->assertEquals(0, $result);
    }

    public function testDivide()
    {
        $result = $this->calculator->divide(6, 3);
        $this->assertEquals(2, $result);

        $this->expectException(DivideByZeroException::class);
        $this->calculator->divide(1, 0);
    }
}
