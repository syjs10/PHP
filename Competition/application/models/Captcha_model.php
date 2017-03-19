<?php
      class Captcha_model extends CI_model {

            function __construct() {
                  

            }
            public function view()
            {
                  $this->load->helper('captcha');
                  $vals = array(
                     'img_path' =>  dirname(BASEPATH).'/captcha/',
                     'img_url' => base_url('captcha').'/',
                     'font_path' => dirname(BASEPATH).'/fonts/SIMYOU.TTF',
                     'img_width' => 100,
                     'img_height' => 40,
                     'expiration' => 2,
                     'word_length' => 4,
                     'font_size' => 17,
                     'colors'    => array(
                          'background' => array(255, 255, 255),
                          'border' => array(255, 255, 255),
                          'text' => array(0, 0, 0),
                          'grid' => array(234, 40, 40)
                      )
                  );
                  $cap = create_captcha($vals);
                  $this->session->set_userdata(array('verify' => $cap['word']));
                  return $cap;
            }
      }


 ?>
