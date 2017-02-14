<?php
/**
 *
 * 版权所有：恰维网络<qwadmin.qiawei.com>
 * 作    者：寒川<hanchuan@qiawei.com>
 * 日    期：2016-09-20
 * 版    本：1.0.0
 * 功能说明：文章控制器。
 *
 **/

namespace Qwadmin\Controller;

use Vendor\Tree;

class UserController extends ComController
{

    public function add()
    {
        $this->display('form');
    }

    public function index($uid = 0,$p = 1,$type=1)
    {
        $p = intval($p) > 0 ? $p : 1;
        $model = M('user','whh_');
        $pagesize = 20;#每页数量
        $offset = $pagesize * ($p - 1);//计算记录偏移量

        if(I('get.type')){
            $type = I('get.type');
        }elseif(I('post.type')){
            $type = I('post.type');
        }else{
            $type = 1;
        }
        $where = "a.user_type = ".$type;

        $mobile = I('post.mobile');
        if($mobile){
            $where .= " and a.mobile = ".$mobile;
        }
        $company = I('post.company');
        if($company){
            $where .= " and a.company like '%$company%'";
        }
        $work = I('post.work');
        if($work){
            $where .= " and a.work like '%$work%'";
        }

        $count = $model->alias("a")->where($where)->count();
        $list = $model
            ->alias("a")
            ->field("a.id,a.mobile,a.realname,a.sex,a.birthday,a.idcard,a.company,a.work,a.user_type,a.balance,b.app_card")
            ->join("left join whh_user_extend as b ON a.id = b.uid")
            ->where($where)
            ->order("a.id desc")
            ->limit($offset . ',' . $pagesize)
            ->select();

        $page = new \Think\Page($count, $pagesize);
        $page = $page->show();
        $this->assign('type',$type);
        $this->assign('list', $list);
        $this->assign('page', $page);
        $this->display();
    }

    public function del()
    {

        $aids = isset($_REQUEST['uid']) ? $_REQUEST['uid'] : false;
        if ($aids) {
            if (is_array($aids)) {
                $aids = implode(',', $aids);
                $map['id'] = array('in', $aids);
                $map_extend['uid'] = array('in',$aids);
            } else {
                $map = 'id=' . $aids;
                $map_extend = 'uid=' . $aids;
            }
            $model =  M('user_extend','whh_');
            $app_card = $model->field("app_card")->where("uid = %d",array($aids))->find();
            $del = M('user','whh_')->where($map)->delete();
            $del_extend = $model->where($map_extend)->delete();
            $del_url = unlink($app_card['app_card']);
            if ($del_url) {
                addlog('删除文章，UID：' . $aids);
                $this->success('恭喜，用户删除成功！');
            } else {
                $this->error('参数错误！');
            }
        } else {
            $this->error('参数错误！');
        }

    }

    public function edit($uid)
    {
        $uid = intval($uid);
        $article = M('user','whh_')
            ->alias("a")
            ->field("a.id,a.mobile,a.realname,a.sex,a.birthday,a.idcard,a.company,a.work,a.user_type,a.balance,b.app_card")
            ->join("left join whh_user_extend as b ON a.id = b.uid")
            ->where('id=' . $uid)
            ->find();
        $this->assign('article',$article);
        $this->display('form');
    }

    public function update($uid = 0)
    {
        $uid = intval($uid);
        $data['user_type'] = isset($_POST['user_type']) ? intval($_POST['user_type']) : false;
        $data['mobile'] = isset($_POST['mobile']) ? $_POST['mobile'] : false;
        $data['realname'] = isset($_POST['realname']) ? $_POST['realname'] : false;
        $data['idcard'] = isset($_POST['idcard']) ? $_POST['idcard'] : false;
        $data['company'] = isset($_POST['company']) ? $_POST['company'] : '';
        $data['work'] = isset($_POST['work']) ? $_POST['work'] : '';
        $data['sex'] = isset($_POST['sex']) ? $_POST['sex'] : 0;
        $data['birthday'] = isset($_POST['birthday']) ? $_POST['birthday'] : '';
        $data['balance'] = 0;
        $data['create_time'] = time();

        if($_FILES['app_card']['error'] == 0){
            $a = array_keys($_FILES);
            $key_name = $a['0'];
            $extend_card = $this->uploads($key_name);
        }
        if (!$data['user_type'] or !$data['mobile'] or !$data['realname'] or !$data['idcard']) {
            $this->error('警告！用户类型、手机号及真实姓名和身份证号为必填项目。');
        }
        if ($uid){
            M('user','whh_')->data($data)->where('id=' . $uid)->save();
            $card_url = M('user_extend','whh_')->field("app_card")->where("uid = %d",array($uid))->find();
            if($extend_card){
                $extend_add = M('user_extend','whh_')->where("uid = %d",array($uid))->save(array('app_card'=>$extend_card));
                unlink($card_url['app_card']);
            }
            addlog('编辑用户，UID：' . $uid);
            $this->success('恭喜！用户编辑成功！',U('index'));
        } else {
            $add = M('user','whh_')->add($data);
            $uid = M('user','whh_')->getLastInsID();
            $extend_add = M('user_extend','whh_')->data(array('app_card'=>$extend_card,'uid'=>$uid))->add();
            if ($extend_add) {
                addlog('新增用户，UID：' . $uid);
                $this->success('恭喜！用户添加成功！',U('index'));
            } else {
                $this->error('抱歉，未知错误！');
            }
        }
    }

    //上传pdf方法'
    function uploads($path){
        $upload =new \Think\Upload();;// 实例化上传类
        $upload->maxSize   =     3145728 ;// 设置附件上传大小
        $upload->exts      =     array('jpg', 'gif', 'png', 'jpeg');// 设置附件上传类型
        $upload->savePath  =     $path."/";
        $txt_name = $_FILES[$path]['name'];
        $info   =   $upload->upload();
        $img = "./Public/".$info[$path]['savepath'].$info[$path]['savename'];
        if(!$info) {// 上传错误提示错误信息
            $this->error($upload->getError());
        }else{// 上传成功
            return $img;
        }
    }
}