<?php  
	/**
	* 
	*/
	class DB {
		public $con;
		public function connect() {
			if (!$this->con) {
				$this->con = new mysqli(DB_HOST,DB_USER,DB_PWD,DB_NAME);
				if (mysqli_connect_error()) {
					exit("Database Error");
				}
			}
		}
		public function close() {
			if ($this->con) {
				$this->con->close();
				$this->con = NULL;
			}
		}
		public function get_result($table = GB_TABLE_NAME){
			$sql = "SELECT * FROM ".$table." WHERE status = 0;";
			return $this->con->query($sql);
		}
		public function get_data_num($table = GB_TABLE_NAME) {
			$result = $this->get_result($table);
			return $result->num_rows;
		}
		public function get_result_data($table = GB_TABLE_NAME) {
			$result = $this->get_result($table);
			while($temp = $result->fetch_assoc()) {
				$sql_page_array[] = $temp;
			}
			return $sql_page_array;
		}
		public function get_pagenum($table = GB_TABLE_NAME) {
			$num = $this->get_data_num($table);
			return ceil($num/PER_PAGE_GB);
		}
		public function pageDivide($table = GB_TABLE_NAME, $page = 1) {
			$pagenum = $this->get_pagenum($table);
			if ($page > $pagenum || $page < 0) {
			 	$page = 1;
			}
			$offset = ($page - 1) * PER_PAGE_GB;
			$pagedata_sql = 'SELECT  * FROM '.GB_TABLE_NAME.' WHERE status = 0 ORDER BY createtime DESC LIMIT '.$offset.','.PER_PAGE_GB.";";
			$result = $this->con->query($pagedata_sql);
			while($temp = $result->fetch_assoc()) {
				$sql_page_array[] = $temp;
			}
			return $sql_page_array;
		}
		public function pageDivide_admin($table = GB_TABLE_NAME, $page = 1) {
			$pagenum = $this->get_pagenum($table);
			if ($page > $pagenum || $page < 0) {
			 	$page = 1;
			}
			$offset = ($page - 1) * PER_PAGE_GB;
			$pagedata_sql = 'SELECT  * FROM '.GB_TABLE_NAME.'  ORDER BY createtime DESC LIMIT '.$offset.','.PER_PAGE_GB.";";
			$result = $this->con->query($pagedata_sql);
			while($temp = $result->fetch_assoc()) {
				$sql_page_array[] = $temp;
			}
			return $sql_page_array;
		}
	}

?>