<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

/**
 * Class CategoriesTableSeeder
 */
class CategoriesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('categories')->insert([
            [
                'name' => 'Mobile',
                'slug' => 'mobile',
            ],
            [
                'name' => 'Hardware',
                'slug' => 'hardware',
            ],
            [
                'name' => 'Software',
                'slug' => 'software',
            ],
            [
                'name' => 'Games',
                'slug' => 'games',
            ],
            [
                'name' => 'Internet',
                'slug' => 'internet',
            ],
        ]);
    }
}
