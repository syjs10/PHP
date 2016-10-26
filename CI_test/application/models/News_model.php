<?php
      /**
       *
       */
      class News_model extends CI_model {

            public function __construct() {
                  $this->load->database();
            }
            /**
             * [get_news 查询新闻]
             * @param  boolean $slug [传入参数: 传入查询单条
             *                        不传入:   查询所有记录]
             * @return [type]        [传入参数: 返回所有记录
             *                        不传入:   单条记录]
             */
            public function get_news($slug = FALSE) {
                  if ($slug === FALSE) {
                        $query = $this->db->get('news');
                        return $query->result_array();
                  }
                  $query = $this->db->get_where('news', array('slug'=>$slug));
                  return $query->row_array();

            }
            public function set_news() {
                  $this->load->helper('url');

                  $slug = url_title($this->input->post('title', 'dash', TRUE));

                  $data = array(
                        'title' => $this->input->post('title'),
                        'slug'  => $slug,
                        'text'  => $this->input->post('text')
                  );

                  return $this->db->insert('news', $data);
            }
      }
