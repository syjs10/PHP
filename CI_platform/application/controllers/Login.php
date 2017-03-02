<?php
      /**
       *
       */
      class Login extends CI_Controller
      {

            function __construct() {
                  parent::__construct();
                  $this->load->helper('url');
                  $this->load->helper('form');
                  $this->load->library('session');
            }
            public function views($page) {
                  $this->load->view('template/header');
                  $this->load->view($page);
                  $this->load->view('template/footer');
            }
            public function teacherLogin()
            {
                  $this->views('login/teacherLogin');
            }
      }

?>
