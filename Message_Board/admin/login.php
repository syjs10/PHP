<?php  
	require_once '../config.php';
	require_once '../mysql.class.php';
	if (empty($_POST['uname']) || empty($_POST['password'])) {
		header('location:index.html');
	}
	$db = new DB();
	$db->connect();
	$user = $db->con-> real_escape_string($_POST['uname']);
	$pwd = $db->con-> real_escape_string($_POST['password']);
	$sql_login = "SELECT password FROM " . ADMIN_TABLE_NAME . " WHERE level=9 AND nickname = '{$user}' LIMIT 1";
	
	$result = $db->con->query($sql_login)->fetch_assoc();
	if ($result == null) {
		echo "<script>alert('用户名不存在');self.location='index.html';</script>";
		// header('location:index.html');
	}
	$password = $result['password'];
	if (md5($pwd) == $password) {
		//save to session
		session_start();
		$_SESSION['admin'] = true;
		
		header('location:admin.php');
	} else {
		echo "<script>alert('密码错误');</script>";
	}
	
?>