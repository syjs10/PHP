<?php
      header("Content-Type: text/html; charset=gb2312");
      for ($k=1; $k < 10; $k++) {
            $ch = curl_init();
            curl_setopt($ch, CURLOPT_URL, "http://www.55x.cn/html/xuanhuan/list_21_{$k}.html");
            curl_setopt($ch, CURLOPT_HEADER, 1);
            curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
            $curl = curl_exec($ch);
            curl_close($ch);
            $pattern = '/<div\sclass="xiashu">[^`]*<\/div>/U';
            preg_match($pattern, $curl, $str);
            $array = implode('', $str);
            // echo $array;
            $pattern = '/<ul>[^`]+<\/ul>/U';
            preg_match_all($pattern, $array, $ul);
            // print_r($ul);

            for ($i=0; $i < count($ul[0]); $i++) {

                  $pattern = '/<li\sclass="qq_l">([0-9.]+)\sMB<\/li>/U';
                  preg_match($pattern, $ul[0][$i], $lil);

                  if ((float)$lil[1] > 5.0) {
                        $pattern = '/<li\sclass="qq_g"><a\shref="([^"]+)">([^`]+)<\/a><\/li>/U';
                        preg_match($pattern, $ul[0][$i], $lig);

                        echo "<a href='http://www.55x.cn{$lig[1]}'>{$lig[2]}</a><br/>";
                        //后续处理
                        // $ch = curl_init();
                        // curl_setopt($ch, CURLOPT_URL, 'http://www.55x.cn{$lig[1]}');
                        // curl_setopt($ch, CURLOPT_HEADER, 1);
                        // curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
                        // $curl = curl_exec($ch);
                        // curl_close($ch);
                        $pattern = '/<li\sclass="qq_j">([^`]+)<\/li>/U';
                        preg_match($pattern, $ul[0][$i], $lij);
                        echo "{$lil[1]}MB<br/>{$lij[1]}<br>";
                  }
            }


      }

?>
