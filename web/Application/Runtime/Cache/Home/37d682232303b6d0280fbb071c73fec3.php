<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
<head lang="en">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=Edge">
    <title>微合伙文化传媒有限公司_微合伙科技有限公司_金融社交圈_金融趴官网_微合伙</title>
    <link rel="stylesheet" href="/Public/css/common.css"/>
    <link rel="stylesheet" href="/Public/css/common2.css"/>
    <link rel="stylesheet" href="/Public/css/datingInformation.css"/>
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
            <li><a href="">相亲首页</a></li>
            <li class="cur"><a href="">个人中心</a></li>
            <li><a href="">搜索</a></li>
            <li><a href="javascript:;">线下活动</a></li>
            <li><a href="">情感视界</a></li>
        </ul>
    </div>
</div>
<!--nav1结束-->

<div class="datingInfo-top">
    <span>
        <!--[if lt IE 9]>
        <img src="/Public/images/datingInfo-top.jpg" alt=""/>
        <![endif]-->
    </span>
</div>
<div class="datingInfo-info">
    <div class="container">
        <form action="<?php echo U('Dating/datinginfo_add');?>" method="post" id="myform">
            <ul>
                <li>
                    <span>昵称</span>
                    <input class="nick" type="text" id="nickname" name="nickname" placeholder="请输入您的姓名"/>
                </li>
                <li class="sex-box">
                    <span>我是</span>
                    <label><i></i><input type="radio" name="sex" value="男"/>男</label>
                    <label><i></i><input type="radio" name="sex" value="女"/>女</label>
                </li>
                <li>
                    <span>生日</span>
                    <div class="year-box common-box">
                        <div class="year-con common-con">
                            <input type="text" class="year" name="year" />
                            <i></i>
                        </div>
                        <div class="year-list common-list">
                            <a href="javascript:;" data-value="1999年">1999年</a>
                            <a href="javascript:;" data-value="1998年">1998年</a>
                            <a href="javascript:;" data-value="1997年">1997年</a>
                            <a href="javascript:;" data-value="1996年">1996年</a>
                            <a href="javascript:;" data-value="1995年">1995年</a>
                            <a href="javascript:;" data-value="1994年">1994年</a>
                            <a href="javascript:;" data-value="1993年">1993年</a>
                            <a href="javascript:;" data-value="1992年">1992年</a>
                            <a href="javascript:;" data-value="1991年">1991年</a>
                            <a href="javascript:;" data-value="1990年">1990年</a>
                            <a href="javascript:;" data-value="1989年">1989年</a>
                            <a href="javascript:;" data-value="1988年">1988年</a>
                            <a href="javascript:;" data-value="1987年">1987年</a>
                            <a href="javascript:;" data-value="1986年">1986年</a>
                            <a href="javascript:;" data-value="1985年">1985年</a>
                            <a href="javascript:;" data-value="1984年">1984年</a>
                            <a href="javascript:;" data-value="1983年">1983年</a>
                            <a href="javascript:;" data-value="1982年">1982年</a>
                            <a href="javascript:;" data-value="1981年">1981年</a>
                            <a href="javascript:;" data-value="1980年">1980年</a>
                            <a href="javascript:;" data-value="1979年">1979年</a>
                            <a href="javascript:;" data-value="1978年">1978年</a>
                            <a href="javascript:;" data-value="1977年">1977年</a>
                            <a href="javascript:;" data-value="1976年">1976年</a>
                            <a href="javascript:;" data-value="1975年">1975年</a>
                            <a href="javascript:;" data-value="1974年">1974年</a>
                            <a href="javascript:;" data-value="1973年">1973年</a>
                            <a href="javascript:;" data-value="1972年">1972年</a>
                            <a href="javascript:;" data-value="1971年">1971年</a>
                            <a href="javascript:;" data-value="1970年">1970年</a>
                            <a href="javascript:;" data-value="1969年">1969年</a>
                            <a href="javascript:;" data-value="1968年">1968年</a>
                            <a href="javascript:;" data-value="1967年">1967年</a>
                            <a href="javascript:;" data-value="1966年">1966年</a>
                            <a href="javascript:;" data-value="1965年">1965年</a>
                            <a href="javascript:;" data-value="1964年">1964年</a>
                            <a href="javascript:;" data-value="1963年">1963年</a>
                            <a href="javascript:;" data-value="1962年">1962年</a>
                            <a href="javascript:;" data-value="1961年">1961年</a>
                            <a href="javascript:;" data-value="1960年">1960年</a>
                        </div>
                    </div>
                    <div class="month-box common-box">
                        <div class="month-con common-con">
                            <input type="text" class="month" name="month" />
                            <i></i>
                        </div>
                        <div class="month-list common-list">
                            <a href="javascript:;" data-value="1月">1月</a>
                            <a href="javascript:;" data-value="2月">2月</a>
                            <a href="javascript:;" data-value="3月">3月</a>
                            <a href="javascript:;" data-value="4月">4月</a>
                            <a href="javascript:;" data-value="5月">5月</a>
                            <a href="javascript:;" data-value="6月">6月</a>
                            <a href="javascript:;" data-value="7月">7月</a>
                            <a href="javascript:;" data-value="8月">8月</a>
                            <a href="javascript:;" data-value="9月">9月</a>
                            <a href="javascript:;" data-value="10月">10月</a>
                            <a href="javascript:;" data-value="11月">11月</a>
                            <a href="javascript:;" data-value="12月">12月</a>
                        </div>
                    </div>
                    <div class="day-box common-box">
                        <div class="day-con common-con">
                            <input type="text" class="day" name="day" />
                            <i></i>
                        </div>
                        <div class="day-list common-list">
                            <a href="javascript:;" data-value="1日">1日</a>
                            <a href="javascript:;" data-value="2日">2日</a>
                            <a href="javascript:;" data-value="3日">3日</a>
                            <a href="javascript:;" data-value="4日">4日</a>
                            <a href="javascript:;" data-value="5日">5日</a>
                            <a href="javascript:;" data-value="6日">6日</a>
                            <a href="javascript:;" data-value="7日">7日</a>
                            <a href="javascript:;" data-value="8日">8日</a>
                            <a href="javascript:;" data-value="9日">9日</a>
                            <a href="javascript:;" data-value="10日">10日</a>
                            <a href="javascript:;" data-value="11日">11日</a>
                            <a href="javascript:;" data-value="12日">12日</a>
                            <a href="javascript:;" data-value="13日">13日</a>
                            <a href="javascript:;" data-value="14日">14日</a>
                            <a href="javascript:;" data-value="15日">15日</a>
                            <a href="javascript:;" data-value="16日">16日</a>
                            <a href="javascript:;" data-value="17日">17日</a>
                            <a href="javascript:;" data-value="18日">18日</a>
                            <a href="javascript:;" data-value="19日">19日</a>
                            <a href="javascript:;" data-value="20日">20日</a>
                            <a href="javascript:;" data-value="21日">21日</a>
                            <a href="javascript:;" data-value="22日">22日</a>
                            <a href="javascript:;" data-value="23日">23日</a>
                            <a href="javascript:;" data-value="24日">24日</a>
                            <a href="javascript:;" data-value="25日">25日</a>
                            <a href="javascript:;" data-value="26日">26日</a>
                            <a href="javascript:;" data-value="27日">27日</a>
                            <a href="javascript:;" data-value="28日">28日</a>
                            <a href="javascript:;" data-value="29日">29日</a>
                            <a href="javascript:;" data-value="30日">30日</a>
                            <a href="javascript:;" data-value="31日">31日</a>
                        </div>
                    </div>
                </li>
                <li>
                    <span>常住地</span>
                    <div class="area-box common-box">
                        <div class="area-con common-con">
                            <input type="text" class="area" name="area" />
                            <i></i>
                        </div>
                        <div class="area-list">
                            <h3>请选择省/直辖市</h3>
                            <div class="list1 clearfix">
                                <a href="javascript:;" data-value="北京">北京</a>
                                <a href="javascript:;" data-value="上海">上海</a>
                                <a href="javascript:;" data-value="广州">广州</a>
                                <a href="javascript:;" data-value="深圳">深圳</a>
                                <a href="javascript:;" data-value="重庆">重庆</a>
                                <a href="javascript:;" data-value="天津">天津</a>
                            </div>
                            <div class="list2 clearfix">
                                <a href="javascript:;" data-value="广东">广东</a>
                                <a href="javascript:;" data-value="江苏">江苏</a>
                                <a href="javascript:;" data-value="浙江">浙江</a>
                                <a href="javascript:;" data-value="四川">四川</a>
                                <a href="javascript:;" data-value="福建">福建</a>
                                <a href="javascript:;" data-value="山东">山东</a>

                                <a href="javascript:;" data-value="湖北">湖北</a>
                                <a href="javascript:;" data-value="河北">河北</a>
                                <a href="javascript:;" data-value="山西">山西</a>
                                <a href="javascript:;" data-value="内蒙古">内蒙古</a>
                                <a href="javascript:;" data-value="辽宁">辽宁</a>
                                <a href="javascript:;" data-value="吉林">吉林</a>

                                <a href="javascript:;" data-value="黑龙江">黑龙江</a>
                                <a href="javascript:;" data-value="安徽">安徽</a>
                                <a href="javascript:;" data-value="江西">江西</a>
                                <a href="javascript:;" data-value="河南">河南</a>
                                <a href="javascript:;" data-value="湖南">湖南</a>
                                <a href="javascript:;" data-value="广西">广西</a>

                                <a href="javascript:;" data-value="海南">海南</a>
                                <a href="javascript:;" data-value="贵州">贵州</a>
                                <a href="javascript:;" data-value="云南">云南</a>
                                <a href="javascript:;" data-value="西藏">西藏</a>
                                <a href="javascript:;" data-value="陕西">陕西</a>
                                <a href="javascript:;" data-value="甘肃">甘肃</a>

                                <a href="javascript:;" data-value="青海">青海</a>
                                <a href="javascript:;" data-value="宁夏">宁夏</a>
                                <a href="javascript:;" data-value="新疆">新疆</a>
                            </div>
                            <div class="list3 clearfix">
                                <a href="javascript:;" data-value="不限">不限</a>
                            </div>
                        </div>
                    </div>
                </li>
                <li class="marry-box">
                    <span>婚姻状况</span>
                    <label class="cur"><i></i><input type="radio" name="marry" checked="checked" value="未婚" />未婚</label>
                    <label><i></i><input type="radio" name="marry" value=" 离异" /> 离异</label>
                    <label><i></i><input type="radio" name="marry" value="丧偶" />丧偶</label>
                </li>
                <li>
                    <span>身高</span>
                    <div class="height-box common-box">
                        <div class="height-con common-con">
                            <input type="text" name="height" id="height" class="height" placeholder="请输入您的身高"/>
                            <i></i>
                        </div>
                        <div class="height-list common-list">
                            <a href="javascript:;" data-value="150以下">150以下</a>
                            <a href="javascript:;" data-value="150-155">150-155</a>
                            <a href="javascript:;" data-value="155-160">155-160</a>
                            <a href="javascript:;" data-value="160-165">160-165</a>
                            <a href="javascript:;" data-value="165-170">165-170</a>
                            <a href="javascript:;" data-value="170-175">170-175</a>
                            <a href="javascript:;" data-value="175-180">175-180</a>
                            <a href="javascript:;" data-value="180-185">180-185</a>
                            <a href="javascript:;" data-value="185-190">185-190</a>
                            <a href="javascript:;" data-value="190以上">190以上</a>
                        </div>
                    </div>
                </li>
                <li>
                    <span>学历</span>
                    <div class="edu-box common-box">
                        <div class="edu-con common-con">
                            <input type="text" class="edu" name="education" />
                            <i></i>
                        </div>
                        <div class="edu-list common-list">
                            <a href="javascript:;" data-value="大专">大专</a>
                            <a href="javascript:;" data-value="本科">本科</a>
                            <a href="javascript:;" data-value="硕士">硕士</a>
                            <a href="javascript:;" data-value="博士">博士</a>
                            <a href="javascript:;" data-value="其他">其他</a>
                        </div>
                    </div>
                </li>
                <li>
                    <span>月薪</span>
                    <div class="salary-box common-box">
                        <div class="salary-con common-con">
                            <input type="text" class="salary" name="salary" id="salary" />
                            <i></i>
                        </div>
                        <div class="salary-list common-list">
                            <a href="javascript:;" data-value="2000元以下">2000元以下</a>
                            <a href="javascript:;" data-value="2000-5000元">2000-5000元</a>
                            <a href="javascript:;" data-value="5000-10000元">5000-10000元</a>
                            <a href="javascript:;" data-value="10000-15000元">10000-15000元</a>
                            <a href="javascript:;" data-value="15000-20000元">15000-20000元</a>
                            <a href="javascript:;" data-value="20000-25000元">20000-25000元</a>
                            <a href="javascript:;" data-value="25000元以上">25000元以上</a>
                        </div>
                    </div>
                </li>
                <li>
                    <div class="submit">保存信息</div>
                </li>
            </ul>
        </form>
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
        selectBox(".year-con");
        selectBox(".month-con");
        selectBox(".day-con");
        selectBox(".area-con");
        selectBox(".edu-con");
        selectBox(".salary-con");
        selectBox(".height-con");
        function selectBox(box){
            $(box).find('input').attr("readonly",true).focusin(function(){
                $(box).next().show();
            }).focusout(function(){
                setTimeout(function(){
                    $(box).next().hide();
                },200)
            });
        }
    });
    $(function(){
        selectItem(".year-box");
        selectItem(".month-box");
        selectItem(".day-box");
        selectItem(".edu-box");
        selectItem(".salary-box");
        selectItem(".height-box");
        function selectItem(box){
            $(box).find("a").click(function(){
                $(this).parent().css("display","none");
                $(box).find("input").val($(this).attr("data-value"));
            })
        }

        $(".area-list a").click(function(){
            $(".area-box input").val($(this).attr("data-value"));
            $(".area-list").css("display","none");
        })
    });

    $(function(){
        singleSelect1(".sex-box");
        singleSelect1(".marry-box");

        function singleSelect1(box){
            $(box).find('input').click(function(){
                $(this).attr('checked','checked').parent().siblings().find("input").removeAttr('checked');
                $(this).parent().addClass('cur').siblings().removeClass('cur');
            })
        }
    });


    $(function(){
        $('form ul li .submit').click(function(){
            var height=$('#height').val();
            var nickname=$('#nickname').val();
            if (nickname=='') {
                alert('昵称不能为空');
                $('nickname').focus();
                return false;
            }
            // if (height!='' && !/^[0-9]{0,3}$/.test(height) ) {
            //     alert('身高必修是三位内的数字');
            //     $('#height').focus();
            //     $('#height').val('')
            //     return false;
            // }
            var salary=$('#salary').val();
            if (salary!='' && !/^[0-9]{0,10}$/.test(salary) && salary!='2000元以下' && salary!='2000-5000元' && salary!='5000-10000元' && salary!='10000-15000元' && salary!='15000-20000元' && salary!='20000-25000元' && salary!='25000元以上' ) {
                alert('薪水必填');
                $('#salary').focus();
                $('#salary').val('')
                return false;
            }
            document.getElementById("myform").submit();
        });
    });

</script>
</body>
</html>