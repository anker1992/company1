<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
<head lang="en">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=Edge">
    <title>微合伙文化传媒有限公司_微合伙科技有限公司_金融社交圈_金融趴官网_微合伙</title>
    <link rel="stylesheet" href="/Public/css/common.css"/>
    <link rel="stylesheet" href="/Public/css/houseLoanList.css"/>

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
            <li class="cur"><a href="<?php echo U('Daikuan/houseLoanList');?>">房贷</a>|</li>
            <li><a href="<?php echo U('Daikuan/creditList');?>">信用卡</a></li>
            <li><a href="<?php echo U('Daikuan/userlogin');?>">经理入驻</a></li>
        </ul>
    </div>
</div>

<div class="part1">
    <div class="container">
        <p>我们为您找到 <span><?php echo ($count); ?></span> 个银行提供北京按揭贷款，您可以做进一步排序、筛选</p>
    </div>
</div>

<div class="part2">
    <div class="container clearfix">
        <div class="part2-left">
            <div data-am-sticky="{top: 80}" class="part2-left-top clearfix">
                <div class="search-filter-box2 common-box">
                    <div class="search-filter-con2 common-con">
                        <input type="text" value="全部房型"/>
                        <i></i>
                    </div>
                    <div class="search-filter-list2 common-list">
                        <a href="javascript:;" data-value="不限房屋类型">不限房屋类型</a>
                        <a href="javascript:;" data-value="商品住房">商品住房</a>
                        <a href="javascript:;" data-value="房改房">房改房</a>
                        <a href="javascript:;" data-value="经济适用房">经济适用房</a>
                        <a href="javascript:;" data-value="整体式商铺">整体式商铺</a>
                        <a href="javascript:;" data-value="隔断式商铺">隔断式商铺</a>
                        <a href="javascript:;" data-value="写字楼">写字楼</a>
                        <a href="javascript:;" data-value="商住两用房">商住两用房</a>
                        <a href="javascript:;" data-value="小产权房">小产权房</a>
                    </div>
                </div>
                <div class="search-filter-box1 common-box">
                    <div class="search-filter-con1 common-con">
                        <input type="text" value="不限新房、二手房"/>
                        <i></i>
                    </div>
                    <div class="search-filter-list1 common-list">
                        <a href="javascript:;" data-value="不限新房、二手房">不限新房、二手房</a>
                        <a href="javascript:;" data-value="只支持新房">只支持新房</a>
                        <a href="javascript:;" data-value="只支持二手房">只支持二手房</a>
                    </div>
                </div>

            </div>

            <!--没有匹配条件的时候显示开始-->
            <div class="no-list hide">
                <p>暂无相关产品，请修改筛选条件或者看看其它贷款类型</p>
            </div>
            <!--没有匹配条件的时候显示结束-->
            <!--查找到的列表显示开始-->
            <ul class="product-list">
                <?php if(is_array($list)): foreach($list as $key=>$list): ?><li class="product-item clearfix">
                    <img src="<?php echo ($list["logo"]); ?>" alt=""/>
                    <div class="item-info">
                        <h4><a href="javascript:;"><?php echo ($list["title"]); ?></a><span title="<?php echo ($list["jianjie"]); ?>"><?php echo (msubstr($list["jianjie"],0,16,'utf-8',false)); ?>...</span></h4>
                        <p class="item-des">
                            <span class="house-support"><?php echo ($list["zhichi"]); ?></span>
                            <span class="house-type"><?php echo ($list["fangkuan_time"]); ?></span>
                        </p>
                        <ol class="item-type">
                            <li>
                                <i>1</i>
                                <span class="type"><?php echo ($list["shout"]); ?></span>
                                <span class="rate"><?php echo ($list["shout_lv"]); ?></span>
                                <span class="firstPay"><?php echo ($list["shout_fu"]); ?></span>
                            </li>
                            <li>
                                <i>2</i>
                                <span class="type"><?php echo ($list["ert"]); ?></span>
                                <span class="rate"><?php echo ($list["ert_lv"]); ?></span>
                                <span class="firstPay"><?php echo ($list["ert_fu"]); ?></span>
                            </li>
                            <li>
                                <i>3</i>
                                <span class="type"><?php echo ($list["shangyong"]); ?></span>
                                <span class="rate"><?php echo ($list["shangy_lv"]); ?></span>
                                <span class="firstPay"><?php echo ($list["shangy_fu"]); ?></span>
                            </li>
                        </ol>
                    </div>
                    <a href="<?php echo U('houseLoanDetail',array('id'=>$list['id']));?>" class="check">查看</a>
                    <div class="apply"></div>
                </li><?php endforeach; endif; ?>
            </ul>
            <div class="paging-box clearfix">
                <div class="paging-list">
                    <?php echo ($page); ?>
                </div>
            </div>
            <!--查找到的列表显示结束-->
        </div>
        <div class="part2-right">
            <div class="part2-right-top clearfix">
                <h3>北京按揭贷款知识</h3>
                <a href="javascript:;">查看更多>></a>
            </div>
            <ul>
                <li><a href="javascript:;">几倍、几折的基准利率是什么意思,几折的基准利率是？</a></li>
                <li><a href="javascript:;">现在申请，几年以后利率变了怎么办？</a></li>
                <li><a href="javascript:;">买房的首付，能贷款吗？</a></li>
                <li><a href="javascript:;">小产权房能按揭贷款吗?</a></li>
                <li><a href="javascript:;">按揭贷款放款一般要多久？</a></li>
                <li><a href="javascript:;">想提前还按揭，有什么规定？罚款吗?</a></li>
                <li><a href="javascript:;">买房子还要抵押别的东几折的基准利率是西吗？</a></li>
                <li><a href="javascript:;">按揭买房都有啥要求</a></li>
                <li><a href="javascript:;">几倍、几折的基准利率是什么意思,几折的基准利率是？</a></li>
                <li><a href="javascript:;">现在申请，几年以后利率变了怎么办？</a></li>
                <li><a href="javascript:;">买房的首付，能贷款吗？</a></li>
                <li><a href="javascript:;">小产权房能按揭贷款吗?</a></li>
                <li><a href="javascript:;">按揭贷款放款一般要多久？</a></li>
                <li><a href="javascript:;">想提前还按揭，有什么规定？罚款吗?</a></li>
                <li><a href="javascript:;">买房子还要抵押别的东几折的基准利率是西吗？</a></li>
                <li><a href="javascript:;">按揭买房都有啥要求</a></li>
            </ul>
            <div class="question">
                <a href="javascript:;">我要提问</a>
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
<script src="/Public/js/jquery-1.10.2.min.js"></script>
<script type="text/javascript" src="/Public/js/amazeui.js"></script>
<script type="text/javascript">


    $(function(){
        var val = $(".part1 span").text();
        if(val == 0){/*当搜到结果为0时显示暂无相关产品*/
            $(".part2 .no-list").removeClass("hide");
            $(".part2 .product-list").addClass("hide");
        }else{/*当搜到结果不为0时显示搜索列表*/
            $(".part2 .no-list").addClass("hide");
            $(".part2 .product-list").removeClass("hide");
        }
    });


    $(function(){
        $(window).scroll(function(){
            var scrolls = $(this).scrollTop();
            var height = document.body.scrollHeight;
            var height1 = window.screen.height;
            if(scrolls>200 && scrolls<height-height1){
                $(".part2-right").css({
                    position:"absolute",
                    marginTop:scrolls - 200 + 80,
                    right:0
                })
            }else{
                $(".part2-right").css({
                    position:"absolute",
                    marginTop:0,
                    right:0
                })
            }

        })
    });

    $(function(){
        selectBox(".search-filter-con1");
        selectBox(".search-filter-con2");

        function selectBox(box){
            $(box).find('input').attr("readonly",true).focusin(function(){
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
        selectItem(".search-filter-box1");
        selectItem(".search-filter-box2");

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
        $(".part2-left .product-item").each(function(index,item){
            $(this).find("ol li").eq(0).find(".rate").addClass("red");
        });

        $(".order-box a").click(function(){
            $(this).addClass("cur").siblings().removeClass("cur");
            var index = $(this).index();
            if(index == 0 || index == 1){
                $(".part2-left .product-item").each(function(index,item){
                    $(this).find("ol li").find(".rate").removeClass("red");
                    $(this).find("ol li").eq(0).find(".rate").addClass("red");
                });
            }else if(index == 2){
                $(".part2-left .product-item").each(function(index,item){
                    $(this).find("ol li").find(".rate").removeClass("red");
                    $(this).find("ol li").eq(1).find(".rate").addClass("red");
                });
            }else if(index == 3){
                $(".part2-left .product-item").each(function(index,item){
                    $(this).find("ol li").find(".rate").removeClass("red");
                    $(this).find("ol li").eq(2).find(".rate").addClass("red");
                });
            }
        })
    })

</script>

</body>
</html>