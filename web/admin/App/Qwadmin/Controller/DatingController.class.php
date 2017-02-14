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

class DatingController extends ComController
{
    /*
     * 添加用户 页面展示
     */
    public function add()
    {
        $category = M('category')->field('id,pid,name')->order('o asc')->select();
        $tree = new Tree($category);
        $str = "<option value=\$id \$selected>\$spacer\$name</option>"; //生成的形式
        $category = $tree->get_tree(0, $str, 0);
        $this->assign('category', $category);//导航
        $this->display('form');
    }

    /*
     * 相亲后台首页 页面展示
     */
    public function index($sid = 0, $p = 1)
    {
        $p = intval($p) > 0 ? $p : 1;
        header("Content-Type:text/html;Charset=utf-8");
        $article = M('basic','marry_');
        $pagesize = 15;#每页数量
        $offset = $pagesize * ($p - 1);//计算记录偏移量
        //$prefix = C('DB_PREFIX');

        $arr = array(
            'nickname' => I('post.nickname'),
            'id' => I('post.id')
        );
        $where = '1=1 ';

        if(!empty($arr['nickname'])){
            $where .= " and a.nickname like '%".$arr['nickname']."%'";
        }
        if(!empty($arr['id'])){
            $where .= " and a.id = ".$arr['id']."";
        }

        $count = $article->alias("a")->where($where." and uid = 0")->count();
        $list = $article
            ->alias("a")
            ->field("a.*,b.*")
            ->join("left join marry_expand as b ON a.id = b.mid and a.isdelete = 0")
            ->where($where." and a.uid = 0")
            ->limit($offset . ',' . $pagesize)
            ->order("id desc")
            ->select();
      //  echo $article->getLastSql();die;
//var_dump($list);die;
        $page = new \Think\Page($count, $pagesize);
        $page = $page->show();
        $this->assign('list', $list);
        $this->assign('page', $page);
        $this->display();
    }

    //注册用户列表
    public function user_index($sid = 0, $p = 1)
    {
        $p = intval($p) > 0 ? $p : 1;
        header("Content-Type:text/html;Charset=utf-8");
        $article = M('basic','marry_');
        $pagesize = 15;#每页数量
        $offset = $pagesize * ($p - 1);//计算记录偏移量
        //$prefix = C('DB_PREFIX');
        $arr = array(
            'nickname' => I('post.nickname'),
            'id' => I('post.id')
        );
        $where = '1=1 ';
        $mark = I('get.mark');
        if(!empty($mark)){
            $where .= " and a.mark = ".$mark."";
        }
        if(!empty($arr['nickname'])){
            $where .= " and a.nickname like '%".$arr['nickname']."%'";
        }
        if(!empty($arr['id'])){
            $where .= " and a.id = ".$arr['id']."";
        }
        $count = $article->alias("a")->where($where." and uid != 0")->count();
        $list = $article
            ->alias("a")
            ->field("a.id,a.uid,a.nickname,a.sex,b.age,b.profession,a.gl_phone,a.register_time")
            ->join("left join marry_expand as b ON a.id = b.mid and a.isdelete = 0")
            ->where($where." and a.uid != 0")
            ->limit($offset . ',' . $pagesize)
            ->order("id desc")
            ->select();
        $page = new \Think\Page($count, $pagesize);
        $page = $page->show();
        $this->assign('list', $list);
        $this->assign('page', $page);
        $this->display();
    }

    public function del()
    {
        $ids = isset($_REQUEST['ids']) ? $_REQUEST['ids'] : false;
        //var_dump($ids);die;
        if ($ids) {
            if (is_array($ids)) {
                $ids = implode(',', $ids);
                $map['id'] = array('in', $ids);
            } else {
                $map = 'id = ' . $ids;
            }
            if (M('basic','marry_')->where($map)->delete()) {
                addlog('删除用户，ID：' . $ids);
                $this->success('恭喜，用户删除成功！');
            } else {
                $this->error('删除错误！');
            }
        } else {
            $this->error('删除错误！');
        }

    }

