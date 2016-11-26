<?php echo validation_errors(); ?>
<?php echo form_open('form'); ?>
      <label for="name"> 姓名 </label>
      <input type="input" name="name" /> <br />
      <label for="gender"> 性别 </label>
      <select class="" name="gender">
            <option value="男">男</option>
            <option value="女">女</option>
      </select> <br />
      <label for="class"> 学号 </label>
      <input type="input" name="number" /> <br />
      <label for="class"> 班级 </label>
      <input type="input" name="class" /> <br />
      <label for="phone"> 联系方式 </label>
      <input type="input" name="phone" /> <br />
      <label for="class"> 验证码 </label>
      <input type="text" name="verify"> <br />
      
      <img src= "../../form/verify_image">
      <br>
      <input type="submit" name="submit" value="报名">
</form>

</script>
