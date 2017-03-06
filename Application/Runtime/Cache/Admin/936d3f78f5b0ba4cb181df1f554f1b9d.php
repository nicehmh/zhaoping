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
<script>
   function f2(numid,pid){
      var mes=confirm("您是否想将申请表退回\n给相应专家评审");
      if(mes==true){
	     window.location.href="/zhaopin/index.php/Admin/Ymanager/tuihui?numid="+numid+"&pid="+pid;
	  }
	 // window.open ("page.aspx", "newwindow", "height=100, width=400, toolbar =no, menubar=no,scrollbars=no, resizable=no, location=no, status=no");
     // window.location.href="/zhaopin/index.php/Admin/Ymanager/tuihui?numid="+numid+"&pid="+pid;
	  /*var xhr=new XMLHttpRequest();
	  xhr.onreadystatechange=function(){
	       if(xhr.readyState==4){
		      alert(xhr.responseText);
		   }
	  }
	  xhr.open('get',"/zhaopin/index.php/Admin/Ymanager/tuihui?numid="+numid+"&pid"+pid);
	  xhr.send(null);*/
   }
</script>
      	<div class="container-fluid-full">
		<div class="row-fluid">
		    <div id="sidebar-left" class="span2 left">
        <div class="nav-collapse sidebar-nav">
          <ul class="nav nav-tabs nav-stacked main-menu">
               
                
                <li><a href="/zhaopin/index.php/admin/Ymanager/index.html">&nbsp&nbsp&nbsp&nbsp<i class="fa icon-angle-right"></i><span>个人中心</span></a></li>       
                <li><a  href="/zhaopin/index.php/admin/Ymanager/add.html">&nbsp&nbsp&nbsp&nbsp<i class="fa icon-angle-right"></i><span>添加账号</span></a></li>
                  <li><a  href="/zhaopin/index.php/admin/Ymanager/handout.html">&nbsp&nbsp&nbsp&nbsp<i class="fa icon-angle-right"></i><span>材料分发</span></a></li>
          </ul>
        </div>
      </div>

             <div class="right content">
                <div class="right-menu">
                	<p class="left"><i class="fa1 icon-home"></i>首页<i class="fa icon-angle-right"></i>个人中心</p>
                	
                </div>

                    

			<div class="main">
                <div class="panel panel-default">
                     <div class="panel-heading">
					      <h3 class="panel-title">
					          <i class="fa  icon-folder-open"></i>
					         评审信息	          
					      </h3>
					 </div>
                    
					  <table class="table table-bordered table-striped border">
                          <tr>
                          	<th style="text-align:center;">评审人</th>
                          	<th style="text-align:center;">得分合计</th>
                          	<th style="text-align:center;">鉴定结论</th>
                          	<th style="text-align:center;">管理</th>
                          </tr>   	
			  <?php if(is_array($list)): $i = 0; $__LIST__ = $list;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$list): $mod = ($i % 2 );++$i;?><tr>
                            <td style="text-align:center;"><?php echo ($list["tr1"]); ?></td>
                            <td style="text-align:center;"><?php echo ($list["sum"]); ?></td>
                            <td style="text-align:center;"><?php echo ($list["assess"]); ?></td>
                            <td style="text-align:center;">
							<a class="btn btn-xs btn-info" href="/zhaopin/index.php/Admin/Ymanager/hl1?tid=<?php echo ($list["tid"]); ?>" ><i class="icon-edit">查看具体意见</i></a>
							 <a class="btn btn-xs btn-info" href="javascript:f2(<?php echo ($list["numid"]); ?>,<?php echo ($list["pid"]); ?>);" ><i class="icon-edit">退回</i></a></td>
                          </tr><?php endforeach; endif; else: echo "" ;endif; ?>			  
				      </table><!--打算用颜色区分校专家，院管理员，院专家评审人-->
						  </div>
						</div>



               </div>
             </div>
             <div style="text-align: center;color:#000;">
                 			<?php echo ($page); ?>
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