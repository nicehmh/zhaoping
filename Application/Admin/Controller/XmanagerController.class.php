<?php
// 本类由系统自动生成，仅供测试用途
namespace Admin\Controller;
use Think\Controller;
class XmanagerController extends Controller {
	public function _initialize(){
		if($_SESSION['grant']!='1'){
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
		  $i=0;$j1=0;$j2=0;$j3=0;
		  foreach($str as $list){
			  $where['numid']=$list['numid'];
			  $kl=$d->field('numid,name,major,aid')->where($where)->find();
			  $j1=0;$j2=0;$j3=0;
			  if($kl){
				  $tr[$i]=$kl;
				  $yuo=$m->field('pid,assess,sum')->where($where)->select();
				  foreach($yuo as $list2){
					  $klp[$list['numid']][$list2['pid']]=$list2['sum'];
				    if($list2['assess']=="优先推荐"){
		          		  $wh1['pid']=$list2['pid'];
		        		  $tr[$i][$j1.'#a']=$dl->field('pid,name')->where($wh1)->find();
			        	  $j1++;
			        }else if($list2['assess']=="一般推荐"){
			        	  $wh2['pid']=$list2['pid'];
				        	$tr[$i][$j2.'#b']=$dl->field('pid,name')->where($wh2)->find();
				          $j2++;
			        }else if($list2['assess']=="不推荐"){
				          $wh3['pid']=$list2['pid'];
				          $tr[$i][$j3.'#c']=$dl->field('pid,name')->where($wh3)->find();
				          $j3++;
			        }
				  }
				   $i++;
			  }
			$hk[$list['numid']][$list2['pid']]=$j1+$j2+$j3;  
		  }
		  $where['grant']=2;
		  $d=M('administrator');	  
               $str2=$d->where($where)->select();
	       $this->assign('list2',$str2);
	       $strpr=$dl->where($where)->select();
	       
	       $this->assign('listpr',$strpr);
	        $this->assign('hk',$hk);
		  $this->assign("klp",$klp);
		  $this->assign("list",$tr);
                  $this->display();
    }
    public function del(){
	   $where['numid']=I('get.numid');
	   $m=M('application'); 
	   $m1=M('proform'); 
	   $m2=M('adform'); 
	   $m3=M('zjform'); 
	   $m1->where($where)->delete();
	    $m2->where($where)->delete();
		 $m3->where($where)->delete();
	   $m->where($where)->delete();
	   $this->redirect('Xmanager/index'); 
    }
	public function export(){
		$where['numid']=I('get.numid');
		$where2['aid']=I('get.aid');
		$m=M("application");
		$m2=M("education_experience");
		$m3=M("work_experience");
		$str=$m->where($where)->find();
		$str2=$m2->where($where2)->select();
		$str3=$m3->where($where2)->select();
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
		
		A('Export')->exportExcel($str,$str4,$str5);
		$this->redirect('index');
	}
	public function export_all(){
		$all=I('get.all');
		$allnum=explode(',',$all);
		$i=0;
		$m2=M("education_experience");
		$m3=M("work_experience");
		foreach($allnum as $key){
			switch($key){
				case "":
				    
					break;
				case "work_experience":
				    $y1=1;
					break;
			    case "education_experience":
				    $y2=1;
					break;
				default:
				    $arr_app[$i]=$key;
					$i++;
				    break;
			}
		}
		$m=M('application');
		$str=$m->field($arr_app)->select();
		$k=0;
		foreach($str as $rt){
		   $where['aid']=$rt['aid'];
		   if($y1==1){
			$p2=$m2->where($where)->select();
			if($p2){
			   $st="";
			   foreach($p2 as $lt){
    			    	$st=$st.$lt['edu_start_time']."至".$lt['edu_end_time']."  学位：".$lt['xuewei']."  专业： ".$lt['zhuanye']." 毕业学校： ".$lt['school'].";    ";
             	}
				$str[$k]['edu']=$st;
			}else{
				$str[$k]['edu']="";
			}
		   }
		   if($y2==1){
			$p3=$m3->where($where)->select();
			if($p3){
			   $st3="";
			   foreach($p3 as $lt){
    			    	$st3=$st3.$lt['job_start_time']."至".$lt['job_end_time']."  职务：".$lt['job']."  国家： ".$lt['nation']." 工作单位： ".$lt['company'].";    ";
             	}
				$str[$k]['work_experience']=$st3;
			}else{
				$str[$k]['work_experience']="";
			}
		   }
			$k++;
		}
		$str2=$this->j_b();
		//dump($str);//dump($str2);dump($str3);
		A('ExportAll')->exportExcel($str,$str2);
		//$this->redirect('index');
	}
	//------------------虚表--------
	public function j_b(){
		$str['name']="申请人";
		$str['sex']="性别";
		$str['birthday']="出生年月";
		$str['word_area']="工作国家或地区";
		$str['card']="证件名称";
		$str['cardid']="证件号码";
		$str['email']="e-mail";
		$str['job']="职务";
		$str['phone']="电话";
		$str['major']="专业领域";
		$str['address']="通讯地址";
		$str['edu']="教育经历";
		$str['work_experience']="工作经历";
		$str['jianjie']="主要学术简介";
		$str['title']="本次论坛报告题目";
		return $str;
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
		$this->assign('list',$str);
		$this->display();
	}
	//-------add.html--------------
	public function add(){
		$m=M('professior');
		$where['grant']=2;
		$str=$m->where($where)->select();
		$this->assign('list',$str);
		$this->display();
	}
	public function rcexpert(){
		 $map['user']=I('get.user');
		  $map['password']=I('get.password');
		   $map['name']=I('get.name');
		    $map['college']=I('get.college');
			 $map['work_area']=I('get.work_area');
			  $map['kp1']=I('get.kp1');
			   $map['kp2']=I('get.kp2');
			    $map['kp3']=I('get.kp3');
				 $map['grant']=2;
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
	//-------add2.html--------------
	public function add2(){
		$m=M('administrator');
		$where['grant']=2;
		$str=$m->where($where)->select();
		$this->assign('list',$str);
		$this->display();
	}
	public function rcmanager(){
		 $map['user']=I('get.user');
		  $map['password']=I('get.password');
		   $map['name']=I('get.name');
		    $map['college']=I('get.college');
				 $map['grant']=2;
	    $m=M('administrator');
		if($m->add($map)){
			echo "添加成功";
		}else{
			echo "添加失败";
		}
	}
	public function delmanager(){
		$where['id']=I('get.id');
		$m=M('administrator');
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
			$yp[$i]['tr1']=$pl['name'];
			$i++;
		}
		$m2=M('adform');
		$lp2=M('administrator');
		$str2=$m2->where($where)->select();
		$i=0;
		foreach($str2 as $st2){
			$rt2['ad_id']=$st2['ad_id'];
			$pl2=$lp2->where($rt)->find();
			$rt2['numid']=$st2['numid'];
			$yp2[$i]=$d->where($rt2)->find();
			$yp2[$i]['tr1']=$pl2['name'];
			$i++;
		}
		$this->assign('list',$yp);
		$this->assign('list2',$yp2);
		$this->display();
	}
	//退回专家评审
	public function tuihui(){
		$where['numid']=I('get.numid');
		$where['pid']=I('get.pid');
		$map['state']=1;
		$m=M('zjform');
		$m->where($where)->save($map);
		$where2['pid']=I('get.pid');
		$where2['numid']=I('get.numid');
		$m2=M('proform');
		$m2->where($where2)->delete();
		$this->redirect('look?numid='.$where2['numid']);
	}
	//退回管理员评审
	public function tuihui_gly(){
		$where['numid']=I('get.numid');
		$pl=M('administrator');
	    $mapa['user']=$_SESSION['admin'];
	    $plp=$pl->where($mapa)->find();
	    $id=$plp['id'];
	    $where['ad_id']=$id;
		$map['state']=1;
		$m=M('adform');
		$m->where($where)->save($map);
		$where2['ad_id']=I('get.ad_id');
		$where2['numid']=I('get.numid');
		$m2=M('proform');
		$m2->where($where2)->delete();
		$this->redirect('look?numid='.$where2['numid']);
	}
	//-------------------------------------handout------------
	public function handout(){
	       $where['grant']=2;
	       $m=M('professior');
           $d=M('administrator');	  
           $str2=$d->where($where)->select();	       
	       $str=$m->where($where)->select();
		   $ml=M('application');
		   $strlpp=$ml->field('numid')->order('numid desc')->select();
		   $p1=M('adform');
		   $p2=M('zjform');$i=0;
		   foreach($strlpp as $tr){
			  $strp[$i]=$ml->where($tr)->find();
			  $strp_numid=$strp[$i]['numid'];
		      $fin2=$p2->field('pid')->where($tr)->select();$j=0;
			  foreach($fin2 as $fn2){
				   $trp2[$strp_numid][$j]=$m->field('pid,name')->where($fn2)->find();
				   $j++;
			  }
			  $fin1=$p1->field('ad_id')->where($tr)->select();$j=0;
			  foreach($fin1 as $fn1){
				  $fn['id']=$fn1['ad_id'];
				   $trp1[$strp_numid][$j]=$d->field('id,name')->where($fn)->find();
				   $j++;
			  }
					  $i++;
		   }
		   //var_dump($strp);
		   $this->assign('trp1',$trp1);
		   $this->assign('trp2',$trp2);
		   $this->assign('listl',$strp);
	       $this->assign('list',$str);
	       $this->assign('list2',$str2);
	       $this->display();
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
	//----------------进入院管理员----------
	public function jr_Ymanager(){
		$where['id']=I('get.id');
		$m=M('administrator');
		$str=$m->field('user')->where($where)->find();
		session('admin',$str['user']);
	    session('grant','2');
		$this->redirect('Ymanager/index');
	}
	public function xzj(){
		$all=I('get.all');
		$allnum=explode(',',$all);
		$mapl['prl_id']=I('get.pid');
		$d=M('zjform');
		$ml=M('adform');
		$m=M('application');
		foreach($allnum as $numid){
			if($numid){
				$mp['numid']=$numid;
				$mp['pid']=I('get.pid');
				$op['numid']=$numid;
				$op['ad_id']=I('get.id');
				$op['state']=1;
				$mp['state']=1;
				$ml->add($op);
				$d->add($mp);
		    }
	    }
		echo "分发成功";
	}
	//---------------
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
		//print_r($_GET);exit;
		//dump($_GET);exit;
		$pl=M('administrator');
		$map['user']=$_SESSION['admin'];
		$plp=$pl->where($map)->find();
		$id=$plp['id'];
		$where['ad_id']=$id;//
		
		$wher1['aid']=$_SESSION['aid'];
		$apt=M('applicant');
		$str=$apt->where($wher1)->find();
		$where2['apt_user']=$str['user'];
		//dump($where);exit;
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