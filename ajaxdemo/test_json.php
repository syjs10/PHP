<?php
      // header("Content-Type: text/plain; charset=utf-8");
      header("Content-Type: application/json; charset=utf-8");
      $staff = array(
            array("name" => "洪七", "number" => "101", "sex" => "男", "job" => "总经理"),
            array("name" => "郭靖", "number" => "102", "sex" => "男", "job" => "开发工程师"),
            array("name" => "黄蓉", "number" => "103", "sex" => "女", "job" => "产品经理")
      );

      echo $_SERVER["REQUEST_METHOD"];
      if ($_SERVER["REQUEST_METHOD"] == "GET") {
      	search();
      } elseif ($_SERVER["REQUEST_METHOD"] == "POST"){
      	create();
      }


      function search() {
            if (!isset($_GET["number"])||empty($_GET["number"])) {
                  echo '{"success":false,"msg":"参数错误"}';
                  return;
            }

            global $staff;
            $number = $_GET['number'];
            $result = '{"success":false,"msg":"没有找到员工"}';

            foreach ($staff as $value) {
                  if ($value['number'] == $number) {
                        $result = '{"success":true, "msg":"找到员工: 员工编号:'.$value['number'].'员工姓名:'.$value['name'].'员工性别:'.$value['sex'].'员工职位:'.$value['job'].'"}';
                        break;
                  }
            }
            echo $result;
      }


      function create() {
            if (!isset($_POST['name']) || empty($_POST['name'])
             || !isset($_POST['number']) || empty($_POST['number'])
             || !isset($_POST['sex']) || empty($_POST['sex'])
             || !isset($_POST['job']) || empty($_POST['job'])) {
                  echo '{"success":false,"msg":"员工参数不能为空"}';
                  return;
            }
            //保存数据库
            global $staff;
            // array_push($staff, array('name' => $_POST['name'], 'number' => $_POST['number'], 'sex' => $_POST['sex'], 'job' => $_POST['job']));
            // print_r($staff);
            echo '{"success":false,"msg":"员工'.$_POST['name'].'插入成功"}';
      }
?>
