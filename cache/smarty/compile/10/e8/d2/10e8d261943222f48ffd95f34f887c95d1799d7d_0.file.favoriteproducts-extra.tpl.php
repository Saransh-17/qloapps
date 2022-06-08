<?php
/* Smarty version 3.1.39, created on 2022-06-08 07:06:49
  from '/var/app/current/themes/hotel-reservation-theme/modules/favoriteproducts/views/templates/hook/favoriteproducts-extra.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_62a04a890569c0_09048034',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '10e8d261943222f48ffd95f34f887c95d1799d7d' => 
    array (
      0 => '/var/app/current/themes/hotel-reservation-theme/modules/favoriteproducts/views/templates/hook/favoriteproducts-extra.tpl',
      1 => 1654583688,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_62a04a890569c0_09048034 (Smarty_Internal_Template $_smarty_tpl) {
if (!$_smarty_tpl->tpl_vars['isCustomerFavoriteProduct']->value && $_smarty_tpl->tpl_vars['is_logged']->value) {?>
<li id="favoriteproducts_block_extra_add" class="add">
	<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Add this product to my list of favorites.','mod'=>'favoriteproducts'),$_smarty_tpl ) );?>

</li>
<?php }
if ($_smarty_tpl->tpl_vars['isCustomerFavoriteProduct']->value && $_smarty_tpl->tpl_vars['is_logged']->value) {?>
<li id="favoriteproducts_block_extra_remove">
	<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Remove this product from my favorite\'s list. ','mod'=>'favoriteproducts'),$_smarty_tpl ) );?>

</li>
<?php }?>

<li id="favoriteproducts_block_extra_added">
	<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Remove this product from my favorite\'s list. ','mod'=>'favoriteproducts'),$_smarty_tpl ) );?>

</li>
<li id="favoriteproducts_block_extra_removed">
	<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Add this product to my list of favorites.','mod'=>'favoriteproducts'),$_smarty_tpl ) );?>

</li><?php }
}
