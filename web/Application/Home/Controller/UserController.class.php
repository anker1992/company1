<?php
namespace Home\Controller;
use Think\Controller;
class UserController extends Controller {
	//登录
   public function login(){
        $this->display();
   }
   //登录成功
   public function login_add(){
       header("Content-Type:text/html;Charset=utf-8");
       $data = array(
           'phone' => I('post.phone'),
           'password' => I('post.password')
       );
        $user = M('user');
        $phone = $user->where("phone = '%s'",array($data['phone']))->find();
       if($phone){
           $salt = "weihehuo";// 只取前两个
           $password = crypt($data['password'], $salt);
           $pass = $user->where("phone = '%s' and password = '%s'",array($data['phone'],$password))->find();
           if($pass){
               cookie('user_name',$data['phone'],array('prefix'=>'think_'));
               cookie('user_id',$pass['id'],array('prefix'=>'think_'));
               $this->success('登录成功', U('Index/index'));
           }else{
               $this->error('密码错误');
           }
       }else{
           $this->error('没有当前手机号');
       }
   }
   //退出
   public function logout(){
        cookie(null,'think_');
        $this->success('', U('Index/index'));
   }
   //注册
   public function register(){
        $this->display();
   }

   //注册添加
   public function register_add(){
       $data = array(
           'phone' =>I('post.phone'),
            'password' => I('post.password')
       );
       $user = M('user');
       $list = $user->where('phone = %s',array($data['phone']))->find();
        if(!$list){
            $data['date'] = date('Y-m-d H:i:s');
            $salt = "weihehuo";// 只取前两个
            $data['password'] = crypt($data['password'], $salt);
           if($user->add($data)){
               $uid = $user->getLastInsID();
               cookie('user_name',$data['phone'],array('prefix'=>'think_'));
               cookie('user_id',$uid,array('prefix'=>'think_'));
            $this->success('注册成功', U('Index/index'));
           }else{
            $this->error('注册失败');
           }
        }else {
            $this->error('该手机号已经注册');
        }
   }

    //注册获取手机验证码
    public function user_code(){
        $phone = I('post.phone');
        if(cookie('user_phone')==$phone){
            if((strtotime(cookie('user_cookietime'))+60)<time()){
                //判断已经发送的验证码是否已经过了60s
                //如果过了60s就发送新的验证码
                $code = str_pad(mt_rand(0, pow(10,6) - 1),6, '0', STR_PAD_LEFT);
                Vendor('code.SendTemplateSMS');
                sendTemplateSMS($phone,array($code,'30分钟'),'139264');
                cookie('user_cookietime',date("Y-m-d H:i:s"));
                cookie('user_code',$code,1800);
                //echo $code;

            }else{
                exit('短信已在1分钟内发出，请耐心等待');
            }
        }else{
            //cookie里没有这个手机号，就直接发送
            $code = str_pad(mt_rand(0, pow(10,6) - 1),6, '0', STR_PAD_LEFT);
            Vendor('code.SendTemplateSMS');
            sendTemplateSMS($phone,array($code,'30分钟'),'139264');
            cookie('user_phone',$phone);
            cookie('user_cookietime',date("Y-m-d H:i:s"));
            cookie('user_code',$code,1800);
        }
    }

    //判断验证是否正确
    public function is_code_true(){
        $postphone = I('post.phone');
        $phone = M('user')->field("phone")->where("phone = %s",array($postphone))->find();
        if($phone){
            //数据库有，就已经注册
            echo 3;
        }else{
            //没有就判断用户的验证码是否正确
            if(I('post.code') == cookie('user_code')){
                echo 1;
            }else{
                echo 0;
            }
        }
    }

    //审核
    public function shenhe_register(){
        $this->display();
    }
}
