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
<script type="text/javascript">
    function f1(img_id){
	  var r=confirm("是否要删除这张图片");
      if (r==true) {
            window.location.href="/index.php/Admin/Smanager/delete_img?img_id="+img_id;
      }
	}
</script>
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
                	<p class="left"><i class="fa1 icon-home"></i>首页<i class="fa icon-angle-right"></i>校园图像</p>
                	
                </div>
                <div class="main">
                <div class="panel panel-default">
                     <div class="panel-heading">
					      <h3 class="panel-title">
					          <i class="fa  icon-folder-open"></i>
					         校园图像			          
					      </h3>
					 </div>
					      </br>
   

  
            <div class="row">
			<?php if(is_array($imgs)): $i = 0; $__LIST__ = $imgs;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><div class="col-sm-6 col-md-3">
                  <a href="#" class="thumbnail">
                     <img src="/Public/img/<?php echo ($vo["img_name"]); ?>" 
                      alt="" style="width:100;height:180;">
                  </a>
                <div class="caption">
                        <a href="javascript:f1(<?php echo ($vo["img_id"]); ?>);" class="btn btn-default right"><i class="icon-remove"></i></a> 
               </div>
             </div><?php endforeach; endif; else: echo "" ;endif; ?>
             
             </div></br></br>
              <form action="/index.php/Admin/Smanager/upload_img" method="POST" name="img" enctype="multipart/form-data">
                &nbsp;&nbsp; &nbsp;&nbsp;<input  class="btn btn-primary  active" type="file" value="请选择需要上传的图片" name="file"/></br></br>
                <input type="submit" class="btn btn-success right right-d2" value="确定"/></br></br></br>
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