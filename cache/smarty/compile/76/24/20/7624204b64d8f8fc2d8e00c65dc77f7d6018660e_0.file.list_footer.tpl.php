<?php
/* Smarty version 3.1.39, created on 2022-06-08 07:06:49
  from '/var/app/current/admin/themes/default/template/controllers/products/combination/helpers/list/list_footer.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_62a04a8929ac51_92292180',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '7624204b64d8f8fc2d8e00c65dc77f7d6018660e' => 
    array (
      0 => '/var/app/current/admin/themes/default/template/controllers/products/combination/helpers/list/list_footer.tpl',
      1 => 1654583688,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_62a04a8929ac51_92292180 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>



<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1865619962a04a89288478_79088768', "after");
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_189684622262a04a8929a473_08268423', "endForm");
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, "helpers/list/list_footer.tpl");
}
/* {block "after"} */
class Block_1865619962a04a89288478_79088768 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'after' => 
  array (
    0 => 'Block_1865619962a04a89288478_79088768',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

	<div class="alert alert-info" style="display:block">
		<ul>
			<li><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'The blue row indicates the default combination.'),$_smarty_tpl ) );?>
</li>
			<li><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Each product that has combinations must have one default combination.'),$_smarty_tpl ) );?>
</li>
		</ul>
	</div>
<?php
}
}
/* {/block "after"} */
/* {block "endForm"} */
class Block_189684622262a04a8929a473_08268423 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'endForm' => 
  array (
    0 => 'Block_189684622262a04a8929a473_08268423',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

<?php
}
}
/* {/block "endForm"} */
}
