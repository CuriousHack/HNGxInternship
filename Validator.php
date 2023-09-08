<?php

class Validator
{
    public static function entry($value, $min = 1)
    {
        $value = trim($value);
        return strlen($value) >= $min;
    }
}