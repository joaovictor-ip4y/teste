<?php

// src/StringHelper.php
class StringHelper
{
    public function reverseString($str)
    {
        return strrev($str);
    }

    public function toUpperCase($str)
    {
        return strtoupper($str);
    }

    public function concatenate($str1, $str2)
    {
        return $str1 . $str2;
    }
}
