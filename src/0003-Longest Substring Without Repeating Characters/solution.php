<?php

class Solution
{

    /**
     * @param String $s
     * @return Integer
     */
    function lengthOfLongestSubstring($s)
    {
        $len = 0;
        $str = '';

        for ($i = 0; $i < strlen($s); $i++) {
            $pos = strpos($str, $s[$i]);
            if ($pos !== false) {
                $len2 = strlen($str);
                $len = $len2 > $len ? $len2 : $len;
                $str = substr($str, $pos + 1) . $s[$i];
            } else {
                $str .= $s[$i];
                if ($i == strlen($s) - 1) {
                    $len2 = strlen($str);
                    $len = $len2 > $len ? $len2 : $len;
                }
            }
        }

        return $len;
    }
}

$s = 'abcabcbb';
$sol = new Solution();
print_r($sol->lengthOfLongestSubstring($s));