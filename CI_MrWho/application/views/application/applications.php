<?php echo validation_errors(); ?>
<?php echo form_open('form'); ?>
      <label for="name"> 姓名 </label>
      <input type="input" name="name" /> <br />
      <label for="gender"> 性别 </label>
      <input type="input" name="gender" /> <br />
      <label for="class"> 班级 </label>
      <input type="input" name="class" /> <br />
      <label for="phone"> 联系方式 </label>
      <input type="input" name="phone" /> <br />
      <input type="submit" name="submit" value="报名">
</form>