    /*
     * 修改用户 页面展示
     */
    public function edit()
    {
        header("Content-Type:text/html;Charset=utf-8");
        $id = I('get.id');
        //var_dump($id);die;
        $basic = M('basic','marry_') ->where('id = %d',array($id))->find();
        $expand = M('expand','marry_')->where('mid = %d',array($id))->find();
        if ($expand) {
            $list = array_merge($basic,$expand);
        } else {
            $list = $basic;
        }
        //echo $a->getLastSql();
        //var_dump($list);die;
        if ($list) {
            $args = explode('-',$list['birthday']);
            $list['year'] = $args[0];
            $list['month'] = $args[1];
            $list['day'] = $args[2];
            $this->assign('list', $list);
        } else {
            $this->error('没有该用户');
        }
        $this->display('form');
    }

    public function user_edit_sel(){
        header("Content-Type:text/html;Charset=utf-8");
        $id = I('get.id');
        //var_dump($id);die;
        $basic = M('basic','marry_') ->where('id = %d',array($id))->find();
        $expand = M('expand','marry_')->where('mid = %d',array($id))->find();
        if ($expand) {
            $list = array_merge($basic,$expand);
        } else {
            $list = $basic;
        }
        //echo $a->getLastSql();
        //var_dump($list);die;
        if ($list) {
            $args = explode('-',$list['birthday']);
            $list['year'] = $args[0];
            $list['month'] = $args[1];
            $list['day'] = $args[2];
            $this->assign('list', $list);
        } else {
            $this->error('没有该用户');
        }
        $this->display();
    }

    //添加/修改兴趣爱好  页面展示
    public function edit_tags()
    {
        header("Content-Type:text/html;Charset=utf-8");
        $id = I('get.id');
        $info_tags = M('marry_basic',null)
            ->field('best_person,best_movie,best_music,best_writer,best_food,best_sports')
            ->where('id = %d',array($id))
            ->find();
        $alltags = M('wxtags',null)
            ->field('best_person,best_movie,best_music,best_writer,best_food,best_sports')
            ->select();
        foreach ($alltags as $value) {
            foreach ($value as $key=>$val) {
                if (!empty($val)) {
                    switch ($key) {
                        case 'best_person':$best_person[] = $val;break;
                        case 'best_movie':$best_movie[] = $val;break;
                        case 'best_music':$best_music[] = $val;break;
                        case 'best_writer':$best_writer[] = $val;break;
                        case 'best_food':$best_food[] = $val;break;
                        case 'best_sports':$best_sports[] = $val;break;
                        default:$best_pserson[] = $val;break;
                    }
                }
            }
        }
        //var_dump($info_tags);die;
        $this->assign('person',$best_person);
        $this->assign('movie',$best_movie);
        $this->assign('music',$best_music);
        $this->assign('writer',$best_writer);
        $this->assign('food',$best_food);
        $this->assign('sports',$best_sports);
        $this->assign('info_tags',$info_tags);
        $this->display();
    }

    //修改兴趣爱好（标签）
    public function update_tags()
    {
        header("Content-Type:text/html;Charset=utf-8");
        $id = I('post.id');
        $info = M('marry_basic',null)
            ->field('best_person,best_movie,best_music,best_writer,best_food,best_sports')
            ->where('id = %d',array($id))
            ->find();
        $data['best_person'] = is_array(I('post.person'))?implode(',',I('post.person')):$info['best_person'];
        $data['best_movie'] = is_array(I('post.movie'))?implode(',',I('post.movie')):$info['best_movie'];
        $data['best_music'] = is_array(I('post.music'))?implode(',',I('post.music')):$info['best_music'];
        $data['best_writer'] = is_array(I('post.writer'))?implode(',',I('post.writer')):$info['best_writer'];
        $data['best_food'] =  is_array(I('post.food'))?implode(',',I('post.food')):$info['best_food'];
        $data['best_sports'] = is_array(I('post.sports'))?implode(',',I('post.sports')):$info['best_sports'];
        //var_dump($data);die;
        $info = M('marry_basic',null)
            ->field('id')
            ->where('id = %d',array($id))
            ->find();
        if ($info) {
            $result = M('marry_basic',null)
                ->where('id = %d',array($id))
                ->save($data);
        } else {
            $data['id'] = $id;
            $result = M('marry_basic',null)->add($data);
        }
        if ($result) {
            $this->success('修改成功');
        } else {
            $this->error('修改失败');
        }
    }

