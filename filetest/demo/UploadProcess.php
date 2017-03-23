<?php  
	
	$username = $_POST['username'];
	$fileintro = $_POST['fileintro'];
	echo $username.$fileintro;
	echo "<pre>";
	print_r($_FILES);
	echo "</pre>";


?>