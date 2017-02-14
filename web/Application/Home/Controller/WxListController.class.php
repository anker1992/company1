<?php
namespace Home\Controller;
use Think\Controller;
class WxListController extends Controller {
    public function mainHeart(){
        header("Content-Type:text/html;Charset=utf-8");
        $model = M('marry_basic');
        //print_R($_GET);die;
        $uid = I('get.uid');
        $phone = I('get.phone');

        //S('sex_cache',null);die;
        $sex = $model->field("sex")->where("uid = %d",array($uid))->find();
        //echo $model->getLastSql();die;
        $where = "a.isdelete = 0 and a.nickname != '' and a.touxiang_src != '' and a.uid != ".$uid;
        //echo $sex['sex'];die;
        if($sex['sex'] == '1'){
            $where .= " and a.sex = 0";
        }elseif($sex['sex'] == '0'){
            $where .= " and a.sex = 1";
        }else{
            $where .= " and 1=1 ";
        }

        $count = $model->alias("a")->where($where)->count();   //总条数
        $page = $this->getpage($count,10);
        $show  = $page->show();
        $now_page = $page->nowPage;

        //列表缓存标识
        $list = $model
            ->alias("a")
            ->field("a.id,a.uid,a.nickname,a.touxiang_src,b.age,a.workarea,b.constellation,a.education,b.profession,a.maritalstatus,c.idstate")
            ->join("left join marry_expand as b ON a.id = b.mid left join wxrenzheng as c ON a.uid = c.uid")
            ->order("register_time desc")
            ->where($where)
            ->limit($page->firstRow,$page->listRows)
            ->select();
        //var_dump($list);die;
        //是否已心动
        $heart = M('heart')->field("he_id")->where("my_id = %d",array($uid))->select();

        foreach($heart as $vv){
            $he[] = $vv['he_id'];
        }
        $new_he = array_flip($he);

        foreach($list as $k=>$v){
            if(array_key_exists($v['id'],$new_he)){
                $a['status'] = '1';
            }else{
                $a['status'] = '0';
            }
            $new_list[] = array_merge_recursive($v,$a);
        }
//        foreach($list as $k=>$v){
//            if(in_array($v['id'],$he)){
//                $a['status'] = '1';
//            }else{
//                $a['status'] = '0';
//            }
//            $new_list[] = array_merge_recursive($v,$a);
//        }
        $this->assign('page',$show);
        $this->assign('heart',$heart);
        $this->assign('list',$new_list);
        $this->assign('uid',$uid);
        $this->assign('phone',$phone);
        $this->display();
    }

    //动心
    public function do_heart(){
        $date = array(
            'he_id' => I('post.he_id'),
            'my_id' => I('post.my_id')
        );
        $status = I('post.status');
        $model = M('heart');
        if($status == '-1'){
            //不心动
            $is_have = $model->field("id")->where("my_id = %d and he_id = %d",array($date['my_id'],$date['he_id']))->find();
            if($is_have){
                $do_del = $model->where("my_id = %d and he_id = %d",array($date['my_id'],$date['he_id']))->delete();
                if($do_del){
                    //删除成功
                    echo 1;
                }
            }
        }else{
            //心动
            $is_have = $model->field("id")->where("my_id = %d and he_id = %d",array($date['my_id'],$date['he_id']))->find();

            if(!$is_have){
                $do_add = $model->add($date);
                if($do_add){
                    //心动成功
                    echo 0;
                }
            }
        }

    }

    //详情页面
    public function personalInfo(){
        header("Content-Type:text/html;Charset=utf-8");
        $uid = I('get.uid');
        $phone = I('get.phone');
        $id = I('get.id');
        $info = M('marry_basic')
            ->alias("a")
            ->field("a.uid,a.nickname,a.workarea,a.height,a.touxiang_src,a.best_person,a.best_movie,a.best_music,a.best_writer,a.best_food,a.best_sports,b.tweleveanimals,b.constellation,b.profession,a.education,b.ifbuycar,b.ifbuyhouse,a.salary,b.zworkarea,b.zsalary,b.zmaritalstatus")
            ->join("left join marry_expand as b ON a.id = b.mid")
            ->where("id = %d",array($id))
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
            ->field('id,mid,url')
            ->where("mid = %d",array($id))
            ->select();
        $renzheng = M('wxrenzheng')
            ->field('truename,cardid,idzheng,idfan,schoolname,education,edunum,houseimg,carimg,idstate')
            ->where('uid = %d',array($info['uid']))
            ->find();
        $heart = M('heart')
            ->field('my_id,he_id')
            ->where('my_id = %d and he_id = %d',array($uid,$id))
            ->find();
        $this->assign('photo',$photos);
        $this->assign('info',$info);
        $this->assign('uid',$uid);
        $this->assign('id',$id);
        $this->assign('phone',$phone);
        $this->assign('renzheng',$renzheng);
        $this->assign('heart',$heart);
        $this->assign('best_person',$best_person);
        $this->assign('best_movie',$best_movie);
        $this->assign('best_music',$best_music);
        $this->assign('best_writer',$best_writer);
        $this->assign('best_food',$best_food);
        $this->assign('best_sports',$best_sports);
        $this->display();
    }

    //分页
    function getpage($count, $pagesize) {
        $p = new \Think\Page($count, $pagesize);
//        $p->setConfig('header', '<li class="rows">共<b>%TOTAL_ROW%</b>条记录&nbsp;第<b>%NOW_PAGE%</b>页/共<b>%TOTAL_PAGE%</b>页</li>');
//        $p->setConfig('prev', '上一页');
//        $p->setConfig('next', '下一页');
//        $p->setConfig('last', '末页');
//        $p->setConfig('first', '首页');
//        $p->setConfig('theme', '%FIRST%%UP_PAGE%%LINK_PAGE%%DOWN_PAGE%%END%%HEADER%');
//        $p->lastSuffix = false;//最后一页不显示为总页数
        $p->setConfig('prev', '上一页');
        $p->setConfig('next', '下一页');
        $p->setConfig('last', '末页');
        $p->setConfig('first', '首页');
        //$p->setConfig('theme',' %UP_PAGE% %DOWN_PAGE% ');
        $p->setConfig('theme', '%FIRST%%UP_PAGE%%DOWN_PAGE%%END%');
        //$p -> setConfig('link','indexpagenumb');//pagenumb 会替换成页码
        //$p->lastSuffix = false;//最后一页不显示为总页数
        return $p;
    }

}