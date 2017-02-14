<?php if (!defined('THINK_PATH')) exit();?><!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>我的</title>
    <meta name="viewport" content="width=device-width,minimum-scale=1.0,maximum-scale=1.0,user-scalable=no"/>
    <link rel="stylesheet" href="/Public/csswx/amazeui.min.css"/>
    <link rel="stylesheet" href="/Public/csswx/userCenter.css"/>
</head>
<body class="bg-gray">
<div class="main-content">
    <div class="user-center-header-box">
    <div class="user-avatar-box">
        <?php if($list['touxiang_src'] == '' | $list['touxiang_src'] == 'NULL'): ?><img src="/Public/imageswx/icon-avatar.png" alt=""/>
        <?php else: ?>
            <img src="<?php echo ($list['touxiang_src']); ?>" alt=""/><?php endif; ?>
    </div>
    <div class="user-tools-box">
        <div>
            <a href="<?php echo U('WxUser/my_heart',array('phone'=>$phone,'uid'=>$uid));?>"><i class="my-icons icon-xin-black"></i>

                <p>我动心的人</p></a>
        </div>
        <div>
            <a href="<?php echo U('WxUser/heart_me',array('phone'=>$phone,'uid'=>$uid));?>"><i class="my-icons icon-xin-white"></i>

                <p>动心我的人</p></a>
        </div>
        <!--<div>-->
            <!--<a href=""><span>12</span>-->

                <!--<p>我的相册</p></a>-->
        <!--</div>-->
    </div>
    </div>
    <div class="user-items-content">
        <a class="user-center-items" href="<?php echo U('WxUser/edit_index',array('phone'=>$phone,'uid'=>$uid));?>">
            <p><i class="my-icons items-icon1"></i>个人信息</p>
            <b class="right"><i class="right-arrow1"></i><i class="right-arrow2"></i></b>
        </a>
        <a class="user-center-items" href="<?php echo U('WxUser/personalData',array('phone'=>$phone,'uid'=>$uid));?>">
            <p><i class="my-icons items-icon2"></i>查看我的资料</p>
            <b class="right"><i class="right-arrow1"></i><i class="right-arrow2"></i></b>
        </a>
        <a class="user-center-items" href="<?php echo U('WxRenzheng/certification',array('phone'=>$phone,'uid'=>$uid));?>" id="renzheng">
            <p><i class="my-icons items-icon3"></i>认证个人信息</p>
            <b class="right"><i class="right-arrow1"></i><i class="right-arrow2"></i></b>
        </a>
        <a class="user-center-items" href="<?php echo U('WxUser/aboutUs',array('phone'=>$phone,'uid'=>$uid));?>">
            <p><i class="my-icons items-icon4"></i>关于我们</p>
            <b class="right"><i class="right-arrow1"></i><i class="right-arrow2"></i></b>
        </a>
        <a class="user-center-items" href="<?php echo U('WxUser/logout',array('uid'=>$uid));?>">
            <p><i class="my-icons items-icon5"></i>退出登录</p>
            <b class="right"><i class="right-arrow1"></i><i class="right-arrow2"></i></b>
        </a>
    </div>
</div>
<div data-am-widget="navbar" class="am-navbar am-cf am-navbar-default "
     id="">
    <ul class="am-navbar-nav am-cf am-avg-sm-4 my-nav">
        <li>
            <a href="<?php echo U('WxList/mainHeart',array('uid'=>$uid,'phone'=>$phone));?>" class="">
                <!--<img src="/Public/imageswx/my-icons.png" alt="心动"/>-->
                <i class="my-icons footer-heart-icon"></i>
                <span class="am-navbar-label">心动</span>
            </a>
        </li>
        <li>
            <a href="<?php echo U('WxUser/userCenter',array('uid'=>$uid,'phone'=>$phone));?>" class="footer-active">
                <!--<img src="/Public/imageswx/my-icons.png" alt="我的"/>-->
                <i class="my-icons footer-my-icon"></i>
                <span class="am-navbar-label">我的</span>
            </a>
        </li>
    </ul>
</div>

<script type="text/javascript" src="/Public/jswx/jquery-1.10.2.min.js"></script>
<script type="text/javascript" src="/Public/jswx/amazeui.min.js"></script>

</body>
</html>