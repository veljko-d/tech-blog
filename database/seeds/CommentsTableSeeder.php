<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

/**
 * Class CommentsTableSeeder
 */
class CommentsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('comments')->insert([
            [
                'content'    => 'First comment on post No. 5',
                'post_id'    => '5',
                'user_id'    => 3,
                'created_at' => now(),
            ],
            [
                'content'    => 'Second comment on post No. 5',
                'post_id'    => '5',
                'user_id'    => 2,
                'created_at' => now(),
            ],
            [
                'content'    => 'First comment on post No. 2',
                'post_id'    => '2',
                'user_id'    => 5,
                'created_at' => now(),
            ],
        ]);
    }
}
