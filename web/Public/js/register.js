window.onload=function(){//表单加载完验证


var fm=document.getElementsByTagName('form')[0];
fm.onsubmit=function(){
if (fm.phone.value.length==0) {
	alert('手机号不能为空！');
	fm.phone.value='';
	fm.phone.focus();
	return false;
}
// console.log(fm.phone.value.length);
if (!/^[0-9]{11}$/.test(fm.phone.value)) {
  alert('手机号格式不正确');
  // fm.phone.value='';
  fm.phone.focus();
  return false;
  }

  if (fm.password.value.length==0) {
  	alert('密码不能为空！');
  	fm.password.focus();
  	return false;//停止往下执行,阻止提交
  }
  if (fm.password.value.length<6) {
  	alert('密码不能小于6位！');
  	fm.password.focus();
  	return false;//停止往下执行,阻止提交
  }
  if (fm.notpassword.value.length==0) {
  	alert('密码不能为空！');
  	fm.notpassword.focus();
  	return false;//停止往下执行,阻止提交
  }
  if (fm.password.value !=fm.notpassword.value) {
	alert('两次密码输入的不一致');
	fm.notpassword.value='';
	fm.notpassword.focus();
	return false;
}
return true;
}

//表单验证
var fm_a=document.getElementsByTagName('form')[1];
fm_a.onsubmit=function(){
if (fm_a.zpphone.value.length==0) {
	alert('手机号不能为空！');
	fm_a.zpphone.value='';
	fm_a.zpphone.focus();
	return false;
}

if (!/^[0-9]{11}$/.test(fm_a.zpphone.value)) {
  alert('手机号格式不正确');
  fm_a.zpphone.focus();
  return false;
  }

  if (fm_a.zppassword.value.length==0) {
  	alert('密码不能为空！');
  	fm_a.zppassword.focus();
  	return false;//停止往下执行,阻止提交
  }
  if (fm_a.zppassword.value.length<6) {
  	alert('密码不能小于6位！');
  	fm_a.zppassword.focus();
  	return false;//停止往下执行,阻止提交
  }
  if (fm_a.zpnotpassword.value.length==0) {
  	alert('密码不能为空！');
  	fm_a.zpnotpassword.focus();
  	return false;//停止往下执行,阻止提交
  }
  if (fm_a.zppassword.value !=fm_a.zpnotpassword.value) {
	alert('两次密码输入的不一致');
	fm_a.zpnotpassword.value='';
	fm_a.zpnotpassword.focus();
	return false;
}
return true;
}
}