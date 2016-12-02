<?php
      /**
       *
       */
      class Form extends CI_Controller{

            function __construct() {
                  parent::__construct();
                  $this->load->model('form_model');
                  $this->load->model('image_model');
                  $this->load->model('captcha_model');
                  $this->load->library('session');
            }
            public function index() {
                  $this->load->helper(array('form', 'url'));
                  $this->load->library('form_validation');
                  $this->form_validation->set_rules('name', '姓名', 'required');
                  $this->form_validation->set_rules('gender', '性别', 'required');
                  $this->form_validation->set_rules('number', '学号', 'required');
                  $this->form_validation->set_rules('class', '班级', 'required');
                  $this->form_validation->set_rules('qq', 'QQ', 'required');
                  $this->form_validation->set_rules('phone', '电话', 'required');
                  $verify = $this->input->post('verify');
                  if ($verify == $_SESSION['verify']) {
                        if ($this->form_validation->run() == FALSE) {
                              $this->load->view('templates/header');
                              $this->load->view('application/applications');
                              $this->load->view('templates/footer');
                        } else {
                              $data['name'] = $this->input->post('name');
                              $this->form_model->save_data();
                              $this->load->view('application/success',$data);
                        }
                  } else {
                        echo "<script>alert('验证码错误!');window.location.href='".site_url('/application/view/applications')."'</script>";
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
            public function excel($name=NULL) {
                  $data['student_data'] = $this->form_model->get_data($name);
                  if (empty($data['student_data'])) {
                        show_404();
                  }
                  $this->load->view('application/excel', $data);
            }
            public function verify_image() {
                $this->load->library('lib_captcha');
                $this->lib_captcha->verifyImage(1,4,20,5);
                echo $_SESSION['verify'];
            }

      }
