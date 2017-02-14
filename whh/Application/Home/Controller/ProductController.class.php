<?php
namespace Home\Controller;
use Think\Controller;
class ProductController extends Controller
{
    public function productList($token = 0)
    {
        if (!$token) {
            $this->error('参数错误');
        } else {
            $uid = encrypt($token,'D');
            $model = M('product');
            $where = " prod_status = 1 and prod_uid != $uid";
            $count = $model->where($where)->count();   //总条数
            $page = $this->getpage($count,10);
            $list = $model
                ->field('prod_id,prod_name,prod_logo,prod_rate,prod_term,prod_money')
                ->where($where)
                ->order('prod_id desc')
                ->limit($page->firstRow,$page->listRows)
                ->select();
            $follow = M('follow')->field('he_id')->where("my_id = '%d' and follow_type = 2",array($uid))->select();
            foreach ($follow as $key=>$value) {
                $collect[] = $value['he_id'];
            }
            $collect = array_flip($collect);
            foreach ($list as $key=>$value) {
                if (array_key_exists($value['prod_id'],$collect)) {
                    $a['status'] = '1';
                } else {
                    $a['status'] = '0';
                }
                $new_list[] = array_merge_recursive($value,$a);
            }
            $page  = $page->show();
            $this->assign('page',$page);
            $this->assign('list',$new_list);
            $this->display();
        }
    }

    public function productDetail($token = 0)
    {
        if (!$token) {
            $this->error('参数错误');
        } else {
            $uid = encrypt($token, 'D');
            $prod_id = I('get.prod_id');
            $model = M('product');
            $data['prod_seen'] = array('exp', 'prod_seen + 1');
            $product = $model->where('prod_id = %d', array($prod_id))->save($data);
            $list = $model
                ->field('prod_id,prod_name,prod_logo,prod_yue_money,prod_seen,prod_money,prod_rate,prod_term,prod_type,prod_cstphone,prod_keeper,prod_trustee,prod_ben_way,prod_describe,prod_yue_num,prod_yue_time,prod_yue_address')
                ->where('prod_id = %d', array($prod_id))
                ->find();
            //是否关注
            $follow = M('follow')->field('fid')->where("my_id = '%d' and he_id = '%d' and follow_type = '2'", array($uid, $prod_id))->find();
            //是否约见过该产品
            $is_appointment = M('appointment')->field('appid')->where("launch_id = '%d' and accept_id = '%d' and accept_order_type = '2'",array($uid,$prod_id))->find();
            if (empty($is_appointment['appid'])) {
                $is_appointment['appid'] = 0;
            }
            $this->assign('follow', $follow['fid']);
            $this->assign('list', $list);
            $this->assign('flag', $is_appointment['appid']);
            $this->display();
        }
    }

    //查看产品详情
    public function prod_details($token = 0)
    {
        if (!$token) {
            $this->error('参数错误');
        } else {
            $prod_id = I('get.prod_id');
            $list = M('product')->where('prod_id = %d', array($prod_id))->field('prod_details')->find();
            $this->assign('list', $list['prod_details']);
            $this->display();
        }
    }

    public function do_heart($token = 0)
    {
        if (!$token) {
            $this->error('参数错误');
        } else {
//            $token = I('post.token');
            $prod_id = I('post.he_id');
            $status = I('post.status');
            $uid = encrypt($token, 'D');
            $model = M('follow');
            $list = $model->field('fid')->where("my_id = '%d' and he_id = '%d' and follow_type = 2", array($uid, $prod_id))->find();
            if ($status == 1) {//收藏
                if (!$list) {
                    $data['my_id'] = $uid;
                    $data['he_id'] = $prod_id;
                    $data['follow_type'] = 2;
                    $data['follow_time'] = time();
                    $result = $model->add($data);
                    if ($result) {
                        $num['my_follow_num'] = array("exp","my_follow_num + 1");
                        $my_follow = M('user_extend')->field('uid')->where('uid = %d',array($uid))->find();
                        if ($my_follow) {
                            $re = M('user_extend')->where('uid = %d',array($uid))->save($num);
                        } else {
                            $num['uid'] = $uid;
                            $re = M('user_extend')->add($num);
                        }
                        if ($re) echo 1;
                    }
                }
            } else {//取消收藏
                if ($list) {
                    $result = $model->where("my_id = '%d' and he_id = '%d' and follow_type = 2", array($uid, $prod_id))->delete();
                    if ($result) {
                        $num['my_follow_num'] = array("exp","my_follow_num - 1");
                        $re = M('user_extend')->where('uid = %d',array($uid))->save($num);
                        if ($re) echo "-1";
                    }
                }
            }
        }
    }

    public function appointment()
    {
        $token = I('post.token');
        $prod_id = I('post.prod_id');
        $uid = encrypt($token,'D');
//        $renzheng = M('user')
//            ->alias('a')
//            ->field('a.realname,a.birthday,a.company,a.work,a.idcard,b.app_card')
//            ->where("a.id = '%d'",array($uid))
//            ->join('left join whh_user_extend as b on a.id = b.uid')
//            ->find();
//        foreach ($renzheng as $key=>$value) {
//            if (empty($value)) {
//                echo '-1';die;
//            }
//        }
        $user_type = M("user")
            ->field("user_type")
            ->where("id = %d",array($uid))
            ->find();
        if ($user_type['user_type'] == 1) { //判断身份，如果浏览者为产品方，则不能约见
            echo '-1';die;
        } else {
            $prod_user = M('product')
                ->field('prod_uid,prod_yue_money,prod_yue_time,prod_yue_address')
                ->where('prod_id = %d',array($prod_id))
                ->find();
            $data['launch_id'] = $uid;
            $data['accept_id'] = $prod_id;
            $data = array(
                'launch_id' => $uid,
                'accept_id' => $prod_id,
                'accept_uid' => $prod_user['prod_uid'],
                'launch_time' => time(),
                'app_time'=> $prod_user['prod_yue_time'],
                'app_address' => $prod_user['prod_yue_address'],
                'accept_money' => $prod_user['prod_yue_money'],
                'accept_income' => $prod_user['prod_yue_money']/2,
                'accept_order_type' => 2
            );
            if (M('appointment')->add($data)) {
                //产品表 被约见次数 +1
                $num['prod_yue_num'] = array('exp','prod_yue_num + 1');
                $re = M('product')->where("prod_id = %d",array($prod_id))->save($num);
                if ($re) {
                    //用户附表 约见次数 +1
                    $yue_num['app_yue_num'] = array("exp","app_yue_num + 1");
                    $result = M('user_extend')->where("uid = %d",array($uid))->save($yue_num);
                    if ($result) echo 1;
                }
            }
        }
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
