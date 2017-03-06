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
  
                <li><a href="/zhaopin/index.php/index.php/admin/Yexpert/index.html">&nbsp&nbsp&nbsp&nbsp<i class="fa icon-angle-right"></i><span>已评审</span></a></li>
           
                <li><a  href="/zhaopin/index.php/index.php/admin/Yexpert/none.html">&nbsp&nbsp&nbsp&nbsp<i class="fa icon-angle-right"></i><span>未评审</span></a></li>
                <li><a  href="/zhaopin/index.php/index.php/admin/Yexpert/cancle.html">&nbsp&nbsp&nbsp&nbsp<i class="fa icon-angle-right"></i><span>已取消</span></a></li>

          </ul>
        </div>
      </div>

             <div class="right content">
                <div class="right-menu">
                	<p class="left"><i class="fa1 icon-home"></i>首页<i class="fa icon-angle-right"></i>已评审</p>
                	
                </div>
                <div class="main">
                <div class="panel panel-default">
                     <div class="panel-heading">
					      <h3 class="panel-title">
					          <i class="fa  icon-folder-open"></i>
					         已评审的申请表				          
					      </h3>
					 </div>
                        
					  <table class="table table-bordered table-striped border">                             	
				     <tr>
						<td width="185px;">姓名</td><td></td>
						<td width="50px;">性别</td><td></td>
						<td width="150px;">出生年月</td><td></td>
						<td rowspan="2" ></td>												
					</tr>
					<tr>
						<td>专业领域</td><td></td>
						<td>职务</td><td></td>				
						<td>工作国家或地区</td><td></td>
						
					</tr>
					<tr>
					    <td>电话</td><td colspan="2"></td>
						<td>E-mail</td><td colspan="3"></td>												
					</tr>
					<tr>
					    <td>通讯地址</td><td colspan="6"><p style="text-align:right;">邮编:</p></td>
					</tr>																		 
					<tr>
						<td rowspan="4">教育经历</br>（从本科填起，请勿间断）</td>
						<td>起止时间</td>
						<td colspan="5">毕业学校、专业与学位</td>
					</tr>
					<tr> <td></td><td colspan="5"></td> </tr>
					<tr> <td></td><td colspan="5"></td> </tr>
					<tr> <td></td><td colspan="5"></td> </tr>				 
					<tr>
						<td rowspan="4">工作经历</br>（含博士后经历，请勿间断）</td>
						<td>起止时间</td>
						<td colspan="5">工作单位及职务</td>
					</tr>
					<tr><td></td><td colspan="5"></td></tr>
					<tr><td></td><td colspan="5"></td></tr>
					<tr><td></td><td colspan="5"></td></tr>
				 
					<tr >
						<td >主要学术成绩简介</td>
						<td colspan="6"></td>
					</tr>
					

				
					<tr >
						<td>本次论坛报告题目</td>
						<td colspan="6"></td>
					</tr>	

				</table>			
</div>
 <a href="/zhaopin/index.php/index.php/admin/Yexpert/review.html"  class="btn btn-sm btn-info right right-d2 " ><i class="icon-pencil">重新评审</i></a></br>

                         
                         
                         
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