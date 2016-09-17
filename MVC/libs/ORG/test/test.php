<?php
      header("Content-type:text/html; charset=utf-8");
      require_once ('../smarty/Smarty.class.php');
      $smarty = new Smarty();
      // 五个配置
      $smarty -> left_delimiter  = "{";         //左定界符
      $smarty -> right_delimiter = "}";         //右定界符
      $smarty -> template_dir    = "tpl";       //html模板地址
      $smarty -> compile_dir     = "template_c";//模板编译生成文件
      $smarty -> cache_dir       = "cache";     //缓存
      // 开启两个缓存配置。通常不用smarty缓存机制
      $smarty -> caching         = true;        //开启缓存
      $smarty -> cache_lifetime  = 120;         //缓存开启时间

      $smarty -> assign('articletitle','文章标题');
      $smarty -> display('test.tpl');
?>
