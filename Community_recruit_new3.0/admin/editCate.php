<?php
      require_once '../include.php';
      $id  = $_REQUEST['id'];
      $row = getCateById($id);
 ?>
<!DOCTYPE html>
<html>
      <head>
            <meta charset="utf-8">
            <title></title>
      </head>
      <body>
            <h3>编辑管理员</h3>
            <form class="" action="doAdminAction.php?act=editCate&id=<?php echo $id; ?>" method="post">
                  <table width="70%" border="1" cellpadding="5" cellspacing="0" bgcolor="#cccccc"text-algin = "center">
                        <tr>
                              <td>
                                    分类名称
                              </td>
                              <td>
                                    <input type="text" name="cName" placeholder="<?php echo $row['cName']; ?>"/>
                              </td>
                        </tr>
                        <tr>
                              <td colspan="2">
                                    <input type="submit" value = "编辑分类"/>
                              </td>
                        </tr>
                  </table>
            </form>
      </body>
</html>
