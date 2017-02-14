<?php
namespace Home\Controller;
use Think\Controller;
class CeshiController extends Controller {


    //登陆页面
    public function weixin()
    {
        $openid = session('openid');
        if($openid){
            echo "usercenter";die;
        }else{
            $code = $_GET['code'];
            if($code){
                $openid = $this->weixin_openid($code);
                session('openid',$openid);
                echo "login";die;
            }else{
                $openid = $this->weixin_code();
            }
        }

        die;
        $code = $_GET['code'];
        if($code){
            $openid = $this->weixin_openid($code);
            session('openid',$openid);
        }else{
            $openid = $this->weixin_code();
        }
        echo 2;die;
        //$model = M('user');
        //$open_id = $model->where("")->find();
    }

    function weixin_code(){
        $appid = "wx14d496886a1fb891";
        $appSecret = 'c7b039d82b5cd6b276c20a00b809e599';
        $url = $this->get_code($appid,"http://www.wearebanker.net/Home/Ceshi/weixin.html");
        redirect($url);
    }

    function weixin_openid($code){
        $appid = "wx14d496886a1fb891";
        $appSecret = 'c7b039d82b5cd6b276c20a00b809e599';
        $url = $this->get_openid($appid,$appSecret,$code);
        $result = json_decode(file_get_contents($url));
        $openid = $result->openid;
        return $openid;
//        $model = M('user');
//        $is_login = $model->field("openid,phone,id")->where("openid = %s",array($openid))->find();
//        $add = M('user')->where("phone = '%s' and password = '%s' and token = '%s' ",array($data['phone'],$password,$token))
////                    ->save($list);
//        if($is_login){
//            $this->display('WxUser/userCenter',array('open_id'=>$is_login['openid'],'uid'=>$is_login['id'],'phone'=>$is_login['phone']));
//        }else{
//            $this->display('WxUser/login');
//        }
    }

    function get_code($appid,$redirecturl,$scope='snsapi_base'){
        $redirecturl = urlencode($redirecturl);
        $url ="https://open.weixin.qq.com/connect/oauth2/authorize?appid=".$appid."&redirect_uri=".$redirecturl."&response_type=code&scope=snsapi_base&state=123#wechat_redirect";
        return $url;

        //return json_decode(file_get_contents($url));
    }

    function get_openid($appid,$appSecret,$code){
        return $url = "https://api.weixin.qq.com/sns/oauth2/access_token?appid=".$appid."&secret=".$appSecret."&code=".$code."&grant_type=authorization_code";
    }
}