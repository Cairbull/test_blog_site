{extends file="layouts/main.tpl"}

{block name="content"}
<!-- Спорт -->
    <h2 class="main_content__header_class">Спорт</h2>
   <div class="main_content__container">
    
    {foreach $categorySport as $sport}
        <div class="main_content__block_article">
            <img class="main_conten__intro_image" src="/images/{$sport.category_alias}/{$sport.image}">
            <h2><a href="/article/{$sport.alias}">{$sport.article_name}</a></h2>
            <span class="main_content__intro_text">{$sport.description}</span>
            <span class="main_content__date"><svg xmlns="http://www.w3.org/2000/svg" width="15" height="15" fill="currentColor" class="bi bi-calendar" viewBox="0 0 16 16">
  <path d="M3.5 0a.5.5 0 0 1 .5.5V1h8V.5a.5.5 0 0 1 1 0V1h1a2 2 0 0 1 2 2v11a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V3a2 2 0 0 1 2-2h1V.5a.5.5 0 0 1 .5-.5M1 4v10a1 1 0 0 0 1 1h12a1 1 0 0 0 1-1V4z"/>
</svg>&nbsp;{$sport.publish_date}</span>
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
            <h2><a href="/article/{$auto.alias}">{$auto.article_name}</a></h2>
            <span class="main_content__intro_text">{$auto.description}</span>
            <span class="main_content__date"><svg xmlns="http://www.w3.org/2000/svg" width="15" height="15" fill="currentColor" class="bi bi-calendar" viewBox="0 0 16 16">
  <path d="M3.5 0a.5.5 0 0 1 .5.5V1h8V.5a.5.5 0 0 1 1 0V1h1a2 2 0 0 1 2 2v11a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V3a2 2 0 0 1 2-2h1V.5a.5.5 0 0 1 .5-.5M1 4v10a1 1 0 0 0 1 1h12a1 1 0 0 0 1-1V4z"/>
</svg>&nbsp;{$auto.publish_date}</span>
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
            <h2><a href="/article/{$music.alias}">{$music.article_name}</a></h2>
            <span class="main_content__intro_text">{$music.description}</span>
            <span class="main_content__date"><svg xmlns="http://www.w3.org/2000/svg" width="15" height="15" fill="currentColor" class="bi bi-calendar" viewBox="0 0 16 16">
  <path d="M3.5 0a.5.5 0 0 1 .5.5V1h8V.5a.5.5 0 0 1 1 0V1h1a2 2 0 0 1 2 2v11a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V3a2 2 0 0 1 2-2h1V.5a.5.5 0 0 1 .5-.5M1 4v10a1 1 0 0 0 1 1h12a1 1 0 0 0 1-1V4z"/>
</svg>&nbsp;{$music.publish_date}</span>
        </div>
    {/foreach}
    </div>
    <div class="main_content__btn_allarticles">
    <a href="/categories/music">Все статьи</a>
    </div>
{/block}