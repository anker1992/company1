<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
<head lang="en">
    <meta charset="UTF-8">
    <title>会员特权</title>
    <meta name="format-detection" content="telephone=no">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0, user-scalable=no">
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="apple-touch-fullscreen" content="yes">
    <meta http-equiv="Access-Control-Allow-Origin" content="*">
    <style type="text/css">
        *{
            margin: 0;
            padding: 0;
        }
        ul,li{
            list-style: none;
        }
        html,body{
            width: 100%;
            min-height: 100%;
            font-size: 10px;
        }
        @-webkit-viewport{
            width:device-width;
        }
        @-moz-viewport{
            width:device-width;
        }
        @-ms-viewport{
            width:device-width;
        }
        @-o-viewport{
            width:device-width;
        }
        @viewport{
            width:device-width;
        }
        /*media响应式*/
        html {
            font-size: 88%; /* 10÷16=62.5% */
        }
        @media screen and (max-width: 320px) {
            html {
                font-size: 88% !important; /* 14.08÷16=88% */
            }
        }
        @media screen and (min-width: 320px) and (max-width: 360px) {
            html {
                font-size: 100% !important; /* 16÷16=100% */
            }
        }
        @media screen and (min-width: 360px) and (max-width: 400px) {
            html {
                font-size: 100% !important; /* 16÷16=100% */
            }
        }
        @media screen and (min-width: 400px) and (max-width: 440px) {
            html {
                font-size: 100% !important; /* 18.08÷16=113% */
            }
        }
        @media screen and (min-width: 440px) and (max-width: 480px) {
            html {
                font-size: 125% !important; /* 20÷16=125% */
            }
        }
        @media screen and (min-width: 480px) and (max-width: 520px) {
            html {
                font-size: 138% !important; /* 22.08÷16=125% */
            }
        }
        @media screen and (min-width: 520px) and (max-width: 560px) {
            html {
                font-size: 150% !important; /* 24÷16=150% */
            }
        }
        @media screen and (min-width: 560px) and (max-width: 600px) {
            html {
                font-size: 163% !important; /* 26.08÷16=163% */
            }
        }
        @media screen and (min-width: 600px) {
            html {
                font-size: 100% !important; /* 28÷16=175% */
            }
        }
        #main{
            width: 750px;
            height: 1205px;
            overflow: hidden;
            position: absolute;
            left: 50%;
            margin-left: -375px;
            top: 50%;
            margin-top: -603px;
            font-size: 10px;
            background: url("/Public/images/bg.jpg") no-repeat;
            background-size: 100% 100%;
        }
        header{
            height: 300px;
            overflow: hidden;
            position: relative;
        }
        header .title-box{
            width: 580px;
            height: 267px;
            background: url("/Public/images/cloud1.png") no-repeat;
            background-size: 100% 100%;
            margin: 4% auto 0;
        }
        header .title-box img{
            width: 435px;
            height: 85px;
            margin: 94px 0 0 68px;
        }
        header .cloud2{
            width: 33px;
            height: 14px;
            position: absolute;
            left: 540px;
            top: 40px;
        }

        section{
            width: 100%;
            height: 635px;
            position: relative;
            margin-top: 45px;
        }
        section .intro{
            width: 580px;
            margin: 0 auto;
        }
        section .intro ul li{
            color: #fff;
            font-size: 1.4rem;
            line-height: 3em;
        }

        section .intro ul li.item img{
            vertical-align: middle;
            width: 59px;
            height: 59px;
            margin-right: 15px;
            display: inline-block;
        }

        section .explain{
            width:580px;
            margin: 70px auto;
            background: rgba(255,255,255,.2);
        }
        section .explain p{
            color: #fff;
            font-size: 1.4rem;
            line-height: 2em;
        }
        section .cloud3{
            position: absolute;
            top: -65px;
            left: 12px;
            width: 58px;
            height: 24px;
        }
        section .cloud4{
            position: absolute;
            top: 110px;
            right: 50px;
            width: 41px;
            height: 17px;
        }
        section .cloud5{
            position: absolute;
            top: 300px;
            left: 435px;
            width: 41px;
            height: 17px;
        }
        section .cloud6{
            position: absolute;
            top: 600px;
            left: 150px;
            width: 58px;
            height: 24px;
        }

        section .reg{
            width: 100%;
            text-align: center;
        }
        section .reg a{
            text-decoration: none;
            color: #fc5219;
            font-size: 1.4rem;
            padding: 10px 20px;
            background-color: #fff;
            border-radius: 5px;
        }
    </style>
</head>
<body>
<div id="main">
    <header>
        <div class="title-box">
            <img src="/Public/images/title.jpg" alt=""/>
        </div>
        <div class="cloud2">
            <img src="/Public/images/cloud2.png" alt=""/>
        </div>
    </header>
    <section>
        <div class="intro">
            <ul>
                <li class="item item1"><img src="/Public/images/item-list1.png" alt=""/>免费参加各类社交活动和产品路演等。</li>
                <li class="item item2"><img src="/Public/images/item-list2.png" alt=""/>免费上传简历,享有求职招聘等服务。</li>
                <li class="item item3"><img src="/Public/images/item-list3.png" alt=""/>免费上传名片到官网,获得更多的社交与合作机会。</li>
                <li class="item item4"><img src="/Public/images/item-list4.png" alt=""/>免费参加婚恋交友相亲活动。</li>
            </ul>
        </div>
        <div class="explain">
            <p>注：为了给会员提供精准的项目服务和私人定制化的个性用户体验，成功注册后的会员需通过实名认证。<br />根据会员提供的手机号、职位、公司名称等相关信息，我们的工作人员将在第一时间内予以认真核实，尽快辅助大家完成实名认证。
            </p>
        </div>
        <div class="reg">
            <a href="<?php echo U('Weixin/register_weixin_add');?>">立即注册</a>
        </div>
        <div class="cloud3">
            <img src="/Public/images/cloud3.png" alt=""/>
        </div>
        <div class="cloud4">
            <img src="/Public/images/cloud4.png" alt=""/>
        </div>
        <div class="cloud5">
            <img src="/Public/images/cloud5.png" alt=""/>
        </div>
        <div class="cloud6">
            <img src="/Public/images/cloud6.png" alt=""/>
        </div>
    </section>
</div>

<script type="text/javascript">
    var main = document.querySelector('#main');
    var winW = document.documentElement.clientWidth;
    var winH = document.documentElement.clientHeight;
    var desW = 750;
    var desH = 1205;
    if(winW/winH<desW/desH){
        main.style.webkitTransform = 'scale('+winH/desH+')';
    }else{
        main.style.webkitTransform = 'scale('+winW/desW+')';
    }
</script>
</body>
</html>