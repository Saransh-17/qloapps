<?php
/* Smarty version 3.1.39, created on 2022-06-08 07:06:50
  from '/var/app/current/admin/themes/default/template/controllers/supply_orders_receipt_history/helpers/list/list_header.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_62a04a8a683479_92467666',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '016d64d07f023d2c3a812549c5fda71973a0fb04' => 
    array (
      0 => '/var/app/current/admin/themes/default/template/controllers/supply_orders_receipt_history/helpers/list/list_header.tpl',
      1 => 1654583688,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_62a04a8a683479_92467666 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_50530717562a04a8a6829c8_54656174', 'override_header');
$_smarty_tpl->inheritance->endChild($_smarty_tpl, "helpers/list/list_header.tpl");
}
/* {block 'override_header'} */
class Block_50530717562a04a8a6829c8_54656174 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'override_header' => 
  array (
    0 => 'Block_50530717562a04a8a6829c8_54656174',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

<?php echo '<script'; ?>
 type="text/javascript">
$(document).ready(function() {
	$('input.quantity_received_today').live('click', function() {
		/* checks checkbox when the input is clicked */
		$(this).parents('tr:eq(0)').find('input[type=checkbox]').attr('checked', true);
	});
});
<?php echo '</script'; ?>
>
<?php
}
}
/* {/block 'override_header'} */
}
