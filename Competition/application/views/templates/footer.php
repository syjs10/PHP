            <em class = "footer">&copy; 2016 JS</em>
            <script>

                $.validator.setDefaults({

                    submitHandler: function() {
                    	form.submit();
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

      </body>

</html>
