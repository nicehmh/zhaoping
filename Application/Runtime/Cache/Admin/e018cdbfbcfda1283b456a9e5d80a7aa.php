<?php if (!defined('THINK_PATH')) exit();?><!-- Author:yuanfang
Data:2015/8/10 -->
<!DOCTYPE html>
<html lang="en">

<head>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>网站后台登录</title>
	<link href="/zhaopin/Public/Back/css/bootstrap.min.css" rel="stylesheet">
  <style>
      body{background: #615d5c;text-align:center;margin:0 auto;}
      .login-panel{width: 350px;height: 450px;margin-top:100px;margin-left: 40%;background: #fff;color:#000;}
      .panel-heading{text-align: center;color: #11cd6e;font-size: 20px; padding-top: 40px;}
      .form-control{ border-radius: 0; height: 40px;margin-top:32px;}
      .name{ background: url(/zhaopin/Public/images/ipt-sprite.png) no-repeat;overflow: hidden;background-position: 0 -96px;padding-left: 50px;}
      .password{ background: url(/zhaopin/Public/images/ipt-sprite.png) no-repeat;overflow: hidden;background-position: 0 -48px;padding-left: 50px;}
      .submit{background: #449D44;border:none; color:#fff;font-size:18px;}
  </style>
	<script src="/zhaopin/Public/Back/js/jquery.min.js"></script>
	<script src="/zhaopin/Public/Back/js/bootstrap.min.js"></script>

</head>
<body>
      <div class="container-fluid-full">
      	 <div class="row-fluid offset5 span7">
         
               <<div class="col-md-3 col-md-offset-3">
               	   <div class="login-panel panel default-panel">
                       <div class="panel-heading">校管理员登录</div>
                       <div class="panel-body">   
                            <form role="form" action="/zhaopin/index.php/index.php/admin/Login/do_login" name="glll" method="post">
                            	<div class="form-group">
                                    <input type="text" class="form-control name" id="name" placeholder="请输入您的用户名" name="admin"/>
                            	</div>

                              <div class="form-group">
                                    <input type="password" name="pwd" class="form-control password" id="password" placeholder="请输入您的密码"/>
                              </div>
                              <input type="submit" class="form-control submit" id="submit" value="登录" />
                            </form>
                       </div>
               	   </div>
               </div>
      	 </div>

      </div>
</body>
</html>