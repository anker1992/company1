<?php
namespace Home\Controller;
use Think\Controller;
class WeixinController extends Controller {
    public function register_weixin(){
        $this->display();
    }

    public function register_weixin_add(){
        $this->display();
    }

    public function register_add(){
        $data = array(
            'kuhu_name' => I('post.username'),
            'kehu_sex' => I('post.sex'),
            'kehu_phone' => I('post.phone'),
            'kehu_password' => I('post.password'),
            'kehu_company' => I('post.company'),
            'kehu_job' => I('job'),
            'kehu_yx' => I('yixang'),
            'link' => I('link'),
            'register_way' => '微信',
            'kehu_date' => date('Y-m-d H:i:s')
        );
        $model = M('kehu');
        $result = $model->field("kehu_id")->where("kehu_phone = %s",array($data['kehu_phone']))->find();
        if($result){
            $this->error("该手机号已注册");
        }else{
            $add = $model->add($data);
            if($add){
                $this->success('注册成功',U('Index/index'));
            }else{
                $this->error('注册失败');
            }
        }
    }
}