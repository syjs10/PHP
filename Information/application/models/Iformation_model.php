<?php

      class Information_model extends CI_model {

           function __construct() {
                 $this->load->database();
                 $this->load->helper('url');
           }
           public function save_data() {
                 $data = array(
                       'I1' => $this->input->post('I1'),
                       'I2' => $this->input->post('I2'),
                       'I3' => $this->input->post('I3'),
                       'I4' => $this->input->post('I4'),
                       'I5' => $this->input->post('I5'),
                       'I6' => $this->input->post('I6'),
                       'I7' => $this->input->post('I7'),
                       'I8' => $this->input->post('I8'),
                       'I9' => $this->input->post('I9'),
                       'I10' => $this->input->post('I10'),
                       'I11' => $this->input->post('I11'),
                       'I12' => $this->input->post('I12'),
                       'I13' => $this->input->post('I13'),
                       'I14' => $this->input->post('I14'),
                       'I15' => $this->input->post('I15'),
                       'I16' => $this->input->post('I16'),
                       'I17' => $this->input->post('I17'),
                       'I18' => $this->input->post('I18'),
                       'I19' => $this->input->post('I19'),
                       'I20' => $this->input->post('I20')
                 );
                 return $this->db->insert('student', $data);
           }
           public function get_data($name=NULL) {
                 if ($name === NULL) {
                       $query = $this->db->get('student');
                       return $query->result_array();
                 }
                 $query = $this->db->get_where('student',array('name' => $name));
                 return $query->row_array();
           }
      }
?>
