<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
class Result extends Model
{
    use HasFactory;
    public $table="course_student";
    protected $fillable = [
        'student_id',
        'course_id',
        'semester',
        'result',
        'year'
    ];


    public function course()
   {
       return $this->belongsTo(Course::class);
   }

   public function student()
   {
       return $this->belongsTo(Student::class);
   }
}
