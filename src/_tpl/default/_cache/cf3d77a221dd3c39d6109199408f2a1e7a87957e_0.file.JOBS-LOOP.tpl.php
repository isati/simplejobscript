<?php
/* Smarty version 3.1.30, created on 2020-11-24 23:17:02
  from "/var/www/src/_tpl/default/jobs/JOBS-LOOP.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5fbd946edbc9e0_48289392',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'cf3d77a221dd3c39d6109199408f2a1e7a87957e' => 
    array (
      0 => '/var/www/src/_tpl/default/jobs/JOBS-LOOP.tpl',
      1 => 1606257668,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5fbd946edbc9e0_48289392 (Smarty_Internal_Template $_smarty_tpl) {
if (@constant('ADSENSE') == 'true') {?>
	<?php if (!((isset($_smarty_tpl->tpl_vars['__smarty_foreach_jobsLoop']->value['iteration']) ? $_smarty_tpl->tpl_vars['__smarty_foreach_jobsLoop']->value['iteration'] : null) % @constant('ADSENSE_LISTING_COUNT'))) {?> 
	<?php $_smarty_tpl->_subTemplateRender(((string)$_smarty_tpl->tpl_vars['adsense_listing_leaderboard']->value), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
?>

	<?php }
}?>
	
<div class="row latest-jobs search-result <?php if ($_smarty_tpl->tpl_vars['job']->value['spotlight'] == "1") {?>spotlight<?php }?>">
	
	<div class="col-md-12 wish-list">
	<?php if ($_smarty_tpl->tpl_vars['FAVORITES_PLUGIN']->value && $_smarty_tpl->tpl_vars['FAVORITES_PLUGIN']->value == 'true') {?>
		<?php if (in_array($_smarty_tpl->tpl_vars['job']->value['id'],$_smarty_tpl->tpl_vars['favourites_job_ids']->value)) {?>
			<span id="desk-favourites-block-<?php echo $_smarty_tpl->tpl_vars['job']->value['id'];?>
" ><a title="<?php echo $_smarty_tpl->tpl_vars['translations']->value['alljobs']['favourites_tooltip_remove'];?>
" href="#" onclick="return SimpleJobScript.removeFromFavourites(<?php echo $_smarty_tpl->tpl_vars['job']->value['id'];?>
, '<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
_tpl/<?php echo $_smarty_tpl->tpl_vars['THEME']->value;?>
/img/', 'desk-');"><i class="fa fa-heart fa-lg ml10" aria-hidden="true"></i></a></span>
 		<?php } else { ?>
 			<span id="desk-favourites-block-<?php echo $_smarty_tpl->tpl_vars['job']->value['id'];?>
" ><a title="<?php echo $_smarty_tpl->tpl_vars['translations']->value['alljobs']['favourites_tooltip_add'];?>
" href="#" onclick="return SimpleJobScript.addToFavourites(<?php echo $_smarty_tpl->tpl_vars['job']->value['id'];?>
, '<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
_tpl/<?php echo $_smarty_tpl->tpl_vars['THEME']->value;?>
/img/', 'desk-');"><i class="fa fa-heart-o fa-lg ml10" aria-hidden="true"></i></a></span>
 		<?php }?>
 	<?php } else { ?>
 		&nbsp;
	<?php }?>
	</div>

	<?php if (!$_smarty_tpl->tpl_vars['COMPANY_JOB_LISTING']->value == '1') {?>
	<div class="col-md-1 colx-xs-12">
			<?php if ($_smarty_tpl->tpl_vars['job']->value['public_profile_flag'] == '1') {?>
			<a href="<?php echo $_smarty_tpl->tpl_vars['job']->value['company_detail_url'];?>
" target="_blank">
				<div class="listing-logo">
					<img src="/<?php echo $_smarty_tpl->tpl_vars['job']->value['company_logo_path'];?>
" alt="Company logo" />
				</div>
			</a>	
			<?php } else { ?>
				<div class="listing-logo">
					<img src="/<?php echo $_smarty_tpl->tpl_vars['job']->value['company_logo_path'];?>
" alt="Company logo" />
				</div>
			<?php }?>
	</div>
	<?php }?>
	<br />

	<div class="col-md-7 colx-xs-12">

		<a rel="canonical" href="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;
echo $_smarty_tpl->tpl_vars['URL_JOB']->value;?>
/<?php echo $_smarty_tpl->tpl_vars['job']->value['url_title'];?>
-<?php echo $_smarty_tpl->tpl_vars['job']->value['location_asci'];?>
/<?php echo $_smarty_tpl->tpl_vars['job']->value['id'];?>
" >
			<h2 class="jobl-title"><?php echo $_smarty_tpl->tpl_vars['job']->value['title'];?>
 <?php if ($_smarty_tpl->tpl_vars['job']->value['new_flag']) {?><span class="new"><?php echo $_smarty_tpl->tpl_vars['translations']->value['job_detail_section']['new'];?>
</span><?php }?> </h2>
		</a>

		<ul>
			<li><span><i class="fa fa-building" aria-hidden="true"></i></span><?php echo $_smarty_tpl->tpl_vars['job']->value['company'];?>
</li>
			<li><span><i class="fa fa-map-marker" aria-hidden="true"></i></span><?php echo $_smarty_tpl->tpl_vars['job']->value['location'];?>
</li>
		</ul>
		<ul>
			<li><span><i class="fa fa-braille" aria-hidden="true"></i></span><?php echo $_smarty_tpl->tpl_vars['job']->value['job_type'];?>
</li>
			
			<li><span><i class="fa fa-calendar" aria-hidden="true"></i></span><?php echo $_smarty_tpl->tpl_vars['job']->value['created_on'];?>
</li>
		</ul>
	</div>
	<div class="col-md-4 colx-xs-12">

		<?php if ($_smarty_tpl->tpl_vars['job']->value['salary']) {?>
		<h4><span><?php echo $_smarty_tpl->tpl_vars['job']->value['salary'];?>
</span></h4>
		<?php }?>

		<a rel="canonical" href="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;
echo $_smarty_tpl->tpl_vars['URL_JOB']->value;?>
/<?php echo $_smarty_tpl->tpl_vars['job']->value['url_title'];?>
-<?php echo $_smarty_tpl->tpl_vars['job']->value['location_asci'];?>
/<?php echo $_smarty_tpl->tpl_vars['job']->value['id'];?>
">
			<button type="button" class="btn"><?php echo $_smarty_tpl->tpl_vars['translations']->value['website_general']['more'];?>
</button>
		</a>

	</div>
	<div class="row">
		<div class="col-md-12 xol-xs-12">
				<a rel="canonical" href="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;
echo $_smarty_tpl->tpl_vars['URL_JOB']->value;?>
/<?php echo $_smarty_tpl->tpl_vars['job']->value['url_title'];?>
-<?php echo $_smarty_tpl->tpl_vars['job']->value['location_asci'];?>
/<?php echo $_smarty_tpl->tpl_vars['job']->value['id'];?>
" >
	 				<p><?php echo $_smarty_tpl->tpl_vars['job']->value['description_listing'];?>
</p>
	 			</a>
		</div>
	</div>
</div><?php }
}
