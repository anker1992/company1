<?php if (!defined('THINK_PATH')) exit();?><!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>编辑资料</title>
    <meta name="viewport" content="width=device-width,minimum-scale=1.0,maximum-scale=1.0,user-scalable=no"/>
    <link rel="stylesheet" href="/Public/csswx/amazeui.min.css"/>
    <link rel="stylesheet" href="/Public/csswx/userCenter.css"/>

</head>
<body class="bg-white">
<div class="main-content">
    <div class="gray-title-bar">
        <a href="<?php echo U('WxUser/userCenter',array('phone'=>$phone,'uid'=>$uid));?>">
        <b class="left"><i class="left-arrow1"></i><i class="left-arrow2"></i></b>
        <span>个人信息</span>
    </a>
    </div>
    <div class="user-items-content">
        <a class="user-center-items1" href="<?php echo U('WxUser/edit',array('phone'=>$phone,'uid'=>$uid));?>">
            <p><i class="icon1"></i>编辑个人信息</p>
            <b class="right"><i class="right-arrow1"></i><i class="right-arrow2"></i></b>
        </a>
        <a class="user-center-items1" href="<?php echo U('WxUser/zeou',array('phone'=>$phone,'uid'=>$uid));?>">
            <p><i class="icon2"></i>编辑择偶要求</p>
            <b class="right"><i class="right-arrow1"></i><i class="right-arrow2"></i></b>
        </a>
        <a class="user-center-items1" href="<?php echo U('interest',array('phone'=>$phone,'uid'=>$uid));?>">
            <p><i class="icon3"></i>兴趣爱好</p>
            <b class="right"><i class="right-arrow1"></i><i class="right-arrow2"></i></b>
        </a>

    </div>
</div>

<script type="text/javascript" src="/Public/jswx/jquery-1.10.2.min.js"></script>
<script type="text/javascript" src="/Public/jswx/amazeui.min.js"></script>
</body>
</html>