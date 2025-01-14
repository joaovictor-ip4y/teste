<?php

use PHPUnit\Framework\TestCase;
use App\StringHelper;

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
    }

    public function testToUpperCase()
    {
        $this->assertEquals('HELLO', $this->stringHelper->toUpperCase('hello'));
    }
}
