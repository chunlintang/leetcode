<?php

class Solution
{
    /**
     * @param Integer[] $nums1
     * @param Integer[] $nums2
     * @return Float
     */
    function findMedianSortedArrays($nums1, $nums2)
    {
        $arr = array_merge($nums1, $nums2);
        //print_r($arr);
        sort($arr);
        $len = sizeof($arr);
        //print_r($arr);
        if ($len % 2 == 0) {
            return ($arr[$len / 2] + $arr[$len / 2 - 1]) / 2;
        }

        return $arr[($len - 1) / 2];
    }
}

$nums1 = [1, 2, 5, 7, 8, 12, 32];
$nums2 = [3, 4, 8, 9, 11, 13, 22, 89];

$s = new Solution();
print_r($s->findMedianSortedArrays($nums1, $nums2));