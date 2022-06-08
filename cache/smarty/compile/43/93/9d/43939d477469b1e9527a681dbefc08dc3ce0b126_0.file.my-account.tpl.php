<?php
/* Smarty version 3.1.39, created on 2022-06-08 07:06:49
  from '/var/app/current/themes/hotel-reservation-theme/modules/loyalty/views/templates/hook/my-account.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_62a04a890fdf09_65092213',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '43939d477469b1e9527a681dbefc08dc3ce0b126' => 
    array (
      0 => '/var/app/current/themes/hotel-reservation-theme/modules/loyalty/views/templates/hook/my-account.tpl',
      1 => 1654583688,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_62a04a890fdf09_65092213 (Smarty_Internal_Template $_smarty_tpl) {
?>
<!-- MODULE Loyalty -->
<li class="loyalty">
	<a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['link']->value->getModuleLink('loyalty','default',array('process'=>'summary'),true), ENT_QUOTES, 'UTF-8', true);?>
" title="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'My loyalty points','mod'=>'loyalty'),$_smarty_tpl ) );?>
" rel="nofollow"><i class="icon-flag"></i><span><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'My loyalty points','mod'=>'loyalty'),$_smarty_tpl ) );?>
</span></a>
</li>
<!-- END : MODULE Loyalty --><?php }
}
