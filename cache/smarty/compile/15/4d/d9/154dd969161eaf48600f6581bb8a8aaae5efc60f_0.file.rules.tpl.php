<?php
/* Smarty version 3.1.39, created on 2022-06-08 07:06:49
  from '/var/app/current/themes/hotel-reservation-theme/modules/referralprogram/views/templates/front/rules.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_62a04a89438b30_89948913',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '154dd969161eaf48600f6581bb8a8aaae5efc60f' => 
    array (
      0 => '/var/app/current/themes/hotel-reservation-theme/modules/referralprogram/views/templates/front/rules.tpl',
      1 => 1654583688,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_62a04a89438b30_89948913 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'/var/app/current/tools/smarty/plugins/modifier.replace.php','function'=>'smarty_modifier_replace',),));
?>

<h3><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Referral program rules','mod'=>'referralprogram'),$_smarty_tpl ) );?>
</h3>

<?php if ((isset($_smarty_tpl->tpl_vars['xml']->value))) {?>
<div id="referralprogram_rules">
	<?php if ((($_smarty_tpl->tpl_vars['xml']->value->body->{$_smarty_tpl->tpl_vars['paragraph']->value} !== null ))) {?><div class="rte"><?php echo smarty_modifier_replace(smarty_modifier_replace($_smarty_tpl->tpl_vars['xml']->value->body->{$_smarty_tpl->tpl_vars['paragraph']->value},"\'","'"),'\"','"');?>
</div><?php }?>
</div>
<?php }
}
}
