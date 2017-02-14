$('.post-save .save a').click(function(){
	var name=document.cookie.indexOf("name");
	if (name==-1) {
		alert('请登录后再操作');
	}
})