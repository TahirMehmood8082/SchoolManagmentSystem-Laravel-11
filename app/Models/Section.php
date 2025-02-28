<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Section extends Model
{
    protected $table = 'sections';
    public function students()
    {
        return $this->hasMany(Student::class, 'section_id');
    }
}
