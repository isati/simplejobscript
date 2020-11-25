<?php
/* Smarty version 3.1.30, created on 2020-11-24 23:36:31
  from "/var/www/src/_tpl/default/err/error.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5fbd98ffee42a2_97538923',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '89e5cf821d9a2cedf72c47b307f8a6339c3a542a' => 
    array (
      0 => '/var/www/src/_tpl/default/err/error.tpl',
      1 => 1606257668,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:1.5/layout/sjs-header.tpl' => 1,
    'file:1.5/layout/sjs-footer.tpl' => 1,
  ),
),false)) {
function content_5fbd98ffee42a2_97538923 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:1.5/layout/sjs-header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>


<div class="main-content">
	<div class="container">
		<div class="row">
			<div class="col-md-12 col-xs-12">
				<h2>404</h2>
				<i class="fa fa-safari" aria-hidden="true"></i>
				<h3><?php echo $_smarty_tpl->tpl_vars['translations']->value['website_general']['404_msg'];?>
</h3>
				<p class="404reason">
				<?php echo $_smarty_tpl->tpl_vars['translations']->value['website_general']['404_txt_part_1'];?>
<br>
				<?php echo $_smarty_tpl->tpl_vars['translations']->value['website_general']['404_txt_part_2'];?>
<br>
				<?php echo $_smarty_tpl->tpl_vars['translations']->value['website_general']['404_txt_part_3'];?>
<br>
				<?php echo $_smarty_tpl->tpl_vars['translations']->value['website_general']['404_txt_part_4'];?>
 <a href="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
"><?php echo $_smarty_tpl->tpl_vars['translations']->value['website_general']['404_txt_part_5'];?>
</a> <?php echo $_smarty_tpl->tpl_vars['translations']->value['website_general']['404_txt_part_6'];?>

				</p>
			</div>
		</div>
	</div>
</div>

<?php $_smarty_tpl->_subTemplateRender("file:1.5/layout/sjs-footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
