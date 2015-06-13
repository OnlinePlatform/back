<?php /* Smarty version Smarty-3.1.21-dev, created on 2015-06-12 13:28:35
         compiled from ".\smarty\templates\file\video_onsite.html" */ ?>
<?php /*%%SmartyHeaderCode:23745557ade830b3183-53294442%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '99e4094d4f2859dce595198541935ae89171ee77' => 
    array (
      0 => '.\\smarty\\templates\\file\\video_onsite.html',
      1 => 1433251378,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '23745557ade830b3183-53294442',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'video' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_557ade83110d97_53231505',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_557ade83110d97_53231505')) {function content_557ade83110d97_53231505($_smarty_tpl) {?><!DOCTYPE html>
<html>
<head>
	<title><?php echo $_smarty_tpl->tpl_vars['video']->value['name'];?>
</title>
</head>
<body>

	<video width="320" height="240" controls="controls"  >
		<source src="<?php echo $_smarty_tpl->tpl_vars['video']->value['url'];?>
" type="video/ogg" />
		<source src="<?php echo $_smarty_tpl->tpl_vars['video']->value['url'];?>
" type="video/mp4" />
		<source src="<?php echo $_smarty_tpl->tpl_vars['video']->value['url'];?>
" type="video/webm" />
<!-- 		<object data="<?php echo $_smarty_tpl->tpl_vars['video']->value['url'];?>
" width="320" height="240">
			<embed width="320" height="240" src="<?php echo $_smarty_tpl->tpl_vars['video']->value['url'];?>
" />
		</object> -->
	</video>

</body>
</html>




<?php }} ?>
