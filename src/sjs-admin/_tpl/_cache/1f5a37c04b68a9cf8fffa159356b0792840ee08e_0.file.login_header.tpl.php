<?php
/* Smarty version 3.1.30, created on 2020-11-24 23:36:27
  from "/var/www/src/sjs-admin/_tpl/login_header.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5fbd98fb86a4f7_99960343',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '1f5a37c04b68a9cf8fffa159356b0792840ee08e' => 
    array (
      0 => '/var/www/src/sjs-admin/_tpl/login_header.tpl',
      1 => 1606257668,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5fbd98fb86a4f7_99960343 (Smarty_Internal_Template $_smarty_tpl) {
?>
<!doctype html>
<html lang="en">
<head>
	<title><?php if (@constant('SITE_NAME')) {
echo @constant('SITE_NAME');?>
 | Admin<?php } else { ?>Job board Admin<?php }?></title>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="description" content="<?php echo $_smarty_tpl->tpl_vars['meta_description']->value;?>
" />
	<meta name="keywords" content="<?php echo $_smarty_tpl->tpl_vars['meta_keywords']->value;?>
" />
	<link rel="shortcut icon" href="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
favicon.ico" type="image/x-icon" />

	<link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
js/bootstrap/css/bootstrap.min.css" type="text/css" /> 
	<link href="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
js/bootstrap/css/flat-ui.css" rel="stylesheet">
	<link href="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
js/admin/lib/style.css" rel="stylesheet">
	
	<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">

	<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
js/jquery-1.11.2.min.js"><?php echo '</script'; ?>
>
	<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
js/bootstrap/js/bootstrap.min.js"><?php echo '</script'; ?>
>
	<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
js/admin/js/functions.js" type="text/javascript"><?php echo '</script'; ?>
>
	<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
js/admin/js/main.js" type="text/javascript"><?php echo '</script'; ?>
>
	<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
js/admin/js/overlay.js" type="text/javascript"><?php echo '</script'; ?>
>

<style type="text/css">

.form-control, input[type="text"] {
	height: 50px;
	padding: 0px 6px 0px 20px;
}

.form-box img.logo {
margin-bottom: 15px !important; }

img.adminLogo {
    width: 25%;
    margin: 0 auto;
    margin-top: 5%;

}

.form-box {
text-align: center;
width: 100%;
margin: 0 auto;
padding: 50px 15px 50px; }

.login-recruiter-headline {
height: auto;
margin-top: 10px;
padding-top: 15px;
border-top-left-radius: 5px;
border-top-right-radius: 5px;
background-color: rgba(54, 57, 66, 0.75);
color: #ffffff !important;
text-align: center;
 }


.login-form-title {
font-size: 2em;
padding-bottom: 5px;
opacity: 0.95; }

.subheadline {
margin: 0px;
padding: 5px;
font-size: 19px;
opacity: 0.75;
margin-top: -20px;
padding-bottom: 10px; }

@media screen and (min-width: 500px) {
	  .form-box {
width: 395px !important; }
}	
</style>

</head>

<body>
	

	
<?php }
}
