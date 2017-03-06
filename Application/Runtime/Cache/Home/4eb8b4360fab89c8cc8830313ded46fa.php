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
      function  register(){
        var nm=document.getElementById('name').value;
        var pwd=document.getElementById('password').value;
		var code=document.getElementById('code').value;
		if(nm == "" || pwd == "") {
			return;
		}
       var xhr=new XMLHttpRequest();
        xhr.onreadystatechange=function(){
          if(xhr.readyState==4){
              if(xhr.responseText=="注册成功"){
			       window.location.href="/index.php/Home/Apply/time";
			  }else{
			       alert(xhr.responseText);
			  }
          }
        } 
        xhr.open('get','/index.php/Home/Apply/register?name='+nm+'&password='+pwd+'&code='+code);
        xhr.send(null);
      }
	  function checkpwd(){
	        var repwd=document.getElementById("confirm").value;
			var pwd=document.getElementById('password').value;
			if(repwd==pwd){
			     
			}else{
			     document.getElementById("tx").innerHTML="<h4 style='color:red'> 　　密码不一致</h4>";
			}
	  }
	  function checkuser(){
	        var user=document.getElementById("name").value;
			  var xhr=new XMLHttpRequest();
          xhr.onreadystatechange=function(){
           if(xhr.readyState==4){
              if(xhr.responseText=="true"){
			       alert('您所填写的邮箱已被使用');
			  }
           }
         } 
        xhr.open('get','/index.php/Home/Apply/checkuser?user='+user);
        xhr.send(null);
	  }
  </script>
</head>
<body>
	<!-- head start  -->
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

	<!-- head end -->
	<div id="content2">
		<h1>注册</h1>
		<hr />
		<form action="" class="zhuce">
			<span><i>用户名 username</i><input type="text" id="name" onblur="checkuser()"/><h6>　 * 请使用常用邮箱注册，后续通知将由邮件发送！(Commonly used E-mail )</h6></span>
			<span><i>密　码 password</i><input type="password" id="password" name="pwd"/><h6>　 * 至少8位，区分大小写 (At least 8 bits, case sensitive)</h6></span>
			<span><i>确定密码 confirm password</i><input type="password" id="confirm" onblur="checkpwd()"/><h6 id="tx">　 * 至少8位，区分大小写。(At least 8 bits, case sensitive)</h6></span>
			<span><i>验证码 Verification Code</i><input type="password" id="code" /><h5>　  <img src="/index.php/Home/Apply/verify" id="codeimg" onclick="this.src=this.src+'?'+Math.random()" class="code" /><a class="fresh" onClick="fresh();">　点击更换 change</a></h5></span>
			<script type="text/javascript">
				var code=document.getElementById('codeimg');
				function fresh(){
					code.src=code.src+'?'+Math.random();
				}
			</script>
			<span><input type="button" name="submit" value="注册 register" class="submit left" onClick="register()" style="width: 150px;"><input type="submit" name="reset" value="重置 reset" class="submit" style="width: 150px;"></span>
		</form>
		
	</div>
	<!-- foot start -->
	<div id="footer">
		<div class="bottom">
			<p>Copyright © 2016 华中农业大学人事处. All Rights Reserved.  技术支持 <a href="http://www.52feidian.com/" target="_blanket">华中农业大学·沸点工作室</a></p>
		</div>
	</div>
	<!-- footer end -->
</body>
</html>