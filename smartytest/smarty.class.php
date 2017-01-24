<?php

      /**
       *
       */
      class Smarty {
            private $vars=array();

		function assign($key, $value){
			$this->vars[$key]=$value;
		}

            function display($fileName) {
                  $filename = './model/'.$fileName;
                  $complitefile = './tpl/com_'.$fileName.'php';
                  $char = file_get_contents($filename);
                  $zz = array(
                        '/\{\s*\$([a-zA-Z_][a-zA-Z0-9_]*)\s*\}/'
                  );
                  $rep = array(
                        '<?php echo $this->vars["${1}"]?>'

                  );
                  $complite = preg_replace($zz, $rep, $char);
                  file_put_contents($complitefile, $complite);
                  include $complitefile;
            }
      }

?>
