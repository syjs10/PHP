<?php
      /**
       *    统计需求及统计数据
       */
      class Need_model extends CI_Model {
            function __construct(){
                  parent::__construct();
                  $this->load->database();
            }

            /*
                  需统计数据表写入
             */

            public function need_insert() {
                  $data = array(
                        'inf' => $this->input->post('need')
                  );
                  return $this->db->insert('need',$data);
            }

            /*
                  需统计数据读取
             */

            public function get() {
                  $query = $this->db->get('need');
                  return $query->result_array();
            }

            /*
                  保存学生填写信息
             */

            public function saveData() {
                  $data = array();
                  $query = $this->need_model->get('need');
                  foreach ($query as $querys) {
                        $data[$querys['inf']] = $this->input->post($querys['inf']);
                  }
                  return $this->db->insert('information',$data);
            }

            /*
                  读取学生填写信息
             */

            public function get_information() {
                  $query = $this->db->get('information');
                  return $query->result_array();
            }


      }

?>
