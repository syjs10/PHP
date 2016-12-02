<?php
      header("Content-type:application/vnd.ms-excel");
      header("Content-Disposition:filename=test.xls");
?>
<?php
      echo "学号\t姓名\t性别\t班级\t电话\tQQ";
?>

<?php foreach ($student_data as $student): ?>
                  <?php
                        echo $student['number']."\t";
                        echo $student['name']."\t";
                        echo $student['gender']."\t";
                        echo $student['class']."\t";
                        echo $student['phone']."\t";
                        echo $student['qq']."\t\n";
                  ?>
<?php endforeach; ?>
