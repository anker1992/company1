<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
<head lang="en">
    <meta charset="UTF-8">
    <meta name="keywords" content="北京投融资最佳机构,投融资权威机构,金融社交平台,投融资综合服务平台" />
    <meta name="description" content="微合伙是集金融社交、商务合作为一体的综合社交平台，通过“互联网+撮合”服务模式来增加融资成功概率，以解决投融资问题，同时整合项目方、资金方、资本机构的资源，形成融资产业链闭环。" />
    <meta http-equiv="X-UA-Compatible" content="IE=Edge">
    <title>微合伙文化传媒有限公司_微合伙科技有限公司_金融社交圈_金融趴官网_微合伙</title>
    <link rel="stylesheet" href="/Public/css/common.css"/>
    <link rel="stylesheet" href="/Public/css/investorList.css"/>

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
<div class="investorList-top">
    <span>
        <!--[if lt IE 9]>
        <img src="/Public/images/investorList-top.jpg" alt=""/>
        <![endif]-->
    </span>
</div>
<div class="investorList-part1">
    <div class="container">
        <h2>权威投资机构</h2>
        <div class="investorList-part1-con">
            <div class="outer">
                <div class="carousel" id="listBox">
                    <dl id="roll" class="clearfix">
                        <dd>
                            <div class="dd1 clearfix">
                                <img src="/Public/images/investorList-part1-item01.jpg" alt=""/>
                                <div class="dd1-right">
                                    <h4>太平洋证券</h4>
                                    <p>主要投资方向：大健康、大消费、高科技、高端制造业、新能源等综合领域。</p>
                                </div>
                            </div>
                            <div class="dd2">
                                <p>简介：2004年1月6日在云南省昆明市注册成立全国性综合类证券公司，前身为太平洋证券有限责任公司。<a href="javascript:;">更多>></a></p>
                            </div>
                            <div class="dd3">
                                <p>投资案例:</p>
                            </div>
                        </dd>
                        <dd>
                            <div class="dd1 clearfix">
                                <img src="/Public/images/investorList-part1-item02.jpg" alt=""/>
                                <div class="dd1-right">
                                    <h4>蚂蚁金服</h4>
                                    <p>主要投资方向消费、信息技术、互联网媒体等领域。</p>
                                </div>
                            </div>
                            <div class="dd2">
                                <p>简介：阿狸旗下公司，蚂蚁金服旗下有支付宝、余额宝等子业务板块。<a href="javascript:;">更多>></a></p>
                            </div>
                            <div class="dd3">
                                <p>投资案例:</p>
                            </div>
                        </dd>
                        <dd>
                            <div class="dd1 clearfix">
                                <img src="/Public/images/investorList-part1-item03.jpg" alt=""/>
                                <div class="dd1-right">
                                    <h4>富赛金融</h4>
                                    <p>主要主要投资方向：商贸、旅游、地产、煤炭能源、文化、服务等领域。</p>
                                </div>
                            </div>
                            <div class="dd2">
                                <p>简介：公司自成立以来先后为高速公路、电厂、城市基础设施建设、房地产等项目提供结构化融资服务。<a href="javascript:;">更多>></a></p>
                            </div>
                            <div class="dd3">
                                <p>投资案例:</p>
                            </div>
                        </dd>
                        <dd>
                            <div class="dd1 clearfix">
                                <img src="/Public/images/investorList-part1-item04.jpg" alt=""/>
                                <div class="dd1-right">
                                    <h4>中信产业基金</h4>
                                    <p>投资方向：消费生活、旅游酒店、金融、硬件、电子商务、企业服务。</p>
                                </div>
                            </div>
                            <div class="dd2">
                                <p>简介：中信产业投资基金管理有限公司("中信产业基金")。<a href="javascript:;">更多>></a></p>
                            </div>
                            <div class="dd3">
                                <p>投资案例:</p>
                            </div>
                        </dd>
                        <dd>
                            <div class="dd1 clearfix">
                                <img src="/Public/images/investorList-part1-item05.jpg" alt=""/>
                                <div class="dd1-right">
                                    <h4>天图资本制药</h4>
                                    <p>投资方向：社交 工具软件 消费生活 旅游酒店 医疗健康 教育培训 金融 硬件。</p>
                                </div>
                            </div>
                            <div class="dd2">
                                <p>简介：天图资本创始于2002年，是国内较早从事股权投资的专业机构之一。<a href="javascript:;">更多>></a></p>
                            </div>
                            <div class="dd3">
                                <p>投资案例:</p>
                            </div>
                        </dd>
                        <dd>
                            <div class="dd1 clearfix">
                                <img src="/Public/images/investorList-part1-item06.jpg" alt=""/>
                                <div class="dd1-right">
                                    <h4>东方华盖</h4>
                                    <p>投资方向：音乐视频 社交文体娱乐 消费生活 旅游酒店。</p>
                                </div>
                            </div>
                            <div class="dd2">
                                <p>简介：华盖资本有限责任公司成立于2012年，注册资本为5000万元，专注于中国市场的人民币私募。<a href="javascript:;">更多>></a></p>
                            </div>
                            <div class="dd3">
                                <p>投资案例:</p>
                            </div>
                        </dd>
                    </dl>
                </div>
                <div class="btn">
                    <span class="btnLeft" id="btnPrev"></span>
                    <span class="btnRight" id="btnNext"></span>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="investorList-part2">
    <div class="container">
        <h2>全部投资人</h2>
        <div class="investorList-part2-con">
            <ul>
                <li class="head">
                    <h4><span class="w400">投资人</span><span class="w258">投资领域</span><span class="w190">投资阶段</span><span class="w190">投资总数/单笔可投</span><span class="w190">来源</span></h4>
                </li>
                <li>
                    <div class="floatL w400">
                        <a href="javascript:;"><img src="/Public/images/investorList-part2-item01.jpg" alt=""/></a>
                        <div class="td1">
                            <h5>赵文权</h5>
                            <p>蓝色光标传播集团董事长兼首席执行官。历任路村咨询策划公司总经理、雅宝拍卖网首席市场官。</p>
                        </div>
                    </div>
                    <div class="floatLB pd45 w258">
                        <p>互联网、移动互联网、文化娱乐体育</p>
                    </div>
                    <div class="floatLB pd65 w190">
                        <p>天使轮<br />Pre-A轮<br />A轮</p>
                    </div>
                    <div class="floatLC w190">
                        <p>3</p>
                    </div>
                    <div class="floatLC w190">
                        <p>因果树</p>
                    </div>
                </li>
                <li>
                    <div class="floatL w400">
                        <a href="javascript:;"><img src="/Public/images/investorList-part2-item02.jpg" alt=""/></a>
                        <div class="td1">
                            <h5>郭凡生</h5>
                            <p>慧聪网创始人、CEO。1982-1987年，毕业后在内蒙古建委研究室工作，后出任内蒙古党委政策研究室战略组(处)组长、副研究员。</p>
                        </div>
                    </div>
                    <div class="floatLB pd45 w258">
                        <p>互联网、移动互联网、文化娱乐体育</p>
                    </div>
                    <div class="floatLB pd65 w190">
                        <p>B+轮<br />C轮<br />C+轮<br />D轮</p>
                    </div>
                    <div class="floatLC w190">
                        <p>2</p>
                    </div>
                    <div class="floatLC w190">
                        <p>因果树</p>
                    </div>
                </li>
                <li>
                    <div class="floatL w400">
                        <a href="javascript:;"><img src="/Public/images/investorList-part2-item03.jpg" alt=""/></a>
                        <div class="td1">
                            <h5>袁文达</h5>
                            <p>红点投资的合伙人及中国区的负责人，负责了红点在中国的多项投资，包括玺诚传媒、奇虎360、硅谷动力等。</p>
                        </div>
                    </div>
                    <div class="floatLB pd45 w258">
                        <p>互联网、移动互联网</p>
                    </div>
                    <div class="floatLB pd65 w190">
                        <p>A轮<br />B轮、C轮<br />C+轮、D轮</p>
                    </div>
                    <div class="floatLC w190">
                        <p>4</p>
                    </div>
                    <div class="floatLC w190">
                        <p>因果树</p>
                    </div>
                </li>
                <li>
                    <div class="floatL w400">
                        <a href="javascript:;"><img src="/Public/images/investorList-part2-item04.jpg" alt=""/></a>
                        <div class="td1">
                            <h5>何志成</h5>
                            <p>在银行、金融、直接投资的领域有长达十五年的丰富经验。他获得香港中文大学MBA学位，并先后在香港、英国和加拿大等多家公司从事财务工作。</p>
                        </div>
                    </div>
                    <div class="floatLB pd45 w258">
                        <p>金融</p>
                    </div>
                    <div class="floatLB pd65 w190">
                        <p>天使轮<br />Pre-A轮<br />A轮</p>
                    </div>
                    <div class="floatLC w190">
                        <p>6</p>
                    </div>
                    <div class="floatLC w190">
                        <p>因果树</p>
                    </div>
                </li>
                <li>
                    <div class="floatL w400">
                        <a href="javascript:;"><img src="/Public/images/investorList-part2-item05.jpg" alt=""/></a>
                        <div class="td1">
                            <h5>顾翠萍(Trency Gu)</h5>
                            <p>红杉资本中国基金投资经理。关注领域为健康医疗行业。在2012年加入红杉之前，顾女士曾任奥博医疗资本亚太区投资经理。</p>
                        </div>
                    </div>
                    <div class="floatLB pd45 w258">
                        <p>医疗健康</p>
                    </div>
                    <div class="floatLB pd65 w190">
                        <p>天使轮<br />Pre-A轮<br />A轮</p>
                    </div>
                    <div class="floatLC w190">
                        <p>4</p>
                    </div>
                    <div class="floatLC w190">
                        <p>因果树</p>
                    </div>
                </li>

                <li>
                    <div class="floatL w400">
                        <a href="javascript:;"><img src="/Public/images/investorList-part2-item06.jpg" alt=""/></a>
                        <div class="td1">
                            <h5>屈田</h5>
                            <p>蝙蝠资本创始合伙人。原鼎晖创投副总裁，之前在阿里巴巴集团任投资并购副总监，曾在雅虎、腾讯、新浪从事产品运营工作。有十五年的互联网行业产品运营和投资并购经验。</p>
                        </div>
                    </div>
                    <div class="floatLB pd45 w258">
                        <p>互联网、移动互联网、本地生活、电子商务</p>
                    </div>
                    <div class="floatLB pd65 w190">
                        <p>Pre-A轮<br />A轮</p>
                    </div>
                    <div class="floatLC w190">
                        <p>3</p>
                    </div>
                    <div class="floatLC w190">
                        <p>因果树</p>
                    </div>
                </li>
                <li>
                    <div class="floatL w400">
                        <a href="javascript:;"><img src="/Public/images/investorList-part2-item07.jpg" alt=""/></a>
                        <div class="td1">
                            <h5>刘宇</h5>
                            <p>澳银资本创始合伙人、总裁。2000年-2001年，刘宇先生任职于深圳市科技局高新技术成果交易中心。</p>
                        </div>
                    </div>
                    <div class="floatLB pd45 w258">
                        <p>互联网、移动互联网、医疗健康、环保能源、制造业、本地生活、文化娱乐体育、硬件、电子商务</p>
                    </div>
                    <div class="floatLB pd65 w190">
                        <p>Pre-A轮<br />A轮<br />B轮</p>
                    </div>
                    <div class="floatLC w190">
                        <p>2</p>
                    </div>
                    <div class="floatLC w190">
                        <p>因果树</p>
                    </div>
                </li>
                <li>
                    <div class="floatL w400">
                        <a href="javascript:;"><img src="/Public/images/investorList-part2-item08.jpg" alt=""/></a>
                        <div class="td1">
                            <h5>张磊</h5>
                            <p>常春藤资本创始合伙人。1993年加入中信集团中大投资管理公司，担任投资经理及上海代表处负责人。2007年底加入常春藤资本，任首席运营官。</p>
                        </div>
                    </div>
                    <div class="floatLB pd45 w258">
                        <p>互联网、环保能源、本地生活、金融、文化娱乐体育、电子商务</p>
                    </div>
                    <div class="floatLB pd65 w190">
                        <p>天使轮<br />Pre-A轮<br />A轮</p>
                    </div>
                    <div class="floatLC w190">
                        <p>2</p>
                    </div>
                    <div class="floatLC w190">
                        <p>因果树</p>
                    </div>
                </li>
                <li>
                    <div class="floatL w400">
                        <a href="javascript:;"><img src="/Public/images/investorList-part2-item09.jpg" alt=""/></a>
                        <div class="td1">
                            <h5>屈晓鹏</h5>
                            <p>于2008年加入北极光。此前，屈晓鹏先后任职于Pacific Corporate Group及国信证券投资银行部。</p>
                        </div>
                    </div>
                    <div class="floatLB pd45 w258">
                        <p>医疗健康、环保能源</p>
                    </div>
                    <div class="floatLB pd65 w190">
                        <p>天使轮<br />Pre-A轮<br />A轮</p>
                    </div>
                    <div class="floatLC w190">
                        <p>2</p>
                    </div>
                    <div class="floatLC w190">
                        <p>因果树</p>
                    </div>
                </li>
                <li>
                    <div class="floatL w400">
                        <a href="javascript:;"><img src="/Public/images/investorList-part2-item10.jpg" alt=""/></a>
                        <div class="td1">
                            <h5>石峰</h5>
                            <p>崭越资本合伙人，天使投资人。</p>
                        </div>
                    </div>
                    <div class="floatLB pd45 w258">
                        <p>互联网、移动互联网、本地生活、文化娱乐体育</p>
                    </div>
                    <div class="floatLB pd65 w190">
                        <p>天使轮<br />Pre-A轮<br />A轮</p>
                    </div>
                    <div class="floatLC w190">
                        <p>2</p>
                    </div>
                    <div class="floatLC w190">
                        <p>因果树</p>
                    </div>
                </li>

                <li>
                    <div class="floatL w400">
                        <a href="javascript:;"><img src="/Public/images/investorList-part2-item11.jpg" alt=""/></a>
                        <div class="td1">
                            <h5>肖水龙</h5>
                            <p>深圳市创东方投资有限公司董事长，熟悉金融、信托、地产、上市公司管理，尤其擅长企业股权投资业务，有着丰富的投资经验和业内广泛的人脉关系。</p>
                        </div>
                    </div>
                    <div class="floatLB pd45 w258">
                        <p>金融</p>
                    </div>
                    <div class="floatLB pd65 w190">
                        <p>天使轮<br />Pre-A轮<br />A轮</p>
                    </div>
                    <div class="floatLC w190">
                        <p>4</p>
                    </div>
                    <div class="floatLC w190">
                        <p>因果树</p>
                    </div>
                </li>
                <li>
                    <div class="floatL w400">
                        <a href="javascript:;"><img src="/Public/images/investorList-part2-item12.jpg" alt=""/></a>
                        <div class="td1">
                            <h5>李东薰</h5>
                            <p>于2005年加入北极光，主管北极光投资人关系、财务和基金运营方面的工作，同时参与公司在无线、互联网及网络游戏方面的投资活动，尤其关注跨中、韩、美的商业机会。</p>
                        </div>
                    </div>
                    <div class="floatLB pd45 w258">
                        <p>互联网、移动互联网</p>
                    </div>
                    <div class="floatLB pd65 w190">
                        <p>天使轮<br />Pre-A轮<br />A轮</p>
                    </div>
                    <div class="floatLC w190">
                        <p>3</p>
                    </div>
                    <div class="floatLC w190">
                        <p>因果树</p>
                    </div>
                </li>
                <li>
                    <div class="floatL w400">
                        <a href="javascript:;"><img src="/Public/images/investorList-part2-item13.jpg" alt=""/></a>
                        <div class="td1">
                            <h5>赵慕杰(Helen Chiu)</h5>
                            <p>英特尔投资总监。加入英特尔投资之前，赵女士在中国和美国的ABB公司工作12年，并在这期间担任多项管理职务，包括战略投资部总经理、商务拓展及营销、中国区首席代表。</p>
                        </div>
                    </div>
                    <div class="floatLB pd45 w258">
                        <p>互联网、移动互联网、环保能源</p>
                    </div>
                    <div class="floatLB pd65 w190">
                        <p>天使轮<br />Pre-A轮<br />A轮</p>
                    </div>
                    <div class="floatLC w190">
                        <p>3</p>
                    </div>
                    <div class="floatLC w190">
                        <p>因果树</p>
                    </div>
                </li>
                <li>
                    <div class="floatL w400">
                        <a href="javascript:;"><img src="/Public/images/investorList-part2-item14.jpg" alt=""/></a>
                        <div class="td1">
                            <h5>王雨荍</h5>
                            <p>具有四年投资银行及企业管理的工作经验,并在移动互联网领域具有一定的经验积累。2009年起，就职于中诚信集团(穆迪中国)，主要负责投资与参投企业的运营管理以及后续资本运作。</p>
                        </div>
                    </div>
                    <div class="floatLB pd45 w258">
                        <p>互联网、移动互联网、医疗健康、文化娱乐体育</p>
                    </div>
                    <div class="floatLB pd65 w190">
                        <p>天使轮<br />Pre-A轮<br />A轮</p>
                    </div>
                    <div class="floatLC w190">
                        <p>4</p>
                    </div>
                    <div class="floatLC w190">
                        <p>因果树</p>
                    </div>
                </li>
                <li>
                    <div class="floatL w400">
                        <a href="javascript:;"><img src="/Public/images/investorList-part2-item15.jpg" alt=""/></a>
                        <div class="td1">
                            <h5>温保马</h5>
                            <p>今日资本合伙人，曾在英特尔投资工作，领导了数个中国项目的投资。温先生曾在AIG香港担任过投资经理。在此之前，温先生曾在JP摩根的公司融资部工作并为菲利浦公司担任过设计工程师。</p>
                        </div>
                    </div>
                    <div class="floatLB pd45 w258">
                        <p>互联网、移动互联网、本地生活、电子商务</p>
                    </div>
                    <div class="floatLB pd65 w190">
                        <p>天使轮<br />Pre-A轮<br />A轮</p>
                    </div>
                    <div class="floatLC w190">
                        <p>2</p>
                    </div>
                    <div class="floatLC w190">
                        <p>因果树</p>
                    </div>
                </li>

                <li>
                    <div class="floatL w400">
                        <a href="javascript:;"><img src="/Public/images/investorList-part2-item16.jpg" alt=""/></a>
                        <div class="td1">
                            <h5>魏洪波(David Wei)</h5>
                            <p>红杉资本中国基金区域业务总经理。在加入红杉之前，魏洪波先生先后任职于苏州信托和苏州创投集团。</p>
                        </div>
                    </div>
                    <div class="floatLB pd45 w258">
                        <p>环保能源、制造业</p>
                    </div>
                    <div class="floatLB pd65 w190">
                        <p>天使轮<br />Pre-A轮<br />A轮<br />B轮</p>
                    </div>
                    <div class="floatLC w190">
                        <p>4</p>
                    </div>
                    <div class="floatLC w190">
                        <p>因果树</p>
                    </div>
                </li>
                <li>
                    <div class="floatL w400">
                        <a href="javascript:;"><img src="/Public/images/investorList-part2-item17.jpg" alt=""/></a>
                        <div class="td1">
                            <h5>谢振宏</h5>
                            <p>众诚资本合伙人。浙江大学电气自动化和心理学学位，以及企业管理研究生毕业。此前一直在全球500强外企从事供应链工作.有丰富的企业管理经验。</p>
                        </div>
                    </div>
                    <div class="floatLB pd45 w258">
                        <p>本地生活、教育、金融、文化娱乐体育、硬件、游戏、电子商务、汽车交通、房产服务、旅游企业服务</p>
                    </div>
                    <div class="floatLB pd65 w190">
                        <p>B轮<br />C轮</p>
                    </div>
                    <div class="floatLC w190">
                        <p>2</p>
                    </div>
                    <div class="floatLC w190">
                        <p>因果树</p>
                    </div>
                </li>
            </ul>

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
            }
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
            }
        };
        //插件默认选项
        $.fn.parallelRoll.defaults = {
            boxName : 'outer',
            tagName : 'dd',
            time : 3000,  //
            direction : 'left', // 滚动方向
            visual : 4 , //可视数
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