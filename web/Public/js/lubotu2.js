/**
 * Created by Administrator on 2016/7/26.
 */
;(function($){
    $.fn.banner=function(options){
        return this.each(function(){
            var _banner=$('.banner');//获取轮播图盒子
            var _box=$('.banner-box');//获取图片盒子
            var _this=$(this); //
            var luboHei=_box.height();
            var Over='mouseover';
            var Out='mouseout';
            var Click='click';
            var Li="li";
            var _cirBox='.banner-list';
            var cirOn='cur';
            var _cirOn='.cur';
            var cirlen=_box.children(Li).length; //圆点的数量  图片的数量
            var luboTime=2000; //轮播时间
            var switchTime=400;//图片切换时间
            cir();
            Btn();
            //根据图片的数量来生成圆点
            function cir(){
                _banner.append('<ol class="banner-list"></ol>');
                var list_box=jQuery('.banner-list');
                for(var i=0; i<cirlen;i++){
                    list_box.append('<li value="'+i+'"></li>');
                }
                var cir_dss=list_box.width();
                list_box.css({
                    left:'50%',
                    marginLeft:-cir_dss/2,
                    bottom:'10%'

                });
                list_box.children(Li).eq(0).addClass(cirOn);
            }
            //生成左右按钮
            function Btn(){
                _banner.append('<div class="banner-btn"></div>');
                var _btn=jQuery('.banner-btn');
                _btn.append('<div class="banner-btn-left"><</div><div class="banner-btn-right">></div>');
                var leftBtn=jQuery('.banner-btn-left');
                var rightBtn=jQuery('.banner-btn-right');
                //点击左面按钮,让当前图片消失，让上一张图片现实
                leftBtn.bind(Click,function(){
                    var cir_box=jQuery(_cirBox);
                    var onLen=jQuery(_cirOn).val();
                    _box.children(Li).eq(onLen).stop(false,false).removeClass("on");
                    if(onLen==0){
                        onLen=cirlen;
                    }
                    _box.children(Li).eq(onLen-1).stop(false,false).addClass("on");
                    cir_box.children(Li).eq(onLen-1).addClass(cirOn).siblings().removeClass(cirOn);
                })
                //点击右面按钮
                rightBtn.bind(Click,function(){
                    var cir_box=jQuery(_cirBox);
                    var onLen=jQuery(_cirOn).val();
                    _box.children(Li).eq(onLen).stop(false,false).removeClass("on");
                    if(onLen==cirlen-1){
                        onLen=-1;
                    }
                    _box.children(Li).eq(onLen+1).stop(false,false).addClass("on");
                    cir_box.children(Li).eq(onLen+1).addClass(cirOn).siblings().removeClass(cirOn);
                })
            }
            //定时器
            timer=setInterval(clock,luboTime);
            function clock(){
                var cir_box=jQuery(_cirBox);
                var onLen=jQuery(_cirOn).val();
                _box.children(Li).eq(onLen).stop(false,false).removeClass("on");
                if(onLen==cirlen-1){
                    onLen=-1;
                }
                _box.children(Li).eq(onLen+1).stop(false,false).addClass("on");
                cir_box.children(Li).eq(onLen+1).addClass(cirOn).siblings().removeClass(cirOn);
            }

            // 鼠标在图片上 关闭定时器
            _banner.bind(Over,function(){
                _box.children(Li).find("img").stop(false,false).animate({
                    width:700,
                    height:450
                },switchTime);
                clearTimeout(timer);
            });
            _banner.bind(Out,function(){
                _box.children(Li).find("img").stop(false,false).animate({
                    width:658,
                    height:420
                },switchTime);
                timer=setInterval(clock,luboTime);
            });
            //鼠标划过圆点 切换图片
            jQuery(_cirBox).children(Li).bind(Over,function(){
                var inde = jQuery(this).index();
                jQuery(this).addClass(cirOn).siblings().removeClass(cirOn);
                _box.children(Li).stop(false,false).removeClass("on");
                _box.children(Li).eq(inde).stop(false,false).addClass("on");

            });
        });
    }
})(jQuery);