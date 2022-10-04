<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Console\Commands\Bootstrap;
use Illuminate\Support\Facades\Artisan;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        \App\Models\User::factory()->create([
            'name' => 'Gamer Yeah',
            'email' => 'student@codinglabs-learn.test',
        ]);

        \App\Models\Course::factory()->create([
            'name'=>'Laracast',
            'description'=>'Interactive game to learn laravel'
        ]);

        \App\Models\Course::factory()->create([
            'name'=>'Vue Raider',
            'description'=>'Interactive game to learn vue'
        ]);

        \App\Models\Course::factory()->create([
            'name'=>'Inertia',
            'description'=>'Interactive game to learn intertia'
        ]);

        Artisan::call(Bootstrap::class);
    }
}
