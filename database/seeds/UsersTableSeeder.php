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
                'email'             => 'admin@admin.com',
                'email_verified_at' => now(),
                'password'          => Hash::make('admin123'),
                'remember_token'    => Str::random(10),
            ],
            [
                'name'              => 'Dallas',
                'email'             => 'dallas@example.com',
                'email_verified_at' => now(),
                'password'          => Hash::make('dallas123'),
                'remember_token'    => Str::random(10),
            ],
            [
                'name'              => 'Ripley',
                'email'             => 'ripley@example.com',
                'email_verified_at' => now(),
                'password'          => Hash::make('ripley123'),
                'remember_token'    => Str::random(10),
            ],
            [
                'name'              => 'Lambert',
                'email'             => 'lambert@example.com',
                'email_verified_at' => now(),
                'password'          => Hash::make('lambert123'),
                'remember_token'    => Str::random(10),
            ],
            [
                'name'              => 'Brett',
                'email'             => 'brett@example.com',
                'email_verified_at' => now(),
                'password'          => Hash::make('brett123'),
                'remember_token'    => Str::random(10),
            ],
            [
                'name'              => 'Kane',
                'email'             => 'kane@example.com',
                'email_verified_at' => now(),
                'password'          => Hash::make('kane123'),
                'remember_token'    => Str::random(10),
            ],
            [
                'name'              => 'Ash',
                'email'             => 'ash@example.com',
                'email_verified_at' => now(),
                'password'          => Hash::make('ash123'),
                'remember_token'    => Str::random(10),
            ],
            [
                'name'              => 'Parker',
                'email'             => 'parker@example.com',
                'email_verified_at' => now(),
                'password'          => Hash::make('parker123'),
                'remember_token'    => Str::random(10),
            ],
        ]);
    }
}
