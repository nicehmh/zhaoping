<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
<head>
	
	<meta charset="utf-8">
	<title>后台管理系统</title>
	<meta http-equiv="X-UA-Compatible" content="IE=edge,Chrome=1" />
	<link href="/zhaopin/Public/Back/css/bootstrap.min.css" rel="stylesheet">
	<link href="/zhaopin/Public/Back/css/font-awesome.min.css" rel="stylesheet">
	<link href="/zhaopin/Public/Back/css/base.css" rel="stylesheet">
	<link href="/zhaopin/Public/Back/css/admin.css" rel="stylesheet">
	<script type="text/javascript" src="/zhaopin/Public/js/jquery.1.7.2.min.js"></script>
	<body>
	    <div class="nav-inner">
           <div class="nav-left">
           	   Admin System
           </div>

           <ul class="nav nav-right right">
                <li><a href="/zhaopin/index.php/index.php/admin/Login/index"><span class="glyphicon glyphicon-off"></span>&nbsp;&nbsp;退出</a></li>
           </ul>
        </div>
      	<div class="container-fluid-full">
		<div class="row-fluid">
		    <div id="sidebar-left" class="span2 left">
        <div class="nav-collapse sidebar-nav">
          <ul class="nav nav-tabs nav-stacked main-menu">
               
                
                <li><a href="/zhaopin/index.php/admin/Ymanager/application.html">&nbsp&nbsp&nbsp&nbsp<i class="fa icon-angle-right"></i><span>申请表信息</span></a></li>       
                <li><a  href="/zhaopin/index.php/admin/Ymanager/expert.html">&nbsp&nbsp&nbsp&nbsp<i class="fa icon-angle-right"></i><span>专家信息</span></a></li>
                <li><a  href="/zhaopin/index.php/admin/Ymanager/manager.html">&nbsp&nbsp&nbsp&nbsp<i class="fa icon-angle-right"></i><span>院管理员信息</span></a></li>

          </ul>
        </div>
      </div>

		   <script type="text/javascript">
    var numsum;
    function f1(){
          //alert('hello');
          var num1=document.getElementById("num1").value;
          var num2=document.getElementById('num2').value;
          var num3=document.getElementById('num3').value;
        //  var sum=document.getElementById('sum').value;
          var con=document.getElementById('con123').value;
		  con=encodeURIComponent(con);
          var sel=document.getElementById('sel').value;
		  var map="num1="+num1+"&num2="+num2+"&num3="+num3+"&sum="+numsum+"&con="+con+"&sel="+sel;
		  var xhr=new XMLHttpRequest();
		  xhr.onreadystatechange=function(){
		       if(xhr.readyState==4){
			       alert(xhr.responseText);
			   }
		  }
		  xhr.open("post","/zhaopin/index.php/Admin/Ymanager/record");
		  xhr.setRequestHeader("content-type","application/x-www-form-urlencoded");
		  xhr.send(map);
    }
    function f2(){
          var num1=document.getElementById("num1").value;
          var num2=document.getElementById('num2').value;
          var num3=document.getElementById('num3').value;
		  num1=isnull(num1,20);
		  num2=isnull(num2,50);
		  num3=isnull(num3,30);
		  sum=num1+num2+num3;
		  document.getElementById("sum").innerHTML=sum;
		  numsum=sum;
    }
	function isnull(str,num){
	     if(str){
   		    var strn=parseFloat(str);
			if(strn<=num&&strn>=0){
			    return strn;
			}else{
			    alert("您填写的评分有误")
			}
		 }else{
	       return 0;
      	}
	}
</script>
             <div class="right content">
                <div class="right-menu">
                	<p class="left"><i class="fa1 icon-home"></i>首页<i class="fa icon-angle-right"></i>已评审</p>
          
                </div>
                <div class="main ">
                <div class="panel panel-default ">
                     <div class="panel-heading">
					      <h3 class="panel-title">
					          <i class="fa  icon-folder-open"></i>
					         已评审的申请表				          
					      </h3>
					 </div>
                        
					  <table class="table table-bordered table-striped border table-condensed text-center ">    
                       <div class="row">					  
				     <tr>
						<td class="text-center col-md-2" >姓名</td><td class="col-md-2 " ><?php echo ($list["name"]); ?></td>
						<td >性别</td><td class="col-md-2"><?php echo ($list["sex"]); ?></td>
						<td >出生年月</td><td><?php echo ($list["birthday"]); ?></td>
						<td rowspan="4" class="col-md-1"><img src="/zhaopin/Public/upload/<?php echo ($list["photo"]); ?>" class="img-thumbnail img-thumbnail"  width="90" height="90"  /></td>												
					</tr>
					<tr>
						<td class="text-center col-md-2">专业领域</td><td><?php echo ($list["major"]); ?></td>
						<td>职务</td><td><?php echo ($list["job"]); ?></td>				
						<td>工作国家或地区</td><td><?php echo ($list["word_area"]); ?></td>
						
					</tr>
					<tr>
					    <td class="text-center col-md-2">电话</td><td colspan="2"><?php echo ($list["phone"]); ?></td>
						<td>E-mail</td><td colspan="2"><?php echo ($list["email"]); ?></td>											
					</tr>
					<tr>
					    <td class="text-center col-md-2">通讯地址</td><td  colspan="3"><?php echo ($list["address"]); ?></td>
						 <td>邮编</td><td  class="col-md-2"><?php echo ($list["time"]); ?></td>
					</tr>																		 
					<tr>
						<td rowspan="4" class="text-center col-md-2">教育经历</br>（从本科填起，请勿间断）</td>
						<td colspan="2" class="text-center">起止时间</td>
						<td colspan="4" class="text-center">毕业学校、专业与学位</td>
					</tr>
					<tr> <td colspan="2"><?php echo ($list2["time"]); ?></td><td colspan="4">无</td></tr>
					<tr> <td colspan="2"></td><td colspan="4">无</td> </tr>
					<tr> <td colspan="2"></td><td colspan="4">无</td> </tr>				 
					<tr>
						<td rowspan="4" class="text-center col-md-2">工作经历</br>（含博士后经历，请勿间断）</td>
						<td colspan="2" class="text-center">起止时间</td>
						<td colspan="4" class="text-center">工作单位及职务</td>
					</tr>
					<tr> <td colspan="2"><?php echo ($list3["time"]); ?></td><td colspan="4">无</td> </tr>
					<tr> <td colspan="2"></td><td colspan="4">无</td> </tr>
					<tr> <td colspan="2"></td><td colspan="4">无</td> </tr>	
				 
					<tr >
						<td class="text-center col-md-2">主要学术成绩简介</td>
						<td colspan="6"><?php echo ($list["jianjie"]); ?></td>
					</tr>
					

				
					<tr >
						<td class="text-center col-md-2">本次论坛报告题目</td>
						<td colspan="6"><?php echo ($list["title"]); ?></td>
					</tr>	
              </div>
				</table>			
</div>
               </div>
             </div>      
             </div>      
		</div>
		</div>
		<script src="/zhaopin/Public/Back/js/jquery.min.js"></script>
<script src="/zhaopin/Public/Back/js/bootstrap.min.js"></script>
<script src="/zhaopin/Public/Back/js/admin.js"></script>

<div class="clearfix"></div>
<div class="footer">
	<p><i claccccccss="fa ixcon-twitter"></i>© 2015 华中农业大学&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp技术支持：<a href="http://www.52feidian.com" target="_blanket"><i class="icon-leaf">&nbsp&nbsp沸点工作室</i></a>
</div>
</body>
</html>