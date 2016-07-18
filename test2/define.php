<?php
	define("GREETING", "Hello World!");
	echo GREETING; //输出helloworld
	echo '<br>';
	echo greeting; //输出greeing
	echo '<br>';
	function myTest(){
		echo GREETING; //常量是全局的
	}
	myTest();
?>
