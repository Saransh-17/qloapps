<?php
/* Smarty version 3.1.39, created on 2022-06-08 07:06:48
  from '/var/app/current/themes/hotel-reservation-theme/modules/blockcontact/nav.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_62a04a885abe40_31054213',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'dc628c8756ebb2d4b5d229bed62e4207c1bcf772' => 
    array (
      0 => '/var/app/current/themes/hotel-reservation-theme/modules/blockcontact/nav.tpl',
      1 => 1654583688,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_62a04a885abe40_31054213 (Smarty_Internal_Template $_smarty_tpl) {
?><div id="contact-link" <?php if ((isset($_smarty_tpl->tpl_vars['is_logged']->value)) && $_smarty_tpl->tpl_vars['is_logged']->value) {?> class="is_logged"<?php }?>>
	<a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['link']->value->getPageLink('contact',true), ENT_QUOTES, 'UTF-8', true);?>
" title="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Contact us','mod'=>'blockcontact'),$_smarty_tpl ) );?>
"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Contact us','mod'=>'blockcontact'),$_smarty_tpl ) );?>
</a>
</div>
<?php if ($_smarty_tpl->tpl_vars['telnumber']->value) {?>
	<span class="shop-phone<?php if ((isset($_smarty_tpl->tpl_vars['is_logged']->value)) && $_smarty_tpl->tpl_vars['is_logged']->value) {?> is_logged<?php }?>">
		<i class="icon-phone"></i><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Call us now:','mod'=>'blockcontact'),$_smarty_tpl ) );?>
 <strong><?php echo $_smarty_tpl->tpl_vars['telnumber']->value;?>
</strong>
	</span>
<?php }
}
}
