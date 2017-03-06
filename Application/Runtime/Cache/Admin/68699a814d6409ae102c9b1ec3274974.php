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
function selectAll(){
 var checklist = document.getElementsByName ("selected");
   if(document.getElementById("controlAll").checked)
   {
   for(var i=0;i<checklist.length;i++)
   {
      checklist[i].checked = 1;
   }
 }else{
  for(var j=0;j<checklist.length;j++)
  {
     checklist[j].checked = 0;
  }
 }
}
 function f1(){
        var ex=document.getElementById("selex").value;
	  var ad=document.getElementById("ad").value;
        var objs = document.getElementsByName ("selected");
         allValues='';      
         for(var i =0;i<objs.length;i++){    
              var obj = objs[i];    
              if(obj.type=="checkbox"){  
                   allValues+=obj.value+",";     
              }  
        }    
       // alert(allValues);
       //window.location.href="/index.php/Admin/Ymanager/xzj?all="+allValues+"&pid="+ex;
        var xhr = new XMLHttpRequest();
	xhr.onreadystatechange=function(){
	     if(xhr.readyState==4){
	        alert(xhr.responseText);
		window.location.href="/index.php/Admin/Ymanager/handout";
	     }
	}
	xhr.open('get',"/index.php/Admin/Ymanager/xzj?all="+allValues+"&pid="+ex+"&id="+ad);
	xhr.send(null);
    }
</script>
      	<div class="container-fluid-full">
		<div class="row-fluid">
		    <div id="sidebar-left" class="span2 left">
        <div class="nav-collapse sidebar-nav">
          <ul class="nav nav-tabs nav-stacked main-menu">
               
                
                <li><a href="/index.php/admin/Ymanager/index.html">&nbsp&nbsp&nbsp&nbsp<i class="fa icon-angle-right"></i><span>个人中心</span></a></li>       
                <li><a  href="/index.php/admin/Ymanager/add.html">&nbsp&nbsp&nbsp&nbsp<i class="fa icon-angle-right"></i><span>添加账号</span></a></li>
                  <li><a  href="/index.php/admin/Ymanager/handout.html">&nbsp&nbsp&nbsp&nbsp<i class="fa icon-angle-right"></i><span>材料分发</span></a></li>
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
					         个人中心<b style="font-size:11px;">>>专家已评申请表</b>	
<a class="right right-d2"  style="color:blue;" href="/index.php/Admin/Ymanager/index2"><span style="font-size:14px;color:#333;">转换到>> </span>个人已评申请表</a>								 
					      </h3>
					 </div>
                    
					   <table class="table table-bordered table-striped border">
                                                        <thead class="top">
								  <tr>
								     
								  	<th  style="text-align:center;">申请人</th>
								  	<th style="text-align:center;">专业领域</th>
								 	<th style="text-align:center;">编辑</th>
									<!--<th>评审信息</th>-->
								  </tr>
								   </thead>
								   <tbody>
						           <?php if(is_array($list)): $i = 0; $__LIST__ = $list;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><tr>
							       
								   <td style="text-align:center;"><?php echo ($vo["name"]); ?></td>
								   <td style="text-align:center;"><?php echo ($vo["major"]); ?></td>
								   <td style="text-align:center;"><a class="btn btn-xs btn-info" href="/index.php/admin/Ymanager/look.html?numid=<?php echo ($vo["numid"]); ?>" ><i class="icon-edit">查看</i></a>
								  <!-- <a class="btn btn-xs  btn-success " href=""><i class="icon-trash">转发</i></a>-->
								   <a class="btn btn-xs btn-danger" href="/index.php/Admin/Ymanager/del?numid=<?php echo ($vo["numid"]); ?>"><i class="icon-trash">删除</i></a>
								   	
                                                                 </tr><?php endforeach; endif; else: echo "" ;endif; ?>
							  </tbody>	
		     		  
				  	  </table>			
						  </div>
						                      
											
						</div>
               </div>
             </div>
             <div style="text-align: center;color:#000;">
                 			<?php echo ($page); ?>
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