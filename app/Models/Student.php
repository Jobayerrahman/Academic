<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    use HasFactory;
    protected $fillable = [
        'student_id',
        'name',
        'surname',
        'dob',
        'year_enroll',
        'image'
    ];

    public function courses(){
        return $this->belongsToMany(Course::class);
    }
}
