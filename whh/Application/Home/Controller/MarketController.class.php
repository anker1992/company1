<?php
namespace Home\Controller;
use Think\Controller;
class MarketController extends Controller
{
    public function marketList()
    {
        $model = M('free');
        $count = $model->count();
        $page = $this->getpage($count,10);
        $list = $model
            ->alias("a")
            ->field("a.fid,a.free_title,a.free_time,a.free_click_num,b.realname,b.user_logo,b.mobile")
            ->join("left join whh_user as b on a.free_uid = b.id")
            ->order("fid desc")
            ->limit($page->firstRow,$page->listRows)
            ->select();
        $page = $page->show();
        $this->assign('page',$page);
        $this->assign('list',$list);

        $token = I('get.token');
        if (!$token){
            $code = $_GET['code'];
            if ($code) {
                $openid = $this->weixin_openid($code);
                $sel_openid = M('user')->field("id,openid,token")->where("openid = '%s'",array($openid))->find();
                if($sel_openid['openid']){
                    $this->assign('token',$sel_openid['token']);
                }else{
                    $no_token = "0";
                    $this->assign('token',$no_token);
                }
            } else {
                $this->weixin_code();
            }
        }else{
            $this->assign('token',$token);
        }
        $this->display();
    }

    //详情页
    public function marketDetail($token = 0)
    {
        $token = I('get.token');
        $fid = I('get.fid');
        $model = M('free');
        //阅读量
        $click['free_click_num'] = array('exp','free_click_num + 1');
        $add_click = M('free')->where("fid = %d",array($fid))->save($click);

        $list = $model
            ->alias('a')
            ->field("a.fid,a.free_title,a.free_uid,a.free_content,a.free_com_num,a.free_click_num,a.free_time,b.realname,b.user_logo,b.mobile")
            ->join("left join whh_user as b on a.free_uid = b.id")
            ->where("fid = %d",array($fid))
            ->find();
        //评论
        $count = M("free_com")->where("fid = %d",array($fid))->count();
        $page = $this->getpage($count,10);
        $comments = M("free_com")
            ->alias('a')
            ->field("a.com_content,a.com_time,b.realname,b.user_logo,b.mobile")
            ->where("fid = %d",array($fid))
            ->join("left join whh_user as b on a.free_uid = b.id")
            ->order('com_time desc')
            ->limit($page->firstRow,$page->listRows)
            ->select();
        $page = $page->show();
        $this->assign('page',$page);
        $this->assign('comments',$comments);
        $this->assign('list',$list);
        $this->assign('token',$token);
        $this->display();
    }

    //发表评论页
    public function comment($token = 0)
    {
        $fid = $_GET['fid'];
        if(!empty($token)){
            $this->assign('fid',$fid);
            $this->display();
        }else{
            $this->redirect('Login/login',array('type'=>'2','fid'=>$fid));
        }
    }

    //评论提交页
    public function check_comment($token = 0)
    {
        if(!empty($token)){
            $list['free_uid'] = encrypt($token,'D');
            $list['fid'] = I('post.fid');
            $list['com_time'] = time();
            if (!empty($_POST['comment'])) {
                $list['com_content'] = I('post.comment');
                $result = M('free_com')->add($list);
                if ($result) {
                    $data['free_com_num'] = array('exp','free_com_num + 1');
                    $re = M('free')->where("fid = %d",array($list['fid']))->save($data);
                    if ($re) {
                        $this->redirect('marketDetail',array('token'=>$token,'fid'=>$list['fid']));
                    } else {
                        $this->error('发表失败');
                    }
                } else {
                    $this->error('发表失败');
                }
            } else {
                $this->error('请输入评论内容');
            }
        }else{
            $this->redirect('Login/login',array('type'=>'2','fid'=>$_POST['fid']));
        }
    }

    //发帖页面
    public function newPost($token = 0)
    {
        if(!empty($token)){
            $this->assign('token', $token);
            $this->display();
        }else{
            $this->redirect('Login/login',array('type'=>'1'));
        }
    }

    //发帖
    public function add_free(){
        $token = I('post.token');
        $arr = array(
            'free_title' => I('post.title'),
            'free_content' => I('post.needs'),
            'free_uid' => encrypt($token,'D'),
            'free_time' => time()
        );
        $add = M('free')->add($arr);
        if($add){
            $this->redirect('marketList',array('token'=>$token));
        }
    }

    function weixin_code(){
        $appid = "wx895cf8def7c55e16";
        $appSecret = '000b24efbd8a7649e5dd86311bce8e0d';
        $url = $this->get_code($appid,"http://h5.weihehuo.net/Home/Market/marketList.html");
        redirect($url);
    }

    function weixin_openid($code){
        $appid = "wx895cf8def7c55e16";
        $appSecret = '000b24efbd8a7649e5dd86311bce8e0d';
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

    //分页
    function getpage($count, $pagesize) {
        $p = new \Think\Page($count, $pagesize);
        $p->setConfig('prev', '上一页');
        $p->setConfig('next', '下一页');
        $p->setConfig('last', '末页');
        $p->setConfig('first', '首页');
        $p->setConfig('theme', '%FIRST%%UP_PAGE%%DOWN_PAGE%%END%');
        return $p;
    }
}