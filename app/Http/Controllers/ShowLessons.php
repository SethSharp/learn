<?php

namespace App\Http\Controllers;

use Inertia\Response;
use App\Models\Course;
use App\Models\Lesson;

class ShowLessons extends Controller
{
    public function __invoke(Course $course): Response {
        $data = [
            ['title'=>'Lesson - 1', 'desc'=>'Lesson 1 desc', 'src'=>'/images/tmpBackground_2.jfif', 'selected'=>false, 'unlocked'=>true, 'progress' => '100%'],
            ['title'=>'Lesson - 2', 'desc'=>'Lesson 2 desc', 'src'=>'/images/tmpBackground.jpg', 'selected'=>false, 'unlocked'=>true, 'progress' => '90%'],
            ['title'=>'Lesson - 3', 'desc'=>'Lesson 3 desc', 'src'=>'/images/tmpBackground.jpg', 'selected'=>false, 'unlocked'=>true, 'progress' => '0%'],
            ['title'=>'Lesson - 4', 'desc'=>'Lesson 4 desc', 'src'=>'/images/tmpBackground.jpg', 'selected'=>false, 'unlocked'=>false, 'progress' => '0%'],
        ];

        return Inertia('Lessons', [
            'lessonData' => $data,
            'courseTitle' => $course->name,
        ]);
    }
}
