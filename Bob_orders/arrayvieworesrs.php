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
        tr,th,td{
            height: 20px;
            width: 150px;
            text-align: center;
            border: 1px solid #ccf;
        }
    </style>
  </head>
  <body>
        <h1>Bob's Aotm Part</h1>
        <table cellspacing = "0">
            <tr>
                <th bgcolor = "#ccccff">Date</th>
                <th bgcolor = "#ccccff">Tires</th>
                <th bgcolor = "#ccccff">Oil</th>
                <th bgcolor = "#ccccff">Spark Plug</th>
                <th bgcolor = "#ccccff">Price</th>
                <th bgcolor = "#ccccff">Address</th>
            </tr>
            <?php
                $orders = file("$DOCUMENT_ROOT/orders/orders1.txt");
                $number_of_orders = count($orders);
                for ($i=0; $i < $number_of_orders; $i++) {
                    $line = explode("\t", $orders[$i]);
                    $line[1] = intval($line[1]);
                    $line[2] = intval($line[2]);
                    $line[3] = intval($line[3]);

                    echo "<tr>";
                    foreach ($line as $value) {
                        echo "<td>";
                        echo $value;
                        echo "</td>";
                    }
                    echo "</tr>";
                }



            ?>
        </table>
  </body>
</html>
