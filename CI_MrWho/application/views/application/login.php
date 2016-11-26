
<?php echo form_open('application/login'); ?>
<label for="username">用户名</label>
<input type="text" name="username" ><br>
<label for="password">密&nbsp;&nbsp;&nbsp;&nbsp;码</label>
<input type="password" name="password" ><br>
<label for="verifycode">验证码</label>
<input type="text" name="verify" ><br>
<img src= "../../form/verify_image">
<input type="submit"  value="登陆">
</form>
