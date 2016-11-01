<?php
      /**
       *    报名表单保存数据库模型
       */
      class Form_model extends CI_model {

            function __construct() {
                  $this->load->database();
                  $this->load->helper('url');
            }
            public function save_data() {
                  $data = array(
                        'name' => $this->input->post('name'),
                        'gender' => $this->input->post('gender'),
                        'class' => $this->input->post('class'),
                        'phone' => $this->input->post('phone')
                  );
                  return $this->db->insert('student', $data);
            }
      }
