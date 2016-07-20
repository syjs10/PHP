<?php
	//声明iTemplate接口
	interface iTemplate {
		public function setVariable($name, $var);
		public function getHtlm($template);
	}
	class Template implements iTemplate {
		private $vars = array();
		public function setVariable($name, $var) {
			$this->vars[$name] = $vars;
		}
		public function getHtml ($template){
			foreach ($this->vars as $name=>$value){
				$template = str_replace('{'.$name.'}', $value, $template);
			}
			return $template;
		}
	}
?>
