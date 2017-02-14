<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
<head lang="en">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=Edge">
    <title>微合伙文化传媒有限公司_微合伙科技有限公司_金融社交圈_金融趴官网_微合伙</title>
    <link rel="stylesheet" href="/Public/usercss/css/common.css"/>
    <link rel="stylesheet" href="/Public/usercss/css/completeInfo.css"/>
</head>
<body>
<div class="header">
    <div class="container">
        <span>
            <a href="index.html">
                <img src="/Public/usercss/images/logo.png" alt=""/>
            </a>
        </span>
        <h3>完善信息</h3>
    </div>
</div>

<div class="part1">
    <div class="container">
        <div class="part1-top">
            <h3><span>资质认证(上传名片)</span></h3>
        </div>

        <div class="part2-con">
            <form action="<?php echo U('Daikuan/completeInfo_three_add');?>" enctype="multipart/form-data" method="post" >
                <input type="hidden" name="phone" value="<?php echo ($_GET['phone']); ?>">
                <div class="pic-box2">
                    <img id="img1" src="" alt=""/>
                </div>
                <div class="upload">
                    <span>本地上传</span>
                    <input type="file" name="photo" value="本地上传" id="file1" />
                </div>
                <div>
                    <p class="tip1"><i>*</i>仅提供认证使用，平台不会暴露您的个人信息</p>
                    <p class="tip2">格式为JPG,JPEG,PNG,小于5M</p>
                </div>
                <div class="btn">
                    <input type="button" id="tiaozhuang" class="next-btn" value="下一步">
                    <!--<button class="next-btn">下一步</button>-->
                    <!--<a href="javascript:;" class="next-btn">下一步</a>-->
                </div>
            </form>
        </div>
    </div>
</div>
<script type="text/javascript" src="/Public/usercss/js/jquery-1.10.2.min.js"></script>
<script type="text/javascript">
    $(function () {
        $("#file1").uploadPreview({ Img: "img1", Width: 120, Height: 120 });
    });
    jQuery.fn.extend({
        uploadPreview: function (opts) {
            var _self = this,
                    _this = $(this);
            opts = jQuery.extend({
                Img: "img1",
                Width: 100,
                Height: 100,
                ImgType: ["gif", "jpeg", "jpg", "bmp", "png"],
                Callback: function () {}
            }, opts || {});
            _self.getObjectURL = function (file) {
                var url = null;
                if (window.createObjectURL != undefined) {
                    url = window.createObjectURL(file)
                } else if (window.URL != undefined) {
                    url = window.URL.createObjectURL(file)
                } else if (window.webkitURL != undefined) {
                    url = window.webkitURL.createObjectURL(file)
                }
                return url
            };
            _this.change(function () {
                if (this.value) {
                    if (!RegExp("\.(" + opts.ImgType.join("|") + ")$", "i").test(this.value.toLowerCase())) {
                        alert("选择文件错误,图片类型必须是" + opts.ImgType.join("，") + "中的一种");
                        this.value = "";
                        return false
                    }
                    if ($.support) {
                        try {
                            $("#" + opts.Img).attr('src', _self.getObjectURL(this.files[0]))
                        } catch (e) {
                            var src = "";
                            var obj = $("#" + opts.Img);
                            var div = obj.parent("div")[0];
                            _self.select();
                            if (top != self) {
                                window.parent.document.body.focus()
                            } else {
                                _self.blur()
                            }
                            src = document.selection.createRange().text;
                            document.selection.empty();
                            obj.hide();
                            obj.parent("div").css({
                                'filter': 'progid:DXImageTransform.Microsoft.AlphaImageLoader(sizingMethod=scale)',
                                'width': opts.Width + 'px',
                                'height': opts.Height + 'px'
                            });
                            div.filters.item("DXImageTransform.Microsoft.AlphaImageLoader").src = src
                        }
                    } else {
                        $("#" + opts.Img).attr('src', _self.getObjectURL(this.files[0]))
                    }
                    opts.Callback()
                }
            })
        }
    });

    $(".next-btn").click(function(){
        var val = $("#img1").attr("src");
        if(val!==""){
            $("#tiaozhuang").attr('type',"submit");
            //$(this).attr("href","completeInfo_for.html");
        }else{
            alert("请上传您的个人名片！");
        }
    })
</script>
</body>
</html>