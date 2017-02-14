<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
<head lang="en">
        <meta charset="UTF-8">
        <meta name="keywords" content="北京投融资最佳机构,投融资权威机构,金融社交平台,投融资综合服务平台" />
        <meta name="description" content="微合伙是集金融社交、商务合作为一体的综合社交平台，通过“互联网+撮合”服务模式来增加融资成功概率，以解决投融资问题，同时整合项目方、资金方、资本机构的资源，形成融资产业链闭环。" />
        <meta http-equiv="X-UA-Compatible" content="IE=Edge">
<title><?php echo ($news["news_title"]); ?>_微合伙文化传媒有限公司</title>
<link rel="stylesheet" href="/Public/css/common.css"/>
        <link rel="stylesheet" href="/Public/css/news1.css"/>
        <style>

            /*.news-content-right .right dl dd p a:hover{
             color: #e50012;
             }
             .news-content .news-content-left .more a:hover{
             color: #e50012;
             }*/
        dl dd p a{
    color: #000;
}
dl dd p a:hover{
    color: #e50012;
}
</style>

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
<!--主体内容开始-->
<div class="news-content clearfix">
        <div class="container">
            <!--主体内容左侧部分开始-->
        <div class="news-content-left left">
            <!--新闻内容操作部分开始--><!--
            <div class="news-operation left"> -->
        <div>
        <ul>
        <!-- <li class="collect"><span></span>收藏</li>
        <li class="comment"><span></span>评论</li>
        </ul>
        <p>分享到</p> -->
        <div class="news-share-article">
        <ol>
        <li class="qq">
        <a href="javascript:void(0)"><i></i></a>
        </li>
        <li class="wx">
        <a href="javascript:void(0)"><i></i></a>
        </li>
        <li class="sina">
        <a href="javascript:void(0)"><i></i></a>
        </li>
        </ol>
        </div>
        </div>
            <!--新闻内容操作部分结束-->
            <!--新闻文章开始-->
        <div class="news-article right">
        <!-- <div class="article-img">
        <img src="/Public/images/news1-img1.jpg" alt=""/>
        </div> -->
            <!--新闻文章正文开始-->
        <div class="article-text">
        <h1 style="text-align: center;margin: 10px 0 10px 0;padding: 0px;font-size: 20px;padding: 40px 0 10px 0;color: #000;font-weight: 600;"><?php echo ($news["news_title"]); ?></h1>

<p style="padding: 0 0 0 15px;"><?php echo ($news["news_content"]); ?></p>

</div>
    <!--新闻文章正文结束-->
</div>
    <!--新闻文章结束-->
</div>
    <!--主体内容左侧部分结束-->
    <!--主体内容右侧部分开始-->
<div class="news-content-right right">
        <div class="news-content-circle">
        <span></span>
        </div>
        <p class="zoezgt">Zoezgt</p>
        <p class="today-recom">今日推荐</p>
        <p class="content-title">为您的投资保驾护航</p>
        <p class="more"><span></span>More></p>

<div style="margin: 10px 0 0 30px" id="">
        <h2 style="color: #000;
font-size: 22px;
font-weight: normal;
padding-left: 10px;
border-left: 7px solid #e50012;
margin-bottom: 20px;">24小时 - 热文</h2>

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
    <!--主体内容右侧部分结束-->
</div>
</div>
    <!--主体内容结束-->
    <!--底部区域开始-->
<div class="footer" id="footer">
        <div class="container">
        <div class="contact">
        <ul>
        <li class="tel"><span></span>400-245-8998</li>
        <li class="email"><span></span>4002458998@163.com</li>
<li class="address"><span></span>北京市朝阳区建外SOHO东区B座2703</li>
        <li class="workday"><span></span>周一至周五 9:00——18:00</li>
</ul>
</div>
<div class="attention">
        <img src="/Public/images/weixin.png" alt=""/>
        <p>关注微信公众号</p>
        </div>
        </div>
        </div>
            <!--底部区域结束-->

        <script type="text/javascript" src="/Public/js/jquery-1.10.2.min.js"></script>
<script type="text/javascript">
    // $(document).ready(
    //     $(".head-left li").click(
    //         function(){
    //             $(this).addClass("active").siblings().removeClass("active");
    //         }
    //     );
    // );
    $(function(){
        $('dl dt img').hover(

                function(){
                    // alert();
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
    });

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
        $(".head-left ul li ol li").hover(function(){
            $(this).removeClass("active");
        },function(){
            $(this).removeClass("active");
        })
    })
</script>
</body>
</html>