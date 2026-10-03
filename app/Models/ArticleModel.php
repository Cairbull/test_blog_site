<?php

namespace App\Models;

use PDO;

class ArticleModel
{
    public function __construct(private PDO $db) {}

    /* Получаем тэги данного материала */
    public function getTagsPage(string $alias): array
    {
        $data = "SELECT tags FROM articles  WHERE alias = :alias";
        $query = $this->db->prepare($data);
        $query->execute([
            'alias'=>$alias,
        ]);
        $tags = $query->fetchAll(PDO::FETCH_ASSOC);
        
        return $this->similarPages($alias, $tags);
    }

    /* Выводим похожие статьи опираясь на тэги материала */

    public function similarPages(string $alias, array $tags): array
    {
        $data = "SELECT a1.id, a1.tags ,a2.name AS article_name, a2.alias AS article_alias, a2.description AS article_description, a2.image, a2.publish_date,a2.views_counter, c.id,c.alias AS category_alias
        FROM articles AS a1
        INNER JOIN categories AS c ON a1.category_id = c.id
        INNER JOIN articles AS a2
        ON a1.id <> a2.id
        WHERE a1.alias = :article_alias
        AND JSON_OVERLAPS(a2.tags, :tags)
        LIMIT 3";
        $query = $this->db->prepare($data);
       
        $query->bindValue(':article_alias', $alias, PDO::PARAM_STR);
        $query->bindValue(':tags', $tags[0]['tags'], PDO::PARAM_STR);

        $query->execute();
        return $query->fetchAll(PDO::FETCH_ASSOC);
    }

    /* Получаем данные материала конкретной категории */
    public function getArticle(string $alias): array
    {
        $data = "SELECT a.name AS article_name, a.alias AS article_alias, a.description AS article_description,a.text AS article_text, a.image, a.publish_date,a.views_counter,a.tags, c.name AS category_name ,c.alias AS category_alias, c.description AS category_description
        FROM articles AS a INNER JOIN categories AS c ON a.category_id = c.id
        WHERE a.alias = :article_alias";

        $query = $this->db->prepare($data);

        $query->execute([
            ':article_alias' => $alias,
        ]);
        return $query->fetchAll(PDO::FETCH_ASSOC);
    }
}
