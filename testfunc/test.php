<?php  
	function calc ($num1, $num2, $op) {
		switch ($op) {
				case '+':
				$res = $num1 + $num2;
				break;
			case '-':
				$res = $num1 - $num2;
				break;
			case '*':
				$res = $num1 * $num2;
				break;
			case '/':
				if ($num2 != 0) {
					$res = $num1 / $num2;
				} else {
					exit('0不能当除数');
				}
				break;
			default:
				// echo 
				break;
		}
		return "{$num1}{$op}{$num2}={$res}";
	
	}
	echo calc(1,2,'+');
	echo '<br>';
	function get_date($del1 = '年', $del2 = '月', $del3 = '日') {
		$dayArr = array('日', '一', '二', '三', '四', '五', '六');
		$day = $dayArr[date('w')];
		return date("Y{$del1}m{$del2}d{$del3} 星期{$day}");
	}
	echo get_date();
?>