<?php

class Solution
{
    /**
     * @param Integer $x
     * @return Boolean
     */
    function isPalindrome($x)
    {
        if ($x < 10 && $x >= 0) {
            return true;
        }
        if ($x < 0) {
            return false;
        }
        $len = strlen($x);
        $x = (string)$x;
        for ($i = 0; $i < $len - 1; $i++) {
            if ($x[$i] != $x[$len - $i - 1]) {
                return false;
            }
        }

        return true;
    }
}

$x = -121;
$s = new Solution();
var_dump($s->isPalindrome($x));