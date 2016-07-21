<?php
  //create short valuable name
  $DOCUMENT_ROOT = $_SERVER['DOCUMENT_ROOT'];
?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Customer Orders</title>
    <style media="screen">
    table.gridtable {
        font-family: verdana,arial,sans-serif;
        font-size:11px;
        color:#333333;
        border-width: 1px;
        border-color: #666666;
        border-collapse: collapse;
    }
    table.gridtable th {
        border-width: 1px;
        padding: 8px;
        border-style: solid;
        border-color: #666666;
        background-color: #dedede;
    }
    table.gridtable td {
        border-width: 1px;
        padding: 8px;
        border-style: solid;
        border-color: #666666;
        background-color: #ffffff;
    }
    </style>
  </head>
  <body>
        <h1>Bob's Aotm Part</h1>
        <?php
            $fp = fopen("$DOCUMENT_ROOT/orders/orders1.txt",'rb');
            if (!$fp){
                echo "Can't open the file";
                exit;
            }
            //方法1
            // while (!feof($fp)){
            //     $orders = fgets($fp, 999);
            //     echo $orders,"<br/>";
            // }
            //方法2
            // echo "<table>";
            // while (!feof($fp)){
            //     $orders = fgetcsv($fp, 100, "\t");
            //     echo "<tr>";
            //     for ($i = 0; $i < 6; $i++){
            //         echo "<td>".$orders[$i]."</td>";
            //     }
            //     echo "</tr>";
            // }
            // echo "</table>";
            //方法3
            // readfile("$DOCUMENT_ROOT/orders/orders1.txt");
            //方法4
            fpassthru($fp);
        ?>
  </body>
</html>
