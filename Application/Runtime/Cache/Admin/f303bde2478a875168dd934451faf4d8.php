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
                	<p class="left"><i class="fa1 icon-home"></i>首页<i class="fa icon-angle-right"></i>申请状态</p>
                	
                </div>
                <div class="main">
                <div class="panel panel-default">
                     <div class="panel-heading">
					      <h3 class="panel-title">
					          <i class="fa  icon-folder-open"></i>
					         申请状态管理		          
					      </h3>				
					 </div>
         
					  <table class="table table-bordered table-striped border">
                           </br>
								 <div class="progress" style="width:700px;">
								   <div class="<?php echo ($list["ys"]); ?>" role="progressbar" 
								      aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" 	
								      style="width: <?php echo ($list["rt"]); ?>%;"  >
								      <span><?php echo ($list["state"]); ?></span>
								   </div>
								</div></br>
								<input type="button" class="btn btn-info btn-sm right right-d2"  value="申请收悉" onclick="f1('d1');" id="d1"/></br>

								<input type="button" class="btn btn-info btn-sm right right-d2" value="通过初审"  onclick="f1('d2');" id="d2"/></br>

								<input type="button" class="btn btn-info btn-sm right right-d2" value="正式邀请"  onclick="f1('d3');" id="d3"/></br>
								
								<input type="button" class="btn btn-info btn-sm right right-d2" data-toggle="modal" 
								   data-target="#myModal" value="发送邀请函"/></br></br></br></br>


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
								               请填写内容
								            </h4>
								         </div>
									 
								         <div class="modal-body">
								           <textarea class="form-control" rows="3" id="ModalLabel" name="ModalLabel"></textarea>
								         </div>
								         <div class="modal-footer">
								            <button type="button" class="btn btn-default" 
								               data-dismiss="modal">关闭
								            </button>
								            <button class="btn btn-primary" onclick="f2()">
								               提交
								            </button>
								         </div>
									
								      </div>
								</div>
								</div>    


				  	 </table>			
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

    <script>
    function f1(num){
		var state=document.getElementById(num).value;
		//alert(state);
		var s1=num.substr(1, 1);
		var s2=<?php echo ($list["num"]); ?>;
		if(s2<s1){
		//window.location.href="/index.php/Admin/Xmanager/restate?state="+state+"&aid=<?php echo ($aid); ?>";
		    var xhr=new XMLHttpRequest();
	        xhr.onreadystatechange=function(){
	         if(xhr.readyState==4){
		      alert(xhr.responseText);
			  window.location.href="/index.php/Admin/Xmanager/replay?aid=<?php echo ($_SESSION['aid']); ?>";
		     }
	        }
	        xhr.open('get',"/index.php/Admin/Xmanager/restate?state="+state+"&aid=<?php echo ($aid); ?>");
	        xhr.send(null);
		}else{
		    alert("您已回复过");
		}
	}
	function f2(){
	   var ModalLabel=document.getElementById('ModalLabel').value;
	   var xhr=new XMLHttpRequest();
	        xhr.onreadystatechange=function(){
	         if(xhr.readyState==4){
		      alert(xhr.responseText);
			  window.location.href="/index.php/Admin/Xmanager/replay?aid=<?php echo ($_SESSION['aid']); ?>";
		     }
	        }
	   xhr.open('get',"/index.php/Admin/Xmanager/send_con?ModalLabel="+ModalLabel);
	   xhr.send(null);
	}
    </script>