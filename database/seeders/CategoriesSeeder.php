<?php

namespace Database\Seeders;

use App\Models\Categories;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CategoriesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    protected $categories = [
        [
            'user_id' => '1',
            'cat_name' => 'JAVA',
            'slug' => 'java',
            'status' => 'Active',
        ],
        [
            'user_id' => '1',
            'cat_name' => 'GO',
            'slug' => 'go',
            'status' => 'Active',
        ], [
            'user_id' => '1',
            'cat_name' => 'PHP',
            'slug' => 'php',
            'status' => 'Active',
        ], [
            'user_id' => '1',
            'cat_name' => 'SQL',
            'slug' => 'sql',
            'status' => 'Active',
        ], [
            'user_id' => '1',
            'cat_name' => 'R',
            'slug' => 'r',
            'status' => 'Active',
        ], [
            'user_id' => '1',
            'cat_name' => 'LARAVEL',
            'slug' => 'laravel',
            'status' => 'Active',
        ], [
            'user_id' => '1',
            'cat_name' => 'SQL',
            'slug' => 'sql',
            'status' => 'Active',
        ]
        , [
            'user_id' => '2',
            'cat_name' => 'PYTHON',
            'slug' => 'python',
            'status' => 'Active',
        ]
        , [
            'user_id' => '2',
            'cat_name' => 'JAVASCRIPT',
            'slug' => 'javascript',
            'status' => 'Active',
        ]
        , [
            'user_id' => '2',
            'cat_name' => 'SWIFT',
            'slug' => 'swift',
            'status' => 'Active',
        ]
        , [
            'user_id' => '2',
            'cat_name' => 'Sunday',
            'slug' => 'Sunday',
            'status' => 'Active',
        ]
        , [
            'user_id' => '2',
            'cat_name' => 'Monday',
            'slug' => 'Monday',
            'status' => 'Active',
        ]
        , [
            'user_id' => '2',
            'cat_name' => 'Saturday',
            'slug' => 'Saturday',
            'status' => 'Active',
        ],
        
    ];
    public function run(): void
    {
        foreach($this->categories as $category) {
            Categories::insert($category);
        }
    }
}
