<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
<head lang="en">
    <meta charset="UTF-8">
    <title>微合伙</title>
    <meta name="format-detection" content="telephone=no">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0, user-scalable=no">
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="apple-touch-fullscreen" content="yes">
    <meta http-equiv="Access-Control-Allow-Origin" content="*">
    <link rel="stylesheet" href="/Public/css/amazeui.min.css"/>
    <link rel="stylesheet" href="/Public/css/commonHeader.css"/>
    <link rel="stylesheet" href="/Public/css/projectList.css"/>
</head>
<body>

<div class="header clearfix">
    <a href="javascript:;" class="header-left"></a>
    <p class="title-bar-text">智能撮合</p>
    <a href="<?php echo U('Project/Projectlist',array('token'=>$_GET['token']));?>" class="header-right"></a>
</div>
<div class="nav">
    <div class="nav-item">
        <a class="cur" href="javascript:;">项目库</a>
        <ul>
            <li><a href="<?php echo U('Project/Projectlist',array('token'=>$_GET['token']));?>">项目库</a></li>
            <li><a href="<?php echo U('Product/productList',array('token'=>$_GET['token']));?>">产品库</a></li>
        </ul>
        <i></i>
    </div>
    <div class="nav-item">
        <a href="<?php echo U('Invest/investList',array('token'=>$_GET['token']));?>">投资人</a>
    </div>
    <div class="nav-item">
        <a href="<?php echo U('Userindex/userCenter',array('token'=>$_GET['token']));?>">我的信息</a>
    </div>
</div>
<section>
    <?php if(is_array($list)): foreach($list as $key=>$list): ?><div class="list-item">
        <a href="<?php echo U('projectdetail',array('token'=>$_GET['token'],'proj_id'=>$list['proj_id']));?>"></a>
        <div class="list-header">
            <img src="/admin/<?php echo ($list["proj_logo"]); ?>" alt=""/>
            <div class="list-content">
                <?php if($list['status'] == 1): ?><h2><?php echo ($list["proj_name"]); ?>
                        <span class="list-collection" id="<?php echo ($list["proj_id"]); ?>">
                            <i class="cur" id="<?php echo ($_GET['token']); ?>"></i>已收藏
                        </span>
                    </h2>
                    <?php else: ?>
                    <h2><?php echo ($list["proj_name"]); ?>
                        <span class="list-collection" id="<?php echo ($list["proj_id"]); ?>">
                            <i id="<?php echo ($_GET['token']); ?>"></i>收藏</span>
                    </h2><?php endif; ?>
                <p><?php echo (msubstr(htmlspecialchars_decode($list["proj_ject"]),0,45,'utf-8',false)); ?>...</p>
                <ul class="clearfix">
                    <li><?php echo ($list["proj_area"]); ?></li>
                    <li><?php echo ($list["proj_round"]); ?></li>
                </ul>
            </div>
        </div>
        <div class="list-money clearfix" >
            <h3><i></i>融资金额</h3>
            <p><span><?php echo ($list["proj_money"]); ?></span>元</p>
        </div>
    </div><?php endforeach; endif; ?>
</section>



<script type="text/javascript" src="/Public/js/jquery-1.10.2.min.js"></script>
<script type="text/javascript" src="/Public/js/amazeui.min.js"></script>
<script type="text/javascript">
    $(function(){
        $(".nav-item .cur").click(function(){
            var oUl = $(".nav-item ul");
            if(oUl.css("display") === "none"){
                oUl.css("display","block");
                $(".nav-item i").addClass("cur");
                return false;
            }else{
                oUl.css("display","none");
                $(".nav-item i").removeClass("cur");
                return false;
            }
        });

        $(".list-collection").click(function(){
            var token = $(this).find("i").attr("id");
            var he_id = $(this).attr("id");
            var oI = $(this).find("i");
            var oS = $(this).find("span");
            if(!oI.hasClass("cur")){
                var zj_status = '1';
            }else if(oI.hasClass("cur")){
                var zj_status = '-1';
            }
            $.ajax({
                cache: true,
                type: "POST",
                url: "<?php echo U('do_heart');?>",
                data: {'token': token, 'he_id': he_id, 'status': zj_status},
                async: false,
                error: function (request) {
                    alert("Connection error");
                },
                success: function (data) {
                    if (data == '1') {
                        oI.addClass("cur");
                        oS.text('已收藏');
                    }else{
                        oI.removeClass("cur");
                        //oI.addClass("cur");
                        oS.text('收藏');
                    }
                }
            });
        });

        $("body").click(function(){
            $(".nav-item ul").css("display","none");
            $(".nav-item i").removeClass("cur");
        })
    })
</script>
</body>
</html>