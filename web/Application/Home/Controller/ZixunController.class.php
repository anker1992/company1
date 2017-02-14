<?php
namespace Home\Controller;
use Think\Controller;
class ZixunController extends Controller {
    public function news1(){
        $news = M('news');
        //咨询
        $all = $news->where("is_show = 1 and top_line = 0")->order("news_date_show desc")->limit(0,9)->select();
        $hot_article = $this->hot_article();

        $this->assign('all',$all);
        $this->assign('hot_article',$hot_article);
        $this->display();
    }

    //咨询详情
    public function news1_detail(){
        header('Content-Type: text/html; charset=utf-8');
        $add_num = $this->zixun_add_num();
        //热文
        $hot_article = $this->hot_article();
        $this->assign('news',$add_num);
        $this->assign('hot_article',$hot_article);
        $this->display();
    }

    //统计咨询阅读数量
    function zixun_add_num(){
        $id=I('get.news_id');
        if ($id){
            $news = M('news');
            $row = $news->field("news_id,news_imga,news_title,news_content")->where("news_id = %d",array($id))->find();
            $upd = $news->execute("UPDATE news SET readnum=readnum+1 WHERE news_id = %d",array($id));
            if($upd){
                return $row;
            }else{
                $this->error("操作失败"); //查询失败后返回上一页
            }
        }else{
            $this->error("操作失败"); //查询失败后返回上一页
        }
    }

    function hot_article(){
        $hot_article = M('news')->field("news_id,news_imga,news_title,news_content")->Order("readnum desc")->limit(5)->select();
        return $hot_article;
    }
}