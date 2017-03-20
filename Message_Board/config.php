<?php

	define('DB_HOST', 'localhost');
	define('DB_USER', 'guestbook');
	define('DB_PWD', 'guestbook123');
	define('DB_NAME', 'guestbook');
	define('GB_TABLE_NAME', 'guestbook');
	define('ADMIN_TABLE_NAME', 'user');
	define('PER_PAGE_GB', 5);

	//调试用，类似与某些框架的几种模式，生产环境，产品环境
	$debug = true;
	if ($debug) {
		//开启错误提示并显示所有异常
		ini_set("display_errors", 1);
		error_reporting(E_ALL);
	}

?>