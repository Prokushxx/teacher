<?php

namespace Database\Seeders;

use App\Models\Course;
use Illuminate\Support\Facades\DB;
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
      
        DB::table('courses')->insert(
          [[
            'id'=>1,
            'course'=> 'Math',
          ],
          [
            'id'=>2,
            'course'=> 'English',
          ],
          [
            'id'=>3,
            'course'=> 'Spanish',
          ],
          [
            'id'=>4,
            'course'=> 'French',
          ]]
        );
    }
}
