<?php

namespace App;

class StringOperations
{
    public function reverseString(string $input): string
    {
        return strrev($input); // Coberta
    }

    public function toUpperCase(string $input): string
    {
        return strtoupper($input); // Coberta
    }

    // Método não testado, causando cobertura baixa
    public function toLowerCase(string $input): string
    {
        return strtolower($input); // Não coberta
    }
}
