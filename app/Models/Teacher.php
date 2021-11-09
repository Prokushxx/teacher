<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Teacher extends Model
{
    use HasFactory;

    protected $fillable = [
      'name',
      'email',
      'contact',
      'password',
      'user_type',
    ];

    public function course_schedlue(){
     return $this->hasMany(CourseSchedule::class);
    } 
}
