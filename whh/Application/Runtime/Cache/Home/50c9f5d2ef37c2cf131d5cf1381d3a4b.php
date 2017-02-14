<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>微合伙</title>
    <meta name="format-detection" content="telephone=no">
    <meta name="viewport"
          content="width=device-width, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0, user-scalable=no">
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="apple-touch-fullscreen" content="yes">
    <meta http-equiv="Access-Control-Allow-Origin" content="*">

    <link rel="stylesheet" href="/Public/css/amazeui.min.css">
    <link rel="stylesheet" href="/Public/css/commonHeader.css">
    <link rel="stylesheet" href="/Public/css/login.css">
</head>
<body>
<div class="header clearfix">
    <!--<a href="javascript:history.go(-1);" class="header-left"></a>-->
    <p class="title-bar-text">登录</p>
    <!--<a href="javascript:;" class="header-right"></a>-->
</div>
<section>
    <form action="<?php echo U('login_add');?>" method="post">
        <input type="hidden" name="openid" value="<?php echo ($openid); ?>">
        <div class="login-main-box">
            <div class="login-input-bar">
                <img src="/Public/images/login-icon-phone.png" alt="">
                <input class="login-input" type="text" name="phone" placeholder="请输入你的手机号码">
            </div>
            <div class="login-input-bar">
                <img src="/Public/images/login-icon-key.png" alt="">
                <input class="login-input" type="password" name="pwd" placeholder="请输入你的密码">
            </div>
            <input class="submit-button" type="submit" value="登录">
        </div>
    </form>
</section>
<aside class="bottom-aside">
    <div class="register-bar">
        <a href="<?php echo U('register');?>">现在注册</a><a href="#">忘记密码</a>
    </div>
</aside>

<script type="text/javascript" src="/Public/js/jquery-1.10.2.min.js"></script>
<script type="text/javascript" src="/Public/js/amazeui.min.js"></script>


</body>
</html>