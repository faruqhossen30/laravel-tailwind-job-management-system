<?php

namespace Database\Seeders;

use App\Models\GalleryCategory;
use App\Models\Review\ReviewType;
use App\Models\Category;
use Illuminate\Database\Seeder;


use Illuminate\Support\Str;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $categories = array(
            array('name' => 'Govt Job', 'slug' => 'govt-job', 'author_id' => '1'),
            array('name' => 'IT Job', 'slug' => 'IT-job', 'author_id' => '1'),
            array('name' => 'Comapny Job', 'slug' => 'comapny-job', 'author_id' => '1'),
            array('name' => 'Bank Job', 'slug' => 'bank-job', 'author_id' => '1')
        );
        Category::insert($categories);
    }
}
