<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

/**
 * Class UsersTableSeeder
 */
class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            [
                'name'              => 'Admin',
                'slug'              => 'admin',
                'email'             => 'admin@admin.com',
                'email_verified_at' => now(),
                'password'          => Hash::make('admin123'),
                'remember_token'    => Str::random(10),
                'created_at'        => now(),
            ],
            [
                'name'              => 'Dallas',
                'slug'              => 'dallas',
                'email'             => 'dallas@example.com',
                'email_verified_at' => now(),
                'password'          => Hash::make('dallas123'),
                'remember_token'    => Str::random(10),
                'created_at'        => now(),
            ],
            [
                'name'              => 'Ripley',
                'slug'              => 'ripley',
                'email'             => 'ripley@example.com',
                'email_verified_at' => now(),
                'password'          => Hash::make('ripley123'),
                'remember_token'    => Str::random(10),
                'created_at'        => now(),
            ],
            [
                'name'              => 'Lambert',
                'slug'              => 'lambert',
                'email'             => 'lambert@example.com',
                'email_verified_at' => now(),
                'password'          => Hash::make('lambert123'),
                'remember_token'    => Str::random(10),
                'created_at'        => now(),
            ],
            [
                'name'              => 'Brett',
                'slug'              => 'brett',
                'email'             => 'brett@example.com',
                'email_verified_at' => now(),
                'password'          => Hash::make('brett123'),
                'remember_token'    => Str::random(10),
                'created_at'        => now(),
            ],
            [
                'name'              => 'Kane',
                'slug'              => 'kane',
                'email'             => 'kane@example.com',
                'email_verified_at' => now(),
                'password'          => Hash::make('kane123'),
                'remember_token'    => Str::random(10),
                'created_at'        => now(),
            ],
            [
                'name'              => 'Ash',
                'slug'              => 'ash',
                'email'             => 'ash@example.com',
                'email_verified_at' => now(),
                'password'          => Hash::make('ash123'),
                'remember_token'    => Str::random(10),
                'created_at'        => now(),
            ],
            [
                'name'              => 'Parker',
                'slug'              => 'parker',
                'email'             => 'parker@example.com',
                'email_verified_at' => now(),
                'password'          => Hash::make('parker123'),
                'remember_token'    => Str::random(10),
                'created_at'        => now(),
            ],
        ]);
    }
}
