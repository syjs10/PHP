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
            }
            public function view($pages) {

                  $this->load->view('templates/header');
                  $this->load->view('application/'.$pages);
                  $this->load->view('templates/footer');
            }

      }
