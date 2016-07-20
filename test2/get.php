<?php
    $username = isset($_GET['user']) ? $_GET['user'] : 'Nobody';
    $userpasswd = isset($_GET['passwd']) ? $_GET['passwd'] : 'Nobody';
    if ($username == "root" && $userpasswd == "123456"){
      echo '登录成功';
    } else {
      echo '登陆失败';
    }
?>
