<?php
/* Smarty version 3.1.39, created on 2022-06-08 07:06:49
  from '/var/app/current/themes/hotel-reservation-theme/modules/productcomments/productcomments_reviews.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_62a04a89271185_57010358',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'a14101c5d2857d03698091b58bbc1178eaafb77b' => 
    array (
      0 => '/var/app/current/themes/hotel-reservation-theme/modules/productcomments/productcomments_reviews.tpl',
      1 => 1654583688,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_62a04a89271185_57010358 (Smarty_Internal_Template $_smarty_tpl) {
if ((isset($_smarty_tpl->tpl_vars['nbComments']->value)) && $_smarty_tpl->tpl_vars['nbComments']->value > 0) {?>
	<div class="comments_note" itemprop="aggregateRating" itemscope itemtype="http://schema.org/AggregateRating">
		<div class="star_content clearfix">
			<?php
$_smarty_tpl->tpl_vars['__smarty_section_i'] = new Smarty_Variable(array());
if (true) {
for ($__section_i_3_iteration = 1, $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] = 0; $__section_i_3_iteration <= 5; $__section_i_3_iteration++, $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']++){
?>
				<?php if ($_smarty_tpl->tpl_vars['averageTotal']->value <= (isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)) {?>
					<div class="star"></div>
				<?php } else { ?>
					<div class="star star_on"></div>
				<?php }?>
			<?php
}
}
?>
            <meta itemprop="worstRating" content = "0" />
            <meta itemprop="ratingValue" content = "<?php if ((isset($_smarty_tpl->tpl_vars['ratings']->value['avg']))) {
echo htmlspecialchars(round($_smarty_tpl->tpl_vars['ratings']->value['avg'],1), ENT_QUOTES, 'UTF-8', true);
} else {
echo htmlspecialchars(round($_smarty_tpl->tpl_vars['averageTotal']->value,1), ENT_QUOTES, 'UTF-8', true);
}?>" />
            <meta itemprop="bestRating" content = "5" />
		</div>
		<span class="nb-comments"><span itemprop="reviewCount"><?php echo $_smarty_tpl->tpl_vars['nbComments']->value;?>
</span> <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Review(s)','mod'=>'productcomments'),$_smarty_tpl ) );?>
</span>
	</div>
<?php }
}
}
