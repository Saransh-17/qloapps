<?php
/* Smarty version 3.1.39, created on 2022-06-08 07:06:49
  from '/var/app/current/themes/hotel-reservation-theme/modules/favoriteproducts/views/templates/hook/my-account.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_62a04a89079249_63631323',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '16e6b997b0fa7c6c762361572d93f5c5edcd01d0' => 
    array (
      0 => '/var/app/current/themes/hotel-reservation-theme/modules/favoriteproducts/views/templates/hook/my-account.tpl',
      1 => 1654583688,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_62a04a89079249_63631323 (Smarty_Internal_Template $_smarty_tpl) {
?>
<li class="favoriteproducts">
	<a
	href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['link']->value->getModuleLink('favoriteproducts','account',array(),true), ENT_QUOTES, 'UTF-8', true);?>
"
	title="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'My favorite products.','mod'=>'favoriteproducts'),$_smarty_tpl ) );?>
">
		<?php if (!$_smarty_tpl->tpl_vars['in_footer']->value) {?>
			<i class="icon-heart-empty"></i>
			<span><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'My favorite products','mod'=>'favoriteproducts'),$_smarty_tpl ) );?>
</span>
		<?php } else { ?>
			<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'My favorite products','mod'=>'favoriteproducts'),$_smarty_tpl ) );?>

		<?php }?>
	</a>
</li>
<?php }
}
