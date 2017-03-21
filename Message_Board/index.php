<?php require 'common/header.php'; ?>
<div class="col-md-6 col-md-offset-3">
<div class="panel panel-info ">
	<div class="panel-heading"><h2>PHP 留言本</h2></div>
	<div class="panel-body">
		<?php  
			require_once 'config.php';
			require_once 'mysql.class.php';

			$db = new DB();
			$db->connect();
			$news = $db->pageDivide(GB_TABLE_NAME, isset($_GET['page'])?$_GET['page']:1);
			// var_dump($news);
			if (!empty($news)) {
				foreach ($news as $value) {
					// var_dump($value);
					echo <<<ht
					<div style="background-color:#F7F7F9">
					<li class="list-group-item list-group-item-success">
						留言者：<span>{$value['nickname']}</span> &nbsp;&nbsp;  |  &nbsp;&nbsp; 邮箱：{$value['email']}
					
					<span style="float:right;">时间：{$value['createtime']} </span>
					</li>
					<li class="list-group-item l">内容：{$value['content']}</li>
ht;
					if (!empty($value['reply'])) {
					            echo '<li class="list-group-item list-group-item-warning">管理员回复：' . $value['reply'] ;
					            echo '<span style="float:right;">回复时间：' . $value['replytime'] .'</span></li>';
					}
					echo '</div><hr>';
				}
				echo '共 '.$db->get_data_num().' 条留言  ';
			}
			$pagenum = $db->get_pagenum(GB_TABLE_NAME);
			if ($pagenum > 1) {
				for($i = 1; $i <= $pagenum; $i++) {
					if($i == (isset($_GET['page'])?$_GET['page']:1)) {
						echo '&nbsp;&nbsp;['.$i.']';
					} else {
						echo '<a href="?page='. $i .'">&nbsp;' . $i . '&nbsp;</a>';
					}
				}
			}
		?>
	</div>
	<div class="panel-footer">
		    <div id="post">
			    <form name="message_submit" id="form" method="post" class="form-horizontal" action="post.php">
				        <div class="form-group">
					          <label for="" class="col-sm-2 control-label">姓名：</label>
					          <div class="col-sm-4">
					            		<input type="text" name="nickname" class="form-control" id="nickname" class="from-control" placeholder="必填(不超过10个字符)" required=""  maxlength="10" />
					          </div>
				        </div>
				        <div class="form-group">
					          <label for="" class="col-sm-2 control-label">内容：</label>
					          <div class="col-sm-4">
					            		<input type="text" name="contents" class="form-control" id="contents" class="from-control" placeholder="必填(不超过50个字符)" required="" maxlength="50" />
					          </div>
				        </div>
				       <div class="form-group">
					          <label for="" class="col-sm-2 control-label">E-MAIL:</label>
					          <div class="col-sm-4">
					            		<input type="email" class="form-control" id="email" name="email" placeholder="Email">
					          </div>
				      </div>
				      <div class="form-group">
					        <label for="" class="col-sm-2 control-label"></label>
					        <div class="col-sm-6">
						            <button type="submit"  name="sub" id="sub" class="btn btn-default">留言</button>
						            <button type="reset"  id="reset" class="btn btn-default">重置</button>
					        </div>
				      </div>
			    </form>
		    </div>
	</div>
</div>
</div>

<?php require 'common/footer.php';?>
<!--简单校验，及ajax提交表单-->
<script type="text/javascript" src="js/jquery.min.js"></script>
<script type="text/javascript" src="js/ajax_submit.js"></script> 

