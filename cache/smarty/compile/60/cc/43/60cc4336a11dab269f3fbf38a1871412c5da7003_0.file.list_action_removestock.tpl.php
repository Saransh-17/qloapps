<?php
/* Smarty version 3.1.39, created on 2022-06-08 07:06:51
  from '/var/app/current/admin/themes/default/template/helpers/list/list_action_removestock.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_62a04a8b933cd1_42385679',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '60cc4336a11dab269f3fbf38a1871412c5da7003' => 
    array (
      0 => '/var/app/current/admin/themes/default/template/helpers/list/list_action_removestock.tpl',
      1 => 1654583688,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_62a04a8b933cd1_42385679 (Smarty_Internal_Template $_smarty_tpl) {
?><a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['href']->value, ENT_QUOTES, 'UTF-8', true);?>
" title="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['action']->value, ENT_QUOTES, 'UTF-8', true);?>
">
	<i class="icon-circle-arrow-down"></i> <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['action']->value, ENT_QUOTES, 'UTF-8', true);?>

</a>
<?php }
}
