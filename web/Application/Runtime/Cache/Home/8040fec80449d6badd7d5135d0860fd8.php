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
    <link rel="stylesheet" href="/Public/csswx/loading.css"/>
</head>
<body>
<div class="header">
    <h2><a href="<?php echo U('WxUser/userCenter',array('phone'=>$phone,'uid'=>$uid));?>" ><span></span>我的资料</a></h2>
</div>
<div data-am-widget="slider" class="mySlider am-slider am-slider-a1" id="demo-slider-0" data-am-slider='{&quot;directionNav&quot;:false}' >
    <ul class="mySliderUl am-slides">
        <?php if(empty($photo)): ?><li><img src="/Public/imageswx/602906157909597267.jpg" alt=""></li><?php endif; ?>
        <?php if(is_array($photo)): foreach($photo as $key=>$photo): ?><li><img src="<?php echo ($photo["url"]); ?>" alt=""/><a href="<?php echo U('WxUser/del_photos',array('id'=>$photo['id'],'uid'=>$uid,'phone'=>$phone));?>"></a></li><?php endforeach; endif; ?>
    </ul>
</div>
<div class="basics clearfix">
    <span class="name"><?php echo ($info["nickname"]); ?></span>
    <span class="city"><i></i><?php echo ($info["workarea"]); ?></span>
</div>
    <div class="upload">
        <p  name="img" id="logo" class="js-demo-slider-btn" data-action="add"><span>相册</span></p>
        <input type="hidden" id="phone" name="phone" value="<?php echo ($phone); ?>">
        <input type="hidden" id="uid" name="uid" value="<?php echo ($uid); ?>">
        <input type="hidden" id="mid" name="mid" value="<?php echo ($mid); ?>">
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

<div class="personal-box">
    <h2>个人信息</h2>
    <div class="personal-box1 clearfix">
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



<article class="htmleaf-container">
    <div id="clipArea"></div>
    <div class="foot-use">
        <div class="uploader1 blue">
            <input type="button" name="file" class="button" value="打开图库"/>
            <input id="file" type="file" onchange="setImagePreview();" accept="image/*" multiple />
        </div>
        <button id="clipBtn">保存</button>
    </div>
    <div id="view"></div>

</article>

<script type="text/javascript" src="/Public/jswx/jquery-1.10.2.min.js"></script>
<script type="text/javascript" src="/Public/jswx/iscroll-zoom.js"></script>
<script type="text/javascript" src="/Public/jswx/hammer.js"></script>
<script type="text/javascript" src="/Public/jswx/jquery.photoClip.js"></script>
<script type="text/javascript" src="/Public/jswx/amazeui.min.js"></script>
<script type="text/javascript">
    var objUrl = '';

    $("#clipArea").photoClip({
        width:320,
        height:320,
        file:"#file",
        view:"#view",
        ok:"#clipBtn"
    });
    function setImagePreview() {
        var preview = document.getElementById("preview"), file_head = document.getElementById("file"),picture = file_head.value;
        if (!picture.match(/.jpg|.gif|.png|.bmp|.jpeg|.svg|.tlff|.psd|.swf|.pcx|.dxf|.wmf|.emf|.lic|.eps|.tga/i))
            return alert("您上传的图片格式不正确，请重新选择！");
        if (preview && file_head.files && file_head.files[0])
            preview.style.display = "block",
                    preview.style.width = "63px",
                    preview.style.height = "63px",
                    preview.src = window.navigator.userAgent.indexOf("Chrome") >= 1 || window.navigator.userAgent.indexOf("Safari") >= 1 ? window.webkitURL.createObjectURL(file_head.files[0]) : window.URL.createObjectURL(file_head.files[0]);
        //return document.getElementById("DivUp").style.display = "block";
    }

    $(function(){
        var oUploadBox = $(".upload .upload-box");
        $(".upload p").click(function(){
            if(oUploadBox.hasClass("hide")){
                oUploadBox.removeClass("hide");
            }else{
                oUploadBox.addClass("hide");
            }
        })
    });

    $("#logo").click(function(){
        $(".htmleaf-container").show();
    });

    $(function() {
        var $slider = $('#demo-slider-0');
        var counter = 0;
        var mySlider = $(".mySlider");
        var mySliderUl = mySlider.find("ul");
        var mySliderLi = "";
        var len;
        var val;
        var img;
        var span;
        var num = 0;


        $("#clipBtn").click(function(){
            mySliderLi = mySliderUl.find("li");
            len = mySliderLi.length ;
            if(len == 3 && num ==0){
                span = $("<span></span>");
                img = $("<img />");
                img.attr("src",imgsource);
                var oLi = $('<li></li>').append(img);
                $slider.flexslider('addSlide',oLi);
                $slider.flexslider('removeSlide', $slider.flexslider('count') - 2);
                num += 1;

            }else if(len<7){
                span = $("<span></span>");
                img = $("<img />");
                img.attr("src",imgsource)
                var oLi = $('<li></li>').append(img);
                $slider.flexslider('addSlide',oLi);
            }
            $(".htmleaf-container").hide();
            //$("#form1").submit();
            var uid = $('#uid').val();
            var mid = $('#mid').val();
            var phone = $('#phone').val();
            $.ajax({
                cache: true,
                type: "POST",
                url:"<?php echo U('add_img');?>",
                data:{src:imgsource,'uid':uid,'phone':phone,'mid':mid},
                async: true,
                error: function(request) {
                },
                success: function(data) {
                   if(data == '1'){
                       window.location.href="<?php echo U('personalData',array('uid'=>$uid,'phone'=>$phone));?>";
                   }
                }
            });
        });

    });
</script>
</body>
</html>