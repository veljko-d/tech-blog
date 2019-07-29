<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

/**
 * Class PostTagTableSeeder
 */
class PostTagTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('post_tag')->insert([
            ['post_id' => 1, 'tag_id'  => 1],
            ['post_id' => 1, 'tag_id'  => 2],
            ['post_id' => 1, 'tag_id'  => 3],
            ['post_id' => 2, 'tag_id'  => 4],
            ['post_id' => 2, 'tag_id'  => 5],
            ['post_id' => 3, 'tag_id'  => 6],
            ['post_id' => 3, 'tag_id'  => 7],
            ['post_id' => 3, 'tag_id'  => 8],
            ['post_id' => 4, 'tag_id'  => 9],
            ['post_id' => 4, 'tag_id'  => 10],
            ['post_id' => 5, 'tag_id'  => 11],
            ['post_id' => 5, 'tag_id'  => 12],
            ['post_id' => 6, 'tag_id'  => 13],
            ['post_id' => 6, 'tag_id'  => 14],
            ['post_id' => 7, 'tag_id'  => 15],
            ['post_id' => 7, 'tag_id'  => 16],
            ['post_id' => 8, 'tag_id'  => 17],
            ['post_id' => 8, 'tag_id'  => 18],
            ['post_id' => 9, 'tag_id'  => 19],
            ['post_id' => 10, 'tag_id' => 20],
            ['post_id' => 10, 'tag_id' => 21],
            ['post_id' => 10, 'tag_id' => 22],
            ['post_id' => 11, 'tag_id' => 23],
            ['post_id' => 12, 'tag_id' => 17],
            ['post_id' => 12, 'tag_id' => 24],
            ['post_id' => 12, 'tag_id' => 25],
            ['post_id' => 12, 'tag_id' => 26],
            ['post_id' => 13, 'tag_id' => 9],
            ['post_id' => 13, 'tag_id' => 27],
            ['post_id' => 13, 'tag_id' => 28],
            ['post_id' => 13, 'tag_id' => 29],
        ]);
    }
}
