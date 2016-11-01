<?php
      /**
       *
       */
      class Form extends CI_Controller{

            public function index() {
                  $this->load->helper(array('form', 'url'));
                  $this->load->library('form_validation');
                  $this->form_validation->set_rules('name', '姓名', 'required');
                  $this->form_validation->set_rules('gender', '性别', 'required');
                  $this->form_validation->set_rules('class', '班级', 'required');
                  $this->form_validation->set_rules('phone', '联系方式', 'required');
                  if ($this->form_validation->run() == FALSE) {
                        $this->load->view('templates/header');
                        $this->load->view('application/applications');
                        $this->load->view('templates/footer');
                  } else {
                        $data['name'] = $this->input->post('name');
                        $this->load->view('application/success',$data);
                  }
            }
      }
