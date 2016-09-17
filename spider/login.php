<!DOCTYPE html>
<html>
      <head>
            <meta charset="utf-8">
            <title></title>
      </head>
      <body>
            <?php
                  $user = $_POST['user'];
                  $password = $_POST['password'];
                  if ($user == "admin" && $password == "123456"){
                        echo '<p>Yes</p>';
                  } else {
                        echo '<p>No</p>';
                  }
            ?>
      </body>
</html>
