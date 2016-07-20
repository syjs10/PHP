<?php 
	$cars = array("Volvo", "BMW", "Toyota");//数组定义
	echo $cars[0];
	echo '<br>';
	echo count ($cars); //数组长度
	echo '<br>';
	for ($x = 0; $x < count($cars); $x++){ //数组遍历
		echo $cars[$x]."<br>";
	}
	foreach($cars as $x){
		echo $x;
		echo '<br>';
	}

	$age=array("Peter"=>"35","Ben"=>"37","Joe"=>"43"); //关系数组
	echo "Peter is " . $age['Peter'] . " years old.<br>";
	foreach($age as $x => $x_value){   // 遍历关系数组
		echo "Key: ".$x." Value:".$x_value."<br>";
	}
	//排序
	sort($cars);
	for ($x = 0; $x < count($cars); $x++){ //数组遍历
		echo $cars[$x]."<br>";
	}
	rsort($cars);
	for ($x = 0; $x < count($cars); $x++){ //数组遍历
		echo $cars[$x]."<br>";
	}
	asort($age);
	foreach($age as $x => $x_value){   // 遍历关系数组
		echo "Key: ".$x." Value:".$x_value."<br>";
	}
	ksort($age);
	foreach($age as $x => $x_value){   // 遍历关系数组
		echo "Key: ".$x." Value:".$x_value."<br>";
	}


?>
