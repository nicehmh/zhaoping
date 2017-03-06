<?php
namespace Home\Controller;
use Think\Controller;
class ApplyController extends Controller {
   public function apply(){
      $where['user']= $_SESSION['user'];
      $ml=M('applicant');///-------------------------------
      $tr=$ml->where($where)->find();
      $wh['aid']=$tr['aid'];
      $m=M('application');///-------------------------------
      $str=$m->where($wh)->find(); 
       $m2=M("education_experience");///-------------------------------
       $m3=M("work_experience");///-------------------------------
       $wher['aid']=$wh['aid'];
       $str=$m->where($wh)->find();
       $str2=$m2->where($wher)->select();
       $str3=$m3->where($wher)->select();
	    $i=0;
		foreach($str2 as $rt){
			$str4[$i]['xuewei']=$rt['xuewei'];
			$str4[$i]['edu_start_time']=$rt['edu_start_time'];
			$str4[$i]['edu_end_time']=$rt['edu_end_time'];
			$str4[$i]['zhuanye']=$rt['zhuanye'];
			$str4[$i]['school']=$rt['school'];
			$i++;
		}
		$j=0;
		foreach($str3 as $rt){
			$str5[$j]['job']=$rt['job'];
			$str5[$j]['job_start_time']=$rt['job_start_time'];
			$str5[$j]['job_end_time']=$rt['job_end_time'];
			$str5[$j]['nation']=$rt['nation'];
			$str5[$j]['company']=$rt['company'];
			$j++;
		}
		if(!$str4){
			$str4[0]['xuewei']=" ";
			$str4[0]['edu_start_time']="";
			$str4[0]['edu_end_time']="";
			$str4[0]['zhuanye']="";
			$str4[0]['school']="";
			$i++;
		}
		if(!$str5){
			$str5[0]['job']="";
			$str5[0]['job_start_time']="";
			$str5[0]['job_end_time']="";
			$str5[0]['nation']="";
			$str5[0]['company']="";
			$j++;
		}
	 
    // exit;
	   //----------
			$timelpp=explode('@',$str['time']);
			$time['t1']=$timelpp[0];
			$time['t2']=$timelpp[1];
			$this->assign('time',$time);
		  
	   //-----申请回复状态------
	   if(!$str){
		    $state='zxsq';//申请回复状态
	   }else{
		    $state='sqtj';//申请回复状态
		    $lo=M('replay');
			$where3['apt_user']=$_SESSION['user'];
			$st_lo=$lo->where($where3)->find();
			if($st_lo){
				$con=$st_lo['state'];
				if($con!='申请收悉'){
					$state='ckjg';
					$this->assign('jgcon',$con);
				}else{
					$state='yjs';
				}
			}
	   }
	     // dump($state);
		 if($str['photo']){
			 $img="upload/".$str['photo'];
		 }else{
			 $img="Front/images/photo.jpg";
		 }
		 $this->assign('img',$img);
		$this->assign('num2',$i+1);
		$this->assign('num3',$j+1);
		$this->assign('list2',$str4);
		$this->assign('list3',$str5);
        $this->assign('list',$str);
	      $this->assign('state',$state);
		  $this->display();       
    }
    Public function check_verify($code, $id = ''){
                   $verify = new \Think\Verify();
                   return $verify->check($code, $id);
    }
   public function record(){
		//dump($_POST);exit;
    	$map['name']=I('post.username');
    	$map['birthday']=I('post.birth');
    	$map['word_area']=I('post.area');
		$map['card']=I('post.card');
		$map['cardid']=I('post.cardid');
    	$map['email']=I('post.email');
    	$map['job']=I('post.job');
    	$map['phone']=I('post.tel');
    	$map['address']=I('post.address');
    	$map['sex']=I('post.sex');
    	$map['major']=I('post.major');
    	$map['jianjie']=I('post.jianjie');
    	$map['title']=I('post.title');
		
		             $dl=M('applicant');
                     $m=M('application');$where['user']=$_SESSION['user'];
                     $strl=$dl->where($where)->find();
                     //var_dump($_SESSION['user'])
                     //var_dump($strl);
					 if(!$strl){
			             unset($_SESSION['user']);
		                 $this->error("请您重新登录","/index.php/home/Index/index");
		             }
					  $where['aid']=$strl['aid'];
			         $str=$m->where($where)->find();
		//记录work_experience和edu_experience
		  $key_name=array_keys($_POST);
		  $dp=M('education_experience');
		  $dataid['aid']=$strl['aid'];
		  $dp_count=$dp->where($dataid)->count();
		  if($dp_count){
			  $dp->where($dataid)->delete();
		  }
		  $d=M('work_experience');
		  $d_count=$d->where($dataid)->count();
		  if($d_count){
			  $d->where($dataid)->delete();
		  }
		  $i=1;$j=1;
		  foreach($key_name as $key){
			  if(strpos($key,"wei".$i)){
				   $info1['aid']=$strl['aid'];
    	           $info1['xuewei']=$_POST[$key];
				   $work1='edu_start_time'.$i;
				   $work2='edu_end_time'.$i;
				   $work3='zhuanye'.$i;
				   $work4='school'.$i;
				    $p=0;
                    $p+=$this->is_null_arr($_POST[$work1]);
				    $p+=$this->is_null_arr($_POST[$work2]);
				    $p+=$this->is_null_arr($_POST[$work3]);
				    $p+=$this->is_null_arr($_POST[$work4]);
				 if($p==4){
					 
				 }else{
					 $info1['edu_start_time']=$_POST[$work1];
					 $info1['edu_end_time']=$_POST[$work2];
					 $info1['zhuanye']=$_POST[$work3];
					 $info1['school']=$_POST[$work4];
    	              $dp->add($info1);
				 }
				   $i++;
			  }else if(strpos($key,"ob".$j)){
				 $data1['aid']=$strl['aid'];
				 $data1['job']=$_POST[$key];
				 $edu1='job_start_time'.$j;
				 $edu2='job_end_time'.$j;
				 $edu3='nation'.$j;
				 $edu4='company'.$j;
				 $p3=0;
				 $p3+=$this->is_null_arr($_POST[$edu1]);
				 $p3+=$this->is_null_arr($_POST[$edu2]);
				 $p3+=$this->is_null_arr($_POST[$edu3]);
				 $p3+=$this->is_null_arr($_POST[$edu4]);
				 if($p3==4){
					 
				 }else{
					 $data1['job_start_time']=$_POST[$edu1];
					 $data1['job_end_time']=$_POST[$edu2];
					 $data1['nation']=$_POST[$edu3];
					 $data1['company']=$_POST[$edu4];
    	             $d->add($data1);
				 }
				 $j++;
			  }
		  }
//---------------------------------------------------------------
    	//图片上传
    	    $config = array(
                 'maxSize'    =>    3145728,
                 'rootPath'   =>    './Public/Upload/',
                 'savePath'   =>    '',
                 'saveName'   =>    array('uniqid',''),
                 'exts'       =>    array('jpg', 'gif', 'png', 'jpeg','doc', 'docx', 'xls', 'xlsx', 'ppt', 'htm', 'html', 'txt', 'zip', 'rar', 'gz', 'bz2','pdf'),
                 'autoSub'    =>    false,
                 'subName'    =>    array('date','Ymd'),
            );
            $upload = new \Think\Upload($config);// 实例化上传类
            // 上传文件 
            $info   =   $upload->upload();
			         $dl=M('applicant');
                     $m=M('application');$where['user']=$_SESSION['user'];
                     $strl=$dl->where($where)->find();
             if(!$info) {// 上传错误提示错误信息
			     if($strl){
					 $where['aid']=$strl['aid'];
			         $str=$m->where($where)->find();
					  if($str){
                           $epy=$m->field('photo,file')->where("aid=".$str['aid'])->find();
                           if($epy['photo'])
						   {
							   $m->where("aid=".$str['aid'])->save($map);
                               $this->success("提交成功","");
						   }else{
							    $this->error($upload->getError());
						   }
                        }
				 }
             }else{// 上传成功 获取上传文件信息
                  $map['photo']=$info['filename']['savename'];
				  $map['file']=$info['file']['savename'];
					 if(!$strl){
			             unset($_SESSION['user']);
		                $this->error("请您重新登录","/index.php/home/Index/index");
		             }else{
			            $where['aid']=$strl['aid'];
			            $str=$m->where($where)->find();
			            if($str){
                           $m->where("aid=".$str['aid'])->save($map);
                           $this->success("提交成功","");
                        }else{
                          $map['aid']=$strl['aid'];
    	                  if($m->add($map)){
    	                    	$this->success("提交成功","");
                  	      }else{
    		                    $this->error("提交失败","");
    	                  }
                        }
                     }
    	     }       
          
    	  
    }
	//-------------判断是否为空-------
	public function is_null_arr($ar){
		if($ar==""){
			return 1;
		}else{
			return 0;
		}
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
    //--------------------------------------
    public function forget(){
         $this->display();
    }
    public function zhuce(){
		$this->display();       
    }
    public function liuyan(){
     $this->display();       
    }
    public function time(){
		$mlpp=M('shuoming');
		  $conlpp=$mlpp->where('sid=1')->find();
		  if($conlpp){
			//  dump($conlpp);
			$timelpp=explode('@',$conlpp['time']);
			$time['t1']=$timelpp[0];
			$time['t2']=$timelpp[1];
			$this->assign('time',$time);
			$this->assign('con',$conlpp['ltsm']);
		  }
      if($_GET['change']=='change'){
          $this->display();
      }else{
          $where['user']= $_SESSION['user'];
          $m=M('applicant');
          $str=$m->where($where)->find();
          $wh['aid']=$str['aid'];
          $d=M('application');
          $tr=$d->where($wh)->find();
          if($tr){
              $this->redirect('apply'); 
          }else{
              $this->display();
          }
      }
    }
    public function retime(){
      //设置论坛时间
         $map['time']=I('get.time');
         $m=M('application');$data['user']=$_SESSION['user'];
	     $d=M('applicant');
         $strl=$d->where($data)->find();
		// dump($strl);exit;
		 if(!$strl){
			 unset($_SESSION['user']);
		        $this->error("请您重新登录","/index.php/home/Index/index");
		 }else{
			 $where['aid']=$strl['aid'];
			 $str=$m->where($where)->find();
			// print_r($str);exit;
			 if($str){
                               $m->where('aid='.$str['aid'])->save($map);
                               echo "提交成功";
                         }else{
                              $map['aid']=$strl['aid'];
                              if($m->add($map)){
                                  echo "提交成功";
                              }else{
                                  echo "提交失败";
                              }
                         }
		 }
	
    }
    public function recon(){
        $map['yx']=I('post.yx');
        $map['con']=I('post.con');
        $m=M('application');$data['user']=$_SESSION['user'];
		$d=M('applicant');
        $strl=$d->where($data)->find();
		 if(!$strl){
			 unset($_SESSION['user']);
		     $this->error("请您重新登录","/index.php/home/Index/index");
		 }else{
			 $where['aid']=$strl['aid'];
			 $str=$m->where($where)->find();
			 if($str){
                 $map['con']=$map['con']."@@@@".$str['con'];
                 $m->where("aid=".$str['aid'])->save($map);
                 echo "提交成功";
             }else{
                  $map['aid']=$strl['aid'];
                 if($m->add($map)){
                      echo "提交成功";
                }else{
                     echo "提交失败";
                  }
              }
		 }
    }
    public function register(){
    	//print_r($_POST);exit;
    	$code = I('get.code');
        $id='';
       // print_r($code);exit;
        if(!$this->check_verify($code, $id)){    
			         echo "验证码错误";exit;
	     	}
     	$map['user']=I('get.name');
     	$map['password']=I('get.password');
     	//print_r($map);
     	$m=M('applicant');
     	if($m->add($map))
     	{
           $_SESSION['user']=I('get.name');
           echo "注册成功";
     	}else{
     		    echo "注册失败";
     	}
   }
   public function checkuser(){
	   $m=M('applicant');
	   $where['user']=I('get.user');
	   $str=$m->where($where)->find();
	   if($str){
		   echo "true";
	   }else{
		   echo "false";
	   }
   }
}
  /* 'username' => string 'aa' (length=2)
  'sex' => string '男' (length=3)
  'MAX_FILE_SIZE' => string '500000' (length=6)
  'birth' => string 'a' (length=1)
  'area' => string 'a' (length=1)
  'card' => string '' (length=0)
  'cardid' => string '' (length=0)
  'email' => string 'a' (length=1)
  'job' => string 'aaaaaa' (length=6)
  'tel' => string 'aa' (length=2)
  'major' => string '环境与地球科学(Environmental Geosciences)' (length=48)
  'address' => string 'aaaa' (length=4)
  'xuewei' => string '' (length=0)
  'edu_start_time' => string '' (length=0)
  'edu_end_time' => string '' (length=0)
  'zhuanye' => string '' (length=0)
  'school' => string '' (length=0)
  'job_start_time' => string '' (length=0)
  'job_end_time' => string '' (length=0)
  'nation' => string '' (length=0)
  'company' => string '' (length=0)
  'jianjie' => string 'aaaaaaaaaaa' (length=11)
  'title' => string 'aaaaaaaaaa' (length=10)*/