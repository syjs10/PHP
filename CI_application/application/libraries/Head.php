<?php  
	/**
	* 
	*/
	class Head extends Ci_smarty{
		function __construct(){
			parent::__construct();
		}
		public function viewHead(){
			$js   = base_url("bootstrap/js/bootstrap.min.js");
			$css = base_url("bootstrap/css/bootstrap.min.css");
			$this->ci_smarty->assign('js',$js);
			$this->ci_smarty->assign('css',$css);
			$this->ci_smarty->display('test.html');
		}
	}
	

?>