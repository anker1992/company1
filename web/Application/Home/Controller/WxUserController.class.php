<?php
namespace Home\Controller;
use Think\Controller;
class WxUserController extends Controller {
    //登录
    public function login(){
        $code = $_GET['code'];
        if ($code) {
            $openid = $this->weixin_openid($code);
            $sel_openid = M('user')->field("id,phone,openid")->where("openid = '%s'",array($openid))->find();
            if($sel_openid){
                redirect(U('WxList/mainHeart',array('phone'=>$sel_openid['phone'],'uid'=>$sel_openid['id'])));
            }else{;
                $this->assign('openid',$openid);
                $this->display();
            }
        } else {
            $this->weixin_code();
        }
    }

    //登录成功
    public function login_add(){
        header("Content-Type:text/html;Charset=utf-8");
        $data = array(
            'phone' => I('post.phone'),
            'password' => I('post.password')
        );
        $user = M('user');
        $phone = $user->where("phone = '%s'",array($data['phone']))->find();
        if($phone){
            $salt = "weihehuo";// 只取前两个
            $password = crypt($data['password'], $salt);
            $pass = $user->field("id")->where("phone = '%s' and password = '%s' ",array($data['phone'],$password))->find();
            if($pass){
                $save_date = array(
                    'openid' => I('post.openid')
                );
                $user->where("id = %d",array($pass['id']))->save($save_date);
                $this->redirect('WxUser/userCenter',array('phone'=>$data['phone'],'uid'=>$pass['id']),0);
                //$this->success('登录成功', U('WxUser/userCenter',array('phone'=>$data['phone'],'uid'=>$pass['id'])));
            }else{
                $this->error('密码错误');
            }
        }else{
            $this->error('没有当前手机号',U('WxUser/register'));
        }
    }

    function weixin_code(){
        $appid = "wx14d496886a1fb891";
        $appSecret = 'c7b039d82b5cd6b276c20a00b809e599';
        $url = $this->get_code($appid,"http://www.wearebanker.net/Home/WxUser/login.html");
        redirect($url);
    }

    function weixin_openid($code){
        $appid = "wx14d496886a1fb891";
        $appSecret = 'c7b039d82b5cd6b276c20a00b809e599';
        $url = $this->get_openid($appid,$appSecret,$code);
        $result = json_decode(file_get_contents($url));
        $openid = $result->openid;
        return $openid;
    }

    function get_code($appid,$redirecturl,$scope='snsapi_base'){
        $redirecturl = urlencode($redirecturl);
        $url ="https://open.weixin.qq.com/connect/oauth2/authorize?appid=".$appid."&redirect_uri=".$redirecturl."&response_type=code&scope=snsapi_base&state=123#wechat_redirect";
        return $url;
    }

    function get_openid($appid,$appSecret,$code){
        return $url = "https://api.weixin.qq.com/sns/oauth2/access_token?appid=".$appid."&secret=".$appSecret."&code=".$code."&grant_type=authorization_code";
    }

    //退出
    public function logout(){
        $uid = I('get.uid');
        $model = M('user')->where("id = %d",array($uid))->save(array('openid'=>''));
        //echo M('user')->getLastSql();die;
        $this->redirect('WxUser/login');
    }

    //注册
    public function register(){
        $mark = I('get.mark');
        $this->assign('mark',$mark);
        $this->display();
    }

    //条款协议 页面展示
    public function protocol()
    {
        $this->display();
    }

    //关于我们
    public function aboutUs()
    {
        $phone = I('get.phone');
        $uid = I('get.uid');
        if ($phone && $uid) {
            $this->assign('phone',$phone);
            $this->assign('uid',$uid);
            $this->display();
        } else {
            $this->display('WxUser/login');
        }
    }

