<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
<head lang="en">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=Edge">
    <title>微合伙文化传媒有限公司_微合伙科技有限公司_金融社交圈_金融趴官网_微合伙</title>
    <link rel="stylesheet" href="/Public/css/common.css"/>
    <link rel="stylesheet" type="text/css" href="/Public/css/index.css">
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
    <div class="container clearfix">
        <div class="content-left">
            <div class="part1">
                <!--轮播图开始-->
                <div class="banner">
                    <ul class="banner-box">
                        <li class="on banner3">
                            <a href="<?php echo U('Freemarket/freeMarketDetail',array('free_id'=>26));?>">
                                <img src="/Public/images/75207680518843359.png" alt=""/>
                            </a>
                        </li>
                        <li>
                            <a href="<?php echo U('Static/banner1');?>">
                                <img src="/Public/images/index/index-banner2.jpg" alt="" />
                            </a>
                        </li>
                        <li>
                            <a href="<?php echo U('Static/banner2');?>">
                                <img src="/Public/images/index/index-banner3.png" alt=""/>
                            </a>
                        </li>
                    </ul>
                </div>
                <!--轮播图结束-->
            </div>

            <div class="part2">
                <div class="part2-top clearfix">
                    <h2>智能投顾</h2>
                    <a href="<?php echo U('Rongzi/financeproducts');?>">查看更多></a>
                </div>
                <div class="part2-con clearfix">
                    <div class="part2-con-item">
                        <img src="/Public/images/index/index-part2-item01.png" alt=""/>
                        <p>银行</p>
                        <a href="<?php echo U('Rongzi/financeproducts',array('cplx'=>银行));?>"></a>
                    </div>
                    <div class="part2-con-item">
                        <img src="/Public/images/index/index-part2-item02.png" alt=""/>
                        <p>资管信托</p>
                        <a href="<?php echo U('Rongzi/financeproducts',array('cplx'=>资管信托));?>"></a>
                    </div>
                    <div class="part2-con-item">
                        <img src="/Public/images/index/index-part2-item03.png" alt=""/>
                        <p>基金产品</p>
                        <a href="<?php echo U('Rongzi/financeproducts',array('cplx'=>基金产品));?>"></a>
                    </div>
                    <div class="part2-con-item">
                        <img src="/Public/images/index/index-part2-item04.png" alt=""/>
                        <p>保险产品</p>
                        <a href="<?php echo U('Rongzi/financeproducts',array('cplx'=>保险产品));?>"></a>
                    </div>
                    <div class="part2-con-item">
                        <img src="/Public/images/index/index-part2-item05.png" alt=""/>
                        <p>P2P产品</p>
                        <a href="<?php echo U('Rongzi/financeproducts',array('cplx'=>P2P产品));?>"></a>
                    </div>
                    <div class="part2-con-item">
                        <img src="/Public/images/index/index-part2-item06.png" alt=""/>
                        <p>另类投资</p>
                        <a href="<?php echo U('Rongzi/financeproducts',array('cplx'=>另类投资));?>"></a>
                    </div>
                </div>
            </div>

            <div class="part3">
                <div class="part3-top clearfix">
                    <h2>智能信贷</h2>
                    <a href="<?php echo U('Daikuan/personalloan');?>">查看更多></a>
                </div>
                <div class="part3-con clearfix">
                    <div class="part3-con-item item1">
                        <img src="/Public/images/index/index-part3-item01.jpg" alt=""/>
                        <p>贷款专区</p>
                        <a href="<?php echo U('Daikuan/personalloan');?>"></a>
                    </div>
                    <div class="part3-con-item item2">
                        <img src="/Public/images/index/index-part3-item02.jpg" alt=""/>
                        <p>房贷专区</p>
                        <a href="<?php echo U('Daikuan/houseLoanList');?>"></a>
                    </div>
                    <div class="part3-con-item item3">
                        <img src="/Public/images/index/index-part3-item03.jpg" alt=""/>
                        <p>车贷专区</p>
                        <a href="javascript:void(0)"></a>
                    </div>
                    <div class="part3-con-item item4">
                        <img src="/Public/images/index/index-part3-item04.jpg" alt=""/>
                        <p>信用卡专区</p>
                        <a href="<?php echo U('Daikuan/creditList');?>"></a>
                    </div>
                </div>
            </div>

            <div class="part4">
                <div class="part4-top clearfix">
                    <h2>金融社交</h2>
                    <a href="<?php echo U('Dating/datingsearch');?>">查看更多></a>
                </div>
                <div class="part4-con">
                    <?php if(is_array($love)): foreach($love as $key=>$love): ?><div class="part4-con-item">
                        <img src="<?php echo ($love["touxiang_src"]); ?>" alt=""/>
                        <p><?php echo ($love["nickname"]); ?></p>
                        <a href="<?php echo U('Dating/datingintroduce',array('id'=>$love['id']));?>"></a>
                    </div><?php endforeach; endif; ?>
                </div>
            </div>
        </div>

        <div class="content-right">
            <div class="right-top">
                <a href="<?php echo U('Rongzi/seminarpage');?>">
                    <img src="/Public/images/index/index-right-top.jpg" alt=""/>
                </a>
            </div>
            <div style="margin-top:20px;background-color: #fff;padding: 20px 15px" class="gonggao">
                <h2 style="text-align: center;font-size: 18px;margin-bottom: 20px">公告</h2>
                <p style="font-size: 16px;line-height: 24px;text-indent: 2em">
                    近期，本公司经客户反映发现，部分已离职员工在离职后仍冒用本公司名义与客户进行转款交易，交易后即无法联系，给客户带来了不同程度的经济损失，严重损害了本公司商誉。对此，本公司已展开调查，并保留以法律途径向上述离职人员追诉的权利。同时，本公司敬告各位微合伙的合作伙伴，为保证您的权益不受非法侵害，请您在转款前通过以下联系方式进行确认，并以与本公司签署的业务合同作为确认依据，切勿向私人转款，以免损失，感谢您的配合。
                </p>
                <p style="font-size: 16px;line-height: 24px;margin-top: 12px;">联系人：张总</p>
                <p style="font-size: 16px;line-height: 24px;">联系电话：13683370976</p>
                <p style="font-size: 16px;line-height: 24px;">联系微信号：weihehuo4</p>
            </div>

            <div class="right-part1">
                <div class="right-part1-top clearfix">
                    <h2>自由市场信息</h2>
                    <a href="<?php echo U('Freemarket/freeMarket');?>">查看更多></a>
                </div>
                <div class="right-list">
                    <?php if(is_array($news)): foreach($news as $key=>$news): ?><div class="right-item">
                        <h3><a href="<?php echo U('Freemarket/freeMarketDetail',array('free_id'=>$news['free_id']));?>"><?php echo ($news["free_title"]); ?></a></h3>
                        <p><?php echo (date("Y-m-d",$news["free_make_time"])); ?></p>
                    </div><?php endforeach; endif; ?>
                </div>
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
<script type="text/javascript" src="/Public/js/lubotu.js"></script>
<script type="text/javascript">

    $(function(){
        $(".part2 .part2-con-item").hover(function(){
            $(this).addClass("cur").siblings().removeClass("cur");
        },function(){
            $(this).removeClass("cur");
        })
    });

    /*轮播图调用执行代码*/
    $(function(){
        $(".banner").banner({
        });
    });

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