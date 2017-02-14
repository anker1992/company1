<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
<head lang="en">
    <meta charset="UTF-8">
    <meta name="keywords" content="北京投融资最佳机构,投融资权威机构,金融社交平台,投融资综合服务平台" />
    <meta name="description" content="微合伙是集金融社交、商务合作为一体的综合社交平台，通过“互联网+撮合”服务模式来增加融资成功概率，以解决投融资问题，同时整合项目方、资金方、资本机构的资源，形成融资产业链闭环。" />
    <meta http-equiv="X-UA-Compatible" content="IE=Edge">
    <title>微合伙文化传媒有限公司_微合伙科技有限公司_金融社交圈_金融趴官网_微合伙</title>
    <link rel="stylesheet" href="/Public/css/common.css"/>
    <link rel="stylesheet" href="/Public/css/financePage.css"/>

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
<div class="financePage-part1">
    <div class="container">
        <div class="financePage-part1-one">
            <ul>
                <li class="part1-right">
                    <a href="<?php echo U('Rongzi/financeList');?>">
                        <span>10000+</span><br />融资项目
                    </a>
                </li>
                <li>
                    <a href="<?php echo U('Rongzi/investorList');?>">
                        <span>2000+</span><br />优质投资人
                    </a>
                </li>
            </ul>
        </div>
        <div class="financePage-part1-two">
            <a class="part1-right" href="<?php echo U('Rongzi/investorList');?>">我是融资人</a>
            <a href="<?php echo U('Rongzi/financeList');?>">我是投资人</a>
        </div>
    </div>
</div>
<div class="financePage-part2">
    <div class="container">
        <ul class="clearfix">
            <li>
                <img src="/Public/images/financePage-part2-item01.png" alt=""/>
                <h4>大数据技术筛选匹配</h4>
                <p>在互联网技术支持下搭建标准化、平台化的一站式投融资服务平台，开启行业新模式。</p>
            </li>
            <li>
                <img src="/Public/images/financePage-part2-item02.png" alt=""/>
                <h4>互联网+撮合</h4>
                <p>整合项目方、资金方、资本机构的资源，形成融资产业链闭环。</p>
            </li>
            <li>
                <img src="/Public/images/financePage-part2-item03.png" alt=""/>
                <h4>资深财务顾问</h4>
                <p>主创人员系超过十年以上金融从业经历，具有丰富的投融资领域辅导经验的高知人士。</p>
            </li>
        </ul>
    </div>
</div>
<div class="financePage-part3">
    <div class="container clearfix">
        <div class="part3-left left">
            <img src="/Public/images/financePage-part3-banner1.jpg" alt=""/>
        </div>
        <div class="part3-right left">
            <div class="part3-right-top">
                <h3>2016亚太投资者峰会</h3>
                <p>北京国家会议中心(奥林匹克公园内)<br />
                    时间：10月1日8点至10月31日18点结束</p>
            </div>
            <div class="part3-right-bottom">
                <p>北京索菲特万达大饭店</p>
                <h3>2016国际资本峰会(ICC 2016)</h3>
                <p>地点：北京<br />
                   时间：2016-10-19 08:00:00<br />
                   至2016-10-20 18:00:00</p>
            </div>
        </div>
    </div>
</div>
<div class="financePage-part4">
    <div class="container">
        <h3>高效融资</h3>
        <p class="first"><span>•免费注册</span><span>•发布信息</span><span>•寻找资金</span><span>•约谈资金方</span><span>•融资成功</span></p>
        <ul class="clearfix">
            <li><p>20万<br />投资机构</p></li>
            <li><p>1000亿<br />融资金额</p></li>
            <li><p>35%<br />融资成功率 </p></li>
        </ul>
        <p class="second">债券融资<i></i>项目融资<i></i>股权融资<i></i>融资租赁<i></i>拓展融资渠道</p>
    </div>
