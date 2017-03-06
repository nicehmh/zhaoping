<?php if (!defined('THINK_PATH')) exit();?><!doctype html>
<html>
<head>
	<meta charset="utf-8" />
	<title>华中农业大学南湖国际青年科学家论坛</title>
	<link href="/Public/logo.png" rel="SHORTCUT ICON">
	<link rel="stylesheet" type="text/css" href="/Public/Front/css/header.css" />
	<link rel="stylesheet" type="text/css" href="/Public/Front/css/content2.css" />
	<link rel="stylesheet" type="text/css" href="/Public/Front/css/apply.css" />
	<script type="text/javascript" src="/Public/Front/js/jquery-1.8.3.min.js"></script>
	<script type="text/javascript" src="/Public/Front/js/koala.min.1.5.js"></script>
	<script type="text/javascript">
	      //图片上传预览    IE是用了滤镜。
	        function previewImage(file)
	        {
	          var MAXWIDTH  = 90; 
	          var MAXHEIGHT = 90;
	          var div = document.getElementById('preview');
	          if (file.files && file.files[0])
	          {
	              div.innerHTML ='<img id=imghead>';
	              var img = document.getElementById('imghead');
	              img.onload = function(){
	                var rect = clacImgZoomParam(MAXWIDTH, MAXHEIGHT, img.offsetWidth, img.offsetHeight);
	                img.width  =  rect.width;
	                img.height =  rect.height;
	//                 img.style.marginLeft = rect.left+'px';
	                img.style.marginTop = rect.top+'px';
	              }
	              var reader = new FileReader();
	              reader.onload = function(evt){img.src = evt.target.result;}
	              reader.readAsDataURL(file.files[0]);
	          }
	          else //兼容IE
	          {
	            var sFilter='filter:progid:DXImageTransform.Microsoft.AlphaImageLoader(sizingMethod=scale,src="';
	            file.select();
	            var src = document.selection.createRange().text;
	            div.innerHTML = '<img id=imghead>';
	            var img = document.getElementById('imghead');
	            img.filters.item('DXImageTransform.Microsoft.AlphaImageLoader').src = src;
	            var rect = clacImgZoomParam(MAXWIDTH, MAXHEIGHT, img.offsetWidth, img.offsetHeight);
	            status =('rect:'+rect.top+','+rect.left+','+rect.width+','+rect.height);
	            div.innerHTML = "<div id=divhead style='width:"+rect.width+"px;height:"+rect.height+"px;margin-top:"+rect.top+"px;"+sFilter+src+"\"'></div>";
	          }
	        }
	        function clacImgZoomParam( maxWidth, maxHeight, width, height ){
	            var param = {top:0, left:0, width:width, height:height};
	            if( width>maxWidth || height>maxHeight )
	            {
	                rateWidth = width / maxWidth;
	                rateHeight = height / maxHeight;
	                
	                if( rateWidth > rateHeight )
	                {
	                    param.width =  maxWidth;
	                    param.height = Math.round(height / rateWidth);
	                }else
	                {
	                    param.width = Math.round(width / rateHeight);
	                    param.height = maxHeight;
	                }
	            }
	            param.left = Math.round((maxWidth - param.width) / 2);
	            param.top = Math.round((maxHeight - param.height) / 2);
	            return param;
	        }
	</script>     
</head>
<body>
	<!-- head start  -->
	<div id="header">
	<div class="top"></div>
	<div class="logo">
		<a href="http://www.hzau.edu.cn/2014/ch/" target="blanket"><img src="/Public/Front/images/logo_school.png" alt="校徽"></a>
	</div>
	<div class="nav">
		<a href="/index.php/Home/Index/index"><font>首　页</font> <font style="font-size:12px;">HOME</font></a>
		<a href="/index.php/Home/Index/ltjs"><font></font>论坛介绍<font style="font-size:12px;">ABOUT FORUM</font></a>
		<a href="/index.php/Home/Index/xxjs"> <font>学校介绍</font><font style="font-size:12px;">ABOUT HZAU</font> </a>
		<a href="/index.php/Home/Index/rczp"> <font>人才招聘</font><font style="font-size:12px;">TALENT HIRING</font> </a>
		<a href="/index.php/Home/Index/xytx" style="background:url();"><font>校园图像</font><font style="font-size:12px;">CAMPUS LIFE</font></a>
		<!-- <a href="/index.php/Home/Index/clzs">差旅住宿</a>
		<a href="/index.php/Home/Index/lxfs" style="background:url();">联系方式</a> -->
	</div>
