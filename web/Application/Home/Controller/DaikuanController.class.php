<?php
namespace Home\Controller;
use Think\Controller;
class DaikuanController extends Controller {
    //贷款首页
    public function personalloan(){
        header("Content-Type:text/html;Charset=utf-8");

        $daikuan = floatval(I('daikuan'))?floatval(I('daikuan')):'';
        $qixians = floatval(I('qixians'))?floatval(I('qixians')):'';
        $shenfen = I('shenfen');
        $diya = I('diya');

        $where = "1=1";
        if($daikuan)$where .= " and (min_qian <= ".$daikuan." and max_qian >= ".$daikuan.")";

        if($qixians)$where .= " and (min_yue <= ".$qixians." and max_yue >=".$qixians.")";

        if(!empty($shenfen)){
            $where .= " and shenqing like '%$shenfen%'";
        }
        if(!empty($diya)){
            $where .= " and diya like '%$diya%'";
        }
        $model = M('sheet1');
        $count = $model->where($where)->count();
        $page = $this->getpage($count,10);
        $show  = $page->show();

        //$list = $model->query("select * from sheet1 where ".$where." limit $page->firstRow,$page->listRows");
        $list = $model->query("select logo,name,diya,shenqing,fangkuan,yaoqiu1,yaoqiu2,yaoqiu3,renshu,id from sheet1 where ".$where." limit $page->firstRow,$page->listRows");
//echo $model->getLastSql();die;

        $this->assign('shenfen',$shenfen);
        $this->assign('diya',$diya);
        $this->assign('daikuan',$daikuan);
        $this->assign('qixians',$qixians);
        $this->assign('list',$list);
        $this->assign('page',$show);//赋值;分页输出
        $this->display();
    }

    //融资详情
    public function loanproarticle(){
        header("Content-Type:text/html;Charset=utf-8");
        $id = I("get.id");
        //$listone = M('sheet1')->where("id = %d",array($id))->find();
        $listone = M('sheet1')->field('name,logo2,diya,shenqing,fangkuan,min_qian,max_qian,min_yue,max_yue,lixi,yuegong,yuelilv,tiaojian,cailiao,lilvshuoming')->where("id = %d",array($id))->find();
    //print_R($listone);die;
        $this->assign('listone',$listone);
        $this->display();
    }

    //经理入驻注册登录页
    public function userlogin(){
        $this->display();
    }

    //入驻获取手机验证码
    public function user_code(){
        $phone = I('post.phone');
        if(cookie('think_manager_phone')==$phone){
            if((strtotime(cookie('manager_cookietime'))+60)<time()){
                //判断已经发送的验证码是否已经过了60s
                //如果过了60s就发送新的验证码
               $code = str_pad(mt_rand(0, pow(10,6) - 1),6, '0', STR_PAD_LEFT);
               //echo $code;
                Vendor('code.SendTemplateSMS');
                sendTemplateSMS($phone,array($code,'30分钟'),'139264');
                cookie('manager_cookietime',date("Y-m-d H:i:s"));
                cookie('manager_code',$code,1800);

            }else{
                exit('短信已在1分钟内发出，请耐心等待');
            }
        }else{
            //cookie里没有这个手机号，就直接发送
            $code = str_pad(mt_rand(0, pow(10,6) - 1),6, '0', STR_PAD_LEFT);
            //echo $code;
            Vendor('code.SendTemplateSMS');
            sendTemplateSMS($phone,array($code,'30分钟'),'139264');
            cookie('manager_phone',$phone,array('prefix'=>'think_'));
            cookie('manager_cookietime',date("Y-m-d H:i:s"));
            cookie('manager_code',$code,1800);
        }
    }

    //判断验证是否正确
    public function is_code_true(){
        $postphone = I('post.phone');
        $phone = M('manager_user')->field("manager_phone")->where("manager_phone = %s",array($postphone))->find();
        if($phone){
            //数据库有，就已经注册
            echo 3;
        }else{
            //没有就判断用户的验证码是否正确
            if(I('post.code') == cookie('manager_code')){
                echo 1;
            }else{
                echo 0;
            }
        }
    }

    //验证码成功上传数据
    public function manager_register(){
        $pass = I('post.pass');
        $phone = I('post.phone');

        $salt = "weihehuo";// 只取前两个
        $pass = crypt($pass, $salt);
        $data = array(
            'manager_phone' => $phone,
            'password' => $pass
        );
        $model = M('manager_user');
        $add = $model->add($data);
         if($add){
            $this->redirect('completeInfo',array('phone' =>$phone));
        }
    }

