<?php

namespace App\Models;

use PDO;

class ArticleModel
{
    public function __construct(private PDO $db) {}

    /* Получаем данные материала конкретной категории */
    public function getArticle(string $alias): array
    {

         $data = "SELECT a.name AS article_name, a.alias AS article_alias, a.description AS article_description,a.text AS article_text, a.image, a.publish_date,a.views_counter, c.name AS category_name ,c.alias AS category_alias, c.description AS category_description
        FROM articles AS a INNER JOIN categories AS c ON a.category_id = c.id
        WHERE a.alias = :article_alias";

        $query = $this->db->prepare($data);

        $query->execute([
            ':article_alias'=> $alias,
        ]);
        return $query->fetchAll();
    }
}
