<?php
namespace Home\Controller;
use Think\Controller;
class FreemarketController extends Controller {

    //自由市场的列表
    public function freeMarket(){
        $model = M('free_post');

        $count = $model->where("status = 0")->order("free_top_status desc,free_click_num desc")->count();
        $page = $this->getpage($count,20);
        $show  = $page->show();

        $list = $model
            ->alias("a")
            ->field("a.free_highlight,a.free_top_status,a.user_id,b.phone,a.free_id,a.free_title,a.free_click_num,a.free_comment_num,a.free_make_time")
            ->join("left join user as b ON a.user_id = b.id")
            ->where("status = 0")
            ->order("free_top_status desc,free_make_time desc")
            ->limit($page->firstRow,$page->listRows)
            ->select();

        $this->assign('list',$list);
        $this->assign('page',$show);//赋值;分页输出
        $this->display();
    }

    //发新帖
    public function freeMarketPost(){
        A('Public')->is_login();
        $this->display();
    }

    //新帖添加
    public function freepost_add(){
        A('Public')->is_login();

        $data = array(
            'free_title' => I('post.title'),
            'free_content' => $_POST['content'],
            'free_make_time' => time(),
            'user_id' => cookie('think_user_id')
        );
        $model = M('free_post');
        $add = $model->add($data);
        if($add){
            $this->success('添加成功',U('Freemarket/freeMarketDetail',array('free_id'=>$model->getLastInsID())));
        }else{
            $this->error('添加失败');
        }
    }

    //自由市场详情
    public function freeMarketDetail(){
        $free_id = I('get.free_id');
        $user_id = cookie("think_user_id");

        $model = M('free_post');
        $com_model = M('free_comment');
        //详情
        $free = $model
            ->alias("a")
            ->field("b.phone,a.user_id,a.free_id,a.free_title,a.free_content,a.free_praise_num,a.free_click_num,a.free_comment_num,a.free_make_time")
            ->join("left join user as b ON a.user_id = b.id")
            ->where("free_id = %d",array($free_id))
            ->find();
        //点击量+1
        $model->execute("update free_post set free_click_num = free_click_num+1 where free_id = '".$free_id."'");
        //查询是否点赞
        $zan = M('free_zan')->field("status")->where("free_zan_id = %d and free_id = %d",array($user_id,$free_id))->find();
        //评论
        $count = $com_model->where("status = 0 and free_id = %d",array($free_id))->count();
        $page = $this->getpage($count,5);
        $show  = $page->show();
        $comment = $com_model
            ->alias("a")
            ->field("b.phone,a.comment_id,a.comment_content,a.comment_time")
            ->join("left join user as b ON a.comment_uid = b.id")
            ->where('free_id = %d and a.status = 0',array($free_id))
            ->limit($page->firstRow,$page->listRows)
            ->select();

        $this->assign('comment',$comment);
        $this->assign('free',$free);
        $this->assign('zan',$zan);
        $this->assign('page',$show);//赋值;分页输出
        $this->display();
    }

    //ajax评论
    public function free_comment_add(){
        //print_r($_POST);die;
        $phone = I('post.user_name');
        $data = array(
            'comment_content' => I('post.coment'),
            'free_id' => I('post.free_id'),
            'comment_uid' => I('post.comment_id'),
            'comment_time' => time()
        );
        $model = M('free_comment');
        $comment_add = $model->add($data);
        //评论数+1
        $save_comment = M('free_post')->execute("update free_post set free_comment_num = free_comment_num+1 where free_id = '".$data['free_id']."'");

        if($comment_add && $save_comment){
            echo '<div class="comment-info-box clearfix">';
            echo '<img class="comment-avatar" src="" alt="">';
            echo '           <div class="comment-info"> ';
            echo '                <div class="comment-info-titlebar">';
            echo '                    <span class="nicheng">'.$phone.'</span>&nbsp;&nbsp;&nbsp;&nbsp;';
            echo '                    <span class="yingxiangli">影响力</span>';
            echo '                    <i></i><i></i><i></i><i></i><i></i> </div>';
            echo '                <p>'.date('Y-m-d H:i:s',$data['comment_time']).'</p>';
            echo '            </div>';
            echo '            <div style="clear:both;"></div>';
            echo '            <div class="comment-text">';
            echo '                <p>'.$data['comment_content'].'</p> ';
            echo '            </div></div>';

        }else{
            $this->error("评论失败");
        }
    }

    //详情页面点赞
    public function free_zan(){
        $date = array(
            'free_id' => I('post.free_id'),
            'free_zan_id' => I('post.comment_id'),
            'status' => '1'
        );
        $zan = M('free_zan')->add($date);
        //点赞+1
        $free = M('free_post')->execute("update free_post set free_praise_num = free_praise_num + 1 where free_id = '".$date['free_id']."'");
        if($zan && $free){
            echo 1;
        }else{
            echo 2;
        }
    }

    //分页
    function getpage($count, $pagesize = 10) {
        $p = new \Think\Page($count, $pagesize);
        $p->setConfig('header', '<li class="rows">共<b>%TOTAL_ROW%</b>条记录&nbsp;第<b>%NOW_PAGE%</b>页/共<b>%TOTAL_PAGE%</b>页</li>');
        //$p->setConfig('header', '<li class="rows">共<b>%TOTAL_ROW%</b>条记录&nbsp;第<b>%NOW_PAGE%</b>页/共<b>%TOTAL_PAGE%</b>页</li>');
        $p->setConfig('prev', '上一页');
        $p->setConfig('next', '下一页');
        $p->setConfig('last', '末页');
        $p->setConfig('first', '首页');
        $p->setConfig('theme', '%FIRST%%UP_PAGE%%LINK_PAGE%%DOWN_PAGE%%END%%HEADER%');
        $p->lastSuffix = false;//最后一页不显示为总页数
        return $p;
    }
}