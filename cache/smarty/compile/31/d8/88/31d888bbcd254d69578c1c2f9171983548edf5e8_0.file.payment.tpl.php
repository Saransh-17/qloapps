<?php
/* Smarty version 3.1.39, created on 2022-06-08 07:06:48
  from '/var/app/current/themes/hotel-reservation-theme/modules/cashondelivery/views/templates/hook/payment.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_62a04a88e97a75_45238013',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '31d888bbcd254d69578c1c2f9171983548edf5e8' => 
    array (
      0 => '/var/app/current/themes/hotel-reservation-theme/modules/cashondelivery/views/templates/hook/payment.tpl',
      1 => 1654583688,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_62a04a88e97a75_45238013 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="row">
	<div class="col-xs-12">
        <p class="payment_module">
            <a class="cash" href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['link']->value->getModuleLink('cashondelivery','validation',array(),true), ENT_QUOTES, 'UTF-8', true);?>
" title="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Pay with cash on delivery (COD)','mod'=>'cashondelivery'),$_smarty_tpl ) );?>
" rel="nofollow">
            	<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Pay with cash on delivery (COD)','mod'=>'cashondelivery'),$_smarty_tpl ) );?>

            	<span>(<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'You pay for the merchandise upon delivery','mod'=>'cashondelivery'),$_smarty_tpl ) );?>
)</span>
            </a>
        </p>
    </div>
</div>
<?php }
}
