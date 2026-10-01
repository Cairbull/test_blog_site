<?php
/* Smarty version 5.8.4, created on 2026-09-29 16:20:02
  from 'file:layouts/main.tpl' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.8.4',
  'unifunc' => 'content_6abbe532365271_78385377',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '2eb8ec26b01807e1d6ef11e1b7319309c2851ca9' => 
    array (
      0 => 'layouts/main.tpl',
      1 => 1790697645,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:components/header.tpl' => 1,
    'file:components/footer.tpl' => 1,
  ),
))) {
function content_6abbe532365271_78385377 (\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = '/home/www/test-site/smarty/templates/layouts';
$_smarty_tpl->getInheritance()->init($_smarty_tpl, false);
?>
<!DOCTYPE html>
<html>
<head>
    <title><?php echo $_smarty_tpl->getValue('title');?>
</title>
     <link rel="stylesheet" href="/css/main.css">
</head>
<body>
<?php $_smarty_tpl->renderSubTemplate("file:components/header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), (int) 0, $_smarty_current_dir);
?>
<main>
    <?php 
$_smarty_tpl->getInheritance()->instanceBlock($_smarty_tpl, 'Block_10453799036abbe53235ce41_35835047', "content");
?>

</main>
<?php $_smarty_tpl->renderSubTemplate("file:components/footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), (int) 0, $_smarty_current_dir);
?>
</body>
</html><?php }
/* {block "content"} */
class Block_10453799036abbe53235ce41_35835047 extends \Smarty\Runtime\Block
{
public function callBlock(\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = '/home/www/test-site/smarty/templates/layouts';
}
}
/* {/block "content"} */
}
