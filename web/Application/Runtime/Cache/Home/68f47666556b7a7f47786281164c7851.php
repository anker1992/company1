<?php if (!defined('THINK_PATH')) exit();?><!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title></title>
    <meta name="viewport" content="width=device-width,minimum-scale=1.0,maximum-scale=1.0,user-scalable=no"/>
    <link rel="stylesheet" href="/Public/csswx/amazeui.min.css"/>
    <link rel="stylesheet" href="/Public/csswx/userCenter.css"/>
    <link rel="stylesheet" href="/Public/csswx/heart-person-list.css"/>
</head>
<body class="bg-white">
<div class="main-content">

    <div class="gray-title-bar">
        <a href="javascript:history.go(-1)">
            <b class="left"><i class="left-arrow1"></i><i class="left-arrow2"></i></b>
            <span>动心我的人</span>
        </a>
    </div>
    <?php if(is_array($list)): foreach($list as $key=>$list): ?><div class="heart-person-list-items">
        <img class="heart-list-avatar" src="<?php echo ($list["touxiang_src"]); ?>" alt=""/>
        <div class="main-heart-items-head">
            <a href="<?php echo U('WxList/personalInfo',array('id'=>$list['id'],'uid'=>$uid));?>">
            <div class="head-box1">
                <span class="head-name"><?php echo ($list["nickname"]); ?></span>
            </div>
            </a>
            <div class="head-box2">
                <span class="fl"><?php echo ($list["education"]); ?></span>

                <div class="fr">
                    <img class="icon-position-img" src="/Public/imageswx/icon-position.png" alt=""/>
                    <span><?php echo ($list["workarea"]); ?></span>
                </div>
            </div>
        </div>
    </div><?php endforeach; endif; ?>
</div>

<script type="text/javascript" src="/Public/jswx/jquery-1.10.2.min.js"></script>
<script type="text/javascript" src="/Public/jswx/amazeui.min.js"></script>
</body>
</html>