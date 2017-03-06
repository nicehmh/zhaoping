<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
<head>
	<?php header("Content-Type: text/html; charset=utf-8");?>
	<meta charset="utf-8">
	<title>后台管理系统</title>
	<meta http-equiv="X-UA-Compatible" content="IE=edge,Chrome=1" />
	<link href="/Public/Back/css/bootstrap.min.css" rel="stylesheet">
	<link href="/Public/Back/css/font-awesome.min.css" rel="stylesheet">
	<link href="/Public/Back/css/base.css" rel="stylesheet">
	<link href="/Public/Back/css/admin.css" rel="stylesheet">
	<script type="text/javascript" src="/Public/Back/js/jquery.min.js"></script>
	<body>
	    <div class="nav-inner">
           <div class="nav-left">
           	   Admin System
           </div>

           <ul class="nav nav-right right">
                <li><a href="/index.php/admin/Login/login"><span class="glyphicon glyphicon-off"></span>&nbsp;&nbsp;退出</a></li>
           </ul>
        </div>
      	<div class="container-fluid-full">
		<div class="row-fluid">
<script>
function selectAll(){
 var checklist = document.getElementsByName ("selected");
   for(var i=0;i<checklist.length;i++)
   {
      checklist[i].checked = 1;
   }
}
 function f1(){
        var objs = document.getElementsByName ("selected");
        allValues='';      
        for(var i =0;i<objs.length;i++){    
              var obj = objs[i];    
              if(obj.checked==1){  
                   allValues+=obj.value+",";     
              }  
        }    
        window.location.href="/index.php/Admin/Xmanager/export_all?all="+allValues;
    }
</script>
                <div class="main " style="height:980px;overflow:auto">
                <div class="panel panel-default ">
                     <div class="panel-heading">
					      <h3 class="panel-title">
					          <i class="fa  icon-folder-open"></i>
					         统计表				  
                             <a class="right right-d2"  style="color:blue;" href="/index.php/Admin/Xmanager/handout">返回</a>							 
					      </h3>
					 </div>
			           <table class="table table-bordered table-striped border table-condensed text-center ">    
			                       <div class="row">					  
							     <tr>
									<td rowspan="4"><input style="margin-top:20px;" type="checkbox"   name="selected" style="controlAll " value="name" />申请人</td>
									<td ><input type="checkbox" value="sex" name="selected"/>&nbsp;性别</td>
									<td><input type="checkbox" value="birthday" name="selected"/>&nbsp;出生年月</td>
									<td ><input type="checkbox" value="major" name="selected"/>&nbsp;工作国家或地区</td>
									<td ><input type="checkbox" value="card" name="selected"/>&nbsp;证件名称</td>
									<td ><input type="checkbox" value="cardid" name="selected"/>&nbsp;证件号码</td>
									<td ><input type="checkbox" value="email" name="selected"/>&nbsp;e-mail</td>	
									<td ><input type="checkbox" value="job" name="selected"/>&nbsp;职务</td>
							   
									<td ><input type="checkbox" value="phone" name="selected"/>&nbsp;电话</td>
								</tr>
								
							    <tr>
									<td ><input type="checkbox" value="major" name="selected"/>&nbsp;专业领域</td>
									<td ><input type="checkbox" value="address" name="selected"/>&nbsp;通讯地址</td>
									
									<td colspan="2"><input type="checkbox" value="education_experience" name="selected"/>&nbsp;教育经历</td>
									<td colspan="2"><input type="checkbox" value="work_experience" name="selected"/>&nbsp;工作经历</td>
									<td><input type="checkbox" value="jianjie" name="selected"/>&nbsp;主要学术简介</td>
									<td ><input type="checkbox" value="title" name="selected"/>&nbsp;本次论坛报告题目</td>
								</tr>														
			              </div>
					</table>


							</div><br/><br/>
              <a class="btn btn-sm btn-info right right-d2" href="javascript:f1();" >确定</a>   
			  <a class="btn btn-sm btn-info right right-d2"  href="javascript:selectAll();" >全选</a> 
               </div>
                  
             </div>      
		</div>
		</div>
		<script src="/Public/Back/js/jquery.min.js"></script>
<script src="/Public/Back/js/bootstrap.min.js"></script>
<script src="/Public/Back/js/admin.js"></script>

<div class="clearfix"></div>
<div class="footer">
	<p><i claccccccss="fa ixcon-twitter"></i>© 2015 华中农业大学</i></a>
</div>
</body>
</html>