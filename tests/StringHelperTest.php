<?php

use PHPUnit\Framework\TestCase;

class StringHelperTest extends TestCase
{
    private $stringHelper;

    protected function setUp(): void
    {
        $this->stringHelper = new StringHelper();
    }

    public function testReverseString()
    {
        $this->assertEquals('cba', $this->stringHelper->reverseString('abc'));
        $this->assertEquals('54321', $this->stringHelper->reverseString('12345'));
    }

    public function testToUpperCase()
    {
        $this->assertEquals('HELLO', $this->stringHelper->toUpperCase('hello'));
        $this->assertEquals('WORLD', $this->stringHelper->toUpperCase('world'));
    }

    public function testConcatenate()
    {
        $this->assertEquals('Hello World', $this->stringHelper->concatenate('Hello ', 'World'));
        $this->assertEquals('12345abc', $this->stringHelper->concatenate('12345', 'abc'));
    }
}
