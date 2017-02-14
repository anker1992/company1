<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
<head lang="en">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=Edge">
    <title>微合伙文化传媒有限公司_微合伙科技有限公司_金融社交圈_金融趴官网_微合伙</title>
    <link rel="stylesheet" href="/Public/usercss/css/common.css"/>
    <link rel="stylesheet" href="/Public/usercss/css/login1.css"/>
</head>
<body>

<div class="login">
    <div class="container">
        <div class="outer">
            <ul class="clearfix">
                <li class="cur">快速注册</li>
                <li>现在登录</li>
            </ul>
            <div class="one">
                <div class="login-top">
                    <img src="/Public/usercss/images/login-portrait.png" alt=""/>
                    <h2>信贷经理</h2>
                </div>
                <form action="">
                    <p class="phone">
                        <i></i><span>手机号码</span>
                        <input type="text" name="phone"/>
                    </p>
                    <p class="pass">
                        <i></i><span>密码</span>
                        <input type="password" name="pass"/>
                    </p>
                    <p class="yz w235">
                        <input class="yzm-input" type="text" name="yz"/>
                        <label class="yz-c" id="yzm"></label>
                    </p>
                    <p class="yzm w235 mb0">
                        <i></i><input type="text" name="yzm"/>
                        <button class="yzm-btn">获取验证码</button>
                        <!--<label>获取验证码</label>-->
                    </p>
                    <p class="tip"><span></span></p>
                    <p class="reg">
                        <!--<button class="reg-btn" name="submit">快速注册</button>-->
                        <a class="reg-btn" name="submit">快速注册</a>
                    </p>
                </form>
            </div>
            <div class="two hide">
                <div class="login-top">
                    <img src="/Public/usercss/images/login-portrait.png" alt=""/>
                    <h2>信贷经理</h2>
                </div>
                <form action="">
                    <p class="phone">
                        <i></i><span>手机号码</span>
                        <input type="text" name="phone"/>
                    </p>
                    <p class="pass">
                        <i></i><span>密码</span>
                        <input type="password" name="pass"/>
                    </p>
                    <p class="yz w235 mb0">
                        <input class="yzm-input1" type="text" name="yz"/>
                        <label class="yz-c" id="yzm1"></label>
                    </p>
                    <p class="tip"><span></span></p>
                    <p class="log mb0">
                        <!--<button class="log-btn" name="submit">现在登录</button>-->
                        <a href="javascript:;" class="log-btn" name="submit">现在登录</a>
                    </p>
                    <a href="javascript:;" class="forget-pwd">忘记密码</a>
                </form>
            </div>
        </div>
    </div>
</div>

<script type="text/javascript" src="/Public/usercss/js/jquery-1.10.2.min.js"></script>
<script type="text/javascript">
    /*$(function(){
     $('.login .outer ul li').click(function(){
     var index = $(this).index();
     $(this).addClass('cur').siblings().removeClass('cur');
     $('.outer').children("div").eq(index).removeClass('hide').siblings('div').addClass('hide');
     })
     });*/
    /*注册的验证*/
    $(function(){
        //获取短信验证码
        var validCode=true;
        var t = null;
        var phone = "";
        var pass = "";
        var val = "";
        var yzm1 = "";
        /*var yzm2 = yzm();
         $("#yzm").text(yzm2);*/
        $(".yzm-btn").click(function(){
            var time=60;
            var _this=$(this);
            phone = $(".one .phone input").val();
            if(phone ==""){
                $(".tip span").text("请输入您的手机号！");
                return false;
            }else if(phone){
                if (validCode) {
                    validCode=false;
                    $(".tip span").text("");
                    _this.addClass("reGet-btn");
                    _this.text("60秒可重新获取");
                    t=setInterval(function  () {
                        time--;
                        _this.text(time+"秒可重新获取");
                        if (time==0) {
                            clearInterval(t);
                            validCode=true;
                            _this.removeClass("reGet-btn");
                            _this.text("点击获取验证码");
                        }
                    },1000);
                }
                return false;
            }
            return false;
        });

        $(".reg-btn").click(function(){
            phone = $(".one .phone input").val();
            pass = $(".one .pass input").val();
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
            }else if(yzm1 == ""){
                $(".tip span").text("请输入验证码！");
            }else if(yzm2 !== yzm1){
                $(".tip span").text("验证码输入不一致！");
            }else if(t && val === "123456"){
                clearInterval(t);
                $(".yzm-btn").removeClass("reGet-btn").text("点击获取验证码");
                $(".getTip").addClass("hide");
                $(".tip span").text("");
                $(this).attr("href","javascript:;");//填写成功后跳转
            }else{

            }
        });

        function yzm(){
            var arr = ['A','B','C','D','E','F','G','H','I','J','K','L','M','N','O','P','Q','R','S','T','U','V','W','X','Y','Z','a','b','c','d','e','f','g','h','i','j','k','l','m','n','o','p','q','r','s','t','u','v','w','x','y','z','0','1','2','3','4','5','6','7','8','9'];
            var str = '';
            for(var i = 0 ; i < 4 ; i ++ )
                str += ''+arr[Math.floor(Math.random() * arr.length)];
            return str;
        }
    });
    /*登录的验证*/
    $(function(){
        var yzm1 = "";
        var yzm2 = yzm();
        $("#yzm1").text(yzm2);
        $(".log-btn").click(function(){
            var phone = $(".two .phone input").val();
            var pass = $(".two .pass input").val();
            var phoneKey = /^1[3|4|5|7|8|9]\d{9}$/.test(phone);
            yzm1 = $(".yzm-input1").val();
            yzm2 = $("#yzm1").text();
            if(phone == ""){
                $(".tip span").text("请输入您的手机号！");
            }else if(!phoneKey){
                $(".tip span").text("请正确填写您的手机号！");
            }else if(pass == ""){
                $(".tip span").text("请填写您的密码！");
            }else if(pass.length<6||pass.length>20){
                $('.tip span').text("密码长度要求6~20位字符");
            }else if(yzm1 == ""){
                $(".tip span").text("请输入验证码！");
            }else if(yzm2 !== yzm1){
                $(".tip span").text("验证码输入不一致！");
            }else{
                $(".tip span").text("");
            }
        });

        function yzm(){
            var arr = ['A','B','C','D','E','F','G','H','I','J','K','L','M','N','O','P','Q','R','S','T','U','V','W','X','Y','Z','a','b','c','d','e','f','g','h','i','j','k','l','m','n','o','p','q','r','s','t','u','v','w','x','y','z','0','1','2','3','4','5','6','7','8','9'];
            var str = '';
            for(var i = 0 ; i < 4 ; i ++ )
                str += ''+arr[Math.floor(Math.random() * arr.length)];
            return str;
        }
    });

    $(function(){


    });

</script>
</body>
</html>