    //注册添加
    public function register_add(){
        header("Content-Type:text/html;Charset=utf-8");
        $password = I('post.password');
        $phone = I('post.phone');
        $mark = I('post.mark');
        $user = M('user');
        $list = $user->where('phone = %s',array($phone))->find();
        $manager = M('manager_code')->where('manager_phone = %s',array($phone))->find();
        if(!$list){
            if($manager['code']!=I('post.yzm')){
               echo "验证码不正确";
            }else {
                $salt = "weihehuo";// 只取前两个
                $data = array(
                    'phone' => $phone,
                    'password' => crypt($password, $salt),
                    'date' => date('Y-m-d H:i:s'),
                    'token' => md5($phone . $salt)
                );
                $code['code'] = I('post.yzm');
                $code['last_time'] = time();
                M('manager_code')->where('manager_phone = %s',array($data['phone']))->save($code);
                //user表添加数据
                $uid = $user->add($data);
                if ($uid) {
                    //主表中查找是否有该手机号的数据
                    $basic_list = M('marry_basic')->where('gl_phone = %s',array($phone))->find();
                    if ($basic_list) {  //如果marry_basic表有该手机号的数据，则更新数据；
                        $basic = array(
                            'uid' => $uid,
                            'register_time' => time()
                        );
                        $basic_re = M('marry_basic')->where('gl_phone = %s',array($phone))->save($basic);
                        if ($basic_re) {
                            $this->redirect('WxUser/registerInfo',array('phone'=>$phone,'uid'=>$uid),0);
                        }
                    } else {    //如果marry_basic没有该手机号的数据，则添加数据；
                        $basic = array(
                            'uid' => $uid,
                            'gl_phone' => $phone,
                            'register_time' => time(),
                            'mark' => $mark
                        );
                        $basic_add_id = M('marry_basic')->add($basic);
                        //marry_expand添加一条数据
                        $expand = array('mid' => $basic_add_id);
                        $expand_result = M('marry_expand')->add($expand);
                        if ($expand_result) {
                            $this->redirect('WxUser/registerInfo',array('phone'=>$phone,'uid'=>$uid),0);
                        }
                    }
                }
            }
        }else {
            $this->error('该手机号已经注册',U('WxUser/login'));
        }
    }

    //注册后添加基本信息
    public function registerInfo_add(){
        $phone = I('post.phone');
        $uid = I('post.uid');
        $nickname = I('post.nickname');
        if ($phone && $uid) {
            //marry_basic表中更新数据
            $basic = array(
                'nickname'=> I('post.nickname'),
                'sex' => I('post.sex'),
                'workarea'=> I('post.suozaidi'),
                'salary'=> I('post.yueshouru'),
                'lastlg_time'=>time(),
            );
            $basic_result = M('marry_basic')->where('uid = %d and gl_phone = %s', array($uid,$phone))->save($basic);
            if ($basic_result){
                $this->redirect('WxUser/userCenter',array('uid'=>$uid,'phone'=>$phone));
            }else{
                $basic_int = M('marry_basic')->where("uid = %d and gl_phone = %s",array($uid,$phone))->find();
                if(!$basic_int){
                    $basic['gl_phone'] = $phone;
                    $basic['uid'] = $uid;
                    $add_basic = M('marry_basic')->add($basic);
                    $add_extend = M('marry_expand')->add(array('mid'=>$add_basic));
                    if($add_extend){
                        $this->redirect('WxUser/userCenter',array('uid'=>$uid,'phone'=>$phone));
                    }
                }
            }
        }
    }

    //个人中心
    public  function userCenter()
    {
        $phone = $_GET['phone'];
        $uid = $_GET['uid'];
        if ($phone && $uid) {
            $list = M('marry_basic')->field('sex,touxiang_src')->where('uid = %d and gl_phone = %s',array($uid,$phone))->find();
            if(empty($list)){
                $this->redirect('WxUser/registerInfo',array('phone'=>$phone,'uid'=>$uid),0);
            }else{
                if ($list['sex'] == 1 || $list['sex'] == 0) {
                    $this->assign('list',$list);
                    $this->assign('phone',$phone);
                    $this->assign('uid',$uid);
                    $this->display();
                }else {
                    $this->redirect('WxUser/registerInfo',array('phone'=>$phone,'uid'=>$uid),0);
                }
            }
        } else {
            $this->display('WxUser/login');
        }
    }

