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
    <link rel="stylesheet" href="/Public/css/concern.css">
    <link rel="stylesheet" href="/Public/css/postDetail.css">
</head>
<body class="bg-gray">
<div class="header clearfix">
    <a href="javascript:history.go(-1);" class="header-left"></a>
    <p class="title-bar-text">帖子详情</p>
    <a href="javascript:;" class="header-right"></a>
</div>
<section>
    <div class="concern-list-items">
        <?php if(empty($$list["user_logo"])): ?><img src="/Public/images/investorList-item-default.png" class="concern-list-items-left">
        <?php else: ?>
            <img class="concern-list-items-left" src="<?php echo ($list["user_logo"]); ?>" alt=""><?php endif; ?>
        <div class="concern-list-items-right">
            <h5><?php echo ($list["realname"]); ?></h5>
            <p>发表于 <?php echo (date('Y-m-d H:i',$list["free_time"])); ?></p>
        </div>
    </div>
    <div class="post-detail-box">
        <h2><?php echo ($list["free_title"]); ?></h2>
        <p><?php echo ($list["free_content"]); ?></p>
    </div>
</section>
<section>
    <header class="pl-title-bar">全部评论（共<?php echo ($list["free_com_num"]); ?>条）</header>
    <?php if(is_array($comments)): foreach($comments as $key=>$comments): ?><div class="concern-list-items pl-items-box">
        <?php if(empty($$comments["user_logo"])): ?><img src="/Public/images/investorList-item-default.png" class="concern-list-items-left pl-items-icon">
        <?php else: ?>
            <img class="concern-list-items-left pl-items-icon" src="<?php echo ($comments["user_logo"]); ?>" alt=""><?php endif; ?>
        <div class="concern-list-items-right pl-items-content">
            <h5><?php echo ($comments["realname"]); ?></h5>
            <span><?php echo ($comments["com_content"]); ?></span>
            <p><?php echo (date('Y-m-d H:i',$comments["com_time"])); ?></p>
        </div>
    </div><?php endforeach; endif; ?>
    <div class="main-heart-fenye">
        <?php echo ($page); ?>
    </div>
    <style type="text/css">
        .main-heart-fenye{
            text-align: center;
        }
        .main-heart-fenye a{
            display: inline-block;
            font-size: 12px;
            /*width: 40px;*/
            padding:0 10px;
            border: 1px solid #999;
            border-radius: 5px;
            margin: 5px;
        }
        .main-heart-fenye .current{
            display: inline-block;
            font-size: 12px;
            /*width: 40px;*/
            padding: 0 10px;
            border: 1px solid #999;
            border-radius: 5px;
            margin: 5px;
            color: #fff;
            background: #999;
        }

    </style>
</section>
<div style="width: 100%;height:5rem;"></div>
<footer>
    <a href="<?php echo U('comment',array('fid'=>$list['fid'],'token'=>$_GET['token']));?>" class="footer-pl-button">
        <img src="/Public/images/icon-pl.png" alt="">我要评论
    </a>
</footer>
<script type="text/javascript" src="/Public/js/jquery-1.10.2.min.js"></script>
<script type="text/javascript" src="/Public/js/amazeui.min.js"></script>
</body>
</html>