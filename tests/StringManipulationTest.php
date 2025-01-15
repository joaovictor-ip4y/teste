<?php

use PHPUnit\Framework\TestCase;
use App\StringManipulation;

class StringManipulationTest extends TestCase
{
    private $stringManipulation;

    protected function setUp(): void
    {
        $this->stringManipulation = new StringManipulation();
    }

    public function testReverseString()
    {
        $this->assertEquals('cba', $this->stringManipulation->reverseString('abc'));
    }

    public function testIsEmpty()
    {
        $this->assertTrue($this->stringManipulation->isEmpty(''));
        $this->assertFalse($this->stringManipulation->isEmpty('abc'));
    }
}
