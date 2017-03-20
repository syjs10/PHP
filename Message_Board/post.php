<?php  
	require_once "mysql.class.php";
	require_once "config.php";
	header("Content-Type: text/html;charset=utf-8");
	$db = new DB();
	$db->connect();
	$nickname = $db->con->real_escape_string($_POST['nickname']);
	$contents = $db->con->real_escape_string($_POST['contents']);
	if (empty($nickname) || empty($contents)) {
		exit('{"error":"1","msg":"Nickname or content cannot empty"}');
	}
	if (mb_strlen($nickname) > 10 || mb_strlen($contents) > 50) {
		exit('{"error":"1","msg":"Length incorrect"}');
	}
	if (!empty($_POST['email'])) {
		$email = $db->con->real_escape_string($_POST['email']);

		$email_reg = '/\w+([-+.]\w+)*@\w+([-.]\w+)*.\w+([-.]\w+)*/'; //邮箱正则
		if(!preg_match($email_reg, $email)) {
			exit('{"error":1, "msg":"Email address not legal"}');
		}
	} else {
		$email = "";
	}
	$create_time = date('Y-m-d H:i:s',time());
	$sql_insert = 'insert into ' . GB_TABLE_NAME . '(nickname, content, createtime, email) values( ' . "'{$nickname}', '{$contents}', '{$create_time}' , '{$email}')";
	$insert_status = $db->con->query($sql_insert);
	$db->close();
	if($insert_status) {
		 // echo json_encode(['error'=>'0','msg'=>'Success message']);
		 echo "报名成功<script>self.location='index.php?page=1'; </script>";
	} else{
		// echo json_encode(['error'=>'1','msg'=>'Messages failed']);
	}

?>
