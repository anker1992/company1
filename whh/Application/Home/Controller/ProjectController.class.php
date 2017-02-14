<?php
namespace Home\Controller;
use Think\Controller;
class ProjectController extends Controller
{
    //项目列表
    public function projectlist($token = 0)
    {
        if (!$token) {
            $this->error('参数错误');
        } else {
            $uid = encrypt($token,'D');
            $model = M('project');

            //判断是否有需求

            $is_needs = M('user_extend')->field("proj_my_needs")->where("uid = '%d'",array($uid))->find();
            $need_list = array();
            if(!empty($is_needs)){
                $map['proj_status'] = array("eq",'1');
                $map['proj_uid'] = array("neq",$uid);
                $map['proj_industry']  = array('in',$is_needs['proj_my_needs']);
                $need_list = $model
                    ->field('proj_id,proj_name,proj_logo,proj_ject,proj_area,proj_round,proj_money')
                    ->where($map)
                    ->select();
            }

            $where = " proj_status = 1 and proj_uid != $uid";
            $count = $model->where($where)->count();   //总条数
            $page = $this->getpage($count,10);
            $list = $model
                ->field('proj_id,proj_name,proj_logo,proj_ject,proj_area,proj_round,proj_money')
                ->where($where)
                ->order('proj_id desc')
                ->limit($page->firstRow,$page->listRows)
                ->select();
            //合并数组
            if(!empty($need_list)){
                $all_list = array_merge($need_list,$list);
                foreach ($all_list as $k=>$v){
                    $v=join(',',$v); //降维,也可以用implode,将一维数组转换为用逗号连接的字符串
                    $temp[$k]=$v;
                }
                $temp=array_unique($temp); //去掉重复的字符串,也就是重复的一维数组
                foreach ($temp as $k => $v){
                    $array=explode(',',$v); //再将拆开的数组重新组装
                    //下面的索引根据自己的情况进行修改即可
                    $temp[$k]['proj_id'] =$array[0];
                    $temp[$k]['proj_name'] =$array[1];
                    $temp[$k]['proj_logo'] =$array[2];
                    $temp[$k]['proj_ject'] =$array[3];
                    $temp[$k]['proj_area'] =$array[4];
                    $temp[$k]['proj_round'] =$array[5];
                    $temp[$k]['proj_money'] =$array[6];
                }
            }else{
                $temp = $list;
            }
            $follow = M('follow')->field('he_id')->where('my_id = %d and follow_type = 1',array($uid))->select();
            foreach ($follow as $key=>$value) {
                $collect[] = $value['he_id'];
            }
            $collect = array_flip($collect);
            foreach ($temp as $key=>$value) {
                if (array_key_exists($value['proj_id'],$collect)) {
                    $a['status'] = '1';
                } else {
                    $a['status'] = '0';
                }
                $new_list[] = array_merge_recursive($value,$a);
            }
            $page  = $page->show();
            $this->assign('page',$page);
            $this->assign('list',$temp);
            $this->display();
        }
    }

    //项目详情
    public function projectdetail($token = 0)
    {
        if (!$token) {
            $this->error('参数错误');
        } else {
            $uid = encrypt($token, 'D');
            //echo $uid;die;
            $proj_id = I('get.proj_id');
            $model = M('project');
            $data['proj_seen'] = array('exp', 'proj_seen + 1');
            $product = $model->where('proj_id = %d', array($proj_id))->save($data);
            $list = $model
                ->field('proj_id,proj_name,proj_logo,proj_yue_num,proj_seen,proj_yue_money,proj_money,proj_round,proj_industry,proj_type,proj_ject,proj_ceo_logo,proj_ceo_name,proj_ceo_position,proj_ceo_introduce,proj_url,proj_yue_address,proj_yue_time,proj_yue_num')
                ->where('proj_id = %d', array($proj_id))
                ->find();
            //约见次数
            //$list[''] = M('appointment')->where("accept_id = '%d'", array($proj_id))->count();
            //是否关注
            $follow = M('follow')->field('fid')->where("my_id = '%d' and he_id = '%d' and follow_type = '1'", array($uid, $proj_id))->find();
            //是否约见过该产品
            $is_appointment = M('appointment')->field('appid')->where("launch_id = '%d' and accept_id = '%d' and accept_order_type = '1'",array($uid,$proj_id))->find();
            //echo M('appointment')->getLastsql();die;
           // print_R($is_appointment);die;
            if (empty($is_appointment)) {
                $is_appointment = 0;
            }
            $this->assign('follow', $follow['fid']);
            $this->assign('list', $list);
            $this->assign('flag', $is_appointment);

            $this->display();
        }
    }

    //项目收藏（关注）
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
            $list = $model->field('fid')->where("my_id = '%d' and he_id = '%d' and follow_type = 1", array($uid, $prod_id))->find();
            if ($status == '1') {//收藏
                if (!$list) {
                    $data['my_id'] = $uid;
                    $data['he_id'] = $prod_id;
                    $data['follow_type'] = 1;
                    $data['follow_time'] = time();
                    $result = $model->add($data);
                    if ($result) {
                        //用户收藏数+1
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
            } else {
                //取消收藏
                if ($list) {
                    $result = $model->where("my_id = '%d' and he_id = '%d' and follow_type = 1", array($uid, $prod_id))->delete();
                    if ($result) {
                        //用户收藏数-1
                        $num['my_follow_num'] = array("exp","my_follow_num - 1");
                        $re = M('user_extend')->where('uid = %d',array($uid))->save($num);
                        if ($re) echo "-1";
                    }
                }
            }
        }
    }

    //项目约见
    public function appointment()
    {
        $token = I('post.token');
        $proj_id = I('post.proj_id');
        $uid = encrypt($token,'D');
        $renzheng = M('user')
            ->alias('a')
            ->field('a.realname,a.birthday,a.company,a.work,a.idcard,b.app_card')
            ->where("a.id = %d",array($uid))
            ->join('left join whh_user_extend as b on a.id = b.uid')
            ->find();
        foreach ($renzheng as $value) {
            if (empty($value)) {
                echo '-1';die;
            }
        }
        $proj_user = M('project')
            ->field('proj_uid,proj_yue_money,proj_yue_time,proj_yue_address')
            ->where('proj_id = %d',array($proj_id))
            ->find();
        $data['launch_id'] = $uid;
        $data['accept_id'] = $proj_id;
        $data = array(
            'launch_id' => $uid,
            'accept_id' => $proj_id,
            'accept_uid' => $proj_user['proj_uid'],
            'launch_time' => time(),
            'app_time'=> $proj_user['proj_yue_time'],
            'app_address' => $proj_user['proj_yue_address'],
            'accept_money' => $proj_user['proj_yue_money'],
            'accept_income' => $proj_user['proj_yue_money']/2,
            'accept_order_type' => 1
        );
        if (M('appointment')->add($data)) {
            $extenf['app_yue_num'] = array('exp', 'app_yue_num + 1');
            $extend = M('user_extend')->where("uid = %d",array($uid))->save($extenf);
            echo 1;
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
