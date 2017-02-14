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
<!--header 开始-->




<div class="header">
    <div class="container clearfix">
        <div class="head-left left">
            <div class="head-logo">
                <a href="index.php"><img src="/Public/images/logo.png" alt=""/></a>
            </div>
            <ul>
                <!-- <li><a href="index.php" target="_self">首页</a></li> -->
                <li><a href="javascript:;" onclick="alert('正在维护中')">自由市场</a></li>
                <li><a href="<?php echo U('Rongzi/financeproducts');?>">理财产品</a></li>
                <li><a href="personalLoan.php">贷款产品</a></li>
                <li><a href="financePage.php">项目融资</a></li>
                <li><a href="datingIndex.php">相亲交友</a></li>
                <!-- <li>
                    <a href="datingIndex.php">金融社交</a>
                    <ol>
                        <li><a href="datingIndex.php">相亲交友</a></li>
                    </ol>
                </li> -->
                <li>
                    <a href="javascript:;">求职招聘</a>
                    <ol>
                        <?php
 if(isset($_COOKIE['name'])){?>
                        <li><a href="personal1.php">个人中心</a></li>
                        <?php }else{?>
                        <li><a href="login.php">个人中心</a></li>
                        <?php } ?>
                        <li><a href="resumes.php">简历库</a></li>
                        <li><a href="personal1.php#floor6">求职意向</a></li>
                        <li><a href="recruitment1.php">高端招聘</a></li>
                        <li><a href="jobGuidance1.php">求职指导</a></li>
                    </ol>
                </li>
                <!-- <li><a href="news1.php">资讯</a></li>
                <li><a href="financeProducts.php">产品</a></li> -->

                <li>
                    <a href="javascript:;">关于我们</a>
                    <ol>
                        <li><a href="aboutUs.php">公司简介</a></li>
                        <li><a href="contactUs.php">联系我们</a></li>
                        <li><a href="adService.php">主营业务</a></li>
                        <li><a href="joinUs.php">加入我们</a></li>
                    </ol>
                </li>
            </ul>
        </div>
        <div class="head-right right">
            <ol>
                <!-- <li class="search"><a href="javascript:void(0)"><i></i>搜索</a></li>-->
                <?php
 if (isset($_COOKIE['name'])) {?>
                <li class="login"><a href="###"><i></i><?php echo $_COOKIE['name'] ?></a></li>
                <li class="login"><a href="logout.php"><i></i>退出</a></li>
                <?php } else{?>

                <li class="login login2"><a href="login.php"><i></i>登录</a></li>
                <li class="register login2"><a href="register.php"><i></i>注册</a></li>
                <?php
 }?>
            </ol>
        </div>
    </div>
</div>

<!--header结束-->

<div class="part1">
    <div class="container clearfix">
        <span class="left">所有产品</span>
        <div class="left"><input type="text"/><i></i></div>
        <a class="right" href="productSubclasses1.php">免费发布信息</a>
    </div>
</div>
<div class="part2">
    <div class="container">
        <div class="part2-con">
            <dl class="clearfix cplx">
                <form action="financeProducts.php" method="post" id='myform'>
                    <input type="hidden" name="protype" id="protype" value="<?php echo $protype ?>">
                </form>

                <dt>产品类型：</dt>
                <dd><a href="financeproducts" class="cur">不限</a></dd>
                <dd>
                    <a>银行</a>
                </dd>
                <dd>
                    <a>资管信托</a>
                </dd>
                <dd>
                    <a>基金类</a>
                </dd>
                <dd>
                    <a>保险</a>
                </dd>
                <dd>
                    <a>P2P</a>
                </dd>
                <dd>
                    <a>另类投资</a>
                </dd>
                <dd>
                    <a>产品求购</a>
                </dd>
                </dl>

            <dl class="clearfix yqsy">
                <dt>预期收益率：</dt>
                <dd><a class="cur">不限</a></dd>
                <dd><a>1%-4%</a></dd>
                <dd><a>4%-8%</a></dd>
                <dd><a>8%-10%</a></dd>
                <dd><a>10%-12%</a></dd>
                <dd><a>12%-14%</a></dd>
                <dd><a>其他</a></dd>
            </dl>
            <dl class="clearfix zje">
                <dt>资金额：</dt>
                <dd><a class="cur">不限</a></dd>
                <dd><a>1万-10万</a></dd>
                <dd><a>10万-50万</a></dd>
                <dd><a>50万-100万</a></dd>
                <dd><a>100万-500万</a></dd>
                <dd><a>500万-1000万</a></dd>
                <dd><a>1000万-5000万</a></dd>
                <dd><a>5000万-1亿</a></dd>

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
                                <a href="infoRelease.php?id=<?php echo $_rows['id'] ?>" target="_black">查看联系方式</a>
                            </div>
                        </li><?php endforeach; endif; ?>
                    </ul>
                </div>
            </div>
            <div class="part4-page">
                <!-- <div class="paging-list">
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
                </div> -->

            <!-- <a href="javascript:;">更多你感兴趣的产品</a> -->
            <p>共<span><?php echo $_num ?></span>条信息，<a href="productSubclasses1.php">《马上发布一条产品信息》</a></p>
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

<script type="text/javascript" src="/Public/js/jquery-1.10.2.min.js"></script>
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