<?php
      /**
       *
       */
      class Information extends CI_Controller {
            function __construct() {
                  parent::__construct();
                  $this->load->helper('url_helper');
                  $this->load->helper('url');
                  $this->load->helper('form');
            }
            public function view($pages) {
                  $this->load->view('templates/header');
                  $this->load->view('information/'.$pages);
                  $this->load->view('templates/footer');
            }
            // public function needInformation() {
            //       # code...
            // }
      }

?>
