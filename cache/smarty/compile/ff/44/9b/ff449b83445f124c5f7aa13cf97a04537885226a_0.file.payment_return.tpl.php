<?php
/* Smarty version 3.1.39, created on 2022-06-08 07:06:48
  from '/var/app/current/themes/hotel-reservation-theme/modules/cheque/views/templates/hook/payment_return.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_62a04a88f0c3d6_00555004',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'ff449b83445f124c5f7aa13cf97a04537885226a' => 
    array (
      0 => '/var/app/current/themes/hotel-reservation-theme/modules/cheque/views/templates/hook/payment_return.tpl',
      1 => 1654583688,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_62a04a88f0c3d6_00555004 (Smarty_Internal_Template $_smarty_tpl) {
if ($_smarty_tpl->tpl_vars['status']->value == 'ok') {?>
	<p class="alert alert-success"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Your order on %s is complete.','sprintf'=>$_smarty_tpl->tpl_vars['shop_name']->value,'mod'=>'cheque'),$_smarty_tpl ) );?>
</p><br />
		<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Your check must include:','mod'=>'cheque'),$_smarty_tpl ) );?>
<br />
		- <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Payment amount.','mod'=>'cheque'),$_smarty_tpl ) );?>
 <span class="price"><strong><?php echo $_smarty_tpl->tpl_vars['total_to_pay']->value;?>
</strong></span>
		<br />- <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Payable to the order of','mod'=>'cheque'),$_smarty_tpl ) );?>
 <strong><?php if ($_smarty_tpl->tpl_vars['chequeName']->value) {
echo $_smarty_tpl->tpl_vars['chequeName']->value;
} else { ?>___________<?php }?></strong>
		<br />- <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Mail to','mod'=>'cheque'),$_smarty_tpl ) );?>
 <strong><?php if ($_smarty_tpl->tpl_vars['chequeAddress']->value) {
echo $_smarty_tpl->tpl_vars['chequeAddress']->value;
} else { ?>___________<?php }?></strong>
		<?php if (!(isset($_smarty_tpl->tpl_vars['reference']->value)) && (isset($_smarty_tpl->tpl_vars['id_order']->value)) && $_smarty_tpl->tpl_vars['id_order']->value) {?>
			<br />- <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Do not forget to insert your order number #%d.','sprintf'=>$_smarty_tpl->tpl_vars['id_order']->value,'mod'=>'cheque'),$_smarty_tpl ) );?>

		<?php } else { ?>
			<br />- <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Do not forget to insert your order reference %s.','sprintf'=>$_smarty_tpl->tpl_vars['reference']->value,'mod'=>'cheque'),$_smarty_tpl ) );?>

		<?php }
} else { ?>
	<p class="alert alert-warning">
		<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'We noticed a problem with your order. If you think this is an error, feel free to contact our','mod'=>'cheque'),$_smarty_tpl ) );?>

		<a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['link']->value->getPageLink('contact',true), ENT_QUOTES, 'UTF-8', true);?>
"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'customer service department.','mod'=>'cheque'),$_smarty_tpl ) );?>
</a>.
	</p>
<?php }
}
}
