<?php

use PHPUnit\Framework\TestCase;
use App\Calculator;  // Certifique-se de que este é o caminho correto para a sua classe

class CalculatorTest extends TestCase
{
    public function testAdd()
    {
        $calculator = new Calculator();
        $this->assertEquals(4, $calculator->add(2, 2));
    }

    public function testSubtract()
    {
        $calculator = new Calculator();
        $this->assertEquals(1, $calculator->subtract(3, 2));
    }
}
