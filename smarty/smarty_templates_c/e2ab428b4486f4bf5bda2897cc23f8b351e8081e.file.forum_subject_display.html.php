<?php /* Smarty version Smarty-3.1.21-dev, created on 2015-06-12 09:33:04
         compiled from ".\smarty\templates\forum\forum_subject_display.html" */ ?>
<?php /*%%SmartyHeaderCode:30683557aa75090f582-23881337%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'e2ab428b4486f4bf5bda2897cc23f8b351e8081e' => 
    array (
      0 => '.\\smarty\\templates\\forum\\forum_subject_display.html',
      1 => 1433754243,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '30683557aa75090f582-23881337',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'subject_list' => 0,
    'subject' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_557aa75095d781_55768671',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_557aa75095d781_55768671')) {function content_557aa75095d781_55768671($_smarty_tpl) {?><html>
<head><meta http-equiv="content-type" content="text/html; charset=UTF-8"> </head>
<body>
	<h1>讨论主题列表</h1>
	<table border="1">
		<tr>
			<th>主题</th>
			<th>发起人</th>
			<th>创建时间</th>
			<th>最后回复时间</th>
			<th>回复数</th>
		</tr>
		<?php  $_smarty_tpl->tpl_vars['subject'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['subject']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['subject_list']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['subject']->key => $_smarty_tpl->tpl_vars['subject']->value) {
$_smarty_tpl->tpl_vars['subject']->_loop = true;
?>
			<tr>
			<th><a href="forum_comment_display.php?subject_id=<?php echo $_smarty_tpl->tpl_vars['subject']->value['id'];?>
&course_id=<?php echo $_smarty_tpl->tpl_vars['subject']->value['course_id'];?>
"><?php echo $_smarty_tpl->tpl_vars['subject']->value['name'];?>
</a></th>
			<th><?php echo $_smarty_tpl->tpl_vars['subject']->value['publisher_name'];?>
</th>
			<th><?php echo $_smarty_tpl->tpl_vars['subject']->value['date_added'];?>
</th>
			<th><?php echo $_smarty_tpl->tpl_vars['subject']->value['date_modified'];?>
</th>
			<th><?php echo $_smarty_tpl->tpl_vars['subject']->value['comment_count'];?>
</th>
			</tr>
		<?php } ?>
		<a href="forum_newsubject.html?course_id=<?php echo $_smarty_tpl->tpl_vars['subject']->value['course_id'];?>
">新建主题</a>
	</table>
	
</body>
</head><?php }} ?>
