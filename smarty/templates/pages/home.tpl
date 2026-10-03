{extends file="layouts/main.tpl"}

{block name="content"}
<!-- Спорт -->
    <h2 class="main_content__header_class">Спорт</h2>
   <div class="main_content__container">
    
    {foreach $categorySport as $sport}
        <div class="main_content__block_article">
            <img class="main_conten__intro_image" src="/images/{$sport.category_alias}/{$sport.image}">
            <h2><a href="/article/sport/{$sport.article_alias}">{$sport.article_name}</a></h2>
            <span class="main_content__intro_text">{$sport.description}</span>
            <div class="main_content__metadata">
            <span class="main_content__count_views"><svg xmlns="http://www.w3.org/2000/svg" width="15" height="15" fill="currentColor" class="bi bi-eye" viewBox="0 0 16 16">
  <path d="M16 8s-3-5.5-8-5.5S0 8 0 8s3 5.5 8 5.5S16 8 16 8M1.173 8a13 13 0 0 1 1.66-2.043C4.12 4.668 5.88 3.5 8 3.5s3.879 1.168 5.168 2.457A13 13 0 0 1 14.828 8q-.086.13-.195.288c-.335.48-.83 1.12-1.465 1.755C11.879 11.332 10.119 12.5 8 12.5s-3.879-1.168-5.168-2.457A13 13 0 0 1 1.172 8z"/>
  <path d="M8 5.5a2.5 2.5 0 1 0 0 5 2.5 2.5 0 0 0 0-5M4.5 8a3.5 3.5 0 1 1 7 0 3.5 3.5 0 0 1-7 0"/>
</svg>&nbsp;{$sport.views_counter}</span>
            <span class="main_content__date"><svg xmlns="http://www.w3.org/2000/svg" width="15" height="15" fill="currentColor" class="bi bi-calendar" viewBox="0 0 16 16">
  <path d="M3.5 0a.5.5 0 0 1 .5.5V1h8V.5a.5.5 0 0 1 1 0V1h1a2 2 0 0 1 2 2v11a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V3a2 2 0 0 1 2-2h1V.5a.5.5 0 0 1 .5-.5M1 4v10a1 1 0 0 0 1 1h12a1 1 0 0 0 1-1V4z"/>
</svg>&nbsp;{$sport.publish_date|date_format:"%d.%m.%Y"}</span>
</div>
        </div>
    {/foreach}
    </div>
    <div class="main_content__btn_allarticles">
    <a href="/categories/sport">Все статьи</a>
    </div>
    <!-- Автомобили -->
     <h2 class="main_content__header_class">Автомобили</h2>
     <div class="main_content__container">
     {foreach $categoryAuto as $auto}
        <div class="main_content__block_article">
            <img class="main_conten__intro_image" src="/images/{$auto.category_alias}/{$auto.image}">
            <h2><a href="/article/auto/{$auto.article_alias}">{$auto.article_name}</a></h2>
            <span class="main_content__intro_text">{$auto.description}</span>
            <div class="main_content__metadata">
            <span class="main_content__count_views"><svg xmlns="http://www.w3.org/2000/svg" width="15" height="15" fill="currentColor" class="bi bi-eye" viewBox="0 0 16 16">
  <path d="M16 8s-3-5.5-8-5.5S0 8 0 8s3 5.5 8 5.5S16 8 16 8M1.173 8a13 13 0 0 1 1.66-2.043C4.12 4.668 5.88 3.5 8 3.5s3.879 1.168 5.168 2.457A13 13 0 0 1 14.828 8q-.086.13-.195.288c-.335.48-.83 1.12-1.465 1.755C11.879 11.332 10.119 12.5 8 12.5s-3.879-1.168-5.168-2.457A13 13 0 0 1 1.172 8z"/>
  <path d="M8 5.5a2.5 2.5 0 1 0 0 5 2.5 2.5 0 0 0 0-5M4.5 8a3.5 3.5 0 1 1 7 0 3.5 3.5 0 0 1-7 0"/>
</svg>&nbsp;{$auto.views_counter}</span>
            <span class="main_content__date"><svg xmlns="http://www.w3.org/2000/svg" width="15" height="15" fill="currentColor" class="bi bi-calendar" viewBox="0 0 16 16">
  <path d="M3.5 0a.5.5 0 0 1 .5.5V1h8V.5a.5.5 0 0 1 1 0V1h1a2 2 0 0 1 2 2v11a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V3a2 2 0 0 1 2-2h1V.5a.5.5 0 0 1 .5-.5M1 4v10a1 1 0 0 0 1 1h12a1 1 0 0 0 1-1V4z"/>
</svg>&nbsp;{$auto.publish_date|date_format:"%d.%m.%Y"}</span>
</div>
        </div>
    {/foreach}
    </div>
    <div class="main_content__btn_allarticles">
    <a href="/categories/auto">Все статьи</a>
    </div>
     <!-- Музыка -->
     <h2 class="main_content__header_class">Музыка</h2>
     <div class="main_content__container">
     {foreach $categoryMusic as $music}
        <div class="main_content__block_article">
            <img class="main_conten__intro_image" src="/images/{$music.category_alias}/{$music.image}">
            <h2><a href="/article/music/{$music.article_alias}">{$music.article_name}</a></h2>
            <span class="main_content__intro_text">{$music.description}</span>
            <div class="main_content__metadata">
            <span class="main_content__count_views"><svg xmlns="http://www.w3.org/2000/svg" width="15" height="15" fill="currentColor" class="bi bi-eye" viewBox="0 0 16 16">
  <path d="M16 8s-3-5.5-8-5.5S0 8 0 8s3 5.5 8 5.5S16 8 16 8M1.173 8a13 13 0 0 1 1.66-2.043C4.12 4.668 5.88 3.5 8 3.5s3.879 1.168 5.168 2.457A13 13 0 0 1 14.828 8q-.086.13-.195.288c-.335.48-.83 1.12-1.465 1.755C11.879 11.332 10.119 12.5 8 12.5s-3.879-1.168-5.168-2.457A13 13 0 0 1 1.172 8z"/>
  <path d="M8 5.5a2.5 2.5 0 1 0 0 5 2.5 2.5 0 0 0 0-5M4.5 8a3.5 3.5 0 1 1 7 0 3.5 3.5 0 0 1-7 0"/>
</svg>&nbsp;{$music.views_counter}</span>
            <span class="main_content__date"><svg xmlns="http://www.w3.org/2000/svg" width="15" height="15" fill="currentColor" class="bi bi-calendar" viewBox="0 0 16 16">
  <path d="M3.5 0a.5.5 0 0 1 .5.5V1h8V.5a.5.5 0 0 1 1 0V1h1a2 2 0 0 1 2 2v11a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V3a2 2 0 0 1 2-2h1V.5a.5.5 0 0 1 .5-.5M1 4v10a1 1 0 0 0 1 1h12a1 1 0 0 0 1-1V4z"/>
</svg>&nbsp;{$music.publish_date|date_format:"%d.%m.%Y"}</span>
</div>
        </div>
    {/foreach}
    </div>
    <div class="main_content__btn_allarticles">
    <a href="/categories/music">Все статьи</a>
    </div>
{/block}