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
            ['name' => 'xperia_1'],
            ['name' => '4k'],
            ['name' => 'intel'],
            ['name' => 'graphic_card'],
            ['name' => 'amd'],
            ['name' => 'cpu'],
            ['name' => 'spoiler'],
            ['name' => 'samsung'],
            ['name' => 'hbm2e'],
            ['name' => 'xiaomi'],
            ['name' => 'mi_a3'],
            ['name' => 'halo'],
            ['name' => 'master_chief'],
            ['name' => 'thunderbolt_3'],
            ['name' => 'usb4'],
            ['name' => 'microsoft'],
            ['name' => 'skype'],
            ['name' => 'www'],
            ['name' => 'world_of_warcraft'],
            ['name' => 'directx_12'],
            ['name' => 'windows_7'],
            ['name' => 'metro_exodus'],
            ['name' => 'mozilla'],
            ['name' => 'firefox'],
            ['name' => 'edge'],
        ]);
    }
}
