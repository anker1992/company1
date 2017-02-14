<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
<head lang="en">
    <meta charset="UTF-8">
    <meta name="keywords" content="北京投融资最佳机构,投融资权威机构,金融社交平台,投融资综合服务平台" />
    <meta name="description" content="微合伙是集金融社交、商务合作为一体的综合社交平台，通过“互联网+撮合”服务模式来增加融资成功概率，以解决投融资问题，同时整合项目方、资金方、资本机构的资源，形成融资产业链闭环。" />
    <meta http-equiv="X-UA-Compatible" content="IE=Edge">
    <title>微合伙文化传媒有限公司_微合伙科技有限公司_金融社交圈_金融趴官网_微合伙</title>
    <link rel="stylesheet" href="/Public/css/common.css"/>
    <link rel="stylesheet" href="/Public/css/financeList.css"/>

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
<div class="financeList-content">
    <div class="container">
        <div class="financeList-nav">
            <h2>融资中</h2>
            <ul>
                <li class="clearfix">
                    <div class="nav-left">
                        <span>行业:</span>
                        <a class="cur" href="javascript:;">全部</a>
                    </div>
                    <div class="nav-right">
                        <a href="javascript:;">电子商务</a>
                        <a href="javascript:;">社交网络</a>
                        <a href="javascript:;">智能硬件</a>
                        <a href="javascript:;">媒体门户</a>
                        <a href="javascript:;">工具软件</a>
                        <a href="javascript:;">消费生活</a>
                        <a href="javascript:;">金融</a>
                        <a href="javascript:;">医疗健康</a>
                        <a href="javascript:;">企业服务</a>
                        <a href="javascript:;">旅游户外</a>
                        <a href="javascript:;">房产家居</a>
                        <a href="javascript:;">数字娱乐</a>
                        <a href="javascript:;">在线教育</a>
                        <a href="javascript:;">汽车交通</a>
                        <a href="javascript:;">其他</a>
                        <a href="javascript:;">物流</a>
                    </div>
                </li>
                <li class="clearfix">
                    <div class="nav-left">
                        <span>融资阶段:</span>
                        <a class="cur" href="javascript:;">全部</a>
                    </div>
                    <div class="nav-right">
                        <a href="javascript:;">种子轮</a>
                        <a href="javascript:;">天使轮</a>
                        <a href="javascript:;">Pre-A轮</a>
                        <a href="javascript:;">A轮</a>
                        <a href="javascript:;">A+轮</a>
                        <a href="javascript:;">B轮</a>
                        <a href="javascript:;">B+轮</a>
                        <a href="javascript:;">C轮</a>
                        <a href="javascript:;">C+轮</a>
                        <a href="javascript:;">D轮</a>
                        <a href="javascript:;">E轮</a>
                        <a href="javascript:;">F轮</a>
                        <a href="javascript:;">G轮</a>
                        <a href="javascript:;">IPO上市及以后并购</a>
                        <a href="javascript:;">战略投资</a>
                        <a href="javascript:;">未透露</a>
                        <a href="javascript:;">未融资</a>
                    </div>
                </li>
                <li class="clearfix last">
                    <div class="nav-left">
                        <span>所在地:</span>
                        <a class="cur" href="javascript:;">全部</a>
                    </div>
                    <div class="nav-right location">
                        <p>
                            <a href="javascript:;">北京市</a>
                            <a href="javascript:;">上海市</a>
                            <a href="javascript:;">深圳市</a>
                            <a href="javascript:;">广州市</a>
                            <a href="javascript:;">杭州市</a>
                            <a href="javascript:;">成都市</a>
                            <a href="javascript:;">天津市</a>
                            <a href="javascript:;">海外</a>
                            <span class="more"></span>
                        </p>
                        <p>
                            <a href="javascript:;">重庆市</a>
                            <a href="javascript:;">安徽省</a>
                            <a href="javascript:;">澳门</a>
                            <a href="javascript:;">福建省</a>
                            <a href="javascript:;">甘肃省</a>
                            <a href="javascript:;">广东省</a>
                            <a href="javascript:;">广西省</a>
                            <a href="javascript:;">贵州省</a>
                        </p>
                        <p>
                            <a href="javascript:;">海南省</a>
                            <a href="javascript:;">河北省</a>
                            <a href="javascript:;">河南省</a>
                            <a href="javascript:;">黑龙江省</a>
                            <a href="javascript:;">湖北省</a>
                            <a href="javascript:;">湖南省</a>
                            <a href="javascript:;">吉林省</a>
                            <a href="javascript:;">江苏省</a>
                        </p>
                        <p>
                            <a href="javascript:;">江西省</a>
                            <a href="javascript:;">辽宁省</a>
                            <a href="javascript:;">内蒙古</a>
                            <a href="javascript:;">宁夏</a>
                            <a href="javascript:;">青海省</a>
                            <a href="javascript:;">山东省</a>
                            <a href="javascript:;">山西省</a>
                            <a href="javascript:;">陕西省</a>
                        </p>
                        <p>
                            <a href="javascript:;">四川省</a>
                            <a href="javascript:;">台湾省</a>
                            <a href="javascript:;">西藏</a>
                            <a href="javascript:;">香港</a>
                            <a href="javascript:;">新疆</a>
                            <a href="javascript:;">云南省</a>
                            <a href="javascript:;">浙江省</a>
                        </p>
                    </div>
                </li>
            </ul>
        </div>
        <div class="financeList-list">
            <table>
                <thead>
                    <tr>
                        <th class="w495">公司</th>
                        <th class="w140">创始人</th>
                        <th class="w140">行业</th>
                        <th class="w150">所在地</th>
                        <th class="w245">本轮融资</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td class="first">
                            <img src="/Public/images/financeList-list01.jpg" alt=""/>
                            <div>
                                <h4>开客</h4>
                                <p>让任何人都能制作企业管理类APP</p>
                            </div>
                        </td>
                        <td>-----</td>
                        <td>企业服务</td>
                        <td>上海市</td>
                        <td>B轮</td>
                    </tr>
                    <tr>
                        <td class="first">
                            <img src="/Public/images/financeList-list02.jpg" alt=""/>
                            <div>
                                <h4>掌窝工程机械 </h4>
                                <p>工程机械配件领域的精准行业信息、产品信息以及交易平台。</p>
                            </div>
                        </td>
                        <td>-----</td>
                        <td>电子商务</td>
                        <td>广东省</td>
                        <td>未融资</td>
                    </tr>
                    <tr>
                        <td class="first">
                            <img src="/Public/images/financeList-list03.jpg" alt=""/>
                            <div>
                                <h4>多多海鲜网</h4>
                                <p>多多海鲜网致力于打造一个服务中国餐饮企业的一站式采购平台</p>
                            </div>
                        </td>
                        <td>-----</td>
                        <td>电子商务</td>
                        <td>河南省</td>
                        <td>B+轮</td>
                    </tr>
                    <tr>
                        <td class="first">
                            <img src="/Public/images/financeList-list04.jpg" alt=""/>
                            <div>
                                <h4>只二网络 </h4>
                                <p>大学生技能服务交易平台。</p>
                            </div>
                        </td>
                        <td>-----</td>
                        <td>消费生活</td>
                        <td>浙江省</td>
                        <td>A轮</td>
                    </tr>
                    <tr>
                        <td class="first">
                            <img src="/Public/images/financeList-list05.jpg" alt=""/>
                            <div>
                                <h4>家有健身 </h4>
                                <p>如信科技旗下家有健身平台，专注于健身运动器材租赁服务。</p>
                            </div>
                        </td>
                        <td>-----</td>
                        <td>医疗健康</td>
                        <td>北京市</td>
                        <td>未融资</td>
                    </tr>
                    <tr>
                        <td class="first">
                            <img src="/Public/images/financeList-list06.jpg" alt=""/>
                            <div>
                                <h4>凡凡科技 </h4>
                                <p>对接个人和企业过剩资源的共享平台</p>
                            </div>
                        </td>
                        <td>-----</td>
                        <td>电子商务</td>
                        <td>上海市</td>
                        <td>B+轮</td>
                    </tr>
                    <tr>
                        <td class="first">
                            <img src="/Public/images/financeList-list07.jpg" alt=""/>
                            <div>
                                <h4>铁皮停车 </h4>
                                <p>智慧引导，共享停车</p>
                            </div>
                        </td>
                        <td>-----</td>
                        <td>汽车交通</td>
                        <td>重庆市</td>
                        <td>未融资</td>
                    </tr>
                    <tr>
                        <td class="first">
                            <img src="/Public/images/financeList-list08.jpg" alt=""/>
                            <div>
                                <h4>医联康 </h4>
                                <p>医联康为最基层医生和病患提供便捷高效的远程医疗服务。</p>
                            </div>
                        </td>
                        <td>-----</td>
                        <td>医疗健康</td>
                        <td>北京市</td>
                        <td>C轮</td>
                    </tr>
                    <tr>
                        <td class="first">
                            <img src="/Public/images/financeList-list09.jpg" alt=""/>
                            <div>
                                <h4>福州淘家网络科技有限公司</h4>
                                <p>淘家是一款基于兴趣社区的专注于原创手作的分享交易平台。</p>
                            </div>
                        </td>
                        <td>-----</td>
                        <td>社交网络</td>
                        <td>福建省</td>
                        <td>天使轮</td>
                    </tr>
                    <tr>
                        <td class="first">
                            <img src="/Public/images/financeList-list10.jpg" alt=""/>
                            <div>
                                <h4>最映画 </h4>
                                <p>最映画致力于影视新媒体推广以及直播周边服务等泛文化产业。</p>
                            </div>
                        </td>
                        <td>-----</td>
                        <td>社交网络</td>
                        <td>江苏省</td>
                        <td>Pre-A轮</td>
                    </tr>
                    <tr>
                        <td class="first">
                            <img src="/Public/images/financeList-list11.jpg" alt=""/>
                            <div>
                                <h4>给我</h4>
                                <p>苹果应用“给我”，微信公众号：换机油。</p>
                            </div>
                        </td>
                        <td>-----</td>
                        <td>社交网络</td>
                        <td>山东省</td>
                        <td>D轮</td>
                    </tr>
                    <tr>
                        <td class="first">
                            <img src="/Public/images/financeList-list12.jpg" alt=""/>
                            <div>
                                <h4>小小时光 </h4>
                                <p>帮助幼儿家长发现有特色的玩具、德智教育机构、亲子机构等。</p>
                            </div>
                        </td>
                        <td>-----</td>
                        <td>在线教育</td>
                        <td>北京市</td>
                        <td>F轮</td>
                    </tr>
                    <tr>
                        <td class="first">
                            <img src="/Public/images/financeList-list13.jpg" alt=""/>
                            <div>
                                <h4>云罗科技</h4>
                                <p>云罗科技是为中小企业提供全套互联网金融解决方案</p>
                            </div>
                        </td>
                        <td>-----</td>
                        <td>企业服务</td>
                        <td>江苏省</td>
                        <td>未融资</td>
                    </tr>
                </tbody>
            </table>
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

    $(function(){
        var oLeftA = $('.financeList-nav ul li .nav-left a');
        var oRightA = $('.financeList-nav ul li .nav-right a')
        oLeftA.click(function(){
            $(this).addClass('cur').parent().siblings().find('a').removeClass('cur');
        });
        oRightA.click(function(){
            $(this).addClass('cur').siblings().removeClass('cur').parent().siblings().find('a').removeClass('cur');
        });
        $('.location a').click(function(){
            $(this).addClass('cur').siblings().removeClass('cur').parent().siblings().find('a').removeClass('cur');
            $(this).parent().parent().siblings().find('a').removeClass('cur');
        })
    })
    $(function(){
        var len = $('.location a').length;
        $('.location p:gt(0)').hide();
        $('.more').click(function(){
            if($('.location p:eq(1) a:eq(1)').is(':visible')){
                $('.location p:gt(0)').hide();
                $(this).css({
                    backgroundPosition:'0 -6px'
                })
            }else{
                $('.location p:gt(0)').show();
                $(this).css({
                    backgroundPosition:'0 0'
                })
            }
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