</div>

	<!-- head end -->
	<div id="apply">
		<h1 style="margin-top:30px;">华中农业大学南湖国际青年科学家论坛</h1>
		<h1 style="margin-bottom: 10px;">Huazhong Agricultural University Nanhu International Youth Scientist Forum</h1>
		<div class="apply_head">
			<h2>您申请的是(You apply for)： 论坛季(Forum season)【<?php echo ($time["t1"]); ?> ~ <?php echo ($time["t2"]); ?>】<a href="/index.php/Home/Apply/time?change=change" class="change_time">[修改 modify]</a></h2>
			<h2>当前状态 (已标红) Current status(already marked)： <br>
			　　<i id="zxsq" >在线申请Online application</i>--><i id="sqtj">申请提交Application submission</i>--><i id="yjs">已接收（审核中 ）Received（reviewed）</i><i id="ckjg">-->查看结果 View result　<?php echo ($jgcon); ?></i></h2>
			
			<i class="must_right">(*号为必填项) (* is required to be filled)</i>
		</div>

			<form action="/index.php/Home/Apply/record" id="form1" name="form1" method="post" enctype="multipart/form-data">
				<h2>一.基本信息 Basic information</h2>
				  <table>
					<tr>
						<td>姓名 <br> Name<i class="must">*</i></td><td><input type="text" name="username"></td>
						<td>性别 <br> Sex<i class="must">*</i></td><td><input type="radio" name="sex" value="男"> 男Male  <br>　<input type="radio" name="sex" value="女"> 女Female </td>
						<td rowspan="3" class="photo">
							照片Photo
							<label for="img">
							<div id="preview" style="cursor:pointer;">
				   				 <img id="imghead" border=0 src="/Public/<?php echo ($img); ?>" width="90" height="90" />
							</div></label>
							<input type="hidden" name="MAX_FILE_SIZE" value="500000">
							<input type="file" onchange="previewImage(this)" class="file" style="display: none;"  name="filename" id="img"/>
						</td>
					</tr>
					<tr>
						<td>出生年月 <br> Date of Birth<i class="must">*</i></td><td><input type="text" name="birth"></td>
						<td>工作国家或地区 <br>Working country or region<i class="must">*</i></td><td><input type="text" name="area"></td>
					</tr>
					<tr>
						<td>证件名称 <br>Document Name<i class="must">*</i></td>
						<td>
							<select name="card" id="zjmc">
								<option value=""></option>
								<option value="身份证">身份证 ID card　　　</option>
								<option value="护照">护照　passport　　 </option>
								<option value="其他">其他 other　　</option>
							</select>
						</td>
						<td>证件号码 <br>Document Number<i class="must">*</i></td><td><input type="text" name="cardid"></td>
					</tr>
					<tr>
						<td>E-mail<i class="must">*</i></td><td><input type="text" name="email"></td>
						<td>职务 <br>Position<i class="must">*</i></td><td><input type="text" name="job"></td>
						
					</tr>
					<tr>
						<td>电话 <br>Phone<i class="must">*</i></td><td colspan="2"><input type="text" name="tel" style="float:left;margin-left:5px;width: 300px;"></td>
						
						<td>专业领域 <br>Fields of expertise<i class="must">*</i></td>
						<td>
							<select name="major" id="field">
								<option value="">请选择专业领域</option>
								<option value="生命科学(Life Science)">生命科学(Life Science)</option>
								<option value="环境与地球科学(Environmental Geosciences)">环境与地球科学(Environmental Geosciences)</option>
								<option value="化学（Chemistry）">化学（Chemistry）</option>
								<option value="信息科学(Informatics)">信息科学(Informatics)</option>
								<option value="工程与材料科学（Engineering & Material Science）">工程与材料科学（Engineering & Material Science）</option>
								<option value="人文社会科学（Humanities & Social Science）">人文社会科学（Humanities & Social Science）</option>
								<option value="数学（Mathematics）">数学（Mathematics）</option>
								<option value="物理（Physics）">物理（Physics）</option>
							</select>
						</td>
					</tr>
					<tr>
						<td>通讯地址 <br>Mailing address<i class="must">*</i></td><td colspan="6"><input type="text" name="address" style="float:left;margin-left:5px;width:500px;"></td>
					</tr>
				  </table>
				
				
				<h2>二.教育经历<i style="font-size:13px;font-style:normal;">（从本科填起，请勿间断）</i> Education background <i style="font-size:13px;font-style:normal;">(from undergraduate to fill,do not intermittent)</i></h2>
				<h2 style="line-height:30px;margin-top:-8px;"><i class="add" onclick="add_edu();">点击添加行 Click Add Row</i></h2>
				  <table id="edu_table">
				  	
					<tr>
						<td>学位 Degree</td>
						<td>起始时间 Start time<br><i style="font-size:12px;line-height:25px;font-style:normal;">(eg 201606)</i></td>
						<td>终止时间 End time<br><i style="font-size:12px;line-height:25px;font-style:normal;">(eg 201606)</i></td>
						<td>专业 profession</td>
						<td>毕业学校 Graduated school</td>
					</tr>
					<?php if(is_array($list2)): $i = 0; $__LIST__ = $list2;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><tr>
							<td><input type="text" name="xuewei<?php echo ($i); ?>" value="<?php echo ($vo["xuewei"]); ?>"></td>
							<td><input type="text" name="edu_start_time<?php echo ($i); ?>" value="<?php echo ($vo["edu_start_time"]); ?>"></td>
							<td><input type="text" name="edu_end_time<?php echo ($i); ?>" value="<?php echo ($vo["edu_end_time"]); ?>"></td>
							<td><input type="text" name="zhuanye<?php echo ($i); ?>" value="<?php echo ($vo["zhuanye"]); ?>"></td>
							<td><input type="text" name="school<?php echo ($i); ?>" value="<?php echo ($vo["school"]); ?>"></td>
						</tr><?php endforeach; endif; else: echo "" ;endif; ?>	

				  </table>
			
				<h2>三.工作经历<i style="font-size:13px;font-style:normal;">（含博士后经历，请勿间断）</i>Work experience<i style="font-size:13px;font-style:normal;">（including postdoctoral experience,do not break）</i></h2>
				<h2 style="line-height:30px;margin-top:-8px;"><i class="add" onclick="add_work();">点击添加行 Click Add Row</i></h2>
				  <table id="job_table">
					<tr>
						<td>职务 Position</td>
						<td>起始时间 Start time<br><i style="font-size:12px;line-height:25px;font-style:normal;">(eg 201606)</i></td>
						<td>终止时间 End time<br><i style="font-size:12px;line-height:25px;font-style:normal;">(eg 201606)</i></td>
						<td>国家 country</td>
						<td>工作单位 employer</td>
					</tr>
				<?php if(is_array($list3)): $i = 0; $__LIST__ = $list3;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><tr>
							<td><input type="text" name="job<?php echo ($i); ?>" value="<?php echo ($vo["job"]); ?>"></td>
							<td><input type="text" name="job_start_time<?php echo ($i); ?>" value="<?php echo ($vo["job_start_time"]); ?>"></td>
							<td><input type="text" name="job_end_time<?php echo ($i); ?>" value="<?php echo ($vo["job_end_time"]); ?>"></td>
							<td><input type="text" name="nation<?php echo ($i); ?>" value="<?php echo ($vo["nation"]); ?>"></td>
							<td><input type="text" name="company<?php echo ($i); ?>" value="<?php echo ($vo["company"]); ?>"></td>
						</tr><?php endforeach; endif; else: echo "" ;endif; ?>	
				  </table>
				
				<h2>四.主要学术成绩简介 Brief Introduction of Main Academic Achievements</h2>
				  <table>
					<tr class="longtr">
						<td class="title long">
							主要阐述取得的研究成果及贡献；<br>代表作论著、论文情况，包括著作或论文名称、发表刊物名称、期号、所有著作者姓名<br>（共同第一作者全部标注#号，通讯作者（包括共同通讯作者）标注*号，500字以内）
							<br><br>
							Brief introduction about your self and the most recent academic achievement NO more than 500 words
						</td>
						<td class="title"><textarea name="jianjie" id=""><?php echo ($list["jianjie"]); ?></textarea></td>
					</tr>
					</table>
				<h2>五.本次论坛报告题目 The topic that you will report in the forum</h2>
				  <table>
					<tr class="longtr"  style="height:60px;">
						<td class="title"><textarea name="title" id="abc" style="height:60px;"><?php echo ($list["title"]); ?></textarea></td>
					</tr>
				  </table>
				  <br>
				<h2>六.简历上传 Resume upload</h2>
				  <h2><input type="file" name="file" /></h2>


				  <span><input type="submit" class="denglu one" value="提交 Submit"/></span>
			</form>
		
	</div>
	<!-- foot start -->
	<div id="footer">
		<div class="bottom">
			<p>Copyright © 2016 华中农业大学人事处. All Rights Reserved.  技术支持 <a href="http://www.52feidian.com/" target="_blanket">华中农业大学·沸点工作室</a></p>
		</div>
	</div>
	<!-- footer end -->
	<script type="text/javascript">
		$(function(){
			$("#<?php echo ($state); ?>").addClass("state_red");
      		$("input[name='username']").val("<?php echo ($list["name"]); ?>");
      		$("input[name='sex'][value=<?php echo ($list["sex"]); ?>]").attr('checked','true');
      		$("input[name='card']").val("<?php echo ($list["card"]); ?>");
			$("input[name='cardid']").val("<?php echo ($list["cardid"]); ?>");
			$("input[name='birth']").val("<?php echo ($list["birthday"]); ?>");
      		$("input[name='area']").val("<?php echo ($list["word_area"]); ?>");
      		$("input[name='email']").val("<?php echo ($list["email"]); ?>");
      		$("input[name='job']").val("<?php echo ($list["job"]); ?>");
      		$("input[name='tel']").val("<?php echo ($list["phone"]); ?>");
      		$("input[name='address']").val("<?php echo ($list["address"]); ?>");
      		$('#field').val("<?php echo ($list["major"]); ?>");
			$('#zjmc').val("<?php echo ($list["card"]); ?>");
		});
	</script>
	<script type="text/javascript">
		var addedu = <?php echo ($num2); ?>;
		var addjob = <?php echo ($num3); ?>;
	    function add_edu() {
	        $('#edu_table').append(
	        "<tr>"+
	            "<td><input type='text' name='"+"xuewei"+addedu+"'></td>"+
	            "<td><input type='text' name='"+"edu_start_time"+addedu+"'></td>"+
	            "<td><input type='text' name='"+"edu_end_time"+addedu+"'></td>"+
	            "<td><input type='text' name='"+"zhuanye"+addedu+"'></td>"+
	            "<td><input type='text' name='"+"school"+addedu+"'></td>"+
	        "</tr>"
	        );

	        max_time_name = $("#edu_table tr:last-child").children("td:nth-child(1)").children("input").attr("name");
	    	max_edu_name = $("#edu_table tr:last-child").children("td:nth-child(2)").children("input").attr("name");
	        addedu+=1;
	    }
	     function add_work() {
	        $('#job_table').append(
	        "<tr>"+
	            "<td><input type='text' name='"+"job"+addjob+"'></td>"+
	            "<td><input type='text' name='"+"job_start_time"+addjob+"'></td>"+
	            "<td><input type='text' name='"+"job_end_time"+addjob+"'></td>"+
	            "<td><input type='text' name='"+"nation"+addjob+"'></td>"+
	            "<td><input type='text' name='"+"company"+addjob+"'></td>"+
	        "</tr>"
	        );
	        addjob+=1;
	    }
	</script>
</body>
</html>