<?php  echo form_open('applicate/add_form'); ?>
	<label for="Item">添加报名项目</label>
	<input type="text" name="item">
	<label for="Length">输入内容字数</label>
	<input type="text" name="length">
	<input type="submit" value="添加">
</form>

<?php echo '<a href="'.base_url('index.php/applicate/show_form').'">查看已添加</a>' ?>