    /*
     * 修改用户/添加用户  更新数据库字段值
     */
    public function update($uid = 0)
    {
        header("Content-Type:text/html;Charset=utf-8");
//        $a = I('post.');
//        var_dump($a);die;
        $id = isset($_POST['id']) ? intval($_POST['id']) : 0;
        if ($_FILES['touxiang_src']['error'] == 0) {
            //获得上传头像
            $img = $this->img_upload("user-avatar");
        }else{
            $avatar = M('marry_basic',null)->field('touxiang_src')->where('id=' . $id)->find();
            // print_R($basic);die;
            $img = $avatar['touxiang_src'];
        }
        //var_dump($img);die;
        //基本信息存入$basic
        $basic = array(
            'gl_phone'       =>    I('post.phone'),
            'nickname'       =>    trim(I('post.nickname')),
            'workarea'       =>    trim(I('post.workarea')),
            'maritalstatus'  =>   trim(I('post.maritalstatus')),
            'height'          =>   trim(I('post.height')),
            'education'       =>   trim(I('post.education')),
            'salary'          =>   trim(I('post.salary')),
            'touxiang_src'   =>    $img,
            'register_time'  =>   time(),
            'lastlg_time'    =>   time(),
            'sex'             =>  I('post.sex')
        );

        //详细信息存入$expand
        $expand = array(
            'age'               =>       trim(I('post.age')),                 //年龄
            'hukou'             =>       trim(I('post.hukou')),               //户口
            'tweleveanimals'   =>       trim(I('post.tweleveanimals')),    //生肖
            'bloodtype'        =>       trim(I('post.bloodtype')),          //血型
            'profession'       =>       trim(I('post.profession')),         //职业
            'ifbuyhouse'       =>       trim(I('post.ifbuyhouse')),         //是否有房
            'nation'           =>       trim(I('post.nation')),              //民族
            'jiaxiang'         =>       trim(I('post.jiaxiang')),           //家乡
            'constellation'   =>        trim(I('post.constellation')),     //星座
            'weight'           =>       intval(trim(I('post.weight'))),     //体重
            'companytype'     =>        trim(I('post.companytype')),       //公司性质
            'ifbuycar'        =>        trim(I('post.ifbuycar')),           //购车
            'ifhaschild'      =>        trim(I('post.ifhaschild')),          //有无子女
            "ifsmoke"                =>     I('post.ifsmoke'),               //是否吸烟
            "ifdrink"                =>     I('post.ifdrink'),               //是否喝酒
            "cookingskils"          =>      I('post.cookingskils'),         //厨艺
            "housework"              =>     I('post.housework'),            //家务
            "whenmarry"              =>     I('post.whenmarry'),            //想何时结婚
            "livewithparents"       =>      I('post.livewithparents'),     //婚后与父母住吗
            "greaterconsumption"    =>      I('post.greaterconsumption'), //较大的消费
            "brotherandsister"      =>      I('post.brotherandsister'),     //兄弟姐妹
            "zage"           =>      I('post.zage'),              //年龄--择偶
            "zheight"       =>      I('post.zheight'),          //身高--择偶
            "zeducation"     =>      I('post.zeducation'),      //学历--择偶
            "zsalary"        =>      I('post.zsalary'),          //月收入--择偶
            "zworkarea"      =>      I('post.zworkarea'),       //所在地区--择偶
            "zmarry"         =>      I('post.zmarry'),           //婚姻状况--择偶
            "zifbuyhouser"  =>       I('post.zifbuyhouser'),    //购房状况--择偶
            "zifhaschild"   =>       I('post.zifhaschild'),     //有无子女--择偶
            "loveactivity"           =>      I('post.loveactivity'),       //喜欢的活动
            "lovesport"              =>      I('post.lovesport'),           //喜欢的体育运动
            "lovemusic"              =>      I('post.lovemusic'),           //喜欢的音乐
            "lovefilmprogram"       =>      I('post.lovefilmprogram'),     //喜欢的影视节目
            "lovefood"               =>      I('post.lovefood'),            //喜欢的食物
            "lovespace"              =>      I('post.lovespace'),           //喜欢的地方
            "lovepet"                =>      I('post.lovepet')              //喜欢的宠物
        );
        if (!$basic['nickname']) {
            $this->error('警告！昵称为必填项目。');
        }

        if ($id) {
            $info = M('basic','marry_');
            //print_r($avatar);die;
            //var_dump($basic);die;
            $result1 = $info->where('id= %d ',array($id))->save($basic);
            //echo $info->getLastSql();die;
            $result2 = M('expand','marry_')->data($expand)->where('mid=' . $id)->save();
            if ($result1 | $result2) {
                addlog('更新用户信息，ID：' . $id);
                //若头像上传成功，删除掉原来头像文件
                if ($_FILES['touxiang_src']['error'] == 0) {
                    //var_dump($_FILES);die;
                    unlink($avatar['touxiang_src']);
                }
                $this->success('恭喜！用户信息修改成功！');
            } else {
                $this->error('用户信息修改失败');
            }
        } else {
            $id_basic = M('basic','marry_')->data($basic)->add();
            $expand['mid'] = $id_basic;
            $id_expand = M('expand','marry_')->data($expand)->add();
            if ($id_basic && $id_expand) {
                addlog('新增用户，ID：' . $id);
                $this->success('恭喜！用户新增成功！');
            } else {
                $this->error('抱歉，未知错误！');
            }
        }
    }

