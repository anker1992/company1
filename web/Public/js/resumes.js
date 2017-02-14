$(function(){
	$('#search').click(function(){

	document.getElementById("myform").submit();
	});

$('.paging-list .first').click(function(){
      var page=1;
      $('.paging-list ul li').each(function(index){
        if ($(this).text()==page) {
        $(this).addClass('cur');
      }else{
      	$(this).removeClass('cur');
      }
     });

      var area=$('input:radio[name="area"]:checked').val();
      var keywords=$('input:text[name="keywords"]').val();
      var city=$('input:text[name="city"]').val();
      var industry=$('input:text[name="industry"]').val();
      var workyear=$('input:text[name="workyear"]').val();
      var age=$('input:text[name="age"]').val();
      var sex=$('.cur input:radio[name="sex"]').val();
      var update=$('input:text[name="update"]').val();
      if ($('input:checkbox[name="education"]').attr('checked')=='checked') {
      	var education=$('input:checkbox[name="education"]').val();
      }else{
      	education='xxx';
      }

      if ($('input:checkbox[name="educationa"]').attr('checked')=='checked') {
      	var educationa=$('input:checkbox[name="educationa"]').val();
      }else{
      	educationa='xxx';
      }

      if ($('input:checkbox[name="educationb"]').attr('checked')=='checked') {
      	var educationb=$('input:checkbox[name="educationb"]').val();
      }else{
      	educationb='xxx';
      }
      if ($('input:checkbox[name="educationc"]').attr('checked')=='checked') {
      	var educationc=$('input:checkbox[name="educationc"]').val();
      }else{
      	educationc='xxx';
      }

      if ($('input:checkbox[name="educationd"]').attr('checked')=='checked') {
      	var educationd=$('input:checkbox[name="educationd"]').val();
      }else{
      	educationd='xxx';
      }

      if ($('input:checkbox[name="educatione"]').attr('checked')=='checked') {
      	var educatione=$('input:checkbox[name="educatione"]').val();
      }else{
      	educatione='xxx';
      }
      if (education==educationa & educationa==educationb & educationb==educationc & educationc==educationd & educationd==educatione) {
      	education=educationa=educationb=educationc=educationd=educatione='';
      }

      var keywords=$('input:text[name="keywords"]').val();
      var ageclick=$('#ageclick').attr("value");
      var educlick=$('#educlick').attr("value");

      if ($('#checka').attr('checked')=='checked') {
      	// alert('已选择');
      	var check1='yxz'
      }else{
      	var check1='wxz'
      }
      $.ajax({
                        type:'POST',
                        url:'resumesajax.php',
                        dataType:'html',
                        data:{
                        	page:page,
                              ageclick:ageclick,
                              educlick:educlick,
                        	check1:check1,
                        	area:area,
                        	keywords:keywords,
                        	city:city,
                        	industry:industry,
                        	education:education,
                        	educationa:educationa,
                        	educationb:educationb,
                        	educationc:educationc,
                        	educationd:educationd,
                        	educatione:educatione,
                        	workyear:workyear,
                        	age:age,
                        	sex:sex,
                        	update:update                      	
                        },
                        success:function(a,status,xhr){
                        	// alert(a); 
                        	$('#box').html(a);                           
                        },
                        error:function(){
                        },
                    });
   });

$('.paging-list .last').click(function(){
      var page=$('#hidepagenun').attr("value");
      $('.paging-list ul li').each(function(index){
        if ($(this).text()==page) {
        $(this).addClass('cur');
      }else{
      	$(this).removeClass('cur');
      }
     });

      var area=$('input:radio[name="area"]:checked').val();
      var keywords=$('input:text[name="keywords"]').val();
      var city=$('input:text[name="city"]').val();
      var industry=$('input:text[name="industry"]').val();
      var workyear=$('input:text[name="workyear"]').val();
      var age=$('input:text[name="age"]').val();
      var sex=$('.cur input:radio[name="sex"]').val();
      var update=$('input:text[name="update"]').val();
      if ($('input:checkbox[name="education"]').attr('checked')=='checked') {
      	var education=$('input:checkbox[name="education"]').val();
      }else{
      	education='xxx';
      }

      if ($('input:checkbox[name="educationa"]').attr('checked')=='checked') {
      	var educationa=$('input:checkbox[name="educationa"]').val();
      }else{
      	educationa='xxx';
      }

      if ($('input:checkbox[name="educationb"]').attr('checked')=='checked') {
      	var educationb=$('input:checkbox[name="educationb"]').val();
      }else{
      	educationb='xxx';
      }
      if ($('input:checkbox[name="educationc"]').attr('checked')=='checked') {
      	var educationc=$('input:checkbox[name="educationc"]').val();
      }else{
      	educationc='xxx';
      }

      if ($('input:checkbox[name="educationd"]').attr('checked')=='checked') {
      	var educationd=$('input:checkbox[name="educationd"]').val();
      }else{
      	educationd='xxx';
      }

      if ($('input:checkbox[name="educatione"]').attr('checked')=='checked') {
      	var educatione=$('input:checkbox[name="educatione"]').val();
      }else{
      	educatione='xxx';
      }
      if (education==educationa & educationa==educationb & educationb==educationc & educationc==educationd & educationd==educatione) {
      	education=educationa=educationb=educationc=educationd=educatione='';
      }

      var keywords=$('input:text[name="keywords"]').val();
      var ageclick=$('#ageclick').attr("value");
      var educlick=$('#educlick').attr("value");

      if ($('#checka').attr('checked')=='checked') {
      	// alert('已选择');
      	var check1='yxz'
      }else{
      	var check1='wxz'
      }
      $.ajax({
                        type:'POST',
                        url:'resumesajax.php',
                        dataType:'html',
                        data:{
                        	page:page,
                              ageclick:ageclick,
                              educlick:educlick,
                        	check1:check1,
                        	area:area,
                        	keywords:keywords,
                        	city:city,
                        	industry:industry,
                        	education:education,
                        	educationa:educationa,
                        	educationb:educationb,
                        	educationc:educationc,
                        	educationd:educationd,
                        	educatione:educatione,
                        	workyear:workyear,
                        	age:age,
                        	sex:sex,
                        	update:update                      	
                        },
                        success:function(a,status,xhr){
                        	// alert(a); 
                        	$('#box').html(a);                           
                        },
                        error:function(){
                        },
                    });
   });

$('.paging-list ul li').click(function(){
		var page=$(this).text();
		// $('#page').attr("value",page);
		$('.paging-list ul li').each(function(index){
        if ($(this).text()==page) {
        $(this).addClass('cur');
      }else{
      	$(this).removeClass('cur');
      }
     });

      var area=$('input:radio[name="area"]:checked').val();
      var keywords=$('input:text[name="keywords"]').val();
      var city=$('input:text[name="city"]').val();
      var industry=$('input:text[name="industry"]').val();
      var workyear=$('input:text[name="workyear"]').val();
      var age=$('input:text[name="age"]').val();
      var sex=$('.cur input:radio[name="sex"]').val();
      var update=$('input:text[name="update"]').val();
      if ($('input:checkbox[name="education"]').attr('checked')=='checked') {
      	var education=$('input:checkbox[name="education"]').val();
      }else{
      	education='xxx';
      }

      if ($('input:checkbox[name="educationa"]').attr('checked')=='checked') {
      	var educationa=$('input:checkbox[name="educationa"]').val();
      }else{
      	educationa='xxx';
      }

      if ($('input:checkbox[name="educationb"]').attr('checked')=='checked') {
      	var educationb=$('input:checkbox[name="educationb"]').val();
      }else{
      	educationb='xxx';
      }
      if ($('input:checkbox[name="educationc"]').attr('checked')=='checked') {
      	var educationc=$('input:checkbox[name="educationc"]').val();
      }else{
      	educationc='xxx';
      }

      if ($('input:checkbox[name="educationd"]').attr('checked')=='checked') {
      	var educationd=$('input:checkbox[name="educationd"]').val();
      }else{
      	educationd='xxx';
      }

      if ($('input:checkbox[name="educatione"]').attr('checked')=='checked') {
      	var educatione=$('input:checkbox[name="educatione"]').val();
      }else{
      	educatione='xxx';
      }
      if (education==educationa & educationa==educationb & educationb==educationc & educationc==educationd & educationd==educatione) {
      	education=educationa=educationb=educationc=educationd=educatione='';
      }

      var keywords=$('input:text[name="keywords"]').val();

      var ageclick=$('#ageclick').attr("value");
      var educlick=$('#educlick').attr("value");

      if ($('#checka').attr('checked')=='checked') {
      	// alert('已选择');
      	var check1='yxz'
      }else{
      	var check1='wxz'
      }
      $.ajax({
                        type:'POST',
                        url:'resumesajax.php',
                        dataType:'html',
                        data:{
                        	page:page,
                              ageclick:ageclick,
                              educlick:educlick,
                        	check1:check1,
                        	area:area,
                        	keywords:keywords,
                        	city:city,
                        	industry:industry,
                        	education:education,
                        	educationa:educationa,
                        	educationb:educationb,
                        	educationc:educationc,
                        	educationd:educationd,
                        	educatione:educatione,
                        	workyear:workyear,
                        	age:age,
                        	sex:sex,
                        	update:update                      	
                        },
                        success:function(a,status,xhr){
                        	// alert(a); 
                        	$('#box').html(a);                           
                        },
                        error:function(){
                        },
                    });
  });

  $('.paging-list .prev').click(function(){
      var page=parseInt($('.paging-list ul .cur').text())-1;
      if (page==0) {
    		alert('已经到首页了');
    		return false;
    	}
 
      $('.paging-list ul li').each(function(index){
      	var a=$(this).text();
      	var b=$('#hidepagenun').attr("value");
      	if (5<a) {
             $(this).attr("style","display:none");
      	}
      	if (a==b) {
      		$(this).attr("style","display:show");
      	}
        if ($(this).text()==page) {
        $(this).addClass('cur');
        $(this).attr("style","display:show");
      }else{
      	$(this).removeClass('cur');
      }
     });

      var area=$('input:radio[name="area"]:checked').val();
      var keywords=$('input:text[name="keywords"]').val();
      var city=$('input:text[name="city"]').val();
      var industry=$('input:text[name="industry"]').val();
      var workyear=$('input:text[name="workyear"]').val();
      var age=$('input:text[name="age"]').val();
      var sex=$('.cur input:radio[name="sex"]').val();
      var update=$('input:text[name="update"]').val();
      if ($('input:checkbox[name="education"]').attr('checked')=='checked') {
      	var education=$('input:checkbox[name="education"]').val();
      }else{
      	education='xxx';
      }

      if ($('input:checkbox[name="educationa"]').attr('checked')=='checked') {
      	var educationa=$('input:checkbox[name="educationa"]').val();
      }else{
      	educationa='xxx';
      }

      if ($('input:checkbox[name="educationb"]').attr('checked')=='checked') {
      	var educationb=$('input:checkbox[name="educationb"]').val();
      }else{
      	educationb='xxx';
      }
      if ($('input:checkbox[name="educationc"]').attr('checked')=='checked') {
      	var educationc=$('input:checkbox[name="educationc"]').val();
      }else{
      	educationc='xxx';
      }

      if ($('input:checkbox[name="educationd"]').attr('checked')=='checked') {
      	var educationd=$('input:checkbox[name="educationd"]').val();
      }else{
      	educationd='xxx';
      }

      if ($('input:checkbox[name="educatione"]').attr('checked')=='checked') {
      	var educatione=$('input:checkbox[name="educatione"]').val();
      }else{
      	educatione='xxx';
      }
      if (education==educationa & educationa==educationb & educationb==educationc & educationc==educationd & educationd==educatione) {
      	education=educationa=educationb=educationc=educationd=educatione='';
      }

      var keywords=$('input:text[name="keywords"]').val();
      var ageclick=$('#ageclick').attr("value");
      var educlick=$('#educlick').attr("value");

      if ($('#checka').attr('checked')=='checked') {
      	// alert('已选择');
      	var check1='yxz'
      }else{
      	var check1='wxz'
      }
      $.ajax({
                        type:'POST',
                        url:'resumesajax.php',
                        dataType:'html',
                        data:{
                        	page:page,
                              ageclick:ageclick,
                              educlick:educlick,
                        	check1:check1,
                        	area:area,
                        	keywords:keywords,
                        	city:city,
                        	industry:industry,
                        	education:education,
                        	educationa:educationa,
                        	educationb:educationb,
                        	educationc:educationc,
                        	educationd:educationd,
                        	educatione:educatione,
                        	workyear:workyear,
                        	age:age,
                        	sex:sex,
                        	update:update                      	
                        },
                        success:function(a,status,xhr){
                        	// alert(a); 
                        	$('#box').html(a);                           
                        },
                        error:function(){
                        },
                    });
   });

  $('.paging-list .next').click(function(){
      var page=parseInt($('.paging-list ul .cur').text())+1;
      if (page-1==$('#hidepagenun').attr("value")) {
    		alert('已经到最后一页了');
    		return false;
    	}
      $('.paging-list ul li').each(function(index){
      	var a=$(this).text();
      	var b=$('#hidepagenun').attr("value");
      	if (5<a) {
             $(this).attr("style","display:none");
      	}
      	if (a==b) {
      		$(this).attr("style","display:show");
      	}

        if ($(this).text()==page) {
        $(this).addClass('cur');
        $(this).attr("style","display:show");
      }else{
      	$(this).removeClass('cur');
      }
     });
      var area=$('input:radio[name="area"]:checked').val();
      var keywords=$('input:text[name="keywords"]').val();
      var city=$('input:text[name="city"]').val();
      var industry=$('input:text[name="industry"]').val();
      var workyear=$('input:text[name="workyear"]').val();
      var age=$('input:text[name="age"]').val();
      var sex=$('.cur input:radio[name="sex"]').val();
      // alert(sex);
      // return false;
      var update=$('input:text[name="update"]').val();
      if ($('input:checkbox[name="education"]').attr('checked')=='checked') {
      	var education=$('input:checkbox[name="education"]').val();
      }else{
      	education='xxx';
      }

      if ($('input:checkbox[name="educationa"]').attr('checked')=='checked') {
      	var educationa=$('input:checkbox[name="educationa"]').val();
      }else{
      	educationa='xxx';
      }

      if ($('input:checkbox[name="educationb"]').attr('checked')=='checked') {
      	var educationb=$('input:checkbox[name="educationb"]').val();
      }else{
      	educationb='xxx';
      }
      if ($('input:checkbox[name="educationc"]').attr('checked')=='checked') {
      	var educationc=$('input:checkbox[name="educationc"]').val();
      }else{
      	educationc='xxx';
      }

      if ($('input:checkbox[name="educationd"]').attr('checked')=='checked') {
      	var educationd=$('input:checkbox[name="educationd"]').val();
      }else{
      	educationd='xxx';
      }

      if ($('input:checkbox[name="educatione"]').attr('checked')=='checked') {
      	var educatione=$('input:checkbox[name="educatione"]').val();
      }else{
      	educatione='xxx';
      }
      if (education==educationa & educationa==educationb & educationb==educationc & educationc==educationd & educationd==educatione) {
      	education=educationa=educationb=educationc=educationd=educatione='';
      }

      var keywords=$('input:text[name="keywords"]').val();

      var ageclick=$('#ageclick').attr("value");
      var educlick=$('#educlick').attr("value");

      if ($('#checka').attr('checked')=='checked') {
      	// alert('已选择');
      	var check1='yxz'
      }else{
      	var check1='wxz'
      }
      $.ajax({
                        type:'POST',
                        url:'resumesajax.php',
                        dataType:'html',
                        data:{
                        	page:page,
                              ageclick:ageclick,
                              educlick:educlick,
                        	check1:check1,
                        	area:area,
                        	keywords:keywords,
                        	city:city,
                        	industry:industry,
                        	education:education,
                        	educationa:educationa,
                        	educationb:educationb,
                        	educationc:educationc,
                        	educationd:educationd,
                        	educatione:educatione,
                        	workyear:workyear,
                        	age:age,
                        	sex:sex,
                        	update:update                      	
                        },
                        success:function(a,status,xhr){
                        	// alert(a); 
                        	$('#box').html(a);                           
                        },
                        error:function(){
                        },
                    });
   });
 
  $('#ageorder').click(function(){
  	var ageclick=$('#ageclick').attr("value");
  	ageclick=parseInt(ageclick)+parseInt(1);
  	$('#ageclick').attr("value",ageclick);
      $('#educlick').attr("value",'0');
  	if(ageclick%2==0){
  		// alert('年龄增加');
  	}else{
  		// alert('年龄降低');
  	} 
      var page=1;
      $('.paging-list ul li').each(function(index){
        if ($(this).text()==page) {
        $(this).addClass('cur');
      }else{
            $(this).removeClass('cur');
      }
     });

      var area=$('input:radio[name="area"]:checked').val();
      var keywords=$('input:text[name="keywords"]').val();
      var city=$('input:text[name="city"]').val();
      var industry=$('input:text[name="industry"]').val();
      var workyear=$('input:text[name="workyear"]').val();
      var age=$('input:text[name="age"]').val();
      var sex=$('.cur input:radio[name="sex"]').val();
      var update=$('input:text[name="update"]').val();
      if ($('input:checkbox[name="education"]').attr('checked')=='checked') {
            var education=$('input:checkbox[name="education"]').val();
      }else{
            education='xxx';
      }

      if ($('input:checkbox[name="educationa"]').attr('checked')=='checked') {
            var educationa=$('input:checkbox[name="educationa"]').val();
      }else{
            educationa='xxx';
      }

      if ($('input:checkbox[name="educationb"]').attr('checked')=='checked') {
            var educationb=$('input:checkbox[name="educationb"]').val();
      }else{
            educationb='xxx';
      }
      if ($('input:checkbox[name="educationc"]').attr('checked')=='checked') {
            var educationc=$('input:checkbox[name="educationc"]').val();
      }else{
            educationc='xxx';
      }

      if ($('input:checkbox[name="educationd"]').attr('checked')=='checked') {
            var educationd=$('input:checkbox[name="educationd"]').val();
      }else{
            educationd='xxx';
      }

      if ($('input:checkbox[name="educatione"]').attr('checked')=='checked') {
            var educatione=$('input:checkbox[name="educatione"]').val();
      }else{
            educatione='xxx';
      }
      if (education==educationa & educationa==educationb & educationb==educationc & educationc==educationd & educationd==educatione) {
            education=educationa=educationb=educationc=educationd=educatione='';
      }

      var keywords=$('input:text[name="keywords"]').val();

      if ($('#checka').attr('checked')=='checked') {
            // alert('已选择');
            var check1='yxz'
      }else{
            var check1='wxz'
      }
      $.ajax({
                        type:'POST',
                        url:'resumesajax.php',
                        dataType:'html',
                        data:{
                              page:1,
                              ageclick:ageclick,
                              educlick:0,
                              check1:check1,
                              area:area,
                              keywords:keywords,
                              city:city,
                              industry:industry,
                              education:education,
                              educationa:educationa,
                              educationb:educationb,
                              educationc:educationc,
                              educationd:educationd,
                              educatione:educatione,
                              workyear:workyear,
                              age:age,
                              sex:sex,
                              update:update                       
                        },
                        success:function(a,status,xhr){
                              // alert(a); 
                              $('#box').html(a);                           
                        },
                        error:function(){
                        },
                    });

  });

  $('#eduorder').click(function(){
  	var educlick=$('#educlick').attr("value");
  	educlick=parseInt(educlick)+parseInt(1);
  	$('#educlick').attr("value",educlick);
      $('#ageclick').attr("value",'0');
  	if(educlick%2==0){
  		// alert('学历降低');
  	}else{
  		// alert('学历增加');
  	}
       var page=1;
      $('.paging-list ul li').each(function(index){
        if ($(this).text()==page) {
        $(this).addClass('cur');
      }else{
            $(this).removeClass('cur');
      }
     });

      var area=$('input:radio[name="area"]:checked').val();
      var keywords=$('input:text[name="keywords"]').val();
      var city=$('input:text[name="city"]').val();
      var industry=$('input:text[name="industry"]').val();
      var workyear=$('input:text[name="workyear"]').val();
      var age=$('input:text[name="age"]').val();
      var sex=$('.cur input:radio[name="sex"]').val();
      var update=$('input:text[name="update"]').val();
      if ($('input:checkbox[name="education"]').attr('checked')=='checked') {
            var education=$('input:checkbox[name="education"]').val();
      }else{
            education='xxx';
      }

      if ($('input:checkbox[name="educationa"]').attr('checked')=='checked') {
            var educationa=$('input:checkbox[name="educationa"]').val();
      }else{
            educationa='xxx';
      }

      if ($('input:checkbox[name="educationb"]').attr('checked')=='checked') {
            var educationb=$('input:checkbox[name="educationb"]').val();
      }else{
            educationb='xxx';
      }
      if ($('input:checkbox[name="educationc"]').attr('checked')=='checked') {
            var educationc=$('input:checkbox[name="educationc"]').val();
      }else{
            educationc='xxx';
      }

      if ($('input:checkbox[name="educationd"]').attr('checked')=='checked') {
            var educationd=$('input:checkbox[name="educationd"]').val();
      }else{
            educationd='xxx';
      }

      if ($('input:checkbox[name="educatione"]').attr('checked')=='checked') {
            var educatione=$('input:checkbox[name="educatione"]').val();
      }else{
            educatione='xxx';
      }
      if (education==educationa & educationa==educationb & educationb==educationc & educationc==educationd & educationd==educatione) {
            education=educationa=educationb=educationc=educationd=educatione='';
      }

      var keywords=$('input:text[name="keywords"]').val();

      if ($('#checka').attr('checked')=='checked') {
            // alert('已选择');
            var check1='yxz'
      }else{
            var check1='wxz'
      }
      $.ajax({
                        type:'POST',
                        url:'resumesajax.php',
                        dataType:'html',
                        data:{
                              page:1,
                              ageclick:0,
                              educlick:educlick,
                              check1:check1,
                              area:area,
                              keywords:keywords,
                              city:city,
                              industry:industry,
                              education:education,
                              educationa:educationa,
                              educationb:educationb,
                              educationc:educationc,
                              educationd:educationd,
                              educatione:educatione,
                              workyear:workyear,
                              age:age,
                              sex:sex,
                              update:update                       
                        },
                        success:function(a,status,xhr){
                              // alert(a); 
                              $('#box').html(a);                           
                        },
                        error:function(){
                        },
                    });  	
  });


});
