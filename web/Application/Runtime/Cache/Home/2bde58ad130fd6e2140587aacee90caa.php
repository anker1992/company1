<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
<head lang="en">
    <meta charset="UTF-8">
    <meta name="keywords" content="北京投融资最佳机构,投融资权威机构,金融社交平台,投融资综合服务平台" />
    <meta name="description" content="微合伙是集金融社交、商务合作为一体的综合社交平台，通过“互联网+撮合”服务模式来增加融资成功概率，以解决投融资问题，同时整合项目方、资金方、资本机构的资源，形成融资产业链闭环。" />
    <meta http-equiv="X-UA-Compatible" content="IE=Edge">
    <title>微合伙文化传媒有限公司_微合伙科技有限公司_金融社交圈_金融趴官网_微合伙</title>
    <link rel="stylesheet" href="/Public/css/common.css"/>
    <link rel="stylesheet" href="/Public/css/aboutUs.css"/>
   
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
<div class="part1">
    <div class="part1-con">
        <img src="/Public/images/aboutUs.png" alt=""/>
    </div>
</div>
<div class="part2">
    <div class="part-title">
        <p>微合伙•金融社交趴</p>
    </div>
    <div class="part2-con clearfix">
        <div class="part-left">
            <img src="/Public/images/aboutUs-img1.jpg" alt=""/>
        </div>
        <div class="part-right">
            <div class="part-right-con">
                <h3>关于网站</h3>
                <h4>About website</h4>
                <p>微合伙覆盖了十万人的金融从业精英，以京津冀为主，辐射沪宁杭、辽沈等中国北方主要城市的银行、保险、资管、信托等金融从业人员。其中包括大量的金融圈 精英、老饕、名流，通过高端聚会、及娱乐项目让大家从陌生到熟识最终成为好朋友。从而扩展自己工作生活中的人脉资源，让事业变得更轻松，生活变得快乐。为城市高端圈层打造专属社交半径，以此见证一个圈层的荣耀与归属。</p>
                <ul>
                    <li class="cur"><a href="javascript:;">快速投稿</a></li>
                    <li><a href="javascript:;">快速投稿</a></li>
                </ul>
            </div>
        </div>
    </div>
</div>
<div class="part3">
    <div class="part-title1">
        <p><i></i>微合伙•APP</p>
    </div>
    <div class="part3-con">
        <div class="part-left">
            <img src="/Public/images/aboutUs-img2.jpg" alt=""/>
        </div>
        <div class="part-right">
            <div class="part-right-con">
                <h3>关于APP</h3>
                <h4>About APP</h4>
                <p>微合伙APP作为金融界高端生活垂直社区，堪称金融圈的约趴神器，它囊括了“美食美酒、高端旅行、派对沙龙”等多种类的高端生活服务体验及项目。除每周定期举办的聚会活动外，用户也可以根据自己的爱好或需求，向伙伴发起各种风格的聚会。此外，微合伙精心准备“书画趴”、“陶艺趴”、“插花趴”、“茶话会”、“棋牌会”、 “温泉会”、“品酒赏石会”，等各种文艺聚会。</p>
            </div>
        </div>
    </div>
</div>
<div class="part4">
    <div class="part-title1">
        <p><i></i>微合伙•媒体</p>
    </div>
    <div class="part4-con">
        <div class="part-left">
            <img src="/Public/images/aboutUs-img3.jpg" alt=""/>
        </div>
        <div class="part-right">
            <div class="part-right-con">
                <h3>关于媒体</h3>
                <h4>About media</h4>
                <p>作为金融圈社交平台，微合伙在推出公众号的同时组建百余个微信群组，日活动人数约4.6万，信息浏览量达到30000次，任何优质需求的发布都会产生实际效益。除了自营的媒体外，微合伙与新浪、搜狐、腾讯、北京晚报、精华时报等众多媒体建立全面战略合作关系。并通过引进互联网大数据技术，专业的数据分析团队，满足相同客户群的社交需求以及不同客服群对商务合作的需求。</p>
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
<script src="/Public/js/jquery-1.10.2.min.js"></script>
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
        $(".head-left ul li ol li").hover(function(){
            $(this).removeClass("active");
        },function(){
            $(this).removeClass("active");
        })
    })
</script>
</body>
</html>