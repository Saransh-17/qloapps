<?php
/* Smarty version 3.1.39, created on 2022-06-08 07:06:50
  from '/var/app/current/admin/themes/default/template/controllers/stock_mvt/helpers/list/list_header.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_62a04a8a4a8530_40052094',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'e1cc114e874ba73e37b7cde2d7ad4a49003da1eb' => 
    array (
      0 => '/var/app/current/admin/themes/default/template/controllers/stock_mvt/helpers/list/list_header.tpl',
      1 => 1654583688,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_62a04a8a4a8530_40052094 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_91113952062a04a8a4a15e4_17312091', 'override_header');
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, "helpers/list/list_header.tpl");
}
/* {block 'override_header'} */
class Block_91113952062a04a8a4a15e4_17312091 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'override_header' => 
  array (
    0 => 'Block_91113952062a04a8a4a15e4_17312091',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

	<?php if (count($_smarty_tpl->tpl_vars['list_warehouses']->value) > 0) {?>
<div class="panel">
	<h3><i class="icon-cogs"></i> <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Filters'),$_smarty_tpl ) );?>
</h3>
	<div class="filter-stock">
			<form method="get" id="stock-movement-filter" class="form-horizontal">
				<input type="hidden" name="controller" value="AdminStockMvt" />
				<input type="hidden" name="token" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['token']->value, ENT_QUOTES, 'UTF-8', true);?>
" />
				<div class="form-group">
					<label for="id_warehouse" class="control-label col-lg-3"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Filter movements by warehouse:'),$_smarty_tpl ) );?>
</label>
					<div class="col-lg-9">					
						<select id="id_warehouse" name="id_warehouse" onchange="$('#stock-movement-filter').submit();">
							<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['list_warehouses']->value, 'warehouse');
$_smarty_tpl->tpl_vars['warehouse']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['warehouse']->value) {
$_smarty_tpl->tpl_vars['warehouse']->do_else = false;
?>
								<option <?php if ($_smarty_tpl->tpl_vars['warehouse']->value['id_warehouse'] == $_smarty_tpl->tpl_vars['current_warehouse']->value) {?>selected="selected"<?php }?> value="<?php echo $_smarty_tpl->tpl_vars['warehouse']->value['id_warehouse'];?>
"><?php echo $_smarty_tpl->tpl_vars['warehouse']->value['name'];?>
</option>
							<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
						</select>
					</div>
				</div>
			</form>
		<?php }?>
	</div>
</div>
<?php
}
}
/* {/block 'override_header'} */
}
