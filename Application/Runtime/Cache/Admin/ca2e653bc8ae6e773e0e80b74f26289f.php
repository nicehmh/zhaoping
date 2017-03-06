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
               
                
                <li><a href="/index.php/admin/Ymanager/index.html">&nbsp&nbsp&nbsp&nbsp<i class="fa icon-angle-right"></i><span>个人中心</span></a></li>       
                <li><a  href="/index.php/admin/Ymanager/add.html">&nbsp&nbsp&nbsp&nbsp<i class="fa icon-angle-right"></i><span>添加账号</span></a></li>
                  <li><a  href="/index.php/admin/Ymanager/handout.html">&nbsp&nbsp&nbsp&nbsp<i class="fa icon-angle-right"></i><span>材料分发</span></a></li>
          </ul>
        </div>
      </div>

             <div class="right content">
                <div class="right-menu">
                	<p class="left"><i class="fa1 icon-home"></i>首页<i class="fa icon-angle-right"></i>材料分发</p>
                </div>
                <div class="main">
                <div class="panel panel-default">
                     <div class="panel-heading">
					      <h3 class="panel-title">
					          <i class="fa  icon-folder-open"></i>
					         分发申请表		          
					      </h3>				
					 </div>
         
					  <table class="table table-bordered table-striped border">
                                 <thead class="top">
								  <tr>
								    <th style="text-align:center;">选择</th>
								  	<th style="text-align:center;">专业领域</th>
								  	<th style="text-align:center;">申请人</th>
								  	<th style="text-align:center;">编辑</th>
									<th style="text-align:center;">委托人</th>
								  </tr>
								   </thead>
								   <tbody>
								     <?php if(is_array($listl)): $i = 0; $__LIST__ = $listl;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vol): $mod = ($i % 2 );++$i;?><tr>
								   <td style="text-align:center;">
								   <input type="checkbox" value="<?php echo ($vol["numid"]); ?>" name="selected"/>
								   </td>
								   <td style="text-align:center;"><?php echo ($vol["major"]); ?></td>
								   <td><?php echo ($vol["name"]); ?></td>
								    <td style="text-align:center;"><a class="btn btn-xs btn-info" href="/index.php/Admin/Ymanager/hl?numid=<?php echo ($vol["numid"]); ?>&aid=<?php echo ($vol["aid"]); ?>" ><i class="icon-edit">查看</i></a>
								  <!-- <a class="btn btn-xs btn-primary" href="/index.php/Admin/Ymanager/replay?aid=<?php echo ($vol["aid"]); ?>"><i class="icon-comment-alt">回复</i></a>-->
								    <a class="btn btn-xs btn-primary" href="/index.php/Admin/Ymanager/zhangtai?numid=<?php echo ($vol["numid"]); ?>&aid=<?php echo ($vol["aid"]); ?>&kp2=<?php echo ($vol["kp2"]); ?>"><i class="icon-pencil"><?php echo ($vol["kp2"]); ?></i></a></td>
									 <td style="text-align:center;">
								    <div class="dropdown">
                                           <button type="button" class="btn dropdown-toggle" id="dropdownMenu1"  data-toggle="dropdown">
                                                查看
                                                <span class="caret"></span>
                                           </button>
                                        <ul class="dropdown-menu" role="menu" aria-labelledby="dropdownMenu1">
                                            <li role="presentation" class="dropdown-header">专家</li>
											<?php foreach($trp2[$vol['numid']] as $arp){ ?>
                                            <li role="presentation" >
                                                     <a role="menuitem" tabindex="-1" href="javascript:f2(<?php echo ($arp["pid"]); ?>,<?php echo ($vol["numid"]); ?>);"><?php echo ($arp["name"]); ?></a>
                                            </li>
                                           <?php } ?>
                                     
                                        </ul>
                                    </div>
								  
								  
								  </td>
								   </tr><?php endforeach; endif; else: echo "" ;endif; ?>
								 
								   	<tr>					   												  
								   <td colspan="4"><input onclick="selectAll()" type="checkbox"   name="controlAll" style="controlAll" id="controlAll"/>全选</td></tr>


<script>
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
		if(ex=="学院通讯评审"){
		   alert('请您选择一位专家');
		   exit;
		}
        var objs = document.getElementsByName ("selected");
         allValues='';      
         for(var i =0;i<objs.length;i++){    
              var obj = objs[i];    
              if(obj.checked==1){  
                   allValues+=obj.value+",";     
              }  
        }    
		//window.location.href="/index.php/Admin/Ymanager/xzj?all="+allValues+"&pid="+ex;
      var xhr = new XMLHttpRequest();
	xhr.onreadystatechange=function(){
	     if(xhr.readyState==4){
	        alert(xhr.responseText);
		window.location.href="/index.php/Admin/Ymanager/handout";
	     }
	}
	xhr.open('get',"/index.php/Admin/Ymanager/xzj?all="+allValues+"&pid="+ex);
	xhr.send(null);
    }
	function f2(pid,numid){
	    var xhr=new XMLHttpRequest();
		xhr.onreadystatechange=function(){
		    if(xhr.readyState==4){
			   alert(xhr.responseText);
			}
		}
		xhr.open('get','/index.php/Admin/Ymanager/read_state?pid='+pid+'&numid='+numid);
		xhr.send(null);
	}
</script>




						      </tbody>	
						     
						      
						    						  
				  			   </table>			
                         </div>                           
						<input type="button" class="btn btn-info inline personbtn right"  value="确定" onclick="f1()"/>	
						     发送至:
                                        <select class="form-control right right-d2" style="width:232px;" id="selex" >
                                            <option>学院通讯评审</option>
					                     <?php if(is_array($list)): $i = 0; $__LIST__ = $list;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><option value="<?php echo ($vo["pid"]); ?>"><?php echo ($vo["name"]); ?></option><?php endforeach; endif; else: echo "" ;endif; ?>
                                        </select>								
						

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