<?php

namespace App\Console\Commands;

use App\Models\Course;
use Illuminate\Console\Command;

class Bootstrap extends Command
{
    protected $signature = 'bootstrap';
    protected $description = 'Command description';

    public function handle(): int
    {
        $course = Course::firstOrCreate([
            'name' => 'Larascape',
            'description' => 'Interactive game to learn Laravel',
        ]);

        $course->lessons()->firstOrCreate([
            'name' => 'Lesson 1',
            'description' => 'Lesson 3',
            'index' => 1,
        ]);
        return 0;
    }
}
