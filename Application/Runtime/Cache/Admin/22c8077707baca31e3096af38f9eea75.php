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

		   <script type="text/javascript">
    var numsum;
    function f1(){
          //alert('hello');
          var num1=document.getElementById("num1").value;
          var num2=document.getElementById('num2').value;
          var num3=document.getElementById('num3').value;
        //  var sum=document.getElementById('sum').value;
          var con=document.getElementById('con123').value;
		  con=encodeURIComponent(con);
          var sel=document.getElementById('sel').value;
		  var map="num1="+num1+"&num2="+num2+"&num3="+num3+"&sum="+numsum+"&con="+con+"&sel="+sel+"&listid=<?php echo ($list["numid"]); ?>";
		  var xhr=new XMLHttpRequest();
		  xhr.onreadystatechange=function(){
		       if(xhr.readyState==4){
			       //alert(xhr.responseText);
			      if(xhr.responseText=="1"){
				       alert("提交成功");
				       window.location.href="/zhaopin/index.php/Admin/Xexpert/none";
				  }else{
				       alert("提交失败，请重试");
				       window.location.href="/zhaopin/index.php/Admin/Xexpert/hl";
				  }
			   }
		  }
		  xhr.open("post","/zhaopin/index.php/Admin/Xexpert/record");
		  xhr.setRequestHeader("content-type","application/x-www-form-urlencoded");
		  xhr.send(map);
    }
    function f2(){
          var num1=document.getElementById("num1").value;
          var num2=document.getElementById('num2').value;
          var num3=document.getElementById('num3').value;
		  num1=isnull(num1,20);
		  num2=isnull(num2,50);
		  num3=isnull(num3,30);
		  sum=num1+num2+num3;
		  document.getElementById("sum").innerHTML=sum;
		  numsum=sum;
    }
	function isnull(str,num){
	     if(str){
   		    var strn=parseFloat(str);
			if(strn<=num&&strn>=0){
			    return strn;
			}else{
			    alert("您填写的评分有误")
			}
		 }else{
	       return 0;
      	}
	}
</script>
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
						<td >性别</td><td class="col-md-2"><?php echo ($list["sex"]); ?></td>
						<td >出生年月</td><td><?php echo ($list["birthday"]); ?></td>
						<td rowspan="4" class="col-md-1"><img src="/zhaopin/Public/upload/<?php echo ($list["photo"]); ?>" class="img-thumbnail img-thumbnail"  style="width:120px;height:150px;"/></td>												
					</tr>
					<tr>
						<td class="text-center col-md-2">专业领域</td><td><?php echo ($list["major"]); ?></td>
						<td>职务</td><td><?php echo ($list["job"]); ?></td>				
						<td>工作国家或地区</td><td><?php echo ($list["word_area"]); ?></td>
						
					</tr>
					<tr>
					    <td class="text-center col-md-2">电话</td><td colspan="2"><?php echo ($list["phone"]); ?></td>
						<td>E-mail</td><td colspan="2"><?php echo ($list["email"]); ?></td>											
					</tr>
					<tr>
					    <td class="text-center col-md-2">通讯地址</td><td  colspan="3"><?php echo ($list["address"]); ?></td>
						
					</tr>																		 
					<tr>
						<td rowspan="<?php echo ($num2); ?>" class="text-center col-md-2">教育经历</br>（从本科填起，请勿间断）</td>
						<td colspan="2" class="text-center">起止时间</td>
						<td colspan="4" class="text-center">毕业学校、专业与学位</td>
					</tr>
					<?php if(is_array($list2)): $i = 0; $__LIST__ = $list2;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><tr> <td colspan="2"><?php echo ($vo["time"]); ?></td><td colspan="4"><?php echo ($vo["information"]); ?></td></tr><?php endforeach; endif; else: echo "" ;endif; ?>	 
					<tr>
						<td rowspan="<?php echo ($num3); ?>" class="text-center col-md-2">工作经历</br>（含博士后经历，请勿间断）</td>
						<td colspan="2" class="text-center">起止时间</td>
						<td colspan="4" class="text-center">工作单位及职务</td>
					</tr>
					<?php if(is_array($list3)): $i = 0; $__LIST__ = $list3;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vol): $mod = ($i % 2 );++$i;?><tr> <td colspan="2"><?php echo ($vol["time"]); ?></td><td colspan="4"><?php echo ($vol["information"]); ?></td></tr><?php endforeach; endif; else: echo "" ;endif; ?>	 
					<tr >
						<td class="text-center col-md-2">主要学术成绩简介</td>
						<td colspan="6"><?php echo ($list["jianjie"]); ?></td>
					</tr>
					

				
					<tr >
						<td class="text-center col-md-2">本次论坛报告题目</td>
						<td colspan="6"><?php echo ($list["title"]); ?></td>
					</tr>	
              </div>
				</table>			
</div><br/>
<td style="text-align:center;"><a class="btn btn-xs btn-info" href="/zhaopin/index.php/Admin/Xexpert/test?filename=<?php echo ($list["file"]); ?>&username=<?php echo ($list["name"]); ?>" ><i class="icon-edit">查看附件</i></a> 
<br/><br/>
                <div class="panel panel-default">
                     <div class="panel-heading">
					      <h3 class="panel-title">
					          <i class="fa  icon-folder-open"></i>
					         评审申请表				          
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
								   <td> <input type="text" class="form-control" id="num1" onblur="f2()"></td>
								   </tr>	

								    <tr>
								   <td >2</td>
								   <td>已取得的科学研究（技术创新）成果</td>
								   <td>50</td>
								   <td>考察申报人承担或参与过的重大科研项目，所发表的代表性论文（论著），已取得的科研成果，已申请或已授权的专利，以及申报人在以上工作中发挥的作用；申请人在国际重要学术团体、机构或权威专业刊物任职情况及参加国际学术会议情况</td>
								   <td><input type="text" class="form-control" id="num2" onblur="f2()"></td>
								   </tr>	

								    <tr>
								   <td >3</td>
								   <td>发展潜力及创新能力</td>
								   <td>30</td>
								   <td>考察申报人从事的研究方向是否处于世界科技前沿或属于国内急需紧缺，是否具有原始创新性，是否具有可持续发展的态势。申请人从事科学研究的自然禀赋、科学精神和科学态度及其独立开展原创性科学研究的能力和潜质</td>
								   <td><input type="text" class="form-control" id="num3" onblur="f2()"></td>
								   </tr>	

								   <tr><td colspan="4"style="text-align:center;"><p >得分合计</p></td>
								   	<td id="sum" style="text-align:center;color:#8470ff;font-size:150%;" class="text-info"></td>
								   </tr>

                                   <tr>
                                   <td colspan="2" style="text-align:center;">评价意见</td>
                                   <td colspan="3"><textarea class="form-control" rows="3" id="con123" name="con123"></textarea></td>
                                   </tr>

                                   <tr>
                                   	<td colspan="2" style="text-align:center;">鉴定结论</td>
                                   <td colspan="3"><!--<p style="color:red;">选项</p></td>-->
                                   <label for="name"></label>
                                        <select class="form-control" id="sel">
                                            <option>优先推荐</option>
                                            <option>一般推荐</option>
                                            <option>不推荐</option>
                                        </select>
                                    </td>
                                   <!--<td >优先推荐</td>
                                   <td >一般推荐</td>
                                   <td >不推荐</td>-->
                                   </tr>
						      </tbody>							    
				  			   </table>			
                         </div>
                       
                          <a  class="btn btn-sm btn-info right right-d2 " onclick="f1()"><i class="icon-pencil"></i>提交评审</a>
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