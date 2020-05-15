<?php

namespace jiawei\algorithm;

class BotMove {

	/**
	* 判断机器人在完成移动后是否在 (0, 0) 处结束
	*/
	public function botMove(array $moves) {
		//在二维平面上，有一个机器人从原点 (0, 0) 开始。
		//给出它的移动顺序，判断这个机器人在完成移动后是否在 (0, 0) 处结束
		$x = 0;
		$y = 0;
		$movesArr = array_filter($moves, function($move) {
			if (' ' !== $move)
			{
				return true;
			}
		});
		for ($i=0,$length=count($movesArr);$i<$length;$i++) {
			switch ($moves[$i]) {
				case 'u':
					$x++;
					break;
				case 'd':
					$x--;
					break;
				case 'l':
					$y--;
					break;
				case 'r':
					$y++;
					break;
				default:
					break;
			}
		}
		return ((0 === $x && 0 === $y));
	}
}
