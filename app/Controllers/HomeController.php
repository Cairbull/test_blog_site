<?php
namespace App\Controllers;

use App\Views\View;
use App\Models\CategoriesModel;

class HomeController
{
    public function __construct(
        private View $view,
        private CategoriesModel $categories,

    ) {}

    public function index(): void
    {
        $home = dirname(__DIR__, 2).'/smarty/templates/pages/home.tpl';
        $this->view->render($home, [
            'title' => 'Главная',
            'menu' => $this->categories->getItemsMenu(),
            'categorySport' => $this->categories->getLastArticles(1),
            'categoryAuto' => $this->categories->getLastArticles(2),
            'categoryMusic' => $this->categories->getLastArticles(3),
        ]);
    }
}
