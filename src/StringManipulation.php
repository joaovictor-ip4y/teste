<?php

namespace App;

class StringManipulation
{
    public function reverseString(string $input): string
    {
        return strrev($input);  // Testado
    }

    public function isEmpty(string $input): bool
    {
        return empty($input);  // Testado
    }

    public function countCharacters(string $input): int
    {
        // Não testado
        return strlen($input);
    }
}
