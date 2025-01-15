<?php

namespace App;

class StringOperations
{
    public function reverseString($string)
    {
        return strrev($string);
    }

    public function toUpperCase($string)
    {
        return strtoupper($string);
    }

    public function concatenate($string1, $string2)
    {
        return $string1 . $string2;
    }

    public function getLength($string)
    {
        return strlen($string);
    }

    public function contains($string, $substring)
    {
        return strpos($string, $substring) !== false;
    }
}
