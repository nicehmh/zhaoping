<?php if (!defined('THINK_PATH')) exit();?>﻿<!doctype html>
<html>
<head>
	<meta charset="utf-8" />
	<title>华中农业大学南湖国际青年科学家论坛</title>
	<link href="/Public/logo.png" rel="SHORTCUT ICON">
	<meta name="keywords" content="华中农业大学南湖国际青年科学家论坛" />
	<meta name="description" content="华中农业大学南湖国际青年科学家论坛中国•武汉•华中农业大学" />
	<link rel="stylesheet" type="text/css" href="/Public/Front/css/header.css" />
	<link rel="stylesheet" type="text/css" href="/Public/Front/css/content.css" />
	<script type="text/javascript" src="/Public/Front/js/jquery-1.8.3.min.js"></script>
	<script type="text/javascript" src="/Public/Front/js/koala.min.1.5.js"></script>
	<script type="text/javascript">
	function f1(){
	    var user=document.getElementById('username').value;
		var pwd=document.getElementById('password').value;
		var code=document.getElementById('confirm').value;
		var xhr=new XMLHttpRequest();
		xhr.onreadystatechange=function(){
		   if(xhr.readyState==4){
		     //alert(xhr.responseText);
		       var con=xhr.responseText;
			   if(con=="登陆成功"){
			       window.location.href="/index.php/Home/Apply/time";
			   }else{
			       alert(con);exit;
			   }
			}
		}
		xhr.open("get","/index.php/Home/Index/do_login?user="+user+"&password="+pwd+"&code="+code);
		xhr.send("null");
	}
	function f2(){
		var xhr=new XMLHttpRequest();
		xhr.onreadystatechange=function(){
		   if(xhr.readyState==4){
		       if(xhr.responseText){
			        var div1 = document.getElementById('unlog');  
                        div1.style.display="block"; 
		            var div2 = document.getElementById('loged');  
                        div2.style.display="none";
			   }else{
			      alert("请刷新页面后重试");exit;
			   }
			}
		}
		xhr.open("get","/index.php/Home/Index/unsetsess");
		xhr.send("null");
	}

	</script>
	<script>
		window.onload=function(){
			var odiv=document.getElementById('div1');
			var oul=odiv.getElementsByTagName('ul')[0];
			var oli=oul.getElementsByTagName('li');
			var oa=document.getElementsByTagName('a');
			var speed=-2;
			var timer=null;
			oul.innerHTML+=oul.innerHTML;
			oul.style.width=oli[0].offsetWidth*oli.length+'px';
			function move(){
				if(oul.offsetLeft<-oul.offsetWidth/2){
					oul.style.left=0;
				}
				if(oul.offsetLeft>0){
					oul.style.left=-oul.offsetWidth/2+'px';//////////////////////////why
				}
				oul.style.left=oul.offsetLeft+speed+'px';
			}
			timer=setInterval(move,30)
			odiv.onmouseover=function(){
				clearInterval(timer);
			}
			odiv.onmouseout=function(){
				timer=setInterval(move,30);
			}
			oa[0].onclick=function(){
				speed=-2;
				
			}
			oa[1].onclick=function(){
				speed=2;
				
			}
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

	
	<div id="content">
		<div id="left">
			<div class="login">
				<!-- 未登录start -->
				<div id="unlog">
					<h1>登录/Login</h1>
					<hr class="login_hr" />
					<form action="">
						<span class="login_left">
							<i>用户名/Username</i>
							<input type="text" id="username" placeholder="email"/>
						</span>
						<span class="login_left">
							<i>密码/Password</i>
							<input type="password" id="password" placeholder="password"/>
						</span>
						<!--<span>验证码：<input type="text" name="code" placeholder="验证码" /></span>-->
						<span class="login_left">
							<i>验证码/Verification Code</i>
							<input type="password" id="confirm" style="width:80px;" placeholder="Code"/>
							<img style="width:40%;height:20px;position:relative;top:5px;" src="/index.php/Home/Index/verify" id="code" onclick="this.src=this.src+'?'+Math.random()" class="code" />
						</span>
						<span><a href="javascript:f1();" class="denglu one">登录/Login</a></span>
						<span><a href="/index.php/Home/Apply/zhuce" class="denglu two">注册/Register</a></span>
						<span><a href="/index.php/Home/Apply/forget" class="forget">忘记密码？Forgot?</a></span>
					</form>
				</div>
				<!-- 未登录end -->
				<!-- 已登录时，将.unlogin的display改为none,.logined的display改为block -->
				<!-- 已登录start -->
				<div  style="display:none;" id="loged">
					<h1>欢迎登录</h1>
					<hr class="login_hr" />
					<span class="welcome">欢迎您</span>
					<span class="welcome">[<?php echo ($sess); ?>]</span>
					<span class="welcome">登录华中农业大学南湖国际青年科学家论坛 </span>
					<span><a href="/index.php/Home/Apply/time" class="denglu one">个人中心</a></span>
					<span><a href="/index.php/Home/Apply/liuyan" class="denglu two">留言</a></span>
					<span><a href="javascript:f2();" class="denglu three">注销</a></span>
				</div>
				<!-- 已登录end -->
		    </div>
		    <script type="text/javascript">
		    	var sess="<?php echo ($sess); ?>";
		 		if(sess=="1"){
		     
		 		}else{
				    var div1 = document.getElementById('unlog');  
		                div1.style.display="none"; 
				    var div2 = document.getElementById('loged');  
		                div2.style.display="block"; 
		 		}
		    </script>
			<div class="contact_us">
				<h1>联系/Contact</h1>
				<hr class="login_hr hr2" style="margin-bottom:10px;"/>
				<div>
					<span>国际合作与交流处:李老师</span>
					<span>+86（27）8728-1181</span>
					<span>zhuanjia@mail.hzau.edu.cn</span>
				</div>
				<div>
					<span>人事处: 赵老师</span>
					<span>+86（27）8728-0957</span>
					<span>rcb@mail.hzau.edu.cn</span>
				</div>
				<div>
					<span>博士后协会副会长</span>
					<span>HZAU Postdoctoral Consultant</span>
					<span>Dr. Mohamed F. Foda</span>
					<span>+86-13720279115 </span>
					<span>m.frahat@fagr.bu.edu.eg</span>
					<span>m.frahat@mail.hzau.edu.cn</span>
				</div>
			</div>
		</div>

		<div id="right">
			<div class="about-img">
				<img src="/Public/Front/images/1.jpg" alt="">
			</div>
			<div class="new-container">
				<div class="news">
					<h1>最新通知/News<a href="/index.php/Home/Information/newinformation">More...</a></h1>
					<hr class="login_hr hr4" />
					<ul id="someinformation">
						<?php if(is_array($information1)): $i = 0; $__LIST__ = array_slice($information1,0,6,true);if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$information1): $mod = ($i % 2 );++$i;?><li><a href="/index.php/Home/Information/information?id=<?php echo ($information1["id"]); ?>"><?php echo ($information1["title"]); ?></a></li><?php endforeach; endif; else: echo "" ;endif; ?>
					</ul>
				</div>
				<div class="news">
					<!-- 活动版块 -->
					<h1>工作动态/Works<a href="/index.php/Home/Information/newactivity">More...</a></h1>
					<hr class="login_hr hr4" />
					<ul  id="someactivity">
						<?php if(is_array($information2)): $i = 0; $__LIST__ = array_slice($information2,0,6,true);if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$information2): $mod = ($i % 2 );++$i;?><li><a href="/index.php/Home/Information/information?id=<?php echo ($information2["id"]); ?>"><?php echo ($information2["title"]); ?></a></li><?php endforeach; endif; else: echo "" ;endif; ?>
					</ul>
				</div>
			</div>
		</div>
		

		<div class="about">
			<h1>教学科研单位链接/Links</h1>
			<div id="div1">
				<ul>
					<li><a href="http://cpst.hzau.edu.cn/" target="_blanket"><img src="/Public/Front/images/x1.jpg" /></a></li>
					<li><a href="http://my.hzau.edu.cn/" target="_blanket"><img src="/Public/Front/images/x2.jpg" /></a></li>
					<li><a href="http://zyhj.hzau.edu.cn/" target="_blanket"><img src="/Public/Front/images/x3.jpg" /></a></li>
					<li><a href="http://lst.hzau.edu.cn/" target="_blanket"><img src="/Public/Front/images/x4.jpg" /></a></li>
					<li><a href="http://linx.hzau.edu.cn/" target="_blanket"><img src="/Public/Front/images/x5.jpg" /></a></li>
					<li><a href="http://cf.hzau.edu.cn/" target="_blanket"><img src="/Public/Front/images/x6.jpg" /></a></li>
					<li><a href="http://cet.hzau.edu.cn/" target="_blanket"><img src="/Public/Front/images/x7.jpg" /></a></li>
					<li><a href="http://emc.hzau.edu.cn/" target="_blanket"><img src="/Public/Front/images/x8.jpg" /></a></li>
					<li><a href="http://shipin.hzau.edu.cn/" target="_blanket"><img src="/Public/Front/images/x9.jpg" /></a></li>
					<li><a href="http://lxy.hzau.edu.cn/" target="_blanket"><img src="/Public/Front/images/x10.jpg" /></a></li>
					<li><a href="http://wf.hzau.edu.cn/" target="_blanket"><img src="/Public/Front/images/x11.jpg" /></a></li>
					<li><a href="http://fld.hzau.edu.cn/" target="_blanket"><img src="/Public/Front/images/x12.jpg" /></a></li>
					<li><a href="http://sport.hzau.edu.cn/" target="_blanket"><img src="/Public/Front/images/x13.jpg" /></a></li>
					<li><a href="http://mks.hzau.edu.cn/" target="_blanket"><img src="/Public/Front/images/x14.jpg" /></a></li>
					<li><a href="http://ggxy.hzau.edu.cn/" target="_blanket"><img src="/Public/Front/images/x15.jpg" /></a></li>
					<li><a href="http://coi.hzau.edu.cn/" target="_blanket"><img src="/Public/Front/images/x16.jpg" /></a></li>
				</ul>
			</div>
		</div>
		
	</div>
	<div id="footer">
		<div class="bottom">
			<p>Copyright © 2016 华中农业大学人事处. All Rights Reserved.  技术支持 <a href="http://www.52feidian.com/" target="_blanket">华中农业大学·沸点工作室</a></p>
		</div>
	</div>
</body>
</html>