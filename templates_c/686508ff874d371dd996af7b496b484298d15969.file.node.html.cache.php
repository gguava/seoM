<?php /* Smarty version Smarty-3.1.11, created on 2012-07-24 15:59:17
         compiled from "./application/views/node.html" */ ?>
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
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.11',
  'unifunc' => 'content_500e4dca5b7240_40786498',
  'variables' => 
  array (
    'title' => 0,
    'row' => 0,
    'cis' => 0,
    'ci' => 0,
    'childrens' => 0,
    'children' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_500e4dca5b7240_40786498')) {function content_500e4dca5b7240_40786498($_smarty_tpl) {?><html>
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<title><?php echo $_smarty_tpl->tpl_vars['title']->value;?>
</title>
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
上层节点：<a href=http://www.holdyourdream.com/seo/index.php/node/getNode/<?php echo $_smarty_tpl->tpl_vars['row']->value['G_fatherID'];?>
 > 点击管理上层节点 </a></br>
<hr/>

页面:<?php echo $_smarty_tpl->tpl_vars['row']->value['G_position'];?>
</br>
url:<a href=<?php echo $_smarty_tpl->tpl_vars['row']->value['G_URL'];?>
 target="_blank"  > <?php echo $_smarty_tpl->tpl_vars['row']->value['G_URL'];?>
 </a></br>
CI：
<table >
	<tr>
		<th>关键词</th>
		<th>ci</th>
		<th>是否满足ci</th>
		<th></th>
	</tr>
<?php  $_smarty_tpl->tpl_vars['ci'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['ci']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['cis']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['ci']->key => $_smarty_tpl->tpl_vars['ci']->value){
$_smarty_tpl->tpl_vars['ci']->_loop = true;
?>
<tr>
	<form action="http://www.holdyourdream.com/seo/index.php/node/editCI/" method="POST">
	<th>
		<input type="text" name="G_position" value=<?php echo $_smarty_tpl->tpl_vars['ci']->value['G_keyword'];?>
> 
		-<a href=http://www.baidu.com/s?wd=<?php echo $_smarty_tpl->tpl_vars['ci']->value['G_keyword'];?>
 target="_blank">搜索</a></th>
		<th><input type="text"  name="G_ci" value=<?php echo $_smarty_tpl->tpl_vars['ci']->value['G_ci'];?>
 >  </th>
		<input type="hidden" name="G_positionID" value=<?php echo $_smarty_tpl->tpl_vars['ci']->value['id'];?>
>
		<th><input type="text"  name="G_ciok" value=<?php echo $_smarty_tpl->tpl_vars['ci']->value['G_ciok'];?>
 > </th>
		<th><input type="submit" name="submit" value="修改" /></th>
	</form>
</tr>
<?php } ?>
</table>
<form action="http://www.holdyourdream.com/seo/index.php/node/addCI/" method="POST">
关键词：<br>
<input type="text" name="G_position">
ci：<input type="text"  name="G_ci" value=0> 
<input type="hidden" name="G_positionID" value=<?php echo $_smarty_tpl->tpl_vars['row']->value['id'];?>
>
<input type="text"  name="G_ciok" value=0> 
<input type="submit" name="submit" value="提交" />
</form>
<hr/>

下层节点：
<ul><?php  $_smarty_tpl->tpl_vars['children'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['children']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['childrens']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['children']->key => $_smarty_tpl->tpl_vars['children']->value){
$_smarty_tpl->tpl_vars['children']->_loop = true;
?>
	<li><a href=http://www.holdyourdream.com/seo/index.php/node/getNode/<?php echo $_smarty_tpl->tpl_vars['children']->value['id'];?>
  > <?php echo $_smarty_tpl->tpl_vars['children']->value['G_position'];?>
 </a></li>
	<?php } ?>
</ul>
添加节点：
<form action="http://www.holdyourdream.com/seo/index.php/node/addNode/" method="POST">
名称：<input type="text" name="G_position">
url：<input type="text" name="G_URL">
<input type="hidden" name="G_fatherID" value=<?php echo $_smarty_tpl->tpl_vars['row']->value['id'];?>
>
<input type="submit" name="submit" value="提交" />
</form>
</div>
</body>
</html><?php }} ?>