<?php
namespace Home\Controller;
use Think\Controller;
class LoginController extends Controller {
    //登陆页面
    public function login(){
        $code = $_GET['code'];
        $type = $_GET['type'];
        $fid = $_GET['fid'];
        if ($code) {
            $openid = $this->weixin_openid($code,$type,$fid);
            $sel_openid = M('user')->field("id,openid,token")->where("openid = '%s'",array($openid['openid']))->find();
            if($sel_openid['openid']){
                if($openid['type'] == '1'){
                    redirect(U('Market/newPost',array('token'=>$sel_openid['token'])));
                }elseif($openid['type'] == '2'){
                    redirect(U('Market/comment',array('token'=>$sel_openid['token'],'fid'=>$openid['fid'])));
                }else{
                    redirect(U('Product/productList',array('token'=>$sel_openid['token'])));
                }
            }else{
                //echo 2;die;
                $this->assign('type',$openid['type']);
                $this->assign('openid',$openid['openid']);
                $this->assign('fid',$openid['fid']);
                $this->display();
            }
        } else {
            $this->weixin_code($type,$fid);
        }
    }

    //登录
    public function login_add(){
        $arr = array(
            'mobile' => I('post.phone'),
            'user_pass' => I('post.pwd'),
            'openid' => I('post.openid')
        );
        $model = M('user');
        $mobile = $model->field("id,user_pass")->where("mobile = %s",array($arr['mobile']))->find();
        if($mobile){
            $pass = encrypt($arr['user_pass'],'E');
            $user_pass = $model->field("id,token,user_pass")->where("mobile = %s and user_pass = '%s'",array($arr['mobile'],$pass))->find();
            if(empty($mobile['user_pass'])){
                $this->error("还未注册",U('register'));
            }else{
                if($user_pass){
                    $type = $_POST['type'];
                    $fid = I('post.fid');
                    $save_openid = $model->where("mobile = '%s'",array($arr['mobile']))->save(array("openid"=>$arr['openid']));
                    if($type == '1'){
                        $this->redirect('Market/newPost',array('token'=>$user_pass['token']));
                    }elseif($type == '2'){
                         $this->redirect('Market/comment',array('token'=>$user_pass['token'],'fid'=>$fid));
                    }else{
                        $this->redirect('Userindex/userCenter',array('token'=>$user_pass['token']));
                    }
                }else{
                    $this->error("密码错误");
                }
            }
        }else{
            $this->error("手机号错误");
        }
    }

    //注册
    public function register_add(){
        $arr = array(
            'mobile' => I('post.phone'),
            'user_pass' => encrypt(I('post.password'),'E')
        );
        $user_model = M('user');
        $code_model = M("user_code");
        $randcode = $code_model->field("randcode")->where("mobile = '%s'",array($arr['mobile']))->find();
        if($randcode){
            $user = $user_model->field("id,mobile,user_pass")->where("mobile = '%s'",array($arr['mobile']))->find();
            if($user['user_pass']){
                $this->error("用户已经注册");
            }else{
                if($user['mobile']){
                    //save
                    $save_arr = array(
                        'user_pass'=>$arr['user_pass'],
                        'create_time'=>time(),
                        'last_login_time'=>time(),
                        'token' => encrypt($user['id'],'E')
                    );
                    $save = $user_model
                        ->where("mobile = %s",array($arr['mobile']))
                        ->save($save_arr);

                    $find_extend = M('user_extend')->field("uid")->where("uid = %d",array($user['id']))->find();
                    if(!$find_extend){
                        $add_extend = M('user_extend')->add(array('uid'=>$user['id']));
                    }
                    $this->redirect('Userindex/userCenter',array('token'=>$save_arr['token']));
                }else{
                    //add
                    $arr['create_time'] = time();
                    $arr['last_login_time'] = time();
                    $add_user = $user_model->add($arr);
                    $uid = $user_model->getLastInsID();
                    $add_extend = M('user_extend')->add(array('uid'=>$uid));
                    $token['token'] = encrypt($uid,'E');
                    $add_token = $user_model->where("mobile = '%s'",array($arr['mobile']))->save($token);
                    if($add_token){
                        $this->assign('token',$token['token']);
                        $this->display('selectIdentity');
                        //$this->redirect('Userindex/userCenter',array('token'=>$token['token']));
                    }else{
                        $this->error("添加失败");
                    }
                }
            }
        }else{
            $this->error("验证码错误");
        }
    }

    //选择项目投资
    public function selectIdentity_add($token=0){
        if(!$token){
            $this->error("参数错误");
        }else{
            $token = I('get.token');
            $uid = encrypt($token,'D');
            $user_type = I('get.user_type');
            $model = M('user');
            $user = $model->where("id = %d",array($uid))->save(array("user_type"=>$user_type));
            if($user){
                $this->redirect('Userindex/userCenter',array('token'=>$token));
            }
        }
    }

