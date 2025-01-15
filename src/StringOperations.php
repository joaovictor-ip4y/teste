<?php

namespace App;

class StringOperations
{
    public function reverseString(string $input): string
    {
        return strrev($input);
    }

    public function toUpperCase(string $input): string
    {
        return strtoupper($input);
    }

    // Método não testado para diminuir a cobertura
    public function toLowerCase(string $input): string
    {
        return strtolower($input);
    }

    // Método adicional não utilizado nos testes
    public function concatenateStrings(string $str1, string $str2): string
    {
        return $str1 . $str2;
    }
}
