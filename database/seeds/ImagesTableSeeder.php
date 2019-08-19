<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

/**
 * Class ImagesTableSeeder
 */
class ImagesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('images')->insert([
            [
                'name'        => 'mobile',
                'ext'         => 'jpg',
                'path'        => '/images/categories',
                'category_id' => 1,
            ],
            [
                'name'        => 'hardware',
                'ext'         => 'jpg',
                'path'        => '/images/categories',
                'category_id' => 2,
            ],
            [
                'name'        => 'software-internet',
                'ext'         => 'jpg',
                'path'        => '/images/categories',
                'category_id' => 3,
            ],
            [
                'name'        => 'mobile-phones',
                'ext'         => 'jpg',
                'path'        => '/images/categories',
                'category_id' => 4,
            ],
            [
                'name'        => 'tablets',
                'ext'         => 'jpg',
                'path'        => '/images/categories',
                'category_id' => 5,
            ],
            [
                'name'        => 'laptops',
                'ext'         => 'jpg',
                'path'        => '/images/categories',
                'category_id' => 6,
            ],
            [
                'name'        => 'processors',
                'ext'         => 'jpg',
                'path'        => '/images/categories',
                'category_id' => 7,
            ],
            [
                'name'        => 'graphics-cards',
                'ext'         => 'jpg',
                'path'        => '/images/categories',
                'category_id' => 8,
            ],
            [
                'name'        => 'memory',
                'ext'         => 'jpg',
                'path'        => '/images/categories',
                'category_id' => 9,
            ],
            [
                'name'        => 'storage',
                'ext'         => 'jpg',
                'path'        => '/images/categories',
                'category_id' => 10,
            ],
            [
                'name'        => 'displays',
                'ext'         => 'jpg',
                'path'        => '/images/categories',
                'category_id' => 11,
            ],
            [
                'name'        => 'cases-coolers-psus',
                'ext'         => 'jpg',
                'path'        => '/images/categories',
                'category_id' => 12,
            ],
            [
                'name'        => 'peripherals',
                'ext'         => 'jpg',
                'path'        => '/images/categories',
                'category_id' => 13,
            ],
            [
                'name'        => 'network-equipment',
                'ext'         => 'jpg',
                'path'        => '/images/categories',
                'category_id' => 14,
            ],
            [
                'name'        => 'windows',
                'ext'         => 'jpg',
                'path'        => '/images/categories',
                'category_id' => 15,
            ],
            [
                'name'        => 'linux',
                'ext'         => 'jpg',
                'path'        => '/images/categories',
                'category_id' => 16,
            ],
            [
                'name'        => 'os-x',
                'ext'         => 'jpg',
                'path'        => '/images/categories',
                'category_id' => 17,
            ],
            [
                'name'        => 'android',
                'ext'         => 'jpg',
                'path'        => '/images/categories',
                'category_id' => 18,
            ],
            [
                'name'        => 'ios',
                'ext'         => 'jpg',
                'path'        => '/images/categories',
                'category_id' => 19,
            ],
            [
                'name'        => 'internet',
                'ext'         => 'jpg',
                'path'        => '/images/categories',
                'category_id' => 20,
            ],
            [
                'name'        => 'games',
                'ext'         => 'jpg',
                'path'        => '/images/categories',
                'category_id' => 21,
            ],
            [
                'name'        => 'software',
                'ext'         => 'jpg',
                'path'        => '/images/categories',
                'category_id' => 22,
            ],
        ]);
    }
}
