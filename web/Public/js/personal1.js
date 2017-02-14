$(function(){
      $('.man').click(function(){
        $('<input type="hidden" name="sex" value="男">').appendTo('#divhidden');
      });
       $('.woman').click(function(){
        $('<input type="hidden" name="sex" value="女">').appendTo('#divhidden');
      });
      $('#jbxx').click(function(){
            $.ajax({
                        type:'POST',
                        url:'personal2_ajax.php',
                        dataType:'html',//很重要，默认html
                        data:$('form').serialize(),
                        success:function(a,status,xhr){
                              // alert(a);
                              window.location.href = 'personal1.php';
                        },
                        error:function(){
                        },
                    });
            });

	$('#addjy').click(function(){
		$.ajax({
                        type:'POST',
                        url:'personal1_ajax.php',
                        dataType:'html',//很重要，默认html
                        data:$('form').serialize(),
                        success:function(a,status,xhr){
                        	window.location.href = 'personal1.php';
                        },
                        error:function(){
                        },
                    });
	});
	$('#editjy').click(function(){
		$.ajax({
                        type:'POST',
                        url:'personal1_ajax.php',
                        dataType:'html',
                        data:$('form').serialize(),
                        success:function(a,status,xhr){
                        	window.location.href = 'personal1.php';
                        },
                        error:function(){
                        },
                    });
	});
	$('#addxl').click(function(){
		$.ajax({
                        type:'POST',
                        url:'personal1_ajax.php',
                        dataType:'html',
                        data:$('form').serialize(),
                        success:function(a,status,xhr){
                        	// alert(a);
                        	window.location.href = 'personal1.php';
                        },
                        error:function(){
                        },
                    });
	});
	$('#editxl').click(function(){
		$.ajax({
                        type:'POST',
                        url:'personal1_ajax.php',
                        dataType:'html',
                        data:$('form').serialize(),
                        success:function(a,status,xhr){
                                // alert(a);
                        	window.location.href = 'personal1.php';
                        },
                        error:function(){
                        },
                    });
	});
      $('#addproject').click(function(){
            $.ajax({
                        type:'POST',
                        url:'personal1_ajax.php',
                        dataType:'html',
                        data:$('form').serialize(),
                        success:function(a,status,xhr){
                              // alert(a);
                              window.location.href = 'personal1.php';
                        },
                        error:function(){
                        },
                    });
      });
      $('#editproject').click(function(){
            // alert();
            $.ajax({
                        type:'POST',
                        url:'personal1_ajax.php',
                        dataType:'html',
                        data:$('form').serialize(),
                        success:function(a,status,xhr){
                              // alert(a);
                              window.location.href = 'personal1.php';
                        },
                        error:function(){
                        },
                    });
      });


      $('#editaboutme').click(function(){
            $.ajax({
                        type:'POST',
                        url:'personal1_ajax.php',
                        dataType:'html',
                        data:$('form').serialize(),
                        success:function(a,status,xhr){
                              // alert(a);
                              window.location.href = 'personal1.php';
                        },
                        error:function(){
                        },
                    });
      });

      $('#qwwork').click(function(){
            $.ajax({
                        type:'POST',
                        url:'personal1_ajax.php',
                        dataType:'html',
                        data:$('form').serialize(),
                        success:function(a,status,xhr){
                              // alert(a);
                              window.location.href = 'personal1.php';
                        },
                        error:function(){
                        },
                    });
      });


      $('#adduserdefine').click(function(){
            $.ajax({
                        type:'POST',
                        url:'personal1_ajax.php',
                        dataType:'html',
                        data:$('form').serialize(),
                        success:function(a,status,xhr){
                              // alert(a);
                              window.location.href = 'personal1.php';
                        },
                        error:function(){
                        },
                    });
      });


      $('#edituserdefine').click(function(){
            $.ajax({
                        type:'POST',
                        url:'personal1_ajax.php',
                        dataType:'html',
                        data:$('form').serialize(),
                        success:function(a,status,xhr){
                              // alert(a);
                              window.location.href = 'personal1.php';
                        },
                        error:function(){
                        },
                    });
      });

})
