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
      echo <<<theEnd
      line 1
      line 2
      line 3
theEnd;
    ?>
    <?php
      define('TIREPRICE', 100);
      define('OILPRICE', 10);
      define('SPARKPRICE', 4);
      echo '<br />tireprice: '.TIREPRICE;
    ?>
  
  </body>
</html>
