<?php
	$x=100; 
	$y="100";

	var_dump($x == $y);  // bool(ture)
	echo "<br>";
	var_dump($x === $y); // bool(false)
	echo "<br>";
	var_dump($x != $y);  // bool(false)  
	echo "<br>";
	var_dump($x !== $y); // bool(true)
	echo "<br>";

	$a=50;
	$b=90;
	var_dump($a);
	echo '<br>';
	var_dump($a > $b);   //bool(false)
	echo "<br>";
	var_dump($a < $b);   //bool(true)

	$test = '菜鸟教程';
	$username = isset($test) ? $test : 'nobody';
	echo $username, PHP_EOL;
	$username = $test ?: 'nobody';
	echo $username, PHP_EOL;






?>
