<?php
namespace Admin\Controller;
use Think\Controller;
class SmanagerController extends Controller {
	public function _initialize(){
		if($_SESSION['grant']!='1'){
			$this->redirect('Login/Sm_login');
		}
		if(!empty($_SESSION['admin'])){
			$m=M('administrator');
	    	$where['user']=$_SESSION['admin'];
			$where['grant']=$_SESSION['grant'];
		    $str=$m->where($where)->find();
	    	if(!$str){
				$this->redirect('Login/Sm_login');
		    }
		}else{
			$this->redirect('Login/Sm_login');
		}
	}
	public function commen($con,$zd){
		$where[$zd]=$con;
		$m=M('shuoming');
		$str=$m->select();
	    if($str){
			$m->where('sid=1')->save($where);
		}else{
			$m->add($where);
		}
	}
	public function record(){
		$con=I('post.con');
		$zd=I('get.zd');
		$where[$zd]=$con;
		$m=M('shuoming');
		$str=$m->select();
	    if($str){
			$m->where('sid=1')->save($where);
		}else{
			$m->add($where);
		}
		$this->redirect('index');
	}
	public function retime(){
		//dump($_POST);
		$map['time']=I('post.start_time').'@'.I('post.end_time');
		$m=M('shuoming');
		$str=$m->select();
	    if($str){
			$m->where('sid=1')->save($map);
		}else{
			$m->add($map);
		}
		$this->redirect('index');
	}
    public function index(){
		$m=M('shuoming');
		$con=$m->where('sid=1')->find();
		if($con){
			$this->assign('con',$con['ltjs']);
		}
        $this->display();
    }
    public function situation(){
		$m=M('shuoming');
		$con=$m->where('sid=1')->find();
		if($con){
			$this->assign('con',$con['sqtj']);
		}
		$this->display();
	}
	public function time(){
		$m=M('shuoming');
		$con=$m->where('sid=1')->find();
		if($con){
			$this->assign('con',$con['sqsj']);
		}
		$this->display();
	}
	public function day(){
		$m=M('shuoming');
		$con=$m->where('sid=1')->find();
		if($con){
			$this->assign('con',$con['rcap']);
		}
		$this->display();
	}
	public function hotel(){
		$m=M('shuoming');
		$con=$m->where('sid=1')->find();
		if($con){
			$this->assign('con',$con['clzs']);
		}
		$this->display();
	}
	public function phone(){
		$m=M('shuoming');
		$con=$m->where('sid=1')->find();
		if($con){
			$this->assign('con',$con['lxfs']);
		}
		$this->display();
	}
	public function explain(){
		$m=M('shuoming');
		$con=$m->where('sid=1')->find();
		if($con){
			$this->assign('con',$con['ltsm']);
			$timelpp=explode('@',$con['time']);
			$time['settime']=$timelpp[0];
			$time['finatime']=$timelpp[1];
			$this->assign('list',$time);
			$this->assign('con',$con['ltsm']);
		  }
		$this->display();
	}
	//------------
	public function xiangguan(){
		$m=M('information');
		$where['class']="最新通知";
		$str=$m->field('id,title')->where($where)->select();
		$this->assign('list',$str);
		$this->display();
	}
	public function huodong(){
		$m=M('information');
		$map['class']="工作动态";
		$str2=$m->field('id,title')->where($map)->select();
		$this->assign('list2',$str2);
		$this->display();
	}
	public function model(){
		$where['id']=I('get.id');
		$m=M('information');
		$str=$m->where($where)->find();
		$this->assign('list',$str);
		$this->display();
	}
	public function record_sy(){
		$where['id']=I('get.id');
		$id=I('get.id');
		$map['content']=I('post.con');
		$map['title']=I('post.title');
		$m=M('information');
		$m->where($where)->save($map);
		$this->redirect('xiangguan');
	}
	public function del_sy(){
		$where['id']=I('get.id');
		$m=M('information');
		$m->where($where)->delete();
		$this->redirect('xiangguan');
	}
	public function add_sy(){
		$class=I('get.class');
		$this->assign('class',$class);
		$this->display();
	}
	public function add(){
		$map['class']=I('get.class');
		$m=M('information');
		$map['content']=I('post.con');
		$map['title']=I('post.title');
		$m->add($map);
		$this->redirect('xiangguan');
	}
	public function information(){
		$this->display();
	}
	public function new_information(){
		$con=M('information');
		$data['title']=$_POST['title'];
		$data['class']=$_POST['class'];
		$data['content']=$_POST['content'];
		$data['time']=date("Y-m-d");
		$result=$con->data($data)->add();
		
		$this->redirect('index');
	}
	public function photo(){
		$m=M('img');
		$str=$m->select();
		$this->assign('imgs',$str);
		$this->display();
	}
	public function upload_img(){
    	    $config = array(
                 'maxSize'    =>    3145728,
                 'rootPath'   =>    './Public/img/',
                 'savePath'   =>    '',
                 'saveName'   =>    array('uniqid',''),
                 'exts'       =>    array('jpg', 'gif', 'png', 'jpeg'),
                 'autoSub'    =>    false,
                 'subName'    =>    array('date','Ymd'),
            );
            $upload = new \Think\Upload($config);// 实例化上传类
            // 上传文件 
            $info   =   $upload->upload();
			//dump($info);exit;
			if($info){
				$map['img_name']=$info['file']['savename'];
				$m=M('img');
				if($m->add($map)){
					$this->redirect('photo');
				}else{
					$this->error('上传失败','photo');
				}
			}else{
				$this->error($upload->getError());
			}
	}
	public function delete_img(){
		if($_GET){
			$m=M('img');
			$map['img_id']=I('get.img_id');
			//dump($map);
			$m->where($map)->delete();
		}
		$this->redirect('photo');
	}
}