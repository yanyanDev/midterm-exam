<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Item; // Make sure to import the Item model

class ItemSeeder extends Seeder
{
    public function run()
    {
        $items = [
            [
                'name' => 'Model',
                'description' => 'Responsible for all data and business logic.',
            ],
            [
                'name' => 'View',
                'description' => 'Responsible for all UI/Front end logic.',
            ],
            [
                'name' => 'Controller',
                'description' => 'Intermediary between model and view.',
            ],
            [
                'name' => 'Routes',
                'description' => 'Maps incoming web requests (URL) to controller actions.',
            ],
            [
                'name' => 'Middleware',
                'description' => 'Responsible for filtering data, like authentication, authorization, and logging.',
            ],
            [
                'name' => 'Blade Template',
                'description' => 'Allows for dynamic views; is a tool used by view.',
            ],
            [
                'name' => 'Migrations',
                'description' => 'Enables efficient transfers/changes of the data models.',
            ],
            [
                'name' => 'Seeders',
                'description' => 'Tools or scripts used to populate a database with initial data.',
            ],
            [
                'name' => 'Database',
                'description' => 'The body of all the data within the MVC architecture.',
            ],
            [
                'name' => 'Eloquent ORM',
                'description' => 'Makes interaction between database and model easier and more efficient (Object-Relational Mapping).',
            ],
        ];

        foreach ($items as $item) {
            Item::create($item);
        }
    }
}