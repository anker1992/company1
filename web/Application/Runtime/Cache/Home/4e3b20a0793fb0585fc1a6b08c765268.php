<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
<head lang="en">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=Edge">
    <title>微合伙文化传媒有限公司_微合伙科技有限公司_金融社交圈_金融趴官网_微合伙</title>
    <link rel="stylesheet" href="/Public/css/common.css"/>
    <link rel="stylesheet" href="/Public/css/common2.css"/>
    <link rel="stylesheet" href="/Public/css/datingPersonal.css"/>
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
            <li class="cur"><a href="<?php echo U('Dating/datingexpand');?>">个人中心</a></li>
            <li><a href="<?php echo U('Dating/datingsearch');?>">搜索</a></li>
            <li><a href="javascript:;">线下活动</a></li>
            <li><a href="<?php echo U('Dating/datingcase');?>">情感视界</a></li>
        </ul>
    </div>
</div>
<!--nav1结束-->

<div class="content">
    <div class="container clearfix">
        <div class="content-left left">
            <!--昵称和头像-->
            <form action="<?php echo U('Dating/check_nickname');?>" id="form" method='post' ENCTYPE="multipart/form-data">
                <div class="content-left-top">
                    <div class="content-img">
                                <?php if($basic['touxiang_src']){ ?>
                                <img class="shade" src="<?php echo ($basic["touxiang_src"]); ?>" alt=""/>
                                <?php }else{ ?>
                                <img class="shade" src="/Public/images/personal-portrait.png" alt=""/>
                                <?php } ?>
                        <div class="shade"></div>
                        <p class="user-avatar hide">上传头像<input type="file" name="user-avatar" /></p>
                    </div>
                </div>
                <!-- 昵称 -->
                <div class="brief">
                    <div class="brief-head edit">
                        <h3><?php echo ($basic["nickname"]); ?></h3>
                        <span><i></i>编辑</span>
                    </div>

                        <input type="hidden" name="gl_phone" id="glid" value="<?php echo ($_COOKIE['think_user_name']); ?>">
                        <div class="brief-head-edit hide item-save">
                            <input type="text" class="nick" placeholder="请输入您的姓名或昵称" name="nickname"
                                   value="<?php echo ($basic["nickname"]); ?>"/>
                            <span><i></i>保存</span>
                        </div>

                    <div class="brief-content">
                        <p>会员身份：<span>普通会员</span></p>
                    </div>
                </div>
            </form>
                <!-- 个人状况 -->
                <form action="<?php echo U('Dating/check_selfstatus',array('id'=>$mid));?>" id="form1" method='post'>
                    <input type="hidden" name="uid" value="<?php echo ($_COOKIE['think_user_id']); ?>" />
                    <div class="personalState mt45">
                        <div class="personalState-head special-head clearfix">
                            <div class="personalState-title special-title">
                                <span class="before"></span>
                                <span class="title">个人状况</span>
                                <span class="after"></span>
                            </div>
                            <span class="edit"><i></i>编辑</span>
                            <span class="item-save hide"><i></i>保存</span>
                        </div>
                        <div class="personalState-show clearfix mt50">
                            <div class="personalState-left">
                                <div class="age mb20"><label>年龄：</label><span><?php echo ($expand["age"]); ?></span></div>
                                <div class="residence mb20"><label>户口：</label><span><?php echo ($expand["hukou"]); ?></span>
                                </div>
                                <div class="zodiac mb20">
                                    <label>属相：</label><span><?php echo ($expand["tweleveanimals"]); ?></span></div>
                                <div class="height mb20"><label>身高：</label><span><?php echo ($basic["height"]); ?></span></div>
                                <div class="blood mb20"><label>血型：</label><span><?php echo ($expand["bloodtype"]); ?></span>
                                </div>
                                <div class="education mb20"><label>学历：</label><span><?php echo ($basic["education"]); ?></span>
                                </div>
                                <div class="position mb20"><label>职业：</label><span><?php echo ($expand["profession"]); ?></span>
                                </div>
                                <div class="house mb20"><label>购房：</label><span><?php echo ($expand["ifbuyhouse"]); ?></span>
                                </div>
                                <div class="marry mb20">
                                    <label>婚姻状况：</label><span><?php echo ($basic["maritalstatus"]); ?></span></div>
                            </div>
                            <div class="personalState-right">
                                <div class="national mb20"><label>民族：</label><span><?php echo ($expand["nation"]); ?></span>
                                </div>
                                <div class="constellation mb20">
                                    <label>星座：</label><span><?php echo ($expand["constellation"]); ?></span></div>
                                <div class="weight mb20"><label>体重：</label><span><?php echo ($expand["weight"]); ?>KG</span></div>
                                <div class="living mb20"><label>现居住地：</label><span><?php echo ($basic["workarea"]); ?></span>
                                </div>
                                <div class="companyNature mb20">
                                    <label>公司性质：</label><span><?php echo ($expand["companytype"]); ?></span></div>
                                <div class="salary mb20"><label>月薪：</label><span><?php echo ($basic["salary"]); ?></span></div>
                                <div class="car mb20"><label>购车：</label><span><?php echo ($expand["ifbuycar"]); ?></span></div>
                                <div class="children mb20">
                                    <label>有无子女：</label><span><?php echo ($expand["ifhaschild"]); ?></span></div>
                            </div>
                        </div>
                        <div class="personalState-edit hide clearfix mt50">
                            <div class="personalState-left">
                                <div class="age mb20">
                                    <label>年龄：</label>
                                    <div class="age-box common-box">
                                        <div class="age-con common-con">
                                            <input type="text" name="age" value="<?php echo ($expand["age"]); ?>" readonly="true"/>
                                            <i></i>
                                        </div>
                                        <div class="age-list common-list hide">
                                            <?php $__FOR_START_284954248__=18;$__FOR_END_284954248__=51;for($i=$__FOR_START_284954248__;$i < $__FOR_END_284954248__;$i+=1){ ?><a href="javascript:;" data-value="<?php echo ($i); ?>岁"><?php echo ($i); ?>岁</a><?php } ?>
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
                                        </div>
                                    </div>
                                </div>
                                <div class="hometown mb20">
                                    <label>户口：</label>
                                    <div class="hometown-box common-box">
                                        <div class="hometown-con common-con">
                                            <input type="text" placeholder="请输入您户口所在地" name="hukou"
                                                   value="<?php echo ($expand["hukou"]); ?>"/>
                                            <i></i>
                                        </div>
                                        <div class="hometown-list">
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
                                </div>
                                <!--<div class="residence mb20">-->
                                    <!--<label>户口：</label>-->
                                    <!--<div class="residence-box common-box">-->
                                        <!--<div class="residence-con common-con">-->
                                            <!--<input type="text" placeholder="请输入您户口所在地" name="hukou"-->
                                           <!--value="<?php echo ($expand["hukou"]); ?>"/>-->
                                            <!--<i></i>-->
                                        <!--</div>-->
                                    <!--</div>-->
                                <!--</div>-->
                                <div class="zodiac mb20">
                                    <label>属相：</label>
                                    <div class="zodiac-box common-box">
                                        <div class="zodiac-con common-con">
                                            <input type="text" placeholder="请输入您的属相" name="tweleveanimals"
                                                   value="<?php echo ($expand["tweleveanimals"]); ?>"/>
                                            <i></i>
                                        </div>
                                        <div class="zodiac-list common-list">
                                            <a href="javascript:;" data-value="鼠">鼠</a>
                                            <a href="javascript:;" data-value="牛">牛</a>
                                            <a href="javascript:;" data-value="虎">虎</a>
                                            <a href="javascript:;" data-value="兔">兔</a>
                                            <a href="javascript:;" data-value="龙">龙</a>
                                            <a href="javascript:;" data-value="蛇">蛇</a>
                                            <a href="javascript:;" data-value="马">马</a>
                                            <a href="javascript:;" data-value="羊">羊</a>
                                            <a href="javascript:;" data-value="猴">猴</a>
                                            <a href="javascript:;" data-value="鸡">鸡</a>
                                            <a href="javascript:;" data-value="狗">狗</a>
                                            <a href="javascript:;" data-value="猪">猪</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="height mb20">
                                    <label>身高：</label>
                                    <div class="height-box common-box">
                                        <div class="height-con common-con">
                                            <input type="text" name="height" id="height"
                                                   value="<?php echo ($basic["height"]); ?>"/>
                                            <i></i>
                                        </div>
                                        <div class="height-list common-list hide">
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
                                </div>
                                <div class="blood mb20">
                                    <label>血型：</label>
                                    <div class="blood-box common-box">
                                        <div class="blood-con common-con">
                                            <input type="text" placeholder="请输入您的血型" name="bloodtype"
                                                   value="<?php echo ($expand["bloodtype"]); ?>"/>
                                            <i></i>
                                        </div>
                                        <div class="blood-list common-list">
                                            <a href="javascript:;" data-value="A型">A型</a>
                                            <a href="javascript:;" data-value="B型">B型</a>
                                            <a href="javascript:;" data-value="AB型">AB型</a>
                                            <a href="javascript:;" data-value="O型">O型</a>
                                            <a href="javascript:;" data-value="不限">未知</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="education mb20">
                                    <label>学历：</label>

                                    <div class="edu-box common-box">
                                        <div class="edu-con common-con">
                                            <input type="text" name="education" value="<?php echo ($basic["education"]); ?>"/>
                                            <i></i>
                                        </div>
                                        <div class="edu-list common-list hide">
                                            <a href="javascript:;" data-value="大专">大专</a>
                                            <a href="javascript:;" data-value="本科">本科</a>
                                            <a href="javascript:;" data-value="研究生">研究生</a>
                                            <a href="javascript:;" data-value="博士生">博士生</a>
                                            <a href="javascript:;" data-value="其他">其他</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="position mb20">
                                    <label>职业：</label>
                                    <input type="text" placeholder="请输入您的职业" name="profession"
                                           value="<?php echo ($expand["profession"]); ?>"/>
                                </div>
                                <div class="house mb20">
                                    <label>购房：</label>
                                    <div class="house-box common-box">
                                        <div class="house-con common-con">
                                            <input type="text" name="ifbuyhouse"
                                                   value="<?php echo ($expand["ifbuyhouse"]); ?>"/>
                                            <i></i>
                                        </div>
                                        <div class="house-list common-list hide">
                                            <a href="javascript:;" data-value="有房(有房贷)">有房(有房贷)</a>
                                            <a href="javascript:;" data-value="有房(无房贷)">有房(无房贷)</a>
                                            <a href="javascript:;" data-value="无房">无房</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="marry mb20">
                                    <label>婚姻状况：</label>
                                    <div class="marry-box common-box">
                                        <div class="marry-con common-con">
                                            <input type="text" name="maritalstatus" value="<?php echo ($basic["maritalstatus"]); ?>"/>
                                            <i></i>
                                        </div>
                                        <div class="marry-list common-list hide">
                                            <a href="javascript:;" data-value="未婚">未婚</a>
                                            <a href="javascript:;" data-value="离异">离异</a>
                                            <a href="javascript:;" data-value="丧偶">丧偶</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="personalState-right">
                                <div class="national mb20">
                                    <label>民族：</label>
                                    <div class="national-box common-box">
                                        <div class="national-con common-con">
                                            <input type="text" placeholder="请输入您的民族" name="nation"
                                                   value="<?php echo ($expand["nation"]); ?>"/>
                                            <i></i>
                                        </div>
                                        <div class="national-list common-list">
                                            <a href="javascript:;" data-value="汉族">汉族</a>
                                            <a href="javascript:;" data-value="藏族">藏族</a>
                                            <a href="javascript:;" data-value="朝鲜族">朝鲜族</a>
                                            <a href="javascript:;" data-value="蒙古族">蒙古族</a>
                                            <a href="javascript:;" data-value="回族">回族</a>
                                            <a href="javascript:;" data-value="满族">满族</a>
                                            <a href="javascript:;" data-value="维吾尔族">维吾尔族</a>
                                            <a href="javascript:;" data-value="壮族">壮族</a>
                                            <a href="javascript:;" data-value="彝族">彝族</a>
                                            <a href="javascript:;" data-value="苗族">苗族</a>
                                            <a href="javascript:;" data-value="侗族">侗族</a>
                                            <a href="javascript:;" data-value="瑶族">瑶族</a>
                                            <a href="javascript:;" data-value="白族">白族</a>
                                            <a href="javascript:;" data-value="布依族">布依族</a>
                                            <a href="javascript:;" data-value="傣族">傣族</a>
                                            <a href="javascript:;" data-value="京族">京族</a>
                                            <a href="javascript:;" data-value="黎族">黎族</a>
                                            <a href="javascript:;" data-value="羌族">羌族</a>
                                            <a href="javascript:;" data-value="怒族">怒族</a>
                                            <a href="javascript:;" data-value="佤族">佤族</a>
                                            <a href="javascript:;" data-value="水族">水族</a>
                                            <a href="javascript:;" data-value="畲族">畲族</a>
                                            <a href="javascript:;" data-value="土族">土族</a>
                                            <a href="javascript:;" data-value="阿昌族">阿昌族</a>
                                            <a href="javascript:;" data-value="哈尼族">哈尼族</a>
                                            <a href="javascript:;" data-value="高山族">高山族</a>
                                            <a href="javascript:;" data-value="景颇族">景颇族</a>
                                            <a href="javascript:;" data-value="珞巴族">珞巴族</a>
                                            <a href="javascript:;" data-value="锡伯族">锡伯族</a>
                                            <a href="javascript:;" data-value="德昂(崩龙)族">德昂(崩龙)族</a>
                                            <a href="javascript:;" data-value="保安族">保安族</a>
                                            <a href="javascript:;" data-value="基诺族">基诺族</a>
                                            <a href="javascript:;" data-value="门巴族">门巴族</a>
                                            <a href="javascript:;" data-value="毛南族">毛南族</a>
                                            <a href="javascript:;" data-value="赫哲族">赫哲族</a>
                                            <a href="javascript:;" data-value="裕固族">裕固族</a>
                                            <a href="javascript:;" data-value="撒拉族">撒拉族</a>
                                            <a href="javascript:;" data-value="独龙族">独龙族</a>
                                            <a href="javascript:;" data-value="普米族">普米族</a>
                                            <a href="javascript:;" data-value="仫佬族">仫佬族</a>
                                            <a href="javascript:;" data-value="仡佬族">仡佬族</a>
                                            <a href="javascript:;" data-value="东乡族">东乡族</a>
                                            <a href="javascript:;" data-value="拉祜族">拉祜族</a>
                                            <a href="javascript:;" data-value="土家族">土家族</a>
                                            <a href="javascript:;" data-value="纳西族">纳西族</a>
                                            <a href="javascript:;" data-value="傈僳族">傈僳族</a>
                                            <a href="javascript:;" data-value="布朗族">布朗族</a>
                                            <a href="javascript:;" data-value="哈萨克族">哈萨克族</a>
                                            <a href="javascript:;" data-value="达斡尔族">达斡尔族</a>
                                            <a href="javascript:;" data-value="鄂伦春族">鄂伦春族</a>
                                            <a href="javascript:;" data-value="鄂温克族">鄂温克族</a>
                                            <a href="javascript:;" data-value="俄罗斯族">俄罗斯族</a>
                                            <a href="javascript:;" data-value="塔塔尔族">塔塔尔族</a>
                                            <a href="javascript:;" data-value="塔吉克族">塔吉克族</a>
                                            <a href="javascript:;" data-value="柯尔克孜族">柯尔克孜族</a>
                                            <a href="javascript:;" data-value="乌兹别克族">乌兹别克族</a>
                                            <a href="javascript:;" data-value="国外">国外</a>
                                        </div>
                                    </div>
                                </div>

                                <div class="constellation mb20">
                                    <label>星座：</label>
                                    <div class="constellation-box common-box">
                                        <div class="constellation-con common-con">
                                            <input type="text" placeholder="请输入您的星座" name="constellation"
                                                   value="<?php echo ($expand["constellation"]); ?>"/>
                                            <i></i>
                                        </div>
                                        <div class="constellation-list common-list">
                                            <a href="javascript:;" data-value="白羊座">白羊座</a>
                                            <a href="javascript:;" data-value="金牛座">金牛座</a>
                                            <a href="javascript:;" data-value="双子座">双子座</a>
                                            <a href="javascript:;" data-value="巨蟹座">巨蟹座</a>
                                            <a href="javascript:;" data-value="狮子座">狮子座</a>
                                            <a href="javascript:;" data-value="处女座">处女座</a>
                                            <a href="javascript:;" data-value="天秤座">天秤座</a>
                                            <a href="javascript:;" data-value="天蝎座">天蝎座</a>
                                            <a href="javascript:;" data-value="射手座">射手座</a>
                                            <a href="javascript:;" data-value="摩羯座">摩羯座</a>
                                            <a href="javascript:;" data-value="水瓶座">水瓶座</a>
                                            <a href="javascript:;" data-value="双鱼座">双鱼座</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="weight mb20">
                                    <label>体重：</label>
                                    <input type="text" placeholder="请输入您的体重" name="weight" id="weight"
                                           value="<?php echo ($expand["weight"]); ?>"/><label>公斤(kg)</label>
                                </div>
                                <div class="living mb20">
                                    <label>现居住地：</label>
                                    <div class="living-box common-box">
                                        <div class="living-con common-con">
                                            <input type="text" placeholder="请输入您的现居住地" name="workarea"
                                                   value="<?php echo ($basic["workarea"]); ?>"/>
                                            <i></i>
                                        </div>
                                        <div class="living-list">
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
                                </div>
                                <div class="companyNature mb20">
                                    <label>公司性质：</label>
                                    <div class="company-box common-box">
                                        <div class="company-con common-con">
                                            <input type="text" name="companytype"
                                                   value="<?php echo ($expand["companytype"]); ?>"/>
                                            <i></i>
                                        </div>
                                        <div class="company-list common-list hide">
                                            <a href="javascript:;" data-value="事业单位">事业单位</a>
                                            <a href="javascript:;" data-value="国企">国企</a>
                                            <a href="javascript:;" data-value="外资企业">外资企业</a>
                                            <a href="javascript:;" data-value="私企">私企</a>
                                            <a href="javascript:;" data-value="其他">其他</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="salary mb20">
                                    <label>月薪：</label>
                                    <div class="salary-box common-box">
                                        <div class="salary-con common-con">
                                            <input type="text" placeholder="请输入您的月薪" name="salary" id="salary"
                                                   value="<?php echo ($basic["salary"]); ?>"/>
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
                                </div>
                                <div class="car mb20">
                                    <label>购车：</label>
                                    <div class="car-box common-box">
                                        <div class="car-con common-con">
                                            <input type="text" name="ifbuycar" value="<?php echo ($expand["ifbuycar"]); ?>"/>
                                            <i></i>
                                        </div>
                                        <div class="car-list common-list hide">
                                            <a href="javascript:;" data-value="有车(有车贷)">有车(有车贷)</a>
                                            <a href="javascript:;" data-value="有车(无车贷)">有车(无车贷)</a>
                                            <a href="javascript:;" data-value="无车">无车</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="children mb20">
                                    <label>有无子女：</label>
                                    <div class="children-box common-box">
                                        <div class="children-con common-con">
                                            <input type="text" name="ifhaschild"
                                                   value="<?php echo ($expand["ifhaschild"]); ?>"/>
                                            <i></i>
                                        </div>
                                        <div class="children-list common-list">
                                            <a href="javascript:;" data-value="有子女">有子女</a>
                                            <a href="javascript:;" data-value="无子女">无子女</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </form>
                <!-- 家庭状况 -->
                <form action="<?php echo U('Dating/check_family',array('id'=>$mid));?>" id="form2" method='post'>
                    <input type="hidden" name="uid" value="<?php echo ($_COOKIE['think_user_id']); ?>" />
                    <div class="familyState mt45">
                        <div class="familyState-head special-head clearfix">
                            <div class="familyState-title special-title">
                                <span class="before"></span>
                                <span class="title">家庭状况</span>
                                <span class="after"></span>
                            </div>
                            <span class="edit"><i></i>编辑</span>
                            <span class="item-save hide"><i></i>保存</span>
                        </div>
                        <div class="familyState-show mt50 clearfix">
                            <div class="familyState-left">
                                <div class="smoking mb20"><label>是否吸烟：</label><span><?php echo ($expand["ifsmoke"]); ?></span>
                                </div>
                                <div class="drink mb20"><label>是否喝酒：</label><span><?php echo ($expand["ifdrink"]); ?></span>
                                </div>
                                <div class="cooking mb20">
                                    <label>厨艺：</label><span><?php echo ($expand["cookingskils"]); ?></span></div>
                                <div class="housework mb20"><label>家务：</label><span><?php echo ($expand["housework"]); ?></span>
                                </div>
                            </div>
                            <div class="familyState-right">
                                <div class="marryTime mb20">
                                    <label>想何时结婚：</label><span><?php echo ($expand["whenmarry"]); ?></span></div>
                                <div class="cohabit mb20">
                                    <label>婚后与父母住吗：</label><span><?php echo ($expand["livewithparents"]); ?></span></div>
                                <div class="consume mb20">
                                    <label>较大的消费：</label><span><?php echo ($expand["greaterconsumption"]); ?></span></div>
                                <div class="brothers mb20">
                                    <label>兄弟姐妹：</label><span><?php echo ($expand["brotherandsister"]); ?></span></div>
                            </div>
                        </div>
                            <div class="familyState-edit hide mt50 clearfix">
                            <div class="familyState-left">
                                <div class="smoking mb20">
                                    <label>是否吸烟：</label>
                                    <div class="smoking-box common-box">
                                        <div class="smoking-con common-con">
                                            <input type="text" name="ifsmoke" value="<?php echo ($expand["ifsmoke"]); ?>"
                                                   placeholder="请选择"/>
                                            <i></i>
                                        </div>
                                        <div class="smoking-list common-list">
                                            <a href="javascript:;" data-value="不吸烟">不吸烟</a>
                                            <a href="javascript:;" data-value="稍微抽一点儿">稍微抽一点儿</a>
                                            <a href="javascript:;" data-value="只在社交场合抽">只在社交场合抽</a>
                                            <a href="javascript:;" data-value="抽的很多">抽的很多</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="drink mb20">
                                    <label>是否喝酒：</label>
                                    <div class="drink-box common-box">
                                        <div class="drink-con common-con">
                                            <input type="text" name="ifdrink" value="<?php echo ($expand["ifdrink"]); ?>"
                                                   placeholder="请选择"/>
                                            <i></i>
                                        </div>
                                        <div class="drink-list common-list">
                                            <a href="javascript:;" data-value="不喝酒">不喝酒</a>
                                            <a href="javascript:;" data-value="稍微喝一点">稍微喝一点</a>
                                            <a href="javascript:;" data-value="只在社交场合喝">只在社交场合喝</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="cooking mb20">
                                    <label>厨艺：</label>
                                    <div class="cooking-box common-box">
                                        <div class="cooking-con common-con">
                                            <input type="text" name="cookingskils"
                                                   value="<?php echo ($expand["cookingskils"]); ?>" placeholder="请选择"/>
                                            <i></i>
                                        </div>
                                        <div class="cooking-list common-list">
                                            <a href="javascript:;" data-value="色香味俱全">色香味俱全</a>
                                            <a href="javascript:;" data-value="能做几样可口的小菜">能做几样可口的小菜</a>
                                            <a href="javascript:;" data-value="有待提高">有待提高</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="housework mb20">
                                    <label>家务：</label>
                                    <div class="housework-box common-box">
                                        <div class="housework-con common-con">
                                            <input type="text" name="housework" value="<?php echo ($expand["housework"]); ?>"
                                                   placeholder="请选择"/>
                                            <i></i>
                                        </div>
                                        <div class="housework-list common-list">
                                            <a href="javascript:;" data-value="愿承担大部分家务">愿承担大部分家务</a>
                                            <a href="javascript:;" data-value="希望对方承担大部分家务">希望对方承担大部分家务</a>
                                            <a href="javascript:;" data-value="看各自忙闲，协商分担家务">看各自忙闲，协商分担家务</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="familyState-right">
                                <div class="marryTime mb20">
                                    <label>想何时结婚：</label>
                                    <div class="marryTime-box common-box">
                                        <div class="marryTime-con common-con">
                                            <input type="text" name="whenmarry" value="<?php echo ($expand["whenmarry"]); ?>"
                                                   placeholder="请选择"/>
                                            <i></i>
                                        </div>
                                        <div class="marryTime-list common-list">
                                            <a href="javascript:;" data-value="认同上闪婚">认同上闪婚</a>
                                            <a href="javascript:;" data-value="一年内">一年内</a>
                                            <a href="javascript:;" data-value="两年内">两年内</a>
                                            <a href="javascript:;" data-value="三年内">三年内</a>
                                            <a href="javascript:;" data-value="时机成熟就结婚">时机成熟就结婚</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="cohabit mb20">
                                    <label>婚后与父母住吗：</label>
                                    <div class="cohabit-box common-box">
                                        <div class="cohabit-con common-con">
                                            <input type="text" name="livewithparents"
                                                   value="<?php echo ($expand["livewithparents"]); ?>" placeholder="请选择"/>
                                            <i></i>
                                        </div>
                                        <div class="cohabit-list common-list">
                                            <a href="javascript:;" data-value="与自己父母同住">与自己父母同住</a>
                                            <a href="javascript:;" data-value="不与自己父母同住">不与自己父母同住</a>
                                            <a href="javascript:;" data-value="尊重伴侣意见">尊重伴侣意见</a>
                                            <a href="javascript:;" data-value="视情况而定">视情况而定</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="consume mb20">
                                    <label>较大的消费：</label>
                                    <div class="consume-box common-box">
                                        <div class="consume-con common-con">
                                            <input type="text" name="greaterconsumption"
                                                   value="<?php echo ($expand["greaterconsumption"]); ?>" placeholder="请选择"/>
                                            <i></i>
                                        </div>
                                        <div class="consume-list common-list">
                                            <a href="javascript:;" data-value="美食">美食</a>
                                            <a href="javascript:;" data-value="服饰">服饰</a>
                                            <a href="javascript:;" data-value="化妆">化妆</a>
                                            <a href="javascript:;" data-value="健身">健身</a>
                                            <a href="javascript:;" data-value="娱乐">娱乐</a>
                                            <a href="javascript:;" data-value="旅行">旅行</a>
                                            <a href="javascript:;" data-value="社交">社交</a>
                                            <a href="javascript:;" data-value="文化">文化</a>
                                            <a href="javascript:;" data-value="自我提升">自我提升</a>
                                            <a href="javascript:;" data-value="其他">其他</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="brothers mb20">
                                    <label>兄弟姐妹：</label>
                                    <div class="brothers-box common-box">
                                        <div class="brothers-con common-con">
                                            <input type="text" name="brotherandsister"
                                                   value="<?php echo ($expand["brotherandsister"]); ?>" placeholder="请选择"/>
                                            <i></i>
                                        </div>
                                        <div class="brothers-list common-list">
                                            <a href="javascript:;" data-value="独生子女">独生子女</a>
                                            <a href="javascript:;" data-value="2">2</a>
                                            <a href="javascript:;" data-value="3">3</a>
                                            <a href="javascript:;" data-value="4">4</a>
                                            <a href="javascript:;" data-value="5">5</a>
                                            <a href="javascript:;" data-value="6">6</a>
                                            <a href="javascript:;" data-value="7">7</a>
                                            <a href="javascript:;" data-value="8">8</a>
                                            <a href="javascript:;" data-value="更多">更多</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </form>
                <!-- 择偶意向 -->
                <form action="<?php echo U('Dating/check_zeou',array('id'=>$mid));?>" id="form3" method='post'>
                    <input type="hidden" name="uid" value="<?php echo ($_COOKIE['think_user_id']); ?>" />
                    <div class="matingIntent mt45">
                        <div class="matingIntent-head special-head clearfix">
                            <div class="matingIntent-title special-title">
                                <span class="before"></span>
                                <span class="title">择偶意向</span>
                                <span class="after"></span>
                            </div>
                            <span class="edit"><i></i>编辑</span>
                            <span class="item-save hide"><i></i>保存</span>
                        </div>
                        <div class="matingIntent-show clearfix mt50">
                            <div class="matingIntent-left">
                                <div class="height1 mb20"><label>身高：</label><span><?php echo ($expand["zheight"]); ?></span>
                                </div>
                                <div class="education1 mb20">
                                    <label>学历：</label><span><?php echo ($expand["zeducation"]); ?></span></div>
                                <div class="salary1 mb20"><label>月收入：</label><span><?php echo ($expand["zsalary"]); ?></span>
                                </div>
                                <div class="area1 mb20"><label>所在地区：</label><span><?php echo ($expand["zworkarea"]); ?></span>
                                </div>
                            </div>
                            <div class="matingIntent-right">
                                <!--<div class="age1 mb20"><label>年龄：</label><span><?php echo ($expand["zage"]); ?></span></div>-->
                                <div class="marry1 mb20">
                                    <label>婚姻状况：</label><span><?php echo ($expand["zmarry"]); ?></span></div>
                                <div class="house1 mb20">
                                    <label>购房状况：</label><span><?php echo ($expand["zifbuyhouser"]); ?></span></div>
                                <div class="children1 mb20">
                                    <label>有无子女：</label><span><?php echo ($expand["zifhaschild"]); ?></span></div>
                            </div>
                        </div>
                        <div class="matingIntent-edit hide clearfix mt50">
                            <div class="matingIntent-left">
                                <div class="height1 mb20">
                                    <label>身高：</label>
                                    <div class="height1-box common-box">
                                        <div class="height1-con common-con">
                                            <input type="text" name="zheight" id="zheight"
                                                   value="<?php echo ($expand["zheight"]); ?>"/>
                                            <i></i>
                                        </div>
                                        <div class="height1-list common-list hide">
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
                                </div>
                                <div class="education1 mb20">
                                    <label>学历：</label>
                                    <div class="edu1-box common-box">
                                        <div class="edu1-con common-con">
                                            <input type="text" name="zeducation"
                                                   value="<?php echo ($expand["zeducation"]); ?>"/>
                                            <i></i>
                                        </div>
                                        <div class="edu1-list common-list hide">
                                            <a href="javascript:;" data-value="大专">大专</a>
                                            <a href="javascript:;" data-value="本科">本科</a>
                                            <a href="javascript:;" data-value="研究生">研究生</a>
                                            <a href="javascript:;" data-value="博士生">博士生</a>
                                            <a href="javascript:;" data-value="">其他</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="salary1 mb20">
                                    <label>月收入：</label>
                                    <div class="salary1-box common-box">
                                        <div class="salary1-con common-con">
                                            <input type="text" placeholder="请输入您的月薪" name="zsalary" id="zsalary"
                                                   value="<?php echo ($expand["zsalary"]); ?>"/>
                                            <i></i>
                                        </div>
                                        <div class="salary1-list common-list">
                                            <a href="javascript:;" data-value="2000元以下">2000元以下</a>
                                            <a href="javascript:;" data-value="2000-5000元">2000-5000元</a>
                                            <a href="javascript:;" data-value="5000-10000元">5000-10000元</a>
                                            <a href="javascript:;" data-value="10000-15000元">10000-15000元</a>
                                            <a href="javascript:;" data-value="15000-20000元">15000-20000元</a>
                                            <a href="javascript:;" data-value="20000-25000元">20000-25000元</a>
                                            <a href="javascript:;" data-value="25000元以上">25000元以上</a>
                                        </div>
                                    </div>

                                </div>
                                <div class="area1 mb20">
                                    <label>所在地区：</label>
                                    <div class="area1-box common-box">
                                        <div class="area1-con common-con">
                                            <input type="text" placeholder="请输入您的现居住地" name="zworkarea"
                                                   value="<?php echo ($expand["zworkarea"]); ?>"/>
                                            <i></i>
                                        </div>
                                        <div class="area1-list">
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

                                </div>
                            </div>
                            <div class="matingIntent-right">
                                <!--<div class="age1 mb20">-->
                                <!--<label>年龄：</label>-->
                                <!--<div class="age1-box common-box">-->
                                <!--<div class="age1-con common-con">-->
                                <!--<input type="text" name="zage" value="<?php echo ($expand["zage"]); ?>"/>-->
                                <!--<i></i>-->
                                <!--</div>-->
                                <!--<div class="age1-list common-list hide">-->
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
                                <!--</div>-->
                                <!--</div>-->
                                <!--</div>-->

                                <div class="marry1 mb20">
                                    <label>婚姻状况：</label>
                                    <div class="marry1-box common-box">
                                        <div class="marry1-con common-con">
                                            <input type="text" name="zmarry"
                                                   value="<?php echo ($expand["zmarry"]); ?>"/>
                                            <i></i>
                                        </div>
                                        <div class="marry1-list common-list hide">
                                            <a href="javascript:;" data-value="未婚">未婚</a>
                                            <a href="javascript:;" data-value="离异">离异</a>
                                            <a href="javascript:;" data-value="丧偶">丧偶</a>
                                            <a href="javascript:;" data-value="不限">不限</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="house1 mb20">
                                    <label>购房状况：</label>
                                    <div class="house1-box common-box">
                                        <div class="house1-con common-con">
                                            <input type="text" name="zifbuyhouser"
                                                   value="<?php echo ($expand["zifbuyhouser"]); ?>"/>
                                            <i></i>
                                        </div>
                                        <div class="house1-list common-list hide">
                                            <a href="javascript:;" data-value="有房(有房贷)">有房(有房贷)</a>
                                            <a href="javascript:;" data-value="有房(无房贷)">有房(无房贷)</a>
                                            <a href="javascript:;" data-value="无房">无房</a>
                                            <a href="javascript:;" data-value="不限">不限</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="children1 mb20">
                                    <label>有无子女：</label>
                                    <div class="children1-box common-box">
                                        <div class="children1-con common-con">
                                            <input type="text" name="zifhaschild"
                                                   value="<?php echo ($expand["zifhaschild"]); ?>"/>
                                            <i></i>
                                        </div>
                                        <div class="children1-list common-list">
                                            <a href="javascript:;" data-value="有子女">有子女</a>
                                            <a href="javascript:;" data-value="无子女">无子女</a>
                                            <a href="javascript:;" data-value="不限">不限</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </form>
                <!-- 兴趣爱好 -->
                <form action="<?php echo U('Dating/check_hobby',array('id'=>$mid));?>" id="form4" method='post'>
                    <input type="hidden" name="uid" value="<?php echo ($_COOKIE['think_user_id']); ?>" />
                    <div class="interest clearfix mt45">
                        <div class="interest-head special-head clearfix">
                            <div class="interest-title special-title">
                                <span class="before"></span>
                                <span class="title">兴趣爱好</span>
                                <span class="after"></span>
                            </div>
                            <span class="edit"><i></i>编辑</span>
                            <span class="item-save hide"><i></i>保存</span>
                        </div>
                        <div class="interest-show mt50 clearfix">
                            <div class="interest-left">
                                <div class="active mb20">
                                    <label>喜欢的活动：</label><span><?php echo ($expand["loveactivity"]); ?></span></div>
                                <div class="sports mb20">
                                    <label>喜欢的体育运动：</label><span><?php echo ($expand["lovesport"]); ?></span></div>
                                <div class="music mb20"><label>喜欢的音乐：</label><span><?php echo ($expand["lovemusic"]); ?></span>
                                </div>
                                <div class="television mb20">
                                    <label>喜欢的影视节目：</label><span><?php echo ($expand["lovefilmprogram"]); ?></span></div>
                            </div>
                            <div class="interest-right">
                                <div class="food mb20"><label>喜欢的食物：</label><span><?php echo ($expand["lovefood"]); ?></span>
                                </div>
                                <div class="place mb20"><label>喜欢的地方：</label><span><?php echo ($expand["lovespace"]); ?></span>
                                </div>
                                <div class="pet mb20"><label>喜欢的宠物：</label><span><?php echo ($expand["lovepet"]); ?></span>
                                </div>
                            </div>
                        </div>
                        <div class="interest-edit hide mt50 clearfix">
                            <div class="interest-left">
                                <div class="active mb20">
                                    <label>喜欢的活动：</label>
                                    <div class="active-box common-box">
                                        <div class="active-con common-con">
                                            <input type="text" name="loveactivity"
                                                   value="<?php echo ($expand["loveactivity"]); ?>" placeholder="请选择喜欢的活动"/>
                                            <i></i>
                                        </div>
                                        <div class="active-list common-list">
                                            <a href="javascript:;" data-value="电脑/网络">电脑/网络</a>
                                            <a href="javascript:;" data-value="电子游戏">电子游戏</a>
                                            <a href="javascript:;" data-value="与朋友喝酒">与朋友喝酒</a>
                                            <a href="javascript:;" data-value="品茗">品茗</a>
                                            <a href="javascript:;" data-value="看电影/电视">看电影/电视</a>
                                            <a href="javascript:;" data-value="听音乐">听音乐</a>
                                            <a href="javascript:;" data-value="乐器演奏">乐器演奏</a>
                                            <a href="javascript:;" data-value="烹调">烹调</a>
                                            <a href="javascript:;" data-value="摄影">摄影</a>
                                            <a href="javascript:;" data-value="下棋/打牌">下棋/打牌</a>
                                            <a href="javascript:;" data-value="观光旅游">观光旅游</a>
                                            <a href="javascript:;" data-value="逛街购物">逛街购物</a>
                                            <a href="javascript:;" data-value="阅读写作">阅读写作</a>
                                            <a href="javascript:;" data-value="舞会/卡拉OK">舞会/卡拉OK</a>
                                            <a href="javascript:;" data-value="各种收集活动">各种收集活动</a>
                                            <a href="javascript:;" data-value="理财/投资">理财/投资</a>
                                            <a href="javascript:;" data-value="文艺表演">文艺表演</a>
                                            <a href="javascript:;" data-value="聊天">聊天</a>
                                            <a href="javascript:;" data-value="家务/手工艺">家务/手工艺</a>
                                            <a href="javascript:;" data-value="书法/绘画">书法/绘画</a>
                                            <a href="javascript:;" data-value="其他">其他</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="sports mb20">
                                    <label>喜欢的体育运动：</label>
                                    <div class="sports-box common-box">
                                        <div class="sports-con common-con">
                                            <input type="text" name="lovesport" value="<?php echo ($expand["lovesport"]); ?>"
                                                   placeholder="请选择喜欢的体育运动"/>
                                            <i></i>
                                        </div>
                                        <div class="sports-list common-list">
                                            <a href="javascript:;" data-value="足球">足球</a>
                                            <a href="javascript:;" data-value="排球">排球</a>
                                            <a href="javascript:;" data-value="篮球">篮球</a>
                                            <a href="javascript:;" data-value="骑单车/摩托车">骑单车/摩托车</a>
                                            <a href="javascript:;" data-value="乒乓球">乒乓球</a>
                                            <a href="javascript:;" data-value="保龄球">保龄球</a>
                                            <a href="javascript:;" data-value="健身/跑步">健身/跑步</a>
                                            <a href="javascript:;" data-value="钓鱼">钓鱼</a>
                                            <a href="javascript:;" data-value="游泳/冲浪/潜水">游泳/冲浪/潜水</a>
                                            <a href="javascript:;" data-value="网球">网球</a>
                                            <a href="javascript:;" data-value="羽毛球">羽毛球</a>
                                            <a href="javascript:;" data-value="高尔夫">高尔夫</a>
                                            <a href="javascript:;" data-value="滑冰/滑雪">滑冰/滑雪</a>
                                            <a href="javascript:;" data-value="其他">其他</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="music mb20">
                                    <label>喜欢的音乐：</label>
                                    <div class="music-box common-box">
                                        <div class="music-con common-con">
                                            <input type="text" name="lovemusic" value="<?php echo ($expand["lovemusic"]); ?>"
                                                   placeholder="请选择喜欢的音乐"/>
                                            <i></i>
                                        </div>
                                        <div class="music-list common-list">
                                            <a href="javascript:;" data-value="中文流行音乐">中文流行音乐</a>
                                            <a href="javascript:;" data-value="轻音乐">轻音乐</a>
                                            <a href="javascript:;" data-value="民族音乐">民族音乐</a>
                                            <a href="javascript:;" data-value="老歌">老歌</a>
                                            <a href="javascript:;" data-value="舞曲">舞曲</a>
                                            <a href="javascript:;" data-value="歌剧">歌剧</a>
                                            <a href="javascript:;" data-value="西部乡村">西部乡村</a>
                                            <a href="javascript:;" data-value="英文流行音乐">英文流行音乐</a>
                                            <a href="javascript:;" data-value="交响乐">交响乐</a>
                                            <a href="javascript:;" data-value="地方戏曲">地方戏曲</a>
                                            <a href="javascript:;" data-value="摇滚">摇滚</a>
                                            <a href="javascript:;" data-value="另类">另类</a>
                                            <a href="javascript:;" data-value="灵歌">灵歌</a>
                                            <a href="javascript:;" data-value="爵士/蓝调">爵士/蓝调</a>
                                            <a href="javascript:;" data-value="其他">其他</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="television mb20">
                                    <label>喜欢的影视节目：</label>
                                    <div class="television-box common-box">
                                        <div class="television-con common-con">
                                            <input type="text" name="lovefilmprogram"
                                                   value="<?php echo ($expand["lovefilmprogram"]); ?>"
                                                   placeholder="请选择喜欢的影视节目"/>
                                            <i></i>
                                        </div>
                                        <div class="television-list common-list">
                                            <a href="javascript:;" data-value="故事片">故事片</a>
                                            <a href="javascript:;" data-value="文艺爱情">文艺爱情</a>
                                            <a href="javascript:;" data-value="科幻">科幻</a>
                                            <a href="javascript:;" data-value="动作武侠">动作武侠</a>
                                            <a href="javascript:;" data-value="侦探推理">侦探推理</a>
                                            <a href="javascript:;" data-value="实验电影">实验电影</a>
                                            <a href="javascript:;" data-value="老电影">老电影</a>
                                            <a href="javascript:;" data-value="限制级电影">限制级电影</a>
                                            <a href="javascript:;" data-value="儿童/卡通片">儿童/卡通片</a>
                                            <a href="javascript:;" data-value="纪录片">纪录片</a>
                                            <a href="javascript:;" data-value="西部电影">西部电影</a>
                                            <a href="javascript:;" data-value="恐怖">恐怖</a>
                                            <a href="javascript:;" data-value="得奖电影">得奖电影</a>
                                            <a href="javascript:;" data-value="艺术电影">艺术电影</a>
                                            <a href="javascript:;" data-value="音乐歌舞">音乐歌舞</a>
                                            <a href="javascript:;" data-value="肥皂剧">肥皂剧</a>
                                            <a href="javascript:;" data-value="喜剧">喜剧</a>
                                            <a href="javascript:;" data-value="其他">其他</a>
                                            <a href="javascript:;" data-value="什么都看">什么都看</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="interest-right">
                                <div class="food mb20">
                                    <label>喜欢的食物：</label>
                                    <div class="food-box common-box">
                                        <div class="food-con common-con">
                                            <input type="text" name="lovefood" value="<?php echo ($expand["lovefood"]); ?>"
                                                   placeholder="请选择喜欢的食物"/>
                                            <i></i>
                                        </div>
                                        <div class="food-list common-list">
                                            <a href="javascript:;" data-value="川菜">川菜</a>
                                            <a href="javascript:;" data-value="浙江菜">浙江菜</a>
                                            <a href="javascript:;" data-value="湘菜">湘菜</a>
                                            <a href="javascript:;" data-value="火锅">火锅</a>
                                            <a href="javascript:;" data-value="烧烤">烧烤</a>
                                            <a href="javascript:;" data-value="家常菜">家常菜</a>
                                            <a href="javascript:;" data-value="路边摊">路边摊</a>
                                            <a href="javascript:;" data-value="健康食品">健康食品</a>
                                            <a href="javascript:;" data-value="零食">零食</a>
                                            <a href="javascript:;" data-value="粤菜">粤菜</a>
                                            <a href="javascript:;" data-value="北方菜">北方菜</a>
                                            <a href="javascript:;" data-value="面食">面食</a>
                                            <a href="javascript:;" data-value="素食">素食</a>
                                            <a href="javascript:;" data-value="甜食">甜食</a>
                                            <a href="javascript:;" data-value="自助餐">自助餐</a>
                                            <a href="javascript:;" data-value="减肥餐">减肥餐</a>
                                            <a href="javascript:;" data-value="能填饱肚子就好">能填饱肚子就好</a>
                                            <a href="javascript:;" data-value="其他">其他</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="place mb20">
                                    <label>喜欢的地方：</label>
                                    <div class="place-box common-box">
                                        <div class="place-con common-con">
                                            <input type="text" name="lovespace" value="<?php echo ($expand["lovespace"]); ?>"
                                                   placeholder="请选择喜欢的地方"/>
                                            <i></i>
                                        </div>
                                        <div class="place-list common-list">
                                            <a href="javascript:;" data-value="都市">都市</a>
                                            <a href="javascript:;" data-value="村庄">村庄</a>
                                            <a href="javascript:;" data-value="小镇">小镇</a>
                                            <a href="javascript:;" data-value="山区">山区</a>
                                            <a href="javascript:;" data-value="办公室/学校">办公室/学校</a>
                                            <a href="javascript:;" data-value="游乐场">游乐场</a>
                                            <a href="javascript:;" data-value="购物中心">购物中心</a>
                                            <a href="javascript:;" data-value="我家/我的房间">我家/我的房间</a>
                                            <a href="javascript:;" data-value="海滨">海滨</a>
                                            <a href="javascript:;" data-value="岛屿">岛屿</a>
                                            <a href="javascript:;" data-value="沙漠">沙漠</a>
                                            <a href="javascript:;" data-value="雪野">雪野</a>
                                            <a href="javascript:;" data-value="图书馆/书店">图书馆/书店</a>
                                            <a href="javascript:;" data-value="展览馆">展览馆</a>
                                            <a href="javascript:;" data-value="宗教圣地">宗教圣地</a>
                                            <a href="javascript:;" data-value="古迹">古迹</a>
                                            <a href="javascript:;" data-value="森林">森林</a>
                                            <a href="javascript:;" data-value="公园">公园</a>
                                            <a href="javascript:;" data-value="咖啡厅/酒吧">咖啡厅/酒吧</a>
                                            <a href="javascript:;" data-value="动物园">动物园</a>
                                            <a href="javascript:;" data-value="夜市赶集">夜市赶集</a>
                                            <a href="javascript:;" data-value="各种俱乐部">各种俱乐部</a>
                                            <a href="javascript:;" data-value="其他">其他</a>
                                        </div>
                                    </div>

                                </div>
                                <div class="pet mb20">
                                    <label>喜欢的宠物：</label>
                                    <div class="pet-box common-box">
                                        <div class="pet-con common-con">
                                            <input type="text" name="lovepet" value="<?php echo ($expand["lovepet"]); ?>"
                                                   placeholder="请选择喜欢的宠物"/>
                                            <i></i>
                                        </div>
                                        <div class="pet-list common-list">
                                            <a href="javascript:;" data-value="狗">狗</a>
                                            <a href="javascript:;" data-value="猫">猫</a>
                                            <a href="javascript:;" data-value="鱼">鱼</a>
                                            <a href="javascript:;" data-value="兔">兔</a>
                                            <a href="javascript:;" data-value="鸟">鸟</a>
                                            <a href="javascript:;" data-value="乌龟">乌龟</a>
                                            <a href="javascript:;" data-value="蜥蜴">蜥蜴</a>
                                            <a href="javascript:;" data-value="鼠">鼠</a>
                                            <a href="javascript:;" data-value="蛇">蛇</a>
                                            <a href="javascript:;" data-value="另类宠物">另类宠物</a>
                                            <a href="javascript:;" data-value="其他">其他</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </form>
                <!-- 照片 -->
                <form action="<?php echo U('Dating/check_photos',array('id'=>$mid));?>" method="post" enctype="multipart/form-data">
                    <div class="photo clearfix mt45">
                        <div class="photo-head special-head clearfix">
                            <div class="photo-title special-title">
                                <span class="before"></span>
                                <span class="title">上传照片</span>
                                <span class="after"></span>
                            </div>
                        </div>
                        <div class="photo-upload mt50" >
                            <?php if(is_array($photos)): foreach($photos as $k=>$photos): ?><!--<?php echo ($num = $k + 1); ?>-->
                            <img id="photo-image<?php echo ($num); ?>" class="photo<?php echo ($num); ?>" src="<?php echo ($photos['url']); ?>" alt=""/>
                            <input type="hidden" name="id[]" value="<?php echo ($photos['id']); ?>" />
                            <input class="photo<?php echo ($num); ?>" type="file" name="photos[]" onchange="previewImage(this,<?php echo ($num); ?>)"><?php endforeach; endif; ?>
                            <?php $__FOR_START_1149135198__=$photos_num+1;$__FOR_END_1149135198__=6;for($i=$__FOR_START_1149135198__;$i < $__FOR_END_1149135198__;$i+=1){ ?><img id="photo-image<?php echo ($i); ?>" class="photo<?php echo ($i); ?>" src="/Public/images/datingPersonal-upload.png" alt=""/>
                            <input class="photo<?php echo ($i); ?>" type="file" name="photos[]" onchange="previewImage(this,<?php echo ($i); ?>)"><?php } ?>
                        </div>
                        <div class="photo-show clearfix mt20" id="imagebox">

                        </div>
                    </div>
                    <input class="save" id="save" type="submit" value="上传" style="margin-left:357px; margin-top: 0;"/>
                </form>
        </div>

        <form enctype="multipart/form-data" id="up_imgmarry" method="post" action="up_imgmarry.php" target="frame">
            <p><input type="file" name="userfile" id="imgmarry"
                      onchange="document.getElementById('up_imgmarry').submit();" style="display: none"/></p>
            <input type="hidden" name="glid" value="<?php echo $_rows['id'] ?>">
            <iframe name="frame" style="display:none"></iframe>
        </form>


        <div class="content-right right">
            <div class="content-right-top">
                <p>和你的女神/男神只差一步</p>

                <p class="dynamic">
                    <a href="javascript:;">
                        <span></span>
                        申请高级会员
                    </a>
                </p>
            </div>
            <div class="checkMe">
                <h3>谁看过我</h3>

                <div class="checkMe-con">
                    <div class="checkMe-con1">
                        <a href="javascript:;">
                            <img src="/Public/images/personal-portrait.png" alt=""/>
                        </a>
                        <a href="javascript:;">
                            <img src="/Public/images/personal-portrait.png" alt=""/>
                        </a>
                        <a href="javascript:;">
                            <img src="/Public/images/personal-portrait.png" alt=""/>
                        </a>
                        <a href="javascript:;">
                            <img src="/Public/images/personal-portrait.png" alt=""/>
                        </a>
                        <a href="javascript:;">
                            <img src="/Public/images/personal-portrait.png" alt=""/>
                        </a>
                        <a href="javascript:;">
                            <img src="/Public/images/personal-portrait.png" alt=""/>
                        </a>
                    </div>
                    <div class="checkMe-con2 hide">
                        <a href="javascript:;">
                            <img src="/Public/images/financeArticle01-part3-portrait.png" alt=""/>
                        </a>
                        <a href="javascript:;">
                            <img src="/Public/images/financeArticle01-part3-portrait.png" alt=""/>
                        </a>
                        <a href="javascript:;">
                            <img src="/Public/images/financeArticle01-part3-portrait.png" alt=""/>
                        </a>
                        <a href="javascript:;">
                            <img src="/Public/images/financeArticle01-part3-portrait.png" alt=""/>
                        </a>
                        <a href="javascript:;">
                            <img src="/Public/images/financeArticle01-part3-portrait.png" alt=""/>
                        </a>
                        <a href="javascript:;">
                            <img src="/Public/images/financeArticle01-part3-portrait.png" alt=""/>
                        </a>
                    </div>
                </div>
                <ul>
                    <li class="cur"></li>
                    <li></li>
                </ul>
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

    $(function () {
        $('.nav-right ul li').hover(function () {
            if ($(this).find('ol').size() !== 0) {
                $(this).find("ol").css({
                    display: "block"
                })
            }
        }, function () {
            if ($(this).find("ol").size() !== 0) {
                $(this).find("ol").css({
                    display: "none"
                })
            }
        })
    });

    $(function () {
        var oImg = new Array("/Public/images/heart1.png", "/Public/images/heart2.png");
        var size = oImg.length;
        var i = 1;
        window.setInterval(function () {
            $(".dynamic span").css("background-image", "url(" + oImg[i] + ")");
            i++;
            if (i >= size) i = 0;
        }, 500);
    });
    $(function () {
        $(".checkMe ul li").hover(function () {
            var index = $(this).index();
            $(this).addClass("cur").siblings().removeClass("cur");
            $(".checkMe-con div").eq(index).removeClass("hide").siblings().addClass("hide");
        })
    });
    $(function () {
        // 编辑昵称
        $(".brief-head span").click(function () {
            $(this).parent().hide(500);
            $(".brief-head-edit").show(500);
            $(".user-avatar").show();
        });
        // 编辑个人状况
        $(".personalState .edit").click(function () {
            $(".personalState .edit").addClass('hide');
            $(".personalState .item-save").removeClass('hide');
            $('.personalState-show').hide(500).next().show(500);
        });
        // 编辑家庭状况
        $(".familyState .edit").click(function () {
            $(".familyState .edit").addClass('hide');
            $(".familyState .item-save").removeClass('hide');
            $('.familyState-show').hide(500).next().show(500);
        });
        // 编辑择偶意向
        $(".matingIntent .edit").click(function () {
            $(".matingIntent .edit").addClass('hide');
            $(".matingIntent .item-save").removeClass('hide');
            $('.matingIntent-show').hide(500).next().show(500);
        });
        // 编辑兴趣爱好
        $(".interest .edit").click(function () {
            $(".interest .edit").addClass('hide');
            $(".interest .item-save").removeClass('hide');
            $('.interest-show').hide(500).next().show(500);
        });
        /****
         * 保存按钮们
         * */
        // 保存昵称+头像
        $(".brief-head-edit span").click(function () {
            var val1 = $(".brief-head-edit input").val();
            $(this).parent().hide(500);
            $(".brief-head").show(500).find("h3").text(val1);
            $(".user-avatar").hide();

            $("#form").submit();
        });
        // 保存个人状况
        $(".personalState .item-save").click(function () {
            $(".personalState .item-save").addClass('hide');
            $(".personalState .edit").removeClass('hide');
            $('.personalState-show').show(500).next().hide(500);
            var age = $(".age-con input").val();
            var year = $(".year-con input").val();
            var month = $(".month-con input").val();
            var day = $(".day-con input").val();
            var residence = $(".residence input").val();
            var zodiac = $(".zodiac input").val();
            var height = $(".height-con input").val();
            var blood = $(".blood input").val();
            var edu = $(".edu-con input").val();
            var position = $(".position input").val();
            var house = $(".house-con input").val();
            var marry = $(".marry-con input").val();

            var national = $(".national input").val();
            var sex = $(".sex-con input").val();
            var hometown = $(".hometown input").val();
            var constellation = $(".constellation input").val();
            var weight = $(".weight-con input").val();
            var living = $(".living input").val();
            var company = $(".company-con input").val();
            var salary = $(".salary input").val();
            var car = $(".car-con input").val();
            var children = $(".children-con input").val();
            $(".age span").text(age);
            $(".year span").text(year);
            $(".month span").text(month);
            $(".day span").text(day);
            $(".residence span").text(residence);
            $(".zodiac span").text(zodiac);
            $(".height span").text(height);
            $(".blood span").text(blood);
            $(".education span").text(edu);
            $(".position span").text(position);
            $(".house span").text(house);
            $(".marry span").text(marry);

            $(".national span").text(national);
            $(".sex span").text(sex);
            $(".hometown span").text(hometown);
            $(".constellation span").text(constellation);
            $(".weight span").text(weight);
            $(".living span").text(living);
            $(".company span").text(company);
            $(".salary span").text(salary);
            $(".car span").text(car);
            $(".children span").text(children);

            $("#form1").submit();
        });
        // 保存家庭状况
        $(".familyState .item-save").click(function () {
            $(".familyState .item-save").addClass('hide');
            $(".familyState .edit").removeClass('hide');
            $('.familyState-show').show(500).next().hide(500);
            var smoking = $(".smoking-con input").val();
            var drink = $(".drink-con input").val();
            var cooking = $(".cooking-con input").val();
            var housework = $(".housework-con input").val();
            var marryTime = $(".marryTime-con input").val();
            var cohabit = $(".cohabit-con input").val();
            var consume = $(".consume-con input").val();
            var brothers = $(".brothers-con input").val();
            $(".smoking span").text(smoking);
            $(".drink span").text(drink);
            $(".cooking span").text(cooking);
            $(".housework span").text(housework);
            $(".marryTime span").text(marryTime);
            $(".cohabit span").text(cohabit);
            $(".consume span").text(consume);
            $(".brothers span").text(brothers);
            $("#form2").submit();
        });
        // 保存择偶意向
        $(".matingIntent .item-save").click(function () {
            $(".matingIntent .item-save").addClass('hide');
            $(".matingIntent .edit").removeClass('hide');
            $('.matingIntent-show').show(500).next().hide(500);
            var age1 = $(".age1-con input").val();
            var height1 = $(".height1-con input").val();
            var edu1 = $(".edu1-con input").val();
            var salary1 = $(".salary1 input").val();
            var area1 = $(".area1 input").val();
            var marry1 = $(".marry1-con input").val();
            var house1 = $(".house1-con input").val();
            var children1 = $(".children1-con input").val();
            var sex1 = $(".sex1-con input").val();
            var child = $(".child-con input").val();
            $(".age1 span").text(age1);
            $(".height1 span").text(height1);
            $(".education1 span").text(edu1);
            $(".salary1 span").text(salary1);
            $(".area1 span").text(area1);
            $(".marry1 span").text(marry1);
            $(".house1 span").text(house1);
            $(".children1 span").text(children1);
            $(".sex1 span").text(sex1);
            $(".child span").text(child);
            $("#form3").submit();
        });
        // 保存兴趣爱好
        $(".interest .item-save").click(function () {
            $(".interest .item-save").addClass('hide');
            $(".interest .edit").removeClass('hide');
            $('.interest-show').show(500).next().hide(500);
            var active = $(".active-con input").val();
            var sports = $(".sports-con input").val();
            var music = $(".music-con input").val();
            var television = $(".television input").val();
            var food = $(".food input").val();
            var place = $(".place-con input").val();
            var pet = $(".pet-con input").val();
            $(".active span").text(active);
            $(".sports span").text(sports);
            $(".music span").text(music);
            $(".television span").text(television);
            $(".food span").text(food);
            $(".place span").text(place);
            $(".pet span").text(pet);
            $("#form4").submit();
        });

    });


    $(function () {
        selectBox(".age-con");
        selectBox(".zodiac-con");
        selectBox(".year-con");
        selectBox(".month-con");
        selectBox(".day-con");
        selectBox(".sex-con");
        selectBox(".zodiac-con");
        selectBox(".height-con");
        selectBox(".blood-con");
        selectBox(".edu-con");
        selectBox(".house-con");
        selectBox(".marry-con");
        selectBox(".national-con");
        selectBox(".hometown-con");
//        selectBox(".residence-con");
        selectBox(".constellation-con");
        selectBox(".weight-con");
        selectBox(".living-con");
        selectBox(".company-con");
        selectBox(".salary-con");
        selectBox(".car-con");
        selectBox(".children-con");


        selectBox(".smoking-con");
        selectBox(".drink-con");
        selectBox(".cooking-con");
        selectBox(".housework-con");
        selectBox(".marryTime-con");
        selectBox(".cohabit-con");
        selectBox(".consume-con");
        selectBox(".brothers-con");


        selectBox(".age1-con");
        selectBox(".sex1-con");
        selectBox(".height1-con");
        selectBox(".edu1-con");
        selectBox(".salary1-con");
        selectBox(".area1-con");
        selectBox(".marry1-con");
        selectBox(".house1-con");
        selectBox(".children1-con");
        selectBox(".child-con");

        selectBox(".active-con");
        selectBox(".sports-con");
        selectBox(".music-con");
        selectBox(".television-con");
        selectBox(".food-con");
        selectBox(".place-con");
        selectBox(".pet-con");

        function selectBox(box) {
            $(box).find('input').attr("readonly", true).focusin(function () {
                $(box).next().show();
            }).focusout(function () {
                setTimeout(function () {
                    $(box).next().hide();
                }, 200)
            });
        }
    });

    $(function () {
        selectItem(".age-box");
        selectItem(".zodiac-box");
        selectItem(".year-box");
        selectItem(".month-box");
        selectItem(".day-box");
        selectItem(".sex-box");
        selectItem(".height-box");
        selectItem(".blood-box");
        selectItem(".edu-box");
        selectItem(".house-box");
        selectItem(".marry-box");
        selectItem(".national-box");
        selectItem(".constellation-box");
        selectItem(".weight-box");
        selectItem(".company-box");
        selectItem(".salary-box");
        selectItem(".car-box");
        selectItem(".children-box");


        selectItem(".smoking-box");
        selectItem(".drink-box");
        selectItem(".cooking-box");
        selectItem(".housework-box");
        selectItem(".marryTime-box");
        selectItem(".cohabit-box");
        selectItem(".consume-box");
        selectItem(".brothers-box");


        selectItem(".age1-box");
        selectItem(".sex1-box");
        selectItem(".height1-box");
        selectItem(".edu1-box");
        selectItem(".salary1-box");
        selectItem(".marry1-box");
        selectItem(".house1-box");
        selectItem(".children1-box");
        selectItem(".child-box");


        selectItem(".active-box");
        selectItem(".sports-box");
        selectItem(".music-box");
        selectItem(".television-box");
        selectItem(".food-box");
        selectItem(".place-box");
        selectItem(".pet-box");


        function selectItem(box) {
            var val1;
            $(box).find("a").click(function () {
                val1 = $(this).attr("data-value");
                $(box).find("input").val(val1);
                $(this).parent().css("display", "none");
            });
        }

        $(".residence-list a").click(function () {
            $(".residence-box input").val($(this).attr("data-value"));
            $(".residence-list").css("display", "none");
        });
        $(".hometown-list a").click(function () {
            $(".hometown-box input").val($(this).attr("data-value"));
            $(".hometown-list").css("display", "none");
        });
        $(".living-list a").click(function () {
            $(".living-box input").val($(this).attr("data-value"));
            $(".living-list").css("display", "none");
        });
        $(".area1-list a").click(function () {
            $(".area1-box input").val($(this).attr("data-value"));
            $(".area1-list").css("display", "none");
        })
    });

    // $(function(){
    //     $(".upload").change(function(){
    //         var len = $(".photo-show img").length;
    //         if(len<3){
    //             var val = $("#upload").val();
    //             $(".photo-show").append("<img src='"+val+"'>");
    //             $(".photo-show").append("<img src='/Public/images/datingPersonal-upload.png'>");
    //         }else{
    //             alert("最多上传3张");
    //             return false;
    //         }
    //         $(".save").show();
    //     })
    // });
    $(function () {
        $(".upload").change(function () {
            var len = $(".photo-show img").length;
            if (len < 3) {
                /* var val = $("#upload").val();
                 $(".photo-show").append("<img src='"+val+"'>");*/
                $(".photo-show").append("<div class='img'><span>×</span><img src='/Public/images/datingPersonal-upload.png'></div>");
                $(".photo-show .img").on("click", "span", function () {
                    $(this).parent().remove();
                });
            } else {
                alert("最多上传3张");
                return false;
            }
            $(".save").show();
        });
        $(".photo-show .img span").click(function () {
            $(this).parent().remove();
        });
    });


    $(function () {
        $('#save').click(function () {
            var height = $('#height').val();

            if (height != '' && !/^[0-9]{3}$/.test(height) && height != '150以下' && height != '150-155' && height != '155-160' && height != '160-165' && height != '165-170' && height != '170-175' && height != '175-180' && height != '180-185' && height != '185-190' && height != '190以上') {
                alert('身高必修是三位内的数字');
                $('#height').focus();
                $('#height').val('');
                return false;
            }

            var zheight = $('#zheight').val();
            if (zheight != '' && !/^[0-9]{3}$/.test(zheight) && zheight != '150以下' && zheight != '150-155' && zheight != '155-160' && zheight != '160-165' && zheight != '165-170' && zheight != '170-175' && zheight != '175-180' && zheight != '180-185' && zheight != '185-190' && zheight != '190以上') {
                alert('对方身高必修是三位内的数字');
                $('#zheight').focus();
                $('#zheight').val('');
                return false;
            }
            var salary = $('#salary').val();
            var zsalary = $('#zsalary').val();
            if (salary != '' && salary != '2000元以下' && salary != '2000-5000元' && salary != '5000-10000元' && salary != '10000-15000元' && salary != '15000-20000元' && salary != '20000-25000元' && salary != '25000元以上' && !/^[0-9]{0,10}$/.test(salary)) {
                alert('薪水必修填数字,单位元');
                return false;
            }
            if (zsalary != '' && !/^[0-9]{0,10}$/.test(zsalary) && zsalary != '2000元以下' && zsalary != '2000-5000元' && zsalary != '5000-10000元' && zsalary != '10000-15000元' && zsalary != '15000-20000元' && zsalary != '20000-25000元' && zsalary != '25000元以上') {
                alert('对方薪水必修填数字，单位元');
                return false;
            }
            var weight = $('#weight').val();
            if (weight != '' && !/^[0-9]{0,3}$/.test(weight) && weight != '40KG以下' && weight != '40-45KG' && weight != '45-50KG' && weight != '50-55KG' && weight != '55-60KG' && weight != '60-65KG' && weight != '65-70KG' && weight != '75-80KG' && weight != '80-85KG' && weight != '85-90KG' && weight != '90KG以上') {
                alert('体重格式不正确');
                return false;
            }


            document.getElementById("myform").submit();

        });

        $('body').click(function () {
            var glid = $('#glid').attr("value");
            $.ajax({
                type: 'POST',
                url: 'marry_image_ajax.php',
                dataType: 'html',
                data: {
                    glid: glid
                },
                success: function (a, status, xhr) {
                    // alert(a);
                    $('#imagebox').html(a);
                },
                error: function () {
                },
            });
        });
    });
    //    function change(){
    //
    //        document.getElementById("upform").submit();
    //    }
    //上传照片
    // 图片预览功能
    function previewImage(file,imgNum)
    {
        var MAXWIDTH  = 121;
        var MAXHEIGHT = 101;
        if (file.files && file.files[0])
        {
            var img = document.getElementById('photo-image'+imgNum+'');
            img.onload = function(){
                var rect = clacImgZoomParam(MAXWIDTH, MAXHEIGHT, img.offsetWidth, img.offsetHeight);
                img.width  =  rect.width;
                img.height =  rect.height;
            }
            var reader = new FileReader();
            reader.onload = function(evt){img.src = evt.target.result;}
            reader.readAsDataURL(file.files[0]);
        }
        else //
        {
//                        var sFilter='filter:progid:DXImageTransform.Microsoft.AlphaImageLoader(sizingMethod=scale,src="';
//                        file.select();
//                        var src = document.selection.createRange().text;
//                        var img = document.getElementById('photo-image'+imgNum+'');
//                        img.filters.item('DXImageTransform.Microsoft.AlphaImageLoader').src = src;
//                        var rect = clacImgZoomParam(MAXWIDTH, MAXHEIGHT, img.offsetWidth, img.offsetHeight);
//                        status =('rect:'+rect.top+','+rect.left+','+rect.width+','+rect.height);
//                        div.innerHTML = "<div id=divhead"+imgNum+" style='width:"+rect.width+"px;height:"+rect.height+"px;margin-top:"+rect.top+"px;"+sFilter+src+"\"'></div>";
        }
    }
    function clacImgZoomParam( maxWidth, maxHeight, width, height ){
        var param = {top:0, left:0, width:width, height:height};
        if( width>maxWidth || height>maxHeight )
        {
            rateWidth = width / maxWidth;
            rateHeight = height / maxHeight;

            if( rateWidth > rateHeight )
            {
                param.width =  maxWidth;
                param.height = Math.round(height / rateWidth);
            }else
            {
                param.width = Math.round(width / rateHeight);
                param.height = maxHeight;
            }
        }
        param.left = Math.round((maxWidth - param.width) / 2);
        param.top = Math.round((maxHeight - param.height) / 2);
        return param;
    }
</script>
</body>
</html>