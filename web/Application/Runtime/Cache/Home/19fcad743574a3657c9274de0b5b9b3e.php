<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
<head lang="en">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=Edge">
    <title>微合伙文化传媒有限公司_微合伙科技有限公司_金融社交圈_金融趴官网_微合伙</title>
    <link rel="stylesheet" href="/Public/css/common.css"/>
    <link rel="stylesheet" href="/Public/css/common2.css"/>
    <link rel="stylesheet" href="/Public/css/datingIndex.css"/>
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
            <li class="cur"><a href="<?php echo U('Dating/datingindex');?>">相亲首页</a></li>
            <li><a href="<?php echo U('Dating/datingexpand');?>">个人中心</a></li>
            <li><a href="<?php echo U('Dating/datingsearch');?>">搜索</a></li>
            <li><a href="javascript:;">线下活动</a></li>
            <li><a href="<?php echo U('Dating/datingcase');?>">情感视界</a></li>
        </ul>
    </div>
</div>
<!--nav1结束-->

<div class="datingIndex-top">
    <div class="container">
        <?php
 if (!isset($_COOKIE['think_user_name'])) {?>
        <div class="datingIndex-reg">
            <ul>
                <form action="<?php echo U('User/login_add'); ?>" method="post" id="myform">
                    <li><input type="text" class="phone" name="phone" title="请输入您的手机号码" placeholder="请输入您的手机号码"/></li>
                    <li><input type="password" class="pass" name="password" title="密码" placeholder="密码"/></li>
                    <li class="choose clearfix">
                        <label class="left autoReg"><i class=""></i><input type="checkbox" name="auto" class="auto" value="auto" />自动登录</label>
                        <div class="right">忘记密码?</div>
                    </li>
                    <li>
                        <input type="submit"  id="login" value="登录"/>
                    </li>
                </form>
            </ul>
        </div>
        <?php
 }?>
    </div>
</div>
<div class="datingIndex-part1">
    <div class="container">
        <h2>微合伙红娘服务</h2>
        <h4>遇见你最爱的人</h4>
        <div class="datingIndex-part1-con">
            <ul>
                <li>
                    <div class="datingIndex-part1-item01">
                        <h3>金融圈专属</h3>
                        <p>男士均为金融圈精英，女士多是高颜值气质美女。</p>
                    </div>
                </li>
                <li>
                    <div class="datingIndex-part1-item02">
                        <h3>一对一服务</h3>
                        <p>1对1贴心服务，红娘精准推荐，更有效地提升婚恋成功率。</p>
                    </div>
                </li>
                <li>
                    <div class="datingIndex-part1-item03">
                        <h3>聚会相亲趴</h3>
                        <p>定期为单身男女开启另一种相亲交友模式—旅游、聚会相亲。</p>
                    </div>
                </li>
                <li>
                    <div class="datingIndex-part1-item04">
                        <h3>100%真实会员</h3>
                        <p>会员均经过身份认证；签订用户协议，保障您的合法权益。</p>
                    </div>
                </li>

            </ul>
        </div>
    </div>
