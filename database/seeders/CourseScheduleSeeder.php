<?php

namespace Database\Seeders;

use App\Models\CourseSchedule;
use App\Models\User;
use DateTime;
use Illuminate\Database\Seeder;

class CourseScheduleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $x = User::all();
        foreach ($x as $y){
          CourseSchedule::create([
            'teacher_id' => rand(1,10),
            'course_id' => rand(1,4),
            'grade_id' => rand(1,10),
          ]);
        }
    }
}
