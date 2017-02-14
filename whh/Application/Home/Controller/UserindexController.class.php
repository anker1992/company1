<?php
namespace Home\Controller;
use Think\Controller;
class UserindexController extends Controller {
    //个人中心
    public function userCenter($token=0){
        //echo $token;die;
        if(!$token){
            $this->error("参数错误");
        }else{
            $uid = encrypt($token,'D');
            $model = M('user');
            $user = $model
                ->alias("a")
                ->field("a.id,a.user_logo,a.realname,a.user_type,a.company,a.balance,b.my_follow_num,b.app_yue_num")
                ->join("left join whh_user_extend as b ON a.id = b.uid")
                ->where("a.id = %d",array($uid))
                ->find();
            if(!empty($user['user_type'])){
                if($user){
                    if($user['user_type'] == '3'){
                        $this->redirect('Login/selectIdentity',array('token'=>$token));
                    }else{
                        $this->assign('user',$user);
                        $this->display();
                    }
                }else{
                    $this->error("没有该用户");
                }
            }else{
                $this->redirect('Login/selectIdentity',array('token'=>$token));
            }
            
        }
    }

    //编辑信息页面
    public function personalInfo($token=0){
        if(!$token){
            $this->error("参数错误");
        }else{
            $uid = encrypt($token,'D');
            $model = M('user');
            $user = $model
                ->alias("a")
                ->field("a.id,a.user_logo,a.mobile,a.realname,a.user_type,a.company,a.sex,a.introduce,a.birthday,a.work")
                ->where("a.id = %d",array($uid))
                ->find();
            if($user){
                $this->assign('user',$user);
                $this->display();
            }else{
                $this->error("没有该用户");
            }
        }
    }

    //修改资料
    public function personalInfo_save(){
        $uid = I('post.uid');
        $token = I('post.token');

        if(I('post.realname'))$arr['realname'] = I('post.realname');
        if(I('post.company'))$arr['company'] = I('post.company');
        if(I('post.sex'))$arr['sex'] = I('post.sex');
        if(I('post.birthday'))$arr['birthday'] = I('post.birthday');
        if(I('post.work'))$arr['work'] = I('post.work');
        if(I('post.introduce'))$arr['introduce'] = I('post.introduce');

        $model = M('user');
        $user = $model->where("id = %d",array($uid))->save($arr);
        $this->redirect('userCenter',array('token'=>$token));
    }

    //上传头像
    public function add_user_logo(){
        $base_img = I('post.src');
        $uid = I('post.uid');
        $url = explode(',',$base_img);
        $path="./Public";
        $path2 = "/Public";
        $path_url = "/userlogo/".date("Y-m-d")."/";
        $dir_path = $this->createdirlist($path.$path_url);
        $img_name = time().$uid.".png";
        file_put_contents($dir_path.$img_name, base64_decode($url[1]));
        $img = $path2.$path_url.$img_name;
        $data = array(
            "user_logo"=> $img
        );
        $last_logo = M('user')->field("user_logo")->where("id = %d",array($uid))->find();
        $result = M('user')->where("id = %d",array($uid))->save($data);
        //若上传成功，则删除原来头像文件
        if($result){
            if($last_logo){
                unlink(".".$last_logo['user_logo']);
            }
        }
    }

    //我的约见
    public function appointments($token = 0)
    {
        if (!$token) {
            $this->error('参数错误');
        } else {
            $uid = encrypt($token,"D");
            $model = M('appointment');
            $invest = $model
                ->alias("a")
                ->field('b.inv_id,b.inv_name,b.inv_in_company,b.inv_type,b.inv_logo')
                ->where("launch_id = '%d' and accept_paystatus = 1 and accept_order_type = 3",array($uid))
                ->join("left join whh_invest as b on a.accept_id = b.inv_id")
                ->select();
            $product = $model
                ->alias('a')
                ->field('b.prod_id,b.prod_name,b.prod_logo,b.prod_rate,b.prod_term,b.prod_money')
                ->where("launch_id = %d and accept_paystatus = 1 and accept_order_type = 2",array($uid))
                ->join("left join whh_product as b on a.accept_id = b.prod_id")
                ->select();
            $project = $model
                ->alias('a')
                ->field('b.proj_id,b.proj_logo,b.proj_name,b.proj_ject,b.proj_area,b.proj_round,b.proj_money')
                ->where("launch_id = %d and accept_paystatus = 1 and accept_order_type = 1",array($uid))
                ->join("left join whh_project as b on a.accept_id = b.proj_id")
                ->select();
            $this->assign('project',$project);
            $this->assign('product',$product);
            $this->assign('invest',$invest);
            $this->display();
        }
    }

