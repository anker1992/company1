<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
<head lang="en">
    <meta charset="UTF-8">
    <title>个人资料</title>
    <meta name="format-detection" content="telephone=no">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0, user-scalable=no">
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="apple-touch-fullscreen" content="yes">
    <meta http-equiv="Access-Control-Allow-Origin" content="*">
    <link rel="stylesheet" href="/Public/csswx/amazeui.min.css"/>
    <link rel="stylesheet" href="/Public/csswx/personalData.css"/>
    <style>
        .heart-box{
            float: left;
            margin:26px 10px;
        }
        .heart-box .icon-heart{
            background: url("/Public/imageswx/icon-hearts1.png")no-repeat;
            width: 20px;
            height: 16px;
            display: block;
            background-size: 40px 16px;
            margin: 0 auto;
            background-position: -20px 0;
        }
        .heart-box .heart-red{
            background-position: 0 0;
        }
    </style>
</head>
<body>
<div class="header">
    <?php if($_GET['heart']): ?><h2><a href="<?php echo U('WxUser/my_heart',array('uid'=>$uid,'phone'=>$phone));?>" ><span></span>返回列表</a></h2>
        <?php else: ?>
        <h2><a href="javascript:history.go(-1)" ><span></span>返回列表</a></h2><?php endif; ?>
</div>
<div data-am-widget="slider" class="mySlider am-slider am-slider-a1" id="demo-slider-0" data-am-slider='{&quot;directionNav&quot;:false}' >
    <ul class="mySliderUl am-slides">
            <li><img src="<?php echo ($info["touxiang_src"]); ?>" alt=""/></li>
        <?php if(is_array($photo)): foreach($photo as $key=>$photo): ?><li><img src="<?php echo ($photo["url"]); ?>" alt=""/></li><?php endforeach; endif; ?>
    </ul>
</div>
<div class="basics clearfix">
    <span class="name"><?php echo ($info["nickname"]); ?></span>
    <input type="hidden" name="my_id" id="my_id" value="<?php echo ($uid); ?>">
    <div class="heart-box">
        <?php if($heart){ ?>
        <i class="icon-heart heart-red" id="<?php echo ($id); ?>" value="<?php echo ($id); ?>"></i>
        <?php }else{ ?>
        <i class="icon-heart" id="<?php echo ($id); ?>" value="<?php echo ($id); ?>"></i>
        <?php } ?>
    </div>
    <span class="city"><i></i><?php echo ($info["workarea"]); ?></span>
</div>

<div class="certification-box">
    <h2>认证信息</h2>
    <p class="certification-info">认证信息
        <?php if($renzheng['idstate']== 2): ?><span>已认证</span>
        <?php else: ?>
            <span>未认证</span><?php endif; ?>
    </p>
    <p class="certification-edu">学历
        <?php if($renzheng['schoolname']): ?><span>已认证</span>
        <?php else: ?>
            <span>未认证</span><?php endif; ?>
    </p>
    <p class="certification-house">资产认证(房)
        <?php if($renzheng['houseimg']): ?><span>已认证</span>
        <?php else: ?>
            <span>未认证</span><?php endif; ?>
    </p>
    <p class="certification-car">资产认证(车)
        <?php if($renzheng['carimg']): ?><span>已认证</span>
        <?php else: ?>
            <span>未认证</span><?php endif; ?>
    </p>
</div>
<!--个人信息-->
<div class="personal-box">
    <h2>个人信息</h2>
    <div class="personal-box1">
        <?php if(!empty($info['tweleveanimals'])): ?><span><?php echo ($info["tweleveanimals"]); ?></span><?php endif; ?>
        <?php if(!empty($info['constellation'])): ?><span><?php echo ($info["constellation"]); ?></span><?php endif; ?>
        <?php if(!empty($info['workarea'])): ?><span><?php echo ($info["workarea"]); ?></span><?php endif; ?>
        <?php if(!empty($info['education'])): ?><span><?php echo ($info["education"]); ?></span><?php endif; ?>
    </div>
    <div class="personal-box2">
        <p><i>职业</i><span><?php echo ($info["profession"]); ?></span></p>
        <p><i>经济</i><span><?php echo ($info["ifbuyhouse"]); ?></span><span><?php echo ($info["ifbuycar"]); ?></span></p>
        <p><i>月薪</i><span><?php echo ($info["salary"]); ?></span></p>
        <p><i>择偶</i><span><?php echo ($info["zworkarea"]); ?></span><span><?php echo ($info["zmaritalstatus"]); ?></span><span><?php echo ($info["zsalary"]); ?></span></p>
    </div>
</div>
<!--兴趣爱好-->
<div class="interest-box">
    <h2>兴趣爱好</h2>
    <div class="content">
        <div class="item item1">
            <div class="item-top">
                <h3><i></i>个人标签</h3>
            </div>
            <div class="icon icon1">
                <?php if(empty($info['best_person'])): ?><span>无</span>
                <?php else: ?>
                    <?php if(is_array($best_person)): foreach($best_person as $key=>$person): ?><span><?php echo ($person); ?></span><?php endforeach; endif; endif; ?>
            </div>
        </div>
        <div class="item item2">
            <div class="item-top">
                <h3><i></i>我喜欢的电影</h3>
            </div>
            <div class="icon icon2">
                <?php if(empty($info['best_movie'])): ?><span>无</span>
                <?php else: ?>
                    <?php if(is_array($best_movie)): foreach($best_movie as $key=>$movie): ?><span><?php echo ($movie); ?></span><?php endforeach; endif; endif; ?>
            </div>
        </div>
        <div class="item item3">
            <div class="item-top">
                <h3><i></i>我喜欢的音乐</h3>
            </div>
            <div class="icon icon3">
                <?php if(empty($info['best_music'])): ?><span>无</span>
                    <?php else: ?>
                    <?php if(is_array($best_music)): foreach($best_music as $key=>$music): ?><span><?php echo ($music); ?></span><?php endforeach; endif; endif; ?>
            </div>
        </div>
        <div class="item item4">
            <div class="item-top">
                <h3><i></i>我喜欢的作家</h3>
            </div>
            <div class="icon icon4">
                <?php if(empty($info['best_writer'])): ?><span>无</span>
                    <?php else: ?>
                    <?php if(is_array($best_writer)): foreach($best_writer as $key=>$writer): ?><span><?php echo ($writer); ?></span><?php endforeach; endif; endif; ?>
            </div>
        </div>
        <div class="item item5">
            <div class="item-top">
                <h3><i></i>我喜欢的美食</h3>
            </div>
            <div class="icon icon5">
                <?php if(empty($info['best_food'])): ?><span>无</span>
                    <?php else: ?>
                    <?php if(is_array($best_food)): foreach($best_food as $key=>$food): ?><span><?php echo ($food); ?></span><?php endforeach; endif; endif; ?>
            </div>
        </div>
        <div class="item item6">
            <div class="item-top">
                <h3><i></i>我喜欢的运动</h3>
            </div>
            <div class="icon icon6">
                <?php if(empty($info['best_sports'])): ?><span>无</span>
                    <?php else: ?>
                    <?php if(is_array($best_sports)): foreach($best_sports as $key=>$sports): ?><span><?php echo ($sports); ?></span><?php endforeach; endif; endif; ?>
            </div>
        </div>
    </div>
</div>
<script type="text/javascript" src="/Public/jswx/jquery-1.10.2.min.js"></script>
<script type="text/javascript" src="/Public/jswx/amazeui.min.js"></script>
<script type="text/javascript">
    $(function () {
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