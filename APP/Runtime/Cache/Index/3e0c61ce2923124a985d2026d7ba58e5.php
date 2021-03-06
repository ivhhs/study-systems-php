<?php if (!defined('THINK_PATH')) exit();?>﻿<!DOCTYPE html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
	<title>无标题文档</title>
	<link href="__PUBLIC__/css/bootstrap.css" rel="stylesheet">
    <link href="__PUBLIC__/css/bootstrap-theme.css" rel="stylesheet">
    <script src="__PUBLIC__/js/jquery.js"></script>
	<style>
    
	.container{
		border: #CCC 1px solid;
	}
	.pass{
		color:#99CC00 ;
	}
	.wait{
		color:#FF3366;
	}
    .tk_container{
		width:200px;
		height:200px;
		cursor:pointer;
	}
	.grade{
		color:#ccc;
	}
	
	#close_btn{
		cursor:pointer;
		margin:20px;
	}
	
	#marks{
			position:absolute;
			z-index:5;
			background-color:#ffffff;
			width:100%;
			height:100%;
			display:none;
	}
	
	#hide_container{
		border:#CCC solid 1px; 
		position:absolute; 
		z-index:10; 
		top:35%; 
		background-color:#FFF; 
		display:none; width:95%;
		box-shadow: 2px 2px 5px #CCCCCC; 
		border-radius:5px;
		
	}
	
		.workTitle{
				cursor:pointer;
				font-size:18px;
			}
			#workImg{
				float:left;
				margin-bottom:20px;
				padding:10px;
			}
			#contentContainer{
				float:left;
				width:640px;
				margin-left:60px;
			}
			#cotainer{
				display:block;
				width:1000px;

				
			}
			#workList{
				margin:30px;			
				width:380px;
				clear:both;	
				
				
			}
			#workeType{
				display:none;
			}
			#close{
				float:right;
				margin-right:20px;
				margin-bottom:20px;
				
			}
			#parent{
				width:95%;
				
				
			}
			#imgContainer{
				width:480px;
				float:left;
				
			}
			#FLVPlayer{
				display:none;
			}
			textarea{
				width:650px;
				height:200px;
				float:right;	
			}
			#introTitle{
				padding-top:20px;
			}
			#workContent{
				margin-bottom:30px;
			}
			
			#marks{
				position:absolute;
				z-index:5;
				background-color:#ffffff;
				width:100%;
				height:100%;
				display:none;
			}
			
			.joiner{
				display:none;
			}

	
    </style>
</head>

<body>
<div id="marks"></div>
<nav class="navbar navbar-default">
    <div class="container-fluid">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand text-center" href="#">数字艺术展厅</a>
        </div>

        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
            <ul class="nav navbar-nav navbar-right">
                <li ><a href="#">首页<span class="sr-only">(current)</span></a></li>
                <li ><a href="#">展厅<span class="sr-only">(current)</span></a></li>
                <li class="active" ><a href="index.html">个人中心</a></li>
                <li ><a href="<?php echo U(GROUP_NAME . '/Index/logout');?>">退出<span class="sr-only">(current)</span></a></li>
            </ul>


        </div><!-- /.navbar-collapse -->
    </div><!-- /.container-fluid -->
