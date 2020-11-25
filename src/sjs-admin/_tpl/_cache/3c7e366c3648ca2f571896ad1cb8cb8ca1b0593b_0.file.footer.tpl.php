<?php
/* Smarty version 3.1.30, created on 2020-11-24 23:36:27
  from "/var/www/src/sjs-admin/_tpl/footer.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5fbd98fb8ca197_61969303',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '3c7e366c3648ca2f571896ad1cb8cb8ca1b0593b' => 
    array (
      0 => '/var/www/src/sjs-admin/_tpl/footer.tpl',
      1 => 1606257668,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5fbd98fb8ca197_61969303 (Smarty_Internal_Template $_smarty_tpl) {
?>
	<!--</div> #wrap -->
	<div class="footer clear">
	</div><!-- .footer -->
	
	<div id="overlay"></div>
	<div id="messagesContainer"></div>
	
	<?php if ($_smarty_tpl->tpl_vars['LOAD_TAGL']->value == 'true') {?>
		<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
js/tags/tagl/assets/js/jquery-ui.js" type="text/javascript"><?php echo '</script'; ?>
>
		<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
js/tags/tagl/assets/js/rainbow-custom.min.js" type="text/javascript"><?php echo '</script'; ?>
>
		<!-- <?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
js/tags/tagl/src/taggle-ie8.js" type="text/javascript"><?php echo '</script'; ?>
>
		<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
js/tags/tagl/src/taggle-ie9.js" type="text/javascript"><?php echo '</script'; ?>
> -->
		<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
js/tags/tagl/src/taggle.js" type="text/javascript"><?php echo '</script'; ?>
>
	<?php }?>

	<?php if ($_smarty_tpl->tpl_vars['TAGL_INIT_ADD_JOBSEEKERS']->value == 'true') {?>
		<?php echo '<script'; ?>
 type="text/javascript">
		
		   new Taggle($('.skillsTaggle.textarea')[0], {
			    duplicateTagClass: 'bounce'
			});
	    
		<?php echo '</script'; ?>
>
	<?php }?>

	<?php if ($_smarty_tpl->tpl_vars['CURRENT_PAGE']->value == "categories") {?>
	<div id="help" style="display: none;">
		<p class="bold">Categories help</p>
		<ul>
			<li><strong>Name</strong>: The name that will be used in the template</li>
			<li><strong>Title</strong>:</li>
			<li><strong>Description</strong>:</li>
			<li><strong>Keywords</strong>:</li>
			<li><strong>URL</strong>:</li>
		</ul>
	</div>
	<?php }?>
	
	<?php echo '<script'; ?>
 type="text/javascript">
	
		$(document).ready(function() {
			Jobber.jobber_admin_url = "<?php echo $_smarty_tpl->tpl_vars['BASE_URL_ADMIN']->value;?>
";
			Jobber.jobber_base_url = "<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
";
			Jobber.I18n = <?php echo $_smarty_tpl->tpl_vars['translationsJson']->value;?>
;
			
			/* init tinyMce */
		}); 
	
	<?php echo '</script'; ?>
>

<?php if ($_smarty_tpl->tpl_vars['SM_PROFILES']->value) {
echo '<script'; ?>
 type="text/javascript">

	
		   	<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['SM_PROFILES']->value, 'row');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['row']->value) {
?>
		   	
		   	var obj = {id: '<?php echo $_smarty_tpl->tpl_vars['row']->value['id'];?>
', name: '<?php echo $_smarty_tpl->tpl_vars['row']->value['name'];?>
', icon: '<?php echo $_smarty_tpl->tpl_vars['row']->value['icon'];?>
'};
		   	Jobber.sm_profiles.push(obj);
		    
		   	<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

	

<?php echo '</script'; ?>
>
<?php }?>

</body>
</html>
<?php }
}
