<?php
      header("Content-type:application/vnd.ms-excel");
      header("Content-Disposition:attachment;filename=test_data.xls");
?>
<?php
      foreach ($need as $needs) {
            echo $needs['inf']."\t";

      }
      echo "\n";

      foreach ($information as $informations) {
            foreach ($need as $needs) {
                  echo $informations[$needs['inf']]."\t";
            }
            echo "\n";
      }

?>
