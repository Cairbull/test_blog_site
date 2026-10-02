<?php

namespace App\Models;

use PDO;

class CategoryModel
{
    public function __construct(private PDO $db) {}

    /* Считает количество элементов отдельной категории */
    public function getCountArticles(string $alias): int
    {
        $data = "SELECT COUNT(*)
        FROM articles AS a INNER JOIN categories AS c ON a.category_id = c.id
        WHERE c.alias = :category_alias";

        $query = $this->db->prepare($data);
        $query->execute([
            'category_alias' => $alias,
        ]);
        return (int) $query->fetchColumn();
    }

    /* Получаем материалы отдельной категории в соответствии с установленным лимитом на одну страницу */
    public function getAllArticles(string $alias, int $current_page, int $count_pages): array
    {
        $offset = ($current_page - 1) * $count_pages;

        $data = "SELECT a.name AS article_name, a.alias AS article_alias, a.description AS article_description, a.image, a.publish_date,a.views_counter, c.name AS category_name ,c.alias AS category_alias, c.description AS category_description
        FROM articles AS a INNER JOIN categories AS c ON a.category_id = c.id
        WHERE c.alias = :category_alias
        ORDER BY a.publish_date DESC
        LIMIT :limit OFFSET :offset";

        $query = $this->db->prepare($data);

        $query->bindValue(':category_alias', $alias, PDO::PARAM_STR);
        $query->bindValue(':limit', $count_pages, PDO::PARAM_INT);
        $query->bindValue(':offset', $offset, PDO::PARAM_INT);

        $query->execute();
        return $query->fetchAll(PDO::FETCH_ASSOC);
    }
}
