<?php if (!defined('THINK_PATH')) exit();?><!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>心动</title>
    <meta name="viewport" content="width=device-width,minimum-scale=1.0,maximum-scale=1.0,user-scalable=no"/>
    <link rel="stylesheet" href="/Public/csswx/amazeui.min.css"/>
    <link rel="stylesheet" href="/Public/csswx/userCenter.css"/>
    <link rel="stylesheet" href="/Public/csswx/mainHeart.css"/>
</head>
<body class="bg-gray">
<div class="main-content" style="margin-bottom: 0;">
    <input type="hidden" name="my_id" id="my_id" value="<?php echo ($uid); ?>">
    <input type="hidden" id="tiaoshu" value="<?php echo ($tiaoshu); ?>">
    <input type="hidden" id="now_page" value="<?php echo ($now_page); ?>">
    <input type="hidden" id="phone" value="<?php echo ($phone); ?>">
    <input type="hidden" id="uid" value="<?php echo ($uid); ?>">
    <?php if(is_array($list)): foreach($list as $key=>$list): ?><!--<input type="hidden" name="he_id" id="he_id" value="<?php echo ($list["id"]); ?>">-->
    <div class="main-heart-items" data-id="">
        <div class="main-heart-items-head">
            <div class="head-box1">
                <span class="head-name"><?php echo ($list["nickname"]); ?></span>
                <?php if($list['idstate'] == 2): ?><img class="icon-vip-img" src="/Public/imageswx/icon-vip.png" alt=""/><?php endif; ?>
            </div>
            <div class="head-box2">
                <span class="fl"><?php echo ($list["age"]); ?></span>
                <div class="fr">
                    <img class="icon-position-img" src="/Public/imageswx/icon-position.png" alt=""/>
                    <span><?php echo ($list["workarea"]); ?></span>
                </div>
            </div>
        </div>
        <div class="main-heart-items-img-box">
            <div>
                <?php if($list['status'] == '1'){ ?>
                <i class="icon-heart heart-red" id="<?php echo ($list["id"]); ?>" value="<?php echo ($list["id"]); ?>"></i>
                <?php }else{ ?>
                <i class="icon-heart" id="<?php echo ($list["id"]); ?>" value="<?php echo ($list["id"]); ?>"></i>
                <?php } ?>
                <p style="font-size: 12px;">动心</p>
            </div>
            <!--<span class="main-heart-items-renzheng">-->
                <!--已认证身份-学历-车-房-->
            <!--</span>-->
            <a href="<?php echo U('WxList/personalInfo',array('id'=>$list['id'],'phone'=>$phone,'uid'=>$uid));?>">
                <img class="main-heart-items-img lazy" data-original="<?php echo ($list["touxiang_src"]); ?>" alt=""/>
            </a>
        </div>
        <div class="main-heart-items-foot">
            <div><span><?php echo ($list["constellation"]); ?></span></div>
            <div><span><?php echo ($list["education"]); ?></span></div>
            <div><span><?php echo ($list["profession"]); ?></span></div>
            <div><span><?php echo ($list["maritalstatus"]); ?></span></div>
        </div>
    </div><?php endforeach; endif; ?>
</div>

<div class="main-heart-fenye">
    <?php echo ($page); ?>
</div>
<style type="text/css">
    .main-heart-fenye{
        text-align: center;
    }
    .main-heart-fenye a{
        display: inline-block;
        font-size: 12px;
        /*width: 40px;*/
        padding:0 10px;
        border: 1px solid #999;
        border-radius: 5px;
        margin: 5px;
    }
    .main-heart-fenye .current{
        display: inline-block;
        font-size: 12px;
        /*width: 40px;*/
        padding: 0 10px;
        border: 1px solid #999;
        border-radius: 5px;
        margin: 5px;
        color: #fff;
        background: #999;
    }

</style>

<div data-am-widget="navbar" class="am-navbar am-cf am-navbar-default "
     id="">
    <ul class="am-navbar-nav am-cf am-avg-sm-4 my-nav">
        <li>
            <a href="<?php echo U('WxList/mainHeart',array('phone'=>$phone,'uid'=>$uid));?>" class="footer-active">
                <i class="my-icons footer-heart-icon"></i>
                <span class="am-navbar-label">心动</span>
            </a>
        </li>
        <li>
            <a href="<?php echo U('WxUser/userCenter',array('phone'=>$phone,'uid'=>$uid));?>" class="">
                <i class="my-icons footer-my-icon"></i>
                <span class="am-navbar-label">我的</span>
            </a>
        </li>
    </ul>
</div>
<script type="text/javascript" src="/Public/jswx/jquery-1.10.2.min.js"></script>
<script type="text/javascript" src="/Public/jswx/amazeui.min.js"></script>
<script type="text/javascript" src="/Public/jswx/jquery.lazyload.min.js?v=1.9.1"></script>
<script type="text/javascript">
    var divs = document.getElementsByClassName("main-heart-items-foot");
    function getFontSize(){
        var width=document.documentElement.clientWidth||document.body.clientWidth+"px";
        var fontSize=(100/750)*width;
        return fontSize;
    }
    for(var i=0;i<divs.length;i++){
        divs[i].style.fontSize=getFontSize()+"px";
    }

    window.onresize=function(){
        for(var i=0;i<divs.length;i++){
            divs[i].style.fontSize=getFontSize()+"px";
        }
    };

    $(function () {
        //延时加载
        $("img.lazy").lazyload({effect: "fadeIn"});
        //心动
        var my_id = $("#my_id").val();
        var he_id;
        $(".icon-heart").click(function(){
            he_id = $(this).attr("id");
            if($(this).hasClass("heart-red")){
                //已经动心
                //传过去修改为不动心
                $.ajax({
                    cache: true,
                    type: "POST",
                    url:"<?php echo U('do_heart');?>",
                    data:{'my_id':my_id,'he_id':he_id,'status':'-1'},
                    async: false,
                    error: function(request) {
                        alert("Connection error");
                    },
                    success: function(data) {
                        $("#"+he_id+"").removeClass("heart-red");
                    }
                });

            }else{
                //还未动心
                //修改为动心状态
                $.ajax({
                    cache: true,
                    type: "POST",
                    url:"<?php echo U('do_heart');?>",
                    data:{'my_id':my_id,'he_id':he_id,'status':'1'},
                    async: false,
                    error: function(request) {
                        alert("Connection error");
                    },
                    success: function(data) {
                        $("#"+he_id+"").addClass("heart-red");
                    }
                });
            }
        });
    });
</script>
</body>
</html>