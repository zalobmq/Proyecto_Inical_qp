<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;
class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        DB::table('users')->insert([
            [

                'name' => 'user1',
                'email' => 'user1@email.com',
                'email_verified_at' => null,
                'password' => '1234',
                'remember_token' => Str::random(10),
            ],[
                'name' => 'user2',
                'email' => 'user2@email.com',
                'email_verified_at' => null,
                'password' => '1234',
                'remember_token' => Str::random(10),

            ],
        ]);
    }
}
