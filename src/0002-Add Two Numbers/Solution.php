<?php

class ListNode
{
    public $val = 0;
    public $next = null;

    function __construct($val)
    {
        $this->val = $val;
    }
}

class Solution
{

    /**
     * @param ListNode $l1
     * @param ListNode $l2
     * @return ListNode
     */
    function addTwoNumbers($l1, $l2)
    {
        $base = 0;
        $root = new ListNode(0);
        $res = $root;

        while ($l1 || $l2 || $base) {
            $val1 = $l1 ? $l1->val : 0;
            $val2 = $l2 ? $l2->val : 0;
            $sum = $val1 + $val2 + $base;
            $base = $sum > 9 ? intval($sum / 10) : 0;
            $root->next = $sum > 9 ? new ListNode($sum % 10) : new ListNode($sum);
            $l1 = $l1 ? $l1->next : null;
            $l2 = $l2 ? $l2->next : null;
            $root = $root->next;
        }

        return $res->next;
    }
}