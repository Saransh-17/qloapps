<?php
/* Smarty version 3.1.39, created on 2022-06-08 07:06:47
  from '/var/app/current/admin/themes/default/template/controllers/logs/employee_field.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_62a04a87efbe50_10437983',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'babb7d479dda2955be40ffeacd3cdcd8dad81c95' => 
    array (
      0 => '/var/app/current/admin/themes/default/template/controllers/logs/employee_field.tpl',
      1 => 1654583688,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_62a04a87efbe50_10437983 (Smarty_Internal_Template $_smarty_tpl) {
?><span class="employee_avatar_small">
	<img class="imgm img-thumbnail" alt="" src="<?php echo $_smarty_tpl->tpl_vars['employee_image']->value;?>
" width="32" height="32" />
</span>
<?php echo $_smarty_tpl->tpl_vars['employee_name']->value;
}
}
