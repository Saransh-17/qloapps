<?php
/* Smarty version 3.1.39, created on 2022-06-08 07:06:51
  from '/var/app/current/themes/hotel-reservation-theme/store_infos.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_62a04a8bcf86c9_50978309',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '01a9f366c7ab7578fac1a2494dd93ee12614ccd8' => 
    array (
      0 => '/var/app/current/themes/hotel-reservation-theme/store_infos.tpl',
      1 => 1654583688,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_62a04a8bcf86c9_50978309 (Smarty_Internal_Template $_smarty_tpl) {
?>
	<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['days_datas']->value, 'one_day');
$_smarty_tpl->tpl_vars['one_day']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['one_day']->value) {
$_smarty_tpl->tpl_vars['one_day']->do_else = false;
?>
	<p>
		<strong class="dark"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>$_smarty_tpl->tpl_vars['one_day']->value['day']),$_smarty_tpl ) );?>
: </strong> &nbsp;<span><?php echo $_smarty_tpl->tpl_vars['one_day']->value['hours'];?>
</span>
	</p>
	<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>

<?php }
}
