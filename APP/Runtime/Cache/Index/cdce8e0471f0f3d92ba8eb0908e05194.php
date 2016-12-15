<?php if (!defined('THINK_PATH')) exit();?>﻿<!DOCTYPE html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
	<title>无标题文档</title>
    
	<script src="__PUBLIC__/js/jquery.js" type="text/javascript"></script>
    <script src="__PUBLIC__/js/uploadPreview.js" type="text/javascript"></script>
	<script src="__PUBLIC__/js/jquery.Jcrop.js" type="text/javascript"></script>
	<script src="__PUBLIC__/js/vScrollPane.js"></script>
    <script type="text/javascript">
        
		
	window.onload=function(){
			 new uploadPreview({ UpBtn: "up_img", DivShow: "imgdiv", ImgShow: "target" });
		
			
	 }
		
		
		
		$(function($) {
			
			//参与人，作品作者弹框
			$('#Author_Btn').click(function(){
				$(".xcConfirm").css("visibility","visible");
					var checkedBtn=$('dd input:checked');
					if(checkedBtn.length>0){
						checkedBtn.removeAttr('checked');
					}
					$('#add_Btn').bind('click',function(){	
					id='workAuthor';
					add_infor(id);
					
					return false;
					});	
				

			});
	
			$('#people_Btn').click(function(){
				var checkedBtn=$('dd input:checked');
				if(checkedBtn.length>0){
						checkedBtn.removeAttr('checked');
				}
				$(".xcConfirm").css("visibility","visible");
				$('#add_Btn').bind('click',function(){	
					id='cy_people';
					add_infor(id);
					return false; 
				});
				
			});
				
			function add_infor(inputId){
						
				var checkBox_two=$('dd input:checked');
				
				var people=$(checkBox_two[0]).next().text();
				var value = checkBox_two[0].value;
				for(var id_index=1;id_index<checkBox_two.length;id_index++){
					people+='|'+$(checkBox_two[id_index]).next().text();
					value+='|'+checkBox_two[id_index].value;
				}
				
				
				var input_container=document.getElementById(inputId);
				$('#hidden_input_'+id).val(value);
				input_container.value=people;
				$(".xcConfirm").css("visibility","hidden");
				$("#add_Btn").unbind();
			}	
			
			
			$('.cancel').click(function(){
				$(".xcConfirm").css("visibility","hidden");
			});
			
			
			
			var js = <?php echo json_encode($student);?>;
			/**
			var js=[
{"major":"动画11201","people":[{"name":"张三"},{"name":"李四"},{"name":"王五"},{"name":"赵六"},{"name":"张天"}]},
{"major":"动画11202","people":[{"name":"张三"}],"two":[{"name":"李四"}]},
{"major":"动画11203","people":[{"name":"张三"}],"two":[{"name":"李四"}]},

{"major":"影视制作11201","people":[{"name":"张三"},{"name":"李四"},{"name":"王五"},{"name":"赵六"},{"name":"张天"}]},
{"major":"影视制作11202","people":[{"name":"张三"}],"two":[{"name":"李四"}]},
{"major":"影视制作11203","people":[{"name":"张三"}],"two":[{"name":"李四"}]},

{"major":"数字媒体11201","people":[{"name":"张三"},{"name":"李四"},{"name":"王五"},{"name":"赵六"},{"name":"张天"}]},
{"major":"数字媒体11202","people":[{"name":"张三"}],"two":[{"name":"李四"}]},
{"major":"数字媒体11203","people":[{"name":"张三"}],"two":[{"name":"李四"}]},

{"major":"产品11201","people":[{"name":"张三"},{"name":"李四"},{"name":"王五"},{"name":"赵六"},{"name":"张天"}]},
{"major":"产品11202","people":[{"name":"张三"}],"two":[{"name":"李四"}]},
{"major":"产品11203","people":[{"name":"张三"}],"two":[{"name":"李四"}]}

];
**/
		//---添加学生
		for(var i=0;i<js.length;i++){									
			var dl=document.createElement('dl');
			$(".list").append(dl);
			var dt=document.createElement('dt');
							
			dl.setAttribute("id","dl"+i);
			dt.setAttribute("id","major"+i);
			dt.setAttribute("class","major");
			dt.innerHTML=js[i].major;				
			var dl=document.getElementById("dl"+i)
			dl.appendChild(dt);
							
			for(var j=0;j<js[i].people.length;j++){
							
			var dd=document.createElement('dd');
				//dd.setAttribute("class","people");
				var par=document.getElementById("major"+i);
				dd.innerHTML='<input type="checkbox" name="input_checked"   value='+js[i].people[j].id+'>'+'<span>'+js[i].people[j].name+'</span>';						
				dl.appendChild(dd);						
			}
			$('dt').siblings().hide();
		}
		//添加学生结束
		
		
		
		//专业信息展开收缩
		$('dt').click(function (){
			$(this).siblings().animate({					
			opacity: 'toggle'
			},"show");
		});
					

					
					
				//滑动条
				var container=$(".txtBox"),
			 	mover=container.find(".list");
				dragbar=(container.find(".hScrollPane_dragbar").length==0)?container.append('<div class="hScrollPane_dragbar"><div class="hScrollPane_draghandle"></div></div> ').find(".hScrollPane_dragbar"):container.find(".hScrollPane_dragbar"),
				handle=container.find(".hScrollPane_draghandle");
				dragbar.css("height",container.height()-20);
				//alert(container.height());
				
				mover.stop().css("top","0px");
				container.unbind();
				handle.unbind();
				dragbar.unbind();
				
				
				//限定最大移动距离
				var maxlen=parseInt(dragbar.height())-parseInt(handle.outerHeight());
				
				
				//滑动块绑定移动事件
				handle.bind("mousedown",function(e){
					
					//alert(1111);
				var y=e.pageY,
						c=mover.height(),
						h=200,
						//获取滑块起点位置
				stratY=parseInt(handle.css("top"));
				$(document).bind("mousemove",function(e){
				var top=stratY+e.pageY-y<0?0:(stratY+e.pageY-y>=maxlen?maxlen:stratY+e.pageY-y);	
				
					//alert('118');
					//alert(top);
					//更改滑动条到相应位置
					handle.stop().css({top:top});
					//alert(top/maxlen*(c-h));
					
					mover.css({top:-top/maxlen*(c-h)});
						//阻止事件冒泡
						return false;
					});
					
				});
				$(document).bind("mouseup",function(e){
					
					$(this).unbind("mousemove");
				
				});
				
			

			
			
			
			//截图上传代码
			 $('#target').bind("mouseenter",function(){
				var api = $.Jcrop('#target',{
				aspectRatio:1,
					//限定剪裁尺寸
				onSelect:updateCoords
			});
			
			//剪裁上传区域
			function updateCoords(I){
			  $('#x').val(I.x);
			  $('#y').val(I.y);
			  $('#w').val(I.w);
			  $('#h').val(I.h);
			};
			
			function checkCoords(){
			  if (parseInt($('#w').val())) {
				return true;
			  };
			  alert('请先选择要裁剪的区域后，再提交。');
			  return false;
			};
			
			//alert(api);
			$('#up_img').bind("click",function(){
					api.destroy();
					new uploadPreview({ UpBtn: "up_img", DivShow: "imgdiv", ImgShow: "target" });
					
			});
			
		});
		
			
			$('#close_btn').click(function(){
				
				$('#hide_container').animate({
						 opacity: 'toggle',				 
					},'slow'
				);
				
			});
			
			$('.submitImgBtn').click(function(){
				alert('恭喜您，截图成功');
			})

			$('#photo').bind("click",function(){
				$('#hide_container').animate({
						 opacity: 'toggle',
						 diplay:'block',
					},'slow'
				)
				.css({'top':"550px",});
						
			});

			
				$("#fileBtn").click(function(){
						
						$('#fileUp').show(1000);
						$('#urlUp').hide(1000);
						
				});
		
				$("#urlBtn").click(function(){
						$('#urlUp').css('display','block');
						$('#fileUp').hide(1000);
				});
				
				$("#soundfile").click(function(){
						$('#urlSound').css('display','none');
						$('#fileSound').show(1000);
				});
				
				$("#soundurl").click(function(){
						$('#urlSound').css('display','block');
						$('#fileSound').hide(1000);
				});
		
			
		
});
		
		
        
    </script>

    <link rel="stylesheet" type="text/css" href="__PUBLIC__/Css/ImgCropper.css"/>
    <link href="__PUBLIC__/css/bootstrap.css" rel="stylesheet">
    <link href="__PUBLIC__/css/bootstrap-theme.css" rel="stylesheet">
    <link href="__PUBLIC__/css/jquery.Jcrop.css" rel="stylesheet">
    <style>
	.upload_image{max-height:250px; padding:5px;}
	.upload_drag_area{display:inline-block; width:50%; padding:4em 0; margin-left:.5em; border:1px dashed #ddd;  color:#999; text-align:center; vertical-align:middle;}
	
	
	.xcConfirm{visibility:hidden;}
	.xcConfirm .xc_layer{position: fixed; top: 0; left: 0; width: 100%; height: 100%; background-color: #666666; opacity: 0.5; z-index:10;}
	
	.xcConfirm .popBox{position: absolute; left: 40%; top: 5%; background-color: #ffffff; z-index: 11; width:284px; height: 85%; border-radius: 5px; font-weight: bold; color: #535e66;}
	
	.xcConfirm .popBox .ttBox{height: 40px; line-height: 30px; padding: 10px 30px; border-bottom: solid 1px #eef0f1;}
	
	.xcConfirm .popBox .ttBox .tt{font-size: 16px; display: block; float: left; height: 20px; position: relative;}
	
	.xcConfirm .popBox .txtBox{ overflow:hidden; padding: 0px 30px; height:78%; width:80%;position:relative; float:left; }
	.xcConfirm .popBox .txtBox .list{
		width:80%;
		top:0px;
		height:6000px;
		display:block;
		position: absolute;
	}
	
	.xcConfirm .popBox .txtBox	.hScrollPane_dragbar{height:100%; border-left:#ccc 1px solid;   width: 6px; position:absolute; top:15px; right:2%;}
	.hScrollPane_draghandle{position:absolute; background:url(__PUBLIC__/Images/gunbar.png) no-repeat; height:180px; width:10px; left:-2px; top:0px;}
		
	.xcConfirm .popBox .btnArea{border-top: solid 1px #eef0f1; position:absolute; bottom:0px; background-color:#FFF; display:block;}
	.xcConfirm .popBox .sgBtn{display: block; cursor: pointer; float: left; width: 95px; height: 35px; line-height: 35px; text-align: center; color: #FFFFFF; border-radius: 5px; margin:7px 0px 10px 30px;}

	dd{
		position:relative;
		padding:2px;
		font-size:12px;
		cursor:default;
		color:#999999;
		}
	dt{
		background:#6699FF;
		cursor:pointer;
		color:#ffffff;
		opacity:0.7;
		padding:5px;
		
		
		}
	.redText{
		color:#FF0066;
		font-size:16px;
	}	

	#hide_container{
		border:#CCC solid 1px;
		position:absolute; 
		z-index:10; 
		top:35%; 
		background-color:#FFF;  
		padding:30px;
		padding-top:0px; 
		width:1000px;
		display:none;
		box-shadow: 2px 2px 5px #CCCCCC; 
		border-radius:5px;

		
	}
	#help{
		font-size:12px;
		color:#FF0066;
	}
	
</style>
    
</head>

<body>

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

<form class="form-horizontal center-block" action="<?php echo U(GROUP_NAME . '/Student/addProductService');?>" enctype="multipart/form-data" method="post" name="course" onsubmit="return checkCoords();">
<div class="container-fluid" >
  <h3 class="text-center">提交作品</h3>
    
        <div class="form-group">
            <label  class="col-sm-4 control-label "><span class="redText">*</span>选择课程:</label>
            <div class="col-sm-4">
    			<select name="course" class="form-control  text-center" >
    				<option major="" majorname="未选择" teacher="" teachername="未选择" type="" typename="未选择" value="-1">请选择课程</option>
    				<?php if(is_array($course)): foreach($course as $key=>$vo): ?><option major="<?php echo ($vo["major"]); ?>" majorname="<?php echo ($vo["majorname"]); ?>" teacher="<?php echo ($vo["teacher"]); ?>" teachername="<?php echo ($vo["teachername"]); ?>" type="<?php echo ($vo["type"]); ?>" typename="<?php echo ($vo["typename"]); ?>" value="<?php echo ($vo["id"]); ?>"><?php echo ($vo["name"]); ?></option><?php endforeach; endif; ?>
    			</select>
            </div>
        </div>

        <div class="form-group">
            <label  class="col-sm-4 control-label ">任课老师:</label>
            <div class="col-sm-4">
                <input name="teacher" type="text" class="form-control text-center " value="未选择" disabled>
                <input name="teacher" type="hidden" />
            </div>
        </div>

        <div class="form-group">
            <label  class="col-sm-4 control-label ">作品类型:</label>
            <div class="col-sm-4">
                <input type="text" id="workType" name="workType" class="form-control text-center " value="未选择" disabled>
                <input type="hidden" name="workType" />
            </div>
        </div>

       
		
		<input id="hiddenInput" type="hidden" value="">

        <div class="form-group">
            <label  class="col-sm-4 control-label ">所属专业:</label>
            <div class="col-sm-4">
                <input name="major" type="text" class="form-control text-center " value="未选择" disabled>
            </div>
        </div>
		
		<div class="form-group">
            <label  class="col-sm-4 control-label ">作品作者:</label>
            <div class="col-sm-4">
                <input id="workAuthor" type="text" class="form-control text-center"  value="默认为登陆用户"  disabled >
                <input id="hidden_input_workAuthor" name="author" type="hidden" value="">
                <span id="Author_Btn">加入</span>
            </div>
        </div>


      	 <div class="form-group">
            <label  class="col-sm-4 control-label "><span class="redText">*</span>作品参与人:</label>
            <div class="col-sm-4">
                <input id="cy_people" type="text" class="form-control text-center">
                <input id="hidden_input_cy_people" name="joiner" type="hidden" value="">
                <span id="people_Btn">加入</span>
            </div>
        </div>
		
		<div class="form-group">
            <label  class="col-sm-4 control-label "><span class="redText">*</span>作品名称:</label>
            <div class="col-sm-4">
                <input type="text" name="name" class="form-control text-center ">
            </div>
        </div>
		
         <!-- xcConfirm start -->
         <div class="xcConfirm">
        
        	<div class="xc_layer"></div>
            <div class="popBox">
            		<div class="ttBox">
                    	<div class="tt">选择作者</div>                    
                    </div>
                    
                    <div class="txtBox" id="lisContainer">
						<div class="list"></div>	
                    </div>
                 
                    
                    <div class="btnArea">
                    	<div id="add_Btn" class="sgBtn ok btn-primary">加入</div> 
                        <div class="sgBtn cancel btn-info">取消</div>
                    </div>

            </div>
        </div>
        <!-- xcConfirm end -->
           
           


        <div class="form-group" style="margin-top: 20px;">
            <label  class="col-sm-4 control-label "><span class="redText">*</span>作品简介:</label>
            <div class="col-sm-4">
				<textarea class="form-control " name='intro' value="" style="height:350px;"></textarea>
                
            </div>
        </div>
		
		
		 <div class="form-group">
            <label  class="col-sm-4 control-label">
				<span class="redText">*</span>作品缩略图:
			</label>
			
            <button type="button" class="btn btn-default col-sm-4"  id="photo">上传图像</button>
            
        </div>
		
		<div class="form-group" style="margin-top: 20px;">
            <label  class="col-sm-4 control-label "><span class="redText">*</span>选择播放文件上传方式:</label>
            <div class="col-sm-4">
                <div  class="col-sm-4">文件上传<input id="fileBtn" type="radio" name="file" checked></div>
				<div  class="col-sm-4">链接上传<input	  id="urlBtn" type="radio" name="file"></div>
            </div>
			
        </div>
		
		<!-- 影音文件上传 start -->
		<div class="form-group" style="margin-top: 20px;" id="fileUp">
            <label  class="col-sm-4 control-label ">播放文件上传:</label>
            <div class="col-sm-4">
              <input  type="file"  name="media" multiple />
			  <span id="help">支持FLV、MP4文件格式上传</span>
            </div>
			
			
        </div>
		
		<div class="form-group" style="margin-top: 20px; display:none;"  id="urlUp">
            <label  class="col-sm-4 control-label ">链接上传:</label>
            <div class="col-sm-4">
             <input type="text" class="form-control " name="media">
            </div>
        </div>
        <!-- 影音文件上传 end -->
		
		
		<!-- 效果图上传 -->
		<div class="form-group" >
			<label  class="col-sm-4 control-label"><span class="redText">*</span>效果图上传:</label>
			<div class="col-sm-4">
				<input id="fileImage" type="file" size="30" name="effect[]" multiple style="margin-bottom:20px" />
				<span id="fileDragArea" class="upload_drag_area">可以将图片拖到此处</span>
                <div id="preview" class="upload_preview"></div>                      
                <div id="uploadInf" class="upload_inf"></div>                  
			</div>
		</div>

		<!-- 其他文件上传 -->
		<div class="form-group" style="margin-top: 20px;" id="fileUp">
            <label  class="col-sm-4 control-label ">其它文件上传:</label>
            <div class="col-sm-4">
              <input  type="file"  name="other[]" multiple />
            </div>
        </div>
		
		<!-- 解说文件上传 -->
		<div class="form-group" style="margin-top: 20px;">
            <label  class="col-sm-4 control-label ">作品解说文件(可选上传):</label>
            <div class="col-sm-4">
                <input type="file" name="comment[]">
            </div>
        </div>
			
        	
</div>

        
        

		 <script src="__PUBLIC__/js/zxxFile.js"></script>
	<script>
		var fileObj={
				fileInput:$("#fileImage").get(0),
				dragDrop: $("#fileDragArea").get(0),
				upButton: $("#fileSubmit").get(0),
				url: $("#uploadForm").attr("action"),
				filter:function(files){
					var arrFiles=[];
					for(var i=0,file;file=files[i];i++){
						arrFiles.push(file);	
					}
					return arrFiles;
				},
				
					onSelect:function(files){
					
					var html='',i=0;
					$('#preview').html('<div class="upload_loading"></div>');
					var appendImgFn=function(){
						file=files[i];
						if(file){
							var reader = new FileReader();
							 reader.onload = function(e) {
								 						html = html + '<div id="uploadList_'+ i +'" class="upload_append_list"><p><strong>' + file.name + '</strong>'+ 
														'<a href="javascript:" class="upload_delete" title="删除" data-index="'+ i +'">删除</a><br />' +
														'<img id="uploadImage_' + i + '" src="' + e.target.result + '" class="upload_image" /></p>'+ 
														'<span id="uploadProgress_' + i + '" class="upload_progress"></span>' +'</div>';												
														i++;
														appendImgFn();
														
							}
							reader.readAsDataURL(file);
							
						}else{
							$("#preview").html(html);
							 if (html) {
							//删除方法
							$(".upload_delete").click(function() {
								ZXXFILE.funDeleteFile(files[parseInt($(this).attr("data-index"))]);
								return false;	
							});	
							} 
							
						}
					};
					
					 //执行图片HTML片段的载人
   					 appendImgFn();	
				},
				
		onDelete: function(file) {
  					  $("#uploadList_" + file.index).fadeOut();
				},
				onDragOver: function() {
   					 $(this).addClass("upload_drag_hover");
				},
				onDragLeave: function() {
					$(this).removeClass("upload_drag_hover");
				}
				/*
				,
				onProgress: function(file, loaded, total) {
    				var eleProgress = $("#uploadProgress_" + file.index), percent = (loaded / total * 100).toFixed(2) + '%';
   					 eleProgress.show().html(percent);
				},
				onSuccess: function(file, response) {
  					 $("#uploadInf").append("<p>上传成功，图片地址是：" + response + "</p>");
				},
				
				onFailure: function(file) {
					$("#uploadInf").append("<p>图片" + file.name + "上传失败！</p>");	
					$("#uploadImage_" + file.index).css("opacity", 0.2);
				},
				onComplete: function() {
					//提交按钮隐藏
					$("#fileSubmit").hide();
					//file控件value置空
					$("#fileImage").val("");
					$("#uploadInf").append("<p>当前图片全部上传完毕，可继续添加上传。</p>");
				} */

			}
			
			ZXXFILE = $.extend(ZXXFILE, fileObj);
			ZXXFILE.init();
		
		
	</script>
	

        <div style="margin-top: 50px; margin-left:35%;">
            <div class=" col-sm-6 ">
                <button type="submit" class="btn btn-primary form-control" >确认上传
				</button>
            </div>
        </div>
		
	  <div id="hide_container" class="container-fluid">
      <div class="text-right" id="close_btn">关闭</div>
        <div class="row">
             
             	<input type="file" id="up_img" name="thumb" class="col-sm-6 control-label" />
				<div  style="margin-left:35%;" >
				<img id="target" class="control-label"/>
				</div>
		
			  <input type="hidden" id="x" name="x">
			  <input type="hidden" id="y" name="y">
			  <input type="hidden" id="w" name="w">
			  <input type="hidden" id="h" name="h">
           <div class="col-sm-offset-4 col-sm-4" style="left:25px;">
				<button class="btn btn-primary form-control submitImgBtn" type="button"  style="margin-top:20px;">裁剪图像</button>	
           </div>
        </div>
	</div>	
</form>


<script>

$("select[name='course']").change(function () {
	var selected = $(this).children().filter(":selected");
	$($("input[name='teacher']")[0]).val(selected.attr('teachername'));
	$($("input[name='teacher']")[1]).val(selected.attr('teacher'));
	$($("input[name='workType']")[0]).val(selected.attr('typename'));
	$($("input[name='workType']")[1]).val(selected.attr('type'));
	$($("input[name='major']")[0]).val(selected.attr('majorname'));
	$($("input[name='major']")[1]).val(selected.attr('major'));
})

</script>
</body>
</html>