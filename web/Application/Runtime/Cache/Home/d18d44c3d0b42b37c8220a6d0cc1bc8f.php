<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
<head lang="en">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=Edge">
    <title></title>
    <link rel="stylesheet" href="/Public/css/common.css"/>
    <link rel="stylesheet" href="/Public/css/financeProducts.css"/>
</head>
<body>
<script type="text/javascript" src="/Public/js/jquery-1.10.2.min.js"></script>
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

<div class="part1">
    <div class="container clearfix">
        <span class="left">所有产品</span>
        <div class="left"><input type="text"/><i></i></div>
        <!--<a class="right" href="productSubclasses1.php">免费发布信息</a>-->
    </div>
</div>
<div class="part2">
    <div class="container">
        <div class="part2-con">
            <dl class="clearfix cplx">
                <form action="financeProducts.php" method="post" id='myform'>
                </form>

                <dt>产品类型：</dt>
                <dd><a <?php if(!isset($cplx) || empty($cplx)){ echo "class='cur'";}?> href="?m=Home&c=Rongzi&a=financeproducts&cplx=<?php if($yqsy){ echo '&yqsy='.$yqsy;} if($zje){ echo '&zje='.$zje; } ?>">不限</a></dd>
                <?php if(is_array($cplx_list)): foreach($cplx_list as $key=>$cplx_list): ?><dd class="ceshi">
                        <a <?php if(isset($cplx)){ if($cplx==$cplx_list['cplx_name']){ echo "class='cur'";}} ?> href="?m=Home&c=Rongzi&a=financeproducts&cplx=<?php echo ($cplx_list["cplx_name"]); if($yqsy){ echo '&yqsy='.$yqsy;} if($zje){ echo '&zje='.$zje; } ?>"><?php echo ($cplx_list["cplx_name"]); ?></a>
                    </dd><?php endforeach; endif; ?>
                </dl>
            <dl class="clearfix yqsy">
                <dt>预期收益率：</dt>
                <dd><a <?php if(!isset($yqsy) || empty($yqsy)){ echo "class='cur'";}?> href="?m=Home&c=Rongzi&a=financeproducts&yqsy=<?php if($cplx){ echo '&cplx='.$cplx;} if($zje){ echo '&zje='.$zje; } ?>">不限</a></dd>
                <?php if(is_array($yqsy_list)): foreach($yqsy_list as $key=>$yqsy_list): ?><dd><a <?php if(isset($yqsy)){ if($yqsy==$yqsy_list['yqsy_name']){ echo "class='cur'";}} ?> href="?m=Home&c=Rongzi&a=financeproducts&yqsy=<?php echo ($yqsy_list["yqsy_name"]); if($cplx){ echo '&cplx='.$cplx;} if($zje){ echo '&zje='.$zje; } ?>"><?php echo ($yqsy_list["yqsy_name"]); ?></a></dd><?php endforeach; endif; ?>
            </dl>
            <dl class="clearfix zje">
                <dt>资金额：</dt>
                <dd><a <?php if(!isset($zje) || empty($zje)){ echo "class='cur'";}?> href="?m=Home&c=Rongzi&a=financeproducts&zje=<?php if($cplx){ echo '&cplx='.$cplx;} if($yqsy){ echo '&yqsy='.$yqsy;} ?>" >不限</a></dd>
                <?php if(is_array($zje_list)): foreach($zje_list as $key=>$zje_list): ?><dd><a <?php if(isset($zje)){ if($zje==$zje_list['zje_name']){ echo "class='cur'";}} ?> href="?m=Home&c=Rongzi&a=financeproducts&zje=<?php echo ($zje_list["zje_name"]); if($cplx){ echo '&cplx='.$cplx;} if($yqsy){ echo '&yqsy='.$yqsy; } ?>"><?php echo ($zje_list["zje_name"]); ?></a></dd><?php endforeach; endif; ?>
            </dl>
        </div>
    </div>
