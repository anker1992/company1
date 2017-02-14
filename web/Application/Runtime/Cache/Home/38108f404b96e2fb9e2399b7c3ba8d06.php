<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
<head lang="en">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=Edge">
    <title>微合伙文化传媒有限公司_微合伙科技有限公司_金融社交圈_金融趴官网_微合伙</title>
    <link rel="stylesheet" href="/Public/css/common.css"/>
    <link rel="stylesheet" href="/Public/css/common2.css"/>
    <link rel="stylesheet" href="/Public/css/datingCase.css"/>
</head>
<body>



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


<!--nav1开始-->
<div class="nav1">
    <div class="container">
        <ul class="clearfix">
            <li><a href="<?php echo U('Dating/datingindex');?>">相亲首页</a></li>
            <li><a href="<?php echo U('Dating/datingexpand');?>">个人中心</a></li>
            <li><a href="<?php echo U('Dating/datingsearch');?>">搜索</a></li>
            <li><a href="javascript:;">线下活动</a></li>
            <li class="cur"><a href="<?php echo U('Dating/datingcase');?>">情感视界</a></li>
        </ul>
    </div>
</div>
<!--nav1结束-->

<div class="datingCase-top">
    <span>
        <!--[if lt IE 9]>
        <img src="/Public/images/datingCase-top.jpg" alt=""/>
        <![endif]-->
    </span>
</div>

