<?php
      namespace core;
      /**
       *
       */
      class imooc {
            static public $classMap = array();
            static public function run() {
                  $route = new \core\lib\route();
                  p($route);
            }
            /**
             * 自动加载类库
             * new "\core\route()"
             * IMOOC.'/core/route.php'
             * @return [type] [description]
             */
            static public function load($class) {


                  if (isset($classMap[$class])) {
                        return true;
                  } else {
                        $class = str_replace('\\', '/', $class);
                        $file = IMOOC.'/'.$class.'.php';
                        if (is_file($file)) {
                              include $file;
                              self::$classMap[$class] = $class;
                        } else {
                              return false;
                        }
                  }

            }
      }
