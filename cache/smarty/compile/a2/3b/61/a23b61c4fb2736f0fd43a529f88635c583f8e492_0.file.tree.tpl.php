<?php
/* Smarty version 3.1.39, created on 2022-06-08 07:06:52
  from '/var/app/current/admin/themes/default/template/helpers/tree/tree.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_62a04a8c2dc0e1_31479489',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'a23b61c4fb2736f0fd43a529f88635c583f8e492' => 
    array (
      0 => '/var/app/current/admin/themes/default/template/helpers/tree/tree.tpl',
      1 => 1654583688,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_62a04a8c2dc0e1_31479489 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="panel">
	<?php if ((isset($_smarty_tpl->tpl_vars['header']->value))) {
echo $_smarty_tpl->tpl_vars['header']->value;
}?>
	<?php if ((isset($_smarty_tpl->tpl_vars['nodes']->value))) {?>
	<ul id="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['id']->value, ENT_QUOTES, 'UTF-8', true);?>
" class="tree">
		<?php echo $_smarty_tpl->tpl_vars['nodes']->value;?>

	</ul>
	<?php }?>
</div><?php }
}
