<?php

class Solution
{

    /**
     * @param Integer $x
     * @return Integer
     */
    function reverse($x)
    {
        $ret = strrev($x) * ($x < 0 ? -1 : 1);
        if ($ret >= pow(2, 31) - 1 || $ret <= pow(2, 31) * -1) {
            return 0;
        }

        return $ret;
    }
}

$input = 123;
$s = new Solution();
print_r($s->reverse($input));