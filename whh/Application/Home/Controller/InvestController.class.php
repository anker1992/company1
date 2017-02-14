<?php
namespace Home\Controller;
use Think\Controller;
class InvestController extends Controller
{
    public function investList($token = 0)
    {
        if (!$token) {
            $this->error('参数错误');
        } else {
            $uid = encrypt($token,'D');
            $model = M('invest');
            $count = $model->where("inv_status = 1 and inv_uid != ".$uid)->count();   //总条数
            $page = $this->getpage($count,10);
            $list = $model
                ->field('inv_id,inv_name,inv_logo,inv_in_company,inv_type')
                ->where("inv_status = 1 and inv_uid != ".$uid)
                ->order('inv_id desc')
                ->limit($page->firstRow,$page->listRows)
                ->select();
            $page  = $page->show();
            $this->assign('page',$page);
            $this->assign('list',$list);
            $this->display();
        }
    }

    public function investDetail($token = 0)
    {
        if (!$token) {
            $this->error('参数错误');
        } else {
            $uid = encrypt($token, 'D');
            $inv_id = I('get.inv_id');
            $model = M('invest');
            $data['inv_seen'] = array('exp', 'inv_seen + 1');
            $invest = $model->where('inv_id = %d', array($inv_id))->save($data);
            $list = $model
                ->field('inv_id,inv_name,inv_logo,inv_yue_money,inv_seen,inv_min_money,inv_max_money,inv_field,inv_introduce,inv_type,inv_logo_one,inv_logo_two,inv_company_one,inv_company_two,inv_in_company,inv_in_logo,inv_in_com,inv_yue_num,inv_yue_time,inv_yue_address')
                ->where('inv_id = %d', array($inv_id))
                ->find();
            //是否关注
            $follow = M('follow')->field('fid')->where("my_id = '%d' and he_id = '%d' and follow_type = '3'", array($uid, $inv_id))->find();
            //是否约见过该产品
            $is_appointment = M('appointment')->field('appid')->where("launch_id = '%d' and accept_id = '%d' and accept_paystatus = '1' and accept_order_type = '3'",array($uid,$inv_id))->find();
            if (empty($is_appointment['appid'])) {
                $is_appointment['appid'] = 0;
            }
            $this->assign('follow', $follow['fid']);
            $this->assign('list', $list);
            $this->assign('flag', $is_appointment['appid']);
            $this->display();
        }
    }

    public function do_heart($token = 0)
    {
        if (!$token) {
            $this->error('参数错误');
        } else {
            $inv_id = I('post.he_id');
            $status = I('post.status');
            $uid = encrypt($token, 'D');
            $model = M('follow');
            $list = $model->field('fid')->where("my_id = '%d' and he_id = '%d' and follow_type = 3", array($uid, $inv_id))->find();
            if ($status == 1) {//收藏
                if (!$list) {
                    $data['my_id'] = $uid;
                    $data['he_id'] = $inv_id;
                    $data['follow_type'] = 3;
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
                    $result = $model->where("my_id = '%d' and he_id = '%d' and follow_type = 3", array($uid, $inv_id))->delete();
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
        $inv_id = I('post.inv_id');
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
        if ($user_type['user_type'] == 2) { //判断身份，如果浏览者为投资方，则不能约见
            echo '-1';die;
        } else {
            $inv_user = M('invest')
                ->field('inv_uid,inv_yue_money,inv_yue_time,inv_yue_address')
                ->where('inv_id = %d', array($inv_id))
                ->find();
            $data['launch_id'] = $uid;
            $data['accept_id'] = $inv_id;
            $data = array(
                'launch_id' => $uid,
                'accept_id' => $inv_id,
                'accept_uid' => $inv_user['inv_uid'],
                'launch_time' => time(),
                'app_time' => $inv_user['inv_yue_time'],
                'app_address' => $inv_user['inv_yue_address'],
                'accept_money' => $inv_user['inv_yue_money'],
                'accept_income' => $inv_user['inv_yue_money'] / 2,
                'accept_order_type' => 3
            );
            if (M('appointment')->add($data)) {
                //投资表 约见次数+1
                $num['inv_yue_num'] = array('exp', 'inv_yue_num + 1');
                $re = M('invest')->where("inv_id = %d", array($inv_id))->save($num);
                if ($re) {
                    //用户附表约见次数 +1
                    $yue_num['app_yue_num'] = array("exp", "app_yue_num + 1");
                    $result = M('user_extend')->where("uid = %d", array($uid))->save($yue_num);
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
