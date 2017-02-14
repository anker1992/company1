<?php
namespace Qwadmin\Controller;
use Vendor\Tree;
class ProductController extends ComController
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
        $article = M('whh_product',null);
        $pagesize = 15;#每页数量
        $offset = $pagesize * ($p - 1);//计算记录偏移量
        $arr = array(
            'prod_phone' => I('post.prod_phone')?I('post.prod_phone'):I('get.prod_phone'),
            'prod_name' => I('post.prod_name')?I('post.prod_name'):I('get.prod_name'),
            'prod_type' => I('post.prod_type')?I('post.prod_type'):I('get.prod_type'),
            'prod_term' => I('post.prod_term')?I('post.prod_term'):I('get.prod_term'),
            'prod_rate' => I('post.prod_rate')?I('post.prod_rate'):I('get.prod_rate')
        );
        if (I('post.prod_type') == '不限') $arr['prod_type'] = '';
        if (I('post.prod_term') == '不限') $arr['prod_term'] = '';
        if (I('post.prod_rate') == '不限') $arr['prod_rate'] = '';
        $where = '1=1 ';
        if ($arr['prod_phone']) $where .= " and prod_phone = ".$arr['prod_phone']."";
        if ($arr['prod_name']) $where .= " and prod_name like '%".$arr['prod_name']."%'";
        if ($arr['prod_type']) $where .= " and prod_type = '".$arr['prod_type']."'";
        if ($arr['prod_term']) $where .= " and prod_term = '".$arr['prod_term']."'";
        if ($arr['prod_rate']) $where .= " and prod_rate = '".$arr['prod_rate']."'";
        $count = $article->alias("a")->where($where)->count();
        $list = $article
            ->field("prod_id,prod_uid,prod_phone,prod_name,prod_type,prod_term,prod_logo,prod_money,prod_rate,prod_cstphone,
                    prod_keeper,prod_trustee,prod_ben_way,prod_describe,prod_details,prod_yue_money,prod_yue_time,prod_yue_address,prod_pdf,prod_status")
            ->where($where)
            ->limit($offset . ',' . $pagesize)
            ->order("prod_status asc,prod_id desc")
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
        $prod_id = I('get.prod_id');
        $list = M('whh_product',null)
            ->field('prod_id,prod_phone,prod_name,prod_logo,prod_yue_money,prod_money,prod_rate,prod_term,prod_type,prod_cstphone,prod_keeper,prod_trustee,prod_ben_way,prod_describe,prod_details,prod_yue_time,prod_yue_address,prod_pdf')
            ->where('prod_id = %d',array($prod_id))
            ->find();
        $this->assign('prod_id',$prod_id);
        $this->assign('list',$list);
        $this->display('form');
    }

    //添加/修改项目库
    public function update()
    {
        header("Content-Type:text/html;Charset=utf-8");
        $prod_id = I('post.prod_id');
        if (I('post.prod_phone')) $list['prod_phone'] = I('post.prod_phone');
        if (I('post.prod_name')) $list['prod_name'] = I('post.prod_name');
        if (!$list['prod_name']) $this->error('产品名称不能为空');
        if (I('post.prod_yue_money')) $list['prod_yue_money'] = I('post.prod_yue_money');
        if (I('post.prod_money')) $list['prod_money'] = I('post.prod_money');
        if (I('post.prod_rate')) $list['prod_rate'] = I('post.prod_rate');
        if (I('post.prod_term')) $list['prod_term'] = I('post.prod_term');
        if (I('post.prod_cstphone')) $list['prod_cstphone'] = I('post.prod_cstphone');
        if (I('post.prod_type')) $list['prod_type'] = I('post.prod_type');
        if (I('post.prod_keeper')) $list['prod_keeper'] = I('post.prod_keeper');
        if (I('post.prod_trustee')) $list['prod_trustee'] = I('post.prod_trustee');
        if (I('post.prod_ben_way')) $list['prod_ben_way'] = I('post.prod_ben_way');
        if (I('post.prod_describe')) $list['prod_describe'] = I('post.prod_describe');
        if ($_POST['content']) $list['prod_details'] = $_POST['content'];
        if (I('post.prod_yue_time')) $list['prod_yue_time'] = I('post.prod_yue_time');
        if (I('post.prod_yue_address')) $list['prod_yue_address'] = I('post.prod_yue_address');
        //图片上传/商业计划书上传
        foreach ($_FILES as $key=>$value) {
            if($value['error'] == 0){
                $type = $_FILES[$key]['type'];
                if($key == 'prod_pdf'){
                    $list['prod_pdf'] = $this->pdf_uploads($type,$key);
                }elseif ($key == 'prod_logo') {
                    $list['prod_logo'] = $this->upload($type,$key);
                }
            }
        }
        $logo = M('whh_product',null)->field('prod_logo,prod_pdf')->where('prod_id = %d',array($prod_id))->find();
        $data = M('whh_product',null)->where("prod_phone = '%s' and prod_name = '%s'",array($list['prod_phone'],$list['prod_name']))->find();
        if (!$prod_id) {
            if ($list['prod_phone']) {
                if ($data) {
                    $this->error('产品库已有该产品，请勿重复添加！');
                }
                $uid = M('whh_user',null)->field('id,user_type')->where('mobile = %s',array($list['prod_phone']))->find();
                $list['prod_uid'] = $uid['id'];
                if (!$list['prod_uid']) {
                    $this->error('没有该手机号的用户，请添加该用户！');
                } elseif ($uid['user_type'] == 2) {
                    $this->error('该用户是投资人，请更换手机号！');
                } else {
                    $result = M('whh_product',null)->add($list);
                    if ($result) {
                        //修改用户的身份类型为项目人
                        if ($uid['user_type'] == 3) {
                            $status['user_type'] = 1;
                            M('user','whh_')->where('mobile = %s',array($list['prod_phone']))->save($status);
                        }
                        $this->success('产品添加成功！',U('index'));
                    } else {
                        $this->error('sorry,产品添加失败');
                    }
                }
            } else {
                $this->error('请填写手机号！');
            }
        } else {
            $result = M('whh_product',null)->where('prod_id = %d',array($prod_id))->save($list);
            if ($result) {
                if ($list['prod_logo']) unlink($logo['prod_logo']);
                if ($list['prod_pdf']) unlink($logo['prod_pdf']);
                $this->success('产品修改成功！',U('index'));
            } else {
                $this->error('sorry,产品修改失败');
            }
        }
    }

    //删除项目
    public function del()
    {
        $ids = isset($_REQUEST['prod_ids']) ? $_REQUEST['prod_ids'] : false;
        if ($ids) {
            if (is_array($ids)) {
                $aids = implode(',', $ids);
                $map['prod_id'] = array('in', $aids);
                //$follow['he_id'] = array('in',$aids);
                $logo = M('whh_product',null)->field('prod_logo,prod_pdf')->where($map)->select();
            } else {
                $map = 'prod_id = ' . $ids;
                //$follow = 'he_id = ' . $ids;
                $logo[] = M('whh_product',null)->field('prod_logo,prod_pdf')->where("prod_id = %d",array($ids))->find();
            }
            if (M('whh_product',null)->where($map)->delete()) {
                foreach ($logo as $val) {
                    unlink($val['prod_logo']);
                    unlink($val['prod_pdf']);
                }
                //收藏该产品的人的收藏数-1
//                $uid = M('whh_follow',null)->field('my_id')->where($follow)->select();
//                if ($uid) {
//                    $num['my_follow_num'] = array("exp","my_follow_num - 1");
//                    foreach ($uid as $key=>$value) {
//                        $r = M('whh_user_extend',null)->where("uid = '%d'",array($value['my_id']))->save($num);
//                    }
//                }
                //删除关于该产品的收藏记录
//                $re = M('whh_follow',null)->where($follow)->delete();
                addlog('删除项目，ID：' . $ids);
                $this->success('恭喜，产品删除成功！');
            } else {
                $this->error('产品删除失败！');
            }
        } else {
            $this->error('删除错误！');
        }
    }

    //上架 下架
    public function recycle()
    {
        $prod_id = I('get.prod_id');
        $status = I('get.status');
        if ($status == 1) {
            $data['prod_status'] = 1;
            $result = M('whh_product',null)->where('prod_id = %d',array($prod_id))->save($data);
            if ($result) {
                $this->success('上架成功！');
            } else {
                $this->error('上架失败');
            }
        }
        if ($status == 2) {
            $data['prod_status'] = 2;
            $result = M('whh_product',null)->where('prod_id = %d',array($prod_id))->save($data);
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
        $path = I('get.prod_pdf');
        if (!$path) $this->error('该产品未上传推介书',U('Index'));
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
            $upload->savePath  =     'product/'.$path."/";
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
            $upload->savePath = 'product/'.$name . '/'; // 设置附件上传（子）目录
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