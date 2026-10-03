<?php

namespace App;

use App\Controllers\HomeController;
use App\Controllers\CategoryController;
use App\Controllers\ArticleController;

class Router
{
    public function __construct(
        private HomeController $homeController,
        private CategoryController $categoryController,
        private ArticleController $articleController
    ) {}

    public function getNumberPage(): int
    {
        $current_page = max(1, (int) ($_GET['page'] ?? 1));

        if ($current_page < 1) {
            $current_page = 1;
        }
        return $current_page;
    }

    public function getParamSort():string{
        $param_sort = isset($_GET['sort']) ? (string) $_GET['sort'] : 'date_desc';
        return $param_sort;
    }

    /* public function getTags():string{
        $tags = isset($_GET['tags']) ? (string) $_GET['tags'] : '';
        return $tags;
    } */

    public function dispatch(): void
    {
        $uri = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);
        $page = $this->getNumberPage();
        $param_sort = $this->getParamSort();
        // $tags = $this->getTags();

        if ($uri === '/') {
            $this->homeController->index();
            return;
        }

        if (preg_match('#^\/categories\/([a-z0-9-]+)$#', $uri, $matches)) {
            $categoryAlias = (string) $matches[1];
            $this->categoryController->index($categoryAlias, $page, $param_sort);
            return;
        }

       if (preg_match('#^\/article\/([a-z0-9-]+)\/([a-z0-9-]+)$#', $uri, $matches)) {
            $articleAlias = (string) $matches[2];
            $this->articleController->index($articleAlias);
            return;
        }

        http_response_code(404);
        echo '404';
    }
}
