<?php
      header("Content-Type: text/html; charset=gb2312");
      $ch = curl_init();
      curl_setopt($ch, CURLOPT_URL, "http://www.55x.cn/html/xuanhuan/");
      curl_setopt($ch, CURLOPT_HEADER, 0);
      curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
      $curl = curl_exec($ch);
      $array = explode("<div", $curl, -1);
      $array1 = explode("</div>", $array[26]);
      $array2 = explode("<ul>", $array1[0]);
      print_r($array2);
?>
