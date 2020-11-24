<?php
/* Smarty version 3.1.30, created on 2020-11-24 23:17:02
  from "/var/www/src/_tpl/default/index.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5fbd946ecdca73_01775501',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'e1ea25a966796c466ba87737295a0a5f49cacbf4' => 
    array (
      0 => '/var/www/src/_tpl/default/index.tpl',
      1 => 1606257668,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:snippets/homepage-jobs.tpl' => 1,
    'file:snippets/listing-sitemap.tpl' => 1,
    'file:1.5/layout/sjs-footer.tpl' => 1,
  ),
),false)) {
function content_5fbd946ecdca73_01775501 (Smarty_Internal_Template $_smarty_tpl) {
echo '<?php
';?>// Start the session
session_start();
<?php echo '?>';?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title><?php if ($_smarty_tpl->tpl_vars['seo_title']->value) {
echo $_smarty_tpl->tpl_vars['seo_title']->value;
} else {
echo $_smarty_tpl->tpl_vars['html_title']->value;
}?></title>
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=0">

    <meta name="description" content="<?php if ($_smarty_tpl->tpl_vars['seo_desc']->value) {
echo $_smarty_tpl->tpl_vars['seo_desc']->value;
} else {
echo $_smarty_tpl->tpl_vars['meta_description']->value;
}?>" />
    <meta name="keywords" content="<?php if ($_smarty_tpl->tpl_vars['seo_keys']->value) {
echo $_smarty_tpl->tpl_vars['seo_keys']->value;
} else {
echo $_smarty_tpl->tpl_vars['meta_keywords']->value;
}?>" />

	  <!-- 
   Chrome and Opera Icons - to add support create your icon with different resolutions. Default is 192x192
     <link rel="icon" sizes="192x192" href="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
fav.png" >
    <link rel="icon" sizes="144x144" href="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
fav-144.png" >
    <link rel="icon" sizes="96x96" href="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
fav-96.png" >
    <link rel="icon" sizes="48x48" href="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
fav-48.png" >
  -->
  <link rel="icon" href="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
fav.png" >
  <!-- 
   Apple iOS icons
    <link rel="apple-touch-icon" sizes="76x76" href="touch-icon-ipad.png">
    <link rel="apple-touch-icon" sizes="120x120" href="touch-icon-iphone-retina.png">
    <link rel="apple-touch-icon" sizes="152x152" href="touch-icon-ipad-retina.png">
  -->
  <link rel="apple-touch-icon" href="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
fav-ios.png">
  <!-- iOS startup image -->
  <link rel="apple-touch-startup-image"  href="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
fav-startup.png">
  <!-- Apple additional meta tags -->
  <meta name="apple-mobile-web-app-title" content="<?php if ($_smarty_tpl->tpl_vars['seo_title']->value) {
echo $_smarty_tpl->tpl_vars['seo_title']->value;
} else {
echo $_smarty_tpl->tpl_vars['html_title']->value;
}?>">
  <meta name="apple-mobile-web-app-capable" content="yes">
  <meta name="apple-mobile-web-app-status-bar-style" content="black-translucent">
  <!-- Android web app capable -->
  <meta name="mobile-web-app-capable" content="yes">
  <!-- IE & Windows phone pin icons. Almost same size like ios so it is reused -->
  <meta name="msapplication-square150x150logo" content="fav-ios.png">

  <!-- facebook meta tags for sharing -->
  <meta property="og:locale" content="en_US" />
  <meta property="og:type" content="website" />
  <meta property="og:title" content="<?php if ($_smarty_tpl->tpl_vars['seo_title']->value) {
echo $_smarty_tpl->tpl_vars['seo_title']->value;
} else {
echo $_smarty_tpl->tpl_vars['html_title']->value;
}?>" />
  <meta property="og:description" content="<?php if ($_smarty_tpl->tpl_vars['seo_desc']->value) {
echo $_smarty_tpl->tpl_vars['seo_desc']->value;
} else {
echo $_smarty_tpl->tpl_vars['meta_description']->value;
}?>" />
  <meta property="og:url" content="<?php echo $_smarty_tpl->tpl_vars['PROTOCOL_URL']->value;?>
" />
  <meta property="og:site_name" content="<?php echo $_smarty_tpl->tpl_vars['SITE_NAME']->value;?>
" />
  <meta property="og:image" content="<?php echo $_smarty_tpl->tpl_vars['PROTOCOL_URL']->value;?>
share-image.png" />

  <!-- twitter metatags -->
  <meta name="twitter:card" content="summary_large_image"/>
  <meta name="twitter:description" content="<?php if ($_smarty_tpl->tpl_vars['seo_desc']->value) {
echo $_smarty_tpl->tpl_vars['seo_desc']->value;
} else {
echo $_smarty_tpl->tpl_vars['meta_description']->value;
}?>"/>
  <meta name="twitter:title" content="<?php if ($_smarty_tpl->tpl_vars['seo_title']->value) {
echo $_smarty_tpl->tpl_vars['seo_title']->value;
} else {
echo $_smarty_tpl->tpl_vars['html_title']->value;
}?>"/>
  <!-- add your twitter site 
  <meta name="twitter:site" content="@brand"/>
  --> 
  <meta name="twitter:domain" content="<?php echo $_smarty_tpl->tpl_vars['SITE_NAME']->value;?>
"/>
  <meta name="twitter:image" content="<?php echo $_smarty_tpl->tpl_vars['MAIN_URL']->value;?>
share-image.png" />
  
  <!-- RSS -->
  <link rel="alternate" type="application/rss+xml" title="<?php echo $_smarty_tpl->tpl_vars['SITE_NAME']->value;?>
 RSS Feed" href="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
rss">
 
	<link rel="canonical" href="http://<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
home" />

  <!-- IF ALL STYLES ARE REMOVED EXCEPT BOOTSTRAP, UNCOMMENT THIS STYLE, TO KEEP THE BASIC, WORKING WEB. READY TO BE CUSTOMIZED 
  <link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
_tpl/<?php echo $_smarty_tpl->tpl_vars['THEME']->value;?>
/css/saveStructure.css" type="text/css" /> -->
  <!-- ######################################################################################################################## -->
	
  <link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
_tpl/<?php echo $_smarty_tpl->tpl_vars['THEME']->value;?>
/1.5/css/bootstrap.min.css">
  <link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
_tpl/<?php echo $_smarty_tpl->tpl_vars['THEME']->value;?>
/1.5/css/style.css">
  <link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
_tpl/<?php echo $_smarty_tpl->tpl_vars['THEME']->value;?>
/1.5/css/reset.css">
  <link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
_tpl/<?php echo $_smarty_tpl->tpl_vars['THEME']->value;?>
/1.5/css/font-awesome.min.css">
  <link href="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
_tpl/<?php echo $_smarty_tpl->tpl_vars['THEME']->value;?>
/1.5/css/sjs-updates.css" rel="stylesheet">

  <link href="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
_tpl/<?php echo $_smarty_tpl->tpl_vars['THEME']->value;?>
/1.5/css/dev.css" rel="stylesheet">
<!--   <link href="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
_tpl/<?php echo $_smarty_tpl->tpl_vars['THEME']->value;?>
/1.5/css/customizer.css" rel="stylesheet"> -->

	<noscript><?php echo $_smarty_tpl->tpl_vars['translations']->value['website_general']['noscript_msg'];?>
</noscript>

<style type="text/css">
<?php echo $_smarty_tpl->tpl_vars['custom_css']->value;?>


div.header { background-image: url('<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;
echo $_smarty_tpl->tpl_vars['general_homepage_bgimage_path']->value;?>
') !important; }
/* color customizer */
#future, #opportunity, .sign-up-section, .btn, .btn-subc, .btn-home-jobs  {
  background: <?php echo $_smarty_tpl->tpl_vars['CUSTOMIZER_COLOR']->value;?>
 !important;
  border-color: <?php echo $_smarty_tpl->tpl_vars['CUSTOMIZER_COLOR']->value;?>
 !important;
}
.btn:hover, .btn-subc:hover, .btn-subc:focus, .btn:focus{
  background: #fff !important;
  color: <?php echo $_smarty_tpl->tpl_vars['CUSTOMIZER_COLOR']->value;?>
 !important;
}
.navbar-ur-lp ul li .sign-up-btn {
  border: 2px solid <?php echo $_smarty_tpl->tpl_vars['CUSTOMIZER_COLOR']->value;?>
 !important;
}
.navbar-ur-lp ul li .sign-up-btn, a.sign-up-btn:hover, a.sign-up-btn:focus, #candidates h3, #about h3, #employers h3, #stats h3 {
  color: <?php echo $_smarty_tpl->tpl_vars['CUSTOMIZER_COLOR']->value;?>
 !important;
}
.btn-view-jobs {
  background-color: #fff !important;
}
.btn-read-more {
  background-color: #fff !important;
  color: <?php echo $_smarty_tpl->tpl_vars['CUSTOMIZER_COLOR']->value;?>
 !important;
}
.btn-read-more:hover, .btn-read-more:focus {
  background: <?php echo $_smarty_tpl->tpl_vars['CUSTOMIZER_COLOR']->value;?>
 !important;
  color: #fff !important;
}
.testimonial .icon-prev, .testimonial .icon-next, .c-header-right ul li a:hover, .c-header-right ul li a:focus, .footer ul li a:hover, .footer ul li a:focus {
  color: <?php echo $_smarty_tpl->tpl_vars['CUSTOMIZER_COLOR']->value;?>
 !important;
}
.latest-jobs button:hover, .latest-jobs button:focus {
  background: #fff !important;
}
.navbar-toggle {
  background: <?php echo $_smarty_tpl->tpl_vars['CUSTOMIZER_COLOR']->value;?>
 !important;
  color: #fff !important;
  border-color: <?php echo $_smarty_tpl->tpl_vars['CUSTOMIZER_COLOR']->value;?>
 !important; 
}
.navbar-inverse .navbar-toggle .icon-bar {
  background-color: #fff !important;
}
.side-collapse, .navbar-inverse .navbar-nav>.open>a:hover, .navbar-inverse .navbar-nav>.open>a:focus {
  background: <?php echo $_smarty_tpl->tpl_vars['CUSTOMIZER_COLOR']->value;?>
 !important;
}
@media only screen and (max-device-width: 767px) and (min-device-width: 240px){
  .nav > li {
    border-color: rgba<?php echo $_smarty_tpl->tpl_vars['CUSTOMIZER_COLOR_RGBA']->value;?>
 !important;
  }
}
.form-group.position input#landing_title{
    box-sizing: border-box;
    height: 46px; 
    padding: 0 10px;
}
</style>


