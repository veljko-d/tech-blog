<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

/**
 * Class TagsTableSeeder
 */
class TagsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('tags')->insert([
            [
                'name' => 'Sony',
                'slug' => 'sony',
            ],
            [
                'name' => 'Xperia 1',
                'slug' => 'xperia-1',
            ],
            [
                'name' => '4K',
                'slug' => '4k',
            ],
            [
                'name' => 'Intel',
                'slug' => 'intel',
            ],
            [
                'name' => 'Graphics Card',
                'slug' => 'graphics-card',
            ],
            [
                'name' => 'AMD',
                'slug' => 'amd',
            ],
            [
                'name' => 'CPU',
                'slug' => 'cpu',
            ],
            [
                'name' => 'Spoiler',
                'slug' => 'spoiler',
            ],
            [
                'name' => 'Samsung',
                'slug' => 'samsung',
            ],
            [
                'name' => 'HBM2E',
                'slug' => 'hbm2e',
            ],
            [
                'name' => 'Xiaomi',
                'slug' => 'xiaomi',
            ],
            [
                'name' => 'Mi A3',
                'slug' => 'mi-a3',
            ],
            [
                'name' => 'Halo',
                'slug' => 'halo',
            ],
            [
                'name' => 'Master Chief',
                'slug' => 'master-chief',
            ],
            [
                'name' => 'Thunderbolt 3',
                'slug' => 'thunderbolt-3',
            ],
            [
                'name' => 'USB4',
                'slug' => 'usb4',
            ],
            [
                'name' => 'Microsoft',
                'slug' => 'microsoft',
            ],
            [
                'name' => 'Skype',
                'slug' => 'skype',
            ],
            [
                'name' => 'World Wide Web',
                'slug' => 'world-wide-web',
            ],
            [
                'name' => 'World of Warcraft',
                'slug' => 'world-of-warcraft',
            ],
            [
                'name' => 'DirectX 12',
                'slug' => 'directx-12',
            ],
            [
                'name' => 'Windows 7',
                'slug' => 'windows-7',
            ],
            [
                'name' => 'Metro Exodus',
                'slug' => 'metro-exodus',
            ],
            [
                'name' => 'Mozilla',
                'slug' => 'mozilla',
            ],
            [
                'name' => 'Firefox',
                'slug' => 'firefox',
            ],
            [
                'name' => 'Edge',
                'slug' => 'edge',
            ],
        ]);
    }
}
