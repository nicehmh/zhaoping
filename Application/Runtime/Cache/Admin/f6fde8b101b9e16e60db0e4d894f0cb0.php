<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
<head>
	<?php header("Content-Type: text/html; charset=utf-8");?>
	<meta charset="utf-8">
	<title>后台管理系统</title>
	<meta http-equiv="X-UA-Compatible" content="IE=edge,Chrome=1" />
	<link href="/zhaopin/Public/Back/css/bootstrap.min.css" rel="stylesheet">
	<link href="/zhaopin/Public/Back/css/font-awesome.min.css" rel="stylesheet">
	<link href="/zhaopin/Public/Back/css/base.css" rel="stylesheet">
	<link href="/zhaopin/Public/Back/css/admin.css" rel="stylesheet">
	<script type="text/javascript" src="/zhaopin/Public/Back/js/jquery.min.js"></script>
	<body>
	    <div class="nav-inner">
           <div class="nav-left">
           	   Admin System
           </div>

           <ul class="nav nav-right right">
                <li><a href="/zhaopin/index.php/admin/Login/login"><span class="glyphicon glyphicon-off"></span>&nbsp;&nbsp;退出</a></li>
           </ul>
        </div>
      	<div class="container-fluid-full">
		<div class="row-fluid">
		   
               
                <div class="main" style="height:950px;">
                <div class="panel panel-default">
                     <div class="panel-heading">
					      <h3 class="panel-title">
					          <i class="fa  icon-folder-open"></i>
					         已收悉的申请表
 
					      </h3>
					 </div>
                    
					 
					 <table class="table table-bordered table-striped border">
                                 <thead class="top">
								  <tr>
								  	<th style="text-align:center;">申请人</th>
								  	<th style="text-align:center;">专业领域</th>
									<th style="text-align:center;">编辑</th>
									<th style="text-align:center;">状态</th>
								  </tr>
								   </thead>
								   <tbody>
								<?php if(is_array($list)): $i = 0; $__LIST__ = $list;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><tr>
								   <td style="text-align:center;"><?php echo ($vo["name"]); ?></td>
								   <td style="text-align:center;"><?php echo ($vo["major"]); ?></td>
								   <td style="text-align:center;" id="yps"><a class="btn btn-sm btn-info  " href="/zhaopin/index.php/Admin/Yexpert/chakan?numid=<?php echo ($vo["numid"]); ?>"><i class="icon-pencil">查看评审</i></a>
                                     <!--  <a class="btn btn-sm btn-info " href="/zhaopin/index.php/Admin/Yexpert/hl?numid=<?php echo ($vo["numid"]); ?>&aid=<?php echo ($vo["aid"]); ?>"><i class="icon-pencil">重新评审</i></a></td>-->
                                       <td style="text-align:center;color:red;"><?php echo ($vo["kp2"]); ?></td>
								   </tr><?php endforeach; endif; else: echo "" ;endif; ?>	 						   
						      </tbody>		
                       </table>			
               </div>
             </div>
		</div>
		</div>
	
		<script src="/zhaopin/Public/Back/js/jquery.min.js"></script>
<script src="/zhaopin/Public/Back/js/bootstrap.min.js"></script>
<script src="/zhaopin/Public/Back/js/admin.js"></script>

<div class="clearfix"></div>
<div class="footer">
	<p><i claccccccss="fa ixcon-twitter"></i>© 2015 华中农业大学</i></a>
</div>
</body>
</html>