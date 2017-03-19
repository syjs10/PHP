<!-- <?php echo validation_errors(); ?> -->

<div class="container">
  <div class="row">
    <div class="col-md-3"></div>
    <div class="col-md-6">
      <div class="box">
      <div class="pic">
        <img id="title" src="http://syjs10.cn/com_pic/logo.png">
      </div>
      <div class="pic" id="shan">
        <!-- <img id="mountion" src="http://syjs10.cn/abc/山1.png"> -->
       <div id="mountion" style="margin-left:-15px;">
            <div class="title">第七届</div>
            <div class="title" style="font-size: 2.5em">沈阳工业大学网络文化节</div>
            <div class="title">[新媒体 心交流]</div>
       </div>
      </div>
<?php 
        $attributes = array('class' => 'cmxform', 'id' => 'signupForm');
        echo form_open('form/index', $attributes); 
?>
      <p>
              <label class="label1" for="name">姓名</label>
              <input id="name" name="name" type="input">
            </p>
            <p>
              <label class="label1" for="class">班级</label>
              <input id="class" name="class" type="input">
            </p>
            <p>
              <label class="label1" for="number">学号</label>
              <input id="number" name="number" type="input">
            </p>
            <p>
              <label class="label1" for="phone">电话</label>
              <input id="phone" name="phone" type="input">
            </p>
            <p>
              <label class="label1" for="qq"> Q Q</label>
              <input type="input" name="qq" />
            </p>
            <p>
              <label class="label1" for="object" >项目</label>
              <select name="object" id="object" style = "width: 80% !important">
                <option value="logo设计大赛">logo设计大赛</option>
                <option value="ppt演讲大赛">ppt演讲大赛</option>
                <option value="网页设计大赛">网页设计大赛</option>
                <option value="视频制作大赛">视频制作大赛</option>
              </select>
            </p>
            <div style="width: 50%;display: inline-block;">
              <p>
                  <label class="label2" for="gender">性别</label>
                  <select name="gender">
                    <option value="男">男</option>
                    <option value="女">女</option>
                  </select>
                <br>
                <label class="label2" for="verify">验证</label>
                <input id="verify" type="text" name="verify">
              </p>
            </div>
              <img id="verpic" src= "../../form/verify_image" onClick="this.src='../../form/verify_image'">

            <p>
            <!-- <div style="width: 100%;"> -->
              <!-- <div style="background-image: url(http://syjs10.cn/abc/报名按钮.png);width: 178px;height: 162px;margin: 0 auto;"> -->
                <input id="input" class="btn submit" type="submit" value="报 名">
              <!-- </div> -->
            <!-- </div> -->
            </p>
       <!-- <p>
             所有选项为必填,如果网页卡死请重新打开链接.
       </p> -->
</form>
 </div>

    </div>
    <div class="col-md-3"></div>

  </div>
</div>




