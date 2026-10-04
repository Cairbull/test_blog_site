<header class="site-header">
  <div class="container">
    <div class="site-header__inner">
      <a href="/" class="site-header__logo"> Блог  </a>

      <nav class="site-header__nav">
        <a href="/" class="site-header__link"> Главная </a>
        <div class="site-header__dropdown">
              <a href="" class="site-header__dropdown_link"> Категории </a>
              <div class="site-header__dropdown_content">
       {foreach $menu as $item_menu}
            <a
                href="/categories/{$item_menu.alias}"
                class="site-header__dropdown_child_link"
            >
                {$item_menu.name}
            </a>
        {/foreach}
        </div>
        </div>
      </nav>
    </div>
  </div>
</header>
