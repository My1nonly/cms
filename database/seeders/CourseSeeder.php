<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CourseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $course = [
            [
                'course_name' => 'basic programming',
                'sks'=> 3,
                'hour'=>6,
                'semester'=>4,
            ],
            [
                'course_name' => 'Advanced web programming',
                'sks'=> 3,
                'hour'=>6,
                'semester'=>4,
            ],
            [
                'course_name' => 'Advanced Database',
                'sks'=> 3,
                'hour'=>4,
                'semester'=>4,
            ],
            [
                'course_name' => 'software engineering',
                'sks'=> 3,
                'hour'=>6,
                'semester'=>4,
            ],
        ];

        DB::table('course')->insert($course);
    }
}
