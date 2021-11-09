<?php

namespace Database\Seeders;

use App\Models\Grade;
use App\Models\Student;
use Illuminate\Database\Seeder;

class GradeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $y = Student::all();
        foreach ($y as $x){
          Grade::create([
            'grade'=> rand(2,6),
          ]);
        }
    }
}
