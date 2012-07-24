<?php /*%%SmartyHeaderCode:1169883208500e4dca505583-85777468%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '686508ff874d371dd996af7b496b484298d15969' => 
    array (
      0 => './application/views/node.html',
      1 => 1343116547,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1169883208500e4dca505583-85777468',
  'version' => 'Smarty-3.1.11',
  'unifunc' => 'content_500e583e01a719_87818671',
  'has_nocache_code' => false,
  'cache_lifetime' => 0,
),true); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_500e583e01a719_87818671')) {function content_500e583e01a719_87818671($_smarty_tpl) {?><html>
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<title>node管理</title>
	<style type="text/css">

		::selection{ background-color: #E13300; color: white; }
		::moz-selection{ background-color: #E13300; color: white; }
		::webkit-selection{ background-color: #E13300; color: white; }

		body {
			background-color: #fff;
			margin: 40px;
			font: 13px/20px normal Helvetica, Arial, sans-serif;
			color: #4F5155;
		}

		a {
			color: #003399;
			background-color: transparent;
			font-weight: normal;
		}

		h1 {
			color: #444;
			background-color: transparent;
			border-bottom: 1px solid #D0D0D0;
			font-size: 19px;
			font-weight: normal;
			margin: 0 0 14px 0;
			padding: 14px 15px 10px 15px;
		}

		code {
			font-family: Consolas, Monaco, Courier New, Courier, monospace;
			font-size: 12px;
			background-color: #f9f9f9;
			border: 1px solid #D0D0D0;
			color: #002166;
			display: block;
			margin: 14px 0 14px 0;
			padding: 12px 10px 12px 10px;
		}

		#body{
			margin: 0 15px 0 15px;
		}

		p.footer{
			text-align: right;
			font-size: 11px;
			border-top: 1px solid #D0D0D0;
			line-height: 32px;
			padding: 0 10px 0 10px;
			margin: 20px 0 0 0;
		}

		#container{
			margin: 10px;
			border: 1px solid #D0D0D0;
			-webkit-box-shadow: 0 0 8px #D0D0D0;
		}
	body
	  { 
	  /*
	  background:#fff url(/seo/templates/xz.jpg) no-repeat fixed right;
	  */
	  }
	</style>
	</head>
<body>
<div id="container">
上层节点：<a href=http://www.holdyourdream.com/seo/index.php/node/getNode/0 > 点击管理上层节点 </a></br>
<hr/>

页面:首页</br>
url:<a href=http://www.haixingzb.com/ target="_blank"  > http://www.haixingzb.com/ </a></br>
CI：
<table >
	<tr>
		<th>关键词</th>
		<th>ci</th>
		<th>是否满足ci</th>
		<th></th>
	</tr>
<tr>
	<form action="http://www.holdyourdream.com/seo/index.php/node/editCI/" method="POST">
	<th>
		<input type="text" name="G_position" value=珍珠首饰品牌> 
		-<a href=http://www.baidu.com/s?wd=珍珠首饰品牌 target="_blank">搜索</a></th>
		<th><input type="text"  name="G_ci" value=排名、什么品牌好、批发、商城、 >  </th>
		<input type="hidden" name="G_positionID" value=1>
		<th><input type="text"  name="G_ciok" value=50% > </th>
		<th><input type="submit" name="submit" value="修改" /></th>
	</form>
</tr>
<tr>
	<form action="http://www.holdyourdream.com/seo/index.php/node/editCI/" method="POST">
	<th>
		<input type="text" name="G_position" value=珍珠项链> 
		-<a href=http://www.baidu.com/s?wd=珍珠项链 target="_blank">搜索</a></th>
		<th><input type="text"  name="G_ci" value=珍珠项链介绍、鉴别、相关信息、品牌、价格、商城 >  </th>
		<input type="hidden" name="G_positionID" value=2>
		<th><input type="text"  name="G_ciok" value=30% > </th>
		<th><input type="submit" name="submit" value="修改" /></th>
	</form>
</tr>
<tr>
	<form action="http://www.holdyourdream.com/seo/index.php/node/editCI/" method="POST">
	<th>
		<input type="text" name="G_position" value=珍珠饰品> 
		-<a href=http://www.baidu.com/s?wd=珍珠饰品 target="_blank">搜索</a></th>
		<th><input type="text"  name="G_ci" value=图片、排名、批发（4）、商城、资讯 >  </th>
		<input type="hidden" name="G_positionID" value=3>
		<th><input type="text"  name="G_ciok" value=10% > </th>
		<th><input type="submit" name="submit" value="修改" /></th>
	</form>
</tr>
<tr>
	<form action="http://www.holdyourdream.com/seo/index.php/node/editCI/" method="POST">
	<th>
		<input type="text" name="G_position" value=珍珠首饰> 
		-<a href=http://www.baidu.com/s?wd=珍珠首饰 target="_blank">搜索</a></th>
		<th><input type="text"  name="G_ci" value=图片、排名、批发、资讯、商城 >  </th>
		<input type="hidden" name="G_positionID" value=4>
		<th><input type="text"  name="G_ciok" value=30% > </th>
		<th><input type="submit" name="submit" value="修改" /></th>
	</form>
</tr>
<tr>
	<form action="http://www.holdyourdream.com/seo/index.php/node/editCI/" method="POST">
	<th>
		<input type="text" name="G_position" value=珍珠项链品牌> 
		-<a href=http://www.baidu.com/s?wd=珍珠项链品牌 target="_blank">搜索</a></th>
		<th><input type="text"  name="G_ci" value=知道、图片、商城 >  </th>
		<input type="hidden" name="G_positionID" value=5>
		<th><input type="text"  name="G_ciok" value=70% > </th>
		<th><input type="submit" name="submit" value="修改" /></th>
	</form>
</tr>
</table>
<form action="http://www.holdyourdream.com/seo/index.php/node/addCI/" method="POST">
关键词：<br>
<input type="text" name="G_position">
ci：<input type="text"  name="G_ci" value=0> 
<input type="hidden" name="G_positionID" value=1>
<input type="text"  name="G_ciok" value=0> 
<input type="submit" name="submit" value="提交" />
</form>
<hr/>

下层节点：
<ul>	<li><a href=http://www.holdyourdream.com/seo/index.php/node/getNode/2  > 珍珠项链 </a></li>
		<li><a href=http://www.holdyourdream.com/seo/index.php/node/getNode/7  > 珍珠吊坠 </a></li>
		<li><a href=http://www.holdyourdream.com/seo/index.php/node/getNode/12  > 珍珠戒指 </a></li>
		<li><a href=http://www.holdyourdream.com/seo/index.php/node/getNode/17  > 珍珠耳环 </a></li>
		<li><a href=http://www.holdyourdream.com/seo/index.php/node/getNode/22  > 珍珠手链 </a></li>
	</ul>
添加节点：
<form action="http://www.holdyourdream.com/seo/index.php/node/addNode/" method="POST">
名称：<input type="text" name="G_position">
url：<input type="text" name="G_URL">
<input type="hidden" name="G_fatherID" value=1>
<input type="submit" name="submit" value="提交" />
</form>
</div>
</body>
</html><?php }} ?>