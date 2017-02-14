window.onload=function(){//表单加载完验证

//表单验证
var fm=document.getElementsByTagName('form')[0];
fm.onsubmit=function(){
  if (fm.username.value.length==0) {
  	alert('姓名不能为空!');
  	fm.username.focus();
  	return false;//停止往下执行,阻止提交
  }
if (fm.phone.value.length<6) {
	alert('电话号码格式错误！');
	fm.phone.value='';
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
  if (fm.company.value.length==0) {
  	alert('公司不能为空!');
  	fm.job.focus();
  	return false;//停止往下执行,阻止提交
  }
  if (fm.job.value.length==0) {
  	alert('职务不能为空!');
  	fm.job.focus();
  	return false;//停止往下执行,阻止提交
  }
  if (fm.yixang.value.length==0) {
    alert('意向不能为空!');
    fm.yixang.focus();
    return false;//停止往下执行,阻止提交
  }
return true;
}
}