<?php echo '<script'; ?>
 type="text/javascript">
    window.cookieconsent_options = {"message":"<?php echo $_smarty_tpl->tpl_vars['translations']->value['cookie']['message'];?>
","dismiss":"<?php echo $_smarty_tpl->tpl_vars['translations']->value['cookie']['accept_message'];?>
","learnMore":"<?php echo $_smarty_tpl->tpl_vars['translations']->value['cookie']['more_info'];?>
","link":"/privacy-policy","theme":"light-bottom"};
<?php echo '</script'; ?>
>

<?php echo '<script'; ?>
 type="text/javascript" src="//cdnjs.cloudflare.com/ajax/libs/cookieconsent2/1.0.9/cookieconsent.min.js"><?php echo '</script'; ?>
>


</head>

<body>


<div id="wrapper">

<!-- //////////////// NAVBAR-UR ///////////// -->

<header role="banner" class="navbar navbar-fixed-top navbar-inverse">
      <div class="container">
        <div class="navbar-header">
          <button data-toggle="collapse-side" data-target=".side-collapse" data-target-2=".side-collapse-container" type="button" class="navbar-toggle pull-left"><span class="icon-bar"></span><span class="icon-bar"></span><span class="icon-bar"></span></button>
        </div>
        <div class="side-collapse in">
          <nav role="navigation" class="navbar-collapse">
            <ul class="nav navbar-nav">
              <li><a href="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;
echo $_smarty_tpl->tpl_vars['URL_JOBS']->value;?>
" ><?php echo $_smarty_tpl->tpl_vars['translations']->value['website_general']['top_menu_jobs'];?>
</a></li>
              <li><a href="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;
echo $_smarty_tpl->tpl_vars['URL_DASHBOARD']->value;?>
/<?php echo $_smarty_tpl->tpl_vars['URL_DASHBOARD_POST']->value;?>
" ><?php echo $_smarty_tpl->tpl_vars['translations']->value['dashboard_recruiter']['top_menu_postajob'];?>
</a></li>
              <?php if ($_smarty_tpl->tpl_vars['PROFILES_PLUGIN']->value == 'true') {?>
              <li><a href="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;
echo $_smarty_tpl->tpl_vars['URL_REGISTER_APPLICANTS']->value;?>
" ><?php echo $_smarty_tpl->tpl_vars['translations']->value['website_general']['top_menu_addcv'];?>
</a></li>
              <?php }?>
              <li><a href="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;
echo $_smarty_tpl->tpl_vars['ABOUT_URL']->value;?>
" ><?php echo $_smarty_tpl->tpl_vars['translations']->value['apply']['about'];?>
</a></li>
              <li><a href="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;
echo $_smarty_tpl->tpl_vars['URL_SIGN_UP']->value;?>
" ><?php echo $_smarty_tpl->tpl_vars['translations']->value['website_general']['top_menu_register_label'];?>
</a></li>
            </ul>
          </nav>
        </div>
      </div>
</header> <!-- main-menu-->

<div class="header">
  <div class="navbar-ur-lp">
    <div class="container-fluid">
      <div class="row">
        <div class="col-md-6 col-xs-12 c-header-left">
          <a href="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
"><img class="site-logo" src="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;
echo $_smarty_tpl->tpl_vars['SITE_LOGO_PATH']->value;?>
" style="width: <?php echo $_smarty_tpl->tpl_vars['general_homepage_logo_w']->value;?>
; margin: <?php echo $_smarty_tpl->tpl_vars['general_homepage_logo_margin']->value;?>
;" alt="Website's Logo"></a>
        </div>
        <div class="col-md-6 col-xs-12 c-header-right">
          <ul>
            <li><a href="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;
echo $_smarty_tpl->tpl_vars['URL_JOBS']->value;?>
" ><?php echo $_smarty_tpl->tpl_vars['translations']->value['website_general']['top_menu_jobs'];?>
</a></li>
            <li><a href="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;
echo $_smarty_tpl->tpl_vars['URL_DASHBOARD']->value;?>
/<?php echo $_smarty_tpl->tpl_vars['URL_DASHBOARD_POST']->value;?>
" ><?php echo $_smarty_tpl->tpl_vars['translations']->value['dashboard_recruiter']['top_menu_postajob'];?>
</a></li>
            <?php if ($_smarty_tpl->tpl_vars['PROFILES_PLUGIN']->value == 'true') {?>
            <li><a href="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;
echo $_smarty_tpl->tpl_vars['URL_REGISTER_APPLICANTS']->value;?>
" ><?php echo $_smarty_tpl->tpl_vars['translations']->value['website_general']['top_menu_addcv'];?>
</a></li>
            <?php }?>
            <li><a href="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;
echo $_smarty_tpl->tpl_vars['ABOUT_URL']->value;?>
" ><?php echo $_smarty_tpl->tpl_vars['translations']->value['apply']['about'];?>
</a></li>
            <li><a href="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;
echo $_smarty_tpl->tpl_vars['URL_SIGN_UP']->value;?>
"  class="sign-up-btn"><?php echo $_smarty_tpl->tpl_vars['translations']->value['website_general']['top_menu_register_label'];?>
</a></li>                
          </ul>
        </div>
      </div>
    </div>
  </div>
  <div class="header-content">
    <div class="container">
      <div class="row">
        <h1><?php echo $_smarty_tpl->tpl_vars['customizer_data']->value['header_title'];?>
</h1>
        <h2 class="lps"><?php echo $_smarty_tpl->tpl_vars['customizer_data']->value['header_subtitle'];?>
</h2>
        <div class="row header-filter">
          <div class="col-md-12 col-xs-12">

            <form method="post" action="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;
echo $_smarty_tpl->tpl_vars['URL_LANDING_SEARCHED']->value;?>
" role="form">

              <div class="hf">
                <div class="form-group position">
                  <label><?php echo $_smarty_tpl->tpl_vars['customizer_data']->value['header_what_title'];?>
</label>
                  <input placeholder="<?php echo $_smarty_tpl->tpl_vars['customizer_data']->value['header_what_placeholder'];?>
" id="landing_title" name="landing_title" type="text" class="form-control">
                </div>

                <?php if ($_smarty_tpl->tpl_vars['REMOTE_PORTAL']->value == 'deactivated') {?>
                <div class="form-group location">
                  <label><?php echo $_smarty_tpl->tpl_vars['customizer_data']->value['header_where_title'];?>
</label>
                   <form>
                     <select id="landing_location" name="landing_location">
                        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['cities']->value, 'value', false, 'id');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['id']->value => $_smarty_tpl->tpl_vars['value']->value) {
?>
                        <option value="<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
"><?php echo $_smarty_tpl->tpl_vars['value']->value;?>
</option>
                        <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

                     </select>   
                   </form>

                </div>
                <?php }?>

                <button type="submit" class="btn btn-subc "><?php echo $_smarty_tpl->tpl_vars['customizer_data']->value['header_search_btn_title'];?>
