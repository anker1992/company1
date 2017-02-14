<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
<head lang="en">
    <meta charset="UTF-8">
    <meta name="keywords" content="北京投融资最佳机构,投融资权威机构,金融社交平台,投融资综合服务平台" />
    <meta name="description" content="微合伙是集金融社交、商务合作为一体的综合社交平台，通过“互联网+撮合”服务模式来增加融资成功概率，以解决投融资问题，同时整合项目方、资金方、资本机构的资源，形成融资产业链闭环。" />
    <meta http-equiv="X-UA-Compatible" content="IE=Edge">
    <title>微合伙文化传媒有限公司_微合伙科技有限公司_金融社交圈_金融趴官网_微合伙</title>
    <link rel="stylesheet" href="/Public/css/common.css"/>
    <link rel="stylesheet" href="/Public/css/news.css"/>
</head>
<body>

<!--header开始-->



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

<div class="news-content">
    <div class="container clearfix">
        <div class="news-content-left left">
            <!--<div class="primary-news clearfix">-->
                <!--<div class="primary-news-left">-->
                    <!--<a href="<?php echo U('Zixun/news1_detail',array('news_id'=>$hot['news_id']));?>" target="_blank">-->
                        <!--<img src="/Public/images_news/<?php echo ($all["news_imga"]); ?>" alt=""/>-->
                    <!--</a>-->
                <!--</div>-->
                <!--<div class="primary-news-right">-->
                    <!--<h3><a href="news1_detail.php?id=<?php echo md5($_rowsa['news_id']) ?>" target="_blank"><?php echo $_rowsa['news_title'] ?></a></h3>-->
                    <!--<p><?php echo $_rowsa['news_describe'] ?></p>-->
                <!--</div>-->
            <!--</div>-->
            <?php if(is_array($all)): foreach($all as $key=>$all): ?><ul>
                <li class="clearfix">
                    <div class="news-left-img">
                        <a href="<?php echo U('Zixun/news1_detail',array('news_id'=>$all['news_id']));?>" target="_blank">
                            <img src="/Public/images_news/<?php echo ($all["news_imga"]); ?>" alt="" />
                        </a>
                    </div>
                    <div class="news-left-article">
                        <h3><a href="<?php echo U('Zixun/news1_detail',array('news_id'=>$all['news_id']));?>" target="_blank"><?php echo ($all["news_title"]); ?></a></h3>
                        <p><?php echo ($all["news_describe"]); ?></p>
                    </div>
                </li>
            </ul><?php endforeach; endif; ?>
            <ul id="jzgdbox">
            </ul>
            <div class="more">


                <a href="javascript:;" id="jzgd" style="">点击加载更多</a>
                <a href="javascript:;" id="jzgdno" style="display: none">没有了</a>
            </div>
        </div>
        <div class="news-content-right right">
            <h2>24小时 - 热文</h2>
            <?php if(is_array($hot_article)): foreach($hot_article as $key=>$hot): ?><dl>
                    <dt style="width: 273px;
    /*height: 192px;*/
    overflow: hidden;/*margin: 0 0 0 0*/">
                        <a href="<?php echo U('Zixun/news1_detail',array('news_id'=>$hot['news_id']));?>" target="_blank">
                            <img src="/Public/images_news/<?php echo ($hot["news_imga"]); ?>" alt="" style="max-width: 300px;max-height: 150px;width: 273px;height: 192px;"/>
                        </a>
                    </dt>
                    <dd style="margin: 0px 0 10px 0;">
                        <p style="padding: 0px 0 20px 0;"><a href="<?php echo U('Zixun/news1_detail',array('news_id'=>$hot['news_id']));?>" target="_blank" style="font-size: 20px;line-height: 2em;"><?php echo ($hot["news_title"]); ?></a></p>
                    </dd>
                </dl><?php endforeach; endif; ?>
        </div>
    </div>
</div>

<!--底部区域开始-->
<div class="footer" id="footer">
    <div class="container">
        <div class="contact">
            <ul>
                <li class="tel"><span></span>010—58690663</li>
                <li class="email"><span></span>weihehuo@163.com</li>
                <li class="address"><span></span>北京市朝阳区建外SOHO东区B座2703</li>
                <li class="workday"><span></span>周一至周五 9:00——18:00</li>
            </ul>
        </div>
        <div class="attention">
            <img src="images/weixin.png" alt=""/>
            <p>关注微信公众号</p>
        </div>
    </div>
</div>
<!--底部区域结束-->
<script type="text/javascript" src="/Public/js/jquery-1.10.2.min.js"></script>
<script type="text/javascript" src="/Public/js/news1.js"></script>
<script type="text/javascript">
    $(document).ready(
            $(".head-left ul li").hover(function(){
                if($(this).find("ol").size()!==0){
                    $(this).find("ol").css({
                        display:"block"
                    })
                }else{
                    $(this).addClass("active").siblings().removeClass("active");
                }
            },function(){
                if($(this).find("ol").size()!==0){
                    $(this).find("ol").css({
                        display:"none"
                    })
                }else{
                    $(this).removeClass("active");
                }
            })
    );

    $(function(){
        $('.primary-news-left img').hover(
                function(){
                    $(this).animate({
                        width:400,
                        height:230
                    },300)
                },function(){
                    $(this).animate({
                        width:385,
                        height:220
                    },300)
                })

        $('.news-left-img img').hover(
                function(){
                    $(this).animate({
                        width:240,
                        height:160
                    },300)
                },function(){
                    $(this).animate({
                        width:225,
                        height:150
                    },300)
                })

        $('.news-content-right img').hover(
                function(){
                    $(this).animate({
                        width:290,
                        height:210
                    },300)
                },function(){
                    $(this).animate({
                        width:273,
                        height:192
                    },300)
                })
    })
</script>
</body>
</html>