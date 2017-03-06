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
	<script type="text/javascript" src="/zhaopin/Public/js/jquery.1.7.2.min.js"></script>
	<body>
	    <div class="nav-inner">
           <div class="nav-left">
           	   Admin System
           </div>

           <ul class="nav nav-right right">
                <li><a href="/zhaopin/index.php/index.php/admin/Login/index"><span class="glyphicon glyphicon-off"></span>&nbsp;&nbsp;退出</a></li>
           </ul>
        </div>
      	<div class="container-fluid-full">
		<div class="row-fluid">
		    <div id="sidebar-left" class="span2 left">
        <div class="nav-collapse sidebar-nav">
          <ul class="nav nav-tabs nav-stacked main-menu">
               
                
                <li><a href="/zhaopin/index.php/admin/Ymanager/application.html">&nbsp&nbsp&nbsp&nbsp<i class="fa icon-angle-right"></i><span>申请表信息</span></a></li>       
                <li><a  href="/zhaopin/index.php/admin/Ymanager/expert.html">&nbsp&nbsp&nbsp&nbsp<i class="fa icon-angle-right"></i><span>专家信息</span></a></li>
                
          </ul>
        </div>
      </div>

             <div class="right content">
                <div class="right-menu">
                	<p class="left"><i class="fa1 icon-home"></i>首页<i class="fa icon-angle-right"></i>申请表</p>
                	
                </div>
                <div class="main">
                <div class="panel panel-default">
                     <div class="panel-heading">
					      <h3 class="panel-title">
					          <i class="fa  icon-folder-open"></i>
					         申请表信息		          
					      </h3>				
					 </div>
         
					  <table class="table table-bordered table-striped border">
                                 <thead class="top">
								  <tr>
								  	<th>申请人</th>
								  	<th>专业领域</th>
								  	<th>编辑</th>
									
								  </tr>
								   </thead>
								<?php if(is_array($list)): $i = 0; $__LIST__ = $list;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><tr>
								   <td><?php echo ($vo["name"]); ?></td>
								   <td><?php echo ($vo["major"]); ?></td>
								   <td><a class="btn btn-xs btn-info" href="/zhaopin/index.php/Admin/Ymanager/hl1?numid=<?php echo ($vo["numid"]); ?>" ><i class="icon-edit">查看</i></a>
								  <!-- <a class="btn btn-xs  btn-success " href=""><i class="icon-trash">转发</i></a>-->
								   <a class="btn btn-xs btn-danger" href="/zhaopin/index.php/Admin/Ymanager/del?numid=<?php echo ($vo["numid"]); ?>"><i class="icon-trash">删除</i></a>
								   <a class="btn btn-xs btn-primary" href="/zhaopin/index.php/Admin/Ymanager/replay"><i class="icon-comment-alt">回复</i></a></td>	
                                                                 </tr><?php endforeach; endif; else: echo "" ;endif; ?>								 
								   <!--        Bootstrap 下拉菜单  -->
						<!--		   <div class="dropdown">
                                         <button type="button" class="btn dropdown-toggle" id="dropdownMenu1"  data-toggle="dropdown">
                                          已有n人评审
                                         <span class="caret"></span>
                                         </button>
                                       <ul class="dropdown-menu" role="menu" aria-labelledby="dropdownMenu1">
                                      <li role="presentation" class="dropdown-header">优先推荐</li>
                                            <li role="presentation" >
                                                <a role="menuitem" tabindex="-1" href="#">Java</a>
                                            </li>
                                
                                     <li role="presentation" class="divider"></li>
                                    <li role="presentation" class="dropdown-header">一般推荐</li>
									<li role="presentation">
                                      <a role="menuitem" tabindex="-1" href="#">数据挖掘</a>
                                    </li>
									 <li role="presentation" class="divider"></li>
                                    <li role="presentation" class="dropdown-header">不推荐</li>
									<li role="presentation">
									  <a role="menuitem" tabindex="-1" href="#">
                                        数据通信/网络
                                     </a>
									  </li>
                                      </ul>
                                      </div>


								   
								   </td>-->
							  </tbody>							    
				  			   </table>			
                         </div>                           
						
					<!--	   <input type="text" class="form-control inline persontext firsttext right " placeholder="请输入添加账号数目" style="width:180px;"/>-->
               </div>
             </div>      
		</div>
		</div>
		<script src="/zhaopin/Public/Back/js/jquery.min.js"></script>
<script src="/zhaopin/Public/Back/js/bootstrap.min.js"></script>
<script src="/zhaopin/Public/Back/js/admin.js"></script>

<div class="clearfix"></div>
<div class="footer">
	<p><i claccccccss="fa ixcon-twitter"></i>© 2015 华中农业大学&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp技术支持：<a href="http://www.52feidian.com" target="_blanket"><i class="icon-leaf">&nbsp&nbsp沸点工作室</i></a>
</div>
</body>
</html>