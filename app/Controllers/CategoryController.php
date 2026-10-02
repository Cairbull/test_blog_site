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

    /* Рассчитывает количество страниц и элементов на одной странице */
    public function countPages(string $alias): int
    {
        $count_elements = $this->category->getCountArticles($alias);
        $perPage = $count_elements / 2;
        return $perPage;
    }

    /* Выводит материалы определенной категории и при этом добавляет пагинацию */
    public function index(string $alias, int $current_page, string $param_sort): void
    {
        $category_page = dirname(__DIR__, 2) . '/smarty/templates/pages/category.tpl';
        $menu = $this->categories->getItemsMenu();
        $count_elements = $this->category->getCountArticles($alias);
        $count_pages = $this->countPages($alias);
        $total_pages = (int) ceil($count_elements / $count_pages);
        $articles = $this->category->getAllArticles($alias, $current_page, $count_pages, $param_sort);
      
        $this->view->render($category_page, [
            'title' => $menu[0]['name'],
            'menu' => $menu,
            'articles' => $articles,
            'page' => $current_page,
            'totalPages' => $total_pages
        ]);
    }
}
