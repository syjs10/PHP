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
                        'number' => $this->input->post('number'),
                        'class' => $this->input->post('class'),
                        'qq' => $this->input->post('qq'),
                        'phone' => $this->input->post('phone'),
                         'object' => $this->input->post('object')
                  );
                  return $this->db->insert('student', $data);
            }
            public function get_data($object=NULL) {
                  if ($object === NULL) {
                        $query = $this->db->get('student');
                        return $query->result_array();
                  }
                  $query = $this->db->get_where('student',array('object' => $object));
                  return $query->result_array();
            }
      }
