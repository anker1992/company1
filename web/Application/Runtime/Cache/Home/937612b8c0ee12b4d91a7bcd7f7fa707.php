<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
<head lang="en">
    <meta charset="UTF-8">
    <meta name="keywords" content="北京投融资最佳机构,投融资权威机构,金融社交平台,投融资综合服务平台" />
    <meta name="description" content="微合伙是集金融社交、商务合作为一体的综合社交平台，通过“互联网+撮合”服务模式来增加融资成功概率，以解决投融资问题，同时整合项目方、资金方、资本机构的资源，形成融资产业链闭环。" />
    <meta http-equiv="X-UA-Compatible" content="IE=Edge">
    <title>微合伙文化传媒有限公司_微合伙科技有限公司_金融社交圈_金融趴官网_微合伙</title>
    <link rel="stylesheet" href="/Public/css/common.css"/>
    <link rel="stylesheet" href="/Public/css/postlist.css"/>

</head>
<body>

<!--header开始-->



<div class="header">
    <div class="container clearfix">
        <div class="head-left left">
            <div class="head-logo">
                <a href="index.php"><img src="/Public/images/logo.png" alt=""/></a>
            </div>
            <ul>
                <!-- <li><a href="index.php" target="_self">首页</a></li> -->
                <li><a href="<?php echo U('Static/freeMarket');?>">自由市场</a></li>
                <li><a href="<?php echo U('Rongzi/financeproducts');?>">理财产品</a></li>
                <li><a href="<?php echo U('Daikuan/personalloan');?>">贷款产品</a></li>
                <li><a href="<?php echo U('Rongzi/financePage');?>">项目融资</a></li>
                <li><a href="javascript:void(0)" onclick="jiaoyou()" >相亲交友</a></li>
                <!-- <li>
                    <a href="datingIndex.php">金融社交</a>
                    <ol>
                        <li><a href="datingIndex.php">相亲交友</a></li>
                    </ol>
                </li> -->
                <li>
                    <a href="javascript:;" onclick="zhaopin()">求职招聘</a>
                    <ol>
                        <?php
 if(isset($_COOKIE['name'])){ ?>
                        <!--<li><a href="personal1.php">个人中心</a></li>-->
                        <?php }else{?>
                        <!--<li><a href="login.php">个人中心</a></li>-->
                        <?php }?>
                        <!--<li><a href="resumes.php">简历库</a></li>-->
                        <!--<li><a href="personal1.php#floor6">求职意向</a></li>-->
                        <!--<li><a href="recruitment1.php">高端招聘</a></li>-->
                        <!--<li><a href="jobGuidance1.php">求职指导</a></li>-->
                    </ol>
                </li>
                <!-- <li><a href="news1.php">资讯</a></li>
                <li><a href="financeProducts.php">产品</a></li> -->

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
 if(cookie('think_name')) {?>
                <li class="login"><a href="###"><i></i><?php echo cookie('think_name'); ?></a></li>
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


<!--header结束-->
<div class="content">
   <div class="container flea-market-list">
        <div class="list-search clearfix">
            <div class="search-title">所有信息</div>
            <input type="text">
            <a class="search-btn" href="#"></a>
            <a class="red-btn" href="#">免费发布信息</a>
        </div>
        <div class="title-top-bar">
            <a class="title-top-bar-a" href="#">全部</a>&nbsp;&nbsp;|&nbsp;&nbsp;            
            <a class="title-top-bar-a" href="#">热帖</a>
            <a class="red-btn" href="#">发新帖</a>
        </div>        
        <dl class="list-dl">
            <dt class="title-bar list-items clearfix">
                <ul>
                    <li class="list-w-5 align-center">阅读</li>
                    <li class="list-w-5 align-center">评论</li>
                    <li class="list-w-75 t-indent-5">标题</li>
                    <li class="list-w-7 align-center">作者</li>
                    <li class="list-w-8 align-center">发布日期</li>
                </ul>
            </dt>
            <dd class="list-items clearfix">
                <ul>
                    <li class="list-w-5 align-center">34086</li>
                    <li class="list-w-5 align-center">43</li>
                    <li class="list-w-75 t-indent-5">
                        <span>置顶</span><a href="<?php echo U('Static/freeMarketDetail');?>">私募基金公司保壳一条龙服务，包括垫资</a>
                    </li>
                    <li class="list-w-7 align-center">lissa</li>
                    <li class="list-w-8 align-center">11-18日</li>
                </ul>
            </dd>
            <dd class="list-items clearfix">
                <ul>
                    <li class="list-w-5 align-center">3408634086</li>
                    <li class="list-w-5 align-center">4040860</li>
                    <li class="list-w-75 t-indent-5">
                        <a href="#">私募基金公司保壳一条龙服务，包括垫资私募基金公司保壳一条龙服务，包括垫资私募基金公司保壳一条龙服务，包括垫资私募基金公司保壳一条龙服务，包括垫资</a>
                    </li>
                    <li class="list-w-7 align-center">lissa</li>
                    <li class="list-w-8 align-center">11-18日</li>
                </ul>
            </dd>
            <dd class="list-items items-container clearfix">
                <ul>
                    <li class="list-w-5 align-center">34086</li>
                    <li class="list-w-5 align-center">40</li>
                    <li class="list-w-75 t-indent-5">
                        <a href="#">宜信贷款 简单易操作 3小时批款</a>
                    </li>
                    <li class="list-w-7 align-center">lissa</li>
                    <li class="list-w-8 align-center">11-18日</li>
                </ul>
            </dd>
        </dl>        
   </div>
   <div class="fenye-box">  
        <ul class="">
            <li class="">
                <a href="#" class="active">首页</a>
            </li>
            <!-- <li class="">
                <a href="#" class="">上一页</a>
            </li> -->
            <li class="">
                <a href="#" class="">1</a>
            </li>
            <li class="">
                <a href="#" class="">2</a>
            </li>
            <li class="">
                <a href="#" class="">3</a>
            </li>
            <li class="">
                <a href="#" class="">4</a>
            </li>
            <li class="">
                <a href="#" class="">5</a>
            </li>
            <li class="">
                <a href="#" class="">下一页</a>
            </li>

            <li class="">
                <a href="#" class="">最后一页</a>
            </li>
        </ul>
    </div>
    <div class="post-mes-box clearfix">
        <div class="post-mes-titlebar clearfix">
            <div class="titlebar-left">发表新主题</div>
            <div class="titlebar-right">
                作者：<span>lissa</span>欢迎留言
                <a href="">退出</a>
            </div>
        </div>
        <div class="post-mes-content clearfix">
            <div class="mes-content-box clearfix">
                <span>标题：</span>
                <input class="c-title" type="text">
            </div>
            <div class="mes-content-box clearfix">
                <span>内容：</span>
                <textarea class="c-contents"></textarea>
            </div>
            <div class="mes-content-box">
                <a class="red-btn" href="">发布</a>
            </div>
        </div>
    </div>
    
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