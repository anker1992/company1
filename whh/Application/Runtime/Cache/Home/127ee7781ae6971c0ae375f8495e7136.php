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
    <style>
        .concern-list-items {
            padding: 1.5rem 2rem;
            border-bottom: .1rem solid #ececec;
            display: flex;
            display: -webkit-flex;
            flex-flow: row nowrap;
            -webkit-flex-flow: row nowrap;
        }

        .concern-list-items-left {
            border: .1rem solid #ececec;
            margin-right: 1rem;
            border-radius: 2.5rem;
            width: 5rem;
            height: 5rem;
        }
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
            background-image: none;
        }
    </style>
</head>
<body class="bg-gray">

<div class="header clearfix">
    <a href="javascript:;" class="header-left"></a>
    <p class="title-bar-text">自由市场</p>
    <a href="<?php echo U('newPost');?>" class="header-right">发新帖</a>
</div>
<section>
    <?php if(is_array($list)): foreach($list as $key=>$list): ?><a href="<?php echo U('marketDetail',array('fid'=>$list['fid'],'token'=>$_GET['token']));?>">
        <div class="concern-list-items">
            <?php if(empty($$list["user_logo"])): ?><img src="/Public/images/investorList-item-default.png" alt="" class="concern-list-items-left">
            <?php else: ?>
                <img class="concern-list-items-left" src="<?php echo ($list["user_logo"]); ?>" alt=""><?php endif; ?>
            <div class="concern-list-items-right">
                <h5><?php echo ($list["free_title"]); ?></h5>
                <p>发帖人：<?php echo ($list["realname"]); ?></p>
                <p><?php echo (date('Y-m-d H:i',$list["free_time"])); ?></p>
            </div>
        </div>
    </a><?php endforeach; endif; ?>
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
<script type="text/javascript" src="/Public/js/jquery-1.10.2.min.js"></script>
<script type="text/javascript" src="/Public/js/amazeui.min.js"></script>
</body>
</html>