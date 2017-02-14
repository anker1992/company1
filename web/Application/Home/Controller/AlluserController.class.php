<?php
namespace Home\Controller;
use Think\Controller;
class AlluserController extends Controller {
    //判断是否登录
    public function is_login(){
        if(!$_SESSION['member']){
            $this->error('当前用户未登录或登录超时，请重新登录',U('Alluser/login'));
        }
    }

    public function login(){

    }


}