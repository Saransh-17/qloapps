<?php
/* Smarty version 3.1.39, created on 2022-06-08 07:06:49
  from '/var/app/current/themes/hotel-reservation-theme/modules/loyalty/views/templates/hook/shopping-cart.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_62a04a8914c9d2_02628744',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'ada689305b69c973a910b11a241e27a2a655e866' => 
    array (
      0 => '/var/app/current/themes/hotel-reservation-theme/modules/loyalty/views/templates/hook/shopping-cart.tpl',
      1 => 1654583688,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_62a04a8914c9d2_02628744 (Smarty_Internal_Template $_smarty_tpl) {
?>
<!-- MODULE Loyalty -->
<p id="loyalty">
	<i class="icon-flag"></i>
	<?php if ($_smarty_tpl->tpl_vars['points']->value > 0) {?>
		<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'By checking out this shopping cart you can collect up to','mod'=>'loyalty'),$_smarty_tpl ) );?>
 <b>
		<?php if ($_smarty_tpl->tpl_vars['points']->value > 1) {
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'%d loyalty points','sprintf'=>$_smarty_tpl->tpl_vars['points']->value,'mod'=>'loyalty'),$_smarty_tpl ) );
} else {
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'%d loyalty point','sprintf'=>$_smarty_tpl->tpl_vars['points']->value,'mod'=>'loyalty'),$_smarty_tpl ) );
}?></b>
		<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'that can be converted into a voucher of','mod'=>'loyalty'),$_smarty_tpl ) );?>
 <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['convertPrice'][0], array( array('price'=>$_smarty_tpl->tpl_vars['voucher']->value),$_smarty_tpl ) );
if ((isset($_smarty_tpl->tpl_vars['guest_checkout']->value)) && $_smarty_tpl->tpl_vars['guest_checkout']->value) {?><sup>*</sup><?php }?>.<br />
		<?php if ((isset($_smarty_tpl->tpl_vars['guest_checkout']->value)) && $_smarty_tpl->tpl_vars['guest_checkout']->value) {?><sup>*</sup> <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Not available for Instant checkout order','mod'=>'loyalty'),$_smarty_tpl ) );
}?>
	<?php } else { ?>
		<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Add some products to your shopping cart to collect some loyalty points.','mod'=>'loyalty'),$_smarty_tpl ) );?>

	<?php }?>
</p>
<!-- END : MODULE Loyalty --><?php }
}
