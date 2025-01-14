<?php

namespace App;

class StringHelper
{
    public function reverseString(string $str): string
    {
        return strrev($str);
    }

    public function toUpperCase(string $str): string
    {
        return strtoupper($str);
    }

    // Aqui não vamos testar este método na classe de testes, para garantir cobertura baixa
    public function concatenate(string $str1, string $str2): string
    {
        return $str1 . $str2;
    }
}
