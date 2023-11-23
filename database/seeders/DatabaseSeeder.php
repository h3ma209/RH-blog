<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Post;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();

        \App\Models\User::factory()->create([
            'name' => 'heshar',
            'email' => 'heshar@mail.com',
            'password'=> bcrypt('1'),
        ]);
        \App\Models\User::factory()->create([
            'name' => 'ramyar',
            'email' => 'ramyar@mail.com',
            'password'=> bcrypt('1'),
        ]);
        Post::factory()->count(10)->create();
    }
}