</div>
<!--<div class="datingIndex-part2">-->
    <!--<div class="container">-->
        <!--<form action="<?php echo U('Dating/search');?>" method="post">-->
        <!--<div class="vip">-->
            <!--<span>会员特权</span>-->
        <!--</div>-->
        <!--<div class="friend-outer">-->
            <!--<span class="mr15">我要找:</span>-->
            <!--<div class="friend-box common-box">-->
                <!--<div class="friend-con common-con">-->
                    <!--<input class="friend" type="text" name="sex"/>-->
                    <!--<i></i>-->
                <!--</div>-->
                <!--<div class="friend-list common-list">-->
                    <!--<a href="javascript:;" data-value="女友">女友</a>-->
                    <!--<a href="javascript:;" data-value="男友">男友</a>-->
                <!--</div>-->
            <!--</div>-->
        <!--</div>-->
        <!--<div class="age-outer">-->
            <!--<span class="mr15">年龄:</span>-->
            <!--<div class="age1-box common-box">-->
                <!--<div class="age1-con common-con">-->
                    <!--<input class="age1" type="text" name="agebegin"/>-->
                    <!--<i></i>-->
                <!--</div>-->
                <!--<div class="age1-list common-list">-->
                    <!--<a href="javascript:;" data-value="18岁">18岁</a>-->
                    <!--<a href="javascript:;" data-value="19岁">19岁</a>-->
                    <!--<a href="javascript:;" data-value="20岁">20岁</a>-->
                    <!--<a href="javascript:;" data-value="21岁">21岁</a>-->
                    <!--<a href="javascript:;" data-value="22岁">22岁</a>-->
                    <!--<a href="javascript:;" data-value="23岁">23岁</a>-->
                    <!--<a href="javascript:;" data-value="24岁">24岁</a>-->
                    <!--<a href="javascript:;" data-value="25岁">25岁</a>-->
                    <!--<a href="javascript:;" data-value="26岁">26岁</a>-->
                    <!--<a href="javascript:;" data-value="27岁">27岁</a>-->
                    <!--<a href="javascript:;" data-value="28岁">28岁</a>-->
                    <!--<a href="javascript:;" data-value="29岁">29岁</a>-->
                    <!--<a href="javascript:;" data-value="30岁">30岁</a>-->
                    <!--<a href="javascript:;" data-value="31岁">31岁</a>-->
                    <!--<a href="javascript:;" data-value="32岁">32岁</a>-->
                    <!--<a href="javascript:;" data-value="33岁">33岁</a>-->
                    <!--<a href="javascript:;" data-value="34岁">34岁</a>-->
                    <!--<a href="javascript:;" data-value="35岁">35岁</a>-->
                    <!--<a href="javascript:;" data-value="36岁">36岁</a>-->
                    <!--<a href="javascript:;" data-value="37岁">37岁</a>-->
                    <!--<a href="javascript:;" data-value="38岁">38岁</a>-->
                    <!--<a href="javascript:;" data-value="39岁">39岁</a>-->
                    <!--<a href="javascript:;" data-value="40岁">40岁</a>-->
                    <!--<a href="javascript:;" data-value="41岁">41岁</a>-->
                    <!--<a href="javascript:;" data-value="42岁">42岁</a>-->
                    <!--<a href="javascript:;" data-value="43岁">43岁</a>-->
                    <!--<a href="javascript:;" data-value="44岁">44岁</a>-->
                    <!--<a href="javascript:;" data-value="45岁">45岁</a>-->
                    <!--<a href="javascript:;" data-value="46岁">46岁</a>-->
                    <!--<a href="javascript:;" data-value="47岁">47岁</a>-->
                    <!--<a href="javascript:;" data-value="48岁">48岁</a>-->
                    <!--<a href="javascript:;" data-value="49岁">49岁</a>-->
                    <!--<a href="javascript:;" data-value="50岁">50岁</a>-->
                    <!--<a href="javascript:;" data-value="51岁">51岁</a>-->
                    <!--<a href="javascript:;" data-value="52岁">52岁</a>-->
                    <!--<a href="javascript:;" data-value="53岁">53岁</a>-->
                    <!--<a href="javascript:;" data-value="54岁">54岁</a>-->
                    <!--<a href="javascript:;" data-value="55岁">55岁</a>-->
                    <!--<a href="javascript:;" data-value="56岁">56岁</a>-->
                    <!--<a href="javascript:;" data-value="57岁">57岁</a>-->
                    <!--<a href="javascript:;" data-value="58岁">58岁</a>-->
                    <!--<a href="javascript:;" data-value="59岁">59岁</a>-->
                    <!--<a href="javascript:;" data-value="60岁">60岁</a>-->
                <!--</div>-->
            <!--</div>-->
            <!--<span class="mlr15">至</span>-->
            <!--<div class="age2-box common-box">-->
                <!--<div class="age2-con common-con">-->
                    <!--<input class="age2" type="text" name="ageend"/>-->
                    <!--<i></i>-->
                <!--</div>-->
                <!--<div class="age2-list common-list">-->
                    <!--<a href="javascript:;" data-value="18岁">18岁</a>-->
                    <!--<a href="javascript:;" data-value="19岁">19岁</a>-->
                    <!--<a href="javascript:;" data-value="20岁">20岁</a>-->
                    <!--<a href="javascript:;" data-value="21岁">21岁</a>-->
                    <!--<a href="javascript:;" data-value="22岁">22岁</a>-->
                    <!--<a href="javascript:;" data-value="23岁">23岁</a>-->
                    <!--<a href="javascript:;" data-value="24岁">24岁</a>-->
                    <!--<a href="javascript:;" data-value="25岁">25岁</a>-->
                    <!--<a href="javascript:;" data-value="26岁">26岁</a>-->
                    <!--<a href="javascript:;" data-value="27岁">27岁</a>-->
                    <!--<a href="javascript:;" data-value="28岁">28岁</a>-->
                    <!--<a href="javascript:;" data-value="29岁">29岁</a>-->
                    <!--<a href="javascript:;" data-value="30岁">30岁</a>-->
                    <!--<a href="javascript:;" data-value="31岁">31岁</a>-->
                    <!--<a href="javascript:;" data-value="32岁">32岁</a>-->
                    <!--<a href="javascript:;" data-value="33岁">33岁</a>-->
                    <!--<a href="javascript:;" data-value="34岁">34岁</a>-->
                    <!--<a href="javascript:;" data-value="35岁">35岁</a>-->
                    <!--<a href="javascript:;" data-value="36岁">36岁</a>-->
                    <!--<a href="javascript:;" data-value="37岁">37岁</a>-->
                    <!--<a href="javascript:;" data-value="38岁">38岁</a>-->
                    <!--<a href="javascript:;" data-value="39岁">39岁</a>-->
                    <!--<a href="javascript:;" data-value="40岁">40岁</a>-->
                    <!--<a href="javascript:;" data-value="41岁">41岁</a>-->
                    <!--<a href="javascript:;" data-value="42岁">42岁</a>-->
                    <!--<a href="javascript:;" data-value="43岁">43岁</a>-->
                    <!--<a href="javascript:;" data-value="44岁">44岁</a>-->
                    <!--<a href="javascript:;" data-value="45岁">45岁</a>-->
                    <!--<a href="javascript:;" data-value="46岁">46岁</a>-->
                    <!--<a href="javascript:;" data-value="47岁">47岁</a>-->
                    <!--<a href="javascript:;" data-value="48岁">48岁</a>-->
                    <!--<a href="javascript:;" data-value="49岁">49岁</a>-->
                    <!--<a href="javascript:;" data-value="50岁">50岁</a>-->
                    <!--<a href="javascript:;" data-value="51岁">51岁</a>-->
                    <!--<a href="javascript:;" data-value="52岁">52岁</a>-->
                    <!--<a href="javascript:;" data-value="53岁">53岁</a>-->
                    <!--<a href="javascript:;" data-value="54岁">54岁</a>-->
                    <!--<a href="javascript:;" data-value="55岁">55岁</a>-->
                    <!--<a href="javascript:;" data-value="56岁">56岁</a>-->
                    <!--<a href="javascript:;" data-value="57岁">57岁</a>-->
                    <!--<a href="javascript:;" data-value="58岁">58岁</a>-->
                    <!--<a href="javascript:;" data-value="59岁">59岁</a>-->
                    <!--<a href="javascript:;" data-value="60岁">60岁</a>-->
                <!--</div>-->
            <!--</div>-->
        <!--</div>-->
        <!--<div class="area-outer">-->
            <!--<span class="mr15">地区:</span>-->
            <!--<div class="area-box common-box">-->
                <!--<div class="area-con common-con">-->
                    <!--<input class="area" type="text" name="workarea"/>-->
                    <!--<i></i>-->
                <!--</div>-->
                <!--<div class="area-list common-list">-->
                    <!--<a href="javascript:;" data-value="北京市">北京市</a>-->
                    <!--<a href="javascript:;" data-value="上海市">上海市</a>-->
                    <!--<a href="javascript:;" data-value="广州市">广州市</a>-->
                    <!--<a href="javascript:;" data-value="深圳市">深圳市</a>-->
                    <!--<a href="javascript:;" data-value="杭州市">杭州市</a>-->
                    <!--<a href="javascript:;" data-value="成都市">成都市</a>-->
                    <!--<a href="javascript:;" data-value="西安市">西安市</a>-->
                    <!--<a href="javascript:;" data-value="南京市">南京市</a>-->
                    <!--<a href="javascript:;" data-value="厦门市">厦门市</a>-->
                    <!--<a href="javascript:;" data-value="武汉市">武汉市</a>-->
                <!--</div>-->
            <!--</div>-->
        <!--</div>-->
        <!--<div class="search"><input type="submit" value="搜索"></div>-->
        <!--</form>-->
    <!--</div>-->
