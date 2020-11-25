<?php
/* Smarty version 3.1.30, created on 2020-11-24 23:36:27
  from "/var/www/src/sjs-admin/_tpl/login.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5fbd98fb83c746_77207866',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '0ee1664b58ff44225e9028b22f432150c8fc621c' => 
    array (
      0 => '/var/www/src/sjs-admin/_tpl/login.tpl',
      1 => 1606257668,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:login_header.tpl' => 1,
    'file:footer.tpl' => 1,
  ),
),false)) {
function content_5fbd98fb83c746_77207866 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:login_header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>


	<div class="form-box">
	
	<img class="adminLogo" src="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;
echo $_smarty_tpl->tpl_vars['SITE_LOGO_PATH']->value;?>
">

		<div class="login-recruiter-headline admin-login-top">

			<label class="login-form-title">Backoffice</label>
			<div class="subheadline">
				Site manager
			</p>

		</div>
		<div class="login-container admin-wrap" >
			<form id="login" method="post" action="<?php echo $_smarty_tpl->tpl_vars['BASE_URL_ADMIN']->value;?>
">
				
					<div class="form-group">
						<div class="group<?php if ($_smarty_tpl->tpl_vars['errors']->value['username']) {?> error<?php }?>">
							<input required placeholder="username" type="text" name="username" id="username" class="form-control grayInput" value="<?php echo $_POST['username'];?>
" />
						</div>
					</div>

					<div class="form-group">
						<div class="group<?php if ($_smarty_tpl->tpl_vars['errors']->value['password']) {?> error<?php }?>">
							<input required placeholder="password" type="password" name="password" class="form-control grayInput" id="password"value="" />
						</div>
					</div>

					<div class="form-group">
						<div class="negative-feedback">
						<?php echo $_smarty_tpl->tpl_vars['errors']->value['incorrect'];?>

						</div>
					</div>
					
					<div class="form-group">
						<div class="group_submit">
							<button class="btn btn-default btn-primary mbtn" type="submit" name="submit" id="submit"><i class="fa fa-check fa-lg" aria-hidden="true"></i></button>
							<input type="hidden" name="action" value="login" />
						</div>
					</div>
			
			</form>
		</div><!-- #content -->
	</div>

<?php $_smarty_tpl->_subTemplateRender("file:footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<?php }
}
