<?php /* Smarty version Smarty-3.1.21-dev, created on 2015-06-12 10:01:43
         compiled from ".\smarty\templates\forum\forum_comment_display.html" */ ?>
<?php /*%%SmartyHeaderCode:14774557aa758e06372-04887158%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'c166edacfb7663945b8afcfd59a10f68371d5873' => 
    array (
      0 => '.\\smarty\\templates\\forum\\forum_comment_display.html',
      1 => 1434103298,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '14774557aa758e06372-04887158',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_557aa758e7b672_95422346',
  'variables' => 
  array (
    'subject_name' => 0,
    'subject_content' => 0,
    'comment_list' => 0,
    'comments' => 0,
    'comment' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_557aa758e7b672_95422346')) {function content_557aa758e7b672_95422346($_smarty_tpl) {?><?php $_smarty_tpl->smarty->loadPlugin('Smarty_Internal_Debug'); Smarty_Internal_Debug::display_debug($_smarty_tpl); ?>
<html>
<head><meta http-equiv="content-type" content="text/html; charset=UTF-8">
<style type="text/css">
.hidden{
	display: none;
}
</style>
<?php echo '<script'; ?>
 type="text/javascript" src="js/jquery.min.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 type="text/javascript">
$(function(){
	$('#response').click(function(){
		$('.text').removeClass('hidden');
	})
})
	
<?php echo '</script'; ?>
>
 </head>
<body>
	<h1>主题：<?php echo $_smarty_tpl->tpl_vars['subject_name']->value;?>
</h1>
	<p></p>
	<?php echo $_smarty_tpl->tpl_vars['subject_content']->value;?>

	<div class="comment">
		<p><h3>评论</h3>  <button id="response"> 回复</button></p>
		<form class="hidden text">
			<textarea row='3' cols='50'></textarea>
			<button id="send">发送</button>
		</form>
		<div class='comment_list'>
			<p>
			<!-- <div>
				<?php if ($_smarty_tpl->tpl_vars['comment_list']->value!='') {?>
					<?php  $_smarty_tpl->tpl_vars['comments'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['comments']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['comment_list']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['comments']->key => $_smarty_tpl->tpl_vars['comments']->value) {
$_smarty_tpl->tpl_vars['comments']->_loop = true;
?>

						<?php  $_smarty_tpl->tpl_vars['comment'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['comment']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['comments']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['comment']->key => $_smarty_tpl->tpl_vars['comment']->value) {
$_smarty_tpl->tpl_vars['comment']->_loop = true;
?>
							<?php if (count($_smarty_tpl->tpl_vars['comment']->value)==5) {?>
								<span><?php echo $_smarty_tpl->tpl_vars['comment']->value['name'];?>
 | <?php echo $_smarty_tpl->tpl_vars['comment']->value['comment_time'];?>
 说: <?php echo $_smarty_tpl->tpl_vars['comment']->value['content'];?>
</span>  <a href="forum_reply.html?comment_id=<?php echo $_smarty_tpl->tpl_vars['comment']->value['id'];?>
"> 回复</a>
								<p></p>
								<p></p> 

							<?php } else { ?>
								<span><?php echo $_smarty_tpl->tpl_vars['comment']->value['name'];?>
 | <?php echo $_smarty_tpl->tpl_vars['comment']->value['comment_time'];?>
 <a href="forum_reply.html?comment_id=<?php echo $_smarty_tpl->tpl_vars['comment']->value['parent'];?>
">回复</a> <?php echo $_smarty_tpl->tpl_vars['comment']->value['parent_name'];?>
 说: <?php echo $_smarty_tpl->tpl_vars['comment']->value['content'];?>
</span>  <a href="forum_reply.html?comment_id=<?php echo $_smarty_tpl->tpl_vars['comment']->value['id'];?>
">回复</a><br>

							<?php }?>
						<?php } ?>
					<?php } ?>
				<?php } else { ?>
				<h3>暂无跟帖</h3>
				<?php }?>
			</div> -->
			</p>
		</div>
	</div>
	
</body>
</head><?php }} ?>
