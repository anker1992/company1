<?php
namespace Home\Controller;
use Think\Controller;
use Think\Page;
class DatingController extends Controller
{
    /*
     * 相亲首页 页面展示
     *
     * @author Liurongrong 2016.12.06 15:30
     * @return display
     */
    public function datingindex(){
        if (cookie('think_user_name')) {
            $cookie = cookie('think_user_name');
            $info = M('marry_basic');
            $list = $info->where('gl_phone = %s',array($cookie))->find();
            if (empty($list)) {
                $this->redirect('datinginfo');
            }
        }
        $list = M('marry_basic')->field('id,touxiang_src')->limit(0,10)->select();
        $first =  array_slice($list,0,1);
        $second = array_slice($list,1,4);
        $third = array_slice($list,5,1);
        $fourth = array_slice($list,6,4);
        //var_dump($third);die;
        $this->assign('first',$first);
        $this->assign('second',$second);
        $this->assign('third',$third);
        $this->assign('fourth',$fourth);
        $this->display();
    }

    /*
    * 相亲页面的基本信息 页面展示
    *
    * @author Liurongrong,2016.12.06 16:13
    * @return display
    */
    public function datinginfo() {
        A('Public')->is_login();
        $this->display();
    }

    /*
     * 相亲页面的基本信息的数据录入
     *
     * @author Liurongrong 2016.12.06 17:13
     * @return true or false
     */
    public function datinginfo_add() {
        header("Content-Type:text/html;Charset=utf-8");
        //基本信息存入$data
        $data = array(
            'uid'            =>   cookie('think_user_id'),
            'gl_phone'       =>   cookie('think_user_name'),
            'nickname'       =>   trim(I('post.nickname')),
            'workarea'       =>   trim(I('post.area')),
            'maritalstatus'  =>  trim(I('post.marry')),
            'height'          =>   trim(I('post.height')),
            'education'      =>   trim(I('post.education')),
            'salary'          =>  trim(I('post.salary')),
            'register_time'  =>  time(),
            'lastlg_time'    =>  time()
        );
        //性别判断以数值形式存入$data
        if (I('post.sex') == '男') {
            $data['sex'] = 1;
        } elseif (I('post.sex') == '女') {
            $data['sex'] = 0;
        } else {
            $data['sex'] = 3;
        }
        //var_dump($data['sex']);die;
        //出生日期拼接存入$data
        $data['birthday'] = I('post.year') .'-' .I('post.month') .'-' .I('post.day');
        $birthday = $data['birthday'];
        $birth = explode('-',$birthday);
        if (isset($birth)) {
            //计算当前日期和出生日期之差来计算年龄
            $year  =  intval($birth[0]);
            $month =  intval($birth[1]);
            $day   =  intval($birth[2]);
            $day1 = mktime(0,0,0,$month,$day,$year);
            $now  =  date('Y-m-d',time());
            $now_time = explode('-',$now);
            $day2 = mktime(0,0,0,$now_time[1],$now_time[2],$now_time[0]);
            $list['age'] = floor(($day2 - $day1)/3600/24/365);
        }
        //将基本信息添加到数据库
        $info_add = M('marry_basic');
        $list_add = $info_add->add($data);
        //var_dump($list_add);die;
        //将年龄信息存入marry_expand表中；
        $list['mid'] = $list_add;
        $list['uid'] = cookie('think_user_id');
        $expand_info_add = M('marry_expand');
        $expand_info_list = $expand_info_add->add($list);
        if ($list_add && $expand_info_list) {
            $this->success('保存成功',U('datingindex'));
        } else {
            $this->error('保存失败');
        }
     }

