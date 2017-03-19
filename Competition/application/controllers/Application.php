<?php
      /**
       *
       */
      class Application extends CI_Controller{
            public function __construct() {
                  parent::__construct();
                  // $this->load->model('');
                  $this->load->helper('url_helper');
                  $this->load->helper('url');
                  $this->load->helper('form');
                  $this->load->library('session');
            }
            public function view($pages) {
                  $this->load->view('templates/header');
                  $this->load->view('application/'.$pages);
                  $this->load->view('templates/footer');
            }
            public function login() {
                  $this->session;
                  $this->session->set_userdata(array('login_confirm' => FALSE));
                  $username = $this->input->post('username');
                  $password = $this->input->post('password');
                  $verify = $this->input->post('verify');

                  if ($verify != $_SESSION['verify']) {
                        echo "<script>alert('验证码错误!');self.location='".site_url('/application/view/login')."'</script>";
                  }
                  if ($username == "admin" && $password == "wangguan@2016") {
                        $this->session->set_userdata(array('login_confirm' => TRUE));
                        $this->load->view('application/s');
                  } else {
                        $this->session->set_userdata(array('login_confirm' => FALSE));
                        $this->load->view('application/s');
                  }


            }


      }
