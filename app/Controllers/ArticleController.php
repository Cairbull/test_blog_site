<?php

namespace App\Controllers;

use App\Views\View;
use App\Models\CategoriesModel;
use App\Models\ArticleModel;

class ArticleController
{
    public function __construct(
        private View $view,
        private CategoriesModel $categories,
        private ArticleModel $article,

    ) {}

    /* Выводит материалы определенной категории и при этом добавляет пагинацию */
    public function index(string $alias): void
    {
        $category_page = dirname(__DIR__, 2) . '/smarty/templates/pages/article.tpl';
        $menu = $this->categories->getItemsMenu();
        $articles = $this->article->getArticle($alias);
        $similar_pages = $this->article->getTagsPage($alias);
        $this->view->render($category_page, [
            'title' => $articles[0]['article_name'],
            'menu' => $menu,
            'articles' => $articles,
            'similar_pages' => $similar_pages,
        ]);
    }
}
