<?php
/* Smarty version 3.1.30, created on 2020-11-24 23:36:20
  from "/var/www/src/_tpl/default/1.5/layout/sjs-header.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5fbd98f43b6997_38042851',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '61472d67fbb83431c8ebb719d1679fb5a74e3b2d' => 
    array (
      0 => '/var/www/src/_tpl/default/1.5/layout/sjs-header.tpl',
      1 => 1606257668,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5fbd98f43b6997_38042851 (Smarty_Internal_Template $_smarty_tpl) {
?>
<!doctype html>
<html lang="en" prefix="og: http://ogp.me/ns#">
<head>
	<title><?php if ($_smarty_tpl->tpl_vars['seo_title']->value) {
echo $_smarty_tpl->tpl_vars['seo_title']->value;
} else {
echo $_smarty_tpl->tpl_vars['html_title']->value;
}?></title>
	<meta charset="utf-8">
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

<?php if ($_smarty_tpl->tpl_vars['job_url']->value) {?>
  <meta property="og:type"  content="website" />
  <meta property="og:url"  content="<?php echo $_smarty_tpl->tpl_vars['job_url']->value;?>
" />
  <meta property="og:title" content="<?php echo $_smarty_tpl->tpl_vars['seo_title']->value;?>
" />
  <meta property="og:description" content="<?php if ($_smarty_tpl->tpl_vars['seo_desc']->value) {
echo $_smarty_tpl->tpl_vars['seo_desc']->value;
} else {
echo $_smarty_tpl->tpl_vars['meta_description']->value;
}?>" />
  <meta property="og:site_name" content="<?php echo $_smarty_tpl->tpl_vars['SITE_NAME']->value;?>
"/>
  <meta property="og:image" content="<?php echo $_smarty_tpl->tpl_vars['PROTOCOL_URL']->value;
echo $_smarty_tpl->tpl_vars['job']->value['company_logo_path'];?>
" />
<?php } else { ?>
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
<?php }?>

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
  <meta name="twitter:site" content="@yourbrand"/>
  -->
  <meta name="twitter:domain" content="<?php echo $_smarty_tpl->tpl_vars['SITE_NAME']->value;?>
"/>
  <meta name="twitter:image" content="<?php echo $_smarty_tpl->tpl_vars['PROTOCOL_URL']->value;?>
share-image.png" />
  <meta http-equiv="X-UA-Compatible" content="IE=11">

  <!-- RSS -->
  <link rel="alternate" type="application/rss+xml" title="<?php echo $_smarty_tpl->tpl_vars['SITE_NAME']->value;?>
 RSS Feed" href="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
rss">


  <!-- CSS -->

  <!--
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">

  <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet"> -->

  <!-- Attached CSS -->
  <link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
_tpl/<?php echo $_smarty_tpl->tpl_vars['THEME']->value;?>
/1.5/css/pricing/price-tables.css" type="text/css" />
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
js/tags/tagl/assets/css/taggle.css" rel="stylesheet">
  <link href="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
_tpl/<?php echo $_smarty_tpl->tpl_vars['THEME']->value;?>
/1.5/css/dev.css" rel="stylesheet">
  <link href="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
_tpl/<?php echo $_smarty_tpl->tpl_vars['THEME']->value;?>
/1.5/css/sjs-updates.css" rel="stylesheet">

  <noscript><?php echo $_smarty_tpl->tpl_vars['translations']->value['website_general']['noscript_msg'];?>
</noscript>

<style type="text/css">
<?php echo $_smarty_tpl->tpl_vars['custom_css']->value;?>


.splash { background-image: url('<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;
echo $_smarty_tpl->tpl_vars['jobs_subheader_bg_path']->value;?>
') !important; }
/* color customizer */
.static-page strong, .footer ul li a:hover, .footer ul li a:focus, .nav-menu ul li a:hover, .nav-menu ul li a:focus, .nav-reg ul li a:hover, .nav-reg ul li a:focus, .navbar-ur .row .nav-menu .fa, #package-wrapper .trial, #package-wrapper li::before, .rss-ul li a, .green, .signup-page .si-emp:hover, .signup-page .si-emp:focus, .checkbox-custom:checked:after, .action-req .caution p span, .search-filter .filter-menu .fa, div.filterHeadline, a.btn-ns:hover, a.btn-ns:focus, a.btn-eu:hover, a.btn-eu:focus, .detail-font strong, .limr, #applicantCvLabel:hover, #applicantCvLabel:focus, #applicantCvLabel {
  color: <?php echo $_smarty_tpl->tpl_vars['CUSTOMIZER_COLOR']->value;?>
 !important;
}
.navbar-ur .row .nav-reg ul #sign-up-btn, .checkbox-custom, .create-profile .row .tos input, #jobpopup .tos input, .subscribe-tos input, #applicantCvLabel:hover, #applicantCvLabel:focus, #applicantCvLabel {
  border-color: <?php echo $_smarty_tpl->tpl_vars['CUSTOMIZER_COLOR']->value;?>
 !important;
}
.contact-us .btn, #pricing-btn, .btn, .signup-page .su-emp, .checkbox-green:checked {
  background: <?php echo $_smarty_tpl->tpl_vars['CUSTOMIZER_COLOR']->value;?>
 !important;
  border-color: <?php echo $_smarty_tpl->tpl_vars['CUSTOMIZER_COLOR']->value;?>
 !important;
}