    //忘记密码
    public function forget_save(){
        $phone = I('post.phone');
        $password = encrypt(I('post.password'),'E');
        $model = M('user');
        $save_pass = $model->where("mobile = %s",array($phone))->save(array("user_pass"=>$password));
        if($save_pass){
            $this->redirect('login');
        }
    }

    //退出
    public function logout(){
        $token = I('get.token');
        $uid = encrypt($token,'D');
        $out = M('user')->where("id = %d",array($uid))->save(array("openid"=>''));
        if($out){
            $this->redirect('Login/login');
        }
    }

    //发送验证码
    public function user_code(){
        header("Content-Type:text/html;Charset=utf-8");
        $phone = I('post.phone');
        $info = M('user_code')->field("mobile,reqdate")->where('mobile = %s',array($phone))->find();
        if($info){
            if (($info['reqdate']+60) < time()){
                //判断已经发送的验证码是否已经过了60s
                //如果过了60s就发送新的验证码
                $code = str_pad(mt_rand(0, pow(10,6) - 1),6, '0', STR_PAD_LEFT);
                Vendor('code.SendTemplateSMS');
                sendTemplateSMS($phone,array($code,'30分钟'),'139264');
                $info['reqdate'] = time();
                $info['randcode'] = $code;
                M('user_code')->where('mobile = %s',array($phone))->save($info);
            }else{
                exit('短信已在1分钟内发出，请耐心等待');
            }
        }else{
            $code = str_pad(mt_rand(0, pow(10,6) - 1),6, '0', STR_PAD_LEFT);
            Vendor('code.SendTemplateSMS');
            sendTemplateSMS($phone,array($code,'30分钟'),'139264');
            $info = array(
                'mobile' => I('post.phone'),
                'randcode' => $code,
                'reqdate' => time()
            );
            M('user_code')->add($info);
        }
    }

    //判断验证是否正确
    public function is_code_true(){
        header("Content-Type:text/html;Charset=utf-8");
        $postphone = I('post.phone');
        $phone = M('user')->field("mobile,user_pass")->where("mobile = %s",array($postphone))->find();
        $manager  = M('user_code')->field("randcode")->where('mobile = %s',array($postphone))->find();
       if($phone['user_pass']){
            //数据库有，就已经注册
            echo 3;
        }else{
            //没有就判断用户的验证码是否正确
            if(I('post.yzm') == $manager['randcode']){
                echo 1;
            }else{
                echo 0;
            }
        }
    }

    //判断忘记密码验证码
    public function forget_true(){
        $postphone = I('post.phone');
        $phone = M('user')->field("mobile")->where("mobile = %s",array($postphone))->find();
        $manager  = M('user_code')->field("randcode")->where('mobile = %s',array($postphone))->find();
        if($phone){
            if(I('post.yzm') == $manager['randcode']){
                echo 1;
            }else{
                //验证码不正确
                echo 0;
            }
        }else{
            //没有这个用户
           echo 3;
        }
    }


//    function weixin_code(){
//        $appid = "wx895cf8def7c55e16";
//        $appSecret = '000b24efbd8a7649e5dd86311bce8e0d';
//        
//        redirect($url);
//    }
    function weixin_code($type,$fid){
        $appid = "wx895cf8def7c55e16";
        $appSecret = '000b24efbd8a7649e5dd86311bce8e0d';
        if($type == '1'){
            $url = $this->get_code($appid,"http://h5.weihehuo.net/Home/Login/login/type/".$type.".html");
        }elseif($type == '2'){
            $url = $this->get_code($appid,"http://h5.weihehuo.net/Home/Login/login/type/".$type."/fid/".$fid.".html");
        }else{
            $url = $this->get_code($appid,"http://h5.weihehuo.net/Home/Login/login.html");
        }
        redirect($url);
    }

    function weixin_openid($code,$type,$fid){
        $appid = "wx895cf8def7c55e16";
        $appSecret = '000b24efbd8a7649e5dd86311bce8e0d';
        $url = $this->get_openid($appid,$appSecret,$code);
        $result = json_decode(file_get_contents($url));
        $openid = $result->openid;
        $arr = array('openid'=>$openid,'type'=>$type,'fid'=>$fid);
        return $arr;
    }

    function get_code($appid,$redirecturl,$scope='snsapi_base'){
        $redirecturl = urlencode($redirecturl);
        $url ="https://open.weixin.qq.com/connect/oauth2/authorize?appid=".$appid."&redirect_uri=".$redirecturl."&response_type=code&scope=snsapi_base&state=123#wechat_redirect";
        return $url;
    }

    function get_openid($appid,$appSecret,$code){
        return $url = "https://api.weixin.qq.com/sns/oauth2/access_token?appid=".$appid."&secret=".$appSecret."&code=".$code."&grant_type=authorization_code";
    }
}

