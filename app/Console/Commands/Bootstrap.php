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
        $courses = [
            [
                'name' => 'Bootcamp',
                'description' => 'Bootcamp',
                'lessons' => $lessons
            ],
            [
                'name' => 'Larascape',
                'description' => 'Interactive game to learn Laravel',
                'lessons' => $lessons
            ],
            [
                'name' => 'Vue Raider',
                'description' => 'Interactive game to learn Vue Raider',
                'lessons' => $lessons
            ],
            [
                'name' => 'Inertia',
                'description' => 'Interactive game to learn Inertia',
                'lessons' => $lessons
            ]
        ];

        foreach ($courses as $data) {
            $course = Course::firstOrCreate([
               'name' => $data['name'],
               'description' => $data['description'],
            ]);

            foreach ($data['lessons'] as $index => $lesson) {
                $course->lessons()->firstOrCreate([
                    'index' => $index + 1,
                ]);
            }
        }
        return 0;
    }
}
