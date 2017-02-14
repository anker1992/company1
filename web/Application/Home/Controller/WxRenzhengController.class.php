<?php
namespace Home\Controller;
use Think\Controller;
class WxRenzhengController extends Controller
{
    //认证页面模板
    public function certification(){
        $arr = array(
            'phone' => I('get.phone'),
            'uid' => I('get.uid')
        );
        $list = M('wxrenzheng')->where('uid = %d',array($arr['uid']))->find();
        //var_dump($list);die;
        $this->assign('list',$list);
        $this->assign('arr',$arr);
        $this->display();
    }

    //身份证认证
    public function idcard_renzheng(){
        $uid = I('get.uid');
        $phone = I('get.phone');
        //var_dump($_FILES);die;
        $truename = I('post.truename');
        $cardid = I('post.cardid');
        if (!empty($truename)) {
            $data['truename'] = $truename;
        }
        if (!empty($cardid)) {
            $data['cardid'] = $cardid;
        }

//        $data = array(
//            'truename' => I('post.truename'),
//            'cardid'   => I('post.cardid'),
//        );
        if ($_FILES['idzheng']['error'] == 0 | $_FILES['idfan']['error'] == 0) {
            $oldimg= M('wxrenzheng')->field('idzheng,idfan')->where('uid = %d',array($uid))->find();
            $img = $this->photos_upload('idcard');
            if ($img['idzheng']) {
                $data['idzheng'] =$img['idzheng'];
            } else {
                $data['idzheng'] = $oldimg['idzheng'];
            }
            if ($img['idfan']) {
                $data['idfan'] =$img['idfan'];
            } else {
                $data['idfan'] = $oldimg['idfan'];
            }
        }
        //var_dump($data);die;
        $list = M('wxrenzheng')->where('uid = %d',array($uid))->find();
        if ($list) {
            $result = M('wxrenzheng')->where('uid = %s',array($uid))->save($data);
            if ($data['idzheng'] != $oldimg['idzheng']) {
                unlink('.'.$oldimg['idzheng']);
            }
            if ($data['idfan'] != $oldimg['idfan']) {
                unlink('.'.$oldimg['idfan']);
            }
            $this->result($uid,$phone,$result);
        } else {
            $data['uid'] = $uid;
            $result = M('wxrenzheng')->add($data);
            $this->result($uid,$phone,$result);
        }
    }

    //学历认证
    public function edu_renzheng()
    {
        $uid = I('get.uid');
        $phone = I('get.phone');
        $schoolname = I('post.schoolname');
        $education = I('post.education');
        $edunum = I('post.edunum');
        if (!empty($schoolname)) {
            $data['schoolname'] = $schoolname;
        }
        if (!empty($education)) {
            $data['education'] = $education;
        }
        if (!empty($edunum)) {
            $data['edunum'] = $edunum;
        }
//        $data = array(
//            'schoolname' => I('post.schoolname'),
//            'education'  => I('post.education'),
//            'edunum'     => I('post.edunum')
//        );
        $list = M('wxrenzheng')->where('uid = %d',array($uid))->find();
        if ($list) {
            $result = M('wxrenzheng')->where('uid = %s',array($uid))->save($data);
            $this->result($uid,$phone,$result);
        } else {
            $data['uid'] = $uid;
            $result = M('wxrenzheng')->add($data);
            $this->result($uid,$phone,$result);
        }
    }

    //房产认证
    public function house_renzheng()
    {
        $uid = I('get.uid');
        $phone = I('get.phone');
        $img = $this->photos_upload('houseimg');
        //var_dump($img);die;
        $list = M('wxrenzheng')->where('uid = %d',array($uid))->find();
        if ($list) {
            $oldimg = '.'.$list['houseimg'];
            $result = M('wxrenzheng')->where('uid = %s',array($uid))->save($img);
            unlink($oldimg);
            $this->result($uid,$phone,$result);
        } else {
            $img['uid'] = $uid;
            $result = M('wxrenzheng')->add($img);
            $this->result($uid,$phone,$result);
        }
    }

    //车认证
    public function car_renzheng()
    {
        $uid = I('get.uid');
        $phone = I('get.phone');
        $img = $this->photos_upload('carimg');
        //var_dump($img);die;
        $list = M('wxrenzheng')->where('uid = %d',array($uid))->find();
        if ($list) {
            $oldimg = '.'.$list['carimg'];
            $result = M('wxrenzheng')->where('uid = %s',array($uid))->save($img);
            unlink($oldimg);
            $this->result($uid,$phone,$result);
        } else {
            $img['uid'] = $uid;
            $result = M('wxrenzheng')->add($img);
            $this->result($uid,$phone,$result);
        }
    }

    //判断结果
    public function result($uid,$phone,$result)
    {
        if ($result) {
            $this->redirect('WxRenzheng/certification',array('uid'=>$uid,'phone'=>$phone));
        } else {
            $this->error('修改失败',U('WxRenzheng/certification',array('uid'=>$uid,'phone'=>$phone)));
        }
    }

    //上传图片类(多张上传)
    /*
     * $name 是上传图片的名字；$imgpath 是上传文件到指定的imgpath目录;
     */
    function photos_upload($imgpath){
        $phone = I('post.phone');
        $upload = new \Think\Upload();// 实例化上传类
        $upload->maxSize   =     5120000 ;// 设置附件上传大小
        $upload->exts      =     array('jpg', 'gif', 'png', 'jpeg');// 设置附件上传类型
        //$upload->rootPath  =     './Public/'; // 设置附件上传根目录
        //$upload->savePath  =     'Public/manager_user/'.$imgpath.'/'; // 设置附件上传（子）目录
        //$upload->rootPath  =     './Public/'; // 设置附件上传根目录
        $upload->savePath  =     'wx/'.$imgpath.'/';

        //print_R($upload);die;

        //图片名
        //$imgname = $files_name = md5(uniqid(rand())).".jpg";

        $imgname = $_FILES['photos']['name'];
        //print_R($upload->saveName);die;
        //echo $upload->saveName;die;
        //print_r($upload->subName);die;
        $info   =   $upload->upload();
        // var_dump($info);die;
        foreach ($info as $key => $value) {
            $key = $value['key'];
            $img[$key] = "/Public/".$value['savepath'].$value['savename'];
        }
        //var_dump($img);die;
        //$img = "Public/".$info['photos']['savepath'].$info['photos']['savename'];
        if(!$info) {// 上传错误提示错误信息
            $this->error($upload->getError());
        }else{// 上传成功
            return $img;
        }
    }

}