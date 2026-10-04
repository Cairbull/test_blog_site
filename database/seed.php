<?php

require_once dirname(__DIR__, 1). '/app/Bootstrap.php';
// require_once dirname(__DIR__, 1). '/database/Seeders/DatabaseSeeder.php';
use Database\Seeders\DatabaseSeeder;

$seeder = new DatabaseSeeder($db);

$seeder->run();

echo 'Database seeded successfully';