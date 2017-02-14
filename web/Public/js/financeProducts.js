$(function(){
     $('#zhsx').click(function(){
        delCookie('pro_gxsj');
        // window.location.reload();
        window.location ="financeproducts.html";
     });
     $('#gxsj').click(function(){
        addCookie("pro_gxsj","gxsj");
        // window.location.reload();
        window.location ="financeproducts.html";
     });

     $('.cplx dd span').click(function(){
       var cplx=$(this).text();

       //$(this).addClass("cur");

       var yqsy=$('.yqsy .cur').text();
       var zje=$('.zje .cur').text();
       window.location ="financeproducts.html?cplx="+cplx+"&yqsy="+yqsy+"&zje="+zje;
     });

    $('.yqsy dd span').click(function(){
       var yqsy=$(this).text();
       var cplx=$('.cplx .cur').text();
       var zje=$('.zje .cur').text();
       window.location ="financeproducts.html?cplx="+cplx+"&yqsy="+yqsy+"&zje="+zje;
     });

    $('.zje dd span').click(function(){
       var zje=$(this).text();
       var cplx=$('.cplx .cur').text();
       var yqsy=$('.yqsy .cur').text();
       window.location ="financeproducts.html?cplx="+cplx+"&yqsy="+yqsy+"&zje="+zje;
     });
    /*
     $('#yh').click(function(){
        addCookie("pro_type","银行");
        window.location ="financeproducts.html";

        // var cpll=$(this).text();
        // alert (cpll);
        // $('#protype').attr('value',cpll);
        // document.getElementById("myform").submit();
     });
    $('#zgxt').click(function(){
        addCookie("pro_type","资管信托");
        window.location ="financeproducts.html";

        // var cpll=$(this).text();
        // $('#protype').attr('value',cpll);
        // document.getElementById("myform").submit();
     });
    $('#jjl').click(function(){
        addCookie("pro_type","基金类");
        window.location ="financeproducts.html";

        // var cpll=$(this).text();
        // $('#protype').attr('value',cpll);
        // document.getElementById("myform").submit();
     });
    $('#lltz').click(function(){
        // var cpll=$(this).text();
        // $('#protype').attr('value',cpll);
        // document.getElementById("myform").submit();
     });
    $('#cpll').click(function(){
        delCookie('pro_type');
        window.location ="financeproducts.html";
     });
     */

 });