<!--</div>-->
<div class="datingIndex-part3">
    <div class="container">
        <!-- <h2>用户</h2>-->
        <div class="tag">
            <!--<p>-->
                <!--<span>成熟稳重</span>-->
                <!--<span>事业男</span>-->
                <!--<span>玉树临风</span>-->
                <!--<span>运动男</span>-->
                <!--<span>小鲜肉</span>-->
            <!--</p>-->
            <!--<p>-->
                <!--<span>楚楚动人</span>-->
                <!--<span>清纯质朴</span>-->
                <!--<span>柔美曼妙</span>-->
                <!--<span>端庄优雅</span>-->
                <!--<span>娇媚</span>-->
                <!--<span>活泼</span>-->
                <!--<span>女汉子</span>-->
            <!--</p>-->
        </div>
        <div class="datingIndex-part3-con">
            <ul class="clearfix">
                <li class="one">
                    <a href="<?php echo U('Dating/datingintroduce',array('id'=>$first[0]['id']));?>"><img src="<?php echo ($first[0]['touxiang_src']); ?>" alt="" style="width:292px;height:365px"/>
                    <div class="shade"></div></a>
                </li>
                <li class="two">
                    <ol>
                        <?php if(is_array($second)): foreach($second as $key=>$second): ?><li><a href="<?php echo U('Dating/datingintroduce',array('id'=>$second['id']));?>"><img src="<?php echo ($second['touxiang_src']); ?>" alt="" style="width:143px;height:178px;"/><div class="shade"></div></a></li>
                        <!--<li><img src="/Public/images/datingIndex-part3-item02.jpg" alt=""/><div class="shade"></div></li>-->
                        <!--<li><img src="/Public/images/datingIndex-part3-item02.jpg" alt=""/><div class="shade"></div></li>-->
                        <!--<li><img src="/Public/images/datingIndex-part3-item02.jpg" alt=""/><div class="shade"></div></li>--><?php endforeach; endif; ?>
                    </ol>
                </li>
                <li class="one">
                    <a href="<?php echo U('Dating/datingintroduce',array('id'=>$third[0]['id']));?>"><img src="<?php echo ($third[0]['touxiang_src']); ?>" alt="" style="width:292px;height:365px"/>
                    <div class="shade"></div></a>
                </li>
                <li class="two">
                    <ol>
                        <?php if(is_array($fourth)): foreach($fourth as $key=>$fourth): ?><li><a href="<?php echo U('Dating/datingintroduce',array('id'=>$fourth['id']));?>"><img src="<?php echo ($fourth['touxiang_src']); ?>" alt="" style="width:143px;height:178px;"/><div class="shade"></div></a></li>
                        <!--<li><img src="/Public/images/datingIndex-part3-item02.jpg" alt=""/><div class="shade"></div></li>-->
                        <!--<li><img src="/Public/images/datingIndex-part3-item02.jpg" alt=""/><div class="shade"></div></li>-->
                        <!--<li><img src="/Public/images/datingIndex-part3-item02.jpg" alt=""/><div class="shade"></div></li>--><?php endforeach; endif; ?>
                    </ol>
                </li>
            </ul>
        </div>
    </div>
