$(function(){
	var n=1;
	var i=$('#news_hid_num').attr("value");
		  i=i-9;
	$('#jzgd').click(function(){
		if (((n*9)-9)>=i) {
			$('#jzgd').attr("style","display:none");
			$('#jzgdno').attr("style","display:show");
		}
		 
		// alert(n);
		$.ajax({
                        type:'POST',
                        url:'news1_ajax.php',
                        dataType:'html',
                        data:{
                        	num:n,                       	
                        },
                        success:function(a,status,xhr){
                        	// alert(a);
                        	$('#jzgdbox').html(a);
                         
                             
                        },
                        error:function(){
                        },
                    });
		  n++;
	   });
		
	});