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
		   ﻿ <div id="sidebar-left" class="span2 left">
        <div class="nav-collapse sidebar-nav">
          <ul class="nav nav-tabs nav-stacked main-menu">
                    
                <li><a href="/index.php/admin/Smanager/index.html">&nbsp&nbsp&nbsp&nbsp<i class="fa icon-angle-right"></i><span>论坛介绍</span></a></li>       
                <li><a  href="/index.php/admin/Smanager/situation.html">&nbsp&nbsp&nbsp&nbsp<i class="fa icon-angle-right"></i><span>学校介绍</span></a></li>
                <li><a  href="/index.php/admin/Smanager/time.html">&nbsp&nbsp&nbsp&nbsp<i class="fa icon-angle-right"></i><span>人才招聘</span></a></li>
                <li><a  href="/index.php/admin/Smanager/photo.html">&nbsp&nbsp&nbsp&nbsp<i class="fa icon-angle-right"></i><span>校园图像</span></a></li>
                <li><a  href="/index.php/admin/Smanager/explain.html">&nbsp&nbsp&nbsp&nbsp<i class="fa icon-angle-right"></i><span>论坛说明</span></a></li>
                <li><a  href="/index.php/admin/Smanager/information.html">&nbsp&nbsp&nbsp&nbsp<i class="fa icon-angle-right"></i><span>信息发布</span></a></li>


          </ul>
        </div>
      </div>

             <div class="right content">
                <div class="right-menu">
                	<p class="left"><i class="fa1 icon-home"></i>首页<i class="fa icon-angle-right"></i>论坛说明</p>
                	
                </div>
                <div class="main">
                <div class="panel panel-default">
                     <div class="panel-heading">
					      <h3 class="panel-title">
					          <i class="fa  icon-folder-open"></i>
					         		修改集中论坛时间和论坛说明	          
					      </h3>
					 </div>
         
					   <script type="text/javascript" src="/Public/Back/js/showdate.js"></script>
                          <form id="page-select"  class="form-inline" role="form" name="set" action="/index.php/Admin/Smanager/retime" method="post"></br>
                         &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;请选择集中论坛时间：</br></br>
                &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;<input name="start_time" value="<?php echo ($list["settime"]); ?>" class="form-control inline systemtext" type="text" id="start_time" placeholder="请输入起始时间" onClick="return Calendar('start_time');" style="width:206px;background: #fefefe;border: 1px solid #bbb;font-size: 14px;color: #333;padding: 7px;border-radius: 3px;">           
                &nbsp;&nbsp;到&nbsp;&nbsp;
                <input name="end_time" value="<?php echo ($list["finatime"]); ?>" class="form-control inline systemtext" type="text" id="end_time" placeholder="请输入关闭时间" onClick="return Calendar('end_time');" style="width:206px;background: #fefefe;border: 1px solid #bbb;font-size: 14px;color: #333;padding: 7px;border-radius: 3px;">
                
                <input type="submit" class="btn btn-success right right-d2" style="margin-right:85px;" value="确定"/></br></br></form> </br>                                                         
                 &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;集中论坛与论坛季的说明：</br></br>
                <form action="/index.php/Admin/Smanager/record?zd=ltsm" method="POST" name="jaj">
                 &nbsp;&nbsp; &nbsp;&nbsp; <textarea rows="10" class="form-control" style="width:75%;display:inline-block;" name="con"><?php echo ($con); ?></textarea>
                <input type="submit" class="btn btn-success right right-d2" style="margin-right:100px;margin-top:140px;"value="确定"/></br></br>
				</form>
                      </div>
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