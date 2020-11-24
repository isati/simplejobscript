<?php
/* Smarty version 3.1.30, created on 2020-11-24 23:17:02
  from "/var/www/src/_tpl/default/snippets/listing-sitemap.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5fbd946ee002e2_26669774',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '66a59c57579affe6641b00a3185a7053e3a4461d' => 
    array (
      0 => '/var/www/src/_tpl/default/snippets/listing-sitemap.tpl',
      1 => 1606257668,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5fbd946ee002e2_26669774 (Smarty_Internal_Template $_smarty_tpl) {
if ($_smarty_tpl->tpl_vars['INDEED']->value == 'deactivated' || $_smarty_tpl->tpl_vars['INDEED_BOTH_JOBS_FLAG']->value) {?>
<div id="listing">
  <div class="container">
  <h2><?php echo $_smarty_tpl->tpl_vars['translations']->value['website_general']['listings'];?>
</h2>
  <div class="homepage-by"><?php echo $_smarty_tpl->tpl_vars['translations']->value['website_general']['by'];?>
</div><br /><br />

    <div class="row">
      <div class="col-md-4 col-xs-6 c-box">
        <h4><?php echo $_smarty_tpl->tpl_vars['translations']->value['searchbar']['job_types'];?>
</h4>
        <ul>
          <?php
$__section_tmp_0_saved = isset($_smarty_tpl->tpl_vars['__smarty_section_tmp']) ? $_smarty_tpl->tpl_vars['__smarty_section_tmp'] : false;
$__section_tmp_0_loop = (is_array(@$_loop=$_smarty_tpl->tpl_vars['types']->value) ? count($_loop) : max(0, (int) $_loop));
$__section_tmp_0_total = $__section_tmp_0_loop;
$_smarty_tpl->tpl_vars['__smarty_section_tmp'] = new Smarty_Variable(array());
if ($__section_tmp_0_total != 0) {
for ($__section_tmp_0_iteration = 1, $_smarty_tpl->tpl_vars['__smarty_section_tmp']->value['index'] = 0; $__section_tmp_0_iteration <= $__section_tmp_0_total; $__section_tmp_0_iteration++, $_smarty_tpl->tpl_vars['__smarty_section_tmp']->value['index']++){
?>
              <li><a href="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;
echo $_smarty_tpl->tpl_vars['URL_JOBS']->value;?>
/<?php echo $_smarty_tpl->tpl_vars['types']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_tmp']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_tmp']->value['index'] : null)]['var_name'];?>
/" target="_blank"><?php echo $_smarty_tpl->tpl_vars['types']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_tmp']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_tmp']->value['index'] : null)]['name'];?>
 <span class="bracket">(<?php echo $_smarty_tpl->tpl_vars['types']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_tmp']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_tmp']->value['index'] : null)]['job_count'];?>
)</span></a></li>
           <?php
}
}
if ($__section_tmp_0_saved) {
$_smarty_tpl->tpl_vars['__smarty_section_tmp'] = $__section_tmp_0_saved;
}
?>
        </ul>
      </div>

      <?php if ($_smarty_tpl->tpl_vars['dropdown_cats']->value) {?>
      <div class="col-md-4 col-xs-6 c-box">
      <h4><?php echo $_smarty_tpl->tpl_vars['translations']->value['alljobs']['jobs_categories'];?>
</h4>
        <ul>
           <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['dropdown_cats']->value, 'obj', false, 'name');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['name']->value => $_smarty_tpl->tpl_vars['obj']->value) {
?>
            <li><a href="/<?php echo $_smarty_tpl->tpl_vars['URL_JOBS']->value;?>
/<?php echo $_smarty_tpl->tpl_vars['obj']->value->url;?>
" target="_blank"><?php echo $_smarty_tpl->tpl_vars['name']->value;?>
 <span class="bracket">(<?php echo $_smarty_tpl->tpl_vars['obj']->value->jobs;?>
)</span> </a></li>
           <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

        </ul>
      </div>
      <?php }?>

      <?php if ($_smarty_tpl->tpl_vars['REMOTE_PORTAL']->value == 'deactivated') {?>
        <?php if ($_smarty_tpl->tpl_vars['dropdown_countries']->value) {?>
        <div class="col-md-4 col-xs-6 c-box">
        <h4><?php echo $_smarty_tpl->tpl_vars['translations']->value['alljobs']['cities'];?>
</h4>
          <ul>
               <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['dropdown_countries']->value, 'obj', false, 'name');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['name']->value => $_smarty_tpl->tpl_vars['obj']->value) {
?>
                <li><a href="/<?php echo $_smarty_tpl->tpl_vars['URL_JOBS_IN_CITY']->value;?>
/<?php echo $_smarty_tpl->tpl_vars['obj']->value->url;?>
" target="_blank"><?php echo $_smarty_tpl->tpl_vars['name']->value;?>
 <span class="bracket">(<?php echo $_smarty_tpl->tpl_vars['obj']->value->jobs_count;?>
)</span> </a></li>
              <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

          </ul>
        </div>
        <?php }?>
      <?php }?>

    </div>
  </div>
</div>
<?php }
}
}
