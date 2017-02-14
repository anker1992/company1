<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
<head lang="en">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=Edge">
    <title>微合伙文化传媒有限公司_微合伙科技有限公司_金融社交圈_金融趴官网_微合伙</title>
    <link rel="stylesheet" href="/Public/css/common.css"/>
    <link rel="stylesheet" type="text/css" href="/Public/css/postlist.css">   
    <link rel="stylesheet" type="text/css" href="/Public/css/postlistdetail.css">   

    <link rel="stylesheet" href="/Public/js/utf8-php/themes/default/css/ueditor.css">

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
   <div class="container">
        <div class="topbutton-bar clearfix">
        </div>
        <div class="container-main-box clearfix">
            <div class="main-left-box">
                <div class="head-info-bar">
                    现有<span class="red-tcolor"><?php echo ($free["free_click_num"]); ?></span>阅读过该贴，评论<span class="red-tcolor"><?php echo ($free["free_comment_num"]); ?></span>条。
                </div>
                <div class="main-content">
                    <div class="author-info-box clearfix">
                        <img class="author-avatar" src="/Public/images/banner2-part1-03.png" alt="">
                        <div class="author-info">
                            <div class="author-info-titlebar">
                                <span class="nicheng">
                                    <?php if($free['user_id'] == '-1'): ?>管理员
                                        <?php else: ?>
                                        <?php echo (substr($free["phone"],0,3)); ?>****<?php echo (substr($free["phone"],7)); endif; ?>
                                </span>&nbsp;&nbsp;&nbsp;&nbsp;
                                <span class="yingxiangli">影响力</span>
                                <i></i><i></i><i></i><i></i><i></i>
                            </div>
                            <p>发表于<?php echo (date("Y-m-d H:i",$free["free_make_time"])); ?></p>
                        </div>
                    </div>
                    <div class="article-text-box">
                        <p class="article-title"><?php echo ($free["free_title"]); ?></p>
                        <?php echo ($free["free_content"]); ?>
                    </div>
                    <div class="article-icons-box">
                        <a class="article-icons1 commentBtn" href="javascript:;"><i></i>我要评论</a>
                        <a class="article-icons2 hide" href="javascript:;"><i></i>转发(1)</a>
                        <a class="article-icons3 zanBtn" href="javascript:;"><i></i>赞(<?php echo ($free["free_praise_num"]); ?>)</a>
                        <a class="article-icons5 zanBtn1 hide" href="javascript:;"><i></i>已赞</a>
                        <a class="article-icons4 hide" href="javascript:;"><i></i>分享</a>
                    </div>
                    <div class="comment-box">
                        <input type="hidden" id="comment_id" value="<?php echo cookie('think_user_id'); ?>">
                        <input type="hidden" id="free_id" value="<?php echo ($free["free_id"]); ?>">
                        <input type="hidden" id="zan_status" value="<?php echo ($zan["status"]); ?>">
                        <input type="hidden" id="think_user_name" value="<?php echo (substr($user_name,0,3)); ?>****<?php echo (substr($user_name,7)); ?>">
                        <textarea name="comment" id="comment"></textarea>
                        <button id="post_add" type="button">提交</button>
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
                        <?php if(is_array($comment)): foreach($comment as $key=>$comment): ?><img class="comment-avatar" src="/Public/images/banner2-part1-03.png" alt="">
                            <div class="comment-info">
                                <div class="comment-info-titlebar">
                                    <span class="nicheng">
                                        <?php if($comment['comment_uid'] == '-1'): ?>管理员
                                        <?php else: ?>
                                            <?php echo (substr($comment["phone"],0,3)); ?>****<?php echo (substr($comment["phone"],7)); endif; ?>
                                    </span>&nbsp;&nbsp;&nbsp;&nbsp;
                                    <span class="yingxiangli">影响力</span>
                                    <i></i><i></i><i></i><i></i>
                                    <i class="two"></i>
                                </div>
                                <p><?php echo (date("Y-m-d H:i",$comment["comment_time"])); ?></p>
                            </div>
                            <div style="clear:both;"></div>
                            <div class="comment-text">
                                <p><?php echo ($comment["comment_content"]); ?></p>
                            </div><?php endforeach; endif; ?>
                    </div>
                </div>
                <div class="fenye-box">
                    <ul>
                        <li><?php echo ($page); ?></li>
                    </ul>
                </div>

            </div>

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
<script type="text/javascript" src="/Public/js/jquery-1.10.2.min.js"></script>

<script>
    $(function(){
        var status = $("#zan_status").val();
        if(status == '1'){
            $('.zanBtn').addClass("hide");
            $(".zanBtn1").removeClass("hide");
        }
    });
    $('.comment-titlebar-right a').click(function(){
        $(this).addClass("comment-active").siblings().removeClass("comment-active");
    });
    $(".commentBtn").click(function(){
        $(".comment-box").show(500);
    });
    $(".comment-box button").click(function(){
        var val = $(".comment-box textarea").val();
        if(val == ""){
            alert("您还没有评论");
        }else{
            $(this).parent().hide();
            var free_id = $("#free_id").val();
            var comment_id = $("#comment_id").val();
            var phone = $("#think_user_name").val();
            jQuery.ajax({
                type: "POST", // HTTP method POST or GET
                url: "<?php echo U('Freemarket/free_comment_add');?>", //Where to make Ajax calls
                dataType:"text", // Data type, HTML, json etc.
                data:{"coment":val,"free_id":free_id,"comment_id":comment_id,"user_name":phone}, //Form variables
                success:function(response){
                    $(".comment-content").append(response);
                },
                error:function (xhr, ajaxOptions, thrownError){
                    alert(thrownError);
                }
            });
        }
    });
    $(".zanBtn").click(function(){
        var free_id = $("#free_id").val();
        var comment_id = $("#comment_id").val();
        $.ajax({
            cache: true,
            type: "POST",
            url:"<?php echo U('Freemarket/free_zan');?>",
            data:{'free_id':free_id,'comment_id':comment_id},
            async: false,
            error: function(request) {
//                alert("Connection error");
            },
            success: function(data) {
                if(data == '1'){
                    $('.zanBtn').addClass("hide");
                    $(".zanBtn1").removeClass("hide");
                }else{
                    alert("点赞错误");
                }
            }
        });
    })
</script>
</html>