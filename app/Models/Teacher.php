<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Teacher extends Model
{
    use HasFactory;

    protected $fillable = [
        'name', 'email', 'phone', 'address', 'employee_id' , 'current_salary'
    ];

    public function courses()
    {
        return $this->belongsToMany(Course::class, 'teacher_course', 'teacher_id', 'course_id');
    }
}
