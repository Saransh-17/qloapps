<?php
/* Smarty version 3.1.39, created on 2022-06-08 07:06:49
  from '/var/app/current/themes/hotel-reservation-theme/modules/referralprogram/views/templates/hook/order-confirmation.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_62a04a8944e698_47945666',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'f9c336a723f8d0784bb4515f1d8ef9dfd62b99fa' => 
    array (
      0 => '/var/app/current/themes/hotel-reservation-theme/modules/referralprogram/views/templates/hook/order-confirmation.tpl',
      1 => 1654583688,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_62a04a8944e698_47945666 (Smarty_Internal_Template $_smarty_tpl) {
?>
<p class="success">
	<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Thanks to your order, your sponsor %1$s %2$s will earn a voucher worth %3$d off when this order is confirmed.','sprintf'=>array($_smarty_tpl->tpl_vars['sponsor_firstname']->value,$_smarty_tpl->tpl_vars['sponsor_lastname']->value,$_smarty_tpl->tpl_vars['discount']->value),'mod'=>'referralprogram'),$_smarty_tpl ) );?>

</p>
<br/><?php }
}
