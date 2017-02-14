<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
<head lang="en">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=Edge">
    <title>微合伙文化传媒有限公司_微合伙科技有限公司_金融社交圈_金融趴官网_微合伙</title>
    <link rel="stylesheet" href="/Public/css/common.css"/>
    <link rel="stylesheet" href="/Public/css/creditDetail.css"/>
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
<div class="nav">
    <div class="container">
        <ul class="clearfix">
            <li ><a href="<?php echo U('Daikuan/personalloan');?>">贷款产品</a></li>
            <!--<li><a href="javascript:;">贷款</a>|</li>-->
            <!--<li><a href="javascript:;">车贷</a>|</li>-->
            <li ><a href="<?php echo U('Daikuan/houseLoanList');?>">房贷</a>|</li>
            <li class="cur"><a href="<?php echo U('Daikuan/creditList');?>">信用卡</a></li>
            <li><a href="<?php echo U('Daikuan/userlogin');?>">经理入驻</a></li>
        </ul>
    </div>
</div>

<div class="part1">
    <div class="container clearfix">
        <div class="content-left-box">
            <div class="left-top-box">
                <div class="left-main-item">
                    <img src="<?php echo ($detail["logo"]); ?>" alt=""/>
                    <div>
                        <p class="left-main-item-title"><?php echo ($detail["title"]); ?></p>
                        <p><span class="left-main-item-xbdp">小编点评</span><?php echo ($detail["xiaoshou"]); ?></p>
                        <p><i class="triangle-right"></i><?php echo ($detail["youhui1"]); ?></p>
                        <p><i class="triangle-right"></i><?php echo ($detail["youhui2"]); ?></p>
                        <p><i class="triangle-right"></i><?php echo ($detail["youhui3"]); ?></p>
                    </div>
                    <a href="">立即申请</a>
                </div>
                <div class="left-other-items">
                    <img src="<?php echo ($detail["logo_one"]); ?>" alt=""/>
                    <div>
                        <dd>
                            <p><?php echo ($detail["logo_one_ka"]); ?></p>
                        </dd>
                        <dd>
                            <p><?php echo ($detail["logo_one_type"]); ?></p>
                        </dd>
                        <dd>
                            <p><?php echo ($detail["logo_one_nianfei"]); ?></p>
                        </dd>
                    </div>
                    <a href="">立即申请</a>
                </div>
                <div class="left-other-items">
                    <img src="<?php echo ($detail["logo_two"]); ?>" alt=""/>
                    <div>
                        <dd>
                            <p><?php echo ($detail["logo_two_ka"]); ?></p>
                        </dd>
                        <dd>
                            <p><?php echo ($detail["logo_two_type"]); ?></p>
                        </dd>
                        <dd>
                            <p><?php echo ($detail["logo_two_nianfei"]); ?></p>
                        </dd>
                    </div>
                    <a href="">立即申请</a>
                </div>
            </div>
            <div class="content-detail-box">
                <div data-am-sticky="{top:80}" data-am-scrollspynav="{className: {active: 'active'}}" class="detail-box-nav">
                    <ul>
                        <li><a href="#detail-part1"  class="active">基本信息</a></li>
                        <li><a href="#detail-part2">专享特权</a></li>
                        <li><a href="#detail-part3">相关费用</a></li>
                        <li><a href="#detail-part4">优惠活动</a></li>
                    </ul>
                </div>
                <div>
                    <div id="detail-part1" class="maodian-box"></div>
                    <div class="content-detail-parts">
                        <dl>
                            <dt>年费政策： </dt>
                            <dd><?php echo ($detail["zhengce1"]); ?></dd>
                        </dl>
                        <dl>
                            <dt>积分规则： </dt>
                            <dd><?php echo ($detail["guize"]); ?></dd>
                        </dl>
                        <dl>
                            <dt>积分有效期： </dt>
                            <dd><?php echo ($detail["youxiaoqi"]); ?></dd>
                        </dl>
                        <dl>
                            <dt>取现： </dt>
                            <dd><?php echo ($detail["quxian"]); ?></dd>
                        </dl>
                        <dl>
                            <dt>最低还款比例： </dt>
                            <dd><?php echo ($detail["bili"]); ?></dd>
                        </dl>
                        <dl>
                            <dt>免息期： </dt>
                            <dd><?php echo ($detail["mianxi"]); ?></dd>
                        </dl>
                        <dl>
                            <dt>短信通知： </dt>
                            <dd><?php echo ($detail["duanxin"]); ?></dd>
                        </dl>
                        <dl>
                            <dt>失卡保障： </dt>
                            <dd><?php echo ($detail["shika"]); ?></dd>
                        </dl>
                        <dl>
                            <dt>申请条件： </dt>
                            <dd><?php echo ($detail["tiaojian"]); ?></dd>
                        </dl>
                        <dl>
                            <dt>申请材料： </dt>
                            <dd><?php echo ($detail["cailiao"]); ?></dd>
                        </dl>
                    </div>
                    <div id="detail-part2" class="maodian-box"></div>
                    <div class="content-detail-parts parts-has-head">
                        <p class="detail-parts-title">| 专享特权</p>
                        <p class="detail-parts-title-l">卡片特权</p>
                        <?php echo ($detail["tequan"]); ?>
                    </div>
                    <div id="detail-part3" class="maodian-box"></div>
                    <div class="content-detail-parts">
                        <p class="detail-parts-title">| 相关费用</p>
                        <dl>
                            <dt>取现： </dt>
                            <dd><?php echo ($detail["quxian"]); ?></dd>
                        </dl>
                        <dl>
                            <dt>还款： </dt>
                            <dd><?php echo ($detail["huankuan"]); ?></dd>
                        </dl>
                        <dl>
                            <dt>滞纳金： </dt>
                            <dd><?php echo ($detail["zhinajin"]); ?></dd>
                        </dl>
                        <dl>
                            <dt>超限费： </dt>
                            <dd><?php echo ($detail["chaoxianfei"]); ?></dd>
                        </dl>
                        <dl>
                            <dt>溢缴费： </dt>
                            <dd><?php echo ($detail["yijiaofei"]); ?></dd>
                        </dl>
                        <dl>
                            <dt>挂失费： </dt>
                            <dd><?php echo ($detail["guashi"]); ?></dd>
                        </dl>
                        <dl>
                            <dt>补卡费： </dt>
                            <dd><?php echo ($detail["buka"]); ?></dd>
                        </dl>
                        <dl>
                            <dt>分期费率： </dt>
                            <dd><br/>
                                   <ul>
                                        <?php echo ($detail["fenqifeilv"]); ?>
                                   </ul>
                            </dd>
                        </dl>
                    </div>
                </div>
            </div>
            <div class="part3">
                <div class="container">
                    <h3>银行信用卡中心</h3>
                    <div class="part3-con">
                        <ul class="clearfix">
                            <li><a href="javascript:;"><img src="/Public/daikuan_img/creditList-part3-item01.png" alt=""/>兴业银行信用卡中心</a></li>
                            <li><a href="javascript:;"><img src="/Public/daikuan_img/creditList-part3-item02.png" alt=""/>交通银行信用卡中心</a></li>
                            <li><a href="javascript:;"><img src="/Public/daikuan_img/creditList-part3-item03.png" alt=""/>中信银行信用卡中心</a></li>
                            <li><a href="javascript:;"><img src="/Public/daikuan_img/creditList-part3-item04.png" alt=""/>广发银行信用卡中心</a></li>
                            <li><a href="javascript:;"><img src="/Public/daikuan_img/creditList-part3-item05.png" alt=""/>平安银行信用卡中心</a></li>
                            <li><a href="javascript:;"><img src="/Public/daikuan_img/creditList-part3-item06.png" alt=""/>光大银行信用卡中心</a></li>
                            <li><a href="javascript:;"><img src="/Public/daikuan_img/creditList-part3-item07.png" alt=""/>农业银行信用卡中心</a></li>
                            <li><a href="javascript:;"><img src="/Public/daikuan_img/creditList-part3-item08.png" alt=""/>浦发银行信用卡中心</a></li>
                            <li><a href="javascript:;"><img src="/Public/daikuan_img/creditList-part3-item09.png" alt=""/>花旗银行信用卡中心</a></li>
                            <li><a href="javascript:;"><img src="/Public/daikuan_img/creditList-part3-item10.png" alt=""/>华夏银行信用卡中心</a></li>
                            <li><a href="javascript:;"><img src="/Public/daikuan_img/creditList-part3-item11.png" alt=""/>民生银行信用卡中心</a></li>
                            <li><a href="javascript:;"><img src="/Public/daikuan_img/creditList-part3-item12.png" alt=""/>中国银行信用卡中心</a></li>
                            <li><a href="javascript:;"><img src="/Public/daikuan_img/creditList-part3-item13.png" alt=""/>招商银行信用卡中心</a></li>
                            <li><a href="javascript:;"><img src="/Public/daikuan_img/creditList-part3-item14.png" alt=""/>工商银行信用卡中心</a></li>
                            <li><a href="javascript:;"><img src="/Public/daikuan_img/creditList-part3-item15.png" alt=""/>建设银行信用卡中心</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <div class="content-right-box">
            <div class="right-items-box">
                <div class="right-items-title">最近看过的卡</div>
                <div class="right-items-content">
                    <p>交通银行Y-POWER卡</p>
                    <a href=""><img src="/Public/daikuan_img/xinyongka.jpg" alt=""/></a>
                    <a href=""><img src="/Public/daikuan_img/xinyongka2.jpg" alt=""/></a>
                </div>
            </div>
            <div class="right-items-box">
                <div class="right-items-title">常见问题</div>
                <div class="right-items-content">
                    <a class="a-text" href="#">金卡需要满足什么条件，一般金卡的最低额度是多少？</a>
                    <a class="a-text" href="#">金卡与普卡的区别？</a>
                    <a class="a-text" href="#">为什么我之前的交通银行金卡信用 卡注销后就一直申请不了？</a>
                    <a class="a-text" href="#">金卡需要满足什么条件，一般金卡的最低额度是多少？</a>
                    <a class="a-text" href="#">金卡与普卡的区别？</a>
                    <a class="a-text" href="#">为什么我之前的交通银行金卡信用 卡注销后就一直申请不了？</a>
                </div>
            </div>
            <div class="right-items-box">
                <div class="right-items-title">最新资讯</div>
                <div class="right-items-content">
                    <a class="a-text" href="#">交通银行信用卡问答</a>
                    <a class="a-text" href="#"> 交通银行信用卡资讯</a>
                    <a class="a-text" href="#"> 交行白麒麟来了，猜猜明年的神兽会是啥？（附年费政策）</a>
                    <a class="a-text" href="#">交通银行当家花旦——白麒麟的另一种解读</a>
                    <a class="a-text" href="#">金卡与普卡的区别？</a>
                    <a class="a-text" href="#">为什么我之前的交通银行金卡信用 卡注销后就一直申请不了？</a>
                </div>
            </div>

        </div>
    </div>
</div>

<!--footer开始-->
<div class="footer" id="footer">
    <div class="container">
        <div class="attention">
            <img src="/Public/daikuan_img/weixin.png" alt=""/>
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
<!--<link rel="stylesheet" href="/Public/css/amazeui.css"/>-->
<script src="/Public/js/jquery-1.10.2.min.js"></script>
<script src="/Public/js/amazeui.js"></script>
</body>
</html>