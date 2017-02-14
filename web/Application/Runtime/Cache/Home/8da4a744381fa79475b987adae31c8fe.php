<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
<head lang="en">
    <meta charset="UTF-8">
    <title>关于我们</title>
    <meta name="viewport" content="width=device-width,minimum-scale=1.0,maximum-scale=1.0,user-scalable=no"/>
    <link rel="stylesheet" href="/Public/csswx/amazeui.min.css"/>
    <link rel="stylesheet" href="/Public/csswx/userCenter.css"/>
</head>
<body class="bg-white">
<div class="main-content">
    <div class="gray-title-bar">
        <a href="javascript:history.go(-1)">
            <b class="left"><i class="left-arrow1"></i><i class="left-arrow2"></i></b>
            <span>关于我们</span>
        </a>
    </div>
    <div class="user-items-content">
        <a class="user-center-items1" href="<?php echo U('jianjie');?>">
            <p><b class="icon1"></b>公司简介</p>
            <b class="right"><i class="right-arrow1"></i><i class="right-arrow2"></i></b>
        </a>
        <a class="user-center-items1" href="<?php echo U('tiaokuan');?>">
            <p><b class="icon2"></b>服务条款</p>
            <b class="right"><i class="right-arrow1"></i><i class="right-arrow2"></i></b>
        </a>
    </div>
</div>
</body>
</html>