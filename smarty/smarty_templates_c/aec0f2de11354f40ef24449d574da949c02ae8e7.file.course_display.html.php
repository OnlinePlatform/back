<?php /* Smarty version Smarty-3.1.21-dev, created on 2015-06-12 09:33:05
         compiled from ".\smarty\templates\course_display.html" */ ?>
<?php /*%%SmartyHeaderCode:29304557aa751d787f8-72985893%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'aec0f2de11354f40ef24449d574da949c02ae8e7' => 
    array (
      0 => '.\\smarty\\templates\\course_display.html',
      1 => 1432826609,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '29304557aa751d787f8-72985893',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'courses' => 0,
    'course' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_557aa751dde118_76257967',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_557aa751dde118_76257967')) {function content_557aa751dde118_76257967($_smarty_tpl) {?><?php $_smarty_tpl->smarty->loadPlugin('Smarty_Internal_Debug'); Smarty_Internal_Debug::display_debug($_smarty_tpl); ?>
<html>
<head><meta http-equiv="content-type" content="text/html; charset=UTF-8"> </head>
<body>
	<h2>课程列表</h2>
	<?php  $_smarty_tpl->tpl_vars['course'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['course']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['courses']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['course']->key => $_smarty_tpl->tpl_vars['course']->value) {
$_smarty_tpl->tpl_vars['course']->_loop = true;
?>
		<a href="course_info.php?course_id=<?php echo $_smarty_tpl->tpl_vars['course']->value['id'];?>
"><?php echo $_smarty_tpl->tpl_vars['course']->value['name'];?>
</a>
	<?php } ?>
</body>
</head><?php }} ?>
