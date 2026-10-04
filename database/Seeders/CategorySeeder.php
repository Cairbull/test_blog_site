<?php

namespace Database\Seeders;

use PDO;

class CategorySeeder
{
    public function __construct(
        private PDO $db
    ) {}

    public function run(): void
    {
        $categories = [
            [
                'name' => 'Спорт',
                'description' => 'Материалы о спорте и активном образе жизни: тренировки, бег, велосипед, силовые нагрузки и полезные рекомендации для тех, кто хочет оставаться в форме.',
                'alias' => 'sport',
            ],
            [
                'name' => 'Автомобили',
                'description' => 'Всё об автомобилях: выбор и обслуживание машин, технологии, электромобили, дальние поездки и практические советы для водителей.',
                'alias' => 'auto',
            ],
            [
                'name' => 'Музыка',
                'description' => 'Музыка во всех её проявлениях: виниловые пластинки, исполнители, оборудование, история музыки и впечатления от прослушивания.',
                'alias' => 'music',
            ],
        ];

        $query = "
            INSERT INTO categories
                (name, description, alias)
            VALUES
                (:name, :description, :alias)
        ";

        $result = $this->db->prepare($query);

        foreach ($categories as $category) {
            $result->execute($category);
        }
    }
}
