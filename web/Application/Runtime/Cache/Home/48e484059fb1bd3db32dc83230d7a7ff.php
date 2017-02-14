<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
<head lang="en">
    <meta charset="UTF-8">
    <title>注册</title>
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
        <form action="<?php echo U('WxUser/register_add');?>" method="post">
            <input type="hidden" name="mark" value="<?php echo ($mark); ?>">
            <div class="phone">
                <span></span>
                <input type="text" name="phone" placeholder="手机号" />
            </div>
            <div class="yzm">
                <input type="text" placeholder="验证码" name="yzm"/>
                <button class="yzm-btn">获取验证码</button>
            </div>
            <div class="pass">
                <span></span>
                <input type="password" name="password" placeholder="请输入新密码"/>
                <i></i>
            </div>
            <div class="login">
                <input class="login-btn" type="button" value="注册"/>
            </div>
            <p class="state">点击注册默认您同意 <a href="<?php echo U('WxUser/protocol');?>">《微合伙注册协议》</a></p>
            <p><br></p>
            <p><a href="<?php echo U('login');?>">前去登录</a></p>
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
        var phone = "";
        var pass = "";
        var yzm = "";
        var phoneReg = /^(1[3|4|5|7|8]\d{9})$/;
        var validCode=true;
        var t = null;
        $(".yzm-btn").click(function(){
            var time = 60;
            var _this = $(this);
            phone = $(".phone input").val();
            if(phone == ""){
                alert("请输入手机号");
            }else if(!phoneReg.test(phone)){
                alert("手机格式不正确");
            }else{
                $.ajax({ //请求忘记密码处理页
                    url: "<?php echo U('WxUser/user_code');?>", //忘记密码处理页
                    type:"post",
                    data: {'phone': phone},
                    async: false,
                    success: function (obj) { //登录成功后返回的数据
                        //根据返回值进行状态显示
                        if (validCode) {
                            validCode=false;
                            //发送验证码
                            _this.text("60s");
                            t=setInterval(function  () {
                                time--;
                                _this.text(time+"s");
                                if (time==0) {
                                    clearInterval(t);
                                    validCode=true;
                                    _this.text("获取验证码");
                                }
                            },1000);
                        }else {
                            //发送验证码失败
                            alert("验证码发送失败");
                        }
                    }
                });
            }
            return false;
        });

        $(".login-btn").click(function(){
            phone = $(".phone input").val();
            pass = $(".pass input").val();
            yzm = $(".yzm input").val();

            if(phone == ""){
                alert("请输入手机号");
            }else if(!phoneReg.test(phone)){
                alert("手机格式不正确");
            }else if(yzm == ""){
                alert("请输入验证码");
            }else if(pass == ""){
                alert("请输入密码");
            }else if(pass.length<6||pass.length>20){
                alert("密码长度要求6~20位字符");
            }else{
                $.ajax({ //请求忘记密码处理页
                    url: "<?php echo U('WxUser/is_code_true');?>", //忘记密码处理页
                    type:"post",
                    async: false,
                    data: { phone: phone, yzm: yzm, pass: pass},
                    success: function (obj) { //登录成功后返回的数据
                        //alert(obj);
                        //根据返回值进行状态显示
                        if(obj == 0){
                            alert("验证码有误！");
                        }else if(obj == 1){
                            $(".login-btn").attr('type',"submit");
                        }else{
                            window.location.href="<?php echo U('WxUser/login');?>";
                            alert("用户已经注册！");
                        }
                    }
                })
            }
        });

        $(".pass i").click(function(){
            var oPass = $(this).prev();
            if(oPass.attr("type") == "password"){
                oPass.attr("type","text");
            }else if(oPass.attr("type") == "text"){
                oPass.attr("type","password");
            }
        });
    });

</script>
</body>
</html>