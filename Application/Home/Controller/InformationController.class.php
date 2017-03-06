<?php
namespace Home\Controller;
use Think\Controller;
class InformationController extends Controller {
    public function information(){
        $con=M('information');
        $id=$_GET['id'];
        $where['id']=$id;
        $result=$con->where($where)->find();
        $this->assign("result",$result);
        $this->display(); 
    }
   	 public function newinformation(){
        $con=M('information');
        $where['class']="最新通知";
        $result=$con->where($where)->order("id desc")->select();
        $this->assign("information",$result);
        $this->display(); 
    }
     public function newactivity(){
        $con=M('information');
        $where['class']="工作动态";
        $result=$con->where($where)->order("id desc")->select();
        $this->assign("information",$result);
        $this->display(); 
    }
}