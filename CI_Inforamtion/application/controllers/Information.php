<?php
      /**
       *
       */
      class Information extends CI_Controller {

            function __construct() {
                  parent::__construct();
                  $this->load->helper(array('form', 'url'));
                  $this->load->database();
                  $this->load->dbutil();
                  $this->load->model('need_model');
            }

            /*
                  主页面
             */

            public function home() {
                  $this->load->view('template/header');
                  $this->load->view('information/home');
                  $this->load->view('template/footer');
            }

            /*
                  填写需统计项目
             */
            public function show($pages="need") {
                  $this->load->view('template/header');
                  $this->load->view('information/'.$pages);
                  $this->load->view('template/footer');
            }

            /*
                  接收show表单判断是否提交成功
             */

            public function getNeed() {

                  if ($this->need_model->need_insert() == true) {
                        $this->load->view('template/header');
                        $this->load->view('information/success');
                        $this->load->view('template/footer');
                  } else {
                        $this->load->view('template/header');
                        $this->load->view('information/false');
                        $this->load->view('template/footer');
                  }

            }
            /*
                  删除需统计信息
             */
            public function deleteAllNeed() {
                  if ($this->db->query("DELETE FROM need WHERE id > 0;")) {
                        echo "删除成功";
                  } else {
                        echo "删除失败";
                  }
                  // $this->dbutil->repair_table('need');

            }
            /*
                  显示需统计项目
             */

            public function showneed() {
                  $data['need'] = $this->need_model->get();
                  $this->load->view('template/header');
                  $this->load->view('information/showneed',$data);
                  $this->load->view('template/footer');
            }
            /*
                  建立统计所需数据表
             */
            public function makeTable() {
                  $sql = "CREATE TABLE information( id int(4) NOT NULL PRIMARY KEY auto_increment";
                  $need = $this->need_model->get();
                  foreach ($need as $needs) {
                        $sql .= ",".$needs['inf']." CHAR(100) NOT NULL";
                  }
                  $sql .= ");";
                  if ($this->db->query($sql)) {
                        echo "生成表成功<br><a href="home">主页</a>";
                  }
            }

            /*
                  删除统计所需数据表
             */
            public function deleteTable() {
                  $sql = "DROP TABLE information;";
                  if ($this->db->query($sql)) {
                        echo "删除表成功";
                  }
            }

            /*
                  学生填写信息页面
             */

            public function view($pages="information") {
                  $data['need'] = $this->need_model->get();
                  $this->load->view('template/header');
                  $this->load->view('information/'.$pages,$data);
                  $this->load->view('template/footer');
            }

            /*
                  保存学生提交的数据
             */

            public function saveData() {
                  if ($this->need_model->saveData()){
                        echo "提交成功!";
                  }
            }

            /*
                  生成excel表格
            */

            public function excel() {
                  $data['need'] = $this->need_model->get();
                  $data['information'] = $this->need_model->get_information();
                  $this->load->view('information/excel',$data);

            }


      }

?>