.contact-us .btn:hover, .contact-us .btn:focus, #pricing-btn:hover, #pricing-btn:focus, .btn:hover, .btn:focus, .signup-page .su-emp:hover, .signup-page .su-emp:focus, .btn-back, .btn-social {
  background: #fff !important;
  color: <?php echo $_smarty_tpl->tpl_vars['CUSTOMIZER_COLOR']->value;?>
 !important;
}
#package-wrapper .brilliant {
   color: <?php echo $_smarty_tpl->tpl_vars['CUSTOMIZER_COLOR']->value;?>
 !important;
   border-color: <?php echo $_smarty_tpl->tpl_vars['CUSTOMIZER_COLOR']->value;?>
 !important;
}
#package-wrapper .price {
 color: #565656 !important;
}
#package-wrapper .brilliant::before {
  border-color: <?php echo $_smarty_tpl->tpl_vars['CUSTOMIZER_COLOR']->value;?>
 transparent transparent transparent !important;
}
.taggle_list .taggle, .side-collapse, .navbar-inverse .navbar-nav>.open>a:hover, .navbar-inverse .navbar-nav>.open>a:focus, .candidate-v2 .col-md-2 {
  background: <?php echo $_smarty_tpl->tpl_vars['CUSTOMIZER_COLOR']->value;?>
 !important;
}
.taggle_list .taggle:hover, .taggle_list .taggle:focus, #cvLabel, .action-req .caution, .action-req .caution .fa-exclamation-triangle, .checkbox-green, div#jobtypee p, .clearallfilters span {
   color: <?php echo $_smarty_tpl->tpl_vars['CUSTOMIZER_COLOR']->value;?>
 !important;
   border-color: <?php echo $_smarty_tpl->tpl_vars['CUSTOMIZER_COLOR']->value;?>
 !important;
}
.pagination-cl .center-btn .btn-pg, .pagination-cl .center-btn .btn {
  background: #C7C7C7 !important;
}
.pagination-cl .center-btn .btn:hover, .pagination-cl .center-btn .btn:focus {
  color: #fff !important;
  background: <?php echo $_smarty_tpl->tpl_vars['CUSTOMIZER_COLOR']->value;?>
 !important;
}

