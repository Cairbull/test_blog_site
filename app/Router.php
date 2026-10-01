<?php

namespace App;

use App\Controllers\HomeController;
use App\Controllers\CategoryController;

class Router
{
    public function __construct(
        private HomeController $homeController,
        private CategoryController $categoryController
    ) {
    }

    public function dispatch(): void
    {
        $uri = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);
        

        if ($uri === '/') {
            $this->homeController->index();
            return;
        }
        if (preg_match('#^\/categories\/([a-z0-9-]+)$#', $uri, $matches)) {
            $categoryAlias = (string) $matches[1];

            $this->categoryController->index($categoryAlias);
            return;
        }

        http_response_code(404);
        echo '404';
    }
}