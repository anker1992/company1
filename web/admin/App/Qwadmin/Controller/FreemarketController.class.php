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

class FreemarketController extends ComController
{

    public function add()
    {
        $category = M('category')->field('id,pid,name')->order('o asc')->select();
        $tree = new Tree($category);
        $str = "<option value=\$id \$selected>\$spacer\$name</option>"; //生成的形式
        $category = $tree->get_tree(0, $str, 0);
        $this->assign('category', $category);//导航
        $this->display('form');
    }

    public function index($sid = 0, $p = 1)
    {
        header("Content-Type:text/html;Charset=utf-8");
        $p = intval($p) > 0 ? $p : 1;

        $article = M('free_post',null);
        $pagesize = 15;#每页数量
        $offset = $pagesize * ($p - 1);//计算记录偏移量
        //$prefix = C('DB_PREFIX');

        $where = ' status = 0 ';

        $count = $article->where($where)->count();
        $list = $article
            ->alias("a")
            ->field("a.free_id,a.user_id,b.phone,a.free_title,a.free_praise_num,a.free_click_num,a.free_comment_num,a.free_top_status,a.free_highlight,a.free_make_time")
            ->join("left join user as b ON a.user_id = b.id")
            ->where($where)
            ->order("free_top_status desc,free_make_time desc")
            ->limit($offset . ',' . $pagesize)
            ->select();

        $page = new \Think\Page($count, $pagesize);
        $page = $page->show();
        $this->assign('list', $list);
        $this->assign('page', $page);
        $this->display();
    }

    public function del()
    {
       $free_id = I('get.free_id');
        if ($free_id) {
            if (M('free_post',null)->where("free_id = %d",array($free_id))->delete()) {
                addlog('删除帖子，AID：' . $free_id);
                $this->success('帖子删除成功！');
            } else {
                $this->error('参数错误！');
            }
        } else {
            $this->error('参数错误！');
        }

    }

    public function edit()
    {
        $free_id = I('get.free_id');
        $article = M('free_post',null)->where('free_id=' . $free_id)->find();
        if(!$article){
            $this->error("参数错误");
        }else{
            $this->assign('article', $article);
        }
        $this->display('form');
    }

    public function update($aid = 0)
    {
        //$aid = intval($aid);
        $free_id = isset($_POST['free_id']) ? intval($_POST['free_id']) : 0;
        $data['free_title'] = isset($_POST['title']) ? $_POST['title'] : false;
        $data['free_content'] = isset($_POST['content']) ? $_POST['content'] : false;
        $data['free_make_time'] = time();
        $data['user_id'] = '-1';
        if (!$data['free_title'] or !$data['free_content']) {
            $this->error('警告！帖子标题及帖子内容为必填项目。');
        }
        if ($free_id) {
            M('free_post',null)->data($data)->where('free_id=' . $free_id)->save();
            addlog('编辑帖子，AID：' . $aid);
            $this->success('恭喜！帖子编辑成功！',U('index'));
        }else {
            $aid = M('free_post',null)->data($data)->add();
            if ($aid) {
                addlog('新增帖子，AID：' . $aid);
                $this->success('恭喜！帖子新增成功！',U('index'));
            } else {
                $this->error('抱歉，未知错误！');
            }

        }
    }

    //置顶
  public function zhiding()
  {
      $free_id = I('get.free_id');
      $zhiding = I('get.zhiding');
      $date = array(
          'free_top_status' => $zhiding,
      );
      $save = M('free_post', null)
          ->where("free_id = %d", array($free_id))
          ->save($date);
    if($save){
        $this->success('操作成功',U('index'));
    }
  }

    //高亮
    public function gaoliang(){
        $free_id = I('get.free_id');
        $gaoliang = I('get.gaoliang');
        $date = array(
            'free_highlight' => $gaoliang
        );
        $zhiding = M('free_post', null)
            ->where("free_id = %d", array($free_id))
            ->save($date);
        if($zhiding){
            $this->success('高亮成功',U('index'));
        }
    }
}