</div>
</div>
<div class="part4">
    <div class="container clearfix">
        <div class="part4-left">
            <div class="part4-tab">
                <ol class="clearfix">
                   <li id="gxsj" class="cur">更新时间</li>
                    <!--<li id="zhsx">综合顺序</li>-->
                    <!--<li id="gxsj">更新时间</li>-->
                </ol>
                <div class="part4-tab-list">
                    <ul>
                        <?php if(is_array($product)): foreach($product as $key=>$product): ?><li class="clearfix">
                            <div class="left">
                                <h3><a href="" target="_black"><?php echo ($product["title"]); ?></a></h3>
                                <p>投资门槛：<span class="red"><?php echo ($product["threshold"]); ?></span></p>
                                <p>
                                    投资期限：<span><?php echo ($product["term"]); ?></span>
                                    产品类型：<span><?php echo ($product["class"]); ?></span>
                                </p>
                                <p>预期收益率：<span class="red"><?php echo ($product["expectedreturn"]); ?></span></p>
                            </div>
                            <div class="right">
                                <?php if($cplx == '另类投资'){ ?>
                                    <a href="<?php echo U('Rongzi/inforelease',array('id'=>$product['id'],'cplx'=>'1'));?>" target="_black">查看联系方式</a>
                                <?php }elseif($cplx == '产品求购'){ ?>
                                    <a href="<?php echo U('Rongzi/inforelease',array('id'=>$product['id'],'cplx'=>'2'));?>" target="_black">查看联系方式</a>
                                <?php }elseif($cplx == '保险'){ ?>
                                    <a href="<?php echo U('Rongzi/inforelease',array('id'=>$product['id'],'cplx'=>'3'));?>" target="_black">查看联系方式</a>
                                <?php }else{ ?>
                                    <a href="<?php echo U('Rongzi/inforelease',array('id'=>$product['id']));?>" target="_black">查看联系方式</a>
                                <?php } ?>
                            </div>
                        </li><?php endforeach; endif; ?>
                    </ul>
                </div>
            </div>
            <link href="/Public/css/mypage.css" rel="stylesheet" type="text/css"/>

            <div class="part4">

                <tr class="content">
                    <!--<td colspan="3" bgcolor="#FFFFFF">&nbsp;<?php echo ($page); ?></td>-->
                    <td colspan="3" bgcolor="#FFFFFF"><div class="pages">
                        <?php echo ($page); ?>
                    </div></td>
                </tr>
             </div>

    </div>
    <div class="part4-right">
        <h2>产品推荐</h2>
        <ul>
            <li><a href="infoRelease.php?id=<?php echo $tj_rows['id'] ?>">
                <img src="/Public/images/product-recom1.jpg" alt=""/>
                <p><?php echo $tj_rows['name'] ?></p>
                <p>规模：<?php echo $tj_rows['scale'] ?></p>
                <p>期限：<?php echo $tj_rows['term'] ?></p>
            </a>
            </li>
            <!-- <li>
                <img src="/Public/images/product-recom1.jpg" alt=""/>
                <p>光大信托 长信1号镇宁城投资产管理计划</p>
                <p>规模：2亿</p>
                <p>期限：2年</p>
            </li>
            <li>
                <img src="/Public/images/product-recom1.jpg" alt=""/>
                <p>光大信托 长信1号镇宁城投资产管理计划</p>
                <p>规模：2亿</p>
                <p>期限：2年</p>
            </li>
            <li class="last">
                <img src="/Public/images/product-recom1.jpg" alt=""/>
                <p>光大信托 长信1号镇宁城投资产管理计划</p>
                <p>规模：2亿</p>
                <p>期限：2年</p>
            </li> -->
        </ul>
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


<script type="text/javascript" src="/Public/js/financeProducts.js"></script>
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

    $(function(){
        $(".part2-con a").click(function(){
            $(this).addClass("cur").parent().siblings().find("a").removeClass("cur");
        })

        $(".part3 ul li").click(function(){
            var index = $(this).index();
            console.log(index);
            $(this).addClass("cur").siblings().removeClass("cur");
            $(".part3-list-con").children("div").eq(index).removeClass("hide").siblings().addClass("hide");
        })
    });

    $(function(){
        $(".part4 ol li").click(function(){
            $(this).addClass("cur").siblings().removeClass("cur");
        })
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