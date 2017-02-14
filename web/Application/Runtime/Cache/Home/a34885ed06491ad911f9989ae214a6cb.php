<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
<head lang="en">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=Edge">
    <title>微合伙文化传媒有限公司_微合伙科技有限公司_金融社交圈_金融趴官网_微合伙</title>
    <link rel="stylesheet" href="/Public/css/common.css"/>
    <link rel="stylesheet" href="/Public/css/creditDetail.css"/>
    <link rel="stylesheet" href="/Public/css/houseLoanDetail.css"/>
    <link rel="stylesheet" href="/Public/css/partofamazeui.css"/>
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

<div class="nav pdr-no-scroll">
    <div class="container pdr-no-scroll">
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
    <div class="container clearfix pdr-no-scroll">
        <div class="content-left-box">
            <div class="left-top-box">
                <div class="hl-top-part1">
                    <div class="hl-top-part1-title">
                        <p><?php echo ($show["title"]); ?></p>
                        <img src="<?php echo ($show["logo2"]); ?>" alt=""/>
                    </div>
                    <div class="hl-top-part1-content">
                        <a href="#" class="wxsq-button"
                           data-am-modal="{target: '#doc-modal-apply', closeViaDimmer: 0, width: 780}"></a>

                        <div class="pt15">
                            <p>
                                <b><?php echo ($show["fangkuan_time"]); ?></b>
                                <b>&nbsp;</b>
                                <b>适宜地区：</b> <?php echo ($show["shiyi_city"]); ?>
                            </p>
                            <p>
                                <b>&nbsp;</b>
                            </p>
                            <p>
                                <b>利率说明：</b> <?php echo ($show["lilvshuoming"]); ?>
                            </p>
                        </div>
                        <table class="part1-content-table">
                            <?php echo ($show["lilv_table"]); ?>
                        </table>
                        <span>银行利率会因时间、受理地、申请人资信状况等情况有所不同，以上数据仅供参考</span>

                        <p class="text-beizhu">
                            备注：<br/> <?php echo ($show["beizhu"]); ?>
                        </p>
                    </div>
                </div>
                <div class="hl-top-part2">

                </div>
            </div>
            <div class="content-detail-box">
                <div data-am-sticky="{top:80}" data-am-scrollspynav="{className: {active: 'active'}}"
                     class="detail-box-nav">
                    <ul>
                        <li><a href="#detail-part1" class="active">申请条件</a></li>
                        <li><a href="#detail-part2">所需材料</a></li>
                        <li><a href="#detail-part3">还款说明</a></li>
                        <li><a href="#detail-part4">常见问答</a></li>
                    </ul>
                </div>
                <div>
                    <!-- 申请条件 -->
                    <div id="detail-part1" class="maodian-box"></div>
                    <div class="hl-detail-parts">
                        <div class="detail-box-title-bar">
                            <p><span class="blue-text">&nbsp;&nbsp;>&nbsp;</span>申请条件
                                <a href="javascript:;" class="title-bar-right"
                                   data-am-modal="{target: '#doc-modal-email1', closeViaDimmer: 0, width: 487}"><img
                                        src="/Public/daikuan_img/icon-email.png" alt=""/>保存产品信息到我的邮箱</a>
                            </p>
                        </div>
                        <?php echo ($show["tiaojian"]); ?>
                    </div>

                    <!-- 所需材料 -->
                    <div id="detail-part2" class="maodian-box"></div>
                    <div class="hl-detail-parts">
                        <div class="detail-box-title-bar">
                            <p><span class="blue-text">&nbsp;&nbsp;>&nbsp;</span>所需材料
                                <a href="javascript:;" class="title-bar-right"
                                   data-am-modal="{target: '#doc-modal-email1', closeViaDimmer: 0, width: 487}"><img
                                        src="/Public/daikuan_img/icon-email.png" alt=""/>保存产品信息到我的邮箱</a>
                            </p>
                        </div>
                        <?php echo ($show["cailiao"]); ?>
                    </div>

                    <!-- 还款说明 -->
                    <div id="detail-part3" class="maodian-box"></div>
                    <div class="hl-detail-parts">
                        <div class="detail-box-title-bar">
                            <p><span class="blue-text">&nbsp;&nbsp;>&nbsp;</span>还款说明
                                <a href="javascript:;" class="title-bar-right"
                                   data-am-modal="{target: '#doc-modal-email1', closeViaDimmer: 0, width: 487}"><img
                                        src="/Public/daikuan_img/icon-email.png" alt=""/>保存产品信息到我的邮箱</a>
                            </p>
                        </div>
                        <?php echo ($show["huankuan"]); ?>
                    </div>

                    <!-- 常见问答 -->
                    <div id="detail-part4" class="maodian-box"></div>

                    <br/>
                </div>

            </div>

        </div>
        <!-- 右侧部分 -->
        <div class="content-right-box">
            <div class="right-items-box no-border">
                <div class="right-items-title-hl"><i class="fang"></i>其他房贷工具</div>
                <div class="right-items-content-hl tools clearfix">
                    <a href="">首二套界定</a>
                    <a href="">提前还款计算器</a>
                    <a href="">我会被限购吗？</a>
                    <a href="">二手房交易</a>
                    <a href="">税费计算器</a>
                    <a href="">房产税计算器</a>
                    <a href="">还款状况计算器</a>
                </div>

            </div>
            <div class="right-items-box no-border">
                <div class="right-items-title-hl"><i class="zan"></i>结婚、装修贷款推荐</div>
                <div class="right-items-content-hl links clearfix">
                    <a href="">3万信用贷</a>
                    <a href="">5万信用贷</a>
                    <a href="">10万信用贷</a>
                    <a href="">15万信用贷</a>
                    <a href="">20万信用贷</a>
                    <a href="">大额信用卡</a>
                </div>
            </div>
            <div class="right-items-box no-border">
                <div class="right-items-title-hl"><i class="zhi"></i>按揭贷款知识</div>
                <div class="right-items-content-hl">
                    <a href="#" class="a-text">北京银行房贷新政怎么变？看这里</a>
                    <a href="#" class="a-text">中信银行个人贷款的条件</a>
                    <a href="#" class="a-text">北京部分银行已开始执行认房又认贷政策</a>
                    <a href="#" class="a-text">北京住房抵押贷款条件是什么？</a>
                    <a href="#" class="a-text"> 2016北京房贷最新政策</a>
                    <a href="#" class="a-text">2016北京房贷首付新政策是什么？</a>
                    <a href="#" class="a-text">上海房贷传言扑朔迷离，北京将何去何从？</a>
                    <a href="#" class="a-text">北京2016年8月房贷利率</a>
                    <a href="#" class="a-text">北京2016年7月房贷利率</a>
                    <a href="#" class="a-text">北京各家银行房贷掀价格战</a>
                    <a href="#" class="a-text">北京房展会少见北京房 销售称不愁卖不用来推销</a>
                </div>
            </div>
            <div class="right-items-box no-border">
                <div class="right-items-title-hl"><i class="lian"></i>房贷利率相关信息</div>
                <div class="right-items-content-hl">
                    <a class="a-text" href="#">利率折扣缩小 银行房贷全方位收紧</a>
                    <a class="a-text" href="#">普洱公积金贷款利率是多少</a>
                    <a class="a-text" href="#">大理公积金贷款利率是多少</a>
                    <a class="a-text" href="#">临沧公积金贷款利率是多少</a>
                    <a class="a-text" href="#">楚雄公积金贷款利率是多少</a>
                    <a class="a-text" href="#">玉溪公积金贷款利率是多少</a>
                    <a class="a-text" href="#">曲靖公积金贷款利率是多少</a>
                    <a class="a-text" href="#">昆明公积金贷款利率是多少</a>
                    <a class="a-text" href="#">铜仁公积金贷款利率是多少</a>
                    <a class="a-text" href="#">六盘水公积金贷款利率是多少</a>
                </div>
            </div>

        </div>
    </div>
    <div class="am-modal am-modal-no-btn" tabindex="-1" id="doc-modal-email">
        <div class="am-modal-dialog">
            <div class="email-popup-title">
                利率变化时通知我
                <a href="javascript: void(0)" class="am-close am-close-spin fr" data-am-modal-close>&times;</a>
            </div>
            <div class="email-popup-content">
                <div class="email-popup-container">
                    <p class="email-popup-hd">邮件通知我</p>
                    <input class="email-popup-input notify-email" type="email"/>
                    <a class="email-popup-button rate-changed" href="javascript:;">
                        发送
                    </a>
                    <p class="error-email">请输入正确的邮箱地址</p>
                </div>
            </div>
        </div>
    </div>
    <div class="am-modal am-modal-no-btn" tabindex="-1" id="doc-modal-email1">
        <div class="am-modal-dialog">
            <div class="email-popup-title">
                保存产品信息到邮箱
                <a href="javascript: void(0)" class="am-close am-close-spin fr" data-am-modal-close>&times;</a>
            </div>
            <div class="email-popup-content">
                <div class="email-popup-container">
                    <p class="email-popup-hd">邮箱地址</p>
                    <input class="email-popup-input save-email" type="email"/>
                    <a class="email-popup-button save-info" href="javascript:;">
                        发送
                    </a>
                    <p class="error-email1">请输入正确的邮箱地址</p>
                </div>
            </div>

        </div>
    </div>
    <div class="am-modal am-modal-no-btn" tabindex="-1" id="doc-modal-apply">
        <div class="am-modal-dialog">
            <div class="apply-popup-title">
                <a href="javascript: void(0)" class="am-close am-close-spin fr" data-am-modal-close>&times;</a>
            </div>
            <div class="apply-popup-content clearfix">
                <div class="apply-popup-container-l fl apply-completed-box">
                    <p class="apply-completed">申请完毕！</p>
                </div>
                <div class="apply-popup-container-l fl apply-box">
                    <div class="input-items name-box">
                        <span>您的称呼</span>
                        <input class="long-input name" type="text"/>

                        <p class="error-text"></p>
                    </div>
                    <div class="input-items phone-box">
                        <span>手机号码</span>
                        <input class="long-input phone" type="tel"/>

                        <p class="error-text"></p>
                    </div>
                    <div class="input-items yzm-box">
                        <span>验证码</span>
                        <input class="yanzhengma-input yzm" type="text"/>
                        <label class="yanzhengma-lb"></label>

                        <p class="error-text"></p>
                    </div>
                    <div class="input-items">
                        <span></span>
                        <a class="input-dxyz" href=""></a>
                        <a class="input-yyyz" href=""></a>

                        <p class="mind-gray-text">请注意查收验证码短信，如无法收到请尝试“语音”验证</p>
                    </div>
                    <div class="input-items sjyzm-box">
                        <span>手机验证码</span>
                        <input class="yanzhengma-input sjyzm" type="text"/>

                        <p class="error-text phone"></p>
                    </div>
                    <div class="input-items">
                        <span></span>
                        <input class="apply-submit-btn" value="完成" type="submit"/>

                        <p></p>
                    </div>
                </div>
                <div class="apply-popup-container-r fr">
                    <h6>特别声明：</h6>

                    <p>融360提供免费的贷款搜索和推荐服务，贷款过程中遇到的任何预先收费均为诈骗行为，请保持警惕避免损失。</p>
                    <br/>

                    <p>我们结合了您的基本情况和个人资产进行智能推荐，原则上如果您填写的信息越真实，我们推荐的产品也越精确。同时，填写虚假信息将对您办理贷款带来不利影响，建议您不要这么做。</p>
                </div>
            </div>

        </div>
    </div>
