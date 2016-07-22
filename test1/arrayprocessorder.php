<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Bob's Auto Parts - Order Results</title>
    <?php
      // create short variable names
      $tireqty = $_POST['tireqty'];
      $oilqty = $_POST['oilqty'];
      $sparkqty = $_POST['sparkqty'];
      $address = $_POST['address'];

    ?>
    <style media="screen">
        *{
            padding: 0px;
            margin: 0px;
        }
        td{
            width: 150px;
            height: 20px;
            text-align: center;
            border: 1px solid #ccc;
        }
    </style>
  </head>
  <body>
    <h1>Bob's Auto Parts</h1>
    <h2>Order Result</h2>
    <?php
      echo "Hello World!";
      echo '<p>Order process at ';
      echo $date = date('Y F jS  H:i');
      echo '</p>';
      echo "Your order is as follows:<br />";
      echo $tireqty.' tires<br />';
      echo $oilqty.' bottles of oil<br />';
      echo "$sparkqty spark plug<br />";
    ?>
    <?php
          $totalqty = 0;
          $totalqty = $tireqty + $oilqty + $sparkqty;
          if (0 == $totalqty){
              echo '<p style = "color : red">';
              echo "You didn't order anything on the private page,
              please return to order it ";
              echo '</p>';
              echo "<a href = \"orderform.html\">Bod基本订单</a>";
          } else {
              $totalamount = 0.00;
              define('TIREPRICE', 100);
              define('OILPRICE', 10);
              define('SPARKPRICE', 4);

              $totalamount = $tireqty * TIREPRICE
                              + $oilqty * OILPRICE
                              + $sparkqty * SPARKPRICE;
              echo "Subtotal: $".number_format($totalamount, 2)."<br />";
              $taxrate = 0.10; // local sales tax is 10%
              $totalamount = $totalamount * (1 + $taxrate);
              echo "Total including tax: $".number_format($totalamount, 2)."<br />";

              echo gettype($totalamount); //获取变量类型
              settype($totalamount, 'int');
              echo $totalamount;

              echo var_dump(empty($totalamount));

          }
          $find = $_POST['find'];
          switch ($find) {
              case "a":
                  echo "<p>Regular customer</p>";
                  break;
              case "b":
                  echo "<p>TV advertising customer</p>";
                  break;
              case "c":
                  echo "<p>Phone directory customer</p>";
                  break;
              case "d":
                  echo "<p>Word a mouth customer</p>";
                  break;
           }
           //数组方法1
           $products = array(array('TIR', 'Tires', 100),
                        array('OIL', 'Oil', 10),
                        array('SPK', 'Spark Plug', 4));
           //二位数组排序用usort 并且自己写函数控制返回值
           function compare($x,$y){
               if ($x[2] == $y[2]){
                   return 0;
               } if ($x[2] < $y[2]) {
                   return -1;
               } else {
                   return 1;
               }
           }
           usort($products, 'compare');
           echo "<table align = \"center\" cellspacing=\"0\">";
           for ($row=0; $row < 3; $row++) {
               echo "<tr>";
               for ($column=0; $column < 3; $column++) {
                   echo '<td>'.$products[$row][$column].'</td>';
               }
               echo "</tr>";
           }
           echo "</table>";
        //    数组方法2
        // $products = array(array(
        //                             'Code'=>'TIR',
        //                             'Description'=>'Tires'
        //                             'Price'=>100;
        //                         ),array(
        //                             'Code'=>'OIL',
        //                             'Description'=>'Oil'
        //                             'Price'=>10;
        //                         ),array(
        //                             'Code'=>'SPK',
        //                             'Description'=>'Spark Plug'
        //                             'Price'=>4;
        //                         ));

    ?>

  </body>
</html>
