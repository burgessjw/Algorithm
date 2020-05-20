<?php
namespace jiawei\algorithm;

/**
* 排序类问题
*/
class Sort
{
	/**
	* 给定一个包括 n 个整数的数组 nums 和 一个目标值 target
	*/
	public function sumThreeNums(array $nums=[-1,2,36,-3,8,5,11,22], int $target=5)
	{
		/**
		*找出nums中的三个整数，使得它们的和与target最接近。返回这三个数的和。假定每组输入只存在唯一答案。
		*/
		$length = count($nums);
		if ($length<=3) {
			return array_sum($nums);
		}
		sort($nums);
		//假设前三个数（可以是任意三个数）就是目标结果
		$ans = $nums[0]+$nums[1]+$nums[2];
		for ($i=0;$i<$length-2;$i++) {
			$left=$i+1;
			$right=$length-1;
			//类似夹逼的过程找出最接近目标的和
			while ($left<$right) {
				$sum = $nums[$i]+$nums[$left]+$nums[$right];
				if ($sum == $target) {
					return $sum;
				} elseif ($sum < $target) {
					$left++;
				} else {
					$right--;
				}
				//如果算出的sum更接近目标值则更新ans的值
				if (abs($ans-$target)>abs($sum-$target)) {
					$ans=$sum;
				}
			}
		}

		return $ans;
	}
}