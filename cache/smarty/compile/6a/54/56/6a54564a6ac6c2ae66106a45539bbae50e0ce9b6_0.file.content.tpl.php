<?php
/* Smarty version 3.1.39, created on 2022-06-08 07:06:47
  from '/var/app/current/admin/themes/default/template/content.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_62a04a871475d9_23837015',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '6a54564a6ac6c2ae66106a45539bbae50e0ce9b6' => 
    array (
      0 => '/var/app/current/admin/themes/default/template/content.tpl',
      1 => 1654583688,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_62a04a871475d9_23837015 (Smarty_Internal_Template $_smarty_tpl) {
?><div id="ajax_confirmation" class="alert alert-success hide"></div>
<div id="ajaxBox" style="display:none"></div>


<div class="row">
	<div class="col-lg-12">
		<?php if ((isset($_smarty_tpl->tpl_vars['content']->value))) {?>
			<?php echo $_smarty_tpl->tpl_vars['content']->value;?>

		<?php }?>
	</div>
</div><?php }
}
