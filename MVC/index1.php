<?php
      require_once ('function.php');
      //url 形式  index.php?controller=控制器&method=方法名
      $controllerAllow = array('test', 'index','show');
      $methodAllow = array('test', 'index','show');
      $controller = in_array($_GET['controller'], $controllerAllow)?daddslashes($_GET['controller']):'index';
      $method = in_array($_GET['method'], $methodAllow)?daddslashes($_GET['method']):'index';
      C($controller, $method);
?>
