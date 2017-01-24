<?php
      include 'smarty.class.php';
      $smarty = new Smarty;
      $title = "this is a title";
      $content = "Hello World!";
      $smarty->assign("title", $title);
      $smarty->assign('content', $content);
      $smarty->display('index.html');
?>
