<?php
// 本类由系统自动生成，仅供测试用途
namespace Admin\Controller;
use Think\Controller;
class XexpertController extends Controller {
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
	//--------------------第二次修改后-----------------------------------------------------
	//-------------shouye------------
	public function shouye(){
		$pl=M('professior');
		$map['user']=$_SESSION['expert'];
		$plp=$pl->where($map)->find();
		$pid=$plp['pid'];
		$m=M('application');
		$d=M('zjform');
		$wh['pid']=$pid;
		$wh['state']=1;
		$stra=$d->where($wh)->select();
		if($stra){
		    $i=0;
		    foreach($stra as $st){
		      $whr['numid']=$st['numid'];
		      $string=$m->field('numid,name,major,aid,kp2')->where($whr)->find();
			  $string['kp2']="未评审";
			   $strings_a[$i]=$string;
			   $i++;
		    }	
		}
		$wh['state']=10;
		$strb=$d->where($wh)->select();
		if($strb){
		    $i=0;
		    foreach($strb as $st){
		      $whr['numid']=$st['numid'];
		      $string=$m->field('numid,name,major,aid,kp2')->where($whr)->find();
			   $string['kp2']="已保存";
			   $strings_b[$i]=$string;
			   $i++;
			}
		}
		$wh['state']=3;
		$strc=$d->where($wh)->select();
		if($strc){
		    $i=0;
		    foreach($strc as $st){
		      $whr['numid']=$st['numid'];
		      $string=$m->field('numid,name,major,aid,kp2')->where($whr)->find();
			   $string['kp2']="已取消";
			   $strings_c[$i]=$string;
			   $i++;
		    }	
		}
		$wh['state']=2;
		$strd=$d->where($wh)->select();
		if($strd){
		    $i=0;
		    foreach($strd as $st){
		      $whr['numid']=$st['numid'];
		       $string=$m->field('numid,name,major,aid,kp2')->where($whr)->find();
			   $string['kp2']="已评审";
			   $strings_d[$i]=$string;
			   $i++;
		    }	
		}
		$this->assign('list1',$strings_a);
		$this->assign('list2',$strings_b);
		$this->assign('list3',$strings_c);
		$this->assign('list4',$strings_d);
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
	//----------取消评审---------------
	public function cal(){
	    $mp['numid']=I('get.numid');
		$pl=M('professior');
		$map['user']=$_SESSION['expert'];
		$plp=$pl->where($map)->find();
		$pid=$plp['pid'];
        $mp['pid']=$pid;
	    $pm['state']=3;
            $m=M('zjform');
            $m->where($mp)->save($pm);
            echo "1";	    
	}
	public function pingshen(){
		$where['numid']=I('get.numid');
		$where2['aid']=I('get.aid');
		$m=M("application");
		$m2=M("education_experience");
		$m3=M("work_experience");
		$str=$m->where($where)->find();
		$str2=$m2->where($where2)->select();
		$str3=$m3->where($where2)->select();
		$this->assign('list',$str);
		$i=1;
		foreach($str2 as $rt){
			$str4[$i]['xuewei']=$rt['xuewei'];
			$str4[$i]['edu_start_time']=$rt['edu_start_time'];
			$str4[$i]['edu_end_time']=$rt['edu_end_time'];
			$str4[$i]['zhuanye']=$rt['zhuanye'];
			$str4[$i]['school']=$rt['school'];
			$i++;
		}
		$j=1;
		foreach($str3 as $rt){
			$str5[$j]['job']=$rt['job'];
			$str5[$j]['job_start_time']=$rt['job_start_time'];
			$str5[$j]['job_end_time']=$rt['job_end_time'];
			$str5[$j]['nation']=$rt['nation'];
			$str5[$j]['company']=$rt['company'];
			$j++;
		}
		if(!$str4){
			$str4[0]['xuewei']="无";
			$str4[0]['edu_start_time']="无";
			$str4[0]['edu_end_time']="无";
			$str4[0]['zhuanye']="无";
			$str4[0]['school']="无";
		}
		if(!$str5){
			$str5[0]['job']="无";
			$str5[0]['job_start_time']="无";
			$str5[0]['job_end_time']="无";
			$str5[0]['nation']="无";
			$str5[0]['company']="无";
		}
		$this->assign('num2',$i);
		$this->assign('list2',$str4);
		$this->assign('num3',$j);
		$this->assign('list3',$str5);
		$this->display();
	}
	//-------记录-----------------
	public function record(){
		//echo I('get.zhangtai');exit;
		$map['tr1']=I('post.num1');
		$map['tr2']=I('post.num2');
		$map['tr3']=I('post.num3');
		$map['sum']=I('post.sum');
		$map['idea']=I('post.con');
		$map['assess']=I('post.sel');
		$where['numid']=I('post.listid');
		$pla=M('professior');
		$mapa['user']=$_SESSION['expert'];
		$plpa=$pla->where($mapa)->find();
		$pida=$plpa['pid'];
		$where['pid']=$pida;
		$m=M('proform');
		$d=M('zjform');
		$po['state']=I('get.zhangtai');
		//dump($where);exit;
		$d->where($where)->save($po);
		$str=$m->where($where)->find();
		if($str){
			$m->where($where)->save($map);
			echo I('get.zhangtai');
		}else{
			    $map['numid']= $where['numid'];
				$map['pid']=$pida;
				if($m->add($map)){
		         	echo I('get.zhangtai');
		        }else{
		        	echo '55';
		        }
		}
	}
	
	
	
	
	
	
	
	
	
	
	
	//---------------------第一次------------------------------------------
	//-------------index.html---------
    public function index(){
	    $pl=M('professior');
		$map['user']=$_SESSION['expert'];
		$plp=$pl->where($map)->find();
		$pid=$plp['pid'];
		$m=M('application');
		$d=M('zjform');
		$wh['pid']=$pid;
		$wh['state']=2;
		$str=$d->where($wh)->select();
		$i=0;
		foreach($str as $st){
		     $whr['numid']=$st['numid'];
		     $strings[$i] =$m->where($whr)->find();
		     $i++;
		}
		$this->assign('list',$strings);
		$this->display();
    }
	//-----h1.html--------
	public function hl(){
		$where['numid']=I('get.numid');
		$where2['uid']=I('get.aid');
		$m=M("application");
		$m2=M("education");
		$m3=M("work");
		$str=$m->where($where)->find();
		$str2=$m2->where($where2)->select();
		$str3=$m3->where($where2)->select();
		$this->assign('list',$str);
		//dump($str2);
		$i=1;
		foreach($str2 as $rt){
			$str4[$i]['time']=$rt['time'];
			$str4[$i]['information']=$rt['information'];
			$i++;
		}
		$j=1;
		foreach($str3 as $rt){
			$str5[$j]['time']=$rt['time'];
			$str5[$j]['information']=$rt['information'];
			$j++;
		}
		$this->assign('num2',$i);
		$this->assign('list2',$str4);
		$this->assign('num3',$j);
		$this->assign('list3',$str5);
		$this->display();
	}
	//文件下载
	public function test(){
	    $filename= "./Public/upload/".I('get.filename');  //文件路径
        $showname=I('get.username')."申请表附件";
		$download=new \Org\Net\Http();
        $download->download($filename,$showname);
    }
	//--------------hl1.html---------
	public function hl1(){
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
	//--------------none.html-----------
	public function none(){
		//$where['uid']=1;
		$pl=M('professior');
		$map['user']=$_SESSION['expert'];
		$plp=$pl->where($map)->find();
		$pid=$plp['pid'];
		$m=M('application');
		$d=M('zjform');
		$wh['pid']=$pid;
		$wh['state']=1;
		$str=$d->where($wh)->select();
		$i=0;
		foreach($str as $st){
		     $whr['numid']=$st['numid'];
			 //dump($whr);
		     $strings[$i] =$m->where($whr)->find();
		     $i++;
		}
		//dump($strings);
		$this->assign('list',$strings);
		$this->display();
	}
	//------------------
	//--------------.html-----------
	public function cancle(){
		//$where['uid']=1;
		$pl=M('professior');
		$map['user']=$_SESSION['expert'];
		$plp=$pl->where($map)->find();
		$pid=$plp['pid'];
		$m=M('application');
		$d=M('zjform');
		$wh['pid']=$pid;
		$wh['state']=3;
		$str=$d->where($wh)->select();
		$i=0;
		foreach($str as $st){
			//dump($st);
		     $whr['numid']=$st['numid'];
		     $strings[$i] =$m->where($whr)->find();
		     $i++;
		}
		//dump($strings);
		$this->assign('list',$strings);
		$this->display();
	}
}