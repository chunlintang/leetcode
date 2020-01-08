<?php

class Solution
{

    /**
     * @param String $s
     * @return String
     */
    function longestPalindrome($s)
    {
        $len = strlen($s);
        if ($len <= 1) {
            return $s;
        }
        $res = $s[0];
        $dp = [];
        for ($i = $len - 1; $i >= 0; $i--) {
            $dp[$i] = [];
            for ($j = $i; $j < $len; $j++) {
                if ($j - $i == 0) {
                    $dp[$i][$j] = true;
                } elseif ($j - $i === 1 && $s[$i] === $s[$j]) {
                    $dp[$i][$j] = true;
                } elseif ($s[$i] == $s[$j] && $dp[$i + 1][$j - 1]) {
                    $dp[$i][$j] = true;
                }

                if ($dp[$i][$j] && $j - $i + 1 > strlen($res)) {
                    $res = substr($s, $i, $j + 1 - $i);
                }
            }
        }

        return $res;
    }
}

$str = "babadada"; // adada
$s = new Solution();
print_r($s->longestPalindrome($str));