    /*
     * 上传图片 页面展示
     */
    public function uploads()
    {
        $mid = $_GET['id'];
        $photos = M('photos','marry_')->field('url')->where('mid = %d',array($mid))->select();
        //var_dump($photos);die;
        $this->assign('mid',$mid);
        $this->assign('photos',$photos);
        $this->display();
    }

    /*
     * 上传图片 录入数据
     */
    public function check_photos()
    {
        $mid = I('get.mid');
        $base64 = $_POST['imgurl'];
        foreach ($base64 as $value) {
            $url[] = explode(',',$value);
        }
        //判断上传路径是否存在
        $dir = $this->createdirlist('../Public/dating/photos/'.date('Y-m-d').'/',0777);
        $path = substr($dir,2);
        foreach ($url as $key=>$val) {
            //图片后缀
            $type = trim(substr($val[0],strpos($val[0],'/'),(strrpos($val[0],';')-strpos($val[0],'/'))),'/');
            //图片名字
            $name = time().$mid.$key.'.'.$type;
            $upload_url[] = array(file_put_contents($dir.$name,base64_decode($val[1])),$path.$name);
        }
        foreach ($upload_url as $k => $v) {
            $data[] = array(
                'mid'               =>      $mid,
                'url'               =>      $v[1],
                'upload_time'      =>      time()
            );
        }
        $info = M('photos','marry_');
        $info->where('mid = %d',array($mid))->delete();
        foreach ($data as $value) {
            $result = $info->add($value);
        }
        if ($result) {
            echo 1;
        } else {
            echo 2;
        }
    }

    //心动列表
    public function heart_index(){
        $model = M('heart',null);
        $list = $model
            ->alias("a")
            ->field("b.id,b.uid,a.my_id,a.he_id,b.nickname,b.gl_phone,b.sex,b.workarea,b.touxiang_src")
            ->join("left join marry_basic as b ON b.uid = a.my_id")
            ->group("my_id")
            ->select();
        $this->assign('list',$list);
        $this->display();
    }

