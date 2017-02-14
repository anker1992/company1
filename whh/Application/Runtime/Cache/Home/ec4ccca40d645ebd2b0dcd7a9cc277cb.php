<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
<head lang="en">
    <meta charset="UTF-8">
    <title>微合伙</title>
    <meta name="format-detection" content="telephone=no">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0, user-scalable=no">
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="apple-touch-fullscreen" content="yes">
    <meta http-equiv="Access-Control-Allow-Origin" content="*">
    <link rel="stylesheet" href="/Public/css/amazeui.min.css">
    <link rel="stylesheet" href="/Public/css/commonHeader.css">
    <style type="text/css">
        body,html{
            background-color: #f2f2f2;
        }
        .content{
            background-color: #fff;
        }
        .content .content-part1{
            padding: 2rem 2rem 4rem;
        }
        .content .content-part1 textarea{
            padding: 1.5rem 1rem;
            border: .1rem solid #dbdbdb;
            border-radius: .8rem;
            color: #3e3e3e;
            font-size: 1.6rem;
            line-height: 2.6rem;
            height: 25rem;
            width: 100%;
            resize: none;
            -webkit-appearance: none;
        }
        .content .content-part2{
            border-top: 1rem solid #f2f2f2;
            width: 100%;
            height: 5rem;
        }
        .content .content-part2 input{
            color: #f23030;
            font-size: 1.8rem;
            height: 5rem;
            line-height: 5rem;
            width: 100%;
            text-align: center;
            background-color: #fff;
            -webkit-border: none;
        }
        .post-title-input{
            width:100%;
            height:4rem;
            border:none;
            border-bottom: .1rem solid #dbdbdb;
            border-radius: 0;
            margin-bottom: 2rem;
            padding: 1.5rem 1rem;
            font-size: 1.8rem;
            color: #000000;
        }
        .header .header-right{
            background-image: none;
        }
    </style>
</head>
<body>
<div class="header clearfix">
    <a href="javascript:history.go(-1);" class="header-left"></a>
    <p class="title-bar-text">发表评论</p>
    <a href="javascript:;" class="header-right"></a>
</div>
<div class="content">
    <form action="<?php echo U('check_comment',array('token'=>$_GET['token']));?>" method="post">
        <div class="content-part1">
            <input type="hidden" name="fid" value="<?php echo ($fid); ?>">
            <textarea name="comment" id="" cols="30" rows="10" placeholder="请输入评论内容"></textarea>
        </div>
        <div class="content-part2">
            <input type="submit" value="提交"/>
        </div>
    </form>
</div>
</body>
</html>