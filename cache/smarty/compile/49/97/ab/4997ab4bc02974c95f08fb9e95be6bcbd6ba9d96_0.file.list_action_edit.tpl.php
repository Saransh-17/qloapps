<?php
/* Smarty version 3.1.39, created on 2022-06-08 07:06:50
  from '/var/app/current/admin/themes/default/template/controllers/tax_rules/helpers/list/list_action_edit.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_62a04a8a6e3b63_86504011',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '4997ab4bc02974c95f08fb9e95be6bcbd6ba9d96' => 
    array (
      0 => '/var/app/current/admin/themes/default/template/controllers/tax_rules/helpers/list/list_action_edit.tpl',
      1 => 1654583688,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_62a04a8a6e3b63_86504011 (Smarty_Internal_Template $_smarty_tpl) {
?><a onclick="loadTaxRule('<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['id']->value, ENT_QUOTES, 'UTF-8', true);?>
'); return false;" href="#" class="btn btn-default">
	<i class="icon-pencil"></i>
	<?php echo $_smarty_tpl->tpl_vars['action']->value;?>

</a><?php }
}
