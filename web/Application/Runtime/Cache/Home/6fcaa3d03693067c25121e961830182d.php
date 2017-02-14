<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
<head lang="en">
    <meta charset="UTF-8">
    <meta name="keywords" content="北京投融资最佳机构,投融资权威机构,金融社交平台,投融资综合服务平台" />
    <meta name="description" content="微合伙是集金融社交、商务合作为一体的综合社交平台，通过“互联网+撮合”服务模式来增加融资成功概率，以解决投融资问题，同时整合项目方、资金方、资本机构的资源，形成融资产业链闭环。" />
    <meta http-equiv="X-UA-Compatible" content="IE=Edge">
    <title>微合伙文化传媒有限公司_微合伙科技有限公司_金融社交圈_金融趴官网_微合伙</title>
    <link rel="stylesheet" href="/Public/css/common.css"/>
    <link rel="stylesheet" href="/Public/css/postlistdetail.css"/>

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
   <div class="container">
        <div class="topbutton-bar clearfix">
            <p>共<span class="red-tcolor">1</span>页</p>
            <a class="red-btn" href="#">免费发布信息</a>
        </div>
        <div class="container-main-box clearfix">
            <div class="main-left-box">
                <div class="head-info-bar">
                    现有<span class="red-tcolor">25</span>人阅读过该贴，评论<span class="red-tcolor">6</span>条。
                </div>
                <div class="main-content">
                    <div class="author-info-box clearfix">
                        <img class="author-avatar" src="/Public/images/datingArticle-item01.jpg" alt="">
                        <div class="author-info">
                            <div class="author-info-titlebar">
                                <span class="nicheng">昵称</span>&nbsp;&nbsp;&nbsp;&nbsp;
                                <span class="yingxiangli">影响力</span>
                                <img src="/Public/images/star.png" alt="">
                                <img src="/Public/images/star.png" alt="">
                                <img src="/Public/images/star.png" alt="">
                                <img src="/Public/images/star.png" alt="">
                                <img src="/Public/images/star.png" alt="">
                            </div>
                            <p>发表于 2016-11-23 14:47:23</p>
                        </div>                        
                    </div>
                    <div class="article-text-box">
                        <p class="article-title">专家咨询、行业咨询、商务调研服务商务</p>
                        <p>公司名称：河北群策咨询有限公司</p>
                        <p>公司主营业务：</p>
                        <p>专家咨询、行业咨询、商务调研服务商务,帮助客户更好地了解行业状况、发展趋势、市场 竞争，协助客户更好地洞悉市场并做出决策。帮助客户更好地了解行业状况、发展趋势、市场 竞争，协助客户更好地洞悉市场并做出决策。</p>
                        <p>
                            联系人：王英欣<br>
                            联系电话：15839220019
                        </p>
                    </div>
                    <div class="article-icons-box">
                        <a class="article-icons1" href="javascript:;">我要评论</a>
                        <a class="article-icons2" href="javascript:;">转发(1)</a>
                        <a class="article-icons3" href="javascript:;">赞(1)</a>
                        <a class="article-icons4" href="javascript:;">分享</a>
                    </div>
                </div>
                <div class="comment-content">
                    <div class="comment-titlebar">
                        <span>全部评论</span>
                        <div class="comment-titlebar-right">
                            <a class="comment-active" href="javascript:;">最早</a>
                            <a href="javascript:;">最赞</a>
                        </div>
                    </div>
                    <div class="comment-info-box clearfix">
                        <img class="comment-avatar" src="/Public/images/datingArticle-item01.jpg" alt="">
                        <div class="comment-info">
                            <div class="comment-info-titlebar">
                                <span class="nicheng">昵称</span>&nbsp;&nbsp;&nbsp;&nbsp;
                                <span class="yingxiangli">影响力</span>
                                <img src="/Public/images/star.png" alt="">
                                <img src="/Public/images/star.png" alt="">
                                <img src="/Public/images/star.png" alt="">
                                <img src="/Public/images/star.png" alt="">
                                <img src="/Public/images/star1.png" alt="">
                            </div>
                            <p>2016-11-23 14:47:23</p>
                        </div>
                        <div style="clear:both;"></div>
                        <div class="comment-text">
                            <p>求合作求合作求合作求合作求合作求合作求合作求合作求合作求合作求合作求合作求合作求合作求合作求合作求合作求合作求合作求合作求合作求合作求合作求合作求合作</p>       
                        </div>               
                    </div>
                    <div class="comment-info-box clearfix">
                        <img class="comment-avatar" src="/Public/images/datingArticle-item01.jpg" alt="">
                        <div class="comment-info">
                            <div class="comment-info-titlebar">
                                <span class="nicheng">昵称</span>&nbsp;&nbsp;&nbsp;&nbsp;
                                <span class="yingxiangli">影响力</span>
                                <img src="/Public/images/star.png" alt="">
                                <img src="/Public/images/star.png" alt="">
                                <img src="/Public/images/star1.png" alt="">
                                <img src="/Public/images/star1.png" alt="">
                                <img src="/Public/images/star1.png" alt="">
                            </div>
                            <p>2016-11-23 14:47:23</p>
                        </div>
                        <div style="clear:both;"></div>
                        <div class="comment-text">
                            <p>求合作求合作求合作求合作求合作求合作求合作求合作求合作求合作求合作求合作求合作求合作求合作求合作求合作求合作求合作求合作求合作求合作求合作求合作求合作</p>       
                        </div>               
                    </div>
                    <div class="comment-info-box clearfix">
                        <img class="comment-avatar" src="/Public/images/datingArticle-item01.jpg" alt="">
                        <div class="comment-info">
                            <div class="comment-info-titlebar">
                                <span class="nicheng">昵称</span>&nbsp;&nbsp;&nbsp;&nbsp;
                                <span class="yingxiangli">影响力</span>
                                <img src="/Public/images/star.png" alt="">
                                <img src="/Public/images/star.png" alt="">
                                <img src="/Public/images/star.png" alt="">
                                <img src="/Public/images/star.png" alt="">
                                <img src="/Public/images/star.png" alt="">
                            </div>
                            <p>2016-11-23 14:47:23</p>
                        </div>
                        <div style="clear:both;"></div>
                        <div class="comment-text">
                            <p>求合作求合作求合作求合作求合作求合作求合作求合作求合作求合作求合作求合作求合作求合作求合作求合作求合作求合作求合作求合作求合作求合作求合作求合作求合作</p>       
                        </div>               
                    </div>

                    <!-- fy -->
                    <div class="fenye-box" style="width:100%; margin:80px 0;">  
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
                </div>

            </div>
            <script>
                $('.comment-titlebar-right a').click(function(){
                    $(this).addClass("comment-active").siblings().removeClass("comment-active");
                });
            </script>
            <div class="main-right-box">
                <div class="right-head">热点推荐:</div>                
                <a href="#">
                    <dt>专家咨询、行业咨询</dt> 
                    <dd>帮助客户更好地了解行业状况、发展趋势、市场 竞争，协助客户更好地洞悉市场并做出决策。帮助客户更好地了解行业状况、发展趋势、市场 竞争，协助客户更好地洞悉市场并做出决策</dd> 
                </a>                
                <a href="">
                    <dt>专家咨询、行业咨询、商务调研服务商务调研服务商务调研服务</dt> 
                    <dd>帮助客户更好地了解行业状况、发展趋势、市场 竞争，协助客户更好地洞悉市场并做出决策。</dd>
                </a>
                <a href="#">
                    <dt>专家咨询、行业咨询</dt> 
                    <dd>帮助客户更好地了解行业状况、发展趋势、市场 竞争，协助客户更好地洞悉市场并做出决策。帮助客户更好地了解行业状况、发展趋势、市场 竞争，协助客户更好地洞悉市场并做出决策</dd> 
                </a> 
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