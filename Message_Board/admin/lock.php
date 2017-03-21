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
	$option = $db->con->real_escape_string($_POST['option']);
	if ((!empty($id) && is_numeric($id))) {
		if ($option == 'lock') {
			$option_sql = 'UPDATE ' . GB_TABLE_NAME . ' SET status = 1 ' . 'WHERE id = ' . $id;
		} elseif ($option == 'unlock') {
			$option_sql = 'UPDATE ' . GB_TABLE_NAME . ' SET status = 0 ' . 'WHERE id = ' . $id;
		}
		$option_status = $db->con->query($option_sql);
		if ($option_sql) {
			echo json_encode(['error'=>0,'msg'=> $option . ' success']);
		} else {
			echo json_encode(['error'=>1,'msg'=> $option . ' falure']);
		}
	} else {
		echo json_encode(['error'=>1,'msg'=>'id needed!']);
	}
?>