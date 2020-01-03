<?php

class Solution
{
    /**
     * @param Integer[] $nums
     * @param Integer $target
     * @return Integer[]
     */
    function twoSum($nums, $target)
    {
        $len = count($nums);
        for ($i = 0; $i < $len; $i++) {
            for ($j = 1; $j < $len; $j++) {
                if ($nums[$i] + $nums[$j] == $target) {
                    return [$i, $j];
                }
            }
        }

        return [];
    }
}

# test
/*$nums = [2, 7, 11, 15];
$target = 10;

$s = new Solution();
$res = $s->twoSum($nums, $target);
print_r($res);*/