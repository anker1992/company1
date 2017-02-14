<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
<head lang="en">
    <meta charset="UTF-8">
    <title>登录</title>
    <meta name="format-detection" content="telephone=no">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0, user-scalable=no">
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="apple-touch-fullscreen" content="yes">
    <meta http-equiv="Access-Control-Allow-Origin" content="*">
    <link rel="stylesheet" href="/Public/csswx/login.css"/>
</head>
<body>
<div id="main">
    <div class="login-box">
        <form action="<?php echo U('WxUser/login_add');?>" method="post">
            <input type="hidden" name="openid" value="<?php echo ($openid); ?>">
            <div class="phone">
                <span></span>
                <input type="text" name="phone" placeholder="手机号" />
            </div>
            <div class="pass">
                <span></span>
                <input type="password" name="password" placeholder="请输入密码"/>
                <i></i>
            </div>
            <div class="login">
                <input class="login-btn" id="tiaozhuang" type="button" value="登录"/>
                <!--<button class="login-btn">登录</button>-->
            </div>
            <p><a href="<?php echo U('register');?>">前去注册</a></p>
        </form>
    </div>
</div>
<script type="text/javascript" src="/Public/jswx/jquery-1.10.2.min.js"></script>
<script type="text/javascript">
    $(function(){
        var main = document.querySelector('#main');
        var winW = document.documentElement.clientWidth;
        var winH = document.documentElement.clientHeight;
        var desW = 750;
        var desH = 1208;
        if(winW/winH<desW/desH){
            main.style.webkitTransform = 'scale('+winH/desH+')';
        }else{
            main.style.webkitTransform = 'scale('+winW/desW+')';
        }
    });


    $(function(){
        $(".pass i").click(function(){
            var oPass = $(this).prev();
            if(oPass.attr("type") == "password"){
                oPass.attr("type","text");
            }else if(oPass.attr("type") == "text"){
                oPass.attr("type","password");
            }
        });

        var phone = "";
        var pass = "";
        var phoneReg = /^(1[3|4|5|7|8]\d{9})$/;
        $(".login-btn").click(function(){
            var _this = $(this);
            phone = $(".phone input").val();
            pass = $(".pass input").val();
            if(phone == ""){
                alert("请输入手机号");
            }else if(!phoneReg.test(phone)){
                alert("手机格式不正确");
            }else if(pass == ""){
                alert("请输入密码");
            }else if(pass.length<6||pass.length>20){
                alert("密码长度要求6~20位字符");
            }else{
                $("#tiaozhuang").attr('type',"submit");
                //开始发送数据
//                $.ajax({ //请求登录处理页
//                    url: "<?php echo U('WxUser/login_add');?>", //登录处理页
//                    type:"post",
//                    data: { phone: phone, pass: pass },
//                    success: function (obj) { //登录成功后返回的数据
//                        //根据返回值进行状态显示
//                        if (obj) {
//                            _this.attr("type","submit");
//
//                        }else {
//                            alert("密码不正确")
//                        }
//                    }
//                })
            }
        });

    });
</script>
</body>
</html>