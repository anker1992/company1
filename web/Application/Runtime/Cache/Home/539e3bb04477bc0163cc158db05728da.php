<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
<head lang="en">
    <meta charset="UTF-8">
    <title>认证信息</title>
    <meta name="format-detection" content="telephone=no">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0, user-scalable=no">
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="apple-touch-fullscreen" content="yes">
    <meta http-equiv="Access-Control-Allow-Origin" content="*">
    <link rel="stylesheet" href="/Public/csswx/amazeui.min.css"/>
    <link rel="stylesheet" href="/Public/csswx/certification.css"/>
</head>
<body>
<div id="main">
    <div class="header">
        <h2><a href="<?php echo U('WxUser/userCenter',array('phone'=>$arr['phone'],'uid'=>$arr['uid']));?>" ><span></span>认证信息</a></h2>
    </div>
    <div class="content">
        <!--身份认证-->
        <div class="item item1">
            <form action="<?php echo U('WxRenzheng/idcard_renzheng',array('phone'=>$arr['phone'],'uid'=>$arr['uid']));?>" method="post" enctype="multipart/form-data">
                <div class="item-top">
                    <h3><i></i>身份证认证</h3>
                    <span></span>
                </div>
                <?php if((empty($list['truename'])) OR ($list['idstate'] == 3) ): ?><div class="item-con">
                    <?php if($list['idstate'] == 3): ?><p style="color:red;margin-bottom:10px;">认证失败，请重新认证</p><?php endif; ?>
                    <div class="item-con-edit">
                        <span>姓名</span>
                        <input name="truename" type="text" placeholder="请输入" />
                    </div>
                    <div class="item-con-edit">
                        <span>身份证号码</span>
                        <input name="cardid" type="number" placeholder="请输入" maxlength="18" />
                    </div>

                    <div class="item-con-edit1 clearfix">
                        <div class="showImg">
                            <img id="img3" src="/Public/imageswx/certification-item04.jpg" alt=""/>
                            <p>身份证正面示例</p>
                        </div>
                        <div class="uploadImg">
                            <div class="defaultImg">
                                <input name="idzheng" onchange="previewImage(this,3)"  type="file"/>
                            </div>
                            <p>请上传身份证正面</p>
                        </div>
                    </div>

                    <div class="item-con-edit1 clearfix last">
                        <div class="showImg">
                            <img id="img4" src="/Public/imageswx/certification-item05.jpg" alt=""/>
                            <p>身份证反面示例</p>
                        </div>
                        <div class="uploadImg">
                            <div class="defaultImg">
                                <input name="idfan" onchange="previewImage(this,4)"  type="file"/>
                            </div>
                            <p>请上传身份证反面</p>
                        </div>
                    </div>

                    <div class="confirm">
                        <input class="submit-btn" type="submit" value="确定"/>
                    </div>
                </div>
                <?php else: ?>
                <div class="item-con">
                    <p class="name">姓名：<span><?php echo ($list["truename"]); ?></span></p >
                    <p class="cardId">身份证：<span><?php echo ($list["cardid"]); ?></span></p >
                    <?php if($list['idstate'] == 1): ?><p class="reg" style="color:#ff4651;">审核中</p >
                    <?php elseif($list['idstate'] == 2): ?>
                        <p class="reg" style="color:#ff4651;">身份已认证</p ><?php endif; ?>
                </div><?php endif; ?>
            </form>

        </div>
        <!--学历认证-->
        <div class="item item2">
            <form action="<?php echo U('WxRenzheng/edu_renzheng',array('phone'=>$arr['phone'],'uid'=>$arr['uid']));?>" method="post" enctype="multipart/form-data">
                <div class="item-top">
                    <h3><i></i>国内学历认证</h3>
                    <span></span>
                </div>
                <div class="item-con">
                    <div class="item-con-edit">
                        <span>学校名称</span>
                        <input name="schoolname" type="text" value="<?php echo ($list["schoolname"]); ?>" placeholder="请输入" />
                    </div>
                    <div class="item-con-edit">
                        <span>学历</span>
                        <!--<input name="education" type="text" placeholder="请输入" />-->
                        <select name="education" id="">
                            <?php if($list['education']): ?><option value="<?php echo ($list['education']); ?>"><?php echo ($list['education']); ?></option><?php endif; ?>
                            <option value="">请选择</option>
                            <option value="大专">大专</option>
                            <option value="本科">本科</option>
                            <option value="研究生">研究生</option>
                            <option value="博士">博士</option>
                            <option value="其他">其他</option>
                        </select>
                    </div>
                    <div class="item-con-edit last">
                        <span>证书编号</span>
                        <input name="edunum" type="text" value="<?php echo ($list["edunum"]); ?>" placeholder="请输入" />
                    </div>
                    <div class="confirm">
                        <input class="submit-btn" type="submit" value="确定"/>
                    </div>
                </div>
            </form>
        </div>
        <!--           <div class="item item3">
                       <div class="item-top">
                           <h3><i></i>海外学历认证</h3>
                           <span></span>
                       </div>
                       <div class="item-con">
                           <div class="item-con-edit">
                               <span>国家</span>
                               <input name="country" type="text" placeholder="请输入" />
                           </div>
                           <div class="item-con-edit">
                               <span>学校</span>
                               <input name="school" type="text" placeholder="请输入" />
                           </div>
                           <div class="item-con-edit">
                               <span>学历</span>
                               <select name="foreign-edu" id="">
                                   <option value="本科">本科</option>
                                   <option value="博士">博士</option>
                                   <option value="硕士">硕士</option>
                               </select>
                           </div>
                           <div class="item-con-edit last">
                               <span>证书编号</span>
                               <input name="number" type="text" placeholder="请输入" />
                           </div>
                       </div>
                   </div>-->
        <!--房产认证-->
        <div class="item item4">
            <form action="<?php echo U('WxRenzheng/house_renzheng',array('phone'=>$arr['phone'],'uid'=>$arr['uid']));?>" method="post" enctype="multipart/form-data">
                <div class="item-top">
                    <h3><i></i>资产认证 - 房</h3>
                    <span></span>
                </div>
                <div class="item-con">
                    <div class="item-con-edit1 clearfix">
                        <div class="showImg">
                            <?php if($list['houseimg']): ?><img id="img1" src="<?php echo ($list['houseimg']); ?>" alt=""/>
                                <p>房产证</p>
                            <?php else: ?>
                                <img id="img1" src="/Public/imageswx/certification-item02.jpg" alt=""/>
                                <p>房产证示例</p><?php endif; ?>
                        </div>
                        <div class="uploadImg">
                            <div class="defaultImg">
                                <input name="houseimg" onchange="previewImage(this,1)"  type="file"/>
                            </div>
                            <p>请上传房产证内页</p>
                        </div>
                    </div>
                    <div class="confirm">
                        <input class="submit-btn" type="submit" value="确定"/>
                    </div>
                </div>
            </form>

        </div>
        <!--车认证-->
        <div class="item item5">
            <form action="<?php echo U('WxRenzheng/car_renzheng',array('phone'=>$arr['phone'],'uid'=>$arr['uid']));?>" method="post" enctype="multipart/form-data">
                <div class="item-top">
                    <h3><i></i>资产认证 - 车</h3>
                    <span></span>
                </div>
                <div class="item-con">
                    <div class="item-con-edit1 clearfix">
                        <div class="showImg">
                            <?php if($list['carimg']): ?><img id="img2" src="<?php echo ($list['carimg']); ?>" alt=""/>
                                <p>行驶本</p>
                            <?php else: ?>
                                <img id="img2" src="/Public/imageswx/certification-item03.jpg" alt=""/>
                                <p>行驶本示例</p><?php endif; ?>
                        </div>
                        <div class="uploadImg">
                            <div class="defaultImg">
                                <input name="carimg" onchange="previewImage(this,2)" type="file"/>
                            </div>
                            <p>请上传行驶本</p>
                        </div>
                    </div>
                    <div class="confirm">
                        <input class="submit-btn" type="submit" value="确定"/>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>

