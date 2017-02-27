<?php  
	$num1=1;
	$num2=2;
	$op="+";
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
	// return "{$num1}{$op}{$num2}={$res}";
	echo "{$num1}{$op}{$num2}={$res}";

?>