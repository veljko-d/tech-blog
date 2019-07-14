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
            ['name' => 'Mobile'],
            ['name' => 'Hardware'],
            ['name' => 'Software'],
            ['name' => 'Games'],
            ['name' => 'Internet'],
        ]);
    }
}
