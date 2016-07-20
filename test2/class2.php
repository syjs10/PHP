<?php 
	class Site{
		var $url;
		var $title;
		function __construct($par1, $par2){//构造函数
			$this->title = $par1;
			this->url = $par2;
		}
		function getUrl() {
			echo "<a href = \"$this->url\" target = \"_blank\">$this->title</a>";
		}
		function __destruct(){
			echo "function is distory!";
		}
	}
	$runoob = new Site('菜鸟教程','http://www.runoob.com');
	$runoob->getUrl();
?>
