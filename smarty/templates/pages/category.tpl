{extends file="layouts/main.tpl"}

{block name="content"}
 <h2 class="category_content__header_class">{{$articles[0].category_name}}</h2>
 <label class="category_content__description_category">{{$articles[0].category_description}}</label>
   <div class="category_content__container">
    {foreach $articles as $article}
        <div class="category_content__block_article">
            <img class="category_content__intro_image" src="/images/{$article.category_alias}/{$article.image}">
            <h2><a href="/article/{$article.alias}">{$article.article_name}</a></h2>
            <span class="category_content__intro_text">{$article.article_description}</span>
            <span class="category_content__date">{$article.publish_date}</span>
        </div>
    {/foreach}
    </div>
{/block}