</button>

              </div>

            </form>

          </div>
        </div>
      </div>
    </div>
  </div>
</div> <!-- header-->

<!-- ///////////// MAIN-CONTENT ///////////// -->

<?php if ($_smarty_tpl->tpl_vars['more_jobs']->value) {?>
      <div id="candidates">
            <h2><?php echo $_smarty_tpl->tpl_vars['translations']->value['alljobs']['all_jobs'];?>
</h2>
      </div>

      <?php $_smarty_tpl->_subTemplateRender("file:snippets/homepage-jobs.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

      <div class="col-md-12 col-xs-12">
        <a href="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;
echo $_smarty_tpl->tpl_vars['URL_JOBS']->value;?>
" ><button type="button" class="btn btn-subc "><?php echo $_smarty_tpl->tpl_vars['translations']->value['companies']['view_jobs'];?>
</button></a>
      </div>
<?php }?>


<?php if ($_smarty_tpl->tpl_vars['customizer_data']->value['candidates_on_flag'] == '1') {?>
<div id="candidates">
  <div class="container">
    <div class="row">
      <h2><?php echo $_smarty_tpl->tpl_vars['customizer_data']->value['candidates_headline'];?>
</h2>
      <p><?php echo $_smarty_tpl->tpl_vars['customizer_data']->value['candidates_subheadline'];?>

      </p>
      
      <div class="col-md-4 col-xs-12 c-box">
        <img src="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
_tpl/default/1.5/images/emp-cand01.png">
        <h3><?php echo $_smarty_tpl->tpl_vars['customizer_data']->value['candidates_firstcol_headline'];?>
</h3>
        <h4><?php echo $_smarty_tpl->tpl_vars['customizer_data']->value['candidates_firstcol_subheadline'];?>
</h4>
      </div>

      <div class="col-md-4 col-xs-12 c-box">
        <img src="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
_tpl/default/1.5/images/emp-cand02.png">
        <h3><?php echo $_smarty_tpl->tpl_vars['customizer_data']->value['candidates_secondcol_headline'];?>
</h3>
        <h4><?php echo $_smarty_tpl->tpl_vars['customizer_data']->value['candidates_secondcol_subheadline'];?>
</h4>
      </div>

      <div class="col-md-4 col-xs-12 c-box">
        <img src="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
_tpl/default/1.5/images/emp-cand05.png">
        <h3><?php echo $_smarty_tpl->tpl_vars['customizer_data']->value['candidates_thirdcol_headline'];?>
</h3>
        <h4><?php echo $_smarty_tpl->tpl_vars['customizer_data']->value['candidates_thirdcol_subheadline'];?>
</h4>
      </div>
    </div>
  </div>
</div>

<div id="future">
  <div class="container">
    <div class="row">   
      <div class="col-md-12 col-xs-12 c-box">
        <h1><?php echo $_smarty_tpl->tpl_vars['customizer_data']->value['candidates_strip_headline'];?>
</h1>
        <h2><?php echo $_smarty_tpl->tpl_vars['customizer_data']->value['candidates_strip_subheadline'];?>
</h2>
        <a href="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;
echo $_smarty_tpl->tpl_vars['URL_JOBS']->value;?>
" ><button type="button" class="btn btn-subc btn-view-jobs"><?php echo $_smarty_tpl->tpl_vars['customizer_data']->value['candidates_strip_btn_title'];?>
</button></a>
      </div>
    </div>
  </div>
</div>
<?php }?>

<?php if ($_smarty_tpl->tpl_vars['customizer_data']->value['employers_on_flag'] == '1') {?>
<div id="employers">
  <div class="container">
    <div class="row">
      <h2><?php echo $_smarty_tpl->tpl_vars['customizer_data']->value['employers_headline'];?>
</h2>
      <p><?php echo $_smarty_tpl->tpl_vars['customizer_data']->value['employers_subheadline'];?>

      </p>
      
      <div class="col-md-4 col-xs-12 c-box">
        <img src="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
_tpl/default/1.5/images/emp-cand04.png">
        <h3><?php echo $_smarty_tpl->tpl_vars['customizer_data']->value['employers_firstcol_headline'];?>
</h3>
        <h4><?php echo $_smarty_tpl->tpl_vars['customizer_data']->value['employers_firstcol_subheadline'];?>
</h4>
      </div>

      <div class="col-md-4 col-xs-12 c-box">
        <img src="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
_tpl/default/1.5/images/emp-cand06.png">
        <h3><?php echo $_smarty_tpl->tpl_vars['customizer_data']->value['employers_secondcol_headline'];?>
</h3>
        <h4><?php echo $_smarty_tpl->tpl_vars['customizer_data']->value['employers_secondcol_subheadline'];?>
</h4>
      </div>

      <div class="col-md-4 col-xs-12 c-box">
        <img src="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
_tpl/default/1.5/images/emp-cand03.png">
        <h3><?php echo $_smarty_tpl->tpl_vars['customizer_data']->value['employers_thirdcol_headline'];?>
</h3>
        <h4><?php echo $_smarty_tpl->tpl_vars['customizer_data']->value['employers_thirdcol_subheadline'];?>
</h4>
      </div>
    </div>
  </div>
</div>

<div id="opportunity">
  <div class="container">
    <div class="row">   
      <div class="col-md-12 col-xs-12 c-box">
        <h1><?php echo $_smarty_tpl->tpl_vars['customizer_data']->value['employers_strip_headline'];?>
</h1>
        <h2><?php echo $_smarty_tpl->tpl_vars['customizer_data']->value['employers_strip_subheadline'];?>
</h2>
        <a href="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;
echo $_smarty_tpl->tpl_vars['URL_REGISTER_RECRUITERS']->value;?>
" ><button type="button" class="btn btn-subc btn-view-jobs"><?php echo $_smarty_tpl->tpl_vars['customizer_data']->value['employers_strip_btn_title'];?>
</button></a>
      </div>
    </div>
  </div>
</div>
<?php }?>

<?php if ($_smarty_tpl->tpl_vars['customizer_data']->value['about_on_flag'] == '1') {?>
<div id="about">
  <div class="container">
    <div class="row">
      <h2><?php echo $_smarty_tpl->tpl_vars['customizer_data']->value['about_headline'];?>
</h2>
      <p><?php echo $_smarty_tpl->tpl_vars['customizer_data']->value['about_subheadline'];?>

      </p>
      
      <div class="col-md-5 col-xs-12 c-box">
        <h4><?php echo $_smarty_tpl->tpl_vars['customizer_data']->value['about_leftcol'];?>
</h4>
      </div>

      <div class="col-md-2 col-xs-12 c-box">
        <img src="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;
echo $_smarty_tpl->tpl_vars['SITE_LOGO_PATH']->value;?>
">
      </div>

      <div class="col-md-5 col-xs-12 c-box">
        <h4><?php echo $_smarty_tpl->tpl_vars['customizer_data']->value['about_rightcol'];?>
</h4>
      </div>

       <div class="col-md-12 col-xs-12">
        <a href="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;
echo $_smarty_tpl->tpl_vars['ABOUT_URL']->value;?>
" ><button type="button" class="btn btn-subc btn-read-more"><?php echo $_smarty_tpl->tpl_vars['customizer_data']->value['about_readmore_btn_title'];?>
</button></a>
      </div>

    </div>
  </div>
</div>
<?php }?>

<?php if ($_smarty_tpl->tpl_vars['customizer_data']->value['test_on_flag'] == '1') {?>
<div class="testimonial">
  <div class="container">
  <h2><?php echo $_smarty_tpl->tpl_vars['customizer_data']->value['test_headline'];?>
</h2>

    <div id="testimonial-carousel" class="carousel slide">

      <ol class="carousel-indicators">
        <li data-target="#testimonial-carousel" data-slide-to="0" class="active"></li>
        <li data-target="#testimonial-carousel" data-slide-to="1"></li>
      </ol>
      <div class="carousel-inner">
        <div class="item active">
          <div class="container">
            <div class="carousel-caption">
              <img src="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
_tpl/default/1.5/images/tst-m.png">
              <br>
              <!-- TESTIMONIAL - change here -->
              <p>Maecenas lorem ligula, placerat et risus condimentum, porta porttitor eros.</p>
              <!-- TESTIMONIAL AUTHOR - change here-->
              <h3>Thomas Smith</h3>
            </div>
          </div>
        </div>
        <div class="item">
          <div class="container">
            <div class="carousel-caption">
              <img src="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
_tpl/default/1.5/images/tst-w.png">
              <br>
               <!-- TESTIMONIAL - change here -->
              <p>Nunc imperdiet massa vel quam molestie, eu sagittis felis lobortis. Curabitur auctor tellus facilisis.</p>
               <!-- TESTIMONIAL AUTHOR - change here-->
              <h3>Zoe Allen</h3>
            </div>
          </div>
        </div>
      </div>

      <a class="left carousel-control" href="#testimonial-carousel" data-slide="prev">
        <span class="icon-prev"><i class="fa fa-angle-left" aria-hidden="true"></i></span>
      </a>
      <a class="right carousel-control" href="#testimonial-carousel" data-slide="next">
        <span class="icon-next"><i class="fa fa-angle-right" aria-hidden="true"></i></span>
      </a>  
    </div>

  </div>
</div>
<?php }?>

<?php if ($_smarty_tpl->tpl_vars['customizer_data']->value['partners_on_flag'] == '1') {?>
<div id="partner">
  <div class="container">
  <h2><?php echo $_smarty_tpl->tpl_vars['customizer_data']->value['partners_headline'];?>
</h2>
  <img src="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;
echo $_smarty_tpl->tpl_vars['customizer_data']->value['partners_bgimage_path'];?>
">
  </div>
</div>
<?php }?>

<?php if ($_smarty_tpl->tpl_vars['customizer_data']->value['ta_on_flag'] == '1') {?>
<div class="sign-up-section">
  <div class="container">
    <div class="row">

      <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
        <div id="employers-signup">
          <div class="row">   
            <div class="col-lg-12  col-md-12 col-sm-12 col-xs-12 c-box">
              <h1><?php echo $_smarty_tpl->tpl_vars['customizer_data']->value['ta_emp_headline'];?>
</h1>
              <h2><?php echo $_smarty_tpl->tpl_vars['customizer_data']->value['ta_emp_subheadline'];?>
</h2>
              <a href="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;
echo $_smarty_tpl->tpl_vars['URL_REGISTER_RECRUITERS']->value;?>
" ><button type="button" class="btn btn-subc btn-view-jobs"><?php echo $_smarty_tpl->tpl_vars['customizer_data']->value['ta_emp_btn_label'];?>
</button></a>
            </div>
          </div>
        </div>
      </div>

      <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
        <div id="candidates-signup">
          <div class="row">   
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 c-box">

               <?php if ($_smarty_tpl->tpl_vars['PROFILES_PLUGIN']->value == 'true') {?>
                      <h1><?php echo $_smarty_tpl->tpl_vars['customizer_data']->value['ta_can_headline'];?>
</h1>
                      <h2><?php echo $_smarty_tpl->tpl_vars['customizer_data']->value['ta_can_subheadline'];?>
</h2>
                      <a href="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;
echo $_smarty_tpl->tpl_vars['URL_REGISTER_APPLICANTS']->value;?>
" ><button type="button" class="btn btn-subc btn-view-jobs"><?php echo $_smarty_tpl->tpl_vars['customizer_data']->value['ta_can_btn_label'];?>
</button></a>
               <?php } else { ?>
                      <h1><?php echo $_smarty_tpl->tpl_vars['customizer_data']->value['ta_can_headline'];?>
</h1>
                      <h2><?php echo $_smarty_tpl->tpl_vars['customizer_data']->value['ta_can_subheadline'];?>
</h2>
                       <a href="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;
echo $_smarty_tpl->tpl_vars['URL_JOBS']->value;?>
" ><button type="button" class="btn btn-subc btn-view-jobs"><?php echo $_smarty_tpl->tpl_vars['translations']->value['companies']['view_jobs'];?>
</button></a>
               <?php }?>

            </div>
          </div>
        </div>
      </div>

    </div>
  </div>
</div>
<?php }?>

<?php if ($_smarty_tpl->tpl_vars['customizer_data']->value['stats_on_flag'] == '1') {?>
<div id="stats">
  <div class="container">
  <h2><?php echo $_smarty_tpl->tpl_vars['customizer_data']->value['stats_headline'];?>
</h2>

    <div class="row">
      <div class="col-md-3 col-xs-6 c-box">
        <h5><i class="fa fa-check-circle-o" aria-hidden="true"></i></h5>
        <h3><div class="counter" data-count="<?php echo $_smarty_tpl->tpl_vars['customizer_data']->value['stats_first_numb'];?>
"><?php echo $_smarty_tpl->tpl_vars['customizer_data']->value['stats_first_numb'];?>
</div></h3>
        <h4><?php echo $_smarty_tpl->tpl_vars['customizer_data']->value['stats_first_col'];?>
</h4>
      </div>

      <div class="col-md-3 col-xs-6 c-box">
        <h5><i class="fa fa-check-circle-o" aria-hidden="true"></i></h5>
        <h3><div class="counter" data-count="<?php echo $_smarty_tpl->tpl_vars['customizer_data']->value['stats_second_numb'];?>
"><?php echo $_smarty_tpl->tpl_vars['customizer_data']->value['stats_second_numb'];?>
</div></h3>
        <h4><?php echo $_smarty_tpl->tpl_vars['customizer_data']->value['stats_sec_col'];?>
</h4>
      </div>

      <div class="col-md-3 col-xs-6 c-box">
        <h5><i class="fa fa-check-circle-o" aria-hidden="true"></i></h5>
        <h3><div class="counter" data-count="<?php echo $_smarty_tpl->tpl_vars['customizer_data']->value['stats_third_numb'];?>
"><?php echo $_smarty_tpl->tpl_vars['customizer_data']->value['stats_third_numb'];?>
</div></h3>
        <h4><?php echo $_smarty_tpl->tpl_vars['customizer_data']->value['stats_third_col'];?>
</h4>
      </div>

      <div class="col-md-3 col-xs-6 c-box">
        <h5><i class="fa fa-check-circle-o" aria-hidden="true"></i></h5>
        <h3><div class="counter" data-count="<?php echo $_smarty_tpl->tpl_vars['customizer_data']->value['stats_fourth_numb'];?>
"><?php echo $_smarty_tpl->tpl_vars['customizer_data']->value['stats_fourth_numb'];?>
</div></h3>
        <h4><?php echo $_smarty_tpl->tpl_vars['customizer_data']->value['stats_fourth_col'];?>
</h4>
      </div>

    </div>
  </div>
</div>
<?php }?>

<?php if ($_smarty_tpl->tpl_vars['customizer_data']->value['listings_on_flag'] == '1') {
$_smarty_tpl->_subTemplateRender("file:snippets/listing-sitemap.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<?php }?>

<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
_tpl/<?php echo $_smarty_tpl->tpl_vars['THEME']->value;?>
/1.5/js/jquery.min.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
_tpl/<?php echo $_smarty_tpl->tpl_vars['THEME']->value;?>
/1.5/js/bootstrap.min.js"><?php echo '</script'; ?>
>


<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
js/landing/landing.js"><?php echo '</script'; ?>
>


<?php echo '<script'; ?>
 type="text/javascript">
	$('.counter').each(function() {

  var $this = $(this),
      countTo = $this.attr('data-count');

  $({ countNum: $this.text()}).animate({
    countNum: countTo
  },

  {
    duration: 10000,
    easing:'linear',
    step: function() {
      $this.text(Math.floor(this.countNum));
    },
    complete: function() {
      $this.text(this.countNum);
    }

  });  
});
<?php echo '</script'; ?>
>


<?php $_smarty_tpl->_subTemplateRender("file:1.5/layout/sjs-footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

</body>
</html><?php }
}
