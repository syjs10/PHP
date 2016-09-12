<?php
setcookie("user", "Alex Porter", time()+3600);
?>

<html>
<body>
      <?php
            // Print a cookie
            echo $_COOKIE["user"];

            
      ?>
</body>
</html>
