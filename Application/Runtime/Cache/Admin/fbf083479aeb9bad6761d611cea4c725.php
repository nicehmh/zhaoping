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
                	<p class="left"><i class="fa1 icon-home"></i>首页<i class="fa icon-angle-right"></i>评审表</p>
          
                </div>
                <div class="main ">
                <div class="panel panel-default ">
                     <div class="panel-heading">
					      <h3 class="panel-title">
					          <i class="fa  icon-folder-open"></i>
					         申请表				          
					      </h3>
					 </div>
                        
					  <table class="table table-bordered table-striped border table-condensed text-center ">    
                       <div class="row">					  
				     <tr>
						<td class="text-center col-md-2" >姓名</td><td class="col-md-2 " ><?php echo ($list["name"]); ?></td>
						<td class="col-md-1">性别</td><td class="col-md-2 "><?php echo ($list["sex"]); ?></td>
						<td class="col-md-2 ">出生年月</td><td><?php echo ($list["birthday"]); ?></td>
						<td rowspan="5" class="col-md-1"><img src="/Public/upload/<?php echo ($list["photo"]); ?>" class="img-thumbnail img-thumbnail" style="width:150px;height:180px;" /></td>
					</tr>
					<tr>
						<td class="text-center">专业领域</td><td><?php echo ($list["major"]); ?></td>
						<td>职务</td><td><?php echo ($list["job"]); ?></td>				
						<td>工作国家或地区</td><td><?php echo ($list["word_area"]); ?></td>
						
					</tr>
					<tr>
						<td>证件名称</td><td colspan="2"><?php echo ($list["card"]); ?></td>
						<td>证件号码</td><td colspan="2"><?php echo ($list["cardid"]); ?></td>
					</tr>
					<tr>
					    <td class="text-center">电话</td><td colspan="2"><?php echo ($list["phone"]); ?></td>
						<td>E-mail</td><td colspan="2"><?php echo ($list["email"]); ?></td>											
					</tr>
					<tr>
					    <td class="text-center "style="line-height:30px;">通讯地址</td><td  colspan="5"><?php echo ($list["address"]); ?></td>
						
					</tr>	
					<tr><td class="text-center "style="line-height:30px;">从事事业关键词</td><td  colspan="6"></td></tr>																	 
					<tr>
						<td colspan="7"  class="text-center ">教育经历</br>（从本科填起，请勿间断）</td>
					</tr>
					<tr>
					    <td >学位</td>
						<td colspan="2" class="text-center">起止时间</td>
						<td colspan="2" class="text-center">终止时间</td>
						<td  >专业</td>
						<td  >毕业学校</td>
					</tr>
					<?php if(is_array($list2)): $i = 0; $__LIST__ = $list2;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><tr> <td><?php echo ($vo["xuewei"]); ?></td><td colspan="2"><?php echo ($vo["edu_start_time"]); ?></td>
						<td colspan="2"><?php echo ($vo["edu_end_time"]); ?></td><td ><?php echo ($vo["zhuanye"]); ?></td>
						<td ><?php echo ($vo["school"]); ?></td>
						</tr><?php endforeach; endif; else: echo "" ;endif; ?>	 
					<tr>
						<td colspan="7" class="text-center ">工作经历</br>（含博士后经历，请勿间断）</td>
					</tr>
					<tr>
						<td >职务</td>
						<td colspan="2" class="text-center">起止时间</td>
						<td  colspan="2" class="text-center">终止时间</td>
						<td>国家</td>
						<td>工作单位</td>
					</tr>
					<?php if(is_array($list3)): $i = 0; $__LIST__ = $list3;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vol): $mod = ($i % 2 );++$i;?><tr> <td><?php echo ($vol["job"]); ?></td><td colspan="2"><?php echo ($vol["job_start_time"]); ?></td>
						 <td colspan="2"><?php echo ($vol["job_end_time"]); ?></td><td ><?php echo ($vol["nation"]); ?></td>
						 <td ><?php echo ($vol["company"]); ?></td>
						</tr><?php endforeach; endif; else: echo "" ;endif; ?>	 
				    
					<tr >
						<td class="text-center">主要阐诉取得的研究成果及贡献；代表作论著、论文情况、包括著作或论文名称、发表刊物名称、期号、所有著作者姓名(共同第一作者全部标注#号，通讯作者(包括共同通讯者)标注*号)</td>
						<td colspan="6"><?php echo ($list["jianjie"]); ?></td>
					</tr>
					

				
					<tr >
						<td class="text-center">本次论坛报告题目</td>
						<td colspan="6"><?php echo ($list["title"]); ?></td>
					</tr>	
              </div>
				</table>			
</div><br/><br/> 
           <?php if($list['file']==""){}else{ ?>
              <td style="text-align:center;"><a class="btn btn-xs btn-info right right-d2" href="/index.php/Admin/Ymanager/test?filename=<?php echo ($list["file"]); ?>&username=<?php echo ($list["name"]); ?>" ><i class="icon-edit">查看附件</i></a>   
            <?php } ?>
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