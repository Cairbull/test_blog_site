<?php
/* Smarty version 5.8.4, created on 2026-09-29 16:20:02
  from 'file:components/header.tpl' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.8.4',
  'unifunc' => 'content_6abbe5323909e3_03327508',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '6a6644b64c168a36c9c800ea3a2aac7ce9f23385' => 
    array (
      0 => 'components/header.tpl',
      1 => 1790694441,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
))) {
function content_6abbe5323909e3_03327508 (\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = '/home/www/test-site/smarty/templates/components';
?><header class="site-header">
  <div class="container">
    <div class="site-header__inner">
      <a href="/" class="site-header__logo"> Список материалов и категорий </a>

      <nav class="site-header__nav">
        <a href="/" class="site-header__link"> Главная </a>
        <div class="site-header__dropdown">
              <a href="" class="site-header__dropdown_link"> Категории </a>
              <div class="site-header__dropdown_content">
       <?php
$_from = $_smarty_tpl->getSmarty()->getRuntime('Foreach')->init($_smarty_tpl, $_smarty_tpl->getValue('submenu'), 'menu');
$foreach0DoElse = true;
foreach ($_from ?? [] as $_smarty_tpl->getVariable('menu')->value) {
$foreach0DoElse = false;
?>
            <a
                href="<?php echo $_smarty_tpl->getValue('menu')['url'];?>
"
                class="site-header__dropdown_child_link <?php if ($_smarty_tpl->getValue('item')['active']) {?> is-active<?php }?>"
            >
                <?php echo $_smarty_tpl->getValue('menu')['title'];?>

            </a>
        <?php
}
$_smarty_tpl->getSmarty()->getRuntime('Foreach')->restore($_smarty_tpl, 1);?>
        </div>
        </div>
      </nav>
    </div>
  </div>
</header>
<?php }
}
