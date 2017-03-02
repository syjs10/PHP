<style media="screen">
      body{
            background: url(<?php echo base_url('image/login_background.jpg'); ?>) ;
            background-size:cover;
      }
      /*div,div>div{
            height:200;
            /*border: 1px solid #ccc;
            text-align: center;
      }*/
      .login{
            position: absolute;
            top:15%;
      }
      .h1{
            text-align: center;
            color: #fff;
            font-weight: bold;
            text-shadow: 1px 1px 3px #ccc;
      }
      label{
            margin-left: 15px;
            margin-right: -15px;
            padding-top: 7px;
            padding-bottom: 7px;
            /*background-color: rgba(0, 0, 0, 0.5);*/
            color: #fff;
            border-radius: 3px;
            text-align: left;
      }
      .input{
            font-weight: bold;
            background-color: rgba(0, 0, 0, 0.1);
            border-color: #666;

      }
      input{
            box-shadow: 1px 1px 1px #666;
            color: #fff!important;
      }
      img{
            padding-top: 3px;
      }
      .block{
            padding:50px 30px;

            background-color: rgba(0, 0, 0, 0.5);
            border-radius: 5px;
      }
</style>

</head>
<body>


<div class="container login" style="width:100%">
      <div class="row" style="margin-bottom:3%;">
            <div class="col-md-3"></div>
            <div class="col-md-6">
                  <h1 class="h1">教师入口</h1>
            </div>
            <div class="col-md-3"></div>
      </div>
      <div class="row" style="padding-top:20px;">
            <div class="col-md-4 clo-sm-1"></div>
            <div class="col-md-4 clo-sm-10 block">
                  <?php echo form_open('login','class="form-horizontal",role="form"'); ?>
                        <div class="form-group" >
                              <label for="user" class="col-md-3">用户名</label>
                              <div class="col-md-9">
                                    <input type="text" name="user" style="width:100%"class="form-control input" placeholder="UserName">
                              </div>

                        </div>
                        <div class="form-group" >
                              <label for="password" class="col-md-3">密&nbsp;&nbsp;&nbsp;&nbsp;码</label>
                              <div class="col-md-9">
                                    <input type="text" name="password" style="width:100%"class="form-control input" placeholder="PassWord">
                              </div>
                        </div>
                        <div class="form-group" >
                              <label for="verify" class="col-md-3">验证码</label>
                              <div class="col-md-6">
                                    <input type="text" name="verify" style="width:100%;" class="form-control input" placeholder="Verify">
                              </div>
                              <div class="col-md-3">
                                    <img id = "verify_img" style="margin-left:-20%;"<?php echo 'src="'.base_url('index.php/verify/verify_image').'"'; ?>  <?php echo 'onclick=\'this.src="'.base_url('index.php/verify/verify_image').'"\''; ?>  />
                              </div>

                        </div>
                        <div class="row">
                              <div class="col-md-6">
                                    <input type="submit" class="btn btn-success" style="width:100%;font-weight: bold;font-size:15px;" value="登&nbsp;&nbsp;&nbsp;&nbsp;陆">
                              </div>
                              <div class="col-md-6">
                                    <input type="submit" class="btn btn-warning" style="width:100%;font-weight: bold;font-size:15px;" value="忘记密码">
                              </div>
                        </div>


                  </form>
            </div>
            <div class="col-md-4 col-sm-1"></div>
      </div>
</div>
