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
            <h3><span>完善注册信息</span></h3>
        </div>

        <div class="part1-con">
            <form action="">
                <div class="name-box mb30">
                    <span><i>*</i>真实姓名</span>
                    <input type="text" class="name"/>
                    <label></label>
                </div>
                <div class="cityName-box clearfix mb30">
                    <span><i>*</i>所在城市</span>
                    <div class="province-box common-box">
                        <div class="province-con common-con">
                            <input type="text" class="province"/>
                            <i></i>
                        </div>
                        <div class="province-list common-list">
                        </div>
                    </div>
                    <div class="city-box common-box">
                        <div class="city-con common-con">
                            <input type="text" class="city" />
                            <i></i>
                        </div>
                        <div class="city-list common-list">
                        </div>
                    </div>
                </div>
                <div class="organization-box mb30">
                    <span><i>*</i>所在机构</span>
                    <input type="text" class="organization"/>
                    <label></label>
                </div>
                <div class="btn">
                    <!--<button class="next-btn">下一步</button>-->
                    <a href="javascript:;" class="next-btn">下一步</a>
                </div>
            </form>
        </div>
    </div>
</div>
<script type="text/javascript" src="/Public/usercss/js/jquery-1.10.2.min.js"></script>
<script type="text/javascript">
    $(function(){
        var arr=[
            {
                name:"北京市",
                city:["东城区","西城区","崇文区","宣武区","朝阳区","丰台区","石景山区","海淀区","门头沟区","房山区","通州区","顺义区","昌平区","大兴区","怀柔区","平谷区","密云县","延庆县","延庆镇"]
            },
            {
                name:"天津市",
                city:["和平区","河东区","河西区","南开区","河北区","红桥区","塘沽区","汉沽区","大港区","东丽区","西青区","津南区","北辰区","武清区","宝坻区","蓟县","宁河县","芦台镇","静海县","静海镇"]
            },
            {
                name:"上海市",
                city:["黄浦区","卢湾区","徐汇区","长宁区","静安区","普陀区","闸北区","虹口区","杨浦区","闵行区","宝山区?","嘉定区","浦东新区","金山区","松江区","青浦区","南汇区","奉贤区","崇明县","城桥镇"]
            },
            {
                name:"重庆市",
                city:["渝中区","大渡口区","江北区","沙坪坝区","九龙坡区","南岸区","北碚区","万盛区","双桥区","渝北区","巴南区","万州区","涪陵区","黔江区","长寿区","合川市","永川区市","江津市","南川市","綦江县","潼南县","铜梁县","大足县","荣昌县","璧山县","垫江县","武隆县","丰都县","城口县","梁平县","开县","巫溪县","巫山县","奉节县","云阳县","忠县","石柱土家族自治县","彭水苗族土家族自治县","酉阳土家族苗族自治县","秀山土家族苗族自治县"]
            },
            {
                name:"河北省",
                city:["石家庄市","张家口市","承德市","秦皇岛市","唐山市","廊坊市","保定市","衡水市","沧州市","邢台市","邯郸市"]
            },
            {
                name:"山西省",
                city:["太原市","朔州市","大同市","阳泉市","长治市","晋城市","忻州市","晋中市","临汾市","吕梁市","运城市"]
            },
            {
                name:"内蒙古",
                city:["呼和浩特市","包头市","乌海市","赤峰市","通辽市","呼伦贝尔市","鄂尔多斯市","乌兰察布市","巴彦淖尔市","兴安盟","锡林郭勒盟","阿拉善盟"]
            },
            {
                name:"辽宁省",
                city:["沈阳市","朝阳市","阜新市","铁岭市","抚顺市","本溪市","辽阳市","鞍山市","丹东市","大连市","营口市","盘锦市","锦州市","葫芦岛市"]
            },
            {
                name:"吉林省",
                city:["长春市","白城市","松原市","吉林市","四平市","辽源市","通化市","白山市","延边州"]
            },
            {
                name:"黑龙江省",
                city:["哈尔滨市","齐齐哈尔市","七台河市","黑河市","大庆市","鹤岗市","伊春市","佳木斯市","双鸭山市","鸡西市","牡丹江市","绥化市","大兴安岭地区"]
            },
            {
                name:"江苏省",
                city:["南京市","徐州市","连云港市","宿迁市","淮安市","盐城市","扬州市","泰州市","南通市","镇江市","常州市","无锡市","苏州市"]
            },
            {
                name:"浙江省",
                city:["杭州市","湖州市","嘉兴市","舟山市","宁波市","绍兴市","衢州市","金华市","台州市","温州市","丽水市"]
            },
            {
                name:"安徽省",
                city:["合肥市","宿州市","淮北市","亳州市","阜阳市","蚌埠市","淮南市","滁州市","马鞍山市","芜湖市","铜陵市","安庆市","黄山市","六安市","巢湖市","池州市","宣城市"]
            },
            {
                name:"福建省",
                city:["福州市","南平市","莆田市","三明市","泉州市","厦门市","漳州市","龙岩市","宁德市" ]
            },
            {
                name:"江西省",
                city:["南昌市","九江市","景德镇市","鹰潭市","新余市","萍乡市","赣州市","上饶市","抚州市","宜春市","吉安市"]
            },
            {
                name:"山东省",
                city:["济南市","青岛市","聊城市","德州市","东营市","潍坊市","烟台市","威海市","日照市","临沂市","枣庄市","济宁市","泰安市","莱芜市","滨州市","菏泽市"]
            },
            {
                name:"河南省",
                city:["郑州市","开封市","三门峡市","洛阳市","焦作市","新乡市","鹤壁市","安阳市","濮阳市","商丘市","许昌市","漯河市","平顶山市","南阳市","信阳市","周口市","驻马店市","济源市"]
            },
            {
                name:"湖北省",
                city:["武汉市","十堰市","襄樊市","荆门市","孝感市","黄冈市","鄂州市","黄石市","咸宁市","荆州市","宜昌市","随州市","仙桃市","天门市","潜江市","恩施市","利川市","襄阳市","恩施土家族苗族自治州"]
            },
            {
                name:"湖南省",
                city:["长沙市","张家界市","常德市","益阳市","岳阳市","株洲市","湘潭市","衡阳市","郴州市","永州市","邵阳市","怀化市","娄底市",
                    "湘西州"]
            },
            {
                name:"广东省",
                city:["广州市","深圳市","清远市","河源市","梅州市","潮州市","汕头市","揭阳市","汕尾市","惠州市","东莞市","珠海市","中山市","江门市","佛山市","肇庆市","云浮市","阳江市","湛江市"]
            },
            {
                name:"广西",
                city:["南宁市","桂林市","柳州市","贵港市","玉林市","钦州市","北海市","防城港市","崇左市","百色市","河池市","来宾市","贺州市"]
            },
            {
                name:"海南省",
                city:["海口市","三亚市","文昌市","琼海市","万宁市","五指山市","东方市","儋州市"]
            },
            {
                name:"四川省",
                city:["成都市","广元市","绵阳市","德阳市","南充市","广安市","遂宁市","内江市","乐山市","自贡市","泸州市","宜宾市","攀枝花市",
                    "巴中市","达州市","资阳市","眉山市","雅安市","阿坝州","甘孜州","凉山州"]
            },
            {
                name:"贵州省",
                city:["贵阳市","六盘水市","遵义市","安顺市","毕节地区", "铜仁地区","黔东南州","黔南州","黔西南州"]
            },
            {
                name:"云南省",
                city:["昆明市","曲靖市","玉溪市","保山市","昭通市","丽江市","思茅市","临沧市","德宏州","怒江州","迪庆州","大理州","楚雄州","红河州","文山州","西双版纳州"]
            },
            {
                name:"西藏",
                city:["拉萨市","那曲地区","昌都地区","林芝地区","山南地区","日喀则地区","阿里地区"]
            },
            {
                name:"陕西省",
                city:["西安市","延安市","铜川市","渭南市","咸阳市","宝鸡市","汉中市","榆林市","安康市","商洛市"]
            },
            {
                name:"甘肃省",
                city:["兰州市","嘉峪关市","白银市","天水市","武威市","酒泉市","张掖市","庆阳市","平凉市","定西市","陇南市","临夏州","甘南州",]
            },
            {
                name:"青海省",
                city:["西宁市","海东地区","海北州","海南州","黄南州","果洛州","玉树州","海西州"]
            },
            {
                name:"宁夏",
                city:["银川市","石嘴山市","吴忠市","固原市","中卫市"]
            },
            {
                name:"新疆",
                city:["乌鲁木齐市","克拉玛依市","自治区直辖县级行政单位","喀什地区","阿克苏地区","和田地区","吐鲁番地区","哈密地区","克孜勒苏柯州","博尔塔拉州","昌吉州","巴音郭楞州","伊犁州","塔城地区","阿勒泰地区"]
            },
            {
                name:"香港",
                city:["中西区","东区","九龙城区","观塘区","南区","深水埗区","湾仔区","黄大仙区","油尖旺区","离岛区","葵青区","北区","西贡区","沙田区","屯门区","大埔区","荃湾区","元朗区"]
            },
            {
                name:"澳门",
                city:["澳门特别行政区"]
            },
            {
                name:"台湾省",
                city:["台北","高雄","台中","花莲","基隆","嘉义","金门","连江","苗栗","南投","澎湖","屏东","台东","台南","桃园","新竹","宜兰","云林","彰化"]
            }
        ];
        var str = "",str1="",val = "",val1 = "";
        $(".province-con").click(function(){
            $(".city-con input").val("");
            for(var i= 0,len = arr.length;i<len;i++){
                var val = arr[i].name;
                str += "<a href='javascript:;' data-value='"+val+"'>"+val+"</a>";
            }
            $(".province-list").append(str).css("display","block");
            $(".province-list a").click(function(){
                val = $(this).attr("data-value");
                $(this).parent().css("display","none").prev().find("input").val(val);

            });
            return false;
        });
        $(".city-con").click(function(){
            for(var i= 0,len = arr.length;i<len;i++ ){
                if(arr[i].name === $(".province-con input").val()){
                    $.each(arr[i].city,function(index,item){
                        str1 += "<a href='javascript:;' data-value='"+item+"'>"+item+"</a>";
                    });
                    $(".city-list").append(str1).css("display","block");
                    $(".city-list a").click(function(){
                        val1 = $(this).attr("data-value");
                        str1 = "";
                        $(this).parent().html(str1).css("display","none").prev().find("input").val(val1);
                    })
                }
            }
            return false;
        });
        $("body").click(function(){
            $(".common-list").css("display","none");
        });
    });

    $(function(){
        $(".name").blur(function(){
            var name = $(this).val();
            var message = "";
            var myreg1 = /^[\u4e00-\u9fa5]{2,6}$/;
            if (name == '') {
                message = "姓名不能为空！";
            } else if (!myreg1.test(name)) {
                message = "请输入您的真实姓名！";
            }
            $(this).next().text(message);
        });
        $(".organization").blur(function(){
            var val = $(this).val();
            var reg = /^[\u4e00-\u9fa5]{2,20}$/;
            var message = "";
            if (val == '') {
                message = "所在机构不能为空！";
            } else if (!reg.test(val)) {
                message = "请确认您输入的所在机构是否正确！";
            }
            $(this).next().text(message);
        });
        $(".next-btn").click(function(){
            var val1 = $(".city-box input").val(),val2 = $(".province-box input").val(),val3 = $(".name").val(),val4 = $(".organization").val();
            if(val1=="" || val2==""||val3==""||val4 ==""){
                alert("请将信息填写完整！");
                return;
            }else{
                $(this).attr("href","completeInfo1.html");
            }
        })
    })
</script>
</body>
</html>