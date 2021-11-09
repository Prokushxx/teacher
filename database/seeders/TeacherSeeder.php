<?php

namespace Database\Seeders;

use App\Models\Teacher;
use Illuminate\Database\Seeder;
use App\Models\User;

class TeacherSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $well = User::where('user_type', '=',2);
        foreach ($well as $s) {
          Teacher::create([
            'name' => $s->name,
            'email' => $s->email,
            'contact' => 5654345678,
            'password' => $s->password,
          ]);
        }
    }
}
