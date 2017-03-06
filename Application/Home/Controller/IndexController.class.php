<?php
namespace Home\Controller;
use Think\Controller;
class IndexController extends Controller {
    public function index(){
		$m=M('information');
		$where['class']="相关信息";
		$map['class']="工作动态";
		$str2=$m->field('id,title')->where($map)->select();
		$str=$m->field('id,title')->where($where)->select();
        if(!empty($_SESSION['user'])){
            $sess=$_SESSION['user'];
        }else{
            $sess="1";
        }
        $con=M('information');
        $where['class']="最新通知";
        $result1=$con->where($where)->order("id desc")->select();
        $this->assign("information1",$result1);

        $where['class']="工作动态";
        $result2=$con->where($where)->order("id desc")->select();
        $this->assign("information2",$result2);
		$this->assign('list',$str);
		$this->assign('list2',$str2);
        $this->assign("sess",$sess);
		$this->display();       
    }
     public function verify(){
        $config= array(
            'fontSize'    =>   19,    // 验证码字体大小   
            'length'      =>   4,     // 验证码位数    
            'useNoise'    =>   false, // 关闭验证码杂点
            'imageW'      =>   140 ,      //验证码宽度 设置为0为自动计算 
            'imageH'      =>    40 ,    //验证码高度 设置为0为自动计算 
        );
        ob_clean();
        $Verify = new\Think\Verify($config);
        $Verify->codeSet = '0123456789'; 
        $Verify->entry();
     }
     Public function check_verify($code, $id = ''){
                   $verify = new \Think\Verify();
                   return $verify->check($code, $id);
     }
     public function do_login(){
        $code = I('get.code');
        $id='';
        if(!$this->check_verify($code, $id)){    
             echo "验证码错误";exit;
        }
        $map['user']=I('get.user');
        $map['password']=I('get.password');
        $m=M('applicant');
        if($m->where($map)->find())
        {
            $_SESSION['user']=I('get.user');
            echo "登陆成功";
        }else{
            echo "登陆失败";
        }
     }
     //清除session
     public function unsetsess(){
          unset($_SESSION['user']);
          echo "hello";
     }
    public function ltjs(){
		$m=M('shuoming');
		$con=$m->where('sid=1')->find();
		//dump($con);
		if($con){
			$this->assign('con',$con['ltjs']);
		}
		$this->display();       
    }
    public function xxjs(){
		$m=M('shuoming');
		$con=$m->where('sid=1')->find();
		if($con){
			$this->assign('con',$con['sqtj']);
		}
		$this->display();       
    }
    public function rczp(){
		$m=M('shuoming');
		$con=$m->where('sid=1')->find();
		if($con){
			$this->assign('con',$con['sqsj']);
		}
		$this->display();       
    }
    public function xytx_try(){
		$m=M('shuoming');
		$con=$m->where('sid=1')->find();
		if($con){
			$this->assign('con',$con['rcap']);
		}
		$this->display();       
    }
	//-------
	public function xytx(){
		$m=M('img');
		$str=$m->select();
		//dump($str);
		$this->assign('imgs',$str);
		$this->display();
	}
}