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
            <span class="main_content__date">{$sport.publish_date}</span>
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
            <span class="main_content__date">{$auto.publish_date}</span>
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
            <span class="main_content__date">{$music.publish_date}</span>
        </div>
    {/foreach}
    </div>
    <div class="main_content__btn_allarticles">
    <a href="/categories/music">Все статьи</a>
    </div>
{/block}