.pagination-cl .center-btn .active {
  background: <?php echo $_smarty_tpl->tpl_vars['CUSTOMIZER_COLOR']->value;?>
 !important;
}
.btn-next, .btn-back:hover, .btn-back:focus, .btn-social:hover, .btn-social:focus, #jobpopup .btn-ns.active, #jobpopup .btn-eu.active, #jobpopup .btn-modal-a, .navbar-toggle {
  background: <?php echo $_smarty_tpl->tpl_vars['CUSTOMIZER_COLOR']->value;?>
 !important;
  color: #fff !important;
  border-color: <?php echo $_smarty_tpl->tpl_vars['CUSTOMIZER_COLOR']->value;?>
 !important;
}
#jobpopup .btn-modal-c:hover , #jobpopup .btn-modal-c:focus {
  color: #4A4A4A !important;
}
.btn-next:hover, .btn-next:focus {
  background: #fff !important;
  color: <?php echo $_smarty_tpl->tpl_vars['CUSTOMIZER_COLOR']->value;?>
 !important;
}
#jobpopup .btn-modal-c {
  background: #EEEEEE !important;
}
.candidate-v2 .col-md-2 li.active, .candidate-v2 .col-md-2 li:hover, .candidate-v2 .col-md-2 li:focus  {
  background-color: rgba<?php echo $_smarty_tpl->tpl_vars['CUSTOMIZER_COLOR_RGBA']->value;?>
 !important;
}
.navbar-inverse .navbar-toggle .icon-bar {
  background-color: #fff !important;
}

@media only screen and (max-device-width: 767px) and (min-device-width: 240px){
  .nav > li {
    border-color: rgba<?php echo $_smarty_tpl->tpl_vars['CUSTOMIZER_COLOR_RGBA']->value;?>
 !important;
  }
}
input#keywords {
    -webkit-box-sizing: border-box;
    -moz-box-sizing: border-box;
    box-sizing: border-box;
    height: 42px;
    margin-bottom: 30px;
    padding: 0 20px;
}

input#subscribe_email{
  -webkit-box-sizing: border-box;
    -moz-box-sizing: border-box;
    box-sizing: border-box;
    height: 42px;
    margin-bottom: 30px;
    padding: 0 20px;

}
.form-group.position input#landing_title{
    box-sizing: border-box;
    height: 46px;
    padding: 0 10px;
}
</style>

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

  <!--
  <?php echo '<script'; ?>
 src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.4/jquery.min.js"><?php echo '</script'; ?>
>-->

  <!--fallback jquery
  <?php echo '<script'; ?>
