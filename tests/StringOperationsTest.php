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
    }
}
