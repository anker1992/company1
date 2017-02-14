<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
<head lang="en">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=Edge">
    <title>微合伙文化传媒有限公司_微合伙科技有限公司_金融社交圈_金融趴官网_微合伙</title>
    <link rel="stylesheet" href="/Public/css/common.css"/>
    <link rel="stylesheet" href="/Public/css/creditList.css"/>
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
    <div class="container">
        <div class="credit-list credit-list-more clearfix">
            <p class="tit">银行</p>
            <p class="all"><a href="?m=Home&c=Daikuan&a=creditList<?php if($dengji){ echo "&dengji=".$dengji; } if($zhengce){ echo "&zhengce=".$zhengce; } if($bizhong){ echo "&bizhong=".$bizhong; } if($type){ echo "&type=".$type; } ?>" <?php if(empty($y_name)){ echo "class='cur'"; } ?> >不限</a></p>
            <ul>
                <?php if(is_array($yinhang)): foreach($yinhang as $key=>$yinhang): ?><li>
                        <a <?php
 if(isset($y_name)){ if($y_name==$yinhang['y_class']){ echo "class='cur'"; } } ?> href="?m=Home&c=Daikuan&a=creditList&yinhang=<?php echo ($yinhang["y_class"]); if($dengji){ echo "&dengji=".$dengji; } if($zhengce){ echo "&zhengce=".$zhengce; } if($bizhong){ echo "&bizhong=".$bizhong; } if($type){ echo "&type=".$type; } ?>">
                            <span class="bank-logo bank-logo1"></span>
                            <?php echo ($yinhang["y_name"]); ?>
                            <i class="top top1"></i>
                        </a>
                    </li><?php endforeach; endif; ?>
            </ul>
            <span class="showUp">展开 <i></i></span>
        </div>
        <div class="credit-list clearfix">
            <p class="tit">等级</p>
            <p class="all"><a href="?m=Home&c=Daikuan&a=creditList<?php if($y_name){ echo "&yinhang=".$y_name; } if($zhengce){ echo "&zhengce=".$zhengce; } if($bizhong){ echo "&bizhong=".$bizhong; } if($type){ echo "&type=".$type; } ?>" <?php if(empty($dengji)){ echo "class='cur'"; } ?>>不限</a></p>
            <ul>
                <li><a <?php
 if(isset($dengji)){ if($dengji=='普卡'){ echo "class='cur'"; } } ?> href="?m=Home&c=Daikuan&a=creditList&dengji=普卡<?php if($y_name){ echo "&yinhang=".$y_name; } if($zhengce){ echo "&zhengce=".$zhengce; } if($bizhong){ echo "&bizhong=".$bizhong; } if($type){ echo "&type=".$type; } ?>">普卡</a></li>
                <li><a <?php
 if(isset($dengji)){ if($dengji=='金卡'){ echo "class='cur'"; } } ?> href="?m=Home&c=Daikuan&a=creditList&dengji=金卡<?php if($y_name){ echo "&yinhang=".$y_name; } if($zhengce){ echo "&zhengce=".$zhengce; } if($bizhong){ echo "&bizhong=".$bizhong; } if($type){ echo "&type=".$type; } ?>">金卡</a></li>
                <li><a <?php
 if(isset($dengji)){ if($dengji=='白金卡'){ echo "class='cur'"; } } ?> href="?m=Home&c=Daikuan&a=creditList&dengji=白金卡<?php if($y_name){ echo "&yinhang=".$y_name; } if($zhengce){ echo "&zhengce=".$zhengce; } if($bizhong){ echo "&bizhong=".$bizhong; } if($type){ echo "&type=".$type; } ?>">白金卡</a></li>
            </ul>
        </div>
        <div class="credit-list clearfix">
            <p class="tit">年费</p>
            <p class="all"><a <?php if(empty($zhengce)){ echo "class='cur'"; } ?> href="?m=Home&c=Daikuan&a=creditList<?php if($y_name){ echo "&yinhang=".$y_name; } if($dengji){ echo "&dengji=".$dengji; } if($bizhong){ echo "&bizhong=".$bizhong; } if($type){ echo "&type=".$type; } ?>">不限</a></p>
            <ul>
                <li><a <?php
 if(isset($zhengce)){ if($zhengce=='免首年'){ echo "class='cur'"; } } ?> href="?m=Home&c=Daikuan&a=creditList&zhengce=免首年<?php if($y_name){ echo "&yinhang=".$y_name; } if($dengji){ echo "&dengji=".$dengji; } if($bizhong){ echo "&bizhong=".$bizhong; } if($type){ echo "&type=".$type; }?>">免首年，交易免年费</a></li>
                <li><a  <?php
 if(isset($zhengce)){ if($zhengce=='终身免年费'){ echo "class='cur'"; } } ?> href="?m=Home&c=Daikuan&a=creditList&zhengce=终身免年费<?php if($y_name){ echo "&yinhang=".$y_name; } if($dengji){ echo "&dengji=".$dengji; } if($bizhong){ echo "&bizhong=".$bizhong; } if($type){ echo "&type=".$type; } ?>">终身免年费</a></li>
            </ul>
        </div>
        <div class="credit-list clearfix">
            <p class="tit">币种</p>
            <p class="all"><a <?php if(empty($bizhong)){ echo "class='cur'"; } ?> href="?m=Home&c=Daikuan&a=creditList<?php if($y_name){ echo "&yinhang=".$y_name; } if($dengji){ echo "&dengji=".$dengji; } if($zhengce){ echo "&zhengce=".$zhengce; } if($type){ echo "&type=".$type; } ?>">不限</a></p>
            <ul>
                <li><a <?php
 if(isset($bizhong)){ if($bizhong=='人民币'){ echo "class='cur'"; } } ?> href="?m=Home&c=Daikuan&a=creditList&bizhong=人民币<?php if($y_name){ echo "&yinhang=".$y_name; } if($dengji){ echo "&dengji=".$dengji; } if($zhengce){ echo "&zhengce=".$zhengce; } if($type){ echo "&type=".$type; } ?>">人民币</a></li>
                <li><a <?php
 if(isset($bizhong)){ if($bizhong=='美元'){ echo "class='cur'"; } } ?> href="?m=Home&c=Daikuan&a=creditList&bizhong=美元<?php if($y_name){ echo "&yinhang=".$y_name; } if($dengji){ echo "&dengji=".$dengji; } if($zhengce){ echo "&zhengce=".$zhengce; } if($type){ echo "&type=".$type; } ?>">美元</a></li>
            </ul>
        </div>
        <div class="credit-list clearfix">
            <p class="tit">组织</p>
            <p class="all"><a <?php if(empty($type)){ echo "class='cur'"; } ?> href="?m=Home&c=Daikuan&a=creditList<?php if($y_name){ echo "&yinhang=".$y_name; } if($dengji){ echo "&dengji=".$dengji; } if($zhengce){ echo "&zhengce=".$zhengce; } if($bizhong){ echo "&bizhong=".$bizhong; } ?>">不限</a></p>
            <ul>
                <li><a <?php
 if(isset($type)){ if($type=='银联'){ echo "class='cur'"; } } ?> href="?m=Home&c=Daikuan&a=creditList&type=银联<?php if($y_name){ echo "&yinhang=".$y_name; } if($dengji){ echo "&dengji=".$dengji; } if($zhengce){ echo "&zhengce=".$zhengce; } if($bizhong){ echo "&bizhong=".$bizhong; } ?>">银联</a></li>
                <li><a <?php
 if(isset($type)){ if($type=='MasterCard'){ echo "class='cur'"; } } ?> href="?m=Home&c=Daikuan&a=creditList&type=MasterCard<?php if($y_name){ echo "&yinhang=".$y_name; } if($dengji){ echo "&dengji=".$dengji; } if($zhengce){ echo "&zhengce=".$zhengce; } if($bizhong){ echo "&bizhong=".$bizhong; } ?>">MasterCard</a></li>
                <li><a <?php
 if(isset($type)){ if($type=='VISA'){ echo "class='cur'"; } } ?> href="?m=Home&c=Daikuan&a=creditList&type=VISA<?php if($y_name){ echo "&yinhang=".$y_name; } if($dengji){ echo "&dengji=".$dengji; } if($zhengce){ echo "&zhengce=".$zhengce; } if($bizhong){ echo "&bizhong=".$bizhong; } ?>">VISA</a></li>
                <li><a <?php
 if(isset($type)){ if($type=='JCB'){ echo "class='cur'"; } } ?> href="?m=Home&c=Daikuan&a=creditList&type=JCB<?php if($y_name){ echo "&yinhang=".$y_name; } if($dengji){ echo "&dengji=".$dengji; } if($zhengce){ echo "&zhengce=".$zhengce; } if($bizhong){ echo "&bizhong=".$bizhong; } ?>">JCB</a></li>
                <li><a <?php
 if(isset($type)){ if($type=='运通'){ echo "class='cur'"; } } ?> href="?m=Home&c=Daikuan&a=creditList&type=运通<?php if($y_name){ echo "&yinhang=".$y_name; } if($dengji){ echo "&dengji=".$dengji; } if($zhengce){ echo "&zhengce=".$zhengce; } if($bizhong){ echo "&bizhong=".$bizhong; } ?>">运通</a></li>
            </ul>
        </div>

    </div>
