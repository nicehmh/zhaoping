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
                  <p class="left"><i class="fa1 icon-home"></i>首页<i class="fa icon-angle-right"></i>信息发布</p>
                  
                </div>
                <div class="main">
                <div class="panel panel-default">
                     <div class="panel-heading">
                <h3 class="panel-title">
                    <i class="fa  icon-folder-open"></i>
                   信息发布              
                </h3>
           </div>
                <form action="/index.php/Admin/Smanager/new_information" method="POST" name="jaj">
                </br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;主题：<input type="text" name="title" class="form-control" style="width:25%;display:inline-block;"></br></br>
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;类别：<input type="radio" name="class" value="最新通知"> 最新通知&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="radio" name="class" value="工作动态"> 工作动态</br></br>
                 &nbsp;&nbsp; &nbsp;&nbsp; 内容：<br>
                 &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp; <textarea rows="10" class="form-control" style="width:75%;display:inline-block;margin-top:-20px;" name="content"></textarea>
                <input type="button" class="btn btn-success right right-d2" style="margin-right:85px;margin-top:130px;"value="发布" onclick="add();"/></br></br>

                <script type="text/javascript">
                function add(){
                  var flag=1;
                  var title=$("input[name='title']");
                  var content=$("textarea[name='content']").val();
                  if(title=="" || content==""){
                    flag=0;
                  }
                  var clas=$('input:radio[name=class]:checked').val();
                  if(clas==null){
                    flag=0;
                  }

                  if(flag==1){
                    $("form").submit();
                  }else{
                    alert("请把信息填写完整！");
                  }
                }
                </script>
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