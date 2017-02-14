<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
<head lang="en">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=Edge">
    <title>微合伙文化传媒有限公司_微合伙科技有限公司_金融社交圈_金融趴官网_微合伙</title>
    <link rel="stylesheet" href="/Public/css/common.css"/>
    <link rel="stylesheet" href="/Public/css/common2.css"/>
    <link rel="stylesheet" href="/Public/css/personalLoan.css"/>

</head>
<body>
<!--nav开始-->



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


<!--nav结束-->

<!--<div class="nav">-->
    <!--<div class="container">-->
        <!--<ul class="clearfix">-->
            <!--<li><a href="javascript:;">贷款产品</a>|</li>-->
            <!--<li><a href="javascript:;">贷款</a>|</li>-->
            <!--<li><a href="javascript:;">车贷</a>|</li>-->
            <!--<li><a href="javascript:;">房贷</a>|</li>-->
            <!--<li class="cur"><a href="<?php echo U('Daikuan/creditList');?>">信用卡</a></li>-->
            <!--<li><a href="<?php echo U('Daikuan/userlogin');?>">我要贷款</a></li>-->
        <!--</ul>-->
    <!--</div>-->
<!--</div>-->

<div class="part1">
    <div class="container">
        <ul class="clearfix">
            <li class="cur"><a href="<?php echo U('Daikuan/personalloan');?>">贷款产品</a></li>
            <!--<li><a href="javascript:;">贷款</a>|</li>-->
            <!--<li><a href="javascript:;">车贷</a>|</li>-->
            <li><a href="<?php echo U('Daikuan/houseLoanList');?>">房贷</a>|</li>
            <li><a href="<?php echo U('Daikuan/creditList');?>">信用卡</a></li>
            <li><a href="<?php echo U('Daikuan/userlogin');?>">经理入驻</a></li>
        </ul>
    </div>
</div>
<div class="part2">
    <div class="container clearfix">
        <form action="<?php echo U('Daikuan/personalloan');?>" method="post">
            <input type="hidden" name="shenfen" value="<?php echo ($shenfen); ?>">
            <input type="hidden" name="diya" value="<?php echo ($diya); ?>">
        <div class="money clearfix">
            <span>贷款金额</span>
            <div class="money-box common-box">
                <div class="money-con common-con">
                    <input type="text" name="daikuan" value="<?php if($daikuan){ echo $daikuan;}else{ echo $_GET['daikuan']; } ?>"/>
                    <i></i>
                </div>
                <div class="money-list common-list">
                    <a href="javascript:;" value="0.3" data-value="0.3万">0.3万</a>
                    <a href="javascript:;" value="1" data-value="1万">1万</a>
                    <a href="javascript:;" value="3" data-value="3万">3万</a>
                    <a href="javascript:;" value="5" data-value="5万">5万</a>
                    <a href="javascript:;" value="10" data-value="10万">10万</a>
                    <a href="javascript:;" value="20" data-value="20万">20万</a>
                    <a href="javascript:;" value="50"  data-value="50万">50万</a>
                    <a href="javascript:;" value="100" data-value="100万">100万</a>
                </div>
            </div>
        </div>
        <div class="deadline clearfix">
            <span>贷款期限</span>
            <div class="deadline-box common-box">
                <div class="deadline-con common-con">
                    <input type="text" name="qixians" value="<?php if($qixians){ echo $qixians;}else{ echo $_GET['qixians']; } ?>"/>
                    <i></i>
                </div>
                <div class="deadline-list common-list">
                    <a href="javascript:;"  data-value="3个月">3个月</a>
                    <a href="javascript:;"  data-value="6个月">6个月</a>
                    <a href="javascript:;" data-value="12个月">12个月</a>
                    <a href="javascript:;" data-value="24个月">2年</a>
                    <a href="javascript:;" data-value="36个月">3年</a>
                    <a href="javascript:;" data-value="60个月">5年</a>
                    <a href="javascript:;" data-value="120个月">10年</a>
                </div>
            </div>
        </div>
        <div class="search">
            <input type="submit" value="搜索">
            <!--<a href="javascript:;">搜索</a>-->
        </div>
        </form>
    </div>
