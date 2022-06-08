<?php
/* Smarty version 3.1.39, created on 2022-06-08 07:06:49
  from '/var/app/current/themes/hotel-reservation-theme/modules/mailalerts/views/templates/hook/my-account.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_62a04a891a3dc9_04396087',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '53b8ece5e0a4a4f71911e754af97defba356339e' => 
    array (
      0 => '/var/app/current/themes/hotel-reservation-theme/modules/mailalerts/views/templates/hook/my-account.tpl',
      1 => 1654583688,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_62a04a891a3dc9_04396087 (Smarty_Internal_Template $_smarty_tpl) {
?>
<li class="mailalerts">
	<a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['link']->value->getModuleLink('mailalerts','account',array(),true), ENT_QUOTES, 'UTF-8', true);?>
" title="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'My alerts','mod'=>'mailalerts'),$_smarty_tpl ) );?>
" rel="nofollow">
    	<i class="icon-envelope"></i>
		<span><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'My alerts','mod'=>'mailalerts'),$_smarty_tpl ) );?>
</span>
	</a>
</li>
<?php }
}
