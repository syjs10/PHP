<?php
      if ($this->session->userdata('login_confirm') != TRUE) {
            echo "<script>alert('请登陆');self.location.href='../application/view/login';</script>";
      }
?>
<a href="excel">生成excel表格</a>
<a href="excellogo">logo比赛excel表格</a>
<a href="excelppt">ppt比赛excel表格</a>
<a href="excelpage">网页比赛excel表格</a>
<a href="excelvideo">视频比赛excel表格</a>
<table style="text-align:center;" class="show_table" cellspacing = "0px" align="center" >
      <tr >
            <th>
                  学号
            </th>
            <th>
                  姓名
            </th>
            <th>
                  性别
            </th>
            <th>
                  班级
            </th>
            <th>
                  电话
            </th>
            <th>
                  QQ
            </th>
            <th>
                  填报项目
            </th>
      </tr>
            <?php foreach ($student_data as $student): ?>
                  <tr>
                        <td>
                              <?php echo $student['number']; ?>
                        </td>
                        <td>
                              <?php echo $student['name']; ?>
                        </td>
                        <td>
                              <?php echo $student['gender']; ?>
                        </td>
                        <td>
                              <?php echo $student['class']; ?>
                        </td>
                        <td>
                              <?php echo $student['phone']; ?>
                        </td>
                        <td>
                              <?php echo $student['qq']; ?>
                        </td>
                        <td>
                              <?php echo $student['object']; ?>
                        </td>
                  </tr>
            <?php endforeach; ?>
</table>
