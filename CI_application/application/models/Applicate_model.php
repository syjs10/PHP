<?php  
	/**
	* 
	*/
	class Applicate_model extends CI_Model {
		
		function __construct() {
			parent::__construct();
			$this->load->database();
		}
		function get_add_survey() {
			return $this->db->get('add_survey')->result_array();
		}
	}
?>