    //注册获取手机验证码
    public function user_code(){
        header("Content-Type:text/html;Charset=utf-8");
        $phone = I('post.phone');
        $info = M('manager_code')->where('manager_phone = %s',array($phone))->order('last_time desc')->find();
        if($info){
            if (($info['last_time']+60) < time()){
                //判断已经发送的验证码是否已经过了60s
                //如果过了60s就发送新的验证码
                $code = str_pad(mt_rand(0, pow(10,6) - 1),6, '0', STR_PAD_LEFT);
                Vendor('code.SendTemplateSMS');
                sendTemplateSMS($phone,array($code,'30分钟'),'139264');
                $info['last_time'] = time();
                $info['code'] = $code;
                M('manager_code')->where('manager_phone = %s',array($phone))->save($info);
            }else{
                exit('短信已在1分钟内发出，请耐心等待');
            }
        }else{
            //cookie里没有这个手机号，就直接发送
            $code = str_pad(mt_rand(0, pow(10,6) - 1),6, '0', STR_PAD_LEFT);
            //echo $code;
            Vendor('code.SendTemplateSMS');
            sendTemplateSMS($phone,array($code,'30分钟'),'139264');
            $info = array(
                'manager_phone' => I('post.phone'),
                'code' => $code,
                'last_time' => time()
            );
            M('manager_code')->add($info);
        }
    }

    //判断验证是否正确
    public function is_code_true(){
        header("Content-Type:text/html;Charset=utf-8");
        $postphone = I('post.phone');
        $phone = M('user')->field("phone")->where("phone = %s",array($postphone))->find();
        $manager  = M('manager_code')->where('manager_phone = %s',array($postphone))->find();
        if($phone){
            //数据库有，就已经注册
            echo 3;
            //$this->error('用户已注册',U('WxUser/login'));
        }else{
            //echo I('post.code');die;
            //没有就判断用户的验证码是否正确
            if(I('post.yzm') == $manager['code']){
                echo 1;
            }else{
                echo 0;
            }
        }
    }

    //编辑信息 页面展示
    public function edit_index()
    {
        header("Content-Type:text/html;Charset=utf-8");
        $phone = $_GET['phone'];
        $uid = $_GET['uid'];
        if ($phone && $uid) {
            $this->assign('uid',$uid);
            $this->assign('phone',$phone);
            $this->display();
        } else {
            $this->display('WxUser/login');
        }
    }

    //编辑个人信息  页面展示
    public function edit()
    {
        header("Content-Type:text/html;Charset=utf-8");
        $phone = I('get.phone');
        $uid = I('get.uid');
        if ($phone && $uid) {
            $list = M('marry_basic')
                ->alias("a")
                ->field('a.id,a.uid,a.nickname,a.sex,a.birthday,a.workarea,a.maritalstatus,a.height,a.education,a.salary,a.touxiang_src,b.age,b.hukou,b.weight,b.nation,b.profession,b.tweleveanimals,b.constellation,b.ifbuyhouse,b.ifbuycar')
                ->join('left join marry_expand as b ON a.id = b.mid')
                ->where("gl_phone = %s",array($phone))
                ->find();
            $this->assign('list',$list);
            $this->assign('uid',$uid);
            $this->assign('phone',$phone);
            $this->display();
        } else {
            $this->display('WxUser/login');
        }
    }

