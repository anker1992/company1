<?php
namespace Qwadmin\Controller;
use Vendor\Tree;
class ProjectController extends ComController
{
    //项目库列表
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
        $article = M('whh_project',null);
        $pagesize = 15;#每页数量
        $offset = $pagesize * ($p - 1);//计算记录偏移量
        $arr = array(
            'proj_phone' => I('post.proj_phone')?I('post.proj_phone'):I('get.proj_phone'),
            'proj_name' => I('post.proj_name')?I('post.proj_name'):I('get.proj_name'),
            'proj_type' => I('post.proj_type')?I('post.proj_type'):I('get.proj_type'),
            'proj_industry' => I('post.proj_industry')?I('post.proj_industry'):I('get.proj_industry'),
            'proj_round' => I('post.proj_round')?I('post.proj_round'):I('get.proj_round')
        );
        if (I('post.proj_type') == '不限') $arr['proj_type'] = '';
        if (I('post.proj_industry') == '不限') $arr['proj_industry'] = '';
        if (I('post.proj_round') == '不限') $arr['proj_round'] = '';
        $where = '1=1 ';
        if($arr['proj_phone']) $where .= " and proj_phone = ".$arr['proj_phone']."";
        if ($arr['proj_name']) $where .= " and proj_name like '%".$arr['proj_name']."%'";
        if ($arr['proj_type']) $where .= " and proj_type = '".$arr['proj_type']."'";
        if ($arr['proj_industry']) $where .= " and proj_industry = '".$arr['proj_industry']."'";
        if ($arr['proj_round']) $where .= " and proj_round = '".$arr['proj_round']."'";
        $count = $article->alias("a")->where($where)->count();
        $list = $article
            ->alias("a")
            ->field("a.proj_id,a.proj_uid,a.proj_phone,a.proj_name,a.proj_type,a.proj_url,a.proj_logo,a.proj_industry,a.proj_ceo_name,a.proj_ject,a.proj_round,a.proj_money,a.proj_yue_time,a.proj_yue_money,a.proj_yue_address,a.proj_pdf,a.proj_status")
            ->where($where)
            ->limit($offset . ',' . $pagesize)
            ->order("proj_status asc,proj_id desc")
            ->select();
        $page = new \Think\Page($count, $pagesize,$arr);
        $page = $page->show();
        $this->assign('list', $list);
        $this->assign('page', $page);
        $this->display();
    }
    //项目库添加
    public function add()
    {
        $this->display('form');
    }

    //项目库修改
    public function edit()
    {
        $proj_id = I('get.proj_id');
        $list = M('whh_project',null)
            ->field('proj_id,proj_phone,proj_name,proj_logo,proj_yue_money,proj_money,proj_round,proj_industry,proj_type,proj_ject,proj_ceo_name,proj_ceo_logo,proj_ceo_position,proj_ceo_introduce,proj_url,proj_yue_time,proj_yue_address,proj_pdf')
            ->where('proj_id = %d',array($proj_id))
            ->find();
        $this->assign('proj_id',$proj_id);
        $this->assign('list',$list);
        $this->display('form');
    }

    //添加/修改项目库
    public function update()
    {
        header("Content-Type:text/html;Charset=utf-8");
        $proj_id = I('post.proj_id');
        $proj_phone = I('post.proj_phone');
        $proj_name = I('post.proj_name');
        if(empty($proj_name))$this->error('项目名称不能为空');
        if (I('post.proj_phone'))$list['proj_phone'] = I('post.proj_phone');
        if (I('post.proj_name'))$list['proj_name'] = I('post.proj_name');
        if (I('post.proj_yue_money'))$list['proj_yue_money'] = I('post.proj_yue_money');
        if (I('post.proj_money'))$list['proj_money'] = I('post.proj_money');
        if (I('post.proj_round'))$list['proj_round'] = I('post.proj_round');
        if (I('post.proj_area'))$list['proj_area'] = I('post.proj_area');
        if (I('post.proj_industry'))$list['proj_industry'] = I('post.proj_industry');
        if (I('post.proj_type'))$list['proj_type'] = I('post.proj_type');
        if (I('post.proj_ject'))$list['proj_ject'] = I('post.proj_ject');
        if (I('post.proj_ceo_name'))$list['proj_ceo_name'] = I('post.proj_ceo_name');
        if (I('post.proj_ceo_position'))$list['proj_ceo_position'] = I('post.proj_ceo_position');
        if (I('post.proj_ceo_introduce'))$list['proj_ceo_introduce'] = I('post.proj_ceo_introduce');
        if (I('post.proj_url'))$list['proj_url'] = I('post.proj_url');
        if (I('post.proj_yue_time'))$list['proj_yue_time'] = I('post.proj_yue_time');
        if (I('post.proj_yue_address'))$list['proj_yue_address'] = I('post.proj_yue_address');
        //图片上传/商业计划书上传
        foreach ($_FILES as $key=>$value) {
            if($value['error'] == 0){
                $type = $_FILES[$key]['type'];
                if($key == 'proj_pdf'){
                    $list['proj_pdf'] = $this->pdf_uploads($type,$key);
                }elseif ($key == 'proj_logo') {
                    $list['proj_logo'] = $this->upload($type,$key);
                } elseif ($key == 'proj_ceo_logo') {
                    $list['proj_ceo_logo'] = $this->upload($type,$key);
                }
            }
        }
        $logo = M('whh_project',null)->field('proj_logo,proj_ceo_logo,proj_pdf')->where('proj_id = %d',array($proj_id))->find();
        $data = M('project','whh_')->where("proj_phone = '%s' and proj_name = '%s'",array($list['proj_phone'],$list['proj_name']))->find();
        if ($proj_id) {
            $result = M('whh_project',null)->where('proj_id = %d',array($proj_id))->save($list);
            if ($result) {
                if ($list['proj_logo']) unlink($logo['proj_logo']);
                if ($list['proj_ceo_logo']) unlink($logo['proj_ceo_logo']);
                if ($list['proj_pdf']) unlink($logo['proj_pdf']);
                $this->success('项目修改成功！',U('index'));
            } else {
                $this->error('sorry,项目修改失败');
            }
        } else {
            if ($proj_phone) {
                if ($data) $this->error('项目库已有该项目，请勿重复添加！');
                $uid = M('whh_user',null)->field('id,user_type')->where('mobile = %s',array($proj_phone))->find();
                $list['proj_uid'] = $uid['id'];
                if (!$list['proj_uid']) {
                    $this->error('没有该手机号的用户，请添加该用户！');
                } elseif ($uid['user_type'] == 2) {
                    $this->error('该用户是投资人，请更换手机号！');
                } else {
                    $result = M('whh_project',null)->add($list);
                    if ($result) {
                        //修改用户的身份类型为项目人
                        if ($uid['user_type'] == 3) {
                            $status['user_type'] = 1;
                            M('user','whh_')->where('mobile = %s',array($list['proj_phone']))->save($status);
                        }
                        $this->success('项目添加成功！',U('index'));
                    } else {
                        $this->error('sorry,项目添加失败');
                    }
                }
            } else {
                $this->error('请填写手机号！');
            }
        }
    }

    //删除项目
    public function del()
    {
        $ids = isset($_REQUEST['proj_ids']) ? $_REQUEST['proj_ids'] : false;
        if ($ids) {
            if (is_array($ids)) {
                $aids = implode(',', $ids);
                $map['proj_id'] = array('in', $aids);
                $logo = M('whh_project',null)->field('proj_logo,proj_ceo_logo,proj_pdf')->where($map)->select();
            } else {
                $map = 'proj_id = ' . $ids;
                $logo[] = M('whh_project',null)->field('proj_logo,proj_ceo_logo,proj_pdf')->where("proj_id = %d",array($ids))->find();
            }
            if (M('whh_project',null)->where($map)->delete()) {
                foreach ($logo as $val) {
                    unlink($val['proj_logo']);
                    unlink($val['proj_pdf']);
                    unlink($val['proj_ceo_logo']);
                }
                addlog('删除项目，ID：' . $ids);
                $this->success('恭喜，项目删除成功！');
            } else {
                $this->error('项目删除失败！');
            }
        } else {
            $this->error('删除错误！');
        }
    }

    //上架 下架
    public function recycle()
    {
        $proj_id = I('get.proj_id');
        $status = I('get.status');
        if ($status == 1) {
            $data['proj_status'] = 1;
            $result = M('whh_project',null)->where('proj_id = %d',array($proj_id))->save($data);
            if ($result) {
                $this->success('上架成功！');
            } else {
                $this->error('上架失败');
            }
        }
        if ($status == 2) {
            $data['proj_status'] = 2;
            $result = M('whh_project',null)->where('proj_id = %d',array($proj_id))->save($data);
            if ($result) {
                $this->success('下架成功！');
            } else {
                $this->error('下架失败');
            }
        }
    }

    //下载文件
    public function downfile()
    {
        header("Content-Type:text/html;Charset=utf-8");
        $path = I('get.proj_pdf');
        if (!$path) $this->error('该项目未上传计划书',U('Index'));
        $this->download($path);
    }

    //下载pdf方法
    function download($file_url,$new_name=''){
        if(!isset($file_url)||trim($file_url)==''){
            echo '500';
        }
        if(!file_exists($file_url)){ //检查文件是否存在
            echo '404';
        }
        $file_name=basename($file_url);
        $file_type=explode('.',$file_url);
        $file_type=$file_type[count($file_type)-1];
        $file_name=trim($new_name=='')?$file_name:urlencode($new_name);
        $file_type=fopen($file_url,'r'); //打开文件
        //输入文件标签
        header("Content-type: application/octet-stream");
        header("Accept-Ranges: bytes");
        header("Accept-Length: ".filesize($file_url));
        header("Content-Disposition: attachment; filename=".$file_name);
        //输出文件内容
        echo fread($file_type,filesize($file_url));
        fclose($file_type);
    }

    //上传pdf方法
    //$path 上传到指定路径
    function pdf_uploads($type,$path){
        if($type != 'image/jpeg' && $type !='image/bmp' && $type != 'image/png' && $type != 'image/gif'){
            $upload = new \Think\Upload();// 实例化上传类
            $upload->maxSize   =     3145728 ;// 设置附件上传大小
            $upload->exts      =     array('pdf', 'doc', 'docx');// 设置附件上传类型
            $upload->savePath  =     'project/'.$path."/";
            $txt_name = $_FILES[$path]['name'];
            $info   =   $upload->upload();
            $img = "./Public/".$info[$path]['savepath'].$info[$path]['savename'];
            if(!$info) {// 上传错误提示错误信息
                $this->error($upload->getError());
            }else{// 上传成功
                return $img;
            }
        } else {
            $this->error('文件格式不正确，请确认后上传');
        }
    }

    //上传图片
    function upload($type,$name){
        if($type == 'image/jpeg' || $type = 'image/bmp' || $type == 'image/png' || $type == 'image/gif') {
            $upload = new \Think\Upload();// 实例化上传类
            $upload->maxSize   =     3145728 ;// 设置附件上传大小
            $upload->exts      =     array('jpg', 'gif', 'png', 'jpeg','bmp');// 设置附件上传类型
            $upload->savePath = 'project/'.$name . '/'; // 设置附件上传（子）目录
            $info   =   $upload->uploadOne($_FILES[$name]);
            $img = "./Public/".$info['savepath'].$info['savename'];
            if(!$info) {// 上传错误提示错误信息
                $this->error($upload->getError());
            }else{// 上传成功
                return $img;
            }
        } else {
            $this->error('图片格式不正确，请确认后上传');
        }
    }

}