</nav>
	
    
    <!--主体内容区-->
    <div class="container-fluid">
  		<div class="row" style="inline-block">
        	
        	<div class="col-md-2  col-sm-2"><img src="<?php echo ($teacher["head"]); ?>" width="100" height="100">
            </div>
           			<div class="col-md-10 col-sm-10">
            
            	<div class="row">
                	<div class="col-md-3 col-xs-6">姓名：<?php echo ($teacher["name"]); ?></div>
                </div>
                
                <div class="row">
                	<div class="col-md-3 col-xs-3">学校:成都东软学院</div>
                    <div class="col-md-3 col-xs-3">院系:数字艺术系</div>
                    <div class="col-md-3 col-xs-3">管理专业:数字媒体技术</div>
                    <div class="col-md-3 col-xs-3">通知：0条</div>
                </div>
                
                <div class="row">     
                    <div class="col-md-3 col-xs-3">QQ:<?php echo ($teacher["qq"]); ?></div>
                    <div class="col-md-3 col-xs-5">邮箱:<?php echo ($teacher["mail"]); ?></div>
                </div>
                
                <div class="row">
                	
                    <div class="col-md-6 col-sm-7"></div>
                    <div class="col-md-6 col-sm-5">
                    	<div class="row">
                        	
                        	<div class="col-md-3 col-sm-3">
								<a href="<?php echo U(GROUP_NAME . '/Teacher/information');?>"  class="btn btn-default btn-sm">修改用户信息</a>
							</div>
                            <div class="col-md-2 col-sm-3">
								<a href="<?php echo U(GROUP_NAME . '/Teacher/addClass');?>" class="btn btn-primary btn-sm">开设新课程</a>
							</div>
							
							<div class="col-md-3 col-sm-3">
								<a class="btn btn-primary btn-sm">下载该课程所有作品</a>
							</div>
							
							<div class="col-md-2 col-sm-3">
								<a href="<?php echo U(GROUP_NAME . '/Teacher/createReport');?>" class="btn btn-primary btn-sm">生成成绩报表</a>
							</div>
                            
                        </div>
                    </div>
                </div>
            	
            </div>
        </div>
        
        <div class="row" style="margin-top:20px">
        	<div class="col-md-3 col-sm-3">截止目前您收到的作品：</div>
            <div class="col-md-9 col-sm-9">
				<div class="row">
					<div class="col-md-4 "></div>
					<div class="col-md-3 col-sm-4 ">
						<select>
							<option <?php if($major == 'all'): ?>selected='selected'<?php endif; ?> value="all">请选择课程</option>
							<?php if(is_array($course)): foreach($course as $key=>$value): ?><option <?php if($major == $value['id']): ?>selected='selected'<?php endif; ?> value="<?php echo ($value["id"]); ?>"><?php echo ($value["name"]); ?></option><?php endforeach; endif; ?>
						</select>
					</div>     
				</div>
            </div>
        </div>
        <script>
        $('select').first().change(function () {
        	var val = $(this).children(":selected").val();
        	var href = "<?php echo U(GROUP_NAME . '/Teacher/individual');?>";
        	href = href.substring(0, href.lastIndexOf("."));
        	href = href + '/major/' + val + '.html';
        	window.location.href = href;
        });
        </script>
        
        <div class="row" style="margin-top:50px">
        	<?php if(is_array($product)): $i = 0; $__LIST__ = $product;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$value): $mod = ($i % 2 );++$i;?><div class="col-md-2" medium = '<?php echo ($value["mediumjson"]); ?>' author='<?php echo ($value["authorjson"]); ?>' joiner='<?php echo ($value["joinerjson"]); ?>'>
					<img class="tk_container" src="<?php echo (geturl($value["thumb"])); ?>" width="100%" height="100%"/>
					<div class="text-center workeName"><?php echo ($value["name"]); ?></div>
					<div class="text-center workeAuthor">
							<span>作者:</span>
							<span>
							<?php if(is_array($value['author'])): $i = 0; $__LIST__ = $value['author'];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$f): $mod = ($i % 2 );++$i; echo ($f['name']); ?>&nbsp<?php endforeach; endif; else: echo "" ;endif; ?>
							</span>
					</div>
									
					<div class="joiner">
									
							<?php if(is_array($value['joiner'])): $i = 0; $__LIST__ = $value['joiner'];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$j): $mod = ($i % 2 );++$i; echo ($j['name']); ?>&nbsp<?php endforeach; endif; else: echo "" ;endif; ?>
					</div>
					<input type='hidden' class='verify' value='<?php echo ($value["verify"]); ?>'/>
					<input type='hidden' class='workeId' value='<?php echo ($value["id"]); ?>'/>
					<input type='hidden' class='workeInfo' value='<?php echo ($value["intro"]); ?>'/>
					<input type='hidden' class='teacherComment' value='<?php echo ($value["comment"]); ?>'/>
					<div class="text-center workGrade">
						<span>作品评分:<?php echo ($value["grade"]); ?></span>
						
					</div>
					<?php if($value['verify'] == '1'): ?><div class="text-center">审核状态：<span class="pass">通过审核</span></div>
					<?php else: ?>
						<div class="text-center">审核状态：<span class="wait">未审核</span></div><?php endif; ?>
				</div><?php endforeach; endif; else: echo "" ;endif; ?>
		</div>
		
