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
    <link rel="stylesheet" href="/Public/css/userCenter.css">
    <style>
        .header .header-right{
            background: none;
            width: 6rem;
            margin: 0;
            line-height:5rem;
            margin-right: 1.5rem;
        }
        .header .header-left{
            width: 6rem;
            margin-right: 0;
        }
    </style>
</head>
<body class="bg-gray">

<div class="header clearfix">
    <a href="<?php echo U('Product/productList',array('token'=>$_GET['token']));?>" class="header-left"></a>
    <p class="title-bar-text">个人中心</p>
    <a href="<?php echo U('Product/productList',array('token'=>$_GET['token']));?>" class="header-right">找产品</a>
</div>
<section>
    <style>
        .avatar-box{
            background:url(<?php echo ($user["user_logo"]); ?>) no-repeat;
        }
    </style>
    <div class="avatar-box">
        <img class="mengban-img" src="/Public/images/mengban.png" alt="">
            <a href="<?php echo U('personalInfo',array('token'=>$_GET['token']));?>">
                <?php if($user['user_logo']): ?><img src="<?php echo ($user["user_logo"]); ?>" alt="" class="avatar-img">
                <?php else: ?>
                    <img src="/Public/images/investorList-item-default.png" alt="" class="avatar-img"><?php endif; ?>
            </a>
        <aside class="info-area">
            <h4><?php echo ($user["realname"]); ?>您好</h4>
            <p><i></i>认证为
                <?php if($user['user_type'] == 1): ?>项目人
                <?php elseif($user['user_type'] == 2): ?>投资人
                <?php else: ?>
                    浏览者<?php endif; ?>
            </p>
            <p><?php echo ($user["company"]); ?></p>
        </aside>
    </div>
    <div class="button-bar">
        <!--<div class="buttons-item">-->
            <!--<p><?php echo ($user["balance"]); ?>积分</p>-->
            <!--<p class="item1"><i></i>余额</p>-->
        <!--</div>-->
        <div class="buttons-item">
            <a href="<?php echo U('appointments',array('token'=>$_GET['token']));?>">
                <?php if(empty($user['app_yue_num'])): ?><p>0个</p>
                <?php else: ?>
                    <p><?php echo ($user['app_yue_num']); ?>个</p><?php endif; ?>
                <p class="item4"><i></i>约见</p>
            </a>
        </div>
        <div class="buttons-item">
            <a href="<?php echo U('collectProject',array('token'=>$_GET['token']));?>">
                <?php if(empty($user['my_follow_num'])): ?><p>0个</p>
                <?php else: ?>
                    <p><?php echo ($user["my_follow_num"]); ?>个</p><?php endif; ?>
            <p class="item2"><i></i>收藏</p>
            </a>
        </div>
        <!--<div class="buttons-item">-->
        <!--<p>3000积分</p>-->
        <!--<p class="item3"><i></i>积分</p>-->
        <!--</div>-->
    </div>
</section>
<section class="user-center-list-area">
    <!--<a href="<?php echo U('appointments',array('token'=>$_GET['token']));?>" class="user-center-list-bar">-->
        <!--<img class="list-icon" src="/Public/images/icon-uc-list1.png" alt="">-->
        <!--<span>我的约见</span>-->
        <!--<img class="list-right-arrow" src="/Public/images/icon-uc-list-arraw.png" alt="">-->
    <!--</a>-->
    <a href="<?php echo U('myneeds',array('token'=>$_GET['token']));?>" class="user-center-list-bar">
        <img class="list-icon" src="/Public/images/icon-uc-list2.png" alt="">
        <span>我的关注</span>
        <img class="list-right-arrow" src="/Public/images/icon-uc-list-arraw.png" alt="">
    </a>
    <a href="<?php echo U('aboutWeihehuo',array('token'=>$_GET['token']));?>" class="user-center-list-bar">
        <img class="list-icon" src="/Public/images/icon-uc-list3.png" alt="">
        <span>关于微合伙</span>
        <img class="list-right-arrow" src="/Public/images/icon-uc-list-arraw.png" alt="">
    </a>
</section>
<section>
    <a class="login-out-button" href="<?php echo U('Login/logout',array('token'=>$_GET['token']));?>">退出登录</a>
</section>
<script type="text/javascript" src="/Public/js/jquery-1.10.2.min.js"></script>
<script type="text/javascript" src="/Public/js/amazeui.min.js"></script>
</body>
</html>