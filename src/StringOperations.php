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

    public function getSubstring($string, $start, $length)
    {
        return substr($string, $start, $length);
    }
}
