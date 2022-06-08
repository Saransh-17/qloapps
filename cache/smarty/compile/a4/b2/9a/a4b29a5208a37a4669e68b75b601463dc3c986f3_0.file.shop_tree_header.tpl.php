<?php
/* Smarty version 3.1.39, created on 2022-06-08 07:06:50
  from '/var/app/current/admin/themes/default/template/controllers/shop/helpers/tree/shop_tree_header.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_62a04a8a20f599_64596276',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'a4b29a5208a37a4669e68b75b601463dc3c986f3' => 
    array (
      0 => '/var/app/current/admin/themes/default/template/controllers/shop/helpers/tree/shop_tree_header.tpl',
      1 => 1654583688,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_62a04a8a20f599_64596276 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="panel-heading">
	<?php if ((isset($_smarty_tpl->tpl_vars['title']->value))) {?><i class="icon-sitemap"></i>&nbsp;<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>$_smarty_tpl->tpl_vars['title']->value),$_smarty_tpl ) );
}?>
	<div class="pull-right">
		<?php if ((isset($_smarty_tpl->tpl_vars['toolbar']->value))) {
echo $_smarty_tpl->tpl_vars['toolbar']->value;
}?>
	</div>
</div><?php }
}
