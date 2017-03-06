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
	 <script type="text/javascript">
         function f1(numid){
	    var xhr=new XMLHttpRequest();
	    xhr.onreadystatechange=function(){
	         if(xhr.readyState==4){
		       if(xhr.responseText==1){
			      alert('取消成功');
		          window.location.href="/index.php/Admin/Xexpert/shouye";
		       }
		 }
	    } 
	    xhr.open('get',"/index.php/Admin/Xexpert/cal?numid="+numid);
	    xhr.send(null);
	    // window.location.href="/index.php/Admin/Xexpert/cal?numid="+numid;
	 }
   </script>	   
               
                <div class="main" style="height:650px;">
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
								<?php if(is_array($list1)): $i = 0; $__LIST__ = $list1;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><tr>
								   <td style="text-align:center;"><?php echo ($vo["name"]); ?></td>
								   <td style="text-align:center;"><?php echo ($vo["major"]); ?></td>
								   <td style="text-align:center;" id="yps"><a class="btn btn-sm btn-info  " href="/index.php/Admin/Xexpert/pingshen?numid=<?php echo ($vo["numid"]); ?>&aid=<?php echo ($vo["aid"]); ?>"><i class="icon-pencil">评审</i></a>
								   <a class="btn btn-sm btn-info " href="javascript:f1(<?php echo ($vo["numid"]); ?>);"><i class="icon-pencil">取消评审</i></a></td>
                                     <!--  <a class="btn btn-sm btn-info " href="/index.php/Admin/Xexpert/hl?numid=<?php echo ($vo["numid"]); ?>&aid=<?php echo ($vo["aid"]); ?>"><i class="icon-pencil">重新评审</i></a></td>-->
                                       <td style="text-align:center;color:red;"><?php echo ($vo["kp2"]); ?></td>
								   </tr><?php endforeach; endif; else: echo "" ;endif; ?>	 	
                                <?php if(is_array($list2)): $i = 0; $__LIST__ = $list2;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><tr>
								   <td style="text-align:center;"><?php echo ($vo["name"]); ?></td>
								   <td style="text-align:center;"><?php echo ($vo["major"]); ?></td>
								   <td style="text-align:center;" id="yps"><a class="btn btn-sm btn-info  " href="/index.php/Admin/Xexpert/chakan?numid=<?php echo ($vo["numid"]); ?>"><i class="icon-pencil">查看评审</i></a>
								   <a class="btn btn-sm btn-info  " href="/index.php/Admin/Xexpert/pingshen?numid=<?php echo ($vo["numid"]); ?>&aid=<?php echo ($vo["aid"]); ?>"><i class="icon-pencil">继续评审</i></a></td>
                                       <td style="text-align:center;color:red;"><?php echo ($vo["kp2"]); ?></td>
								   </tr><?php endforeach; endif; else: echo "" ;endif; ?>	 	
                                <?php if(is_array($list3)): $i = 0; $__LIST__ = $list3;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><tr>
								   <td style="text-align:center;"><?php echo ($vo["name"]); ?></td>
								   <td style="text-align:center;"><?php echo ($vo["major"]); ?></td>
								   <td style="text-align:center;" id="yps"><a class="btn btn-sm btn-info  " href="/index.php/Admin/Xexpert/pingshen?numid=<?php echo ($vo["numid"]); ?>&aid=<?php echo ($vo["aid"]); ?>"><i class="icon-pencil">评审</i></a>
								    <!--<a class="btn btn-sm btn-info " href="javascript:f1(<?php echo ($list["numid"]); ?>);"><i class="icon-pencil">取消评审</i></a></td>-->
                                     <!--  <a class="btn btn-sm btn-info " href="/index.php/Admin/Xexpert/hl?numid=<?php echo ($vo["numid"]); ?>&aid=<?php echo ($vo["aid"]); ?>"><i class="icon-pencil">重新评审</i></a></td>-->
                                       <td style="text-align:center;color:red;"><?php echo ($vo["kp2"]); ?></td>
								   </tr><?php endforeach; endif; else: echo "" ;endif; ?>	 
                                <?php if(is_array($list4)): $i = 0; $__LIST__ = $list4;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><tr>
								   <td style="text-align:center;"><?php echo ($vo["name"]); ?></td>
								   <td style="text-align:center;"><?php echo ($vo["major"]); ?></td>
								   <td style="text-align:center;" id="yps"><a class="btn btn-sm btn-info  " href="/index.php/Admin/Xexpert/chakan?numid=<?php echo ($vo["numid"]); ?>"><i class="icon-pencil">查看评审</i></a>
                                       <td style="text-align:center;color:red;"><?php echo ($vo["kp2"]); ?></td>
								   </tr><?php endforeach; endif; else: echo "" ;endif; ?>	 										
						      </tbody>		
                       </table>			
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