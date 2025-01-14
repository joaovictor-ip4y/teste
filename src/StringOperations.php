<?php

namespace App;

class StringOperations
{
    public function reverseString(string $str): string
    {
        return strrev($str);
    }

    public function toUpperCase(string $str): string
    {
        return strtoupper($str);
    }

    public function concatenate(string $str1, string $str2): string
    {
        return $str1 . $str2;
    }

    public function getLength(string $str): int
    {
        return strlen($str);
    }
}
