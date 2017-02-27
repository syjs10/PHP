<?php 
	header('content-typp:text/html; charset=utf-8');
	function study($username) {
		echo $username.' is studing....';
	}
	function sing($username) {
		echo $username.' is singing....';	
	} 
	function doWhat($funcName, $username) {
		$funcName($username);
	}
	doWhat('sing', 'JS');
	call_user_func('sing', "JS");
?>