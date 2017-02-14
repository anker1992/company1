window.onload=function(){//表单加载完验证

var fm=document.getElementsByTagName('form')[0];
fm.onsubmit=function(){
if (fm.phone.value.length==0) {
	alert('手机号不能为空！');
	fm.phone.value='';
	fm.phone.focus();
	return false;
}
  if (fm.password.value.length==0) {
  	alert('密码不能为空！');
  	fm.password.focus();
  	return false;//停止往下执行,阻止提交
  }
return true;
}


var fm_a=document.getElementsByTagName('form')[1];
fm_a.onsubmit=function(){
if (fm_a.zpphone.value.length==0) {
	alert('手机号不能为空！');
	fm_a.zpphone.value='';
	fm_a.zpphone.focus();
	return false;
}
  if (fm_a.zppassword.value.length==0) {
  	alert('密码不能为空！');
  	fm_a.zppassword.focus();
  	return false;//停止往下执行,阻止提交
  }
return true;
}
}