</div>
<div class="datingIndex-part4">
    <div class="container">
        <h2>成功故事</h2>
        <h3>缘分刚好，他们相爱啦</h3>
        <div class="datingIndex-part4-con clearfix">
            <div class="left first">
                <img src="/Public/images/datingIndex-part4-item01.jpg" alt=""/>
                <div class="shade"></div>
            </div>
            <div class="left second">
                <ul>
                    <li><img src="/Public/images/datingIndex-part4-item02.jpg" alt=""/><div class="shade"></div></li>
                    <li><img src="/Public/images/datingIndex-part4-item02.jpg" alt=""/><div class="shade"></div></li>
                    <li><img src="/Public/images/datingIndex-part4-item02.jpg" alt=""/><div class="shade"></div></li>
                    <li><img src="/Public/images/datingIndex-part4-item02.jpg" alt=""/><div class="shade"></div></li>
                    <li><img src="/Public/images/datingIndex-part4-item02.jpg" alt=""/><div class="shade"></div></li>
                    <li><img src="/Public/images/datingIndex-part4-item02.jpg" alt=""/><div class="shade"></div></li>
                </ul>
            </div>
        </div>
    </div>
</div>
<div class="datingIndex-part5">
    <div class="container">
        <h2>精彩活动回顾</h2>
        <h3>为爱情创造更多机会</h3>
        <div class="datingIndex-part5-con">
            <div class="part5-outer">
                <dl class="clearfix" id="roll">
                    <dt>
                        <img src="/Public/images/datingIndex-part5-item01.jpg" alt=""/>
                    <div>
                        <p>“情定初秋，相约未来” 微合伙金融社交舞会</p>
                    </div>
                    </dt>
                    <dt>
                        <img src="/Public/images/datingIndex-part5-item02.jpg" alt=""/>
                    <div>
                        <p>微合伙社交音乐汇精彩回顾</p>
                    </div>
                    </dt>
                    <dt>
                        <img src="/Public/images/datingIndex-part5-item03.jpg" alt=""/>
                    <div>
                        <p>微合伙卡丁车娱乐社交活动</p>
                    </div>
                    </dt>
                </dl>
            </div>
            <div class="btnLeft"></div>
            <div class="btnRight"></div>
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
        $(".datingIndex-part1 ul li div").hover(function(){
            $(this).css({
                backgroundSize:"120% 120%",
                backgroundPosition:"center center"
            },2000)
        },function(){
            $(this).css({
                backgroundSize:"100% 100%",
                backgroundPosition:"center center"
            },2000)
        }) ;
    });

    $(function(){
        $(".datingIndex-part3-con ul li").hover(function(){
            $(this).children("div").show();
        },function(){
            $(this).children("div").hide();
        });
    });
    $(function(){
        $(".first").hover(function(){
            $(this).find("div").hide();
            $(".second ul li").find("div").show();
        },function(){
            $(".second ul li").find("div").hide();
        });
        $(".datingIndex-part4-con ul li").hover(function(){
            $(this).find("div").hide().parent().siblings().find("div").show();
            $(".first div").show();
        },function(){
            $(this).siblings().find("div").hide();
            $(".first div").hide();
        });
    });

    $(function(){
        $(".choose input").click(function(){
            if($(this).attr('checked')=='checked'){
                $(this).parent().find("i").removeClass("cur");
                $(this).removeAttr("checked");
            }else{
                $(this).parent().find("i").addClass("cur");
                $(this).attr('checked','checked');
            }
        });
    });

    $(function(){
        selectBox(".friend-con");
        selectBox(".age1-con");
        selectBox(".age2-con");
        selectBox(".area-con");
        function selectBox(box){
            $(box).find('input').focusin(function(){
                $(box).next().show();
            }).focusout(function(){
                setTimeout(function(){
                    $(box).next().hide();
                },200)
            });
        }
    });
    $(function(){
        selectItem(".friend-box");
        selectItem(".area-box");
        selectItem(".age1-box");
        selectItem(".age2-box");
        function selectItem(box){
            $(box).find("a").click(function(){
                $(this).parent().css("display","none");
                $(box).find("input").val($(this).attr("data-value"));
            })
        }

    });

    $(".tag span").click(function(){
        $(this).toggleClass("cur");
    });

    (function($){
        $.fn.parallelRoll = function(options){
            var opts = $.extend({}, $.fn.parallelRoll.defaults, options);
            var _this = this;
            var l = _this.find(opts.tagName).length;
            var autoRollTimer;
            var flag = true; // 防止用户快速多次点击上下按钮
            var arr = new Array();
            /**
             * 如果当  (可视个数+滚动个数 >滚动元素个数)  时  为不出现空白停顿   将滚动元素再赋值一次
             * 同时赋值以后的滚动元素个数是之前的两倍  2 * l.
             * */
            if(opts.amount + opts.visual > l){
                _this[0].innerHTML += _this[0].innerHTML;
                l = 2 * l;
            }else{
                l = l;
            }
            var w = $(opts.tagName).outerWidth(true); //计算元素的宽度  包括补白+边框
            //console.log($(opts.tagName));
            _this.css({width: (l * w) + 'px'}); // 设置滚动层盒子的宽度
            return this.each(function(){
                _this.closest('.'+opts.boxName).hover(function(){
                    clearInterval(autoRollTimer);
                    $('.part5-outer dl dt').hover(function(){
                        $(this).find("div").animate({
                            bottom:0
                        },100).parents("dt").siblings().find("div").animate({
                            bottom:-50
                        },100);
                    },function(){
                        $(this).find("div").animate({
                            bottom:-50
                        },100);
                    })
                },function(){
                    switch (opts.direction){
                        case 'left':
                            autoRollTimer = setInterval(function(){
                                left();
                            },opts.time);
                            break;
                        case 'right':
                            autoRollTimer = setInterval(function(){
                                right();
                            },opts.time);
                            break;
                        default :
                            alert('参数错误！');
                            break;
                    }
                }).trigger('mouseleave');
                $('.'+opts.prev).on('click',function(){
                    flag ? left() : "";
                });
                $('.'+opts.next).on('click',function(){
                    flag ? right() : "";
                });
            });

            function left(){
                flag = false;
                _this.animate({marginLeft : -(w*opts.amount)},1000,function(){
                    _this.find(opts.tagName).slice(0,opts.amount).appendTo(_this);
                    _this.css({marginLeft:0});
                    flag = true;
                });
            };
            function right(){
                flag = false;
                arr = _this.find(opts.tagName).slice(-opts.amount);
                for(var i = 0; i<opts.amount; i++){
                    $(arr[i]).css({marginLeft : -w*(i+1)}).prependTo(_this);
                }
                _this.animate({marginLeft : w*opts.amount},1000,function(){
                    _this.find(opts.tagName).removeAttr('style');
                    _this.css({marginLeft:0});
                    flag = true;
                });
            };
        };
        //插件默认选项
        $.fn.parallelRoll.defaults = {
            boxName : 'datingIndex-part5-con',
            tagName : 'dt',
            time : 2000,  //
            direction : 'left', // 滚动方向
            visual : 3 , //可视数
            prev : 'btnLeft',
            next : 'btnRight',
            amount : 1   // 滚动数  默认是1
        };
    })(jQuery);
    $(document).ready(function(){
        $("#roll").parallelRoll({
            amount : 1
        });
    });


</script>
</body>
</html>