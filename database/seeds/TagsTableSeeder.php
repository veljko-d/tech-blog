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
            ['name' => 'sony'],
            ['name' => 'xperia-1'],
            ['name' => '4k'],
            ['name' => 'intel'],
            ['name' => 'graphic-card'],
            ['name' => 'amd'],
            ['name' => 'cpu'],
            ['name' => 'spoiler'],
            ['name' => 'samsung'],
            ['name' => 'hbm2e'],
            ['name' => 'xiaomi'],
            ['name' => 'mi-a3'],
            ['name' => 'halo'],
            ['name' => 'master-chief'],
            ['name' => 'thunderbolt-3'],
            ['name' => 'usb4'],
            ['name' => 'microsoft'],
            ['name' => 'skype'],
            ['name' => 'www'],
            ['name' => 'world-of-warcraft'],
            ['name' => 'directx-12'],
            ['name' => 'windows-7'],
            ['name' => 'metro-exodus'],
            ['name' => 'mozilla'],
            ['name' => 'firefox'],
            ['name' => 'edge'],
        ]);
    }
}
