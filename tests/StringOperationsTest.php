<?php

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
        $this->assertEquals('tac', $this->stringOperations->reverseString('cat'));
    }

    public function testToUpperCase()
    {
        $this->assertEquals('HELLO', $this->stringOperations->toUpperCase('hello'));
    }

    // Teste omitido para toLowerCase, gerando cobertura baixa
}