    //心动的人
    public function my_heart(){
        header("Content-Type:text/html;Charset=utf-8");
        $uid = I('get.uid');
        $my_id = M('marry_basic',null)->field("id")->where("uid = %d",array($uid))->find();
        $list = M('heart',null)
            ->alias("a")
            ->field("b.id,b.uid,a.my_id,a.he_id,b.nickname,b.gl_phone,b.sex,b.workarea,b.touxiang_src")
            ->join("left join marry_basic as b ON a.he_id = b.id")
            ->where("a.my_id = %d",array($uid))
            ->order("b.uid desc")
            ->select();
        for($i = 0;$i<count($list);$i++){
            $sum_he .= ','.$list[$i]['id'];
            //$sum_my .= ''.$list[$i][''];
        }
        //echo  M('heart',null)->getLastSql();die;
        $he_id = substr($sum_he,1);
        //echo $he_id;die;
        if($he_id){
            $list_uid = M('marry_basic',null)
                ->alias("a")
                ->field("a.id,a.uid")
                ->join("left join heart as b ON a.uid = b.he_id")
                ->where(array("a.id" => array('IN', $he_id)))
                //->cache("admin_heart_me" . $uid, 60)
                ->order("a.uid desc")
                ->select();
            if($list_uid){
                foreach($list_uid as $k=>$v){
                    $sel = M('heart')->where("my_id = %d and he_id = %d",array($v['uid'],$my_id['id']))->select();
                    //echo $v['uid'];die;
                    //$arr[] .= M('heart')->getLastSql();
                    if($sel){
                        //echo $list[$k]['id']."/".$list_uid[$k]['id'];die;
                        if($list[$k]['id']==$list_uid[$k]['id']){
                            $list[$k]['status']  = 1;
                        }
                    }
                }
            }
        }
        //print_R($list);die;
        $this->assign('list',$list);
        $this->display();
    }

    //创建目录
    function createdirlist($path,$mode){
        if (is_dir($path)){
            return $path;
        }else{
            $re=mkdir($path,$mode,true);
            if ($re){
                return $re;
            }else{
                echo "目录创建失败";
            }
        }
    }

    //上传图片类（单张上传）
    /*
     * $name 是上传图片的名字；$imgpath 是上传文件到指定的imgpath目录
     */
    function img_upload($imgpath){
        $upload = new \Think\Upload();// 实例化上传类
        $upload->maxSize   =     3145728 ;// 设置附件上传大小
        $upload->exts      =     array('jpg', 'gif', 'png', 'jpeg');// 设置附件上传类型
        //$upload->rootPath  =     './Public/'; // 设置附件上传根目录
        //$upload->savePath  =     'Public/manager_user/'.$imgpath.'/'; // 设置附件上传（子）目录
        $upload->rootPath  =     '../Public/'; // 设置附件上传根目录
        $upload->savePath  =     'dating/'.$imgpath.'/';
        //print_R($upload);die;

        //图片名
        //$imgname = $files_name = md5(uniqid(rand())).".jpg";

        $imgname = $_FILES['touxiang_src']['name'];
        //print_R($upload->saveName);die;
        //var_dump($upload->saveName);die;
        //print_r($upload->subName);die;
        $info   =   $upload->upload();
        //var_dump($info);die;
        $img = "/Public/".$info['touxiang_src']['savepath'].$info['touxiang_src']['savename'];
        if(!$info) {// 上传错误提示错误信息
            $this->error($upload->getError());
        }else{// 上传成功
            return $img;
        }
    }

    //上传图片类(多张上传)
    /*
     * $name 是上传图片的名字；$imgpath 是上传文件到指定的imgpath目录
     */
    function photos_upload($imgpath){

        $upload = new \Think\Upload();// 实例化上传类
        $upload->maxSize   =     3145728 ;// 设置附件上传大小
        $upload->exts      =     array('jpg', 'gif', 'png', 'jpeg');// 设置附件上传类型
        //$upload->rootPath  =     './Public/'; // 设置附件上传根目录
        //$upload->savePath  =     'Public/manager_user/'.$imgpath.'/'; // 设置附件上传（子）目录
        $upload->rootPath  =     '../Public/'; // 设置附件上传根目录
        $upload->savePath  =     'dating/'.$imgpath.'/';

        //print_R($upload);die;

        //图片名
        //$imgname = $files_name = md5(uniqid(rand())).".jpg";

        $imgname = $_FILES['photos']['name'];
        //print_R($upload->saveName);die;
        //echo $upload->saveName;die;
        //print_r($upload->subName);die;
        $info  =  $upload->upload();
         //var_dump($info);die;
        foreach ($info as $key => $value) {
            $img[] = "/Public/".$value['savepath'].$value['savename'];
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