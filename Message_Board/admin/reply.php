<?php  
	require '../config.php';
	require '../mysql.class.php';
	session_start();
	if (!$_SESSION['admin']) {
		return false;
	}
	
	$db = new DB();
	$db->connect();
	$id = $db->con->real_escape_string($_POST['id']);
	$reply = $db->con->real_escape_string($_POST['reply']);
	if (!(empty($id) || empty($reply))) {
		$time = date('Y-m-d H:i:s',time());
		$reply_sql = 'UPDATE ' . GB_TABLE_NAME . ' SET reply = "' . $reply . '", replytime = "' . $time .'" WHERE id = ' . $id;
		$reply_status = $db->con->query($reply_sql);
		if ($reply_status) {
			echo '{"error":0, "msg":"success"}';
		} else {
			echo '{"error":1, "msg":"error"}';
		}
	} else {
		echo '{"error":1, "msg":"id or reply not null"}';
	}

?>