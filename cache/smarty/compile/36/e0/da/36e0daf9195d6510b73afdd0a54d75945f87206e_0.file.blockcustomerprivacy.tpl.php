<?php
/* Smarty version 3.1.39, created on 2022-06-08 07:06:48
  from '/var/app/current/themes/hotel-reservation-theme/modules/blockcustomerprivacy/blockcustomerprivacy.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_62a04a885df169_33872259',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '36e0daf9195d6510b73afdd0a54d75945f87206e' => 
    array (
      0 => '/var/app/current/themes/hotel-reservation-theme/modules/blockcustomerprivacy/blockcustomerprivacy.tpl',
      1 => 1654583688,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_62a04a885df169_33872259 (Smarty_Internal_Template $_smarty_tpl) {
?>
<div class="error_customerprivacy" style="color:red;"></div>
<fieldset class="account_creation customerprivacy">
	<h3 class="page-subheading">
		<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Customer data privacy','mod'=>'blockcustomerprivacy'),$_smarty_tpl ) );?>

	</h3>
	<div style="width:21px; float:left;">
		<div class="required checkbox">
			<input type="checkbox" value="1" id="customer_privacy" name="customer_privacy" autocomplete="off"/>
		</div>
	</div>
	<div style="width: 92%; float: left; margin-top: 8px;">
        <label for="customer_privacy" style="font-weight: normal;"><?php echo $_smarty_tpl->tpl_vars['privacy_message']->value;?>
</label>				
	</div>
</fieldset><?php }
}
