$(document).ready(function() {
        $("#sub").click(function() {
                var nickname = $("#nickname").val();
                var content = $("#contents").val();
                var email = $("#email").val();
                if (nickname == "" || content == "") { //必填字段
                        alert("Nicknames or content cannot be empty"); //这个方法太暴力，可以想想其他的
                        return false;
                } else if (nickname.length > 10) {
                        alert('Nickname length too long');
                        return false;
                } else if (content.length > 50) {
                        alert('Message length too long');
                        return false;
                } else{
                        var data = {
                                nickname : nickname,
                                content : content,
                                email : ''
                         };
                        if (email !== "") {
                                //正则表达式过滤邮箱
                                var email_reg = /\w+([-+.]\w+)*@\w+([-.]\w+)*.\w+([-.]\w+)*/;
                                if (!email_reg.test(email)) {
                                        alert('Email address not legal');
                                        return false;
                                }else{
                                        data.email = email;
                                }
                        }
                }

    });
});