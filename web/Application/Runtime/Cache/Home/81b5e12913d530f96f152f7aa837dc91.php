<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
<head lang="en">
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=Edge">
        <title></title>
        <link rel="stylesheet" href="/Public/css/common.css"/>
        <style type="text/css">
.part1{
    margin: 140px 0;
}
.part1 ul{
    border-bottom: 3px solid #d5d5d5;
}
.part1 ul li{
    float: left;
    color: #ff6269;
    font-size: 24px;
    padding-bottom: 20px;
    border-bottom: 3px solid #ff6269;
    margin-bottom: -3px;
}
.part1 .part1-con{
    margin-top: 60px;
}
.part1 .part1-con .part1-con-left{
    width: 290px;
    float: left;
    padding: 0 50px 80px 100px;
    border-right: 1px dotted #9e9e9e;
}
.part1 .part1-con .part1-con-left h4{
    font-size: 18px;
    color: #000;
    font-weight: normal;
    margin: 15px 0 20px 0;
}
.part1 .part1-con .part1-con-left p{
    color: #848282;
    line-height: 23px;
}
.part1 .part1-con .part1-con-right{
    width: 740px;
    float: right;
}
.part1 .part1-con .part1-con-right label{
    display: block;
    margin-bottom: 20px;
}
.part1 .part1-con .part1-con-right label span{
    width: 125px;
    float: left;
    font-size: 16px;
    line-height: 35px;
}
.part1 .part1-con .part1-con-right label span i{
    color: #ff6269;
}
.part1 .part1-con .part1-con-right label input{
    width: 470px;
    height: 35px;
    line-height: 35px;
    padding: 0 15px;
    border: 1px solid #bebebe;
    border-radius: 5px;
}
.part1 .part1-con .part1-con-right label.vt span{
    vertical-align: top;
}
.part1 .part1-con .part1-con-right label textarea{
    width: 470px;
    height: 70px;
    padding: 10px 15px;
    border-radius: 5px;
    border: 1px solid #bebebe;
    resize: none;
}
.part1 .part1-con .part1-con-right p input{
    color: #fff;
    font-size: 16px;
    background-color: #ff6269;
    border-radius: 5px;
    display: block;
    width: 105px;
    height: 30px;
    line-height: 30px;
    text-align: center;
    margin: 0 auto;
}
</style>
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
        <div class="container">
        <ul class="clearfix">
        <li>留言咨询：</li>
</ul>
<div class="part1-con clearfix">
        <div class="part1-con-left">
        <h4>温馨提示：</h4>
<p>1、留言后商家会尽快与您联系</p>
<p>2、如果3小时内商家未联系您，我们会为您推荐家类似商家，以保证您得到更全面、更专业的帮助</p>
<p>3、我们平台不会泄露</p>
</div>
<div class="part1-con-right">
        <form action="<?php echo U('Rongzi/liuyan_action');?>" method="post" id="myform" onsubmit="return yz()">
        <input type="hidden" name="glid" value="<?php echo ($id); ?>">
        <label><span>姓名：</span><input name="name" type="text"/></label>
        <label><span><i>*</i>手机号码：</span><input name="phone" id="phone" type="text"/></label>
        <label class="vt"><span><i>*</i>留言内容：</span><textarea name="con" id="con"></textarea></label>
        <p><input type="submit" value="提交" /></p>
        </form>
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
        });

    });
    function yz(){
        var phone=$('#phone').val();
        var con=$('#con').val();
        if (phone=='' || con=='') {
            alert('手机或内容不能为空');
            return false;
        }
    }
</script>
</body>
</html>