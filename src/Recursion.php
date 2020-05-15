<?php

namespace jiawei\algorithm;

/**
* 递归类问题
*/
class Recursion
{
	/**
	* 斐波那契数列的是这样一个数列：1、1、2、3、5、8、13、21、34…，求第 n 项的值是多少。
	*/
	public function Fibonacci(int $n)
	{
		if ($n <= 2) {
			return 1;
		}
		if (!empty($result[$n])) {
			return $result[$n];
		} else {
			$result[$n] = $this->Fibonacci($n-1)+$this->Fibonacci($n-2);
			return $result[$n];
		}
	}

	/**
	* 小青蛙跳台阶问题。一只青蛙一次可以跳上1级台阶，也可以跳上2级。
	* 求该青蛙跳上一个n级的台阶总共有多少种跳法
	*/
	public function Frog($n)
	{
		if ($n<=2) {
			return $n;
		}
		if (!empty($result[$n])) {
			return $result[$n];
		} else {
			$result[$n] = $this->Fibonacci($n-1)+$this->Fibonacci($n-2);
			return $result[$n];
		}
	}

	/**
	* 反转单链表
	*/
	public function reverseNodeList(Node $head)
	{
		//假设一个包含两个节点的链表，反转逻辑就很简单。
		//如果再多一个节点，三个节点的链表，依然要套用两个节点时的反转逻辑，那就需要确定从哪里开始反转。
		//如果从第一个节点开始反转，那会出现一种现象，就是第三个节点'脱链'了，就无法根据头节点找到第三个节点。
		//1->2->3  =>  "null<-1<-2 3"。
		//进而没办法反转了。
		//这就需要先反转后两个节点。
		//1->2->3  => "1->2 && null<-2<-3"
		//该方法唯一的返回值就是最后的一个节点（即反转后链表的第一个节点）
		if (null == $head || null == $head->next) {
			return $head;
		}
		//newNodeList实际上就是反转后链表的第一个节点
		$newNodeList = $this->reverseNodeList($head->next);
		//反转过程。通过递归，真正反转的过程是从倒数第二个和最后一个节点开始反转。
		$temp = $head->next;
		$temp->next = $head;
		$head->next = null;
		return $newNodeList;
	}
}
