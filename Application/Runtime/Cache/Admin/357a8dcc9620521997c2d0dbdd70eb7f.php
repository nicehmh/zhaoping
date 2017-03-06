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
   <script type="text/javascript">
         function f1(numid){
	    var xhr=new XMLHttpRequest();
	    xhr.onreadystatechange=function(){
	         if(xhr.readyState==4){
		    if(xhr.responseText==1){
		       // alert('hello');
		       window.location.href="/zhaopin/index.php/Admin/Xexpert/none";
		    }
		 }
	    } 
	    xhr.open('get',"/zhaopin/index.php/Admin/Xexpert/cal?numid="+numid);
	    xhr.send(null);
	    // window.location.href="/zhaopin/index.php/Admin/Xexpert/cal?numid="+numid;
	 }
   </script>
      	<div class="container-fluid-full">
		<div class="row-fluid">
		         <div id="sidebar-left" class="span2 left">
        <div class="nav-collapse sidebar-nav">
          <ul class="nav nav-tabs nav-stacked main-menu">
           
            <li><a href="/zhaopin/index.php/admin/Xexpert/index.html">&nbsp&nbsp&nbsp&nbsp<i class="fa icon-angle-right"></i><span>已评审</span></a></li>
           
                <li><a  href="/zhaopin/index.php/admin/Xexpert/none.html">&nbsp&nbsp&nbsp&nbsp<i class="fa icon-angle-right"></i><span>未评审</span></a></li>
                <li><a  href="/zhaopin/index.php/admin/Xexpert/cancle.html">&nbsp&nbsp&nbsp&nbsp<i class="fa icon-angle-right"></i><span>已取消</span></a></li>

          </ul>
        </div>
      </div>

             <div class="right content">
                <div class="right-menu">
                	<p class="left"><i class="fa1 icon-home"></i>首页<i class="fa icon-angle-right"></i>未评审</p>
                	
                </div>
                <div class="main">
               <div class="panel panel-default">
                     <div class="panel-heading">
					      <h3 class="panel-title">
					          <i class="fa  icon-folder-open"></i>
					         未评审的申请表		          
					      </h3>				
					 </div>
         
					  <table class="table table-bordered table-striped border">
                                 <thead class="top">
								  <tr>
								  	<th style="text-align:center;">申请人</th>
								  	<th style="text-align:center;">专业领域</th>
								  	<th style="text-align:center;">编辑</th>
								  </tr>
								   </thead>
								   <tbody>
								   <?php if(is_array($list)): $i = 0; $__LIST__ = $list;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$list): $mod = ($i % 2 );++$i;?><tr>
								   <td style="text-align:center;"><?php echo ($list["name"]); ?></td>
								   <td style="text-align:center;"><?php echo ($list["major"]); ?></td>
								   <td style="text-align:center;"><a class="btn btn-sm btn-info  " href="/zhaopin/index.php/Admin/Xexpert/hl?numid=<?php echo ($list["numid"]); ?>&aid=<?php echo ($list["aid"]); ?>"><i class="icon-pencil">评审</i></a>
                                       <a class="btn btn-sm btn-info " href="javascript:f1(<?php echo ($list["numid"]); ?>);"><i class="icon-pencil">取消评审</i></a></td>
								   </tr><?php endforeach; endif; else: echo "" ;endif; ?>		   
						      </tbody>							    
				  			   </table>			
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
	<p><i claccccccss="fa ixcon-twitter"></i>© 2015 华中农业大学</i></a>
</div>
</body>
</html>