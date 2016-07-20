<?php
	class MyClass {
		const constant = "常量";
		function showConstant() {
			echo self::constant.PHP_EOL;
		}
	}
	echo MyClass::constant.PHP_EOL;
	$classname = "Myclass";
	echo $classname::constant.PHP_EOL;
	$class = new MyClass();
	$class -> showConstant().PHP_EOL;
	echo $class::constant;
?>
