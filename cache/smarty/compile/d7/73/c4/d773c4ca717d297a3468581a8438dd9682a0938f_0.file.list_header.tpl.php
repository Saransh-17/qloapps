<?php
/* Smarty version 3.1.39, created on 2022-06-08 07:06:48
  from '/var/app/current/admin/themes/default/template/controllers/orders/helpers/list/list_header.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_62a04a88b423b6_12276864',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'd773c4ca717d297a3468581a8438dd9682a0938f' => 
    array (
      0 => '/var/app/current/admin/themes/default/template/controllers/orders/helpers/list/list_header.tpl',
      1 => 1654583688,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_62a04a88b423b6_12276864 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>



<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_24297087762a04a88b24491_80822321', 'leadin');
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, "helpers/list/list_header.tpl");
}
/* {block 'leadin'} */
class Block_24297087762a04a88b24491_80822321 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'leadin' => 
  array (
    0 => 'Block_24297087762a04a88b24491_80822321',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

<?php if ((isset($_smarty_tpl->tpl_vars['updateOrderStatus_mode']->value)) && $_smarty_tpl->tpl_vars['updateOrderStatus_mode']->value) {?>
	<div class="panel">
		<div class="panel-heading">
			<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Choose an order status'),$_smarty_tpl ) );?>

		</div>
		<form action="<?php echo $_smarty_tpl->tpl_vars['REQUEST_URI']->value;?>
" method="post">
			<div class="radio">
				<label for="id_order_state">
					<select id="id_order_state" name="id_order_state">
<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['order_statuses']->value, 'order_status_name', false, 'id_order_state');
$_smarty_tpl->tpl_vars['order_status_name']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['id_order_state']->value => $_smarty_tpl->tpl_vars['order_status_name']->value) {
$_smarty_tpl->tpl_vars['order_status_name']->do_else = false;
?>
						<option value="<?php echo intval($_smarty_tpl->tpl_vars['id_order_state']->value);?>
"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['order_status_name']->value, ENT_QUOTES, 'UTF-8', true);?>
</option>
<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
					</select>
				</label>
			</div>
<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['POST']->value, 'value', false, 'key');
$_smarty_tpl->tpl_vars['value']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['key']->value => $_smarty_tpl->tpl_vars['value']->value) {
$_smarty_tpl->tpl_vars['value']->do_else = false;
?>
	<?php if (is_array($_smarty_tpl->tpl_vars['value']->value)) {?>
		<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['value']->value, 'val');
$_smarty_tpl->tpl_vars['val']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['val']->value) {
$_smarty_tpl->tpl_vars['val']->do_else = false;
?>
			<input type="hidden" name="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['key']->value, ENT_QUOTES, 'UTF-8', true);?>
[]" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['val']->value, ENT_QUOTES, 'UTF-8', true);?>
" />
		<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
	<?php } elseif (strtolower($_smarty_tpl->tpl_vars['key']->value) != 'id_order_state') {?>
			<input type="hidden" name="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['key']->value, ENT_QUOTES, 'UTF-8', true);?>
" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['value']->value, ENT_QUOTES, 'UTF-8', true);?>
" />

	<?php }
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
			<div class="panel-footer">
				<button type="submit" name="cancel" class="btn btn-default">
					<i class="icon-remove"></i>
					<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Cancel'),$_smarty_tpl ) );?>

				</button>
				<button type="submit" class="btn btn-default" name="submitUpdateOrderStatus">
					<i class="icon-check"></i>
					<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Update Order Status'),$_smarty_tpl ) );?>

				</button>
			</div>
		</form>
	</div>
<?php }
}
}
/* {/block 'leadin'} */
}
