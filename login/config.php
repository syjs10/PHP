
<?php
      header("Content-type:text/html; charaset=utf-8");
      $con=new mysqli("localhost", "root", "asdfghjkl;'","login");
      if(!$con){
            echo mysql_error();
      }

      $password = md5("123");
      $sql="insert into login (user,password)values('admin','$password')";     $result = $con -> query($sql);
      if($result){
            echo "yes";
      } else {
            echo "no";
      }
?>
