//添加cookie的方法
// function addCookie(name,value,expiresHours){ 
// var cookieString=name+"="+escape(value); 
// //判断是否设置过期时间 
// if(expiresHours>0){ 
// var date=new Date(); 
// date.setTime(date.getTime+expiresHours*3600*1000); 
// cookieString=cookieString+"; expires="+date.toGMTString(); 
// } 
// document.cookie=cookieString; 
// } 



window.onload=function(){
	// var cookrefsh=document.cookie.indexOf("cookrefsh");
	// // alert(cookrefsh);
	// if (cookrefsh==-1) {
 //      history.go(0);
 //      addCookie('cookrefsh','1',0);
	// }

	//前面html命名id千万不要有数字，此错误找了好久如yqsy1
	var yhlc=document.getElementById('yhlc');
	yhlc.onclick=function(){
		//alert(document.location.href);
		var d_url1=document.location.href;
		var d_url=d_url1.replace(/cllx=(\w+)*&/,"cllx=yhlc&");
		var d_url=d_url.replace(/sycp=(\w+)*&/,"sycp=no&");
		//防止分页显示错误
		var d_url=d_url.split("whh&");
		var d_url=d_url[0]+"whh&";
		window.location.href=d_url;
	};
	var yhlc=document.getElementById('xtcp');
	yhlc.onclick=function(){
		//alert(document.location.href);
		var d_url1=document.location.href;
		var d_url=d_url1.replace(/cllx=(\w+)*&/,"cllx=xtcp&");
		var d_url=d_url.replace(/sycp=(\w+)*&/,"sycp=no&");

		var d_url=d_url.split("whh&");
		var d_url=d_url[0]+"whh&";
		window.location.href=d_url;
	};
	var yhlc=document.getElementById('zgcp');
	yhlc.onclick=function(){
		//alert(document.location.href);
		var d_url1=document.location.href;
		var d_url=d_url1.replace(/cllx=(\w+)*&/,"cllx=zgcp&");
		var d_url=d_url.replace(/sycp=(\w+)*&/,"sycp=no&");

		var d_url=d_url.split("whh&");
		var d_url=d_url[0]+"whh&";
		window.location.href=d_url;
	};
	var yhlc=document.getElementById('gmcp');
	yhlc.onclick=function(){
		//alert(document.location.href);
		var d_url1=document.location.href;
		var d_url=d_url1.replace(/cllx=(\w+)*&/,"cllx=gmcp&");
		var d_url=d_url.replace(/sycp=(\w+)*&/,"sycp=no&");

		var d_url=d_url.split("whh&");
		var d_url=d_url[0]+"whh&";
		window.location.href=d_url;
	};
	var yhlc=document.getElementById('smcp');
	yhlc.onclick=function(){
		//alert(document.location.href);
		var d_url1=document.location.href;
		var d_url=d_url1.replace(/cllx=(\w+)*&/,"cllx=smcp&");
		var d_url=d_url.replace(/sycp=(\w+)*&/,"sycp=no&");

		var d_url=d_url.split("whh&");
		var d_url=d_url[0]+"whh&";
		window.location.href=d_url;
	};
	var yhlc=document.getElementById('qtcp');
	yhlc.onclick=function(){
		//alert(document.location.href);
		var d_url1=document.location.href;
		var d_url=d_url1.replace(/cllx=(\w+)*&/,"cllx=qtcp&");
		var d_url=d_url.replace(/sycp=(\w+)*&/,"sycp=no&");

		var d_url=d_url.split("whh&");
		var d_url=d_url[0]+"whh&";
		window.location.href=d_url;
	};
    var yqsya=document.getElementById('yqsya');
    yqsya.onclick=function(){
		var d_url1=document.location.href;
		var d_url=d_url1.replace(/yqsy=(\w+)*&/,"yqsy=1&");
		var d_url=d_url.replace(/sycp=(\w+)*&/,"sycp=no&");

		var d_url=d_url.split("whh&");
		var d_url=d_url[0]+"whh&";
		window.location.href=d_url;
	};
	var yqsya=document.getElementById('yqsyb');
    yqsya.onclick=function(){
		var d_url1=document.location.href;
		var d_url=d_url1.replace(/yqsy=(\w+)*&/,"yqsy=4&");
		var d_url=d_url.replace(/sycp=(\w+)*&/,"sycp=no&");

		var d_url=d_url.split("whh&");
		var d_url=d_url[0]+"whh&";
		window.location.href=d_url;
	};
	var yqsy=document.getElementById('yqsyc');
    yqsy.onclick=function(){
		var d_url1=document.location.href;
		var d_url=d_url1.replace(/yqsy=(\w+)*&/,"yqsy=8&");
		var d_url=d_url.replace(/sycp=(\w+)*&/,"sycp=no&");

		var d_url=d_url.split("whh&");
		var d_url=d_url[0]+"whh&";
		window.location.href=d_url;
	};
	var yqsy=document.getElementById('yqsyd');
    yqsy.onclick=function(){
		var d_url1=document.location.href;
		var d_url=d_url1.replace(/yqsy=(\w+)*&/,"yqsy=10&");
		var d_url=d_url.replace(/sycp=(\w+)*&/,"sycp=no&");

		var d_url=d_url.split("whh&");
		var d_url=d_url[0]+"whh&";
		window.location.href=d_url;
	};
	var yqsy=document.getElementById('yqsye');
    yqsy.onclick=function(){
		var d_url1=document.location.href;
		var d_url=d_url1.replace(/&yqsy=(\w+)*&/,"&yqsy=12&");
		var d_url=d_url.replace(/sycp=(\w+)*&/,"sycp=no&");

		var d_url=d_url.split("whh&");
		var d_url=d_url[0]+"whh&";
		window.location.href=d_url;
	};
	var yqsy=document.getElementById('yqsyqt');
    yqsy.onclick=function(){
		var d_url1=document.location.href;
		var d_url=d_url1.replace(/&yqsy=(\w+)*&/,"&yqsy=qt&");
		var d_url=d_url.replace(/sycp=(\w+)*&/,"sycp=no&");

		var d_url=d_url.split("whh&");
		var d_url=d_url[0]+"whh&";
		window.location.href=d_url;
	};


     var zja=document.getElementById('zja');
	 zja.onclick=function(){
		var d_url1=document.location.href;
		var d_url=d_url1.replace(/zj=(\w+)*&/,"zj=1w&");
		var d_url=d_url.replace(/sycp=(\w+)*&/,"sycp=no&");

		var d_url=d_url.split("whh&");
		var d_url=d_url[0]+"whh&";
		window.location.href=d_url;
	};
	var zjb=document.getElementById('zjb');
	 zjb.onclick=function(){
		var d_url1=document.location.href;
		var d_url=d_url1.replace(/zj=(\w+)*&/,"zj=10w&");
		var d_url=d_url.replace(/sycp=(\w+)*&/,"sycp=no&");

		var d_url=d_url.split("whh&");
		var d_url=d_url[0]+"whh&";
		window.location.href=d_url;
	};
	var zjb=document.getElementById('zjc');
	 zjb.onclick=function(){
		var d_url1=document.location.href;
		var d_url=d_url1.replace(/zj=(\w+)*&/,"zj=50w&");
		var d_url=d_url.replace(/sycp=(\w+)*&/,"sycp=no&");

		var d_url=d_url.split("whh&");
		var d_url=d_url[0]+"whh&";
		window.location.href=d_url;
	};
	var zjb=document.getElementById('zjd');
	 zjb.onclick=function(){
		var d_url1=document.location.href;
		var d_url=d_url1.replace(/zj=(\w+)*&/,"zj=100w&");
		var d_url=d_url.replace(/sycp=(\w+)*&/,"sycp=no&");

		var d_url=d_url.split("whh&");
		var d_url=d_url[0]+"whh&";
		window.location.href=d_url;
	};
	var zjb=document.getElementById('zje');
	 zjb.onclick=function(){
		var d_url1=document.location.href;
		var d_url=d_url1.replace(/zj=(\w+)*&/,"zj=500w&");
		var d_url=d_url.replace(/sycp=(\w+)*&/,"sycp=no&");

		var d_url=d_url.split("whh&");
		var d_url=d_url[0]+"whh&";
		window.location.href=d_url;
	};
	var zjb=document.getElementById('zjf');
	 zjb.onclick=function(){
		var d_url1=document.location.href;
		var d_url=d_url1.replace(/zj=(\w+)*&/,"zj=1000w&");
		var d_url=d_url.replace(/sycp=(\w+)*&/,"sycp=no&");

		var d_url=d_url.split("whh&");
		var d_url=d_url[0]+"whh&";
		window.location.href=d_url;
	};
	var zjb=document.getElementById('zjg');
	 zjb.onclick=function(){
		var d_url1=document.location.href;
		var d_url=d_url1.replace(/zj=(\w+)*&/,"zj=5000w&");
		var d_url=d_url.replace(/sycp=(\w+)*&/,"sycp=no&");

		var d_url=d_url.split("whh&");
		var d_url=d_url[0]+"whh&";
		window.location.href=d_url;
	};
	var zjb=document.getElementById('zjbx');
	 zjb.onclick=function(){
		var d_url1=document.location.href;
		var d_url=d_url1.replace(/zj=(\w+)*&/,"zj=bx&");
		var d_url=d_url.replace(/sycp=(\w+)*&/,"sycp=no&");

		var d_url=d_url.split("whh&");
		var d_url=d_url[0]+"whh&";
		window.location.href=d_url;
	};

	//所有产品
	
    var zjb=document.getElementById('sycp');
	 zjb.onclick=function(){
		var d_url1=document.location.href;
		var d_url=d_url1.replace(/sycp=(\w+)*&/,"sycp=yes&");
        var d_url2=d_url.replace(/cllx=(\w+)*&/,"cllx=sycp&");
        // alert (d_url2);
        // exit;
		var d_url=d_url2.split("whh&");
		var d_url=d_url[0]+"whh&";
		window.location.href=d_url;
	};

	//综合顺序
	  var zjb=document.getElementById('zhsx');
	 zjb.onclick=function(){
		var d_url1=document.location.href;
		var d_url=d_url1.replace(/zhsx=(\w+)*&gxsj=(\w)*&/,"zhsx=yes&gxsj=no&");

		var d_url=d_url.split("whh&");
		var d_url=d_url[0]+"whh&";
		window.location.href=d_url;
		//alert(document.readyState);
		//当页面加载状态 
		// if(document.readyState=='complete') {
		// }
		// alert();
	}

	//更新时间
	  var zjb=document.getElementById('gxsj');
	 zjb.onclick=function(){
		var d_url1=document.location.href;
		var d_url=d_url1.replace(/zhsx=(\w+)*&gxsj=(\w+)*&/,"zhsx=no&gxsj=yes&");

		var d_url=d_url.split("whh&");
		var d_url=d_url[0]+"whh&";
		window.location.href=d_url;
		// alert();
	}

}

//jquery程序
$(function(){
	 $('#zhsx').click(function(){
	
		// if(document.readyState=='complete') {
	 // 		$(this).addClass("cur").siblings().removeClass("cur");
	 // 	}
	 });
	 // if(document.readyState=='complete') {
	 // 		$(this).addClass("cur").siblings().removeClass("cur");
	 // 	};
	 
});