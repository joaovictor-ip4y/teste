<?php

namespace App;

class StringHelper
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
}
