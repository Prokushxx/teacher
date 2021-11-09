<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CourseSchedule extends Model
{
    use HasFactory;

    public $timestamps = false;

  protected $fillable = [
    'teacher_id',
    'course_id',
    'grade_id',
    'time',
  ];

  public function teacher(){
    return $this->belongsTo(Teacher::class);
  }
  public function course(){
    return $this->belongsTo(Course::class);
  }
  public function grade(){
    return $this->belongsTo(Grade::class);
  }

}
