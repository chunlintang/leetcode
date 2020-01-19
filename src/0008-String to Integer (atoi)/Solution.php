<?php

class Solution
{
    /**
     * @param String $str
     * @return Integer
     */
    function myAtoi($str)
    {
        $str = preg_replace('/[A-Za-z].*/', '', trim($str));
        $min = pow(-2, 31);
        $max = abs($min) - 1;
        if ($str > $max) {
            return (int)$max;
        } elseif ($str < $min) {
            return (int)$min;
        } else {
            return (int)$str;
        }
    }
}

$str1 = "42";
$str2 = "   -42";
$str3 = "4193 with words";
$str4 = "words and 987";
$str5 = "-91283472332";

$obj = new Solution();

var_dump($obj->myAtoi($str1), $obj->myAtoi($str2), $obj->myAtoi($str3), $obj->myAtoi($str4), $obj->myAtoi($str5));