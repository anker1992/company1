<?php if (!defined('THINK_PATH')) exit();?><!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>编辑择偶信息</title>
    <meta name="viewport" content="width=device-width,minimum-scale=1.0,maximum-scale=1.0,user-scalable=no"/>
    <link rel="stylesheet" href="/Public/csswx/amazeui.min.css"/>
    <link rel="stylesheet" href="/Public/csswx/userCenter.css"/>
</head>
<body class="bg-white">
<div class="main-content">

    <div class="gray-title-bar">
        <a href="<?php echo U('WxUser/edit_index',array('phone'=>$phone,'uid'=>$uid));?>">
            <b class="left"><i class="left-arrow1"></i><i class="left-arrow2"></i></b>
            <span>择偶要求</span>
        </a>
    </div>
    <form action="<?php echo U('WxUser/check_zeou',array('phone'=>$phone,'uid'=>$uid));?>" method="post">
        <div class="user-items-content">
            <!--年龄-->
            <!--<div class="user-center-items1">-->
                <!--<p class="edit-items-titles">年龄</p>-->
                <!--<select class="edit-items-inputs" name="age">-->
                    <!--<option value="{}">{}</option>-->
                    <!--<option value="不限">不限</option>-->
                    <!--<option value="18岁">18岁</option>-->
                    <!--<option value="19岁">19岁</option>-->
                    <!--<option value="20岁">20岁</option>-->
                    <!--<option value="21岁">21岁</option>-->
                    <!--<option value="22岁">22岁</option>-->
                    <!--<option value="23岁">23岁</option>-->
                    <!--<option value="24岁">24岁</option>-->
                    <!--<option value="25岁">25岁</option>-->
                    <!--<option value="26岁">26岁</option>-->
                    <!--<option value="27岁">27岁</option>-->
                    <!--<option value="28岁">28岁</option>-->
                    <!--<option value="29岁">29岁</option>-->
                    <!--<option value="30岁">30岁</option>-->
                    <!--<option value="31岁">31岁</option>-->
                    <!--<option value="32岁">32岁</option>-->
                    <!--<option value="33岁">33岁</option>-->
                    <!--<option value="34岁">34岁</option>-->
                    <!--<option value="35岁">35岁</option>-->
                    <!--<option value="36岁">36岁</option>-->
                    <!--<option value="37岁">37岁</option>-->
                    <!--<option value="38岁">38岁</option>-->
                    <!--<option value="39岁">39岁</option>-->
                    <!--<option value="40岁">40岁</option>-->
                    <!--<option value="41岁">41岁</option>-->
                    <!--<option value="42岁">42岁</option>-->
                    <!--<option value="43岁">43岁</option>-->
                    <!--<option value="44岁">44岁</option>-->
                    <!--<option value="45岁">45岁</option>-->
                    <!--<option value="46岁">46岁</option>-->
                    <!--<option value="47岁">47岁</option>-->
                    <!--<option value="48岁">48岁</option>-->
                    <!--<option value="49岁">49岁</option>-->
                    <!--<option value="50岁">50岁</option>-->
                <!--</select>-->
            <!--</div>-->
            <!--身高-->
            <div class="user-center-items1">
                <p class="edit-items-titles">身高</p>
                <select class="edit-items-inputs" name="zheight">
                    <?php if(!empty($list['zheight'])): ?><option value="<?php echo ($list["zheight"]); ?>"><?php echo ($list["zheight"]); ?></option><?php endif; ?>
                    <option value="">不限</option>
                    <option value="150以下">150以下</option>
                    <option value="150-155">150-155</option>
                    <option value="155-160">155-160</option>
                    <option value="160-165">160-165</option>
                    <option value="165-170">165-170</option>
                    <option value="170-175">170-175</option>
                    <option value="175-180">175-180</option>
                    <option value="180-185">180-185</option>
                    <option value="185-190">185-190</option>
                    <option value="190以上">190以上</option>
                </select>
                <!--<select class="edit-items-inputs1"  name="height1">-->
                    <!--<option value="150以下">150以下</option>-->
                    <!--<option value="150-155">150-155</option>-->
                    <!--<option value="155-160">155-160</option>-->
                    <!--<option value="160-165">160-165</option>-->
                    <!--<option value="165-170">165-170</option>-->
                    <!--<option value="170-175">170-175</option>-->
                    <!--<option value="175-180">175-180</option>-->
                    <!--<option value="180-185">180-185</option>-->
                    <!--<option value="185-190">185-190</option>-->
                    <!--<option value="190以上">190以上</option>-->
                <!--</select>-->
                <!--<span>到</span>-->
                <!--<select class="edit-items-inputs2"  name="height2">-->
                    <!--<option value="150以下">150以下</option>-->
                    <!--<option value="150-155">150-155</option>-->
                    <!--<option value="155-160">155-160</option>-->
                    <!--<option value="160-165">160-165</option>-->
                    <!--<option value="165-170">165-170</option>-->
                    <!--<option value="170-175">170-175</option>-->
                    <!--<option value="175-180">175-180</option>-->
                    <!--<option value="180-185">180-185</option>-->
                    <!--<option value="185-190">185-190</option>-->
                    <!--<option value="190以上">190以上</option>-->
                <!--</select>-->
            </div>
            <!--所在城市-->
            <div class="user-center-items1">
                <p class="edit-items-titles">所在城市</p>
                <select class="edit-items-inputs" name="zworkarea">
                    <?php if(!empty($list['zworkarea'])): ?><option value="<?php echo ($list["zworkarea"]); ?>"><?php echo ($list["zworkarea"]); ?></option><?php endif; ?>
                    <option value="">不限</option>
                    <option value="北京">北京</option>
                    <option value="上海">上海</option>
                    <option value="广州">广州</option>
                    <option value="深圳">深圳</option>

                    <option value="重庆">重庆</option>
                    <option value="天津">天津</option>
                    <option value="广东">广东</option>
                    <option value="江苏">江苏</option>

                    <option value="浙江">浙江</option>
                    <option value="四川">四川</option>
                    <option value="福建">福建</option>
                    <option value="山东">山东</option>

                    <option value="湖北">湖北</option>
                    <option value="河北">河北</option>
                    <option value="山西">山西</option>
                    <option value="内蒙古">内蒙古</option>

                    <option value="辽宁">辽宁</option>
                    <option value="吉林">吉林</option>
                    <option value="黑龙江">黑龙江</option>
                    <option value="安徽">安徽</option>

                    <option value="江西">江西</option>
                    <option value="河南">河南</option>
                    <option value="湖南">湖南</option>
                    <option value="广西">广西</option>

                    <option value="海南">海南</option>
                    <option value="贵州">贵州</option>
                    <option value="云南">云南</option>
                    <option value="西藏">西藏</option>

                    <option value="陕西">陕西</option>
                    <option value="甘肃">甘肃</option>
                    <option value="青海">青海</option>
                    <option value="宁夏">宁夏</option>

                    <option value="新疆">新疆</option>
                </select>
            </div>
            <!--婚姻状况-->
            <div class="user-center-items1">
                <p class="edit-items-titles">婚姻状况</p>
                <select class="edit-items-inputs" name="zmaritalstatus" id="edit-hunyin">
                    <?php if(!empty($list['zmaritalstatus'])): ?><option value="<?php echo ($list["zmaritalstatus"]); ?>"><?php echo ($list["zmaritalstatus"]); ?></option><?php endif; ?>
                    <option value="">不限</option>
                    <option value="未婚">未婚</option>
                    <option value="离异">离异</option>
                    <option value="丧偶">丧偶</option>
                </select>
            </div>
            <!--学历-->
            <div class="user-center-items1">
                <p class="edit-items-titles">学历</p>
                <select class="edit-items-inputs" name="zeducation" id="edit-xueli">
                    <?php if(!empty($list['zeducation'])): ?><option value="<?php echo ($list["zeducation"]); ?>"><?php echo ($list["zeducation"]); ?></option><?php endif; ?>
                    <option value="">不限</option>
                    <option value="大专">大专</option>
                    <option value="本科">本科</option>
                    <option value="研究生">研究生</option>
                    <option value="博士生">博士生</option>
                    <option value="其他">其他</option>
                </select>
            </div>
            <!--月收入-->
            <div class="user-center-items1">
                <p class="edit-items-titles">月收入</p>
                <select class="edit-items-inputs" name="zsalary" id="edit-yueshouru">
                    <?php if(!empty($list['zsalary'])): ?><option value="<?php echo ($list["zsalary"]); ?>"><?php echo ($list["zsalary"]); ?></option><?php endif; ?>
                    <option value="">不限</option>
                    <option value="2000元以下">2000元以下</option>
                    <option value="2000-5000元">2000-5000元</option>
                    <option value="5000-10000元">5000-10000元</option>
                    <option value="10000-15000元">10000-15000元</option>
                    <option value="15000-20000元">15000-20000元</option>
                    <option value="20000-25000元">20000-25000元</option>
                    <option value="25000元以上">25000元以上</option>
                </select>
            </div>
            <!--购房-->
            <div class="user-center-items1">
                <p class="edit-items-titles">是否有房</p>
                <select class="edit-items-inputs" name="zifbuyhouser" id="edit-house">
                    <?php if(!empty($list['zifbuyhouser'])): ?><option value="<?php echo ($list["zifbuyhouser"]); ?>"><?php echo ($list["zifbuyhouser"]); ?></option><?php endif; ?>
                    <option value="">不限</option>
                    <option value="有房(有房贷)">有房(有房贷)</option>
                    <option value="有房(无房贷)">有房(无房贷)</option>
                    <option value="无房">无房</option>
                </select>
            </div>

        </div>
        <div style="height: 100px;;"></div>
        <input class="edit-complete-button" type="submit" value="确定"/>
    </form>
</div>

<script type="text/javascript" src="/Public/jswx/jquery-1.10.2.min.js"></script>
<script type="text/javascript" src="/Public/jswx/amazeui.min.js"></script>

<script>
    //图片预览功能
    function previewImage(file, imgNum) {
        var MAXWIDTH = 80;
        var MAXHEIGHT = 80;
        if (file.files && file.files[0]) {
            var img = document.getElementById('photo-image' + imgNum + '');
            var reader = new FileReader();
            reader.onload = function (evt) {
                img.src = evt.target.result;
            };
            reader.readAsDataURL(file.files[0]);
        }
    }

</script>
</body>
</html>