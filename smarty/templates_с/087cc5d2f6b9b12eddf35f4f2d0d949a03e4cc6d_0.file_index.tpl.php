<?php
/* Smarty version 5.8.4, created on 2026-09-29 13:08:33
  from 'file:index.tpl' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.8.4',
  'unifunc' => 'content_6abbb851387b60_80933312',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '087cc5d2f6b9b12eddf35f4f2d0d949a03e4cc6d' => 
    array (
      0 => 'index.tpl',
      1 => 1790686602,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
))) {
function content_6abbb851387b60_80933312 (\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = '/home/www/test-site/smarty/templates';
?><!DOCTYPE html>
<html>
<head>
    <title><?php echo $_smarty_tpl->getValue('title');?>
</title>
</head>
<body>

<h1><?php echo $_smarty_tpl->getValue('title');?>
</h1>

<p>Привет, <?php echo $_smarty_tpl->getValue('name');?>
!</p>

</body>
</html><?php }
}
