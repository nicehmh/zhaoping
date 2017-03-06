<?php
// 本类由系统自动生成，仅供测试用途
namespace Admin\Controller;
use Think\Controller;
class YmanagerController extends Controller {
	public function _initialize(){
		if($_SESSION['grant']!='2'){
			$this->redirect('Login/login');
	    }
		if(!empty($_SESSION['admin'])){
			$m=M('administrator');
	    	$where['user']=$_SESSION['admin'];
			$where['grant']=$_SESSION['grant'];
		    $str=$m->where($where)->find();
	    	if(!$str){
				$this->redirect('Login/login');
		    }
		}else{
			$this->redirect('Login/login');
		}
	}
    public function index(){
		  $m=M('proform');
		  $d=M('application');
		  $dl=M('professior');
		  $str=$m->distinct(true)->field('numid')->select();
		  $i=0;
		  foreach($str as $list){
			  $where['numid']=$list['numid'];
			  $str1=$m->field('pid')->where($where)->find();
			  if($str1){
				  $wh1['pid']=$str1['pid'];
				  $wh1['grant']=3;
				  $str2=$dl->where($wh1)->find();
				  if($str2){
					  $listo=$d->where($where)->find();
					  if($listo){
						  $listp[$i]=$listo;  $i++;
					  }
				  }
			  }
		  }    			  
		  $this->assign('list',$listp);
		  $this->display();
    }
	public function index2(){
		$pl=M('administrator');
	    $mapa['user']=$_SESSION['admin'];
	    $plp=$pl->where($mapa)->find();
	    $id=$plp['id'];
	    $where10['ad_id']=$id;
		  $m=M('proform');
		  $d=M('application');
		  $dl=M('professior');
		  $p2=M('adform');
		  $str=$m->distinct(true)->field('numid,tid')->where($where10)->select();
		  $where10['state']=2;
		  $i=0;
		  foreach($str as $list){
			  $where['numid']=$list['numid'];
			  $where10['numid']=$list['numid'];
			  $trp2=$p2->where($where10)->find();
			  if($trp2){
				  $str1=$d->field('numid,name,major,kp2')->where($where)->find();
			      if($str1){
					$str1['kp2']=$list['tid'];
				    $listp[$i]=$str1;  $i++;
			      }
			  }
		  }    			  
		  $this->assign('list',$listp);
		  $this->display();
    }
	//退回专家评审
	public function tuihui(){
		$where['numid']=I('get.numid');
		$where['pid']=I('get.pid');
		$pl=M('administrator');
	    $mapa['user']=$_SESSION['admin'];
	    $plp=$pl->where($mapa)->find();
	    $id=$plp['id'];
	    $where['ad_id']=$id;
		$map['state']=1;
		$m=M('zjform');
		$m->where($where)->save($map);
		$where2['pid']=I('get.pid');
		$where2['numid']=I('get.numid');
		$m2=M('proform');
		$m2->where($where2)->delete();
		$this->redirect('look?numid='.$where2['numid']);
	}
	
