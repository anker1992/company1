<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
<head lang="en">
    <meta charset="UTF-8">
    <title>微合伙文化传媒有限公司_微合伙科技有限公司_金融社交圈_金融趴官网_微合伙</title>
    <link rel="stylesheet" href="/Public/css/loginNew.css"/>
    <link rel="stylesheet" href="/Public/css/common.css"/>
</head>
<body>
<img class="login-bg" src="/Public/images/loginbg.png" alt=""/>
<img class="login-text" src="/Public/images/logintext.png" alt=""/>

<div class="content-box">
        <div class="register-box1">
            <form action="<?php echo U('User/register_add');?>" method="post">
            <div class="login-bar-title">
                <p class="title-1">用户注册</p>
            </div>
            <input class="username-input" type="text" name="phone" placeholder="请输入手机号"/>
            <input class="password-input" type="password" name="password" placeholder="请输入密码"/>
            <div class="yzm">
                <input class="yanzheng-l" id="yz-input" type="text" name="yzm"/>
                <!--<label class="yanzheng-r">获取验证码</label>-->
                <button class="yzm-btn yanzheng-r">获取验证码</button>
            </div>
            <p class="tip"><span></span></p>
            <input class="reg-btn register-button" id="tiaozhuang" type="button" value="注册">
            </form>
        </div>
</div>
<script type="text/javascript" src="/Public/js/jquery-1.10.2.min.js"></script>
<script type="text/javascript">
    /*注册的验证*/
    $(function () {
        var yzm1 = "";
        var yzm2 = yzm();
        $("#yzm").text(yzm2);
       /* $(".register-button").click(function () {
            var phone = $(".username-input").val();
            var pass = $(".password-input").val();
            var phoneKey = /^1[3|4|5|7|8|9]\d{9}$/.test(phone);
            yzm1 = $("#yz-input").val();
            yzm2 = $("#yzm").text();
            if (phone == "") {
                $(".tip span").text("请输入您的手机号！");
            } else if (!phoneKey) {
                $(".tip span").text("请正确填写您的手机号！");
            } else if (pass == "") {
                $(".tip span").text("请填写您的密码！");
            } else if (pass.length < 6 || pass.length > 20) {
                $('.tip span').text("密码长度要求6~20位字符");
            } else if (yzm1 == "") {
                $(".tip span").text("请输入验证码！");
            } else {
                $(".tip span").text("");
            }
        });*/

        function yzm() {
            var arr = ['A', 'B', 'C', 'D', 'E', 'F', 'G', 'H', 'I', 'J', 'K', 'L', 'M', 'N', 'O', 'P', 'Q', 'R', 'S', 'T', 'U', 'V', 'W', 'X', 'Y', 'Z', 'a', 'b', 'c', 'd', 'e', 'f', 'g', 'h', 'i', 'j', 'k', 'l', 'm', 'n', 'o', 'p', 'q', 'r', 's', 't', 'u', 'v', 'w', 'x', 'y', 'z', '0', '1', '2', '3', '4', '5', '6', '7', '8', '9'];
            var str = '';
            for (var i = 0; i < 4; i++)
                str += '' + arr[Math.floor(Math.random() * arr.length)];
            return str;
        }
    });

    $(function () {
        var validCode=true;
        var phone = "";
        console.log(phone);
        $(".yzm-btn").click(function(){
            var time=60;
            phone = $(".username-input").val();
            var _this=$(this);
            // phone = $(".one .phone input").val();
            if(phone ==""){
                $(".tip span").text("请输入您的手机号！");
                return false;
            }else if(phone){
                $.ajax({
                    type: "POST",
                    url:"<?php echo U('User/user_code');?>",
                    data:{'phone':phone},
                    async: false,
                    error: function(request) {
                        alert(request);
                    },
                    success: function(object) {
                        if (validCode) {
                            validCode=false;
                            $(".tip span").text("");
                            //_this.addClass("reGet-btn").attr("disabled",true);
                            _this.text("60秒可重新获取").attr("disabled",true);
                            t=setInterval(function  () {
                                time--;
                                _this.text(time+"秒可重新获取");
                                if (time==0) {
                                    clearInterval(t);
                                    validCode=true;
                                    //_this.removeClass("reGet-btn");
                                    _this.text("点击获取验证码").attr("disabled",false);
                                }
                            },1000);
                        }
                    }
                });
            }
            return false;
        });
        $(".reg-btn").click(function(){
            phone = $(".username-input").val();
            pass = $(".password-input").val();
            val = $(".yzm input").val();
            var phoneKey = /^1[3|4|5|7|8|9]\d{9}$/.test(phone);
            if(phone == ""){
                $(".tip span").text("请输入您的手机号！");
            }else if(!phoneKey){
                $(".tip span").text("请正确填写您的手机号！");
            }else if(pass == ""){
                $(".tip span").text("请填写您的密码！");
            }else if(pass.length<6||pass.length>20){
                $('.tip span').text("密码长度要求6~20位字符");
            }else if(val){
               // clearInterval(t);
                $(".yzm-btn").removeClass("reGet-btn").text("点击获取验证码");
                $(".getTip").addClass("hide");
                $(".tip span").text("");
                $.ajax({
                    type: "POST",
                    url:"<?php echo U('User/is_code_true');?>",
                    data:{'code':val,'phone':phone},
                    async: false,
                    error: function(request) {
                    },
                    success: function(object) {
                        //console.log(object);
                        //alert(object);
                        if(object == 0){
                            $(".tip span").text("验证码有误！");
                        }else if(object == 1){
                            $("#tiaozhuang").attr('type',"submit");
                            //var passs=$.base64.encode(pass);
                            //$("#tiaozhuang").attr("href","manager_register?phone="+phone+"&pass="+passs);//填写成功后跳转
                        }else{
                            $(".tip span").text("用户已经注册！");
                        }
                    }
                });
            }
        });

    });




</script>
</body>
</html>