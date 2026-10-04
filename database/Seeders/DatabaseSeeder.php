<?php
namespace Database\Seeders;

use PDO;

use Database\Seeders\CategorySeeder;
use Database\Seeders\ArticleSeeder;

class DatabaseSeeder
{
    public function __construct(
        private PDO $db
    ) {
    }

    public function run(): void
    {
        (new CategorySeeder($this->db))->run();
        (new ArticleSeeder($this->db))->run();
    }
}