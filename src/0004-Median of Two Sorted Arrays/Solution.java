/*
import com.sun.tools.javac.util.ArrayUtils;

import java.util.Arrays;

class Solution {
    public double findMedianSortedArrays(int[] nums1, int[] nums2) {
        int[] arr = ArrayUtils.addAll(nums1, nums2);
        Arrays.sort(arr);
        int len = arr.length;
        double res = 0;
        if (len % 2 == 0) {
            res = (arr[len / 2] + arr[len / 2 - 1]) / 2;
        } else {
            res = arr[(len - 1) / 2];
        }

        return res;
    }
}*/