    //完善信息添加
    public function completeInfo_one_add(){
        $data = array(
            'manager_name' => I('post.name'),
            'manager_city' => I('post.province'),
            'manager_area' => I('post.city'),
            'mechanism' => I('post.organization')
        );
        $phone = I('post.phone');
        $model = M('manager_user')->where("manager_phone = '%s'",array($phone))->save($data);
        if($model){
            $this->redirect('completeInfo_two',array('phone' =>$phone));
        }
    }

    //真人头像上传
    public function completeInfo_two_add(){
        $phone = I('post.phone');
        $img = $this->img_upload('manager_img');
        $data = array(
            "manager_img"=> $img,
        );
            $save = M('manager_user')->where("manager_phone = '%s'",array($phone))->save($data);
            $this->success('新增成功', U('Daikuan/completeInfo_three?phone='.$phone));
    }

    //名片上传
    public function completeInfo_three_add(){
        $phone = I('post.phone');
        $img = $this->img_upload('business_card');
        $data = array(
            "business_card"=> $img,
        );
        $save = M('manager_user')->where("manager_phone = '%s'",array($phone))->save($data);
        $this->success('新增成功', U('Daikuan/completeInfo_for?phone='.$phone));
    }

    //工牌上传
    public function completeInfo_for_add(){
        $phone = I('post.phone');
        $img = $this->img_upload('work_card');
        $data = array(
            "work_card"=> $img,
        );
        $save = M('manager_user')->where("manager_phone = '%s'",array($phone))->save($data);
        $this->success('新增成功', U('Daikuan/completeInfo_last'));
    }

    //信用卡列表
    public function creditList(){
        header("Content-Type:text/html;Charset=utf-8");
        $where = " 1=1";

        //$y_name = mb_substr(I('get.yinhang'),0,2,'utf-8');
        $y_name = I('get.yinhang');
        if(!empty($y_name)){
            $where .= " and title like '%$y_name%'";
        }

        $dengji = I('get.dengji');
        if(!empty($dengji)){
            $where .= " and logo_one_ka = '$dengji' or logo_two_ka = '$dengji'";
        }

        $zhengce = I('get.zhengce');
        if(!empty($zhengce)){
            $where .= " and zhengce1 like '%$zhengce%'";
        }

        $bizhong = I('get.bizhong');
        if(!empty($bizhong)){
            $where .= " and bizhong like '%$bizhong%'";
        }

        $type = I('get.type');
        if(!empty($type)){
            $where .= " and logo_one_type like '%$type%' or logo_two_type like '%$type%'";
        }

        $yinhang = M('yinghang')->select();
        $model = M('xinyongka');
        $count = $model->where($where)->count();
        $page = $this->getpage($count,20);
        $show  = $page->show();


        $list = $model->where($where)->limit($page->firstRow,$page->listRows)->select();
        //echo $model->getLastSql();die;

        $this->assign('page',$show);
        $this->assign('count',$count);
        $this->assign('list',$list);
        $this->assign('yinhang',$yinhang);
        $this->assign('y_name',$y_name);
        $this->assign('dengji',$dengji);
        $this->assign('zhengce',$zhengce);
        $this->assign('bizhong',$bizhong);
        $this->assign('type',$type);
        $this->display();
    }

    //信用卡详情
    public function creditDetail(){
        $id = I('get.id');

        $model = M('xinyongka');
        $detail = $model->where("id = %d",array($id))->find();

        $this->assign('detail',$detail);
        $this->display();
    }

    //车贷列表
    public function houseLoanList(){
        $where = " 1=1 ";


        $model = M('fangdai');
        $count = $model->where($where)->count();
        $page = $this->getpage($count,15);
        $show  = $page->show();

        $list = $model
            ->where($where)
            ->limit($page->firstRow,$page->listRows)
            ->select();

        $this->assign('page',$show);
        $this->assign('count',$count);
        $this->assign('list',$list);
        $this->display();
    }

    //车贷详情
    public function houseLoanDetail(){
        $id = I('get.id');
        $show = M('fangdai')->where("id = %d",array($id))->find();

        $this->assign('show',$show);
        $this->display();
    }

    //分页
    function getpage($count, $pagesize = 10) {
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

    //上传图片类
    function img_upload($imgpath){
        $phone = I('post.phone');
        $upload = new \Think\Upload();// 实例化上传类
        $upload->maxSize   =     3145728 ;// 设置附件上传大小
        $upload->exts      =     array('jpg', 'gif', 'png', 'jpeg');// 设置附件上传类型

        $upload->savePath  =     'manager_user/'.$imgpath.'/';

        $info   =   $upload->upload();
        $img = "Public/".$info['photo']['savepath'].$info['photo']['savename'];
        if(!$info) {// 上传错误提示错误信息
            $this->error($upload->getError());
        }else{// 上传成功
            return $img;
        }
    }
}