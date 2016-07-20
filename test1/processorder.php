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
    ?>
  </head>
  <body>
    <h1>Bob's Auto Parts</h1>
    <h2>Order Result</h2>
    <?php
      echo "Hello World!";
      echo '<p>Order process at ';
      echo date('H:i, jS F Y');
      echo '</p>';
      echo "Your order is as follows:<br />";
      echo $tireqty.' tires<br />';
      echo $oilqty.' bottles of oil<br />';
      echo "$sparkqty spark plug<br />";
//       echo <<<theEnd     //长字符串
//       line 1
//       line 2
//       line 3
// theEnd;
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
      $address = $_REQUEST['address'];
      //写入文件
      $DOCUMENT_ROOT = $_SERVER['DOCUMENT_ROOT'];
      echo $DOCUMENT_ROOT;
      $fp = fopen("$DOCUMENT_ROOT/../orders/orders.txt", 'ab');

      // if (!$fp){
      //     echo "Your order couldn't be processed at this time. Please try again later.";
      // }
    ?>

  </body>
</html>
