<?php if (!defined('THINK_PATH')) exit();?><!doctype html>
<html>
<head>
	<meta charset="utf-8" />
	<title>华中农业大学南湖国际青年科学家论坛</title>
	<link href="/Public/logo.png" rel="SHORTCUT ICON">
	<link rel="stylesheet" type="text/css" href="/Public/Front/css/header.css" />
	<link rel="stylesheet" type="text/css" href="/Public/Front/css/content2.css" />
	<script type="text/javascript" src="/Public/Front/js/jquery-1.8.3.min.js"></script>
	<script type="text/javascript" src="/Public/Front/js/koala.min.1.5.js"></script>
	<script type="text/javascript">
	function f1(){
	    var con=document.getElementById('con').value;
		var con=encodeURIComponent(con);
	    var xhr=new XMLHttpRequest();
		xhr.onreadystatechange=function(){
		   if(xhr.readyState==4){
		       alert(xhr.responseText);
			    window.location.href="/index.php/Home/Index/index";
		   }
		}
		 xhr.open("post","/index.php/Home/Apply/recon");
		xhr.setRequestHeader('content-type','application/x-www-form-urlencoded');
		xhr.send("con="+con);
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
		<h1>留言</h1>
		<form action="">
			<textarea name="" id="con" class="liuyan"></textarea>
			<a href="javascript:f1();" class="submit_liuyan">提交留言</a>
		</form>
	</div>
	<div id="footer">
		<div class="bottom">
			<p>Copyright © 2016 华中农业大学人事处. All Rights Reserved.  技术支持 <a href="http://www.52feidian.com/" target="_blanket">华中农业大学·沸点工作室</a></p>
		</div>
	</div>
</body>
</html>