    public function del(){
	   $where['numid']=I('get.numid');
	   $pl=M('administrator');
	   $mapa['user']=$_SESSION['admin'];
	   $plp=$pl->where($mapa)->find();
	   $id=$plp['id'];
	   $where['ad_id']=$id;
	   $m1=M('adform'); 
	   $m1->where($where)->delete();
	   $pl->where($where)->delete();
	   $this->redirect('Xmanager/index'); 
    }
	//-----h1.html--------
	public function hl(){
		$where['numid']=I('get.numid');
		$where2['aid']=I('get.aid');
		$m=M("application");
		$m2=M("education_experience");
		$m3=M("work_experience");
		$str=$m->where($where)->find();
		$str2=$m2->where($where2)->select();
		$str3=$m3->where($where2)->select();
		$this->assign('list',$str);
		//dump($str2);
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
	//文件下载
	public function test(){
	    $filename= "./Public/upload/".I('get.filename');  //文件路径
        $showname=I('get.username')."申请表附件";
		$download=new \Org\Net\Http();
        $download->download($filename,$showname);
    }
	//--------------hl1.html---------
	public function hl1(){
		$where['tid']=I('get.tid');
		$m=M('proform');
		$str=$m->where($where)->find();
		//dump($str);
		$this->assign('list',$str);
		$this->display();
	}
	//-------add.html--------------
	public function add(){
		$pl=M('administrator');
		$mapa['user']=$_SESSION['admin'];
		$plp=$pl->where($mapa)->find();
		$id=$plp['id'];
		$m=M('professior');
		$where['grant']=3;
		$where['uid']=$id;
		$str=$m->where($where)->select();
		$this->assign('list',$str);
		$this->display();
	}
	public function rcexpert(){
	    $pl=M('administrator');
		$mapa['user']=$_SESSION['admin'];
		$plp=$pl->where($mapa)->find();
		$id=$plp['id'];
		 $map['user']=I('get.user');
		  $map['password']=I('get.password');
		   $map['name']=I('get.name');
		    $map['college']=I('get.college');
			 $map['work_area']=I('get.work_area');
			  $map['kp1']=I('get.kp1');
			   $map['kp2']=I('get.kp2');
			    $map['kp3']=I('get.kp3');
				 $map['grant']=3;
				  $map['uid']=$id;
	    $m=M('professior');
		if($m->add($map)){
			echo "添加成功";
		}else{
			echo "添加失败";
		}
	}
	public function delexpert(){
		$where['pid']=I('get.id');
		$m=M('professior');
		if($m->where($where)->delete()){
			echo "删除成功";
		}else{
			echo "删除失败";
		}
	}
	//-----------------look.html---------------
	public function look(){
		$where['numid']=I('get.numid');
		$where['state']=2;
		$pl=M('administrator');
		$mapa['user']=$_SESSION['admin'];
		$plp=$pl->where($mapa)->find();
		$id=$plp['id'];
		$where['ad_id']=$id;
		$m=M('zjform');
		$d=M('proform');
		$lp=M('professior');
		$str=$m->where($where)->select();
		$i=0;
		foreach($str as $st){
			$rt['pid']=$st['pid'];
			$pl=$lp->where($rt)->find();
			$rt['numid']=$st['numid'];
			$yp[$i]=$d->where($rt)->find();
			if($yp){
			  	$yp[$i]['tr1']=$pl['name'];
			    $i++;	
			}
		}
		$this->assign('list',$yp);
		$this->display();
	}
	//-------------------------------------handout------------
	public function handout(){
	    $pl=M('administrator');
		$map['user']=$_SESSION['admin'];
		$plp=$pl->where($map)->find();
		$id=$plp['id'];
		$m=M('application');
		$d=M('adform');
		$ml=M('professior');
		$wh['ad_id']=$id;
		//$wh['state']=1;
		$str=$d->field('numid')->order('id desc')->where($wh)->select();
		$i=0;
		$p2=M('zjform');
	    $whr['ad_id']=$id;
		foreach($str as $st){
			$strings[$i]=$m->field('name,major,numid,aid,kp2')->where($st)->find();
			$whr['numid']=$st['numid'];
			$strp_numid=$st['numid'];
			$trp2=$p2->field('pid')->where($whr)->select();
			$j=0;
			foreach($trp2 as $tr2){
				$trplpp2[$strp_numid][$j]=$ml->field('pid,name')->where($tr2)->find();
				$j++;
			}
			$trp1=$d->field('state')->where($st)->find();
            $strings[$i]['kp2']="评审";
		  switch($trp1['state']){
			case 1:
			  $strings[$i]['kp2']="评审";
			  break;
			case 2:
			    $strings[$i]['kp2']="查看评审";
			    break;
			case 3:
			    $strings[$i]['kp2']="评审";
			    break;
			case 10:
			    $strings[$i]['kp2']="再次评审";
			    break;
	     }
		 $i++;
		}
		//dump($trplpp2);
		$expert['uid']=$id;
		$expert['grant']=3;
		$kl=$ml->where($expert)->select();
		$this->assign('listl',$strings);
		$this->assign('trp2',$trplpp2);
		$this->assign('list',$kl);
	    $this->display();
    }
	public function zhangtai(){
		$state=I('get.kp2');
		$numid=I('get.numid');
		$aid=I('get.aid');
		
		switch($state){
			case '查看评审':
			   $pla=M('administrator');
		       $mapa['user']=$_SESSION['admin'];
		       $plpa=$pla->where($mapa)->find();
		       $pida=$plpa['id'];
		       $where['ad_id']=$pida;
		       $where['numid']=$numid;
			   $m=M('proform');
			   $str=$m->where($where)->find();
			   $tid=$str['tid'];
			   $this->redirect('hl1?tid='.$tid);
			   break;
		    default:
			   $this->redirect('pingshen?numid='.$numid.'&aid='.$aid);
			   break;
		}
	}
	//------------------------院管理员评审------
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
		//dump($str2);
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
	//-------评分记录-----------------
	public function record(){
		//echo I('get.zhangtai');exit;
		$map['tr1']=I('post.num1');
		$map['tr2']=I('post.num2');
		$map['tr3']=I('post.num3');
		$map['sum']=I('post.sum');
		$map['idea']=I('post.con');
		$map['assess']=I('post.sel');
		$where['numid']=I('post.listid');
		$pla=M('administrator');
		$mapa['user']=$_SESSION['admin'];
		$plpa=$pla->where($mapa)->find();
		$pida=$plpa['id'];
		$where['ad_id']=$pida;
		$m=M('proform');
		$d=M('adform');
		$po['state']=I('get.zhangtai');
		//dump($where);exit;
		$d->where($where)->save($po);
		$str=$m->where($where)->find();
		if($str){
			$m->where($where)->save($map);
			echo I('get.zhangtai');
		}else{
			    $map['numid']= $where['numid'];
				$map['ad_id']=$pida;
				if($m->add($map)){
		         	echo I('get.zhangtai');
		        }else{
		        	echo '55';
		        }
		}
	}
	//--------------------获得状态----------------
	public function read_state(){
	    $m=M('zjform');
		$where['numid']=I('get.numid');
		$where['pid']=I('get.pid');
		$str=$m->field('state')->where($where)->find();
		switch($str['state']){
			case 1:
			  echo "未评审";
			    break;
			case 2:
			  echo "已评审";
			    break;
			case 3:
			  echo "已取消";
			    break;
			case 10:
			  echo "已保存";
			    break;
		}
	}
	public function xzj(){
		$all=I('get.all');
		$allnum=explode(',',$all);
		$mapl['prl_id']=I('get.pid');
		$d=M('zjform');
		$m=M('application');
		$pl=M('administrator');
		$map['user']=$_SESSION['admin'];
		$plp=$pl->where($map)->find();
		$id=$plp['id'];
		foreach($allnum as $numid){
			if($numid){
				$mp['numid']=$numid;
				$mp['pid']=I('get.pid');
				$mp['ad_id']=$id;
				if($d->where($mp)->find()){
					
				}else{
					$mp['state']=1;
				    $d->add($mp);
				}
		    }
	    }
		echo "分发成功";
	}
	//------------------------replay------------
	public function replay(){
		$aid=I('get.aid');
		$_SESSION['aid']=$aid;
		$where['aid']=$aid;
		$m=M('applicant');
		$str=$m->field('user')->where($where)->find();
		if(!$str){
			//$this->error('操作失败','index');
		}
		$wher2['apt_user']=$str['user'];
		$m2=M('replay');
		$str2=$m2->where($wher2)->find();
		if($str2){
			switch($str2['state']){
				case "申请收悉":
				   $str2['num']=1;
				   $str2['rt']=25;
				   $str2['ys']="progress-bar progress-bar-warning";
				   break;
			    case "通过初审":
				   $str2['num']=2;
				   $str2['rt']=50;
				   $str2['ys']="progress-bar progress-bar-info";
				   break;
		        case "正式邀请":
				   $str2['num']=3;
				   $str2['rt']=75;
				   $str2['ys']="progress-bar progress-bar-info";
				   break;
		        case "已发送邀请函":
			       $str2['num']=4;
				   $str2['rt']=100;
				   $str2['ys']="progress-bar progress-bar-success";
				   break;
				default:
				  $str2['num']=0;
				  $str2['ys']="progress-bar progress-bar-success";
				  $str2["rt"]=0;
				  break;
			}
		}else{
			 $str2['num']=0;
			 $str2['ys']="progress-bar progress-bar-success";
			 $str2["rt"]=0;
		}
		$this->assign('list',$str2);
		$this->assign('aid',$aid);
		$this->display();
	}
	public function restate(){
		$pl=M('administrator');
		$map['user']=$_SESSION['admin'];
		$plp=$pl->where($map)->find();
		$id=$plp['id'];
		$where['ad_id']=$id;//
		
		$wher1['aid']=$_SESSION['aid'];
		$apt=M('applicant');
		$str=$apt->where($wher1)->find();
		$where2['apt_user']=$str['user'];
		$rt=M('replay');
		$num=$rt->where($where2)->find();

		if(!$num){
			$where['apt_user']=$where2['apt_user'];
			$where['state']=I('get.state');
			if($rt->add($where)){
				echo "回复成功";
			}else{
				echo "回复失败";
			}
		}else{
			$rt_wh['rid']=$num['rid'];
			$where['state']=I('get.state');
			$rt->where($rt_wh)->save($where);
			echo "回复成功";
		}
	}
	public function send_con(){
		$con=I('get.ModalLabel');
		$wher1['aid']=$_SESSION['aid'];
		$apt=M('applicant');
		$str=$apt->where($wher1)->find();
		$yx=$str['user'];
		//dump($yx);
		$pt='邀请函';
        $FromUser='华中农业大学南湖国际青年科学家论坛';
		import('Vendor.Mail');
        SendMail($yx,$pt,$con,$FromUser);
		
	    $pl=M('administrator');
		$map['user']=$_SESSION['admin'];
		$plp=$pl->where($map)->find();
		$id=$plp['id'];
		$where['ad_id']=$id;
		
	    $where['apt_user']=$str['user'];
		$rt=M('replay');
		$num=$rt->where($where)->find();
		if(!$num){
			$where['state']="已发送邀请函";
			if($rt->add($where)){
				echo "回复成功";
			}else{
				echo "回复失败";
			}
		}else{
			$rt_wh['rid']=$num['rid'];
			$where['state']="已发送邀请函";
			$rt->where($rt_wh)->save($where);
			echo "回复成功";
		}
		//dump($con);
	}
}