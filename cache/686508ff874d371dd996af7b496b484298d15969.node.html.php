<?php /*%%SmartyHeaderCode:902823073500fc9b1ae8203-49627349%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '686508ff874d371dd996af7b496b484298d15969' => 
    array (
      0 => './application/views/node.html',
      1 => 1343216999,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '902823073500fc9b1ae8203-49627349',
  'version' => 'Smarty-3.1.11',
  'unifunc' => 'content_500fe1454f1444_59570059',
  'has_nocache_code' => false,
  'cache_lifetime' => 0,
),true); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_500fe1454f1444_59570059')) {function content_500fe1454f1444_59570059($_smarty_tpl) {?><html>
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
		padding-left: 10px;
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
上层节点ID1：<a href=./1 > 
点击管理上层节点go </a></br>
<hr/>

页面:珍珠项链</br>
url:<a href=http://www.haixingzb.com/c-12-b0.html target="_blank"  > http://www.haixingzb.com/c-12-b0.html </a></br>
CI：
<table >
	<tr>
		<th>关键词</th>
		<th>ci</th>
		<th>是否满足ci</th>
		<th></th>
	</tr>
<tr>
	<form action="./../editCI/" method="POST">
	<th>
		<input type="text" name="G_position" value=珍珠项链价格/珍珠项链的价格 > 
		-<a href=http://www.baidu.com/s?wd=珍珠项链价格/珍珠项链的价格 target="_blank">搜索</a>
		<a href=http://keyword.biniu.com/?q=haixingzb.com&key=%D5%E4%D6%E9%CF%EE%C1%B4%BC%DB%B8%F1%2F%D5%E4%D6%E9%CF%EE%C1%B4%B5%C4%BC%DB%B8%F1 target="_blank">排名</a>
		<a href=http://www.baidu.com/s?wd=%E7%8F%8D%E7%8F%A0%E9%A1%B9%E9%93%BE%E4%BB%B7%E6%A0%BC%2F%E7%8F%8D%E7%8F%A0%E9%A1%B9%E9%93%BE%E7%9A%84%E4%BB%B7%E6%A0%BC+site%3Ahaixingzb.com target="_blank">target</a>
		</th>
		<th><input type="text"  name="G_ci" value=报价、批发、知道、 >  </th>
		<input type="hidden" name="G_positionID" value=2>
		<input type="hidden" name="id" value=6>
		<th><input type="text"  name="G_ciok" value=70% > </th>
		<th><input type="submit" name="submit" value="修改" /></th>
	</form>
</tr>
<tr>
	<form action="./../editCI/" method="POST">
	<th>
		<input type="text" name="G_position" value=珍珠项链 > 
		-<a href=http://www.baidu.com/s?wd=珍珠项链 target="_blank">搜索</a>
		<a href=http://keyword.biniu.com/?q=haixingzb.com&key=%D5%E4%D6%E9%CF%EE%C1%B4 target="_blank">排名</a>
		<a href=http://www.baidu.com/s?wd=%E7%8F%8D%E7%8F%A0%E9%A1%B9%E9%93%BE+site%3Ahaixingzb.com target="_blank">target</a>
		</th>
		<th><input type="text"  name="G_ci" value=0 >  </th>
		<input type="hidden" name="G_positionID" value=2>
		<input type="hidden" name="id" value=40>
		<th><input type="text"  name="G_ciok" value=0 > </th>
		<th><input type="submit" name="submit" value="修改" /></th>
	</form>
</tr>
</table>
<form action="./../addCI/" method="POST">
关键词：<br>
<input type="text" name="G_position">
ci：<input type="text"  name="G_ci" value=0> 
<input type="hidden" name="G_positionID" value=2>
<input type="text"  name="G_ciok" value=0> 
<input type="submit" name="submit" value="提交" />
</form>
<hr/>

下层节点：
<ul>	<li><a href=./3  > 大溪地珍珠项链 </a></li>
		<li><a href=./4  > 淡水珍珠项链 </a></li>
		<li><a href=./5  > 海水珍珠项链 </a></li>
		<li><a href=./6  > 南洋珍珠项链 </a></li>
	</ul>
添加节点：
<form action="./../addNode/" method="POST">
名称：<input type="text" name="G_position">
url：<input type="text" name="G_URL">
<input type="hidden" name="G_fatherID" value="2" >
<input type="submit" name="submit" value="提交" />
</form>
</div>
</body>

</html><?php }} ?>