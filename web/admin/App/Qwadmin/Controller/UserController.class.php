<?php
namespace Qwadmin\Controller;

use Vendor\Tree;

class UserController extends ComController
{
    //pc端用户列表
    public function PCindex($p = 1)
    {
        $p = intval($p) > 0 ? $p : 1;
        header("Content-Type:text/html;Charset=utf-8");
        $user = M('user',null);
        $pagesize = 15;#每页数量
        $offset = $pagesize * ($p - 1);//计算记录偏移量
        $count = $user->where("token is null")->count();
        $list = $user
            ->where("token is null")
            ->limit($offset . ',' . $pagesize)
            ->order("date desc")
            ->select();
        $page = new \Think\Page($count, $pagesize);
        $page = $page->show();
        $this->assign('list', $list);
        $this->assign('page', $page);
        $this->display();
    }

    //婚恋H5端用户列表
    public function H5index($p = 1)
    {
        $p = intval($p) > 0 ? $p : 1;
        header("Content-Type:text/html;Charset=utf-8");
        $user = M('user',null);
        $pagesize = 15;#每页数量
        $offset = $pagesize * ($p - 1);//计算记录偏移量
        $count = $user->where("token is not null")->count();
        $list = $user
            ->where("token is not null")
            ->limit($offset . ',' . $pagesize)
            ->order("date desc")
            ->select();
        $page = new \Think\Page($count, $pagesize);
        $page = $page->show();
        $this->assign('list', $list);
        $this->assign('page', $page);
        $this->display();
    }

    //客户列表
    public function kehuindex($p = 1)
    {
        $p = intval($p) > 0 ? $p : 1;
        header("Content-Type:text/html;Charset=utf-8");
        $kehu = M('kehu',null);
        $pagesize = 15;#每页数量
        $offset = $pagesize * ($p - 1);//计算记录偏移量
        $count = $kehu->count();
        $list = $kehu
            ->field('kehu_id,kehu_name,kehu_sex,kehu_phone,kehu_company,kehu_job,kehu_yx,register_way,kehu_date')
            ->limit($offset . ',' . $pagesize)
            ->order("kehu_date desc")
            ->select();
        $page = new \Think\Page($count, $pagesize);
        $page = $page->show();
        $this->assign('list', $list);
        $this->assign('page', $page);
        $this->display();
    }
}