</div>
<div class="part2">
    <div class="container">
        <div class="total">
            <p>共找到 <span><?php echo ($count); ?></span> 款信用卡</p>
        </div>
        <div class="card-no-lists hide">
            <h3><i></i>我们找不到任何与您的搜索条件匹配的结果，但是调整您的搜索条件可能会有所帮助。</h3>
            <span>以下是一些建议：</span>
            <ul>
                <li><i></i>删除一些筛选条件</li>
                <li><i></i>调整您输入的关键词</li>
                <li><i></i>请扩大您的搜索范围</li>
            </ul>
        </div>
        <div class="card-lists">
            <?php if(is_array($list)): foreach($list as $key=>$list): ?><div class="card-list clearfix">
                    <img class="img" src="<?php echo ($list["logo"]); ?>" alt=""/>
                    <div class="card-list-txt1">
                        <h3><?php echo ($list["title"]); ?></h3>
                        <p><?php echo ($list["xiaoshou"]); ?></p>
                        <div class="clearfix card-small">
                            <a href="javascript:;"><img src="<?php echo ($list["logo_one"]); ?>" alt=""/></a>
                            <a href="javascript:;"><img src="<?php echo ($list["logo_two"]); ?>" alt=""/></a>
                        </div>
                    </div>
                    <ul class="card-list-txt2">
                        <li><i></i><?php echo ($list["dengji"]); ?></li>
                        <li><i></i><?php echo ($list["bizhong"]); ?></li>
                        <li><i></i><?php echo ($list["feiyong"]); ?></li>
                        <li><i></i><?php echo ($list["zhengce"]); ?></li>
                    </ul>
                    <div class="check">
                        <a href="<?php echo U('creditDetail',array('id'=>$list['id']));?>">查 看</a>
                        <p><span><?php echo ($list["renshu"]); ?></span></p>
                    </div>
                    <a href="<?php echo U('creditDetail',array('id'=>$list['id']));?>" class="card-btn"></a>
            </div><?php endforeach; endif; ?>

        <div class="paging-box clearfix">
            <div class="paging-list">
                <?php echo ($page); ?>
            </div>
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
<script type="text/javascript" src="/Public/js/jquery-1.10.2.min.js"></script>
<script type="text/javascript">
    /*导航栏的下拉显示*/
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
        });
    });

    /*银行的显示和隐藏*/
    $(function(){
        var $category = $('.credit-list-more ul li:gt(8)');     	    //  获得索引值大于8的银行集合对象
        $category.hide();							    //  隐藏上面获取到的jQuery对象。
        var $toggleBtn = $('.showUp');             //  获取“显示全部品牌”按钮
        $toggleBtn.click(function(){
            if($category.is(":visible")){
                $category.hide();                   		 //  隐藏$category
                $(this).text("显示").append("<i></i>");
                $(this).find("i").css({"borderBottomColor":"transparent","borderTopColor":"#acacac","top":"6px"});                  //改变背景图片和文本
            }else{
                $category.show();                   		 //  显示$category
                $(this).text("收起").append('<i></i>');
                $(this).find("i").css({"borderTopColor":"transparent","borderBottomColor":"#acacac","top":"-2px"});                  //改变背景图片和文本
            }
            return false;					      	//超链接不跳转
        });
    });
    /*更多筛选条件的显示和隐藏*/
    $(function(){
        var $category = $('.credit-list:gt(4)');     	    //  获得索引值大于8的银行集合对象
        $category.hide();							    //  隐藏上面获取到的jQuery对象。
        var $toggleBtn = $('.more-filter');             //  获取“显示全部品牌”按钮
        $toggleBtn.click(function(){
            if($category.is(":visible")){
                $category.hide();                   		 //  隐藏$category
                $(this).text("显示更多筛选").append("<i></i>");
                $(this).find("i").css({"borderBottomColor":"transparent","borderTopColor":"#4a4a4a","top":"9px"});                  //改变背景图片和文本
            }else{
                $category.show();                   		 //  显示$category
                $(this).text("收起更多筛选").append('<i></i>');
                $(this).find("i").css({"borderTopColor":"transparent","borderBottomColor":"#4a4a4a","top":"1px"});                  //改变背景图片和文本
            }
            return false;					      	//超链接不跳转
        });
    });

    /*当total的值为0时显示 没有匹配结果*/
    $(function(){
        var total = $(".total span").text();
        console.log(total);
        if(total == 0){
            $(".card-no-lists").removeClass("hide");
            $(".paging-box").addClass("hide");
        }else{
            $(".card-no-lists").addClass("hide");
            $(".paging-box").removeClass("hide");
        }
    });

    /*筛选框中各个分类的选择样式变化*/
    $(function(){
        $(".credit-list ul li a").click(function(){
            $(this).parent().parent().prev().find("a").removeClass("cur");
            $(this).addClass("cur").parent().siblings().find("a").removeClass("cur");
        });
        $(".credit-list .all a").click(function(){
            $(this).addClass("cur");
            $(this).parent().next().find("a").removeClass("cur");
        })
    });


    /*分页效果的实现代码*/
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