>if (!window.jQuery) { document.write('<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
js/jquery-1.11.2.min.js"><\/script>'); }<?php echo '</script'; ?>
>-->

  <!--
  <?php echo '<script'; ?>
 src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"><?php echo '</script'; ?>
>
  <!--fallback bootstrap-
  <?php echo '<script'; ?>
>$.fn.modal || document.write('<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
js/bootstrap/js/bootstrap.min.js"><\/script>')<?php echo '</script'; ?>
>->

  <!-- HTML5 shim, for IE6-8 support of HTML5 elements. All other JS at the end of file. -->
  <!--[if lt IE 9]>
    <?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
js/bootstrap/vendor/html5shiv.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
js/bootstrap/vendor/respond.min.js"><?php echo '</script'; ?>
>
  <![endif]-->


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

<?php if ($_smarty_tpl->tpl_vars['INDEED']->value == 'activated') {
echo '<script'; ?>
 type="text/javascript" src="https://gdc.indeed.com/ads/apiresults.js"><?php echo '</script'; ?>
>
<?php }?>

</head>

<body itemscope itemtype="http://schema.org/Product">

<div class="page-loader"></div>

<!-- enclosed in the footer -->
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


              <li><a id="mob-menu-jobs" data-toggle="dropdown" href="#"><?php echo $_smarty_tpl->tpl_vars['translations']->value['website_general']['top_menu_jobs'];?>
 &nbsp;<i class="fa fa-chevron-down" aria-hidden="true"></i></a>
                <ul class="dropdown-menu" role="menu" aria-labelledby="mob-menu-jobs">
                  <li role="presentation"><a role="menuitem" tabindex="-1" href="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;
echo $_smarty_tpl->tpl_vars['URL_JOBS']->value;?>
"><?php echo $_smarty_tpl->tpl_vars['translations']->value['website_general']['top_menu_all_jobs'];?>
</a></li>
                  <?php if ($_smarty_tpl->tpl_vars['INDEED']->value == 'deactivated' || $_smarty_tpl->tpl_vars['INDEED_BOTH_JOBS_FLAG']->value) {?>
                    <?php if ($_smarty_tpl->tpl_vars['FAVORITES_PLUGIN']->value && $_smarty_tpl->tpl_vars['FAVORITES_PLUGIN']->value == 'true') {?>
                    <li role="presentation"><a role="menuitem" tabindex="-1" href="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;
echo $_smarty_tpl->tpl_vars['URL_JOBS']->value;?>
/<?php echo $_smarty_tpl->tpl_vars['URL_FAVOURITES']->value;?>
"><?php echo $_smarty_tpl->tpl_vars['translations']->value['website_general']['top_menu_my_jobs'];?>
</a></li>
                    <?php }?>
                  <?php }?>
                </ul>
              </li>

              <?php if ($_smarty_tpl->tpl_vars['INDEED']->value == 'deactivated' || $_smarty_tpl->tpl_vars['INDEED_BOTH_JOBS_FLAG']->value) {?>
               <li><a href="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;
echo $_smarty_tpl->tpl_vars['URL_COMPANIES']->value;?>
"><?php echo $_smarty_tpl->tpl_vars['translations']->value['website_general']['top_menu_companies'];?>
</a></li>
              <?php }?>

              <?php if ($_smarty_tpl->tpl_vars['PROFILES_PLUGIN']->value == 'true' && $_smarty_tpl->tpl_vars['jobs_candidates_on_flag']->value == '1') {?>
               <li><a href="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;
echo $_smarty_tpl->tpl_vars['URL_REGISTER_APPLICANTS']->value;?>
"><?php echo $_smarty_tpl->tpl_vars['translations']->value['website_general']['top_menu_addcv'];?>
</a></li>
              <?php }?>

              <?php if (!$_smarty_tpl->tpl_vars['SESSION_APPLICANT']->value) {?>
              <li><a href="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;
echo $_smarty_tpl->tpl_vars['URL_DASHBOARD']->value;?>
/<?php echo $_smarty_tpl->tpl_vars['URL_DASHBOARD_POST']->value;?>
"><?php echo $_smarty_tpl->tpl_vars['translations']->value['dashboard_recruiter']['top_menu_postajob'];?>
</a></li>
              <?php }?>

              <?php if ($_smarty_tpl->tpl_vars['SESSION_USERNAME']->value || $_smarty_tpl->tpl_vars['SESSION_APPLICANT']->value) {?>
                <?php if ($_smarty_tpl->tpl_vars['SESSION_APPLICANT']->value) {?>
                  <li><a href="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;
echo $_smarty_tpl->tpl_vars['URL_PROFILE']->value;?>
"><?php echo $_smarty_tpl->tpl_vars['translations']->value['website_general']['goto_account_msg'];?>
</a></li>
                <?php }?>
                <?php if ($_smarty_tpl->tpl_vars['SESSION_USERNAME']->value) {?>
                <li><a href="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;
echo $_smarty_tpl->tpl_vars['URL_DASHBOARD']->value;?>
/<?php echo $_smarty_tpl->tpl_vars['URL_DASHBOARD_OVERVIEW']->value;?>
"><?php echo $_smarty_tpl->tpl_vars['translations']->value['website_general']['goto_account_msg'];?>
</a></li>
                <?php }?>
              <?php } else { ?>
                <li><a id="mob-menu-sign-in" data-toggle="dropdown" href="#"><?php echo $_smarty_tpl->tpl_vars['translations']->value['website_general']['sign_in'];?>
 &nbsp;<i class="fa fa-chevron-down" aria-hidden="true"></i></a>
                  <ul class="dropdown-menu" role="menu" aria-labelledby="mob-menu-sign-in">
                    <li role="presentation"><a role="menuitem" tabindex="-1" href="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;
echo $_smarty_tpl->tpl_vars['URL_LOGIN_RECRUITERS']->value;?>
"><?php echo $_smarty_tpl->tpl_vars['translations']->value['website_general']['top_menu_recruiters'];?>
</a></li>

                     <?php if ($_smarty_tpl->tpl_vars['PROFILES_PLUGIN']->value == 'true' && $_smarty_tpl->tpl_vars['jobs_candidates_on_flag']->value == '1') {?>
                    <li role="presentation"><a role="menuitem" tabindex="-1" href="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;
echo $_smarty_tpl->tpl_vars['URL_LOGIN_APPLICANTS']->value;?>
"><?php echo $_smarty_tpl->tpl_vars['translations']->value['website_general']['top_menu_applicants'];?>
</a></li>
                    <?php }?>

                  </ul>
                </li>

                <li><a href="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;
echo $_smarty_tpl->tpl_vars['URL_SIGN_UP']->value;?>
" id="sign-up-btn"><?php echo $_smarty_tpl->tpl_vars['translations']->value['website_general']['top_menu_register_label'];?>
</a></li>
              <?php }?>

            </ul>
          </nav>
        </div>
      </div>
</header> <!-- main-menu-->

<div class="navbar-ur navbar-ur1">
  <div class="container-fluid">
    <div class="row">
      <div class="col-lg-10 col-md-10 col-sm-10 col-xs-12 nav-menu">
        <a href="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
"><img style="width: <?php echo $_smarty_tpl->tpl_vars['jobs_logo_width']->value;?>
; padding: <?php echo $_smarty_tpl->tpl_vars['jobs_logo_padding']->value;?>
;" class="site-logo" src="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;
echo $_smarty_tpl->tpl_vars['SITE_LOGO_PATH']->value;?>
" alt="Website's Logo"></a>
        <ul class="nm-ul">

          <li class="il-list">
          <a id="menu1" data-toggle="dropdown"><?php echo $_smarty_tpl->tpl_vars['translations']->value['website_general']['top_menu_jobs'];?>
 &nbsp;<i class="fa fa-chevron-down" aria-hidden="true"></i></a>
            <ul class="dropdown-menu" role="menu" aria-labelledby="menu1">
              <li role="presentation"><a role="menuitem" tabindex="-1" href="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;
echo $_smarty_tpl->tpl_vars['URL_JOBS']->value;?>
"><?php echo $_smarty_tpl->tpl_vars['translations']->value['website_general']['top_menu_all_jobs'];?>
</a></li>
                  <?php if ($_smarty_tpl->tpl_vars['INDEED']->value == 'deactivated' || $_smarty_tpl->tpl_vars['INDEED_BOTH_JOBS_FLAG']->value) {?>
                    <?php if ($_smarty_tpl->tpl_vars['FAVORITES_PLUGIN']->value && $_smarty_tpl->tpl_vars['FAVORITES_PLUGIN']->value == 'true') {?>
                    <li role="presentation"><a role="menuitem" tabindex="-1" href="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;
echo $_smarty_tpl->tpl_vars['URL_JOBS']->value;?>
/<?php echo $_smarty_tpl->tpl_vars['URL_FAVOURITES']->value;?>
"><?php echo $_smarty_tpl->tpl_vars['translations']->value['website_general']['top_menu_my_jobs'];?>
</a></li>
                    <?php }?>
                  <?php }?>
            </ul>
          </li>

          <?php if ($_smarty_tpl->tpl_vars['INDEED']->value == 'deactivated' || $_smarty_tpl->tpl_vars['INDEED_BOTH_JOBS_FLAG']->value) {?>
          <li class="il-list"><a href="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;
echo $_smarty_tpl->tpl_vars['URL_COMPANIES']->value;?>
"><?php echo $_smarty_tpl->tpl_vars['translations']->value['website_general']['top_menu_companies'];?>
</a></li>
          <?php }?>

          <?php if ($_smarty_tpl->tpl_vars['PROFILES_PLUGIN']->value == 'true' && $_smarty_tpl->tpl_vars['jobs_candidates_on_flag']->value == '1') {?>
          <li class="il-list"><a href="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;
echo $_smarty_tpl->tpl_vars['URL_REGISTER_APPLICANTS']->value;?>
"><?php echo $_smarty_tpl->tpl_vars['translations']->value['website_general']['top_menu_addcv'];?>
</a></li>
          <?php }?>

          <?php if (!$_smarty_tpl->tpl_vars['SESSION_APPLICANT']->value) {?>
          <li class="il-list"><a href="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;
echo $_smarty_tpl->tpl_vars['URL_DASHBOARD']->value;?>
/<?php echo $_smarty_tpl->tpl_vars['URL_DASHBOARD_POST']->value;?>
"><?php echo $_smarty_tpl->tpl_vars['translations']->value['dashboard_recruiter']['top_menu_postajob'];?>
</a></li>
          <?php }?>

        </ul>
      </div>
      <div class="col-lg-2 col-md-2 col-sm-2 col-xs-12 nav-reg">
        <ul>

              <?php if ($_smarty_tpl->tpl_vars['SESSION_USERNAME']->value || $_smarty_tpl->tpl_vars['SESSION_APPLICANT']->value) {?>
                <?php if ($_smarty_tpl->tpl_vars['SESSION_APPLICANT']->value) {?>
                  <li><a href="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;
echo $_smarty_tpl->tpl_vars['URL_PROFILE']->value;?>
"><?php echo $_smarty_tpl->tpl_vars['translations']->value['website_general']['goto_account_msg'];?>
</a></li>
                <?php }?>
                <?php if ($_smarty_tpl->tpl_vars['SESSION_USERNAME']->value) {?>
                <li><a href="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;
echo $_smarty_tpl->tpl_vars['URL_DASHBOARD']->value;?>
/<?php echo $_smarty_tpl->tpl_vars['URL_DASHBOARD_OVERVIEW']->value;?>
"><?php echo $_smarty_tpl->tpl_vars['translations']->value['website_general']['goto_account_msg'];?>
</a></li>
                <?php }?>
              <?php } else { ?>

                <li><a href="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;
echo $_smarty_tpl->tpl_vars['URL_SIGN_UP']->value;?>
" id="sign-up-btn"><?php echo $_smarty_tpl->tpl_vars['translations']->value['website_general']['top_menu_register_label'];?>
</a></li>

                <li class="il-list">
                <a id="menu2" data-toggle="dropdown" id="sign-in-btn"><?php echo $_smarty_tpl->tpl_vars['translations']->value['website_general']['sign_in'];?>
 &nbsp;<i class="fa fa-chevron-down" aria-hidden="true"></i></a>
                  <ul class="dropdown-menu" role="menu" aria-labelledby="menu2">
                    <li class="r-m" role="presentation"><a role="menuitem" tabindex="-1" href="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;
echo $_smarty_tpl->tpl_vars['URL_LOGIN_RECRUITERS']->value;?>
"><?php echo $_smarty_tpl->tpl_vars['translations']->value['website_general']['top_menu_recruiters'];?>
</a></li>

                    <?php if ($_smarty_tpl->tpl_vars['PROFILES_PLUGIN']->value == 'true' && $_smarty_tpl->tpl_vars['jobs_candidates_on_flag']->value == '1') {?>
                    <li class="r-m" role="presentation"><a role="menuitem" tabindex="-1" href="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;
echo $_smarty_tpl->tpl_vars['URL_LOGIN_APPLICANTS']->value;?>
"><?php echo $_smarty_tpl->tpl_vars['translations']->value['website_general']['top_menu_applicants'];?>
</a></li>
                    <?php }?>

                  </ul>
                </li>

              <?php }?>

        </ul>
      </div>
    </div>
  </div>
</div>

<div class="responsive-logo row">
  <img style="width: <?php echo $_smarty_tpl->tpl_vars['jobs_logo_width_mobile']->value;?>
; padding: <?php echo $_smarty_tpl->tpl_vars['jobs_logo_padding']->value;?>
;" src="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;
echo $_smarty_tpl->tpl_vars['SITE_LOGO_PATH']->value;?>
" alt="Website's Logo">
</div>
<?php }
}
