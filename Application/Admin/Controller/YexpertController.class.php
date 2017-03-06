<?php
// 本类由系统自动生成，仅供测试用途
namespace Admin\Controller;
use Think\Controller;
class YexpertController extends Controller {
	public function _initialize(){
		if(!empty($_SESSION['expert'])){
			$m=M('professior');
	    	$where['user']=$_SESSION['expert'];
		    $where['grant']=$_SESSION['grant'];
		    $str=$m->where($where)->find();
	    	if(!$str){
				$this->redirect('Login/login');
		    }
		}else{
			$this->redirect('Login/login');
		}
	}
	public function shouye(){
		$pl=M('professior');
		$map['user']=$_SESSION['expert'];
		$plp=$pl->where($map)->find();
		$pid=$plp['pid'];
		$m=M('application');
		$d=M('zjform');
		$wh['pid']=$pid;
		//$wh['state']=2;
		$str=$d->where($wh)->select();
		$i=0;
		//dump($str);
		foreach($str as $st){
		     $whr['numid']=$st['numid'];
			 $string=$m->field('numid,name,major,aid,kp2')->where($whr)->find();
			 switch($st['state']){
				 case 10:
				    $string['kp2']="已保存";
					break;
				 case 1:
				    $string['kp2']="未评审";
					break;
				 case 2:
				    $string['kp2']="已评审";
					break;
				 case 3:
				    $string['kp2']="已取消";
					break;
				 default:
				    $string['kp2']="未评审";
					break;
			 }
		     $strings[$i] = $string;
		     $i++;
		}
		//dump($strings);
		$this->assign('list',$strings);
		$this->display();
	}
	//--------------chakan.html---------
	public function chakan(){
		$pl=M('professior');
		$map['user']=$_SESSION['expert'];
		$plp=$pl->where($map)->find();
		$pid=$plp['pid'];
		$where['pid']=$pid;
		$where['numid']=I('get.numid');
		$m=M('proform');
		$str=$m->where($where)->find();
		//dump($str);
		$this->assign('list',$str);
		$this->display();
	}
}