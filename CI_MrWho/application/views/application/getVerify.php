<?php

      require_once 'lib/image.func.php';
      ob_clean();
      header("Content-type:image/jpeg"); 
      verifyImage(1, 4, 0, 0);
?>
