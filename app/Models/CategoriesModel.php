<?php

namespace App\Models;

use PDO;

class CategoriesModel
{
    public function __construct(private PDO $db) {}

    public function getItemsMenu(): array
    {
        $data = "SELECT name,alias FROM categories";
        $query = $this->db->query($data);

        return $query->fetchAll();
    }

    /* Получаем последние три материала определенных категорий */
    public function getLastArticles(int $id): array
    {
        $data = "SELECT a.name AS article_name, a.alias AS article_alias, a.description, a.image, a.publish_date, c.name AS category_name ,c.alias AS category_alias 
        FROM articles AS a INNER JOIN categories AS c ON a.category_id = c.id 
        WHERE a.category_id = :category_id
        ORDER BY a.publish_date DESC
        LIMIT 3";

        $query = $this->db->prepare($data);
        $query->execute([
            'category_id' => $id,
        ]);

        return $query->fetchAll(PDO::FETCH_ASSOC);
    }
}
