<?php
/* Smarty version 3.1.39, created on 2022-06-08 07:06:48
  from '/var/app/current/themes/hotel-reservation-theme/modules/blocklayered/blocklayered-no-products.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_62a04a88616d95_85016972',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '9a737e6490793652fccb32fa5c1d532e1d371fc4' => 
    array (
      0 => '/var/app/current/themes/hotel-reservation-theme/modules/blocklayered/blocklayered-no-products.tpl',
      1 => 1654583688,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_62a04a88616d95_85016972 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="product_list">
	<p class="alert alert-warning"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'There are no products.','mod'=>'blocklayered'),$_smarty_tpl ) );?>
</p>
</div>
<?php }
}
