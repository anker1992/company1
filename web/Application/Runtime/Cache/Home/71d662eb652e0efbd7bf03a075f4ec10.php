<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
<head lang="en">
    <meta charset="UTF-8">
    <meta name="keywords" content="北京投融资最佳机构,投融资权威机构,金融社交平台,投融资综合服务平台" />
    <meta name="description" content="微合伙是集金融社交、商务合作为一体的综合社交平台，通过“互联网+撮合”服务模式来增加融资成功概率，以解决投融资问题，同时整合项目方、资金方、资本机构的资源，形成融资产业链闭环。" />
    <meta http-equiv="X-UA-Compatible" content="IE=Edge">
    <title>微合伙文化传媒有限公司_微合伙科技有限公司_金融社交圈_金融趴官网_微合伙</title>
    <link rel="stylesheet" href="/Public/css/common.css"/>
    <style type="text/css">
        .joinUs-part1 span{
            display: block;
            width: 100%;
            height: 573px;
            min-width: 1230px;
            margin-top: 80px;
            background: url("/Public/images/joinUs-part1.jpg") no-repeat;
            background-size: 100% 100%;
        }
        .joinUs-part1 span img{
            position: absolute;
            top: 80px;
            left: 0;
            width: 100%;
            min-width: 1230px;
            height: 573px;
            z-index: 4;
        }
        .wid100{
            width: 100px;
        }
        .wid500{
            width: 500px;
        }
        .wid180{
            width: 180px;
        }
        .wid150{
            width: 150px;
        }
        .wid280{
            width: 280px;
        }
        .joinUs-part2 .container{
            width: 1210px;
            min-width: 1210px;
            margin: 100px auto 130px;
        }
        .joinUs-part2 table thead tr{
            width: 100%;
            height: 30px;
            line-height: 30px;
            background-color: #cecece;
        }
        .joinUs-part2 table thead th{
            color: #000;
            letter-spacing: 4px;
            font-size: 18px;
            font-weight: 500;
            text-align: center;
        }
        .joinUs-part2 table thead th.wid500{
            text-align: left;
            padding-left: 70px;
        }
        .joinUs-part2 table tbody tr{
            cursor: pointer;
            height: 45px;
            line-height: 45px;
            border-bottom: 1px dashed #999;
        }
        .joinUs-part2 table tbody tr:hover{
            background-color: #eee;
        }
        .joinUs-part2 table tbody td{
            text-align: center;
            font-size: 16px;
            color: #3e3e3e;
            letter-spacing: 3px;
        }
        .joinUs-part2 table tbody td.tl{
            text-align: left;
            padding-left: 50px;
        }
        .joinUs-part3{
            height: 330px;
            width: 100%;
            min-width: 1230px;
            text-align: center;
            padding-top: 100px;
            background: url("/Public/images/adService-part4.jpg") no-repeat;
            background-position: 100% 100%;
        }
        .joinUs-part3 img{
            padding-bottom: 20px;
            border-bottom: 1px solid #000;
        }
        .joinUs-part3 h4{
            color: #3e3e3e;
            letter-spacing: 1px;
            margin: 25px 0;
        }
        .joinUs-part3 p{
            color: #3e3e3e;
            font-size: 18px;
            margin-bottom: 15px;
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
<div class="joinUs-part1">
    <span>
        <!--[if lt IE 9]>
        <img src="/Public/images/joinUs-part1.jpg" alt=""/>
        <![endif]-->
    </span>
</div>
<div class="joinUs-part2">
    <div class="container">
        <table>
            <thead>
            <tr>
                <th class="wid100">序号</th>
                <th class="wid500">职位</th>
                <th class="wid180">部门</th>
                <th class="wid150">工作地点</th>
                <th class="wid280">发布日期</th>
            </tr>
            </thead>
            <tbody>
            <tr>
                <td>01</td>
                <td class="tl">资深红娘</td>
                <td>微合伙</td>
                <td>北京</td>
                <td>2016-10-21</td>
            </tr>
            <tr>
                <td>02</td>
                <td class="tl">广告销售</td>
                <td>微合伙</td>
                <td>北京</td>
                <td>2016-10-21</td>
            </tr>
            <tr>
                <td>03</td>
                <td class="tl">高级销售</td>
                <td>微合伙</td>
                <td>北京</td>
                <td>2016-10-21</td>
            </tr>
            <tr>
                <td>04</td>
                <td class="tl">金融销售</td>
                <td>微合伙</td>
                <td>北京</td>
                <td>2016-10-21</td>
            </tr>
            </tbody>
        </table>
    </div>
</div>
<div class="joinUs-part3">
    <div class="container">
        <div class="part3-logo">
            <img src="/Public/images/adService-part4-logo.png" alt=""/>
        </div>
        <h4>Please feel free to contact us for more information. You are always welcome to visit us, but inform us in advance please.</h4>
        <p>北京微合伙文化传媒有限公司</p>
        <p>商务热线：13683370976</p>
        <p>北京市朝阳区建外SOHO东区B座2703室</p>
        <p>商务洽谈及项目对接</p>
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
</script>
</body>
</html>