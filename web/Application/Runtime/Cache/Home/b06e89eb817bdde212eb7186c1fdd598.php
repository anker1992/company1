<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
<head lang="en">
    <meta charset="UTF-8">
    <title>兴趣爱好</title>
    <meta name="format-detection" content="telephone=no">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0, user-scalable=no">
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="apple-touch-fullscreen" content="yes">
    <meta http-equiv="Access-Control-Allow-Origin" content="*">
    <link rel="stylesheet" href="/Public/csswx/amazeui.min.css"/>
    <link rel="stylesheet" href="/Public/csswx/interest.css"/>
</head>
<body>
<div id="main">
    <div class="header">
        <h2><a href="<?php echo U('edit_index',array('phone'=>$phone,'uid'=>$uid));?>" ><span></span>兴趣爱好</a></h2>
    </div>
    <div class="content">
        <div class="item item1">
            <a href="<?php echo U('interestList',array('label'=>1,'phone'=>$phone,'uid'=>$uid));?>">
                <div class="item-top">
                    <h3><i></i>个人标签</h3>
                    <span></span>
                </div>
            </a>
        </div>
        <div class="item item2">
            <a href="<?php echo U('interestList',array('label'=>2,'phone'=>$phone,'uid'=>$uid));?>">
                <div class="item-top">
                    <h3><i></i>我喜欢的电影</h3>
                    <span></span>
                </div>
            </a>
        </div>
        <div class="item item3">
            <a href="<?php echo U('interestList',array('label'=>3,'phone'=>$phone,'uid'=>$uid));?>">
                <div class="item-top">
                    <h3><i></i>我喜欢的音乐</h3>
                    <span></span>
                </div>
            </a>
       </div>
        <div class="item item4">
            <a href="<?php echo U('interestList',array('label'=>4,'phone'=>$phone,'uid'=>$uid));?>">
                <div class="item-top">
                    <h3><i></i>我喜欢的作者</h3>
                    <span></span>
                </div>
            </a>
        </div>
        <div class="item item5">
            <a href="<?php echo U('interestList',array('label'=>5,'phone'=>$phone,'uid'=>$uid));?>">
                <div class="item-top">
                    <h3><i></i>我喜欢的美食</h3>
                    <span></span>
                </div>
            </a>
        </div>
        <div class="item item6">
            <a href="<?php echo U('interestList',array('label'=>6,'phone'=>$phone,'uid'=>$uid));?>">
                <div class="item-top">
                    <h3><i></i>我喜欢的运动</h3>
                    <span></span>
                </div>
            </a>
        </div>
    </div>
</div>
</body>
</html>