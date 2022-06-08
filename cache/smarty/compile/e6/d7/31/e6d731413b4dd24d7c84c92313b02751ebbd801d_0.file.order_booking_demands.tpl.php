<?php
/* Smarty version 3.1.39, created on 2022-06-08 07:06:47
  from '/var/app/current/themes/hotel-reservation-theme/_partials/order_booking_demands.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_62a04a874c8047_18786344',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'e6d731413b4dd24d7c84c92313b02751ebbd801d' => 
    array (
      0 => '/var/app/current/themes/hotel-reservation-theme/_partials/order_booking_demands.tpl',
      1 => 1654583688,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_62a04a874c8047_18786344 (Smarty_Internal_Template $_smarty_tpl) {
if ((isset($_smarty_tpl->tpl_vars['extraDemands']->value)) && $_smarty_tpl->tpl_vars['extraDemands']->value) {?>
	<?php $_smarty_tpl->_assignInScope('roomCount', 1);?>
	<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['extraDemands']->value, 'roomDemand');
$_smarty_tpl->tpl_vars['roomDemand']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['roomDemand']->value) {
$_smarty_tpl->tpl_vars['roomDemand']->do_else = false;
?>
		<div class="card">
			<div class="row">
				<div class="col-sm-12 demand_header">
					<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Room'),$_smarty_tpl ) );?>
 <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['roomCount']->value, ENT_QUOTES, 'UTF-8', true);?>

				</div>
				<div>
					<div class="col-sm-12 demand_detail">
						<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['roomDemand']->value['extra_demands'], 'demand');
$_smarty_tpl->tpl_vars['demand']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['demand']->value) {
$_smarty_tpl->tpl_vars['demand']->do_else = false;
?>
							<div class="row demand_detail_price_block">
								<div class="col-xs-6"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['demand']->value['name'], ENT_QUOTES, 'UTF-8', true);?>
</div>
								<div class="col-xs-6">
									<span class="pull-right">
										<?php if ($_smarty_tpl->tpl_vars['useTax']->value) {?>
											<?php ob_start();
echo htmlspecialchars($_smarty_tpl->tpl_vars['demand']->value['total_price_tax_incl'], ENT_QUOTES, 'UTF-8', true);
$_prefixVariable1=ob_get_clean();
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['displayPrice'][0], array( array('price'=>$_prefixVariable1),$_smarty_tpl ) );?>

										<?php } else { ?>
											<?php ob_start();
echo htmlspecialchars($_smarty_tpl->tpl_vars['demand']->value['total_price_tax_excl'], ENT_QUOTES, 'UTF-8', true);
$_prefixVariable2=ob_get_clean();
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['displayPrice'][0], array( array('price'=>$_prefixVariable2),$_smarty_tpl ) );?>

										<?php }?>
									</span>
								</div>
							</div>
						<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
					</div>
				</div>
			</div>
		</div>
		<?php $_smarty_tpl->_assignInScope('roomCount', $_smarty_tpl->tpl_vars['roomCount']->value+1);?>
	<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
}
}
}
