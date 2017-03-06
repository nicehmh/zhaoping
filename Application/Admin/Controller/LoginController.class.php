<?php
namespace Admin\Controller;
use Think\Controller;
class LoginController extends Controller {
    public function login(){
          $this->display();
    }
	public function do_Smlogin(){
                 $m=M('administrator');
				 $where['user']=I('post.admin');
                 $where['password']=I('post.pwd');
		         $arr=$m->where($where)->find();
		         if($arr>0){
		          	$t=I('post.admin');
			        $p=$arr['grant'];
                    session('admin',$t);
			        session('grant',$p);
				   if($p=='1'){
					     $this->redirect('Smanager/index');
				   }else{
					     $this->error('登录失败','Sm_login');
				   }
				 }else{
					     $this->error('登录失败','Sm_login');
				   }
    }
    public function do_login(){
    	
		$op=I('post.option');
		if($op=='option1'){
		   $m=D('professior');
		    $where['user']=I('post.admin');
		   $where['password']=I('post.pwd');
		   $arr=$m->where($where)->find();
		   if($arr>0){
		    	$t=I('post.admin');
			    $p=$arr['grant'];
                session('expert',$t);
			    session('grant',$p);
		        $this->redirect('Xexpert/shouye');
		   }else{
		       	$this->error("登录失败，请重新登陆","login");
		   }
		}else if($op=='option2'){
		         $m=M('administrator');
				 $where['user']=I('post.admin');
                 $where['password']=I('post.pwd');
		         $arr=$m->where($where)->find();
		         
		         if($arr>0){
		          	$t=I('post.admin');
			        $p=$arr['grant'];
                    session('admin',$t);
			        session('grant',$p);
				   if($p=='2'){
					     $this->redirect('Ymanager/index');
				   }else if($p=='1'){
					     $this->redirect('Xmanager/index');
				   }else if($p=='10'){
				    	$this->redirect('Ymanager/index');
				   }
		        }else{
		            	$this->error("登录失败，请重新登陆","login");
		         }
	   }
		
    }
}