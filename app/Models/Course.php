<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Course extends Model
{
    use HasFactory;

    protected $fillable = ['name', 'description', 'credits'];

    public function classes()
    {
        return $this->belongsToMany(ClassModel::class, 'class_course', 'course_id', 'class_id');
    }

    public function teachers()
    {
        return $this->belongsToMany(Teacher::class, 'teacher_course', 'course_id', 'teacher_id');
    }

    public function students()
    {
        return $this->belongsToMany(Student::class, 'student_course', 'course_id', 'student_id');
    }
}