<script type="text/javascript" src="/Public/jswx/jquery-1.10.2.min.js"></script>
<script type="text/javascript" src="/Public/jswx/amazeui.min.js"></script>
<script type="text/javascript">
    /*$(function(){
     var main = document.querySelector('#main');
     var winW = document.documentElement.clientWidth;
     var winH = document.documentElement.clientHeight;
     var desW = 750;
     var desH = 1208;
     if(winW/winH<desW/desH){
     main.style.webkitTransform = 'scale('+winH/desH+')';
     }else{
     main.style.webkitTransform = 'scale('+winW/desW+')';
     }
     });*/

    //图片预览功能
    function previewImage(file,imgNum)
    {
        var MAXWIDTH  = 93;
        var MAXHEIGHT = 75;
        if (file.files && file.files[0])
        {
            var img = document.getElementById('img'+imgNum+'');
            var reader = new FileReader();
            reader.onload = function(evt){img.src = evt.target.result;};
            reader.readAsDataURL(file.files[0]);
        }
    }
    $(function(){
        $(".submit-btn").click(function(){

        });
    });

    $(function(){
        $(".item").click(function(){
            var oItemCon = $(this).find(".item-con");
            oItemCon.show().parent().parent().siblings().find(".item-con").hide();
        });


    });
</script>
</body>
</html>