    /*
     * 拓展信息（详细信息）页面展示
     *
     * @author Liurongrong,2016.12.07 10:00
     * @return display
     */
    public function datingexpand()
    {
        header("Content-Type:text/html;Charset=utf-8");
        A('Public')->is_login();

        //从marry_basic数据库调出该用户的基本信息
        $cookie = cookie('think_user_name');
        $basic_info = M('marry_basic');
        $basic = $basic_info->where('gl_phone = %s',array($cookie))->find();
        $mid = $basic['id'];
//var_dump($basic['id']);die;
        //从marry_expand数据库调出详细信息
        $expand_info = M('marry_expand');
        $expand = $expand_info->where('mid = %d',array($mid))->find();
//var_dump($expand);die;
        //从marry_photos数据库中调出图片信息
        $photos_info = M('marry_photos');
        $photos = $photos_info->field('id,url')->where('mid = %d',array($mid))->limit(5)->order('id asc')->select();
        $photos_num = sizeof($photos);
        //var_dump($photos);die;
        $this->assign('mid',$mid);
        $this->assign('basic',$basic);
        $this->assign('expand',$expand);
        $this->assign('photos',$photos);
        $this->assign('photos_num',$photos_num);
        $this->display();
    }

    /*
     * 用户昵称和上传头像 信息录入
     *
     * @author Liurongrong 2016.12.07 18:00
     * @二次修改 上传头像 2016.12.08 15:30
     * @return true or false
     */
    public function check_nickname()
    {
        $info = M('marry_basic');
        $gl_phone = I('post.gl_phone');
        //得到原来头像的路径信息
        $avatar = $info->field('touxiang_src')->where('gl_phone = %s',array($gl_phone))->find();
        $img = $this->img_upload("user-avatar");
        $data = array(
            "touxiang_src"=> $img,
            'nickname' => I('post.nickname')
        );
        $result = $info->where('gl_phone = %s',array($gl_phone))->save($data);
        //若上传成功，则删除原来头像文件
        if ($result && $avatar) {
            unlink($avatar['touxiang_src']);
        }
        $this->result($result);
    }

    /*
     * 个人状况  信息录入
     *
     * @author Liurongrong 2016.12.07 20:00
     * @return true or false
     */
    public function check_selfstatus()
    {
        header("Content-Type:text/html;Charset=utf-8");
        $data_basic = array(
                    'height'            =>        trim(I('post.height')),               //身高
                    'education'         =>        trim(I('post.education')),           //学历
                    'maritalstatus'    =>        trim(I('post.maritalstatus')),       //婚姻状况
                    'workarea'          =>        trim(I('post.workarea')),            //现居住地（常住地）
                    'salary'            =>        trim(I('post.salary'))               //月薪
        );
        $data = array(
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
                    'ifhaschild'      =>        trim(I('post.ifhaschild'))          //有无子女
                );
        $uid = I('post.uid');
        $mid = intval($_GET['id']);
        $result = $this->save_expand($mid,$data);
        //var_dump($uid);var_dump($mid);die;
        //var_dump($result);die;
        //基本信息更新存入marry_basic数据库
        $info_basic = M('marry_basic');
        $basic_result = $info_basic->where('uid = %d',array($uid))->save($data_basic);
        //判断是否更新成功
        if ($result | $basic_result) {
            $this->success('修改成功',U('datingexpand'));
        } else {
            $this->error('修改失败',U('datingexpand'));
        }
    }

    /*
     * 保存信息到marry_expand数据库
     *
     * @author Liurongrong 2016.12.08 13:30
     * @return int
     */
    public function save_expand($mid,$data)
    {
        //拓展信息存入marry_expand数据库
        $info = M('marry_expand');
        $list = $info->where('mid = %d',array($mid))->find();
        if (empty($list)) {
            $data['uid'] = trim(I('post.uid'));
            $data['mid'] = intval($_GET['id']);
            //echo 1;
            $result = $info->add($data);
        } else {
            $result = $info->where('mid = %d', array($mid))->save($data);
        }
        return $result;
    }

    //判断结果
    public function result($result)
    {
        if ($result) {
            $this->success('修改成功',U('datingexpand'));
        } else {
            $this->error('修改失败',U('datingexpand'));
        }
    }

