<?php
      namespace core\lib;
      /**
       *
       */
      class route {
            public $ctrl;
            public $action;
            function __construct() {
                  /**
                   * xxx.com/(index.php)/index
                   * 1.隐藏index.php
                   * 2.获取url参数部分
                   * 3.返回对应控制器和方法
                   */
                  // p($_SERVER);
                  if (isset($_SERVER['PATH_INFO'])) {
                        // 解析 /index/index
                        $path = $_SERVER['PATH_INFO'];
                        $patharr = explode('/', trim($path,'/'));
                        if (isset($patharr[0])) {
                              $this->ctrl = $patharr[0];
                        }
                        unset($patharr[0]);
                        if (isset($patharr[1])) {
                              $this->action = $patharr[1];
                              unset($patharr[1]);
                        } else {
                              $this->action = 'index';
                        }
                        // url多余部分转换成 GET 参数
                        // p($patharr);
                        $count = count($patharr);

                        $i = 2;
                        while ($i <= $count) {
                              if (isset($patharr[$i+1])) {
                                    $_GET[$patharr[$i]] = $patharr[$i+1];
                              }
                              $i = $i + 2;
                        }
                        p($_GET);
                  } else {
                        $this->ctrl = 'index';
                        $this->action = 'index';
                  }
            }
      }
