<?php

namespace Database\Seeders;

use App\Models\User;
use GuzzleHttp\Promise\Create;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'name' => 'Rezdian', 'email' => 'rezdiany@gmail.com', 'password' => Hash::make('123456')
        ]);
        // \App\Models\User::factory(10)->create();
    }
}
