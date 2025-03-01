<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    protected $fillable = [
        'name',
        'email',
        'phone',
        'guardian_name',
        'guardian_phone',
        'class_id',
        'section_id',
    ];

    public function class()
    {
        return $this->belongsTo(ClassModel::class, 'class_id');
    }

    public function section()
    {
        return $this->belongsTo(Section::class, 'section_id');
    }

    public function courses()
    {
        return $this->belongsToMany(Course::class, 'student_course', 'student_id', 'course_id');
    }
}