    /*
     * 家庭状况 信息录入
     *
     * @author Liurongrong 2016.12.08 11:50
     * @return true or false
     */
    public function check_family()
    {
        $data = array(
                "ifsmoke"                =>     I('post.ifsmoke'),               //是否吸烟
                "ifdrink"                =>     I('post.ifdrink'),               //是否喝酒
                "cookingskils"          =>      I('post.cookingskils'),         //厨艺
                "housework"              =>     I('post.housework'),            //家务
                "whenmarry"              =>     I('post.whenmarry'),            //想何时结婚
                "livewithparents"       =>      I('post.livewithparents'),     //婚后与父母住吗
                "greaterconsumption"    =>      I('post.greaterconsumption'), //较大的消费
                "brotherandsister"      =>      I('post.brotherandsister')     //兄弟姐妹
                );
        $mid = intval($_GET['id']);
        $result = $this->save_expand($mid,$data);
        $this->result($result);
    }

    /*
     * 择偶意向 信息录入
     *
     * @author Liurongrong 14:25
     * @return true or false
     */
    public function check_zeou()
    {
        $data = array(
                "zage"           =>      I('post.zage'),              //年龄
                 "zheight"       =>      I('post.zheight'),          //身高
                "zeducation"     =>      I('post.zeducation'),      //学历
                "zsalary"        =>      I('post.zsalary'),          //月收入
                "zworkarea"      =>      I('post.zworkarea'),       //所在地区
                "zmarry"         =>      I('post.zmarry'),           //婚姻状况
                "zifbuyhouser"  =>       I('post.zifbuyhouser'),    //购房状况
                "zifhaschild"   =>       I('post.zifhaschild')      //有无子女
                 );
        $mid = intval($_GET['id']);
        $result = $this->save_expand($mid,$data);
        $this->result($result);
    }

    /*
    * 兴趣爱好 信息录入
    *
    * @author Liurongrong 14:49
    * @return true or false
    */
    public function check_hobby()
    {
        $data = array(
                "loveactivity"           =>      I('post.loveactivity'),       //喜欢的活动
                "lovesport"              =>      I('post.lovesport'),           //喜欢的体育运动
                "lovemusic"              =>      I('post.lovemusic'),           //喜欢的音乐
                "lovefilmprogram"       =>      I('post.lovefilmprogram'),     //喜欢的影视节目
                "lovefood"               =>      I('post.lovefood'),            //喜欢的食物
                "lovespace"              =>      I('post.lovespace'),           //喜欢的地方
                "lovepet"                =>      I('post.lovepet'),             //喜欢的宠物
        );
        $mid = intval($_GET['id']);
        $result = $this->save_expand($mid,$data);
        $this->result($result);
    }

    /*
     * 上传照片 信息录入
     *
     * @author Liurongrong 2016.12.08  17:10
     * @二次编辑 Liurongrong 2016.12.09 9:00
     * @return true or false
     */
    public function check_photos()
    {
        $photos = $this->photos_upload("photos");
        //用户id
        $mid = $_GET['id'];
        //图片id
        $id[] = I('post.id');
        foreach ($photos as $key => $value) {
            $data[] = array(
                'mid'               =>      $mid,
                'url'               =>      $value,
                'upload_time'      =>      time()
            );
        }
        //var_dump($data);die;
        $info = M('marry_photos');
        $info->where('mid = %d',array($mid))->delete();
        foreach ($data as $value) {
            $result = $info->add($value);
        }
        //print_r($a);die;
        $this->result($result);
    }

