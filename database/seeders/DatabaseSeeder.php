<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
      \App\Models\User::factory(15)->create();
        $this->call([
          CourseSeeder::class,
          GradeSeeder::class,
          TeacherSeeder::class,
        ]);
        \App\Models\Student::factory(10)->create();
          $this->call(CourseScheduleSeeder::class);
      }
}
