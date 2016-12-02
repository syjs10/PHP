<!DOCTYPE html>
<html>
      <head>
            <meta charset="utf-8">
            <meta content="Content-type:image/jpeg">
            <title></title>

            <script type="text/javascript" src="http://syjs10.cn/abc/jquery-3.0.0.min.js"></script>
            <script type="text/javascript" src="http://syjs10.cn/abc/jquery.validate.min.js"></script>
            <script type="text/javascript" src="http://syjs10.cn/abc/messages_zh.js"></script>
            <script type="text/javascript" src="http://syjs10.cn/abc/bootstrap.min.js"></script>
            <link rel="stylesheet" type="text/css" href="http://syjs10.cn/abc/bootstrap.min.css">
            <!-- <link rel="stylesheet" type="text/css" href="http://127.0.0.1/abc/css.css"> -->
              <script>
                $.validator.setDefaults({
                    submitHandler: function() {
                    }
                });
                $().ready(function() {
                // 在键盘按下并释放及提交后验证提交表单
                  $("#signupForm").validate({
                      rules: {
                        name: "required",
                        class: "required",
                        number: {
                          required: true,
                          minlength: 9
                        },
                        phone: {
                          required: true,
                          minlength: 11
                        }
                      },
                      messages: {
                        name: "请输入您的姓名",
                        class: "请输入您的班级",
                        number: {
                          required: "请输入您的学号",
                          minlength: "请输入正确的学号"
                        },
                        phone: {
                          required: "请输入电话",
                          minlength: "请输入正确的电话"
                        },
                      }
                  });
                });
              </script>

            <style media="screen">
            p{
                  font-size: 50px;
            }
            
            .error{
              color:red;
              }
              body{
              	background: url(http://syjs10.cn/abc/111111111.png) no-repeat;
              	background-size:cover;
              }
              .label1{
              	width: 10%;
              	line-height: 100%;
              	font-size: 18px;
              }
              .label2{
              	width: 20%;
              	line-height: 100%;
              	font-size: 18px;
              }
              input{
              	width: 80%;
              	height: 38px;
              	background-color: transparent;
              	border: 2px solid #7a706c;
              }
              .box{
              	padding: 0 10%;
              }

              #verify{
              	display: inline;
              	width: 75%;
              }
              #verpic{
                  display: inline;
                  width: 36%;
                  height: 85px;
                  margin-left: 20px;
                  position: relative;
                  top: -23px;
              }
              select{
              	height: 38px;
              	width: 75%;
              	margin-bottom: 10px;
              	background-color: transparent;
              	border: 2px solid #7a706c;
              }
              form{
              	// display: none;
              }
              .pic{
              	text-align:center;
              	margin-top:80px;
              }
              #shan{
              	margin-top:0px;
              	margin-bottom: 40px;
              }
              #title{
              	magin: 0 ,auto;
              }
              #input{
              	width: 100%;
              	height: 100%;
              	background: transparent ;
              	border:none;
              }
                  *{
                        margin: 0px;
                        padding: 0px;
                  }
                  .footer{
                        position: absolute;
                        bottom: 15px;
                  }
                  .show_table td, .show_table th, .show_table{
                        border: 1px solid #ccc;
                  }
                  .show_table{
                        position: absolute;
                        width: 60%;
                        left: 20%;
                        top: 20%;
                  }
                  .show_table td, .show_table th {
                        height: 40px;
                        width: 10%;


                  }
            </style>
      </head>
      <body>
