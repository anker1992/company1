$(function(){
 

	$(".city-list a").click(function(){
		// alert($(this).attr("data-value"));
		var a=($(this).attr("data-value"));
		$("#city").attr("value",a);
	     
	  var city=$("#city").attr("value");
		var searchtext2=$("#searchtext2").attr("value");
		var industry=$("#industry").attr("value");
		var salary=$("#salary").attr("value");
		var scale=$("#scale").attr("value");
		var property=$("#property").attr("value");
		var addtime=$("#addtime").attr("value");

        $("#paging-list2").show();

        $('#pageul li').each(function(index){
        if ($(this).text()==1) {
        $(this).addClass('cur').siblings().removeClass('cur');
        }
       });

		$.ajax({
                        type:'POST',
                        url:'list_position_ajax.php',
                        dataType:'html',
                        data:{
                        	page:1,
                        	searchtext2:searchtext2,
                        	city:city,
                        	industry:industry,
                        	salary:salary,
                        	scale:scale,
                        	property:property,
                        	addtime:addtime                        	
                        },
                        success:function(a,status,xhr){
                          var hidepagenun=$("#hidepagenun").attr("value");
                          var hidepage=$("#hidepage").attr("value");
                          
                          // alert(hidepage);
                        	$('#box').html(a); 
                            // $("#paging-list2").show();
                            // $("#paging-list1").hide();
                        },
                        error:function(){
                        },
                    });
        document.getElementById("myform").submit();
	});

	$(".industry-list a").click(function(){
		// alert($(this).attr("data-value"));
		var a=$(this).attr("data-value");
		$("#industry").attr("value",a);

		var city=$("#city").attr("value");
		var searchtext2=$("#searchtext2").attr("value");
		var industry=$("#industry").attr("value");
		var salary=$("#salary").attr("value");
		var scale=$("#scale").attr("value");
		var property=$("#property").attr("value");
		var addtime=$("#addtime").attr("value");

        $('#pageul li').each(function(index){
        if ($(this).text()==1) {
        $(this).addClass('cur').siblings().removeClass('cur');
        }
       });
		$.ajax({
                        type:'POST',
                        url:'list_position_ajax.php',
                        dataType:'html',
                        data:{
                        	page:1,
                        	searchtext2:searchtext2,
                        	city:city,
                        	industry:industry,
                        	salary:salary,
                        	scale:scale,
                        	property:property,
                        	addtime:addtime                        	
                        },
                        success:function(a,status,xhr){
                        	// alert(a);
                          var hidepagenun=$("#hidepagenun").attr("value");
                          var hidepage=$("#hidepage").attr("value"); 
                        	$('#box').html(a);
                            // $("#paging-list2").show();
                            // $("#paging-list1").hide();
                             
                        },
                        error:function(){
                        },
                    });
        document.getElementById("myform").submit();
	});
    $(".salary-list a").click(function(){
		// alert($(this).attr("data-value"));
		var a=$(this).attr("data-value");
		$("#salary").attr("value",a);

		var city=$("#city").attr("value");
		var searchtext2=$("#searchtext2").attr("value");
		var industry=$("#industry").attr("value");
		var salary=$("#salary").attr("value");
		var scale=$("#scale").attr("value");
		var property=$("#property").attr("value");
		var addtime=$("#addtime").attr("value");

        $('#pageul li').each(function(index){
        if ($(this).text()==1) {
        $(this).addClass('cur').siblings().removeClass('cur');
        }
       });
		$.ajax({
                        type:'POST',
                        url:'list_position_ajax.php',
                        dataType:'html',
                        data:{
                        	page:1,
                        	searchtext2:searchtext2,
                        	city:city,
                        	industry:industry,
                        	salary:salary,
                        	scale:scale,
                        	property:property,
                        	addtime:addtime                        	
                        },
                        success:function(a,status,xhr){
                        	// alert(a);
                          var hidepagenun=$("#hidepagenun").attr("value");
                          var hidepage=$("#hidepage").attr("value"); 
                        	$('#box').html(a);
                            // $("#paging-list2").show();
                            // $("#paging-list1").hide();
                             
                        },
                        error:function(){
                        },
                    });
        document.getElementById("myform").submit();
	});
	$(".addtime-list a").click(function(){
		var a=$(this).attr("data-value");
		$("#addtime").attr("value",a);

		var city=$("#city").attr("value");
		var searchtext2=$("#searchtext2").attr("value");
		var industry=$("#industry").attr("value");
		var salary=$("#salary").attr("value");
		var scale=$("#scale").attr("value");
		var property=$("#property").attr("value");
		var addtime=$("#addtime").attr("value");

        $('#pageul li').each(function(index){
        if ($(this).text()==1) {
        $(this).addClass('cur').siblings().removeClass('cur');
        }
       });
		$.ajax({
                        type:'POST',
                        url:'list_position_ajax.php',
                        dataType:'html',
                        data:{
                        	page:1,
                        	searchtext2:searchtext2,
                        	city:city,
                        	industry:industry,
                        	salary:salary,
                        	scale:scale,
                        	property:property,
                        	addtime:addtime                        	
                        },
                        success:function(a,status,xhr){
                        	// alert(a);
                          var hidepagenun=$("#hidepagenun").attr("value");
                          var hidepage=$("#hidepage").attr("value"); 
                        	$('#box').html(a);
                            // $("#paging-list2").show();
                            // $("#paging-list1").hide();
                             
                        },
                        error:function(){
                        },
                    });
        document.getElementById("myform").submit();
	});
	$(".scale-list a").click(function(){
		var a=$(this).attr("data-value");
		$("#scale").attr("value",a);

		var city=$("#city").attr("value");
		var searchtext2=$("#searchtext2").attr("value");
		var industry=$("#industry").attr("value");
		var salary=$("#salary").attr("value");
		var scale=$("#scale").attr("value");
		var property=$("#property").attr("value");
		var addtime=$("#addtime").attr("value");

        $('#pageul li').each(function(index){
        if ($(this).text()==1) {
        $(this).addClass('cur').siblings().removeClass('cur');
        }
       });
		$.ajax({
                        type:'POST',
                        url:'list_position_ajax.php',
                        dataType:'html',
                        data:{
                        	page:1,
                        	searchtext2:searchtext2,
                        	city:city,
                        	industry:industry,
                        	salary:salary,
                        	scale:scale,
                        	property:property,
                        	addtime:addtime                        	
                        },
                        success:function(a,status,xhr){
                        	// alert(a);
                          var hidepagenun=$("#hidepagenun").attr("value");
                          var hidepage=$("#hidepage").attr("value"); 
                        	$('#box').html(a);
                            // $("#paging-list2").show();
                            // $("#paging-list1").hide();
                             
                        },
                        error:function(){
                        },
                    });
        document.getElementById("myform").submit();
	});
	$(".property-list a").click(function(){
		var a=$(this).attr("data-value");
		$("#property").attr("value",a);

		var city=$("#city").attr("value");
		var searchtext2=$("#searchtext2").attr("value");
		var industry=$("#industry").attr("value");
		var salary=$("#salary").attr("value");
		var scale=$("#scale").attr("value");
		var property=$("#property").attr("value");
		var addtime=$("#addtime").attr("value");

        $('#pageul li').each(function(index){
        if ($(this).text()==1) {
        $(this).addClass('cur').siblings().removeClass('cur');
        }
       });
		$.ajax({
                        type:'POST',
                        url:'list_position_ajax.php',
                        dataType:'html',
                        data:{
                        	page:1,
                        	searchtext2:searchtext2,
                        	city:city,
                        	industry:industry,
                        	salary:salary,
                        	scale:scale,
                        	property:property,
                        	addtime:addtime                        	
                        },
                        success:function(a,status,xhr){
                        	// alert(a);
                           var hidepagenun=$("#hidepagenun").attr("value");
                          var hidepage=$("#hidepage").attr("value");
                        	$('#box').html(a);
                            $("#paging-list2").show();
                            $("#paging-list1").hide();
                             
                        },
                        error:function(){
                        },
                    });
        document.getElementById("myform").submit();
	});


	$("#pagefirst").click(function(){
		// alert('first');
		var city=$("#city").attr("value");
		var searchtext2=$("#searchtext2").attr("value");
		var industry=$("#industry").attr("value");
		var salary=$("#salary").attr("value");
		var scale=$("#scale").attr("value");
		var property=$("#property").attr("value");
		var addtime=$("#addtime").attr("value");

        $('#pageul li').each(function(index){
        if ($(this).text()==1) {
        $(this).addClass('cur').siblings().removeClass('cur');
      }
    });
		$.ajax({
                        type:'POST',
                        url:'list_position_ajax.php',
                        dataType:'html',
                        data:{
                        	page:1,
                        	searchtext2:searchtext2,
                        	city:city,
                        	industry:industry,
                        	salary:salary,
                        	scale:scale,
                        	property:property,
                        	addtime:addtime                        	
                        },
                        success:function(a,status,xhr){
                        	// alert(a);
                          var hidepagenun=$("#hidepagenun").attr("value");
                          var hidepage=$("#hidepage").attr("value"); 
                        	$('#box').html(a);
                             
                        },
                        error:function(){
                        },
                    });
});

$("#pagelast").click(function(){
	// alert('last');
		var city=$("#city").attr("value");
		var searchtext2=$("#searchtext2").attr("value");
		var industry=$("#industry").attr("value");
		var salary=$("#salary").attr("value");
		var scale=$("#scale").attr("value");
		var property=$("#property").attr("value");
		var addtime=$("#addtime").attr("value");
  
   var hidepagenun=$("#hidepagenun").attr("value");
   var hidepage=$("#hidepage").attr("value");

   $('#pageul li').each(function(index){
        if ($(this).text()==hidepagenun) {
        $(this).addClass('cur').siblings().removeClass('cur');
      }
    });
		$.ajax({
                        type:'POST',
                        url:'list_position_ajax.php',
                        dataType:'html',
                        data:{
                        	page:hidepagenun,
                        	searchtext2:searchtext2,
                        	city:city,
                        	industry:industry,
                        	salary:salary,
                        	scale:scale,
                        	property:property,
                        	addtime:addtime                        	
                        },
                        success:function(a,status,xhr){
                        	// alert(a);
                          // alert(hidepagenun); 
                        	$('#box').html(a)
                             
                        },
                        error:function(){
                        },
                    });
});
$("#pageprev").click(function(){
  // alert('pre');
    var city=$("#city").attr("value");
    var searchtext2=$("#searchtext2").attr("value");
    var industry=$("#industry").attr("value");
    var salary=$("#salary").attr("value");
    var scale=$("#scale").attr("value");
    var property=$("#property").attr("value");
    var addtime=$("#addtime").attr("value");

    var hidepagenun=$("#hidepagenun").attr("value");
    if ($("#hidepage").length>0) {//这是判断对象是否存在，不要用define和js不一样
        // alert ();
        var hidepage=parseInt($("#hidepage").attr("value"))-parseInt(1);//否则+号会把字符串相加
      }else{
       var hidepage=0;
      }

    if (hidepage<=0) {
      alert('已经到首页了');
      return false;
    }

    $('#pageul li').each(function(index){
        if ($(this).text()==hidepage) {
        $(this).addClass('cur').siblings().removeClass('cur');
      }
    });

    $.ajax({
                        type:'POST',
                        url:'list_position_ajax.php',
                        dataType:'html',
                        data:{
                          page:hidepage,
                          searchtext2:searchtext2,
                          city:city,
                          industry:industry,
                          salary:salary,
                          scale:scale,
                          property:property,
                          addtime:addtime                         
                        },
                        success:function(a,status,xhr){
                          // alert(hidepage);
                          $('#box').html(a)
                             
                        },
                        error:function(){
                        },
                    });
});
$("#pagenext").click(function(){
  // alert('next');
    var city=$("#city").attr("value");
    var searchtext2=$("#searchtext2").attr("value");
    var industry=$("#industry").attr("value");
    var salary=$("#salary").attr("value");
    var scale=$("#scale").attr("value");
    var property=$("#property").attr("value");
    var addtime=$("#addtime").attr("value");

    
    var hidepagenun=$("#hidepagenun").attr("value");
    if ($("#hidepage").length>0) {//这是判断对象是否存在，不要用define和js不一样
        // alert ();
        var hidepage=parseInt($("#hidepage").attr("value"))+parseInt(1);//否则+号会把字符串相加
      }else{
       var hidepage=2;
      }

    if (hidepage>hidepagenun) {
      alert('已经到最后一页了');
      return false;
    }

    // var ulli=$('#pageul li').text();
    // alert (ulli);
    $('#pageul li').each(function(index){
        // alert($(this).text());
        if ($(this).text()==hidepage) {
        $(this).addClass('cur').siblings().removeClass('cur');
      }
    });
   
    $.ajax({
                        type:'POST',
                        url:'list_position_ajax.php',
                        dataType:'html',
                        data:{
                          page:hidepage,
                          searchtext2:searchtext2,
                          city:city,
                          industry:industry,
                          salary:salary,
                          scale:scale,
                          property:property,
                          addtime:addtime                         
                        },
                        success:function(a,status,xhr){
                          // alert(hidepage);
                          $('#box').html(a)
                             
                        },
                        error:function(){
                        },
                    });
});

$('ul li').click(function(){
  // alert($(this).text());
  // return false;
    var city=$("#city").attr("value");
    var searchtext2=$("#searchtext2").attr("value");
    var industry=$("#industry").attr("value");
    var salary=$("#salary").attr("value");
    var scale=$("#scale").attr("value");
    var property=$("#property").attr("value");
    var addtime=$("#addtime").attr("value");

    var hidepagenun=$("#hidepagenun").attr("value");
    // var hidepage=$("#hidepage").attr("value");
    var hidepage=$(this).text();
    $(this).addClass('cur').siblings().removeClass('cur');
    $.ajax({
                        type:'POST',
                        url:'list_position_ajax.php',
                        dataType:'html',
                        data:{
                          page:hidepage,
                          searchtext2:searchtext2,
                          city:city,
                          industry:industry,
                          salary:salary,
                          scale:scale,
                          property:property,
                          addtime:addtime                         
                        },
                        success:function(a,status,xhr){
                          // alert(hidepage);
                          $('#box').html(a)
                             
                        },
                        error:function(){
                        },
                    });
})

// $('form input[type=submit]').click(function(){//不跳转可以换成button
//     alert();
    // var city=$("#city").attr("value");
    // var industry=$("#industry").attr("value");
    // var salary=$("#salary").attr("value");
    // var scale=$("#scale").attr("value");
    // var property=$("#property").attr("value");
    // var addtime=$("#addtime").attr("value");
    
    //var searchtext2=$("#searchtext2").attr("value");获取不到
    // var searchtext2=document.getElementById('searchtext2').value;

    // $('#pageul li').each(function(index){
    //     if ($(this).text()==1) {
    //     $(this).addClass('cur').siblings().removeClass('cur');
    //   }
    // });
    // $.ajax({
    //                     type:'POST',
    //                     url:'list_position_ajax.php',
    //                     dataType:'html',
    //                     data:{
    //                       page:1,
    //                       searchtext2:searchtext2,
    //                       city:city,
    //                       industry:industry,
    //                       salary:salary,
    //                       scale:scale,
    //                       property:property,
    //                       addtime:addtime                         
    //                     },
    //                     success:function(a,status,xhr){
    //                       // alert(hidepage);
    //                       $('#box').html(a)
                             
    //                     },
    //                     error:function(){
    //                     },
    //                 });
  // });

 });

