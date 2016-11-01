<?php
      /**
       *
       */
      class Form extends CI_Controller{

            function __construct() {
                  parent::__construct();
                  $this->load->model('form_model');
            }
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
                        $this->form_model->save_data();
                        $this->load->view('application/success',$data);
                  }
            }
            public function view($name=NULL) {
                  $data['student_data'] = $this->form_model->get_data($name);
                  if (empty($data['student_data'])) {
                        show_404();
                  }
                  $this->load->view('templates/header');
                  $this->load->view('application/show_student', $data);
                  $this->load->view('templates/footer');
            }
      }
