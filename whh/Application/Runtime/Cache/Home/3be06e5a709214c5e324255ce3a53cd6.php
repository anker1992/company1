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
    <link rel="stylesheet" href="/Public/css/selectIdentity.css">

</head>
<body>

<div class="header clearfix">
    <a href="javascript:history.go(-1);" class="header-left"></a>
    <p class="title-bar-text">选择身份</p>
    <a href="javascript:;" class="header-right"></a>
</div>

<?php
if($_GET['token']){ $token = $_GET['token']; } ?>
<a href="<?php echo U('selectIdentity_add',array('token'=>$token,'user_type'=>'1'));?>">
    <div class="select-items">
        <img src="/Public/images/icon-project-side.png" alt="">
        <p>项目方</p>
    </div>
</a>
<a href="<?php echo U('selectIdentity_add',array('token'=>$token,'user_type'=>'2'));?>">
    <div class="select-items">
        <img src="/Public/images/icon-investor.png" alt="">
        <p>投资人</p>
    </div>
</a>
<script type="text/javascript" src="/Public/js/jquery-1.10.2.min.js"></script>
<script type="text/javascript" src="/Public/js/amazeui.min.js"></script>
</body>
</html>