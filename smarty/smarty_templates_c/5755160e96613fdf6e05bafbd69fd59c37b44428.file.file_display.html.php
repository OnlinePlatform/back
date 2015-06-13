<?php /* Smarty version Smarty-3.1.21-dev, created on 2015-06-12 13:28:33
         compiled from ".\smarty\templates\file\file_display.html" */ ?>
<?php /*%%SmartyHeaderCode:27048557ade81638ca1-39466161%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '5755160e96613fdf6e05bafbd69fd59c37b44428' => 
    array (
      0 => '.\\smarty\\templates\\file\\file_display.html',
      1 => 1432603594,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '27048557ade81638ca1-39466161',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'videos' => 0,
    'video' => 0,
    'references' => 0,
    'reference' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_557ade816c1843_52349420',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_557ade816c1843_52349420')) {function content_557ade816c1843_52349420($_smarty_tpl) {?><html>
	<head>
		<meta charset="utf-8"/>
		<title>FILE_DISPLAY PAGE</title>
	</head>
	<body>
		<h2>视频列表</h2>
		<?php if ($_smarty_tpl->tpl_vars['videos']->value!='') {?>
			<table border="1">
			<tr>
				<th>课时</th>
				<th>名称</th>
				<th>上传时间</th>
				<th>下载</th>
			</tr>
			<?php  $_smarty_tpl->tpl_vars['video'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['video']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['videos']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['video']->key => $_smarty_tpl->tpl_vars['video']->value) {
$_smarty_tpl->tpl_vars['video']->_loop = true;
?>
				<tr>
				<th><?php echo $_smarty_tpl->tpl_vars['video']->value['section'];?>
</th>
				<th><a href="view_onsite.php?video_id=<?php echo $_smarty_tpl->tpl_vars['video']->value['id'];?>
"><?php echo $_smarty_tpl->tpl_vars['video']->value['info'];?>
</a></th>
				<th><?php echo $_smarty_tpl->tpl_vars['video']->value['date_added'];?>
</th>
				<th><a href="file_download.php?video_id=<?php echo $_smarty_tpl->tpl_vars['video']->value['id'];?>
">点此下载</a></th>
				</tr>
			<?php } ?>
			</table>
		<?php } else { ?>
			暂无资料
		<?php }?>
		<p></p>
		<p></p>
		<p></p>
	
		<h2>参考资料列表</h2>
		<?php if ($_smarty_tpl->tpl_vars['references']->value!='') {?>
			<table border="1">
				<tr>
					<th>课时</th>
					<th>名称</th>					
					<th>上传时间</th>
					<th>下载</th>
				</tr>	
				<?php  $_smarty_tpl->tpl_vars['reference'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['reference']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['references']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['reference']->key => $_smarty_tpl->tpl_vars['reference']->value) {
$_smarty_tpl->tpl_vars['reference']->_loop = true;
?>
					<tr>
					<th><?php echo $_smarty_tpl->tpl_vars['reference']->value['section'];?>
</a></th>
					<th><a href="view_onsite.php?reference_id=<?php echo $_smarty_tpl->tpl_vars['reference']->value['id'];?>
"><?php echo $_smarty_tpl->tpl_vars['reference']->value['name'];?>
</a></th>
					<th><?php echo $_smarty_tpl->tpl_vars['reference']->value['date_added'];?>
</th>
					<th><a href="file_download.php?reference_id=<?php echo $_smarty_tpl->tpl_vars['reference']->value['id'];?>
">点此下载</a></th>
					</tr>
				<?php } ?>
			</table>
		<?php } else { ?>
			暂无资料
		<?php }?>

	</body>
</html><?php }} ?>