<!--隐藏弹框区域-->
 <div id="hide_container" class="container-fluid">
    <div class="text-right" id="close_btn">关闭</div>
	<div id="parent">
		<div id="container" >
					<div id="imgContainer">
						<img id="workImg"  src="" width="480">
						<div id="FLVPlayer" >
							<!--通过加载视频页面刷新播放器地址-->
							<iframe width="480" height="360" name="strobeplayer" id="strobeplayer" align="left" marginwidth='0' marginheight='0' hspace='0' vspace='0' border='0' scrolling='yes' frameborder='0' src="<?php echo U(GROUP_NAME . '/Common/playVideo');?>"></iframe>
						</div>
						
						  
						<div id="workList"></div>
				  
					</div>
					<script type="text/javascript">
						swfobject.registerObject("FLVPlayer");
					</script>					
			<div id="contentContainer">
						<h4 id='tkName'>作品名称：1.1米的力量</h4>
										  
						<div class="col-md-12">	
									
									<span id="tk_authotInfo">
										
									</span>
									
							</div>
											   
							<div class="col-md-12">
								 <span>参与人:</span>
								 <span id="tk_joinerInfo"></span>
							</div>
						
						<div class="col-md-12" id="grade">
								教师评分：90分
						</div>

						
						<div class="col-md-12">
						<h5 id="introTitle">作品简介:</h5>
							<p  id='workContent'></p>
						</div>
						
						<div class="col-md-12">
							<h5 id="introTitle">作品点评:</h5>
							<p  id='teacherSay'></p>
						</div>

						<div class="col-md-12">
							
							<form  action="<?php echo U(GROUP_NAME . '/Teacher/gradeWorke');?>" method="post" class="agreeSubmit">
									<input type='hidden' name='workeId' id='indexId'>
									<div class="row" style="margin-bottom:20px;">
										<div class="col-md-3">
											<span>评分：</span>
											<span><input id="inputGrade" type="text" value=""  name="grade" style="width:50px;margin-right:10px;">分</span>
										</div>

										<div class="col-md-8">
											 <span>展厅：</span>
											 <span>
												  <select value="0" class="select" name="selectEx">
													<option value="0" >这里选择要推荐的展厅</option>
													<?php if(is_array($exhibition)): foreach($exhibition as $key=>$info): ?><option value='<?php echo ($info["id"]); ?>'name="selectEx"><?php echo ($info["name"]); ?></option><?php endforeach; endif; ?>
												 </select>
											 </span>
											<span><input type="radio"  value="1" name="submitEX" /></span>
											<span>不推荐</span>
											<input type="radio" value="2"  name="submitEX" />
											<span>推荐</span>
										</div>
									</div>
									
									<div class="col-md-12" style="margin-bottom:50px;">
											<textarea id="commentText" name='comment' value=""></textarea>
									</div>
									<button type="submit" class="btn btn-primary  col-md-4 agree">通过审核</button>
								</form>
											
									<div class="row" style="margin-bottom:50px; margin-top:50px;">
										<button type="button" class="btn btn-default col-md-4 editer" >修改审核信息</button>		
									</div> 	
				
							
						</div>

					
						
						
						
						
						
		
			</div>
		</div>       	  
    </div>        
