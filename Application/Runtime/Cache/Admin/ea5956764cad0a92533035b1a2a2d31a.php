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
                <li><a  href="/index.php/admin/Smanager/situation.html">&nbsp&nbsp&nbsp&nbsp<i class="fa icon-angle-right"></i><span>申请条件</span></a></li>
                <li><a  href="/index.php/admin/Smanager/time.html">&nbsp&nbsp&nbsp&nbsp<i class="fa icon-angle-right"></i><span>申请时间</span></a></li>
                <li><a  href="/index.php/admin/Smanager/day.html">&nbsp&nbsp&nbsp&nbsp<i class="fa icon-angle-right"></i><span>日程安排</span></a></li>
                <li><a  href="/index.php/admin/Smanager/hotel.html">&nbsp&nbsp&nbsp&nbsp<i class="fa icon-angle-right"></i><span>差旅住宿</span></a></li>
                <li><a  href="/index.php/admin/Smanager/phone.html">&nbsp&nbsp&nbsp&nbsp<i class="fa icon-angle-right"></i><span>联系方式</span></a></li>
                <li><a  href="/index.php/admin/Smanager/explain.html">&nbsp&nbsp&nbsp&nbsp<i class="fa icon-angle-right"></i><span>论坛说明</span></a></li>
                <li><a  href="/index.php/admin/Smanager/information.html">&nbsp&nbsp&nbsp&nbsp<i class="fa icon-angle-right"></i><span>信息发布</span></a></li>


          </ul>
        </div>
      </div>

             <div class="right content">
                <div class="right-menu">
                	<p class="left"><i class="fa1 icon-home"></i>首页<i class="fa icon-angle-right"></i>差旅住宿</p>
                	
                </div>
                <div class="main">
                <div class="panel panel-default">
                     <div class="panel-heading">
					      <h3 class="panel-title">
					          <i class="fa  icon-folder-open"></i>
					         差旅住宿			          
					      </h3>
					 </div>
					       </br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;差旅住宿说明：</br></br>
                <form action="/index.php/Admin/Smanager/record?zd=clzs" method="POST" name="jaj">
                 &nbsp;&nbsp; &nbsp;&nbsp; <textarea rows="6" class="form-control" style="width:75%;display:inline-block;" name="con"><?php echo ($con); ?></textarea>
                <input type="submit" class="btn btn-success right right-d2" style="margin-right:85px;margin-top:100px;"value="确定"/></br></br>
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