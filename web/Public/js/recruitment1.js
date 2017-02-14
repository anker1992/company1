 $(function(){

        $(".parent a").click(function(){
            var key=$(this).text();
            document.getElementById('searchtext').value =key;
            $(this).attr('href','list_position.php?searchtext='+key).attr("target", "_blank");
            // $.ajax({
            //             type:'POST',
            //             url:'list_position.php',
            //             dataType:'html',
            //             data:$('form').serialize(),
            //             success:function(a,status,xhr){
                             
            //                   window.open('list_position.php');//打开新窗口，google浏览器有时会拦截
            //             },
            //             error:function(){
            //             },
            //         });
        });

        $(".sub a").click(function(){
        	var key=$(this).text();
            document.getElementById('searchtext').value =key;
            $(this).attr('href','list_position.php?searchtext='+key).attr("target", "_blank");
            // $.ajax({
            //             type:'POST',
            //             url:'list_position.php',
            //             dataType:'html',
            //             data:$('form').serialize(),
            //             success:function(a,status,xhr){
            //                   // alert(a);
            //                   window.open('list_position.php');
            //             },
            //             error:function(){
            //             },
            //         });
        });

        $(".hot-search a").click(function(){
        	var key=$(this).text();
            document.getElementById('searchtext').value =key;
            $(this).attr('href','list_position.php?searchtext='+key).attr("target", "_blank");
        });


        // $(function(){
        // $('.recruit-part1-left ul li a').click(function(){
    //     //     $(this).attr('href','list_position.php');
    //     // })
    // })
    })