</div>
<div class="financePage-part5">
    <div class="container">
        <h2>热点项目</h2>
        <div class="financePage-part5-con">
            <div class="outer">
                <div class="carousel" id="listBox">
                    <dl id="roll">
                        <dd>
                            <img src="/Public/images/financePage-part5-item01.jpg" alt=""/>
                            <h4>只二网络</h4>
                            <p class="intro">大学生技能服务交易平台。</p>
                            <p><span>浙江省</span><span>消费生活</span><span>不明</span></p>
                            <p><a href="javascript:;">查看项目详情</a></p>
                        </dd>
                        <dd>
                            <img src="/Public/images/financePage-part5-item02.jpg" alt=""/>
                            <h4>开客</h4>
                            <p class="intro">让任何人都能制作企业管理类APP</p>
                            <p><span>上海市</span><span>企业服务</span><span>B轮</span></p>
                            <p><a href="javascript:;">查看项目详情</a></p>
                        </dd>
                        <dd>
                            <img src="/Public/images/financePage-part5-item03.jpg" alt=""/>
                            <h4>家有健康</h4>
                            <p class="intro">如信科技旗下家有健身平台，专注于健身运动器材租赁服务。</p>
                            <p><span>北京市</span><span>医疗健康</span><span>未融资</span></p>
                            <p><a href="javascript:;">查看项目详情</a></p>
                        </dd>
                        <dd>
                            <img src="/Public/images/financePage-part5-item04.jpg" alt=""/>
                            <h4>掌窝工程机械</h4>
                            <p class="intro">工程机械配件领域的精准行业信息、产品信息以及交易平台。</p>
                            <p><span>广东省</span><span>电子商务</span><span>未融资</span></p>
                            <p><a href="javascript:;">查看项目详情</a></p>
                        </dd>
                        <dd>
                            <img src="/Public/images/financePage-part5-item05.jpg" alt=""/>
                            <h4>凡凡科技</h4>
                            <p class="intro">对接个人和企业过剩资源的共享平台。</p>
                            <p><span>上海市</span><span>消费生活</span><span>B+轮</span></p>
                            <p><a href="javascript:;">查看项目详情</a></p>
                        </dd>
                        <dd>
                            <img src="/Public/images/financePage-part5-item06.jpg" alt=""/>
                            <h4>多多海鲜网</h4>
                            <p class="intro">多多海鲜网致力于打造一个服务中 国餐饮企业的一站式采购平台。</p>
                            <p><span>河南省</span><span>电子商务</span><span>B+轮</span></p>
                            <p><a href="javascript:;">查看项目详情</a></p>
                        </dd>
                    </dl>
                </div>
                <div class="btn">
                    <span class="left" id="btnPrev"></span>
                    <span class="right" id="btnNext"></span>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="financePage-part6">
    <div class="container">
        <h2>活跃投资人</h2>
        <div class="part6-list1 clearfix">
            <ul>
                <li>
                    <img src="/Public/images/financePage-part6-item01.png" alt=""/>
                    <div class="part6-right">
                        <span>李总</span>
                        <p>金衡财富 项目总监</p>
                    </div>
                </li>
                <li class="last">
                    <img src="/Public/images/financePage-part6-item02.png" alt=""/>
                    <div class="part6-right">
                        <span>庄智翔</span>
                        <p>富赛金融，投资经理，专注商贸、旅游、地 产、煤炭能源、文化、服务等领域</p>
                    </div>
                </li>
                <li>
                    <img src="/Public/images/financePage-part6-item03.png" alt=""/>
                    <div class="part6-right">
                        <span>魏总</span>
                        <p>华宇国信 投资经理</p>
                    </div>
                </li>
                <li class="last">
                    <img src="/Public/images/financePage-part6-item04.png" alt=""/>
                    <div class="part6-right">
                        <span>Lisa</span>
                        <p>金创业投资 投资经理</p>
                    </div>
                </li>
            </ul>
        </div>
        <div class="part6-list2 clearfix hide">
            <ul>
                <li>
                    <img src="/Public/images/financePage-part6-item01.png" alt=""/>
                    <div class="part6-right">
                        <span>陈总</span>
                        <p>金三优服 北京区总经理</p>
                    </div>
                </li>
                <li class="last">
                    <img src="/Public/images/financePage-part6-item02.png" alt=""/>
                    <div class="part6-right">
                        <span>黄总</span>
                        <p>中商资本 北京区总经理</p>
                    </div>
                </li>
                <li>
                    <img src="/Public/images/financePage-part6-item03.png" alt=""/>
                    <div class="part6-right">
                        <span>刘总</span>
                        <p>老虎金融 客户经理</p>
                    </div>
                </li>
                <li class="last">
                    <img src="/Public/images/financePage-part6-item04.png" alt=""/>
                    <div class="part6-right">
                        <span>李总</span>
                        <p>太平洋证券 主投：大健康、大消费、高科技 、高端制造业、新能源等综合领域。</p>
                    </div>
                </li>
            </ul>
        </div>
        <p class="btn">
            <span class="cur"></span>
            <span></span>
        </p>
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
            console.log($(opts.tagName));
            _this.css({width: (l * w) + 'px'}); // 设置滚动层盒子的宽度
            return this.each(function(){
                _this.closest('.'+opts.boxName).hover(function(){
                    clearInterval(autoRollTimer);
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
            boxName : 'outer',
            tagName : 'dd',
            time : 3000,  //
            direction : 'left', // 滚动方向
            visual : 4 , //可视数
            prev : 'left',
            next : 'right',
            amount : 1   // 滚动数  默认是1
        };
    })(jQuery);

    $(document).ready(function(){
        $("#roll").parallelRoll({
            amount : 1
        });
    });

    /* $(function(){
         var oUl = $('.carousel ul');
         var oLis = $('.carousel ul li');
         var oLiWid = oLis.outerWidth(true);
         oUl.css("width",oLiWid*11);
         var timer;
         function move(i){
             timer = window.setInterval(function(){
                 i++;
                 if(i==7){
                     i=0;
                 }
                 oUl.css({
                     "left":-300*i
                 });
             },2000);
         }
         move(0);
     });*/
    $(function(){
        var oDivs = $('.financePage-part6 .container>div');
        var oSpans = $('.financePage-part6 .btn span');
        var index = 0;
        var timer;
        function move(cur){
            oSpans.eq(cur).addClass("cur").siblings().removeClass("cur");
            /*oDivs.eq(cur).removeClass('hide').siblings('div').addClass('hide');*/
            oDivs.eq(cur).fadeIn(1000).siblings('div').fadeOut(1000);
        }
        oSpans.click(function(){
            clearInterval(timer);
            index = $(this).index();
            move(index);
        });
        $('.financePage-part6 .container').hover(function(){
            clearInterval(timer);
        },function(){
            timer = window.setInterval(function(){
                index++;
                move(index);
                if(index==1){
                    index = -1;
                }
            },5000);
        }).trigger("mouseleave");

    });
</script>
</body>
</html>