<?php
      $url='http://www.baidu.com';
      $fp = fopen($url, 'r');
      $header = stream_get_meta_data($fp);//获取报头信息
      /**
       * 把$fp中的内容变成字符串，并输出成html文本
       */
      while(!feof($fp)) {
            $result .= fgets($fp, 1024);
      }
      echo "url header: <br />";
      print_r($header);
      echo " <br />url body: $result";

      fclose($fp);
?>
