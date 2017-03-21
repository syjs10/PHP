<?php 
	require '../config.php';
	require '../common/admin_header.php';
	require '../mysql.class.php';
	session_start();
	if (!$_SESSION['admin']) {
		header('location:index.html');
	}
	

	$db = new DB();
	$db->connect();
	$news = $db->pageDivide_admin(GB_TABLE_NAME, isset($_GET['page'])?$_GET['page']:1);
?>
<div class="panel panel-info col-md-8 col-md-offset-2 ">
	<div class="panel-body ">
		<table class="table table-bordered table-hover">
			<thead>
				<tr>
					<th>id</th>
					<th>author</th>
					<th>content</th>
					<th>time</th>
					<th>status</th>
					<th>reply</th>
					<th>replytime</th>
					<th>options</th>
				</tr>
			</thead>
			<tbody>

				<?php
					if (!empty($news)) {
						foreach ($news as $value) {
							echo "<tr>";
							echo "<td class='id'>" . $value['id'] . "</td>";
							echo "<td>" . $value['nickname'] . "</td>";
							echo "<td>" . $value['content'] . "</td>";
							echo "<td>" . $value['createtime'] . "</td>";
							echo "<td>" . $value['status'] . "</td>";
							echo "<td>" . (empty($value['reply']) ? 'no' : $value['reply']) . "</td>";
							echo "<td>" . (empty($value['replytime']) ? 'no' : $value['replytime']) . "</td>";
							echo "<td>" . (!empty($value['reply']) ? '<input type="button" name="reply" value="fixed" class="reply btn btn-default" data-toggle="modal" data-target=".replymodal"/> &nbsp;&nbsp;' : '<input type="button" name="reply" value="reply" class="reply btn btn-default" data-toggle="modal" data-target=".replymodal"/> &nbsp;&nbsp;') . '<input type="button" class="option btn btn-default" value="'.($value["status"] == "1" ? "unlock" : "lock") .'"/>' ."</td>";
							echo "</tr>";
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
			</tbody>
		</table>
		<h4 style="text-align: center"><a href="logout.php" >Super admin logout</a></h4>
	</div>
	<!-- Large modal -->
	<div class="modal fade replymodal" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel">
	  <div class="modal-dialog modal-lg">
	    <div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
				<h4 class="modal-title" id="exampleModalLabel">Reply</h4>
			</div>
			<div class="modal-body">
				<form action="" class="form-horizontal" method="post" accept-charset="utf-8">
					<div class="form-group">
						<label for="inputEmail3" class="col-sm-2 control-label">ReplyContent:</label>
						<div class="col-sm-6">
							<input type="text" class="form-control" id="replycontent" name="reply" placeholder="内容(50个字符以内)">
							<input type="hidden" name="id" id="replyid" value="">
						</div>
						<button name="sub" id="sub">提交</button>
					</div>
				</form >
			</div>
	    </div>
	  </div>
	</div>
</div>

<script type="text/javascript" src="../js/jquery.min.js"></script>
<script type="text/javascript" src="../js/bootstrap.min.js"></script>
<script src="../js/admin.js"></script>
<?php require '../common/footer.php';?>