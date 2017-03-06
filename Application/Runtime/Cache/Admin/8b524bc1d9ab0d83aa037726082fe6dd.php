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
  function f1(){
     var con1=document.getElementById('mtk1').value;
	  var con2=document.getElementById('mtk2').value;
	   var con3=document.getElementById('mtk3').value;
	    var con4=document.getElementById('mtk4').value;
    // window.location.href="/index.php/Admin/Xmanager/rcmanager?user="+con1+"&password="+con2+"&name="+con3+"&college="+con4;exit;
      var xhr=new XMLHttpRequest();
	  xhr.onreadystatechange=function(){
	      if(xhr.readyState==4){
		      alert(xhr.responseText);
			  window.location.href="/index.php/Admin/Xmanager/add2";
		  }
	  }
	  xhr.open('get',"/index.php/Admin/Xmanager/rcmanager?user="+con1+"&password="+con2+"&name="+con3+"&college="+con4);
	  xhr.send(null);
  }
  function f2(pid){
      var xhr=new XMLHttpRequest();
	  xhr.onreadystatechange=function(){
	      if(xhr.readyState==4){
		      alert(xhr.responseText);
			  window.location.href="/index.php/Admin/Xmanager/add2";
		  }
	  }
	  xhr.open('get',"/index.php/Admin/Xmanager/delmanager?id="+pid);
	  xhr.send(null);
  }
</script>
      	<div class="container-fluid-full">
		<div class="row-fluid">
		         <div id="sidebar-left" class="span2 left">
        <div class="nav-collapse sidebar-nav">
          <ul class="nav nav-tabs nav-stacked main-menu">                      
                <li><a  href="/index.php/admin/Xmanager/index.html"><i class="fa icon-angle-right"></i><span>个人中心</span></a></li>
                <li><a href="/index.php/admin/Xmanager/add.html"><i class="fa icon-angle-right"></i><span>添加账号</span></a></li>
                <li><a  href="/index.php/admin/Xmanager/handout.html"><i class="fa icon-angle-right"></i><span>材料分发</span></a></li>       
                

         </ul>
        </div>
      </div>

             <div class="right content">
                <div class="right-menu">
                	<p class="left"><i class="fa1 icon-home"></i>首页<i class="fa icon-angle-right"></i>添加账号</p>
                	
                </div>
                <div class="main">
                <div class="panel panel-default">
                     <div class="panel-heading">
					      <h3 class="panel-title">
					          <i class="fa  icon-folder-open"></i>
					         添加院管理员账号	
					         <a class="right right-d2"  style="color:blue;" href="/index.php/admin/Xmanager/add.html"><span style="font-size:14px;color:#333;">转换到>> </span>校通讯评审账号</a>				          
					      </h3>				
					 </div>
         
					  <table class="table table-bordered table-striped border">
                                 <thead class="top">
								  <tr>
								  	<th style="text-align:center;">姓名</th>
								  	<th style="text-align:center;">学院</th>
								  	<th style="text-align:center;">编辑</th>
								  </tr>
								   </thead>
								   <tbody>
								   <?php if(is_array($list)): $i = 0; $__LIST__ = $list;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><tr>
								   <td style="text-align:center;"><?php echo ($vo["name"]); ?></td>
								   <td style="text-align:center;"><?php echo ($vo["college"]); ?></td>
								   <td style="text-align:center;"><a class="btn btn-xs btn-danger" href="javascript:f2(<?php echo ($vo["id"]); ?>);"><i class="icon-trash">删除</i></a>
								      
								   </td>
	
								   </tr><?php endforeach; endif; else: echo "" ;endif; ?>								   
						      </tbody>							    
				  			   </table>			
                         </div>                           
						   <input type="button" class="btn btn-info inline personbtn right right-d2" data-toggle="modal" 
								   data-target="#myModal" value="添加"/>
						 

							
								<!-- 模态框（Modal） -->
								<div class="modal fade" id="myModal" tabindex="-1" role="dialog" 
								   aria-labelledby="myModalLabel" aria-hidden="true">
								   <div class="modal-dialog">
								      <div class="modal-content">
								         <div class="modal-header">
								            <button type="button" class="close" 
								               data-dismiss="modal" aria-hidden="true">
								                  &times;
								            </button>
								            <h4 class="modal-title" id="myModalLabel">
								               请添加账号
								            </h4>
								         </div>
								         <div class="modal-body">
								            <input name="person" id="mtk1" class="form-control" placeholder="请输入教职工工号，即为登录账号"  type="text"/><br/>
                                             <input name="position" id="mtk2" class="form-control" placeholder="教职工生日，即为登录密码" type="text"/><br/>
											<input name="position" id="mtk3" class="form-control" placeholder="姓名" type="text"/><br/>
											 <input name="position" id="mtk4" class="form-control" placeholder="学院" type="text"/><br/>
								         </div>
								         <div class="modal-footer">
								            <button type="button" class="btn btn-default" 
								               data-dismiss="modal">关闭
								            </button>
								            <button type="button" class="btn btn-primary" onclick="f1()">
								               提交
								            </button>
								         </div>
								      </div><!-- /.modal-content 姓名、学院、专业方向、可评学科1、可评学科2、可评学科3-->
								</div><!-- /.modal -->
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