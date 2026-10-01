<?php

namespace App\Controllers;

use App\Views\View;
use App\Models\CategoryModel;
use App\Models\CategoriesModel;

class CategoryController
{
    public function __construct(
        private View $view,
        private CategoryModel $category,
        private CategoriesModel $categories,

    ) {}

    public function index(string $alias): void
    {
        $category_page = dirname(__DIR__, 2).'/smarty/templates/pages/category.tpl';

        $this->view->render($category_page, [
            'title' => 'Главная',
            'menu' => $this->categories->getItemsMenu(),
            'articles' => $this->category->getAllArticles($alias),
        ]);
    }
}
