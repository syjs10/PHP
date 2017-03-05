<?php  
	/**
	*   报名表
	*   
	*   
	*/
	class Applicate extends CI_Controller {
		
		function __construct() {
			parent::__construct();
			$this->load->helper('form');
			$this->load->library('form_validation');
			$this->load->model('applicate_model');
		}
		function add_survey() {
			$this->ci_smarty->assign('base_url', base_url());
			$this->ci_smarty->display('applicate/father.tpl');
			$this->load->view('applicate/add_survey');		
		}
		/**
		 * [add_form description]
		 * 添加统计项目
		 */
		function add_form() {
			$this->form_validation->set_rules('item', 'Item', 'required');
			$this->form_validation->set_rules('length', 'Length', 'required');
			if ($this->form_validation->run() == FALSE) {
				echo "<script>alert('补全所填信息');window.location.href='add_survey';</script>";
			} else {
				$data['need'] = $this->input->post('item');
				$data['length'] = $this->input->post('length');
				if($this->db->insert('add_survey', $data)){
					echo "<script>alert('添加成功');window.location.href='show_form';</script>";
				}else{
					echo "<script>alert('添加失败,请重新添加');window.location.href='add_survey';</script>";
				}
				
			}
		}
		/**
		 * [show_form description]
		 * 显示已添加统计项目
		 * @return [type] [description]
		 */
		function show_form() {
			$variable = $this->applicate_model->get_add_survey();
			$this->ci_smarty->assign('datas', $variable);
			$addsurvey = base_url('index.php/applicate/add_survey');
			$this->ci_smarty->assign('addsurvey', $addsurvey);
				
			$this->ci_smarty->assign('base_url', base_url());
			$this->ci_smarty->display('applicate/father.tpl');
			$this->ci_smarty->display('applicate/show_form.html');		
		}
		function create_survey() {
			$str = "CREATE TABLE survey ( id INT NOT NULL PRIMARY KEY AUTO_INCREMENT, ";
			$variable = $this->applicate_model->get_add_survey();
			foreach ($variable as $variables) {
				$str .= $variables['need']." VARCHAR(".$variables['length'].") NOT NULL, ";
			}
			$str = substr($str, 0, -2);
			$str .= " );";
			$this->db->query($str);
		}
		function survey() {
			$data = array();
			$arr = $this->db->query('DESC survey')->result_array();
			foreach ($arr as $arrs) {
				array_push($data, $arrs['Field']) ;
			}
			array_shift($data);
			$this->ci_smarty->assign('base_url', base_url());
			$this->ci_smarty->assign('datas', $data);
			$this->ci_smarty->display('applicate/father.tpl');
			$this->ci_smarty->display('applicate/survey.html');

		}

	}
?>