</div>
<div class="part3">
    <div class="container clearfix">
        <div class="part3-left">
            <div class="part3-left-top clearfix">
                <div class="institution-box common-box">
                    <div class="institution-con common-con">
                        <input type="text" <?php if($shenfen){ echo "value=".$shenfen; }else{ echo "value='职业身份'";} ?> />
                        <i></i>
                    </div>
                    <div class="institution-list common-list">
                        <a href="?m=Home&c=Daikuan&a=personalloan&shenfen=上班族<?php if($diya){ echo '&diya='.$diya;} if($qixians){ echo '&qixians='.$qixians;} if($daikuan){ echo '&daikuan='.$daikuan;} ?>" data-value="上班族">上班族</a>
                        <a href="?m=Home&c=Daikuan&a=personalloan&shenfen=企业主<?php if($diya){ echo '&diya='.$diya;} if($qixians){ echo '&qixians='.$qixians;} if($daikuan){ echo '&daikuan='.$daikuan;} ?>" data-value="企业主">企业主</a>
                        <a href="?m=Home&c=Daikuan&a=personalloan&shenfen=个体户<?php if($diya){ echo '&diya='.$diya;} if($qixians){ echo '&qixians='.$qixians;} if($daikuan){ echo '&daikuan='.$daikuan;} ?>" data-value="个体户 ">个体户 </a>
                        <a href="?m=Home&c=Daikuan&a=personalloan&shenfen=无身份限制<?php if($diya){ echo '&diya='.$diya;} if($qixians){ echo '&qixians='.$qixians;} if($daikuan){ echo '&daikuan='.$daikuan;} ?>" data-value="无固定职业 ">无固定职业 </a>
                        <a href="?m=Home&c=Daikuan&a=personalloan&shenfen=学生<?php if($diya){ echo '&diya='.$diya;} if($qixians){ echo '&qixians='.$qixians;} if($daikuan){ echo '&daikuan='.$daikuan;} ?>" data-value="个体户 ">学生 </a>
                    </div>
                </div>
                <div class="mortgage-box common-box">
                    <div class="mortgage-con common-con">
                        <input type="text" <?php if($diya){ echo "value=".$diya; }else{ echo "value='不限抵押类型'";} ?> />
                        <i></i>
                    </div>
                    <div class="mortgage-list common-list">
                        <a href="?m=Home&c=Daikuan&a=personalloan&diya=无需抵押<?php if($shenfen){ echo '&shenfen='.$shenfen;} if($qixians){ echo '&qixians='.$qixians;} if($daikuan){ echo '&daikuan='.$daikuan;} ?>" data-value="不限抵押">不限抵押</a>
                        <a href="?m=Home&c=Daikuan&a=personalloan&diya=车辆抵押<?php if($shenfen){ echo '&shenfen='.$shenfen;} if($qixians){ echo '&qixians='.$qixians;} if($daikuan){ echo '&daikuan='.$daikuan;} ?>" data-value="车辆抵押">车辆抵押</a>
                        <a href="?m=Home&c=Daikuan&a=personalloan&diya=房屋抵押<?php if($shenfen){ echo '&shenfen='.$shenfen;} if($qixians){ echo '&qixians='.$qixians;} if($daikuan){ echo '&daikuan='.$daikuan;} ?>" data-value="房屋抵押">房屋抵押</a>
                        <a href="?m=Home&c=Daikuan&a=personalloan&diya=其他抵押物<?php if($shenfen){ echo '&shenfen='.$shenfen;} if($qixians){ echo '&qixians='.$qixians;} if($daikuan){ echo '&daikuan='.$daikuan;} ?>" data-value="其他抵押物">其他抵押物</a>
                        <a href="?m=Home&c=Daikuan&a=personalloan&diya=信用卡<?php if($shenfen){ echo '&shenfen='.$shenfen;} if($qixians){ echo '&qixians='.$qixians;} if($daikuan){ echo '&daikuan='.$daikuan;} ?>" data-value="信用卡">信用卡</a>
                    </div>
                </div>
                <!--<div class="refund-box common-box">-->
                    <!--<div class="refund-con common-con">-->
                        <!--<input type="text" value="不限还款方式" />-->
                        <!--<i></i>-->
                    <!--</div>-->
                    <!--<div class="refund-list common-list">-->
                        <!--<a href="javascript:;" data-value="不限还款方式">不限还款方式</a>-->
                        <!--<a href="javascript:;" data-value="分期还款">分期还款</a>-->
                        <!--<a href="javascript:;" data-value="到期还款">到期还款</a>-->
                        <!--<a href="javascript:;" data-value="随借随还">随借随还</a>-->
                    <!--</div>-->
                <!--</div>-->
                <!--<div class="search">-->
                    <!--<input type="submit" value="搜索">-->
                    <!--&lt;!&ndash;<a href="javascript:;">搜索</a>&ndash;&gt;-->
                <!--</div>-->
            </div>
            <div class="part3-left-middle">
                <ul>
                    <?php if(is_array($list)): foreach($list as $key=>$list): ?><li class="clearfix">
                        <div class="part3-img">
                            <img src="<?php echo ($list["logo"]); ?>" alt=""/>
                        </div>
                        <div class="part3-state">
                            <p>
                                <span class="red"><?php echo ($list["name"]); ?></span><br>
                                <span><?php echo ($list["diya"]); ?></span>
                                <span><?php echo ($list["shenqing"]); ?></span>
                                <span><?php echo ($list["fangkuan"]); ?></span>
                            </p>
                            <p>
                                <span><?php echo ($list["yaoqiu1"]); ?></span><br>
                                <span><?php echo ($list["yaoqiu2"]); ?></span><br>
                                <span><?php echo ($list["yaoqiu3"]); ?></span><br>
                            </p>
                        </div>
                        <div class="part3-check">
                            <a href="<?php echo U('Daikuan/loanproarticle',array('id'=>$list['id']));?>">查看</a>
                            <p><span class="count"><?php echo ($list["renshu"]); ?></span></p>
                        </div>
                    </li><?php endforeach; endif; ?>
                </ul>
            </div>
            <link href="/Public/css/mypage.css" rel="stylesheet" type="text/css"/>
            <div class="part3-left-list">
                <tr class="content">
                    <!--<td colspan="3" bgcolor="#FFFFFF">&nbsp;<?php echo ($page); ?></td>-->
                    <td colspan="3" bgcolor="#FFFFFF"><div class="pages">
                        <?php echo ($page); ?>
                    </div></td>
                </tr>
            </div>
            <div class="part3-left-bottom">
                <a href="msgConsulting1.php">
                    <img src="/Public/images/personalLoan-part3-icon.png" alt=""/>
                </a>
            </div>
        </div>
        <div class="part3-right">
            <h3>贷款咨询顾问</h3>
            <ul>
                <li>
                    <a class="part3-right-img" href="javascript:;">
                        <img src="/Public/images/personalLoan-part3-list01.png" alt=""/>
                    </a>
                    <div class="part3-right-state">
                        <h4><a href="loanAdviser.php">韩经理</a></h4>
                        <p><a href="loanAdviser.php">宜信</a></p>
                        <span>广告</span>
                    </div>
                </li>
                <li>
                    <a class="part3-right-img" href="loanAdviser.php">
                        <img src="/Public/images/personalLoan-part3-list01.png" alt=""/>
                    </a>
                    <div class="part3-right-state">
                        <h4><a href="loanAdviser.php">魏经理</a></h4>
                        <p><a href="loanAdviser.php">商业银行</a></p>
                        <span>广告</span>
                    </div>
                </li>
                <li>
                    <a class="part3-right-img" href="javascript:;">
                        <img src="/Public/images/personalLoan-part3-list01.png" alt=""/>
                    </a>
                    <div class="part3-right-state">
                        <h4><a href="javascript:;">高经理</a></h4>
                        <p><a href="javascript:;">渣打银行</a></p>
                        <span>广告</span>
                    </div>
                </li>
                <li>
                    <a class="part3-right-img" href="javascript:;">
                        <img src="/Public/images/personalLoan-part3-list01.png" alt=""/>
                    </a>
                    <div class="part3-right-state">
                        <h4><a href="javascript:;">霍经理</a></h4>
                        <p><a href="javascript:;">广发银行</a></p>
                        <span>广告</span>
                    </div>
                </li>
            </ul>
            <div class="part3-right-bottom">
                <a href="msgConsulting1.php">
                    <img src="/Public/images/personalLoan-part3-icon2.png" alt=""/>
                </a>
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
        selectBox(".money-con");
        selectBox(".deadline-con");
        selectBox(".institution-con");
        selectBox(".mortgage-con");
        selectBox(".refund-con");

        function selectBox(box){
            $(box).find('input').focusin(function(){
                $(box).next().show();
            }).focusout(function(){
                setTimeout(function(){
                    $(box).next().hide();
                },200)
            });

            $(box).find('i').click(function(){
                console.log($(this));
                if($(box).next().is(':visible')){
                    $(box).next().hide();
                }else if($(box).next().is(':hidden')){
                    $(box).next().show();
                }
            })
        }

    });

    $(function(){
        selectItem(".money-box");
        selectItem(".deadline-box");
        selectItem(".institution-box");
        selectItem(".mortgage-box");
        selectItem(".refund-box");

        function selectItem(box){
            var val1;
            $(box).find("a").click(function(){
                val1 = $(this).attr("data-value");
                $(box).find("input").val(val1);
                $(this).parent().css("display","none");
            });
        }
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