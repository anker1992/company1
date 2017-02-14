<?php
namespace Qwadmin\Controller;
use Vendor\Tree;
class InvestController extends ComController
{
    //投资方库列表
    public function index($sid = 0, $p = 1)
    {
        if(I('get.p')){
            $p = I('get.p');
        }elseif(I('post.p')){
            $p = I('post.p');
        }else{
            $p = 1;
        }
        header("Content-Type:text/html;Charset=utf-8");
        $article = M('whh_invest',null);
        $pagesize = 15;#每页数量
        $offset = $pagesize * ($p - 1);//计算记录偏移量
        $arr = array(
            'inv_phone' => I('post.inv_phone')?I('post.inv_phone'):I('get.inv_phone'),
            'inv_name' => I('post.inv_name')?I('post.inv_name'):I('get.inv_name'),
            'inv_min_money' => I('post.inv_min_money')?I('post.inv_min_money'):I('get.inv_min_money'),
            'inv_field' => I('post.inv_field')?I('post.inv_field'):I('get.inv_field'),
            'inv_in_company' => I('post.inv_in_company')?I('post.inv_in_company'):I('get.inv_in_company')
        );
        $where = '1=1 ';
        if($arr['inv_phone']) $where .= " and inv_phone = ".$arr['inv_phone']."";
        if ($arr['inv_name']) $where .= " and inv_name like '%".$arr['inv_name']."%'";
        if ($arr['inv_min_money']) $where .= " and inv_min_money >= '".$arr['inv_min_money']."'";
        if ($arr['inv_field']) $where .= " and inv_field like '%".$arr['inv_field']."%'";
        if ($arr['inv_in_company']) $where .= " and inv_in_company like '%".$arr['inv_in_company']."%'";
        $count = $article->alias("a")->where($where)->count();
        $list = $article
            ->alias("a")
            ->field("a.inv_id,a.inv_uid,a.inv_phone,a.inv_name,a.inv_type,a.inv_field,a.inv_logo,a.inv_min_money,a.inv_max_money,a.inv_logo_one,
                a.inv_logo_two,a.inv_company_one,a.inv_company_two,a.inv_in_company,a.inv_in_logo,a.inv_in_com,a.inv_yue_money,a.inv_yue_time,a.inv_yue_address,a.inv_status")
            ->where($where)
            ->limit($offset . ',' . $pagesize)
            ->order("inv_status asc,inv_id desc")
            ->select();
        $page = new \Think\Page($count, $pagesize,$arr);
        $page = $page->show();
        $this->assign('list', $list);
        $this->assign('page', $page);
        $this->display();
    }
    //投资方库添加
    public function add()
    {
        $this->display('form');
    }

    //投资方库修改
    public function edit()
    {
        $inv_id = I('get.inv_id');
        $list = M('whh_invest',null)
            ->field('inv_id,inv_phone,inv_name,inv_logo,inv_yue_money,inv_type,inv_field,inv_min_money,inv_max_money,inv_logo_one,inv_logo_two,
            inv_company_one,inv_company_two,inv_in_company,inv_in_logo,inv_in_com,inv_yue_time,inv_yue_address')
            ->where('inv_id = %d',array($inv_id))
            ->find();
        $this->assign('inv_id',$inv_id);
        $this->assign('list',$list);
        $this->display('form');
    }

    //添加/修改投资方库
    public function update()
    {
        header("Content-Type:text/html;Charset=utf-8");
        $inv_id = I('post.inv_id');
        if (I('post.inv_phone')) $list['inv_phone'] = I('post.inv_phone');
        if (I('post.inv_name')) $list['inv_name'] = I('post.inv_name');
        if (!$list['inv_name']) $this->error('真实姓名不能为空！');
        if (I('post.inv_yue_money')) $list['inv_yue_money'] = I('post.inv_yue_money');
        if (I('post.inv_in_company')) $list['inv_in_company'] = I('post.inv_in_company');
        if (I('post.inv_in_com')) $list['inv_in_com'] = I('post.inv_in_com');
        if (I('post.inv_type')) $list['inv_type'] = I('post.inv_type');
        if (I('post.inv_field')) $list['inv_field'] = I('post.inv_field');
        if (I('post.inv_min_money')) $list['inv_min_money'] = I('post.inv_min_money');
        if (I('post.inv_max_money')) $list['inv_max_money'] = I('post.inv_max_money');
        if (I('post.inv_company_one')) $list['inv_company_one'] = I('post.inv_company_one');
        if (I('post.inv_company_two')) $list['inv_company_two'] = I('post.inv_company_two');
        if (I('post.inv_yue_time')) $list['inv_yue_time'] = I('post.inv_yue_time');
        if (I('post.inv_yue_address')) $list['inv_yue_address'] = I('post.inv_yue_address');
        //图片上传
        foreach ($_FILES as $key=>$value) {
            if($value['error'] == 0){
                if($key == 'inv_in_logo'){
                    $list['inv_in_logo'] = $this->upload($key);
                } elseif ($key == 'inv_logo') {
                    $list['inv_logo'] = $this->upload($key);
                } elseif ($key == 'inv_logo_one') {
                    $list['inv_logo_one'] = $this->upload($key);
                } elseif ($key == 'inv_logo_two') {
                    $list['inv_logo_two'] = $this->upload($key);
                }
            }
        }
        $logo = M('whh_invest',null)->field('inv_logo,inv_in_logo,inv_logo_one,inv_logo_two')->where('inv_id = %d',array($inv_id))->find();
        $data = M('whh_invest',null)->field("inv_phone")->where("inv_phone = '%s'",array($list['inv_phone']))->find();
        if (!$inv_id) {
            if ($list['inv_phone']) {
                if ($data) {
                    $this->error('投资方库已有该投资人，请勿重复添加！');
                }
                $uid = M('whh_user', null)->field('uid,user_type')->where("mobile = '%s'", array($list['inv_phone']))->find();
                $list['inv_uid'] = $uid['uid'];
                if (!$list['inv_uid']) {
                    $this->error('没有该手机号的用户，请添加该用户！');
                } elseif ($uid['user_type'] == 1) {
                    $this->error('该用户是项目人，请更换手机号！');
                } else {
                    $result = M('whh_invest',null)->add($list);
                    if ($result) {
                        //修改用户的身份类型为投资人
                        if ($uid['user_type'] == 3) {
                            $status['user_type'] = 2;
                            M('user','whh_')->where("mobile = '%s'",array($list['inv_phone']))->save($status);
                        }
                        $this->success('投资人添加成功！',U('index'));
                    } else {
                        $this->error('sorry,投资人添加失败');
                    }
                }
            } else {
                $this->error('请填写手机号！');
            }
        } else {
            $result = M('whh_invest',null)->where('inv_id = %d',array($inv_id))->save($list);
            if ($result) {
                if ($list['inv_logo']) unlink($logo['inv_logo']);
                if ($list['inv_in_logo']) unlink($logo['inv_in_logo']);
                if ($list['inv_logo_one']) unlink($logo['inv_logo_one']);
                if ($list['inv_logo_two']) unlink($logo['inv_logo_two']);
                $this->success('投资人修改成功！',U('index'));
            } else {
                $this->error('sorry,投资人修改失败');
            }
        }
    }

    //删除投资方
    public function del()
    {
        $ids = isset($_REQUEST['inv_ids']) ? $_REQUEST['inv_ids'] : false;
        if ($ids) {
            if (is_array($ids)) {
                $aids = implode(',', $ids);
                $map['inv_id'] = array('in', $aids);
                $logo = M('whh_invest',null)->field('inv_logo,inv_in_logo,inv_logo_one,inv_logo_two')->where($map)->select();
            } else {
                $map = 'inv_id = ' . $ids;
                $logo[] = M('whh_invest',null)->field('inv_logo,inv_in_logo,inv_logo_one,inv_logo_two')->where("inv_id = %d",array($ids))->find();
            }
            if (M('whh_invest',null)->where($map)->delete()) {
                foreach ($logo as $val) {
                    unlink($val['inv_logo']);
                    unlink($val['inv_in_logo']);
                    unlink($val['inv_logo_one']);
                    unlink($val['inv_logo_two']);
                }
                addlog('删除投资方，ID：' . $ids);
                $this->success('恭喜，投资人删除成功！');
            } else {
                $this->error('投资人删除失败！');
            }
        } else {
            $this->error('删除错误！');
        }
    }

    //上架 下架
    public function recycle()
    {
        $inv_id = I('get.inv_id');
        $status = I('get.status');
        if ($status == 1) {
            $data['inv_status'] = 1;
            $result = M('whh_invest',null)->where('inv_id = %d',array($inv_id))->save($data);
            if ($result) {
                $this->success('上架成功！');
            } else {
                $this->error('上架失败');
            }
        }
        if ($status == 2) {
            $data['inv_status'] = 2;
            $result = M('whh_invest',null)->where('inv_id = %d',array($inv_id))->save($data);
            if ($result) {
                $this->success('下架成功！');
            } else {
                $this->error('下架失败');
            }
        }
    }

    //上传图片
    function upload($name) {
        $upload = new \Think\Upload();// 实例化上传类
        $upload->maxSize   =     3145728 ;// 设置附件上传大小
        $upload->exts      =     array('jpg', 'gif', 'png', 'jpeg','bmp');// 设置附件上传类型
        $upload->savePath = 'invest/'.$name . '/'; // 设置附件上传（子）目录
        $info   =   $upload->uploadOne($_FILES[$name]);
        $img = "./Public/".$info['savepath'].$info['savename'];
        if(!$info) {// 上传错误提示错误信息
            $this->error($upload->getError());
        } else {// 上传成功
            return $img;
        }
    }
}