    /*
     * 搜索页面的展示
     *
     * @author Liurongrong 2016.12.07 15:00
     * @return display;
     */
    public function datingsearch()
    {
        A('Public')->is_login();
        header("Content-Type:text/html;Charset=utf-8");
        $uid = cookie('think_user_id');
        $where = '1=1';
        $sex_post = I('post.sex');             //性别
        //var_dump($sex_post);die;
        if (empty($sex_post)) {
            $sex = M('marry_basic')->field('sex')->where('uid = %d',array($uid))->find();
            //判断当前用户的性别
            if ($sex['sex'] == '1') {
                $data = array(
                    'person' => '女士',
                    'num' => 0
                );
                $where .= " and a.sex = 0 ";
            }
            if ($sex['sex'] === '0') {
                $data = array(
                    'person' => '男士',
                    'num' => 1
                );
                $where .= " and a.sex = 1 ";
            }
            if ($sex['sex'] === null) {
                $data = array(
                    'person' => '性别',
                    'num' => -1
                );
            }
        }
        $post = I('post.');
        if (!empty($post)) {
            $sex_post = I('post.sex');             //性别
            if ($sex_post == '-1') {
                $data['person'] = '不限';
            } else {
                if ($sex_post == 1) {
                    $data['person'] = '男士';
                }
                if ($sex_post == 0) {
                    $data['person'] = '女士';
                }
                $where .= " and a.sex = '".$sex_post."'";
            }
            $agebegin = I('post.ageBegin');  //起始年龄
            $ageend = I('post.ageEnd');      //终止年龄
            if($agebegin != '-1'){
                $where .= " and b.age >= '".$agebegin."' ";
            }
            if ($ageend != '300') {
                $where .= " and b.age <= '".$ageend."' ";
            }
            $area = I('post.area');         //地区
            if ($area) {
                $where .= " and a.workarea = '".$area."' ";
            }
            $edu = I('post.edu');           //学历
            if ($edu) {
                foreach($edu as $k=>$v){
                    if($k == 0){
                        $where .= " and a.education = '".$v."'";
                    }else{
                        $where .= " or a.education = '".$v."' ";
                    }
                }
            }
            $salary = I('post.salary'); //月收入
            if ($salary!= '不限') {
                $where .= " and a.salary = '".$salary."' ";
            }
            $marry = I('post.marry');           //婚史
            if ($marry) {
                foreach($marry as $k2=>$v2){
                    if($k2 == 0){
                        $where .= " and a.maritalstatus = '".$v2."'";
                    }else{
                        $where .= " or a.maritalstatus = '".$v2."' ";
                    }
                }
            }
            $height = I('post.height');           //身高
            if ($height != 0) {
                $where .= " and height = '".$height."' ";
            }
            $position = I('post.position');           //职业
            if ($position) {
                $where .= " and position = '".$position."' ";
            }
            $ifbuyhouse = I('post.house');           //住房
            if ($ifbuyhouse) {
                $where .= " and ifbuyhouse = '".$ifbuyhouse."' ";
            }
            $ifhaschild = I('post.children');           //是否有孩子
            if ($ifhaschild) {
                $where .= " and ifhaschild = '".$ifhaschild."' ";
            }
            $originplace = I('post.city');           //籍贯
            if ($originplace) {
                $where .= " and originplace = '".$originplace."' ";
            }
            $constellation = I('post.constellation');           //星座
            if ($constellation) {
                $where .= " and constellation = '".$constellation."' ";
            }
            $tweleveanimals = I('post.tweleveanimals');           //生肖
            if ($tweleveanimals) {
                $where .= " and tweleveanimals = '".$tweleveanimals."' ";
            }
            $nation = I('post.nation');           //民族
            if ($nation) {
                $where .= " and nation = '".$nation."' ";
            }
            $level = I('post.level');           //会员等级
            if ($level) {
                $where .= " and level = '".$level."' ";
            }
        }
        //var_dump($where);die;
        $count = M('marry_basic')->query("select count(*) as total from marry_basic as a LEFT JOIN marry_expand as b ON a.id = b.mid where a.isdelete = 0 and ".$where);
        $p = $this->getpage($count[0]['total'],10);
        $list = M('marry_basic')->query("select * from marry_basic as a LEFT JOIN marry_expand as b ON a.id = b.mid where a.isdelete = 0 and ".$where." order by a.id desc limit ".$p->firstRow." , ".$p->listRows );
        //var_dump($list['sex']);die;
        //echo M('marry_basic')->getLastSql();die;
        $this->assign('page',$p->show());
        $this->assign('data',$data);
        $this->assign('list',$list);
        $this->display();
    }

