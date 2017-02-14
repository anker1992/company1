<?php
namespace Home\Controller;
use Think\Controller;
class CeshiController extends Controller
{
  public function index()
  {
      $arr = array(
          0 => array('title' => '新闻1', 'viewnum' => 123, 'content' => 'ZAQXSWedcrfv'),
          1 =>array('title' => '新闻2', 'viewnum' => 99, 'content' => 'QWERTYUIOPZXCVBNM')
      );
      echo count($arr,1);
  }
}

