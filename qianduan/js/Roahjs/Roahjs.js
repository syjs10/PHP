/**
 *
 * Created by roah on 16-7-25.
 */
function yanzheng()
{
    var username=document.getElementById("email").value;
    var password=document.getElementById("passwd").value;
    var supassword=document.getElementById("supasswd").value;
    var sex=document.getElementById("email");
    if(username=="")
        document.getElementById("yzusername").innerHTML="请输入用户名";

        else
        {
            document.getElementById("yzusername").innerHTML="";
            if(password<=8&&password>=16)
                document.getElementById("yzpasswd").innerHTML="密码不符合长度";

            else
            {
                document.getElementById("yzpasswd").innerHTML="";
                if(supassword!=password)
                {
                    document.getElementById("yzpasswd").innerHTML="两次输入密码不一致";
                    else
                    {
                        document.getElementById("yzpasswd").innerHTML="";
                        if(document.getElementById("introduce").value=="")
                        {
                            document.getElementById("yz").innerHTML="";
                        }
                        else
                        {
                            document.getElementById("").value="";
                        }
                    }

                }
            }
        }

}