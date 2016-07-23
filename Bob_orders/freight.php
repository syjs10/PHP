<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">

    <title></title>
  </head>
  <body>
      
      <table border="0" cellpadding = "3">
          <tr>
              <td bgcolor = "#ccc" align = "center">
                Distance
              </td>
              <td bgcolor = "#ccc" align = "center">
                Cost
              </td>
          </tr>

          <?php
              $distance = 50;
              while ($distance <= 250){
                  echo  "<tr>";
                  echo  "<td align = \"right\">".$distance."</td>";
                  echo  "<td align = \"right\">".($distance/10)."</td>";
                  echo  "</tr>\n";
                  $distance += 50;
              }
          ?>
      </table>
  </body>
</html>
