<?php
namespace Home\Controller;
use Think\Controller;
class EmailController extends Controller {
    public function index(){
        $this->thinkemail();
     }   
     public function thinkemail(){
   //   $yx='shq2896935608@163.com';
      $this->checkyx();
      $yx=I('get.yx');
      $pt='密码找回';
      $FromUser='华中农业大学国际青年学者狮子山论坛';
      $num=$this->create_md();
      $con='感谢您注册华中农业大学国际青年学者狮子山论坛，您获得的验证码为'.$num;
         import('Vendor.Mail');
         SendMail($yx,$pt,$con,$FromUser);
      $_SESSION['yx']=$yx;
      $_SESSION['md']=$num;
     }
     //随机生成密码
   public  function create_md($pw_length = 6){
          $randaccount = '';
          for ($i = 0; $i < $pw_length; $i++){
               $randaccount .= chr(mt_rand(49, 57));
          }
        return $randaccount;
     }
     //检验邮箱
     public function checkyx(){
         $map['user']=I('get.yx');
         $m=M('applicant');
         if($m->where($map)->find()){

         }else{
            echo "　✘　没有此邮箱，请检查或重新注册";
            exit;
         }
     }
     public function checkyzm(){
         $yzm=I('get.yzm');
         if($yzm==$_SESSION['md']){
            unset($_SESSION['md']);
            echo "1";
         }else{
            echo "验证码不正确，请重试";
         }
     }
     //重置密码
     public function repwd(){
         $data['password']=I('get.pwd');
         $m=M('applicant');
         $map['user']=$_SESSION['yx'];
         $str=$m->where($map)->find();
         if($str){
             $m->where("aid=".$str['aid'])->save($data);
             $_SESSION['user']=$_SESSION['yx'];
             unset($_SESSION['yx']);
         }else{
             $this->error("__APP__/home/Apply/new_pwd","重置失败");
         }
     }
}