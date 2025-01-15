<?php

use PHPUnit\Framework\TestCase;
use App\Calculator;  // Certifique-se de usar o namespace correto

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

        $result = $this->calculator->add(-1, 1);
        $this->assertEquals(0, $result);

        $result = $this->calculator->add(2.5, 3.5);
        $this->assertEquals(6, $result);
    }
}