</div>
   
        
</div>
	
    
    <script>
    	document.getElementsByName('submitEX')[0].checked="checked";
		$(function(){
			$('#close_btn').click(function(){
				
				$('#hide_container').animate({
						 opacity: 'toggle',
						 
						 
					},'slow'
				);
				$('#marks').css({'display':'none'});
				
			});
			
			//作品文件点击事件
			$('.tk_container').click(function(){			
				var medium = eval($(this).parent().attr('medium'));
				//alert(medium)
				//初始化作品名称
				var workeNameStr=$(this).siblings('.workeName').html();
				$('#tkName').html(workeNameStr);
				$('#deleteWorkeName').val(workeNameStr);
				//获取作品ID
				var numId=$(this).siblings('.workeId').val();
				$('#indexId').val(numId);
				//获取作品简介
				var workeInfo=$(this).siblings('.workeInfo').val();
				$('#workContent').html(workeInfo);
				//获取作品分数
				var grade=$(this).siblings('.workGrade').html();
				$('#grade').html(grade);
				var gradeInput=$('#grade').text();
				gradeInput=gradeInput.substring(gradeInput.indexOf(":")+1);
				$('#inputGrade').val(gradeInput);
				//$('grade').val(gradeInput);
				//获取教师点评
				var comment=$(this).siblings('.teacherComment').val();
				$('#teacherSay').html(comment);
				var commentInput=$('#teacherSay').text();
				if(commentInput.length==0){
					$('#commentText').val(" ");
				}
				
				
				//获取作品参与人
				var joinerName=$(this).siblings('.joiner').text();
				$('#tk_joinerInfo').html(joinerName);
				//获取作品作者
				var authorName=$(this).siblings('.workeAuthor').text();
				$('#tk_authotInfo').html(authorName);
				//判断作品审核状态，为1通过时取消审核按钮
				var verifyState=$(this).siblings('.verify').val();
				//alert(verifyState);
				if(verifyState==1){
					$('.agreeSubmit').css({display:"none"});
					$('.agree').css({display:"none"});
					$('.editer').css({display:"block"});
					
				}else{
					$('.agreeSubmit').css({display:"block"});
					$('.agree').css({display:"block"});
					$('.editer').css({display:"none"});
					
				}
				
				
				//修改审核信息
				$('.editer').click(function(){
					$(this).css({display:"none"});
					$('.agreeSubmit').css({display:"block"});
					$('.agree').css({display:"block"});
					
				//获取作品分数
				var grade=$('#grade').text();
				grade=String(grade);
				grade=grade.substring(grade.indexOf(":")+1);
				$('grade').val(grade);
				
				$('#inputGrade').val(grade);
				//获取教师点评
				var comment=$('#teacherSay').text();
				//alert(comment);
				$('#commentText').val(comment);
				});
				
				
				//初始化遮罩层尺寸
				var marksHeightVal=$(document).height();
				$('#marks').height(marksHeightVal).css({"opacity":0.8,"display":"block"});
				
				init(medium);
				//资源文件点击事件
				$('.workTitle').click(function(){
							var workUrl=$(this).children(".ImgUrl").val();
							var workType=$(this).children('#workeType').html();
							//alert(workType);
							if(workType=="2"){
								$('#FLVPlayer').css({"display":"block"});
								var videoURL = $('#strobeplayer').attr('src');
								videoURL = videoURL + '?' + workUrl;
								$('#strobeplayer').attr('src', videoURL);
								$('#workImg').hide();
							}
							else{
								$('#FLVPlayer').css({"display":"none"});
								$('#workImg').show();
								$('#workImg').attr('src',workUrl);
							}
							//alert(document.getElementById("strobeplayer").document);
							//alert(workUrl.val());
							
				});
				
				$('select').change(function(){
						var numId=$(this).val();
						//alert($(this).name);
						$('select').attr('value',numId);
						//$('select').val(numId);
						//alert($('select').val());
				});
				
				//初始化遮罩层尺寸
				var marksHeightVal=$(document).height();
				$('#marks').height(marksHeightVal).css({"opacity":0.8,"display":"block"});
				//隐藏框相对于作品位移
				var topPostion=$(this).offset();
				topPostion=topPostion.top+20;
				//alert(topPostion);
				var X_Potion=($(document).width()-$('#hide_container').width())/2;
				//alert(X_Potion);
				
				$('#hide_container').animate({
						 opacity: 'toggle',
						 diplay:'block',
					},'slow'
				)
				.css({'display':'block','top':topPostion,'left':X_Potion-17});
				
				$('#title').html('titleName');
			});
			
		
			function init(worke){
					//JOSN数据
					//test.html页面为播放器地址
					/**
				var worke=[
					{"name":"电影剧照1","url":"Img/电影剧照1.JPG","type":"1"},
					{"name":"电影剧照2","url":"Img/电影剧照2.JPG","type":"1"},
					{"name":"电影剧照3","url":"Img/电影剧照3.JPG","type":"1"},
					{"name":"电影剧照4","url":"Img/电影剧照4.JPG","type":"1"},
					{"name":"1.1米的力量","url":"/playViedo.html?test&","type":"2"},
					{"name":"展厅介绍","url":"http://pj.com/index.php/Index/Common/playVideo.html?/one2&","type":"2"}
				];
					**/
				$('#workImg').attr("src",worke[0].url);
				$('#workList').html("");
				for(var i=0;i<worke.length;i++){
					var workType=worke[i].type;
					//alert(workType);
					var workName=worke[i].name;
					var workUrl=worke[i].url;
					$('#workList').append('<div class="workTitle"><h5>'+workName+'</h5><input class="ImgUrl" type=hidden value="'+workUrl+'" />'+'<p id=workeType>'+workType+'</p></div>');
					
				}
			}
			
			
			

			
});
			

			
    
    </script>       
            
</body>
</html>