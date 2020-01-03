package main

import "testing"

func TestTwoSum(t *testing.T) {
	nums := []int{2, 7, 11, 15}
	target := 9

	res := TwoSum(nums, target)
	if res != nil {
		t.Logf("test twoSum success")
	} else {
		t.Fatalf("test twoSum err")
	}
}