    //个人信息 提交数据
    public function update()
    {
        header("Content-Type:text/html;Charset=utf-8");
        $phone = I('get.phone');
        $uid = I('get.uid');
        if ($phone && $uid) {
            //$avatar = M('marry_basic')->field('touxiang_src')->where('gl_phone = %s',array($phone))->find();
            $nickname = I('post.nickname');
            $birthday = I('post.birthday');
            $height = I('post.height');
            $workarea = I('post.workarea');
            $education = I('post.education');
            $salary = I('post.salary');
            $maritalstatus = I('post.maritalstatus');
            if (!empty($nickname)) {
                $data_zhu['nickname'] = $nickname;
            }
            if (!empty($birthday)) {
                $data_zhu['birthday'] = $birthday;
            }
            if (!empty($height)) {
                $data_zhu['height'] = $height;
            }
            if (!empty($workarea)) {
                $data_zhu['workarea'] = $workarea;
            }
            if (!empty($education)) {
                $data_zhu['education'] = $education;
            }
            if (!empty($salary)) {
                $data_zhu['salary'] = $salary;
            }
            if (!empty($maritalstatus)) {
                $data_zhu['maritalstatus'] = $maritalstatus;
            }
            $data_zhu['last_time'] = time();

            $age = I('post.age');
            $tweleveanimals = I('post.tweleveanimals');
            $constellation = I('post.constellation');
            $hukou = I('post.hukou');
            $nation = I('post.nation');
            $profession = I('post.profession');
            $ifbuyhouse = I('post.ifbuyhouse');
            $ifbuycar = I('post.ifbuycar');
            if (!empty($age)) {
                $data_fu['age'] = $age;
            }
            if (!empty($tweleveanimals)) {
                $data_fu['tweleveanimals'] = $tweleveanimals;
            }
            if (!empty($constellation)) {
                $data_fu['constellation'] = $constellation;
            }
            if (!empty($hukou)) {
                $data_fu['hukou'] = $hukou;
            }
            if (!empty($nation)) {
                $data_fu['nation'] = $nation;
            }
            if (!empty($profession)) {
                $data_fu['profession'] = $profession;
            }
            if (!empty($ifbuyhouse)) {
                $data_fu['ifbuyhouse'] = $ifbuyhouse;
            }
            if (!empty($ifbuycar)) {
                $data_fu['ifbuycar'] = $ifbuycar;
            }

//            $basic = array(
//                'nickname'=> 1?1:0,
//                'birthday'=> 2?2:0,
//                'height'=> I('post.height'),
//                'workarea'=> I('post.workarea'),
//                'education'=> I('post.education'),
//                'salary'=> I('post.salary'),
//                'maritalstatus'=> I('post.maritalstatus'),
//                'lastlg_time'=>time()
//            );
//            $expand = array(
//                'age' => I('post.age'),
//                'tweleveanimals' => I('post.tweleveanimals'),
//                'constellation' => I('post.constellation'),
//                'hukou'=> I('post.hukou'),
//                'nation'=> I('post.nation'),
//                'profession'=> I('post.profession'),
//                'ifbuyhouse'=> I('post.ifbuyhouse'),
//                'ifbuycar'=> I('post.ifbuycar')
//            );
            $mid = M('marry_basic')->field("id")->where("uid = %d",array($uid))->find();
            $result1 = M('marry_basic')->where('gl_phone = %s',array($phone))->save($data_zhu);
            $result2 = M('marry_expand')->where('mid = %d',array($mid['id']))->save($data_fu);
            if ($result1 || $result2) {
                //删除原来头像
                //unlink($avatar['touxiang_src']);
                $this->redirect('WxUser/edit_index',array('uid'=>$uid,'phone'=>$phone));
            }else {
                $this->redirect('WxUser/edit_index',array('uid'=>$uid,'phone'=>$phone));
            }
        } else {
            $this->display('WxUser/login');
        }
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
        $upload->savePath  =     'wx/'.$imgpath.'/';
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

    //认证信息
    public function certification()
    {
        $phone = $_GET['phone'];
        if ($phone) {
            $this->assign('phone',$phone);
            $this->display();
        } else {
            $this->display('WxUser/login');
        }
    }

    //编辑择偶信息
    public function zeou()
    {
        header("Content-Type:text/html;Charset=utf-8");
        $phone = $_GET['phone'];
        $uid = $_GET['uid'];
        if ($phone) {
            $id = M('marry_basic')->field('id')->where('gl_phone = %s',array($phone))->find();
            $list = M('marry_expand')
                ->field('zage,zheight,zworkarea,zmaritalstatus,zeducation,zsalary,zifbuyhouser')
                ->where('mid = %d',array($id['id']))->find();
            //var_dump($list);die;
            $this->assign('list',$list);
            $this->assign('uid',$uid);
            $this->assign('phone',$phone);
            $this->display();
        } else {
            $this->display('WxUser/login');
        }
    }

    //择偶信息 数据录入
    public function check_zeou()
    {
        header("Content-Type:text/html;Charset=utf-8");
        $phone = $_GET['phone'];
        $uid = I('get.uid');
        if ($phone && $uid) {
            $zheight = I('post.zheight');
            $zworkarea = I('post.zworkarea');
            $zmaritalstatus = I('post.zmaritalstatus');
            $zeducation = I('post.zeducation');
            $zsalary = I('post.zsalary');
            $zifbuyhouser = I('post.zifbuyhouser');
            if (!empty($zheight)) {
                $data['zheight'] = $zheight;
            }
            if (!empty($zworkarea)) {
                $data['zworkarea'] = $zworkarea;
            }
            if (!empty($zmaritalstatus)) {
                $data['zmaritalstatus'] = $zmaritalstatus;
            }
            if (!empty($zeducation)) {
                $data['zeducation'] = $zeducation;
            }
            if (!empty($zsalary)) {
                $data['zsalary'] = $zsalary;
            }
            if (!empty($zifbuyhouser)) {
                $data['zifbuyhouser'] = $zifbuyhouser;
            }
            $id = M('marry_basic')->field('id')->where('gl_phone = %s',array($phone))->find();
                $result = M('marry_expand')->where('mid = %d',array($id['id']))->save($data);
                if ($result) {
                    $this->redirect('WxUser/edit_index',array('uid'=>$uid,'phone'=>$phone));
                } else {
                    $this->error('修改失败');
                }
        } else {
            $this->display('WxUser/login');
        }
    }

    //我心动的人
    public function my_heart(){
        $uid = $_GET['uid'];
        $phone = I('get.phone');
        $list = M('heart')
            ->alias("a")
            ->field("a.he_id,b.id,b.nickname,b.touxiang_src,b.education,b.workarea")
            ->join("left join marry_basic as b ON a.he_id = b.id")
            ->where("my_id = %d",array($uid))
            ->select();
        $this->assign('uid',$uid);
        $this->assign('phone',$phone);
        $this->assign('list',$list);
        $this->display();
    }

//心动我的人
    public function heart_me(){
        header("Content-Type:text/html;Charset=utf-8");
        $uid = $_GET['uid'];
        $id = M('marry_basic')->field("id")->where("uid = %d",array($uid))->cache("heart_my_id".$uid,60)->find();
        $list = M('heart')
            ->field("my_id")
            ->where("he_id = %d",array($id['id']))
            ->cache("list_my_id".$uid,60)
            ->select();

        for($i = 0;$i<count($list);$i++){
            $sum .= ','.$list[$i]['my_id'];
        }
        $my_id = substr($sum,1);
        if($my_id) {
            $new_list = M('marry_basic')
                ->field("id,nickname,touxiang_src,education,workarea")
                ->where(array("uid" => array('IN', $my_id)))
                ->cache("heart_me" . $uid, 60)
                ->select();
        }
        $this->assign('uid',$uid);
        $this->assign('list',$new_list);
        $this->display();
    }

    public function personalData()
    {
        header("Content-Type:text/html;Charset=utf-8");
        $uid = I('get.uid');
        $phone = I('get.phone');
        $info = M('marry_basic')
            ->alias("a")
            ->field("a.id,a.nickname,a.workarea,a.height,a.best_person,a.best_movie,a.best_music,a.best_writer,a.best_food,a.best_sports,b.tweleveanimals,b.constellation,b.profession,a.education,b.ifbuycar,b.ifbuyhouse,a.salary,b.zworkarea,b.zsalary,b.zmaritalstatus")
            ->join("left join marry_expand as b ON a.id = b.mid")
            ->where("a.uid = %d",array($uid))
            ->find();
        if ($info['best_person']) {
            $best_person = explode(',',$info['best_person']);
        }
        if ($info['best_movie']) {
            $best_movie = explode(',',$info['best_movie']);
        }
        if ($info['best_music']) {
            $best_music = explode(',',$info['best_music']);
        }
        if ($info['best_food']) {
            $best_food = explode(',',$info['best_food']);
        }
        if ($info['best_writer']) {
            $best_writer = explode(',',$info['best_writer']);
        }
        if ($info['best_sports']) {
            $best_sports = explode(',',$info['best_sports']);
        }
        $photos = M('marry_photos')
            ->field('id,url')
            ->where("mid = %d",array($info['id']))
            ->select();

        $renzheng = M('wxrenzheng')
            ->field('truename,cardid,idzheng,idfan,schoolname,education,edunum,houseimg,carimg,idstate')
            ->where('uid = %d',array($uid))
            ->find();
        //var_dump($info);die;
        $this->assign('mid',$info['id']);
        $this->assign('photo',$photos);
        $this->assign('info',$info);
        $this->assign('uid',$uid);
        $this->assign('phone',$phone);
        $this->assign('renzheng',$renzheng);
        $this->assign('best_person',$best_person);
        $this->assign('best_movie',$best_movie);
        $this->assign('best_music',$best_music);
        $this->assign('best_writer',$best_writer);
        $this->assign('best_food',$best_food);
        $this->assign('best_sports',$best_sports);
        $this->display();
    }

    //添加图片
    public function add_img(){
        $base_img = I('post.src');
        $uid = I('post.uid');
        $phone = I('post.phone');
        $model = M('marry_photos');
        $url = explode(',',$base_img);
        $path="./Public";  //获取当前时间
        $path2 = "/Public";
        $path_url = "/wxUser/img/".date("Y-m-d")."/";
        $dir_path = $this->createdirlist($path.$path_url);
        $img_name = time().$uid.".png";
        file_put_contents($dir_path.$img_name, base64_decode($url[1]));
        $data = array(
            'mid' => I('post.mid'),
            "url"=> $path2.$path_url.$img_name,
            'upload_time'=>time()
        );
        $result = $model->add($data);
        //若上传成功，则删除原来头像文件
        if($result){
            echo 1;
        }
        //$this->result($result);
    }

    public function add_av_img(){
        $base_img = I('post.src');
        $uid = I('post.uid');
        $phone = I('post.phone');
        $model = M('marry_basic');

        $basic_int = $model->where("uid = %d and gl_phone = %s",array($uid,$phone))->find();
        if(!$basic_int){
            $basic['gl_phone'] = $phone;
            $basic['uid'] = $uid;
            $add_basic = M('marry_basic')->add($basic);
            $add_extend = M('marry_expand')->add(array('mid'=>$add_basic));
        }
        $url = explode(',',$base_img);
        $path="./Public";  //获取当前时间
        $path2 = "/Public";
        $path_url = "/wx/wxuser-avatar/".date("Y-m-d")."/";
        $dir_path = $this->createdirlist($path.$path_url);
        $img_name = time().$uid.".png";
        file_put_contents($dir_path.$img_name, base64_decode($url[1]));

        $img = $path2.$path_url.$img_name;
        $data = array(
            "touxiang_src"=> $path2.$path_url.$img_name
        );
        $result = $model->where("uid = %d",array($uid))->save($data);
        //若上传成功，则删除原来头像文件
        if($result){
            echo 1;
        }
    }

    //删除图片
    public function del_photos()
    {
        $id = I('get.id');
        $uid = I('get.uid');
        $phone = I('get.phone');
        $result = M('marry_photos')->where('id = %d',array($id))->delete();
        if ($result) {
            $this->redirect('WxUser/personalData',array('uid'=>$uid,'phone'=>$phone));
        } else {
            $this->error('删除失败');
        }
    }

    public function interest(){
        $this->assign('phone',I('get.phone'));
        $this->assign('uid',I('get.uid'));
        $this->display();
    }

//选择标签列表
    public function interestList(){
        header("Content-Type:text/html;Charset=utf-8");
        $label = I('get.label');
        switch ($label) {
            case '1':$val = 'best_person';break;
            case '2':$val = 'best_movie';break;
            case '3':$val = 'best_music';break;
            case '4':$val = 'best_writer';break;
            case '5':$val = 'best_food';break;
            case '6':$val = 'best_sports';break;
            default:$val = 'best_person';break;
        }
        $new_list = M('wxtags')->field($val)->select();
        foreach($new_list as $k=>$v){
            foreach ($v as $kk=>$item) {
                $new_list[$k]['list'] = $item;
                unset($new_list[$k][$kk]);
            }
        }
        $my_best =  M('marry_basic')->field($val)->where("uid = %d",array(I('get.uid')))->find();
        if($my_best[$val]){
            $my_label = explode(",",$my_best[$val]);
            foreach($my_label as $vv){
                $label_key[] = $vv;
            }
            $new_label = array_flip($label_key);
            foreach($new_list as $k=>$v){
                if(array_key_exists($v['list'],$new_label)){
                    $a['status'] = '1';
                }else{
                    $a['status'] = '0';
                }
                $new_new_list[] = array_merge_recursive($v,$a);
            }
        }else{
            $new_new_list = $new_list;
        }
        $this->assign('new_list',$new_new_list);
        $this->assign('best',$val);
        //$this->assign('list',$list);
        $this->display();
    }

//添加标签
    public function add_label(){
        $val = I('post.best');
        $arr = I('post.label_value');
        $uid = I('post.uid');
        $phone = I('post.phone');
        $best = implode(',',$arr);
        $save = M('marry_basic')->where("uid = %d",array($uid))->save(array($val=>$best));
        if($save){
            $this->redirect('interest',array('phone'=>$phone,'uid'=>$uid),0);
        }
    }

    function img_upload_two($imgpath){
        //$phone = I('post.phone');
        $upload = new \Think\Upload();// 实例化上传类
        $upload->maxSize   =     3145728 ;// 设置附件上传大小
        $upload->exts      =     array('jpg', 'gif', 'png', 'jpeg');// 设置附件上传类型
        //$upload->rootPath  =     './Public/'; // 设置附件上传根目录
        //$upload->savePath  =     'Public/manager_user/'.$imgpath.'/'; // 设置附件上传（子）目录
        //$upload->rootPath  =     './Public/'; // 设置附件上传根目录
        $upload->savePath  =     'wxUser/'.$imgpath.'/';
        //print_R($upload);die;

        //图片名
        //$imgname = $files_name = md5(uniqid(rand())).".jpg";

        $imgname = $_FILES['img']['name'];
        //print_R($upload->saveName);die;
        //echo $upload->saveName;die;
        //print_r($upload->subName);die;
        $info   =   $upload->upload();
        $img = "/Public/".$info['img']['savepath'].$info['img']['savename'];
        if(!$info) {// 上传错误提示错误信息
            $this->error($upload->getError());
        }else{// 上传成功
            return $img;
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
