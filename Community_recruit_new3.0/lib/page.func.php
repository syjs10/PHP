<?php

                  // require_once '../include.php';
                  // // $sql = "select * from imooc_admin";
                  // // $totalRows = getResultNum($sql);
                  // // //echo $totalRows;
                  // // $pageSize  = 2;
                  // // //得到总页码数
                  // // $totalPage = ceil($totalRows/$pageSize);
                  // // $page      = ($_REQUEST['page']?(int)$_REQUEST['page']:1);
                  // //
                  // // if ($page<1 || $page==NULL||!is_numeric($page)){
                  // //       $page = 1;
                  // // }
                  // // if ($page>$totalPage) {
                  // //       $page = $totalPage;
                  // // }
                  // // $offset = ($page-1)*$pageSize;
                  // // $sql    = "select * from imooc_admin limit {$offset}, {$pageSize}";
                  // // $rows = fetchAll($sql);
                  // // //print_r($rows);
                  // // foreach ($rows as $row) {
                  // //       echo "用户名： {$row['username']}<br/>";
                  // // }
                  // // echo showPage($page,$totalPage);
                  // // echo "<hr/>";
                  // // echo showPage($page,$totalPage,"cid=5");
                  function showPage($page,$totalPage,$where=NULL){
                        $where = ($where==NULL)?NULL:"&".$where;
                        $url = $_SERVER['PHP_SELF'];
                        $index = ($page == 1)?"首页":"<a href = '{$url}?page=1{$where}'>首页</a>";
                        $last = ($page == $totalPage)?"未页":"<a href = '{$url}?page={$totalPage}{$where}'>末页</a>";
                        $prev = ($page == 1)?"上一页":"<a href = '{$url}?page=".($page-1)."{$where}'>上一页</a>";
                        $next = ($page == $totalPage)?"下一页":"<a href = '{$url}?page=".($page+1)."{$where}'>下一页</a>";
                        $str  = "当前是第{$page}页 / 总共{$totalPage}页";

                        for ($i=1; $i <= $totalPage; $i++) {
                              //当前页面无连接
                              if ($page == $i) {
                                    @ $p.="[{$i}]";
                              }else {
                                    @ $p.=" <a href = '{$url}?page={$i}'>[{$i}]</a>";
                              }
                        }
                        $pageStr = $index." ".$prev." ".$p." ".$next." ".$last." ".$str;
                        return $pageStr;
                  }
?>
