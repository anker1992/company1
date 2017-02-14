<?php
namespace Home\Controller;
use Think\Controller;
class IndexController extends Controller {
    //首页
    public function index(){
        //自由市场
        $free = M('free_post')
            ->field("free_id,free_title,free_make_time")
            ->order("free_top_status desc,free_make_time desc")
            ->limit(16)
            ->select();

        //相亲交友
        $love = M('marry_basic')
            ->field("id,nickname,maritalstatus,touxiang_src")
            ->order("register_time desc")
            ->where("nickname != '' and touxiang_src != ''")
            ->limit(12)
            ->select();

        $this->assign('love',$love);
        $this->assign('news',$free);
        $this->display();
    }
}