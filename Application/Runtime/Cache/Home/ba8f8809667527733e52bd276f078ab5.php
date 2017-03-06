<?php if (!defined('THINK_PATH')) exit();?><!doctype html>
<html>
<head>
	<meta charset="utf-8" />
	<title>华中农业大学南湖国际青年科学家论坛</title>
	<link href="/Public/logo.png" rel="SHORTCUT ICON">
	<link rel="stylesheet" type="text/css" href="/Public/Front/css/header.css" />
	<link rel="stylesheet" type="text/css" href="/Public/Front/css/content2.css" />
	<link rel="stylesheet" type="text/css" href="/Public/Front/css/datepicker.css" />
	<script type="text/javascript" src="/Public/Front/js/jquery-1.8.3.min.js"></script>
	<script type="text/javascript" src="/Public/Front/js/koala.min.1.5.js"></script>
	<script type="text/javascript" src="/Public/Front/js/datepicker.js"></script> 
	<script type="text/javascript">
		$(function(){
			var one=$("#time_one");
			var two=$("#time_two");
			one.click(function(){
				$("#startime").attr("disabled","false");
				$("#endtime").attr("disabled","false");
			});
			two.click(function(){
				$("#startime").removeAttr("disabled");
				$("#endtime").removeAttr("disabled");
			});
			$('#startime').date_input();
			$('#endtime').date_input();
		})
		function f1(){
		    // var radio1=document.getElementById('time_two').value;
			 var temp = document.getElementsByName("seltime");
                 if(temp[0].checked){
                     var intHot = temp[0].value;
                     var time="<?php echo ($time["t1"]); ?>"+"@"+"<?php echo ($time["t2"]); ?>";
					 // window.location.href='/index.php/Home/Apply/retime?time='+time;
			         var xhr=new XMLHttpRequest();
					 xhr.onreadystatechange=function(){
					     if(xhr.readyState==4){
						    alert(xhr.responseText+",请您填写申请表");
							if(xhr.responseText=="提交成功"){
							  window.location.href="/index.php/Home/Apply/apply";
							}
						 }
					 }
					 xhr.open('get','/index.php/Home/Apply/retime?time='+time);
					 xhr.send(null);
                  }else if(temp[1].checked){
				     var intHot = temp[1].value;
					 var startime=document.getElementById('startime').value;
		             var endtime=document.getElementById('endtime').value;
					 var time=startime+"@"+endtime;
					 // window.location.href='/index.php/Home/Apply/retime?time='+time;
			         var xhr=new XMLHttpRequest();
					 xhr.onreadystatechange=function(){
					     if(xhr.readyState==4){
						    alert(xhr.responseText+",请您填写申请表");
							if(xhr.responseText=="提交成功"){
							  window.location.href="/index.php/Home/Apply/apply";
							}
						 }
					 }
					 xhr.open('get','/index.php/Home/Apply/retime?time='+time);
					 xhr.send(null);
				  }else{
				      alert('请您选择一类预期参加时间！');
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

	<div id="content3">
		<i class="red">>>个人中心</i>
		<h1>请您选择参加论坛的类别</h1>
		<div class="time">
			<span class="title"><input type="radio" name="seltime" style="margin-top:18px;margin-right:20px;" id="time_one" value="1"><!--集中论坛： 	2016-04-08 至 2016-04-10 -->
		           集中论坛： <?php echo ($time["t1"]); ?>至 <?php echo ($time["t2"]); ?>
    		</span>
			
			<span class="title"><input type="radio" name="seltime" style="margin-right:20px;margin-top:18px;" id="time_two" value="2">论坛季：
				<input type="text" name="startime" id="startime" style="width:200px;"><i>至</i>
				<input type="text" name="endtime" style="width:200px;" id="endtime"/>
        		<i>(请您选择预期参加时间！) </i> 
				
			</span>
			<!-- -------------------------时间日历------------------------------- -->
			<div style="display: none; top: 464.8px; left: 609.6px;font:12px/1.5 Arial; color:#666; background:#fff;" class="date_selector">
				<div class="nav22">
					<p class="month_nav"><span class="button prev" title="[Page-Up]">«</span> <span class="month_name">十二月份</span> <span class="button next" title="[Page-Down]">»</span></p><p class="year_nav"><span class="button prev" title="[Ctrl+Page-Up]">«</span> <span class="year_name">2015</span> <span class="button next" title="[Ctrl+Page-Down]">»</span></p>
				</div>
				<table>
					<thead>
						<tr><th>一</th><th>二</th><th>三</th><th>四</th><th>五</th><th>六</th><th>日</th></tr>
					</thead>
					<tbody>
						<tr>
							<td class="unselected_month" date="2015-11-30">30</td><td class="selectable_day" date="2015-12-1">1</td><td class="selectable_day" date="2015-12-2">2</td><td class="selectable_day" date="2015-12-3">3</td><td class="selectable_day" date="2015-12-4">4</td><td class="selectable_day" date="2015-12-5">5</td><td class="selectable_day" date="2015-12-6">6</td>
						</tr>
						<tr>
							<td class="selectable_day" date="2015-12-7">7</td><td class="selectable_day" date="2015-12-8">8</td><td class="selectable_day" date="2015-12-9">9</td><td class="selectable_day" date="2015-12-10">10</td><td class="selectable_day today selected" date="2015-12-11">11</td><td class="selectable_day" date="2015-12-12">12</td><td class="selectable_day" date="2015-12-13">13</td>
						</tr>
						<tr>
							<td class="selectable_day" date="2015-12-14">14</td><td class="selectable_day" date="2015-12-15">15</td><td class="selectable_day" date="2015-12-16">16</td><td class="selectable_day" date="2015-12-17">17</td><td class="selectable_day" date="2015-12-18">18</td><td class="selectable_day" date="2015-12-19">19</td><td class="selectable_day" date="2015-12-20">20</td>
						</tr>
						<tr>
							<td class="selectable_day" date="2015-12-21">21</td><td class="selectable_day" date="2015-12-22">22</td><td class="selectable_day" date="2015-12-23">23</td><td class="selectable_day" date="2015-12-24">24</td><td class="selectable_day" date="2015-12-25">25</td><td class="selectable_day" date="2015-12-26">26</td><td class="selectable_day" date="2015-12-27">27</td>
						</tr>
						<tr>
							<td class="selectable_day" date="2015-12-28">28</td><td class="selectable_day" date="2015-12-29">29</td><td class="selectable_day" date="2015-12-30">30</td><td class="selectable_day" date="2015-12-31">31</td><td class="unselected_month" date="2016-1-1">1</td><td class="unselected_month" date="2016-1-2">2</td><td class="unselected_month" date="2016-1-3">3</td>
						</tr>
					</tbody>
				</table>
			</div>
<!-- ----------------------------------------------------------------- -->
			<span class="title"><input type="submit" name="time" value="确定" class="submit" onclick="f1()"></span>
			<h3>说明：</h3>
			<pre><?php echo ($con); ?></pre>
		</div>
	</div>
	<div id="footer">
		<div class="bottom">
			<p>Copyright © 2016 华中农业大学人事处. All Rights Reserved.  技术支持 <a href="http://www.52feidian.com/" target="_blanket">华中农业大学·沸点工作室</a></p>
		</div>
	</div>
</body>
</html>