<?php

use PHPUnit\Framework\TestCase;
use App\StringOperations; // Importando a classe com o namespace correto

class StringOperationsTest extends TestCase
{
    private $stringOperations;

    protected function setUp(): void
    {
        $this->stringOperations = new StringOperations();
    }

    public function testReverseString()
    {
        $this->assertEquals('cba', $this->stringOperations->reverseString('abc'));
    }

    public function testToUpperCase()
    {
        $this->assertEquals('HELLO', $this->stringOperations->toUpperCase('hello'));
    }

    public function testConcatenate()
    {
        $this->assertEquals('Hello World', $this->stringOperations->concatenate('Hello', ' World'));
    }

    public function testGetLength()
    {
        $this->assertEquals(5, $this->stringOperations->getLength('Hello'));
    }
}
