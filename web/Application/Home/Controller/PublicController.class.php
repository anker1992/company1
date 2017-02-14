<?php
namespace Home\Controller;
use Think\Controller;
class PublicController extends Controller {
	public function header(){
		$cook_name=cookie('think_user_name');
    	$this->assign('cook_name',$cook_name);
    	//$this->display();
	}

	//判断是否登录
	public function is_login(){
		$cookie = cookie('think_user_name');
		if(!$cookie){
			$this->error("请先登录",U('User/login'));
		}
	}
}