<?php
      if ($this->session->userdata('login_confirm') != TRUE) {
            echo "<script>alert('用户名密码错误,请重新输入');self.location.href='view/login';</script>";
      } else {
            echo "<script>self.location.href='../form/view';</script>";
      }

?>
