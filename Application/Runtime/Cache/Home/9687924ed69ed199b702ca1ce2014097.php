<?php if (!defined('THINK_PATH')) exit();?><!doctype html>
<html>
<head>
	<meta charset="utf-8" />
	<title>华中农业大学南湖国际青年科学家论坛</title>
	<link href="/Public/logo.png" rel="SHORTCUT ICON">
	<link rel="stylesheet" type="text/css" href="/Public/Front/css/header.css" />
	<link rel="stylesheet" type="text/css" href="/Public/Front/css/datouwang.css" />
	<link rel="stylesheet" type="text/css" href="/Public/Front/css/content2.css" />
	<script type="text/javascript" src="/Public/Front/js/jquery-1.8.3.min.js"></script>
	<script type="text/javascript" src="/Public/Front/js/koala.min.1.5.js"></script>
	<style>
		.getcode{
			width:120px;
			height:30px;
			background:lightblue;
			font-size:13px;
			border:1px solid #aaa;
			border-radius:3px;
			margin-left:40px;
		}
		a.getcode:hover{
			background:#4BA9E6;
			box-shadow:0px 0px 1px #666;
		}
		.find{
			display:inline-block;
			width:120px;
			height:25px;
			background:#eee;
			border:1px solid #aaa;
			text-align:center;
			text-indent:0px;
			line-height:25px;
			font-size:14px;
			letter-spacing:2px;
			border-radius:5px;
			color:#555;
		}
		a.find:hover{
			box-shadow:0px 0px 5px #000;
		}
		input{
			padding:2px;
		}
		h6{
			display:inline-block;
			color:red;
		}
	</style>
	<script type="text/javascript">
	    function checkyx(){
		   var yx=document.getElementById('yx').value;
		   if(yx==""){
		   
		   }else{
		       var xhr=new XMLHttpRequest();
		       xhr.onreadystatechange=function(){
		         if(xhr.readyState==4){
				       if(xhr.responseText){
					      // alert(xhr.responseText);
					      document.getElementById('tishi').innerHTML=xhr.responseText;
					   }else{
					   	  document.getElementById('tishi').innerHTML= "　✔";
					   }
			      }
		         }
		        xhr.open('get','/index.php/Home/Email/checkyx?yx='+yx);
		       xhr.send(null);
		   }
		}
		function f1(){
		     var yx=document.getElementById('yx').value;
			 if(yx==""){
			    alert('邮箱不能为空');exit;
			 }
		     var xhr=new XMLHttpRequest();
		     xhr.onreadystatechange=function(){
		      if(xhr.readyState==4){
			    if(xhr.responseText){
				   alert("请填写正确的收件人邮箱");
				   document.getElementById("tishi2").innerHTML="";
				}else{
				   document.getElementById("tishi2").innerHTML="✔　已发送，请查看";
				}
			  }
		     }
		     document.getElementById("tishi2").innerHTML="loading...";
		     xhr.open('get','/index.php/Home/Email/thinkemail?yx='+yx);
		     xhr.send(null);
		}
    	function f2(){
		     //var yx=document.getElementById('yx').value;
			 var yzm=document.getElementById('yzm').value;
		     var xhr=new XMLHttpRequest();
		     xhr.onreadystatechange=function(){
		      if(xhr.readyState==4){
				   if(xhr.responseText=="1"){
				      window.location.href="/index.php/Home/Apply/new_pwd";
				   }else{
				      alert(xhr.responseText);
				   }
			  }
		     }
		     xhr.open('get','/index.php/Home/Email/checkyzm?yzm='+yzm);
		     xhr.send(null);
		}
	</script> 
</head>
<body>
	<div id="header">
	<div class="top"></div>
	<div class="logo">
		<a href="http://www.hzau.edu.cn/2014/ch/" target="blanket"><img src="/Public/Front/images/logo_school.png" alt="校徽"></a>
	</div>
	<div class="nav">
		<a href="/index.php/Home/Index/index"><font>首　页</font> <font style="font-size:12px;">HOME</font></a>
		<a href="/index.php/Home/Index/ltjs"><font></font>论坛介绍<font style="font-size:12px;">ABOUT FORUM</font></a>
		<a href="/index.php/Home/Index/xxjs"> <font>学校介绍</font><font style="font-size:12px;">ABOUT HZAU</font> </a>
		<a href="/index.php/Home/Index/rczp"> <font>人才招聘</font><font style="font-size:12px;">TALENT HIRING</font> </a>
		<a href="/index.php/Home/Index/xytx" style="background:url();"><font>校园图像</font><font style="font-size:12px;">CAMPUS LIFE</font></a>
		<!-- <a href="/index.php/Home/Index/clzs">差旅住宿</a>
		<a href="/index.php/Home/Index/lxfs" style="background:url();">联系方式</a> -->
	</div>
</div>

	<div id="content2">
		<h1>忘记密码</h1>
		<form action="">
			<span>注册邮箱 email：<input type="text" name="email" onblur="checkyx()" id="yx"><h6 id="tishi"> * 请填写您的邮箱，稍后将发送验证码(Please fill in your email, later will send a verification code )</h6></span>
			<span>验 证 码 code：<input type="text" name="email" id="yzm"><a href="javascript:f1();" class="getcode">点击获取验证码 Click to get a verification code</a><h6 id="tishi2"></h6></span>
			<span><a href="javascript:f2();" class="find" style="width:250px;">重置密码 reset password</a></span>
			<!-- 如验证码正确，跳转至重置密码页面  /index.php/Home/Apply/new_pwd -->
		</form>
	</div>
	<div id="footer">
		<div class="bottom">
			<p>Copyright © 2016 华中农业大学人事处. All Rights Reserved.  技术支持 <a href="http://www.52feidian.com/" target="_blanket">华中农业大学·沸点工作室</a></p>
		</div>
	</div>
</body>
</html>