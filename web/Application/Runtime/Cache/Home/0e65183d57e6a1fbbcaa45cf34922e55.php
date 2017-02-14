<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
<head lang="en">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=Edge">
    <title></title>
    <link rel="stylesheet" href="/Public/css/common.css"/>
    <link rel="stylesheet" href="/Public/css/infoRelease.css"/>
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

<div class="part1">
    <div class="container clearfix">
        <div class="part1-left">
            <h2><?php echo ($one["title"]); ?><br></h2>
            <p><span><?php echo ($one["releasetime"]); ?></span></p>
            <p><span>联系人：<em><?php echo ($one["name"]); ?></em></span></p>
            <p>
                <a href="<?php echo U('Rongzi/liuyan',array('id'=>$one['id']));?>">马上交谈</a>
                <!-- <a href="javascript:;">给我留言</a>-->
            </p>
        </div>
        <div class="part1-right">
            <h2><?php echo $_rows['name'] ?></h2>
            <ul class="clearfix">
                <li>
                    <p>咨询电话：<span class="red"><?php echo ($one["phone"]); ?></span></p>
                    <p class="clearfix">
                        <a href="<?php echo U('Rongzi/liuyan',array('id'=>$one['id']));?>">留言咨询</a>
                        <!--<a class="last" href="javascript:;">投资预约</a>-->
                    </p>
                </li>
            </ul>
        </div>
    </div>
</div>
<div class="part2">
    <div class="container clearfix">
        <div class="part2-left">
            <h2>产品详情：</h2>
            <ul>
                <li>
                    <h4>产品描述：</h4>
                    <div class="content">
                        <p><?php echo ($one["describ"]); ?>。</p>
                    </div>
                </li>
                <li>
                    <h4>备注：</h4>
                    <div class="content">
                        <p>无</p>
                    </div>
                </li>
                <li>
                    <h4>项目计划书预览：</h4>
                    <div class="content">

                    </div>
                    <div class="check">
                        <?php if(empty($pdf['name'])){ ?>
                        <a href="javascript:;" onclick="alert('没有上传');">点击查看项目计划书</a>
                        <?php }else{ ?>
                        <a href="/Public/pdf/<?php echo ($pdf["name"]); ?>" target="_black">点击查看项目计划书</a>
                        <?php } ?>

                    </div>

                </li>
            </ul>
        </div>
        <div class="part2-right">
            <h2>猜你喜欢</h2>
            <ul>
                <?php if(is_array($like)): foreach($like as $key=>$like): ?><li><a href="infoRelease.php?id=<?php echo $love_rows['id'] ?>">
                        <h4 title=""><?php echo ($like["name"]); ?><span title=""><?php echo ($like["expectedreturn"]); ?></span></h4>
                        <p><span>产品期限：<?php echo ($like["term"]); ?></span><span class="rate">预期收益率</span></p>
                    </a>
                    </li><?php endforeach; endif; ?>
            </ul>
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

<script type="text/javascript" src="/Public/js/jquery-1.10.2.min.js"></script>
<script type="text/javascript">
    $(function(){
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
    });

    $(function(){
        var height1 = $(".part2-left").outerHeight();
        var height2 = $(".part2-right").outerHeight();
        var diff = height1 - height2;
        console.log(diff);
        $(".part2-right ul").css("padding-bottom",diff+"px");
    });
</script>

</body>
</html>