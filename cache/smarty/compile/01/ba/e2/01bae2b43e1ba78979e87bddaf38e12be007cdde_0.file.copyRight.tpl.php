<?php
/* Smarty version 3.1.39, created on 2022-06-08 12:40:02
  from '/var/app/current/modules/hotelreservationsystem/views/templates/hook/copyRight.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_62a04b4ab33ba7_40975761',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '01bae2b43e1ba78979e87bddaf38e12be007cdde' => 
    array (
      0 => '/var/app/current/modules/hotelreservationsystem/views/templates/hook/copyRight.tpl',
      1 => 1654583688,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_62a04b4ab33ba7_40975761 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="copyRightWrapper">
	<p class="copyRight">
		&copy; <?php echo $_smarty_tpl->tpl_vars['WK_HTL_ESTABLISHMENT_YEAR']->value;?>
-<?php echo date('Y');?>
&nbsp;<a href="<?php echo $_smarty_tpl->tpl_vars['base_dir']->value;?>
">&nbsp;<?php echo $_smarty_tpl->tpl_vars['WK_HTL_CHAIN_NAME']->value;?>
</a>.&nbsp;<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>' All rights reserved.','mod'=>'hotelreservationsystem'),$_smarty_tpl ) );?>

	</p>
</div><?php }
}