</div>

<!--footer开始-->
<div class="footer" id="footer">
    <div class="container pdr-no-scroll">
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
<script type="text/javascript">
    /*注册的验证*/
    $(function () {
        //申请
//        $(".apply-completed-box").hide();
//        $(".apply-box").show();
        $(".apply-submit-btn").click(function () {
            var name = $(".name").val();
            var phone = $(".phone").val();
            var yzm = $(".yzm").val();
            var sjyzm = $(".sjyzm").val();
            var phoneKey = /^1[3|4|5|7|8|9]\d{9}$/.test(phone);
            if (name == "") {
                $(".name-box .error-text").text("姓名不能为空！");
            } else if (phone == "") {
                $(".error-text").text("");
                $(".phone-box .error-text").text("手机号不能为空！");
            } else if (!phoneKey) {
                $(".error-text").text("");
                $(".phone-box .error-text").text("请正确填写您的手机号！");
            } else if (yzm == "") {
                $(".error-text").text("");
                $(".yzm-box .error-text").text("验证码不能为空！");
            } else if (sjyzm == "") {
                $(".error-text").text("");
                $(".sjyzm-box .error-text").text("手机验证码不能为空！");
            } else {
                $(".error-text").text("");
                $.ajax({
                    cache: true,
                    type: "POST",
                    url: "",
                    data: {name: name, phone: phone},
                    async: false,
                    error: function (request) {
                        //alert("Connection error");
                    },
                    success: function (data) {
                        $(".apply-completed-box").show();
                        $(".apply-box").hide();
                    }
                });
            }
        });

        // 利率变化通知邮件
        $(".rate-changed").click(function () {
            var email = $(".notify-email").val();
            var reg = /^([a-zA-Z0-9_-])+@([a-zA-Z0-9_-])+((\.[a-zA-Z0-9_-]{2,3}){1,2})$/;
            if(reg.test(email)){
                $(".error-email").hide();
                $.ajax({
                    cache: true,
                    type: "POST",
                    url: "",
                    data: {email: email},
                    async: false,
                    error: function (request) {
                        //alert("Connection error");
                    },
                    success: function (data) {
                        alert("发送成功");
                    }
                });
            }else{
                $(".error-email").show();
            }
        });
        // 保存产品信息邮件
        $(".save-info").click(function () {
            var email = $(".save-email").val();
            var reg = /^([a-zA-Z0-9_-])+@([a-zA-Z0-9_-])+((\.[a-zA-Z0-9_-]{2,3}){1,2})$/;
            if(reg.test(email)){
                $(".error-email1").hide();
                $.ajax({
                    cache: true,
                    type: "POST",
                    url: "",
                    data: {email: email},
                    async: false,
                    error: function (request) {
                        //alert("Connection error");
                    },
                    success: function (data) {
                        alert("产品信息已发送到您的邮箱");
                    }
                });
            }else{
                $(".error-email1").show();
            }
        });
    });
</script>
</body>
</html>