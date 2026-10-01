<?php

namespace App;

use PDO;
use Smarty\Smarty;
use Dotenv\Dotenv;

use App\Controllers\HomeController;
use App\Controllers\CategoryController;
use App\Models\CategoriesModel;
use App\Models\CategoryModel;
use App\Views\View;

class Bootstrap
{
    public function run(): void
    {
        $this->loadEnvironment();
        $db = $this->createDatabase();
        $smarty = $this->createSmarty();
        $categories = new CategoriesModel($db);
        $category = new CategoryModel($db);
        $view = new View($smarty);
        $homeController = new HomeController(
            $view,
            $categories
        );

        $categoryController = new CategoryController(
            $view,
            $category,
            $categories
        );

        $router = new Router(
            $homeController,
            $categoryController
        );

        $router->dispatch();
    }

    private function loadEnvironment(): void
    {
        $dotenv = Dotenv::createImmutable(
            dirname(__DIR__)
        );

        $dotenv->load();
    }

    private function createDatabase(): PDO
    {
        return new PDO(
            sprintf(
                'mysql:dbname=%s;host=%s;port=%s;charset=utf8mb4',
                $_ENV['DB_NAME'],
                $_ENV['DB_HOST'],
                $_ENV['DB_PORT']
            ),
            $_ENV['DB_USER'],
            $_ENV['DB_PASSWORD'],
            [
                PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
                PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
            ]
        );
    }


    private function createSmarty(): Smarty
    {
        $smarty = new Smarty();
        $templateDir = dirname(__DIR__) . '/smarty/templates';
        $compileDir = dirname(__DIR__) . '/storage/smarty/templates_c';
        $cacheDir = dirname(__DIR__) . '/storage/smarty/cache';

        $smarty->setTemplateDir($templateDir);
        $smarty->setCompileDir($compileDir);
        $smarty->setCacheDir($cacheDir);

        return $smarty;
    }
}
