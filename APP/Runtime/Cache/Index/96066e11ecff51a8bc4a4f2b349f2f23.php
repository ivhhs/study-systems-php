<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>无标题文档</title>
<script src="__PUBLIC__/Scripts/swfobject_modified.js" type="text/javascript"></script>
<script src="__PUBLIC__/jquery.js"></script>
<script>

<!--
	var baseURL = "__PUBLIC__/";
	var workUrl;
	function writeflashobject(parastr) {
			 document.write(
			 "<object classid=\"clsid:D27CDB6E-AE6D-11cf-96B8-444553540000\" width=\"200\" height=\"300\" id=\"FLVPlayer\"\>\n");
			
			 document.write("<param name=\"movie\" value=\"" + baseURL + "FLVPlayer_Progressive.swf?"+parastr+"&amp\" /\>\n");
			 document.write("<param name=\"quality\" value=\"high\" /\>\n");
			 document.write("<param name=\"wmode\" value=\"opaque\" /\>\n");
			 document.write("<param name=\"scale\" value=\"noscale\" /\>\n");
			 document.write("<param name=\"salign\" value=\"lt\" /\>\n");
			 document.write("<param id=\"PlayUrl\" name=\"FlashVars\" value=\"&amp;MM_ComponentVersion=1&amp;skinName=" + baseURL + "Clear_Skin_1&amp;streamName="+workUrl+"\";autoPlay=false&amp;autoRewind=false\" /\>\n");
			 document.write("<param name=\"swfversion\" value=\"8,0,0,0\" /\>\n");
			  <!-- 此 param 标签提示使用 Flash Player 6.0 r65 和更高版本的用户下载最新版本的 Flash Player。如果您不想让用户看到该提示，请将其删除。 -->
			 document.write("<param name=\"expressinstall\" value=\"" + baseURL + "Scripts/expressInstall.swf\" /\>\n");
			  <!-- 下一个对象标签用于非 IE 浏览器。所以使用 IECC 将其从 IE 隐藏。 -->
			    <!--[if !IE]>-->
			 document.write("<object type=\"application/x-shockwave-flash\" data=\"" + baseURL + "FLVPlayer_Progressive.swf\" width=\"480\" height=\"320\"\>\n");
			    <!--<![endif]-->
			document.write("<param name=\"quality\" value=\"high\" /\>\n");
			document.write("<param name=\"wmode\" value=\"opaque\" /\>\n");
			document.write("<param name=\"scale\" value=\"noscale\" /\>\n");
			document.write("<param name=\"salign\" value=\"lt\" /\>\n"); 
			<!--此处非IE浏览器  URL地址传递，传递到streamName属性中-->
			document.write("<param id=\"PlayUrl\" name=\"FlashVars\" value=\"&amp;MM_ComponentVersion=1&amp;skinName=" + baseURL + "Clear_Skin_1&amp;streamName="+parastr+"&amp\";autoPlay=false&amp;autoRewind=false\" /\>\n");	
			document.write("<param name=\"swfversion\" value=\"8,0,0,0\" /\>\n");
			document.write(" <param name=\"expressinstall\" value=\"" + baseURL + "Scripts/expressInstall.swf\" /\>\n");
			<!-- 浏览器将以下替代内容显示给使用 Flash Player 6.0 和更低版本的用户。 -->
			document.write("<!--<![endif]--\>\n");
			document.write("<a href=\"http://www.adobe.com/go/getflash\"\><img src=\"http://www.adobe.com/images/shared/download_buttons/get_flash_player.gif\" alt=\"获得 Adobe Flash Player\" /\></a\>\n");
			document.write("<!--[if !IE]>--\>\n");
			document.write("</object\>\n");
			document.write("<!--<![endif]--\>\n");
			document.write("</object\>");
	}
	
	function getparastr() {
			 var hrefstr,pos,parastr,para,tempstr1;
			 hrefstr = window.location.href;
			 pos = hrefstr.indexOf("?")
			 parastr = hrefstr.substring(pos+1);
			 
			 return parastr;
	}
	
	//获得网页不带参数的网址
	function getPageUrl()
	{
	var PageUrl;
	var i;
     PageUrl=window.location.href;
     console.log("++++++++++++++++++++++++++++++++++++++++++++++++\n");
     console.log(PageUrl);
      i = PageUrl.indexOf("?"); //indexOf
      PageUrl=PageUrl.substring(0, i);//网页地址 substring 函数
      return PageUrl;
	}

</script>
</head>

<body>
	<script>
<!--
	var parastr = getparastr();
	parastr = escape(parastr);
	//alert(parastr);
	//console.log('---------\n');
	//console.log(parastr);
	writeflashobject(parastr);
//-->
</script>

<div id="workList"></div>

</body>
</html>