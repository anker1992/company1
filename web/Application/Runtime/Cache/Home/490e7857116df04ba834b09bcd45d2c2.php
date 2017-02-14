<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
<head lang="en">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=Edge">
    <title>微合伙文化传媒有限公司_微合伙科技有限公司_金融社交圈_金融趴官网_微合伙</title>
    <link rel="stylesheet" href="/Public/css/common.css"/>
    <link rel="stylesheet" type="text/css" href="/Public/css/postlist.css">   
</head>
<body>
<!--header 开始-->



<div class="header">
    <div class="container clearfix">
        <div class="head-left left">
            <div class="head-logo">
                <a href="<?php echo U('Index/index');?>"><img src="/Public/images/logo.png" alt=""/></a>
            </div>
            <ul>
                <!-- <li><a href="index.php" target="_self">首页</a></li> -->
                <li><a href="<?php echo U('Freemarket/freeMarket');?>">自由市场</a></li>
                <li><a href="<?php echo U('Rongzi/financeproducts');?>">智能投顾</a></li>
                <li><a href="<?php echo U('Daikuan/personalloan');?>">智能信贷</a></li>
                <li><a href="<?php echo U('Dating/datingindex');?>">相亲交友</a></li>
                <li>
                    <a href="javascript:;">关于我们</a>
                    <ol>
                        <li><a href="<?php echo U('Static/aboutUs');?>">公司简介</a></li>
                        <li><a href="<?php echo U('Static/contactUs');?>">联系我们</a></li>
                        <li><a href="<?php echo U('Static/adService');?>">主营业务</a></li>
                        <li><a href="<?php echo U('Static/joinUs');?>">加入我们</a></li>
                    </ol>
                </li>
            </ul>
        </div>
        <div class="head-right right">
            <ol>
                <!-- <li class="search"><a href="javascript:void(0)"><i></i>搜索</a></li>-->
                <?php
 if(cookie('think_user_name')) {?>
                <li class="login"><a href="###"><i></i><?php echo cookie('think_user_name'); ?></a></li>
                <li class="login"><a href="<?php echo U('User/logout'); ?>"><i></i>退出</a></li>
                <?php }else{ ?>

                <li class="login login2"><a href="<?php echo U('User/login'); ?>"><i></i>登录</a></li>
                <li class="register login2"><a href="<?php echo U('User/register'); ?>"><i></i>注册</a></li>
                <?php
 }?>
            </ol>
        </div>
    </div>
</div>
<script type="text/javascript">
    function jiaoyou(){
        alert("相亲交友模块暂时未融到框架里");
    }
    function zhaopin(){
        alert("招聘模块暂时未融到框架里");
    }
</script>
<script language="javascript" type="text/javascript" src="http://js.users.51.la/19027900.js"></script>
<noscript><a href="http://www.51.la/?19027900" target="_blank"><img alt="&#x6211;&#x8981;&#x5566;&#x514D;&#x8D39;&#x7EDF;&#x8BA1;" src="http://img.users.51.la/19027900.asp" style="border:none" /></a></noscript>


<!--header结束-->
<div class="content">
   <div class="container flea-market-list">
        <div class="list-search clearfix">
            <div class="search-title">搜索</div>
            <input type="text" name="search" value="">
            <a class="search-btn" href="<?php echo U('Freemarket/freemarket',array('title'=>'1'));?>"></a>
        </div>
        <div class="title-top-bar">
            <a class="title-top-bar-a" href="#">全部</a>&nbsp;&nbsp;|&nbsp;&nbsp;            
            <a class="title-top-bar-a" href="#">热帖</a>
            <a class="red-btn" href="<?php echo U('Freemarket/freeMarketPost');?>">发新帖</a>
        </div>        
        <dl class="list-dl">
            <dt class="title-bar list-items clearfix">
                <ul>
                    <li class="list-w-10 align-center">阅读</li>
                    <li class="list-w-10 align-center">评论</li>
                    <li class="list-w-40 align-center">标&nbsp;&nbsp;题</li>
                    <li class="list-w-20 align-center">作者</li>
                    <li class="list-w-20 align-center">发布日期</li>
                </ul>
            </dt>
            <?php if(is_array($list)): foreach($list as $key=>$list): ?><dd class="list-items clearfix">
                <ul>
                    <li class="list-w-10 align-center"><?php echo ($list["free_click_num"]); ?></li>
                    <li class="list-w-10 align-center"><?php echo ($list["free_comment_num"]); ?></li>
                    <li class="list-w-40 t-indent-5">
                        <?php if($list['free_top_status'] == 1): ?><input type="button" style="color: red" value="置顶"><?php endif; ?>
                        <?php if($list['free_highlight'] == 1): ?><a href="<?php echo U('Freemarket/freeMarketDetail',array('free_id'=>$list['free_id']));?>" style="color: red"><?php echo ($list["free_title"]); ?></a>
                        <?php else: ?>
                            <a href="<?php echo U('Freemarket/freeMarketDetail',array('free_id'=>$list['free_id']));?>"><?php echo ($list["free_title"]); ?></a><?php endif; ?>
                    </li>
                    <li class="list-w-20 align-center">
                        <?php if($list['user_id'] == '-1'): ?>管理员
                        <?php else: ?>
                            <?php echo (substr($list["phone"],0,3)); ?>****<?php echo (substr($list["phone"],7)); endif; ?>
                    </li>
                    <li class="list-w-20 align-center"><?php echo (date("Y-m-d",$list["free_make_time"])); ?></li>
                </ul>
            </dd><?php endforeach; endif; ?>
        </dl>        
   </div>
   <div class="fenye-box">
       <ul>
           <li><?php echo ($page); ?></li>
       </ul>
    </div>
    <br/>
    <br/>
    <br/>

</div>
<!--footer开始-->
<div class="footer" id="footer">
    <div class="container">
        <div class="attention">
            <img src="/Public/images/weixin.png" alt=""/>
            <p>关注微信公众号</p>
        </div>
        <div class="contact">
            <ul>
                <li class="tel"><span></span>010—58690663</li>
                <li class="email"><span></span>weihehuo@163.com</li>
                <li class="address"><span></span>北京市朝阳区建外SOHO东区B座2703</li>
                <li class="workday"><span></span>周一至周五 9:00——18:00</li>
            </ul>
        </div>
    </div>
</div>
<!--footer结束-->

</body>
</html>