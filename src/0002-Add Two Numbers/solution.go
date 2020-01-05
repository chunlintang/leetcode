package main

type ListNode struct {
	Val  int
	Next *ListNode
}

func addTwoNumbers(l1 *ListNode, l2 *ListNode) *ListNode {
	root := &ListNode{0, nil}
	res := root
	base := 0

	for l1 != nil || l2 != nil {
		base /= 10
		if l1 != nil {
			base += l1.Val
			l1 = l1.Next
		}
		if l2 != nil {
			base += l2.Val
			l2 = l2.Next
		}

		res.Next = &ListNode{Val: base % 10}
		res = res.Next
	}

	if base/10 == 1 {
		res.Next = &ListNode{Val: 1}
	}

	return root.Next
}
