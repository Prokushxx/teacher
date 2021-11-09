<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    use HasFactory;

    protected $fillable = [
      'name',
      'email',
      'contact',
      'course_id',
      'password',
      'user_type',
    ];

    public function course(){
      $this->belongsTo(Course::class);
    }
}
