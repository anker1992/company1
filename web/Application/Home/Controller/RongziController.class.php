<?php
namespace Home\Controller;
use Think\Controller;
class RongziController extends Controller {
    //融资首页
    public function seminarpage(){
        $this->display();
    }

    //理财
    public function financeproducts(){
        header("Content-Type:text/html;Charset=utf-8");
        $cplx = isset($_GET['cplx'])?$_GET['cplx']:'';
        $yqsy = isset($_GET['yqsy'])?$_GET['yqsy']:'';
        $zje = isset($_GET['zje'])?$_GET['zje']:'';

        $where = "1=1";
        if($cplx !='不限' && $cplx != '保险' && $cplx != '另类投资' && $cplx != '产品求购'){
            $where .= " and `class` like '%$cplx%'";
        }else{
            if($cplx == '保险'){
                $join = " inner join pro_insurance as a on product.id = a.gid ";
            }elseif($cplx == '另类投资'){
                $join = " inner join alternative_investments as b on product.id = b.gid ";
            }elseif($cplx == '产品求购'){
                $join = " inner join wantbuy as c on product.id = c.gid ";
            }
        }

        switch ($yqsy) {
            case '不限':$yqsya=-1;$yqsyb=1000;break;
            case '1%-4%':$yqsya=1;$yqsyb=4;break;
            case '4%-8%':$yqsya=4;$yqsyb=8;break;
            case '8%-10%':$yqsya=8;$yqsyb=10;break;
            case '10%-12%':$yqsya=10;$yqsyb=12;break;
            case '12%-14%':$yqsya=12;$yqsyb=14;break;
            case '其他':$yqsya=14;$yqsyb=1000;break;
            default:$yqsya=-1;$yqsyb=1000;break;
        }

        switch ($zje) {
            case '不限':$zjea=-1;$zjeb=100000000;break;
            case '1万-10万':$zjea=1;$zjeb=10;break;
            case '10万-50万':$zjea=10;$zjeb=50;break;
            case '50万-100万':$zjea=50;$zjeb=100;break;
            case '100万-500万':$zjea=100;$zjeb=500;break;
            case '500万-1000万':$zjea=500;$zjeb=1000;break;
            case '1000万-5000万':$zjea=1000;$zjeb=5000;break;
            case '5000万-1亿':$zjea=5000;$zjeb=10000;break;
            default:$zjea=-1;$zjeb=100000000;break;
        }

        if($yqsya==-1 && $yqsyb==1000){
            $where .= " and `yqsy` >=".$yqsya." and yqsy <= ".$yqsyb."";
        }

        if($zje==-1 && $yqsyb==100000000){
            $where .= " and `mk` >=".$zjea." and `mk` <= ".$zjeb."";
        }

        //理财列表
        $model = M('product');
        $count = $model->join($join)->where($where)->count();
        //import('ORG.Util.Page');// 导入分页类
        $page = $this->getpage($count,10);
        $show  = $page->show();
        $product = $model->query("select * from product ".$join." where ".$where." limit $page->firstRow,$page->listRows");

        $cplx_list = M('cplx')->select();
        $yqsy_list = M('yqsy')->select();
        $zje_list = M('zje')->select();

        $this->assign('cplx_list',$cplx_list);
        $this->assign('yqsy_list',$yqsy_list);
        $this->assign('zje_list',$zje_list);

        $this->assign('cplx',$cplx);
        $this->assign('yqsy',$yqsy);
        $this->assign('zje',$zje);
        $this->assign('product',$product);
        $this->assign('page',$show);//赋值;分页输出
        $this->display();
    }

    //理财详情
    public function inforelease(){
        header("Content-Type:text/html;Charset=utf-8");
        $cplx = I('get.cplx');
        $id = I('get.id');

        if($cplx == 1 ){
            $model = M('alternative_investments');
        }elseif($cplx ==2 ){
            $model = M('wantbuy');
        }elseif($cplx == 3){
            $model = M('pro_insurance');
        }else{
            $model = M('product');
        }
        $one = $model->where("id = %d",array($id))->find();
        $like = M('product')->order('RAND()')->limit(0,9)->select();
        $pdf = M('pro_prospectus')->where("uptime = '%s'",array($one['releasetime']))->find();

        $this->assign('one',$one);
        $this->assign('pdf',$pdf);
        $this->assign('like',$like);
        if($cplx == 1 ){
            $this->display('linlei');
        }elseif($cplx ==2 ){
            $this->display('chanpin');
        }elseif($cplx == 3){
            $this->display('baoxian');
        }else{
            $this->display();
        }
    }

    //留言
    public function liuyan(){
        $id = I('get.id');
        $this->assign('id',$id);
        $this->display();
    }

    //留言add
    public function liuyan_action(){
        $User = A('Alluser');
        $is_login = $User->is_login();
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

    public function financePage(){
        $this->display();
    }
    public function investorList(){
        $this->display();
    }
    public function financeList(){
        $this->display();
    }
}