    /*
     * 分页
     *
     * @author Liurongrong 2016.12.10 10:30
     * @param $count 要分页的总记录数
     * @param $pagesize  每页查询条数
     * @return \Think\Page
     */
    function getpage($count,$pagesize = 10)
    {
        $p = new \Think\Page($count, $pagesize);
        $p->setConfig('header', '<li class="rows">共<b>%TOTAL_ROW%</b>条记录&nbsp;第<b>%NOW_PAGE%</b>页/共<b>%TOTAL_PAGE%</b>页</li>');
        $p->setConfig('prev', '上一页');
        $p->setConfig('next', '下一页');
        $p->setConfig('last', '末页');
        $p->setConfig('first', '首页');
        $p->setConfig('theme', '%FIRST%%UP_PAGE%%LINK_PAGE%%DOWN_PAGE%%END%%HEADER%');
        $p->lastSuffix = false;//最后一页不显示为总页数
        return $p;
    }
    //上传图片类（单张上传）
    /*
     * $name 是上传图片的名字；$imgpath 是上传文件到指定的imgpath目录
     */
    function img_upload($imgpath){
        $phone = I('post.phone');
        $upload = new \Think\Upload();// 实例化上传类
        $upload->maxSize   =     3145728 ;// 设置附件上传大小
        $upload->exts      =     array('jpg', 'gif', 'png', 'jpeg');// 设置附件上传类型
        //$upload->rootPath  =     './Public/'; // 设置附件上传根目录
        //$upload->savePath  =     'Public/manager_user/'.$imgpath.'/'; // 设置附件上传（子）目录
        //$upload->rootPath  =     './Public/'; // 设置附件上传根目录
        $upload->savePath  =     'dating/'.$imgpath.'/';
        //print_R($upload);die;

        //图片名
        //$imgname = $files_name = md5(uniqid(rand())).".jpg";

        $imgname = $_FILES['user-avatar']['name'];
        //print_R($upload->saveName);die;
        //echo $upload->saveName;die;
        //print_r($upload->subName);die;
        $info   =   $upload->upload();
        $img = "/Public/".$info['user-avatar']['savepath'].$info['user-avatar']['savename'];
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
        $phone = I('post.phone');
        $upload = new \Think\Upload();// 实例化上传类
        $upload->maxSize   =     3145728 ;// 设置附件上传大小
        $upload->exts      =     array('jpg', 'gif', 'png', 'jpeg');// 设置附件上传类型
        //$upload->rootPath  =     './Public/'; // 设置附件上传根目录
        //$upload->savePath  =     'Public/manager_user/'.$imgpath.'/'; // 设置附件上传（子）目录
        //$upload->rootPath  =     './Public/'; // 设置附件上传根目录
        $upload->savePath  =     'dating/'.$imgpath.'/';

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

    /*
     * 个人信息详情页 页面展示
     *
     * @author Liuronrong 2016.12.09 15:30
     * @return display
     */
    public function datingintroduce()
    {
        $id = intval($_GET['id']);
        $info = M('marry_basic');
        $expand_info = M('marry_expand');
        $photos = M('marry_photos');
        $basic = $info->where('id = %d',array($id))->find();
        $expand = $expand_info->where('mid = %d',array($id))->find();
        $photo_url = $photos->field('url')->where('mid = %d',array($id))->limit(5)->select();
        //var_dump($photo_url);die;
        $list = array_merge($basic,$expand);
        if ($list['sex'] == 1) {
            $list['sex'] = '男';
        } elseif ($list['sex'] == 0) {
            $list['sex'] = '女';
        }
        $this->assign('list',$list);
        $this->assign('url',$photo_url);
        $this->display();
    }

    /*
     * 情感视界  页面展示
     *
     * @author Liurongrong 2016.12.10 14:35
     * @return display
     */
    public function datingcase()
    {
        $this->display();
    }
}