<div class="datingCase-con">
    <div class="container">
        <div class="list-outer clearfix">
            <ul>
                <li>
                    <a href="javascript:;">
                        <h4>昵称</h4>
                        <div class="info clearfix">
                            <p class="time left">发布时间: <span>2016/11/1</span></p>
                            <p class="state right">会员状态: <span>我们结婚了</span></p>
                        </div>
                        <div class="img">
                            <img src="/Public/images/datingCase-item01.jpg" alt=""/>
                        </div>
                        <div class="des">
                            <p>我喜欢尝试各种新鲜事物，甚至通过珍爱网的红娘来找对象，也是一次新鲜的尝试。对待感情我也不是懵懂的小女孩，也谈过，更明白没有任何人是完美的。</p>
                        </div>
                    </a>
                </li>
                <li>
                    <a href="javascript:;">
                        <h4>昵称</h4>
                        <div class="info clearfix">
                            <p class="time left">发布时间: <span>2016/11/1</span></p>
                            <p class="state right">会员状态: <span>我们结婚了</span></p>
                        </div>
                        <div class="img">
                            <img src="/Public/images/datingCase-item01.jpg" alt=""/>
                        </div>
                        <div class="des">
                            <p>我喜欢尝试各种新鲜事物，甚至通过珍爱网的红娘来找对象，也是一次新鲜的尝试。对待感情我也不是懵懂的小女孩，也谈过，更明白没有任何人是完美的。</p>
                        </div>
                    </a>
                </li>
                <li>
                    <a href="javascript:;">
                        <h4>昵称</h4>
                        <div class="info clearfix">
                            <p class="time left">发布时间: <span>2016/11/1</span></p>
                            <p class="state right">会员状态: <span>我们结婚了</span></p>
                        </div>
                        <div class="img">
                            <img src="/Public/images/datingCase-item01.jpg" alt=""/>
                        </div>
                        <div class="des">
                            <p>我喜欢尝试各种新鲜事物，甚至通过珍爱网的红娘来找对象，也是一次新鲜的尝试。对待感情我也不是懵懂的小女孩，也谈过，更明白没有任何人是完美的。</p>
                        </div>
                    </a>
                </li>
                <li>
                    <a href="javascript:;">
                        <h4>昵称</h4>
                        <div class="info clearfix">
                            <p class="time left">发布时间: <span>2016/11/1</span></p>
                            <p class="state right">会员状态: <span>我们结婚了</span></p>
                        </div>
                        <div class="img">
                            <img src="/Public/images/datingCase-item01.jpg" alt=""/>
                        </div>
                        <div class="des">
                            <p>我喜欢尝试各种新鲜事物，甚至通过珍爱网的红娘来找对象，也是一次新鲜的尝试。对待感情我也不是懵懂的小女孩，也谈过，更明白没有任何人是完美的。</p>
                        </div>
                    </a>
                </li>

                <li>
                    <a href="javascript:;">
                        <h4>昵称</h4>
                        <div class="info clearfix">
                            <p class="time left">发布时间: <span>2016/11/1</span></p>
                            <p class="state right">会员状态: <span>我们结婚了</span></p>
                        </div>
                        <div class="img">
                            <img src="/Public/images/datingCase-item01.jpg" alt=""/>
                        </div>
                        <div class="des">
                            <p>我喜欢尝试各种新鲜事物，甚至通过珍爱网的红娘来找对象，也是一次新鲜的尝试。对待感情我也不是懵懂的小女孩，也谈过，更明白没有任何人是完美的。</p>
                        </div>
                    </a>
                </li>
                <li>
                    <a href="javascript:;">
                        <h4>昵称</h4>
                        <div class="info clearfix">
                            <p class="time left">发布时间: <span>2016/11/1</span></p>
                            <p class="state right">会员状态: <span>我们结婚了</span></p>
                        </div>
                        <div class="img">
                            <img src="/Public/images/datingCase-item01.jpg" alt=""/>
                        </div>
                        <div class="des">
                            <p>我喜欢尝试各种新鲜事物，甚至通过珍爱网的红娘来找对象，也是一次新鲜的尝试。对待感情我也不是懵懂的小女孩，也谈过，更明白没有任何人是完美的。</p>
                        </div>
                    </a>
                </li>
                <li>
                    <a href="javascript:;">
                        <h4>昵称</h4>
                        <div class="info clearfix">
                            <p class="time left">发布时间: <span>2016/11/1</span></p>
                            <p class="state right">会员状态: <span>我们结婚了</span></p>
                        </div>
                        <div class="img">
                            <img src="/Public/images/datingCase-item01.jpg" alt=""/>
                        </div>
                        <div class="des">
                            <p>我喜欢尝试各种新鲜事物，甚至通过珍爱网的红娘来找对象，也是一次新鲜的尝试。对待感情我也不是懵懂的小女孩，也谈过，更明白没有任何人是完美的。</p>
                        </div>
                    </a>
                </li>
                <li>
                    <a href="javascript:;">
                        <h4>昵称</h4>
                        <div class="info clearfix">
                            <p class="time left">发布时间: <span>2016/11/1</span></p>
                            <p class="state right">会员状态: <span>我们结婚了</span></p>
                        </div>
                        <div class="img">
                            <img src="/Public/images/datingCase-item01.jpg" alt=""/>
                        </div>
                        <div class="des">
                            <p>我喜欢尝试各种新鲜事物，甚至通过珍爱网的红娘来找对象，也是一次新鲜的尝试。对待感情我也不是懵懂的小女孩，也谈过，更明白没有任何人是完美的。</p>
                        </div>
                    </a>
                </li>

                <li>
                    <a href="javascript:;">
                        <h4>昵称</h4>
                        <div class="info clearfix">
                            <p class="time left">发布时间: <span>2016/11/1</span></p>
                            <p class="state right">会员状态: <span>我们结婚了</span></p>
                        </div>
                        <div class="img">
                            <img src="/Public/images/datingCase-item01.jpg" alt=""/>
                        </div>
                        <div class="des">
                            <p>我喜欢尝试各种新鲜事物，甚至通过珍爱网的红娘来找对象，也是一次新鲜的尝试。对待感情我也不是懵懂的小女孩，也谈过，更明白没有任何人是完美的。</p>
                        </div>
                    </a>
                </li>
                <li>
                    <a href="javascript:;">
                        <h4>昵称</h4>
                        <div class="info clearfix">
                            <p class="time left">发布时间: <span>2016/11/1</span></p>
                            <p class="state right">会员状态: <span>我们结婚了</span></p>
                        </div>
                        <div class="img">
                            <img src="/Public/images/datingCase-item01.jpg" alt=""/>
                        </div>
                        <div class="des">
                            <p>我喜欢尝试各种新鲜事物，甚至通过珍爱网的红娘来找对象，也是一次新鲜的尝试。对待感情我也不是懵懂的小女孩，也谈过，更明白没有任何人是完美的。</p>
                        </div>
                    </a>
                </li>
                <li>
                    <a href="javascript:;">
                        <h4>昵称</h4>
                        <div class="info clearfix">
                            <p class="time left">发布时间: <span>2016/11/1</span></p>
                            <p class="state right">会员状态: <span>我们结婚了</span></p>
                        </div>
                        <div class="img">
                            <img src="/Public/images/datingCase-item01.jpg" alt=""/>
                        </div>
                        <div class="des">
                            <p>我喜欢尝试各种新鲜事物，甚至通过珍爱网的红娘来找对象，也是一次新鲜的尝试。对待感情我也不是懵懂的小女孩，也谈过，更明白没有任何人是完美的。</p>
                        </div>
                    </a>
                </li>
                <li>
                    <a href="javascript:;">
                        <h4>昵称</h4>
                        <div class="info clearfix">
                            <p class="time left">发布时间: <span>2016/11/1</span></p>
                            <p class="state right">会员状态: <span>我们结婚了</span></p>
                        </div>
                        <div class="img">
                            <img src="/Public/images/datingCase-item01.jpg" alt=""/>
                        </div>
                        <div class="des">
                            <p>我喜欢尝试各种新鲜事物，甚至通过珍爱网的红娘来找对象，也是一次新鲜的尝试。对待感情我也不是懵懂的小女孩，也谈过，更明白没有任何人是完美的。</p>
                        </div>
                    </a>
                </li>

                <li>
                    <a href="javascript:;">
                        <h4>昵称</h4>
                        <div class="info clearfix">
                            <p class="time left">发布时间: <span>2016/11/1</span></p>
                            <p class="state right">会员状态: <span>我们结婚了</span></p>
                        </div>
                        <div class="img">
                            <img src="/Public/images/datingCase-item01.jpg" alt=""/>
                        </div>
                        <div class="des">
                            <p>我喜欢尝试各种新鲜事物，甚至通过珍爱网的红娘来找对象，也是一次新鲜的尝试。对待感情我也不是懵懂的小女孩，也谈过，更明白没有任何人是完美的。</p>
                        </div>
                    </a>
                </li>
                <li>
                    <a href="javascript:;">
                        <h4>昵称</h4>
                        <div class="info clearfix">
                            <p class="time left">发布时间: <span>2016/11/1</span></p>
                            <p class="state right">会员状态: <span>我们结婚了</span></p>
                        </div>
                        <div class="img">
                            <img src="/Public/images/datingCase-item01.jpg" alt=""/>
                        </div>
                        <div class="des">
                            <p>我喜欢尝试各种新鲜事物，甚至通过珍爱网的红娘来找对象，也是一次新鲜的尝试。对待感情我也不是懵懂的小女孩，也谈过，更明白没有任何人是完美的。</p>
                        </div>
                    </a>
                </li>
                <li>
                    <a href="javascript:;">
                        <h4>昵称</h4>
                        <div class="info clearfix">
                            <p class="time left">发布时间: <span>2016/11/1</span></p>
                            <p class="state right">会员状态: <span>我们结婚了</span></p>
                        </div>
                        <div class="img">
                            <img src="/Public/images/datingCase-item01.jpg" alt=""/>
                        </div>
                        <div class="des">
                            <p>我喜欢尝试各种新鲜事物，甚至通过珍爱网的红娘来找对象，也是一次新鲜的尝试。对待感情我也不是懵懂的小女孩，也谈过，更明白没有任何人是完美的。</p>
                        </div>
                    </a>
                </li>
                <li>
                    <a href="javascript:;">
                        <h4>昵称</h4>
                        <div class="info clearfix">
                            <p class="time left">发布时间: <span>2016/11/1</span></p>
                            <p class="state right">会员状态: <span>我们结婚了</span></p>
                        </div>
                        <div class="img">
                            <img src="/Public/images/datingCase-item01.jpg" alt=""/>
                        </div>
                        <div class="des">
                            <p>我喜欢尝试各种新鲜事物，甚至通过珍爱网的红娘来找对象，也是一次新鲜的尝试。对待感情我也不是懵懂的小女孩，也谈过，更明白没有任何人是完美的。</p>
                        </div>
                    </a>
                </li>

                <li>
                    <a href="javascript:;">
                        <h4>昵称</h4>
                        <div class="info clearfix">
                            <p class="time left">发布时间: <span>2016/11/1</span></p>
                            <p class="state right">会员状态: <span>我们结婚了</span></p>
                        </div>
                        <div class="img">
                            <img src="/Public/images/datingCase-item01.jpg" alt=""/>
                        </div>
                        <div class="des">
                            <p>我喜欢尝试各种新鲜事物，甚至通过珍爱网的红娘来找对象，也是一次新鲜的尝试。对待感情我也不是懵懂的小女孩，也谈过，更明白没有任何人是完美的。</p>
                        </div>
                    </a>
                </li>
                <li>
                    <a href="javascript:;">
                        <h4>昵称</h4>
                        <div class="info clearfix">
                            <p class="time left">发布时间: <span>2016/11/1</span></p>
                            <p class="state right">会员状态: <span>我们结婚了</span></p>
                        </div>
                        <div class="img">
                            <img src="/Public/images/datingCase-item01.jpg" alt=""/>
                        </div>
                        <div class="des">
                            <p>我喜欢尝试各种新鲜事物，甚至通过珍爱网的红娘来找对象，也是一次新鲜的尝试。对待感情我也不是懵懂的小女孩，也谈过，更明白没有任何人是完美的。</p>
                        </div>
                    </a>
                </li>
                <li>
                    <a href="javascript:;">
                        <h4>昵称</h4>
                        <div class="info clearfix">
                            <p class="time left">发布时间: <span>2016/11/1</span></p>
                            <p class="state right">会员状态: <span>我们结婚了</span></p>
                        </div>
                        <div class="img">
                            <img src="/Public/images/datingCase-item01.jpg" alt=""/>
                        </div>
                        <div class="des">
                            <p>我喜欢尝试各种新鲜事物，甚至通过珍爱网的红娘来找对象，也是一次新鲜的尝试。对待感情我也不是懵懂的小女孩，也谈过，更明白没有任何人是完美的。</p>
                        </div>
                    </a>
                </li>
                <li>
                    <a href="javascript:;">
                        <h4>昵称</h4>
                        <div class="info clearfix">
                            <p class="time left">发布时间: <span>2016/11/1</span></p>
                            <p class="state right">会员状态: <span>我们结婚了</span></p>
                        </div>
                        <div class="img">
                            <img src="/Public/images/datingCase-item01.jpg" alt=""/>
                        </div>
                        <div class="des">
                            <p>我喜欢尝试各种新鲜事物，甚至通过珍爱网的红娘来找对象，也是一次新鲜的尝试。对待感情我也不是懵懂的小女孩，也谈过，更明白没有任何人是完美的。</p>
                        </div>
                    </a>
                </li>

            </ul>
        </div>

        <div class="paging-list">
            <a class="first" href="javascript:;">首页</a>
            <a class="prev" href="javascript:;">上一页</a>
            <ul>
                <li class="cur">1</li>
                <li>2</li>
                <li>3</li>
                <li>4</li>
                <li>5</li>
            </ul>
            <a class="next" href="javascript:;">下一页</a>
            <a class="last" href="javascript:;">最后一页</a>
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
        $('.nav-right ul li').hover(function(){
            if($(this).find('ol').size()!==0){
                $(this).find("ol").css({
                    display:"block"
                })
            }
        },function(){
            if($(this).find("ol").size()!==0){
                $(this).find("ol").css({
                    display:"none"
                })
            }
        })
    });

    $(function(){
        $(".list-outer ul li").hover(function(){
            $(this).find("img").animate({
                width:"280px",
                height:"180px"
            },500).parents("li").siblings().find("img").stop(true).css({
                width:"253px",
                height:"169px"
            });
        },function(){
            $(this).find("img").animate({
                width:"253px",
                height:"169px"
            },500)
        });
    });


    $(function(){
        var num = $('.paging-list ul li.cur').text();
        var oLi = $('.paging-list ul li');
        var len = oLi.length;
        $('.prev').css({ display:'none'});
        oLi.click(function(){
            $(this).addClass('cur').siblings().removeClass('cur');
            num = $('.paging-list ul li.cur').text();
            if(num == 1){
                $('.prev').css({ display:'none'});
                $('.next').css({ display:'inline-block'});
            }else if(num == len){
                $('.next').css({ display:'none'});
                $('.prev').css({ display:'inline-block'});
            }else{
                $('.prev').css({ display:'inline-block'});
                $('.next').css({ display:'inline-block'});
            }
        });
        $('.first').click(function(){
            $(this).addClass('cur').siblings().removeClass('cur');
            $('.prev').css({ display:'none'});
            $('.next').css({ display:'inline-block'});
            num = 1;
            oLi.eq(num-1).addClass('cur').siblings().removeClass('cur')
        });
        $('.last').click(function(){
            $(this).addClass('cur').siblings().removeClass('cur');
            $('.next').css({ display:'none'});
            $('.prev').css({ display:'inline-block'});
            num = 5;
            oLi.eq(num-1).addClass('cur').siblings().removeClass('cur');
        });
        $('.prev').click(function(){
            if(num<2){
                $('.first').addClass('cur');
                $('.prev').css({ display:'none'});
                $('.next').css({ display:'inline-block'});
                oLi.eq(0).addClass('cur').siblings().removeClass('cur');
                return;
            }else{
                num--;
                $('.prev').css({ display:'inline-block'});
                $('.next').css({ display:'inline-block'});
                oLi.eq(num).addClass('cur').siblings().removeClass('cur');
            }
        });
        $('.next').click(function(){
            if(num>len-1){
                $('.last').addClass('cur');
                $('.next').css({ display:'none'});
                $('.prev').css({ display:'inline-block'});
                oLi.eq(len).addClass('cur').siblings().removeClass('cur');
                return;
            }else{
                $('.prev').css({ display:'inline-block'});
                $('.next').css({ display:'inline-block'});
                oLi.eq(num).addClass('cur').siblings().removeClass('cur');
                num++;
            }
        })
    });
</script>

</body>
</html>