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
        $menu = $this->categories->getItemsMenu();
        $sport = $this->categories->getLastArticles(1);
        $auto = $this->categories->getLastArticles(2);
        $music = $this->categories->getLastArticles(3);
        $this->view->render($home, [
            'title' => 'Главная',
            'menu' => $menu,
            'categorySport' => $sport,
            'categoryAuto' => $auto,
            'categoryMusic' => $music,
        ]);
    }
}
