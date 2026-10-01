<?php

namespace App\Models;

use PDO;

class CategoryModel
{
    public function __construct(private PDO $db) {}

    /* Получаем все материалы отдельной категории */
    public function getAllArticles(string $alias): array
    {
        $data = "SELECT a.name AS article_name, a.alias AS article_alias, a.description AS article_description, a.image, a.publish_date, c.name AS category_name ,c.alias AS category_alias, c.description AS category_description
        FROM articles AS a INNER JOIN categories AS c ON a.category_id = c.id
        WHERE c.alias = :category_alias
        ORDER BY a.publish_date DESC";

        $query = $this->db->prepare($data);
        $query->execute([
            'category_alias' => $alias,
        ]);
        return $query->fetchAll(PDO::FETCH_ASSOC);
    }
}
