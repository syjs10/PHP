<?php 
	class myClass{
		public
			$public = "public";
		protected
			$protected = "protected";
		private
			$private = "private";
		function printHello(){
			echo $this->public."<br>";
			echo $this->protected."<br>";
			echo $this->private."<dr>";
		}
	}
	$obj = new myClass;
	echo $obj->public."<br>";
//	echo $obj->protection."<br>";
//	echo $obj->private."<br>";
	$obj->printHello();
	echo "<br>";
	
	class MyClass2 extends MyClass{
    	// 可以对 public 和 protected 进行重定义，但 private 而不能
    		protected $protected = 'protected2';	
		function printHello(){
				echo $this->public."<br>";
				echo $this->protected."<br>";
				echo $this->private."<dr>";
    		}
	}

	$obj2 = new MyClass2();
	echo $obj->public."<br>";// 这行能被正常执行
//	echo $obj->protection."<br>";// 输出 Public、Protected2 和 Undefined
//	echo $obj->private."<br>";// 未定义 private
	$obj2->printHello(); 
?>
