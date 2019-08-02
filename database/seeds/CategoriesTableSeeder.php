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
                'name'        => 'Mobile',
                'slug'        => 'mobile',
                'category_id' => null,
            ],
            [
                'name'        => 'Hardware',
                'slug'        => 'hardware',
                'category_id' => null,
            ],
            [
                'name'        => 'Software/Internet',
                'slug'        => 'software-internet',
                'category_id' => null,
            ],
            [
                'name'        => 'Mobile Phones',
                'slug'        => 'mobile-phones',
                'category_id' => 1,
            ],
            [
                'name'        => 'Tablets',
                'slug'        => 'tablets',
                'category_id' => 1,
            ],
            [
                'name'        => 'Laptops',
                'slug'        => 'laptops',
                'category_id' => 1,
            ],
            [
                'name'        => 'Processors',
                'slug'        => 'processors',
                'category_id' => 2,
            ],
            [
                'name'        => 'Graphics Cards',
                'slug'        => 'graphics-cards',
                'category_id' => 2,
            ],
            [
                'name'        => 'Memory',
                'slug'        => 'memory',
                'category_id' => 2,
            ],
            [
                'name'        => 'Storage',
                'slug'        => 'storage',
                'category_id' => 2,
            ],
            [
                'name'        => 'Displays',
                'slug'        => 'displays',
                'category_id' => 2,
            ],
            [
                'name'        => 'Cases, Coolers, PSUs',
                'slug'        => 'cases-coolers-psus',
                'category_id' => 2,
            ],
            [
                'name'        => 'Peripherals',
                'slug'        => 'peripherals',
                'category_id' => 2,
            ],
            [
                'name'        => 'Network Equipment',
                'slug'        => 'network-equipment',
                'category_id' => 2,
            ],
            [
                'name'        => 'Windows',
                'slug'        => 'windows',
                'category_id' => 3,
            ],
            [
                'name'        => 'Linux',
                'slug'        => 'linux',
                'category_id' => 3,
            ],
            [
                'name'        => 'OS X',
                'slug'        => 'os-x',
                'category_id' => 3,
            ],
            [
                'name'        => 'Android',
                'slug'        => 'android',
                'category_id' => 3,
            ],
            [
                'name'        => 'iOS',
                'slug'        => 'ios',
                'category_id' => 3,
            ],
            [
                'name'        => 'Internet',
                'slug'        => 'internet',
                'category_id' => 3,
            ],
            [
                'name'        => 'Games',
                'slug'        => 'games',
                'category_id' => 3,
            ],
            [
                'name'        => 'Software',
                'slug'        => 'software',
                'category_id' => 3,
            ],
        ]);
    }
}
