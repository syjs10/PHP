<?php
      require_once '../include.php';
      $act = $_REQUEST['act'];
      if ($act == 'logout') {
            logout();
      }elseif($act == 'addAdmin'){
            $mes = addAdmin();
      }elseif ($act == 'editAdmin') {
            $mes = editAdmin($_REQUEST['id']);
      }elseif ($act == 'delAdmin') {
            $mes = delAdmin($_REQUEST['id']);
      }
?>
<!DOCTYPE html>
<html>
      <head>
            <meta charset="utf-8">
            <title></title>
      </head>
      <body>
            <?php
                  if ($mes) {
                        echo $mes;
                  }
             ?>
      </body>
</html>
