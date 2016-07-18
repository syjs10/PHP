<?php 
	class Site{
		var $url;
		var $title;
		function setUrl($par){
			$this->url = $par;
		}
		function getUrl() {
			echo "<a href = \"$this->url\">$this->title</a>";
		}
		function setTitle($par){
			$this->title = $par;
		}
		function getTitle() {
			echo $this->title.PHP_EOL;
		}
	}
	$runoob = new Site;
	$runoob->setTitle('菜鸟教程');
	$runoob->setUrl('http://www.runoob.com');
	$runoob->getUrl();
?>
