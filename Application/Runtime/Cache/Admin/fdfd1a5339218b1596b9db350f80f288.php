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
		   
            
          
                <div class="main " style="height:650px;">
                <div class="panel panel-default">
                     <div class="panel-heading">
					      <h3 class="panel-title">
					          <i class="fa  icon-folder-open"></i>
					         已评审申请表		
<a class="right right-d2"  style="color:blue;" href="/index.php/Admin/Xexpert/shouye">返回</a>								 
					      </h3>
					 </div>
         
					  <table class="table table-bordered table-striped border">
                                 <thead class="top">
								  <tr>
								  	<th >序号</th>
							 	<th style="text-align:center;">内容</th>
								  	<th>分值</th>
								  	<th style="text-align:center;">评审等级</th>
								  	<th>评分</th>
								  </tr>
								   </thead>
								   <tbody>
								   <tr>
								   <td >1</td>
								   <td>教育科研经历</td>
								   <td>20</td>
								   <td>考察申报人的教育背景和科研工作经历，及该背景和经历对其从事科研工作的影响</td>
								   <td> <?php echo ($list["tr1"]); ?></td>
								   </tr>	

								    <tr>
								   <td >2</td>
								   <td>已取得的科学研究（技术创新）成果</td>
								   <td>50</td>
								   <td>考察申报人承担或参与过的重大科研项目，所发表的代表性论文（论著），已取得的科研成果，已申请或已授权的专利，以及申报人在以上工作中发挥的作用；申请人在国际重要学术团体、机构或权威专业刊物任职情况及参加国际学术会议情况</td>
								   <td><?php echo ($list["tr2"]); ?></td>
								   </tr>	

								    <tr>
								   <td >3</td>
								   <td>发展潜力及创新能力</td>
								   <td>30</td>
								   <td>考察申报人从事的研究方向是否处于世界科技前沿或属于国内急需紧缺，是否具有原始创新性，是否具有可持续发展的态势。申请人从事科学研究的自然禀赋、科学精神和科学态度及其独立开展原创性科学研究的能力和潜质</td>
								   <td><?php echo ($list["tr3"]); ?></td>
								   </tr>	

								   <tr><td colspan="4"style="text-align:center;"><p >得分合计</p></td>
								   	<td id="sum" style="text-align:center;color:#8470ff;font-size:150%;" class="text-info"><?php echo ($list["sum"]); ?></td>
								   </tr>

                                   <tr>
                                   <td colspan="2" style="text-align:center;">评价意见</td>
                                   <td colspan="3"><?php echo ($list["idea"]); ?></td>
                                   </tr>

                                   <tr>
                                   	<td colspan="2" style="text-align:center;">鉴定结论:</td>
                                   <td colspan="3"><!--<p style="color:red;">选项</p></td>-->
                                    <?php echo ($list["assess"]); ?>
                                    </td>
                                   <!--<td >优先推荐</td>
                                   <td >一般推荐</td>
                                   <td >不推荐</td>-->
                                   </tr>
						      </tbody>							    
				  			   </table>			
                         </div>
                       
                     
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