    //收藏项目
    public function collectProject($token = 0)
    {
        if (!$token) {
            $this->error("参数错误");
        } else {
            $uid = encrypt($token,'D');
            $model = M('follow');
            $list = $model
                ->field('he_id')
                ->where("my_id = %d and follow_type = '1'",array($uid))
                ->select();
            if (!empty($list)) {
                foreach ($list as $key=>$value) {
                    $ids[] = $value['he_id'];
                }
                $ids = implode(',',$ids);
                $map['proj_id'] = array('in',$ids);
                $data = M('project')
                    ->field('proj_id,proj_name,proj_logo,proj_ject,proj_industry,proj_round,proj_money,proj_status')
                    ->where($map)
                    ->order("proj_status asc,proj_id desc")
                    ->select();
                $this->assign('data',$data);
            }
            $this->display();
        }
    }

    //产品收藏
    public function collectProduct($token = 0)
    {
        if (!$token) {
            $this->error("参数错误");
        } else {
            $uid = encrypt($token,'D');
            $model = M('follow');
            $list = $model
                ->field('he_id')
                ->where("my_id = '%d' and follow_type = '2'",array($uid))
                ->select();
            if (!empty($list)) {
                foreach ($list as $key=>$value) {
                    $ids[] = $value['he_id'];
                }
                $ids = implode(',',$ids);
                $map['prod_id'] = array('in',$ids);
                $data = M('product')
                    ->field('prod_id,prod_name,prod_logo,prod_rate,prod_term,prod_money,prod_status')
                    ->where($map)
                    ->order("prod_status asc, prod_id desc")
                    ->select();
                $this->assign('data',$data);
            }
            $this->display();
        }
    }

    //投资人
    public function collectInvest($token = 0)
    {
        if (!$token) {
            $this->error("参数错误");
        } else {
            $uid = encrypt($token,'D');
            $model = M('follow');
            $list = $model
                ->field('he_id')
                ->where("my_id = '%d' and follow_type = '3'",array($uid))
                ->select();
            if (!empty($list)) {
                foreach ($list as $key=>$value) {
                    $ids[] = $value['he_id'];
                }
                $ids = implode(',',$ids);
                $map['inv_id'] = array('in',$ids);
                $data = M('invest')
                    ->field('inv_id,inv_name,inv_logo,inv_in_company,inv_type,inv_status')
                    ->order("inv_status asc,inv_id desc")
                    ->where($map)
                    ->select();
                $this->assign('data',$data);
            }
            $this->display();
        }
    }

    //需求页面
    public function myneeds($token = 0){
        if (!$token) {
            $this->error("参数错误");
        } else {
            $uid = encrypt($token,'D');
            $model = M('user_extend');

            $my_needs = $model->field("proj_my_needs")->where("uid = '%d'",array($uid))->find();
            $need_list = M('my_needs')->select();
            $arr = explode(',',$my_needs['proj_my_needs']);
            $new_arr = array_flip($arr);

            foreach($need_list as $k=>$v){
                if(array_key_exists($v['need_name'],$new_arr)){
                    $a['status'] = '1';
                }else{
                    $a['status'] = '0';
                }
                $new_list[] = array_merge_recursive($v,$a);
            }
            $this->assign('list',$new_list);
            $this->display();
        }
    }
    
    //我的需求
    public function needs($token = 0){
        if (!$token) {
            $this->error("参数错误");
        } else {
            $uid = encrypt($token,'D');
            $needs = I('post.needs');
            $var = implode(',',$needs);

            $model = M('user_extend');
            $my_needs = $model->where("uid = '%d'",array($uid))->save(array("proj_my_needs"=>$var));
            if($my_needs){
                $this->redirect('userCenter',array('token'=>$token));
            }
        }
    }


    //时间目录
    function createdirlist($path){
        if(!is_dir($path)) //检测变量中的文件夹是否存在，如果存在，删除
        {
            mkdir($path,0777);         //创建文件夹
        }
        return $path;
    }

}