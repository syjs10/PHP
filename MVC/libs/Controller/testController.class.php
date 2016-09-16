<?php
      require_once ('./libs/Model/'.$name.'Model.class.php');
      require_once('./libs/View/'.$name.'View.class.php');
      /**
       *
       */
      class testController {

            function show(){
                  $testModel = new testModel();
                  $data = $testModel -> get();
                  $testView = new testView();
                  $testView -> display($data);
            }
      }

?>
