<?php  
	$dir = "./";
		// $files1 = scandir($dir);
		// foreach ($files1 as $key => $file) {
		// 	echo "{$file}<br>";
		// 	if ($key >= 2) {
		// 		$fp = fopen($dir.$file,'r');
		// 		echo "<pre>".fread($fp,filesize($dir.$file))."</pre>";
		// 	}
		// 	echo "<br>";
		// }
	if($fp = fopen('test','r')) {
		$file_info = fstat($fp);
		print_r($file_info);
	}
	date("Y-m-d H:i:s");  
	echo "<br/>文件上次修改时间 ".date("Y-m-d H:i:s",$file_info['mtime']);  
	//大家可以自己玩一玩


?>