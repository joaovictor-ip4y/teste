<?php

namespace Tests;

use PHPUnit\Framework\TestCase;
use App\StringOperations;

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
        $this->assertEquals('54321', $this->stringOperations->reverseString('12345'));
    }

    public function testToUpperCase()
    {
        $this->assertEquals('HELLO', $this->stringOperations->toUpperCase('hello'));
        $this->assertEquals('WORLD', $this->stringOperations->toUpperCase('world'));
    }
}
