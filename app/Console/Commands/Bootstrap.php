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
        $lessons = [
            [
                'name' => 'Lesson 1',
                'description' => 'Lesson 1',
            ],
            [
                'name' => 'Lesson 1b',
                'description' => 'Lesson 1b',
            ],
            [
                'name' => 'Lesson 2',
                'description' => 'Lesson 2',
            ],
            [
                'name' => 'Lesson 3',
                'description' => 'Lesson 3',
            ],
        ];
        $course = [
            'name' => 'Larascape',
            'description' => 'Interactive game to learn Laravel',
            'lessons' => $lessons
        ];

        $course = Course::firstOrCreate([
            'name' => $course['name'],
            'description' => $course['description'],
        ]);

        foreach ($lessons as $index => $lesson) {
            $course->lessons()->firstOrCreate([
                'name' => $lesson['name'],
                'description' => $lesson['description'],
                'index' => $index + 1,
            ]);
        }

        return 0;
    }
}
