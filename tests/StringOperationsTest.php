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

    // Teste de "toUpperCase" removido para gerar cobertura baixa
    // Teste de "toLowerCase" também não será incluído
}

